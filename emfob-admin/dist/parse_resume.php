<?php
require '../vendor/autoload.php';

use Smalot\PdfParser\Parser;

function extractPDFText($filePath) {
    $parser = new Parser();
    $pdf = $parser->parseFile($filePath);
    return $pdf->getText();
}

header('Content-Type: application/json');

if ($_FILES['resumeFile']['error'] == 0) {
    $fileType = mime_content_type($_FILES['resumeFile']['tmp_name']);
    $filePath = 'assets/uploads/' . basename($_FILES['resumeFile']['name']);
    move_uploaded_file($_FILES['resumeFile']['tmp_name'], $filePath);

    $text = '';
    if ($fileType == 'application/pdf') {
        try {
            $text = extractPDFText($filePath);
        } catch (Exception $e) {
            echo json_encode(["error" => "PDF Parsing error: " . $e->getMessage()]);
            exit();
        }
    } elseif ($fileType == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
        try {
            $text = extractDocxText($filePath);
        } catch (Exception $e) {
            echo json_encode(["error" => "DOCX Parsing error: " . $e->getMessage()]);
            exit();
        }
    } else {
        echo json_encode(["error" => "Invalid file type"]);
        exit();
    }

    if (empty($text)) {
        echo json_encode(["error" => "No text extracted from file."]);
        exit();
    } else {
        // Initialize extracted data
        $extractedData = [
            "name" => "",
            "email" => "",
            "phone" => "",
            "experience" => [],
            "education" => [],
            "skills" => [],
            "certifications" => [],
            "projects" => []
        ];

        // Name extraction (Top few lines)
        $lines = explode("\n", $text);
        foreach ($lines as $line) {
            $line = trim($line);
            if (preg_match('/^([A-Z]+\s+){2,}[A-Z]+$/', $line)) {
                $extractedData["name"] = $line;
                break;
            }
        }

        // Email and phone extraction
        $extractedData["email"] = preg_match('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $text, $matches) ? $matches[0] : '';
        $extractedData["phone"] = preg_match('/\+?\d[\d -]{8,12}\d/', $text, $matches) ? $matches[0] : '';

        // Experience extraction
        if (preg_match_all('/([A-Za-z ]+)\s+((Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)[a-z]*\s+\d{4})\s*-\s*((Present|\d{4})?)/', $text, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $extractedData["experience"][] = [
                    'position' => trim($match[1]),
                    'start_date' => trim($match[2]),
                    'end_date' => trim($match[4]),
                ];
            }
        }

        // Education extraction
        if (preg_match('/EDUCATION(.*?)(SKILLS|COURSES)/si', $text, $educationSection)) {
            preg_match_all('/([A-Za-z ]+)\s*(\d{4}-\d{4})/', $educationSection[1], $eduMatches, PREG_SET_ORDER);
            foreach ($eduMatches as $edu) {
                $extractedData["education"][] = [
                    'institution' => trim($edu[1]),
                    'duration' => trim($edu[2]),
                ];
            }
        }

        // Skills extraction
        if (preg_match('/SKILLS(.*?)(COURSES|PROJECTS|CERTIFICATION)/si', $text, $skillsSection)) {
            $skillsList = explode("\n", trim($skillsSection[1]));
            foreach ($skillsList as $skill) {
                $skill = trim($skill);
                if (!empty($skill)) {
                    $extractedData["skills"][] = $skill;
                }
            }
        }

        // Certifications extraction
        if (preg_match('/CERTIFICATION(.*?)(PROJECTS|WORK EXPERIENCE)/si', $text, $certSection)) {
            $certificationsList = explode("\n", trim($certSection[1]));
            foreach ($certificationsList as $cert) {
                $cert = trim($cert);
                if (!empty($cert)) {
                    $extractedData["certifications"][] = $cert;
                }
            }
        }

        // Projects extraction
        if (preg_match('/PROJECTS(.*?)(CERTIFICATION|WORK EXPERIENCE)/si', $text, $projectsSection)) {
            $projectsList = explode("\n", trim($projectsSection[1]));
            foreach ($projectsList as $project) {
                $project = trim($project);
                if (!empty($project)) {
                    $extractedData["projects"][] = $project;
                }
            }
        }

        echo json_encode($extractedData);
    }

    unlink($filePath);
} else {
    echo json_encode(["error" => "Failed to upload file"]);
}
?>
