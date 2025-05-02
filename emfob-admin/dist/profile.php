<!doctype html>
<?php include "header.php" ?>
<style>
    #stepper .step-number {
        font-weight: bold;
        margin-right: 10px;
    }

    #stepper .list-group-item {
        border: none;
        border-left: 4px solid transparent;
    }

    #stepper .list-group-item.active {
        border-left: 4px solid #007bff;
    }

    .step-number {
        font-size: 16px;
    }

    .step-label {
        margin-left: 10px;
    }

    .fa-arrow-right {
        font-size: 18px;
        color: #007bff;
    }
</style>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Profile page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                                <li class="breadcrumb-item active">Profile page</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Main Content Starts Here-->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Candidate Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Stepper -->
                                    <div class="col-md-3">
                                        <ul class="list-group" id="stepper">
                                            <li class="list-group-item active" id="step-1" data-step="0">
                                                <div class="d-flex align-items-center">
                                                    <div class="step-number">Step 1</div>
                                                    <div class="step-label">
                                                        <strong>Personal Information</strong><br>
                                                        <small>Details about you</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item" id="step-2" data-step="1">
                                                <div class="d-flex align-items-center">
                                                    <div class="step-number">Step 2</div>
                                                    <div class="step-label">
                                                        <strong>Professional Details</strong><br>
                                                        <small>Your work experience</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item" id="step-3" data-step="2">
                                                <div class="d-flex align-items-center">
                                                    <div class="step-number">Step 3</div>
                                                    <div class="step-label">
                                                        <strong>Education & Certifications</strong><br>
                                                        <small>Your qualifications</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item" id="step-4" data-step="3">
                                                <div class="d-flex align-items-center">
                                                    <div class="step-number">Step 4</div>
                                                    <div class="step-label">
                                                        <strong>Resume & Preferences</strong><br>
                                                        <small>Upload resume & job preferences</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Form Section -->
                                    <div class="col-md-9">
                                        <form id="candidateForm">
                                            <!-- Step 1: Personal Information -->
                                            <div class="form-step" id="form-step-1" style="display: none;">
                                                <!-- Personal Information -->
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="fullName" class="form-label">Full Name:</label>
                                                        <input type="text" class="form-control" id="fullName"
                                                            placeholder="Enter Your Full Name" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="gender" class="form-label">Gender:</label>
                                                        <select class="form-control" id="gender" required>
                                                            <option value="" disabled selected>Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="non-binary">Non-Binary</option>
                                                            <option value="prefer-not-to-say">Prefer not to say</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="dob" class="form-label">Date of Birth:</label>
                                                        <input type="date" class="form-control" id="dob" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="nationality" class="form-label">Nationality:</label>
                                                        <select class="form-control" id="nationality" required>
                                                            <option value="" disabled selected>Select Nationality
                                                            </option>
                                                            <option value="Indian">Indian</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="contactNumber" class="form-label">Contact
                                                            Number:</label>
                                                        <input type="tel" class="form-control" id="contactNumber"
                                                            placeholder="Enter Your Contact Number" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="emailAddress" class="form-label">Email
                                                            Address:</label>
                                                        <input type="email" class="form-control" id="emailAddress"
                                                            placeholder="Enter Your Email Address" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="address" class="form-label">Residential
                                                            Address:</label>
                                                        <input type="text" class="form-control" id="address"
                                                            placeholder="Enter Your Address" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="socialMediaProfiles" class="form-label">Social Media
                                                            Profiles (Optional):</label>
                                                        <input type="url" class="form-control" id="linkedin"
                                                            placeholder="LinkedIn URL">
                                                        <input type="url" class="form-control mt-2" id="github"
                                                            placeholder="GitHub URL">
                                                        <input type="url" class="form-control mt-2" id="twitter"
                                                            placeholder="Twitter URL">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="maritalStatus" class="form-label">Marital
                                                            Status:</label>
                                                        <select class="form-control" id="maritalStatus" required>
                                                            <option value="" disabled selected>Select Marital Status
                                                            </option>
                                                            <option value="single">Single</option>
                                                            <option value="married">Married</option>
                                                            <option value="divorced">Divorced</option>
                                                            <option value="widowed">Widowed</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="preferredCommMethod" class="form-label">Preferred
                                                            Communication Method:</label>
                                                        <select class="form-control" id="preferredCommMethod" required>
                                                            <option value="" disabled selected>Select Communication
                                                                Method</option>
                                                            <option value="email">Email</option>
                                                            <option value="phone">Phone Call</option>
                                                            <option value="sms">SMS</option>
                                                            <option value="whatsapp">WhatsApp</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="emergencyContact" class="form-label">Emergency
                                                            Contact:</label>
                                                        <input type="text" class="form-control" id="emergencyContact"
                                                            placeholder="Emergency Contact Name">
                                                        <input type="tel" class="form-control mt-2"
                                                            id="emergencyContactNumber"
                                                            placeholder="Emergency Contact Number">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="languagesSpoken" class="form-label">Languages
                                                            Spoken:</label>
                                                        <input type="text" class="form-control" id="languagesSpoken"
                                                            placeholder="Enter Languages Spoken">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="hobbiesInterests" class="form-label">Hobbies and
                                                            Interests:</label>
                                                        <textarea class="form-control" id="hobbiesInterests" rows="3"
                                                            placeholder="Share your hobbies and interests"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="profilePicture" class="form-label">Upload Profile
                                                            Picture:</label>
                                                        <input type="file" class="form-control" id="profilePicture">
                                                    </div>
                                                </div>
                                                <!-- Navigation Buttons -->
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        id="prevStep1">Previous</button>
                                                    <button type="button" class="btn btn-primary"
                                                        id="nextStep1">Next</button>
                                                </div>
                                            </div>


                                            <!-- Step 2: Professional Details -->
                                            <div class="form-step" id="form-step-2" style="display: none;">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="jobTitle" class="form-label">Current Job
                                                            Title:</label>
                                                        <input type="text" class="form-control" id="jobTitle"
                                                            placeholder="Enter Current Job Title" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="companyName" class="form-label">Company
                                                            Name:</label>
                                                        <input type="text" class="form-control" id="companyName"
                                                            placeholder="Enter Company Name" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="totalExperience" class="form-label">Total Work
                                                            Experience:</label>
                                                        <select class="form-control" id="totalExperience" required>
                                                            <option value="" disabled selected>Select Experience
                                                            </option>
                                                            <option value="fresher">Fresher</option>
                                                            <option value="1-2">1-2 Years</option>
                                                            <option value="3-5">3-5 Years</option>
                                                            <option value="5-10">5-10 Years</option>
                                                            <option value="10+">10+ Years</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="jobLocation" class="form-label">Current Job
                                                            Location:</label>
                                                        <input type="text" class="form-control" id="jobLocation"
                                                            placeholder="Enter Job Location">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="noticePeriod" class="form-label">Notice
                                                            Period:</label>
                                                        <select class="form-control" id="noticePeriod">
                                                            <option value="" disabled selected>Select Notice Period
                                                            </option>
                                                            <option value="immediate">Immediate</option>
                                                            <option value="15-days">15 Days</option>
                                                            <option value="30-days">30 Days</option>
                                                            <option value="60-days">60 Days</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="employmentType" class="form-label">Employment
                                                            Type:</label>
                                                        <select class="form-control" id="employmentType">
                                                            <option value="" disabled selected>Select Employment Type
                                                            </option>
                                                            <option value="full-time">Full-Time</option>
                                                            <option value="part-time">Part-Time</option>
                                                            <option value="freelance">Freelance</option>
                                                            <option value="contract">Contract</option>
                                                            <option value="internship">Internship</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="skills" class="form-label">Key Skills:</label>
                                                        <input type="text" class="form-control" id="skills"
                                                            placeholder="Enter Your Key Skills (e.g., Java, Marketing)">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="jobResponsibilities" class="form-label">Key
                                                            Responsibilities:</label>
                                                        <textarea class="form-control" id="jobResponsibilities" rows="3"
                                                            placeholder="Describe your job responsibilities"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="achievements" class="form-label">Key
                                                            Achievements:</label>
                                                        <textarea class="form-control" id="achievements" rows="3"
                                                            placeholder="Mention your significant achievements"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="previousJobTitle" class="form-label">Previous Job
                                                            Title:</label>
                                                        <input type="text" class="form-control" id="previousJobTitle"
                                                            placeholder="Enter Previous Job Title">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="previousCompanyName" class="form-label">Previous
                                                            Company Name:</label>
                                                        <input type="text" class="form-control" id="previousCompanyName"
                                                            placeholder="Enter Previous Company Name">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="previousDurationFrom" class="form-label">Previous
                                                            Job Duration (From):</label>
                                                        <input type="date" class="form-control"
                                                            id="previousDurationFrom">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="previousDurationTo" class="form-label">Previous Job
                                                            Duration (To):</label>
                                                        <input type="date" class="form-control" id="previousDurationTo">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        id="prevStep2">Previous</button>
                                                    <button type="button" class="btn btn-primary"
                                                        id="nextStep2">Next</button>
                                                </div>
                                            </div>


                                            <!-- Step 3: Education & Certifications -->
                                            <div class="form-step" id="form-step-3" style="display: none;">
                                                <!-- Educational Qualifications -->
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="highestQualification" class="form-label">Highest
                                                            Qualification:</label>
                                                        <select class="form-control" id="highestQualification">
                                                            <option value="" disabled selected>Select Qualification
                                                            </option>
                                                            <option value="high-school">High School</option>
                                                            <option value="diploma">Diploma</option>
                                                            <option value="bachelors">Bachelor's</option>
                                                            <option value="masters">Master's</option>
                                                            <option value="phd">Doctorate (PhD)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="fieldOfStudy" class="form-label">Field of
                                                            Study:</label>
                                                        <input type="text" class="form-control" id="fieldOfStudy"
                                                            placeholder="Enter Field of Study (e.g., Computer Science)">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="institution"
                                                            class="form-label">Institution/University Name:</label>
                                                        <input type="text" class="form-control" id="institution"
                                                            placeholder="Enter Institution Name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="graduationYear" class="form-label">Year of
                                                            Graduation:</label>
                                                        <input type="date" class="form-control" id="graduationYear">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="degreeDetails" class="form-label">Degree
                                                            Details:</label>
                                                        <textarea class="form-control" id="degreeDetails" rows="3"
                                                            placeholder="Additional degree information (e.g., major, honors)"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="gradePercentage"
                                                            class="form-label">Grade/Percentage:</label>
                                                        <input type="text" class="form-control" id="gradePercentage"
                                                            placeholder="Enter Grade or Percentage">
                                                    </div>
                                                </div>

                                                <!-- Certifications -->
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="certification" class="form-label">Certification
                                                            Title:</label>
                                                        <input type="text" class="form-control" id="certification"
                                                            placeholder="Enter Certification Title">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="issuingOrganization" class="form-label">Issuing
                                                            Organization:</label>
                                                        <input type="text" class="form-control" id="issuingOrganization"
                                                            placeholder="Enter Organization Name">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="certificationDate" class="form-label">Completion
                                                            Date:</label>
                                                        <input type="date" class="form-control" id="certificationDate">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="certificationLink" class="form-label">Certificate
                                                            Link:</label>
                                                        <input type="url" class="form-control" id="certificationLink"
                                                            placeholder="Enter the link to your certificate (if available)">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="uploadCertificate" class="form-label">Upload
                                                            Certification:</label>
                                                        <input type="file" class="form-control" id="uploadCertificate">
                                                    </div>
                                                </div>

                                                <!-- Additional Information -->
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="academicAchievements" class="form-label">Academic
                                                            Achievements:</label>
                                                        <textarea class="form-control" id="academicAchievements"
                                                            rows="3"
                                                            placeholder="Mention any academic awards, scholarships, or honors received."></textarea>
                                                    </div>
                                                </div>

                                                <!-- Navigation Buttons -->
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        id="prevStep3">Previous</button>
                                                    <button type="button" class="btn btn-primary"
                                                        id="nextStep3">Next</button>
                                                </div>
                                            </div>
                                            <!-- #region -->


                                            <!-- Step 4: Resume & Preferences -->
                                            <div class="form-step" id="form-step-4" style="display: none;">
                                                <!-- Resume & Preferences -->
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="resumeUpload" class="form-label">Upload
                                                            Resume:</label>
                                                        <input type="file" class="form-control" id="resumeUpload"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="preferredJobTitle" class="form-label">Preferred Job
                                                            Title/Role:</label>
                                                        <input type="text" class="form-control" id="preferredJobTitle"
                                                            placeholder="Enter your preferred job title" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="preferredJobLocation" class="form-label">Preferred
                                                            Job Location:</label>
                                                        <input type="text" class="form-control"
                                                            id="preferredJobLocation"
                                                            placeholder="Enter your preferred location" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="employmentType" class="form-label">Preferred
                                                            Employment Type:</label>
                                                        <select class="form-control" id="employmentType" required>
                                                            <option value="" disabled selected>Select Employment Type
                                                            </option>
                                                            <option value="full-time">Full-time</option>
                                                            <option value="part-time">Part-time</option>
                                                            <option value="freelance">Freelance</option>
                                                            <option value="contract">Contract</option>
                                                            <option value="internship">Internship</option>
                                                            <option value="remote">Remote</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="preferredSalaryRange" class="form-label">Preferred
                                                            Salary Range:</label>
                                                        <input type="text" class="form-control"
                                                            id="preferredSalaryRange"
                                                            placeholder="Enter your expected salary range" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="willingnessToRelocate"
                                                            class="form-label">Willingness to Relocate:</label>
                                                        <select class="form-control" id="willingnessToRelocate"
                                                            required>
                                                            <option value="" disabled selected>Select Relocation
                                                                Preference</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                            <option value="maybe">Maybe</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="expectedJoiningDate" class="form-label">Expected
                                                            Joining Date:</label>
                                                        <input type="date" class="form-control" id="expectedJoiningDate"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="noticePeriod" class="form-label">Notice Period (if
                                                            applicable):</label>
                                                        <input type="text" class="form-control" id="noticePeriod"
                                                            placeholder="Enter notice period (e.g., 30 days)">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="skillsKeywords"
                                                            class="form-label">Skills/Keywords:</label>
                                                        <input type="text" class="form-control" id="skillsKeywords"
                                                            placeholder="Enter skills or keywords for your profile"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="jobPreferences" class="form-label">Additional Job
                                                            Preferences:</label>
                                                        <textarea class="form-control" id="jobPreferences" rows="3"
                                                            placeholder="Any additional preferences related to job type, location, or benefits."></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="coverLetter" class="form-label">Cover Letter
                                                            (Optional):</label>
                                                        <textarea class="form-control" id="coverLetter" rows="3"
                                                            placeholder="Provide a brief cover letter if you wish."></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label for="portfolio" class="form-label">Portfolio/Work Samples
                                                            (Optional):</label>
                                                        <input type="url" class="form-control" id="portfolio"
                                                            placeholder="Enter the URL to your portfolio or work samples">
                                                    </div>
                                                </div>

                                                <!-- Navigation and Submit Buttons -->
                                                <div class="d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        id="prevStep4">Previous</button>
                                                    <button type="submit" class="btn btn-success" id="submitForm">Submit
                                                        Application</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Main Content Ends Here-->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Emfob.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Emfob.com/"
                            target="_blank" class="text-muted">Emfob</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<div class="custom-setting bg-primary pe-0 d-flex flex-column rounded-start">
    <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm rounded-end-0" id="light-dark-mode">
        <i class="mdi mdi-brightness-7 align-middle"></i>
        <i class="mdi mdi-white-balance-sunny align-middle"></i>
    </button>
    <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm" data-toggle="fullscreen">
        <i class="mdi mdi-arrow-expand-all align-middle"></i>
    </button>
    <button type="button" class="btn btn-wide border-0 text-white fs-16 avatar-sm" id="layout-dir-btn">
        <span>RTL</span>
    </button>
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<script src="assets/js/app.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const steps = document.querySelectorAll('.form-step');
        const stepperItems = document.querySelectorAll('#stepper li');

        let currentStep = 0;

        // Function to show a step
        function showStep(step) {
            steps.forEach((stepElement, index) => {
                if (index === step) {
                    stepElement.style.display = 'block';
                    stepperItems[index].classList.add('active');
                } else {
                    stepElement.style.display = 'none';
                    stepperItems[index].classList.remove('active');
                }
            });
        }

        // Make stepper clickable
        stepperItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                currentStep = index;
                showStep(currentStep);
            });
        });

        // Next buttons
        document.getElementById('nextStep1').addEventListener('click', () => {
            currentStep++;
            showStep(currentStep);
        });

        document.getElementById('nextStep2').addEventListener('click', () => {
            currentStep++;
            showStep(currentStep);
        });

        document.getElementById('nextStep3').addEventListener('click', () => {
            currentStep++;
            showStep(currentStep);
        });

        // Previous buttons
        document.getElementById('prevStep2').addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

        document.getElementById('prevStep3').addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

        document.getElementById('prevStep4').addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

        // Initialize first step
        showStep(currentStep);
    });


</script>

<script>
    // Add this JavaScript code after your HTML form

    document.addEventListener('DOMContentLoaded', function () {
        const candidateForm = document.getElementById('candidateForm');

        // Function to handle form submission
        async function handleFormSubmit(event) {
            event.preventDefault();

            // Create FormData object
            const formData = new FormData();

            // Add all form fields to FormData
            // Personal Information
            formData.append('full_name', document.getElementById('fullName').value);
            formData.append('gender', document.getElementById('gender').value);
            formData.append('date_of_birth', document.getElementById('dob').value);
            formData.append('nationality', document.getElementById('nationality').value);
            formData.append('contact_number', document.getElementById('contactNumber').value);
            formData.append('email_address', document.getElementById('emailAddress').value);
            formData.append('residential_address', document.getElementById('address').value);
            formData.append('linkedin_url', document.getElementById('linkedin').value);
            formData.append('github_url', document.getElementById('github').value);
            formData.append('twitter_url', document.getElementById('twitter').value);
            formData.append('marital_status', document.getElementById('maritalStatus').value);
            formData.append('preferred_comm_method', document.getElementById('preferredCommMethod').value);
            formData.append('emergency_contact_name', document.getElementById('emergencyContact').value);
            formData.append('emergency_contact_number', document.getElementById('emergencyContactNumber').value);
            formData.append('languages_spoken', document.getElementById('languagesSpoken').value);
            formData.append('hobbies_interests', document.getElementById('hobbiesInterests').value);

            // Handle file uploads
            const profilePicture = document.getElementById('profilePicture').files[0];
            if (profilePicture) {
                formData.append('profile_picture', profilePicture);
            }

            // Professional Details
            formData.append('current_job_title', document.getElementById('jobTitle').value);
            formData.append('company_name', document.getElementById('companyName').value);
            formData.append('total_experience', document.getElementById('totalExperience').value);
            formData.append('job_location', document.getElementById('jobLocation').value);
            formData.append('notice_period', document.getElementById('noticePeriod').value);
            formData.append('employment_type', document.getElementById('employmentType').value);
            formData.append('key_skills', document.getElementById('skills').value);
            formData.append('job_responsibilities', document.getElementById('jobResponsibilities').value);
            formData.append('achievements', document.getElementById('achievements').value);
            formData.append('previous_job_title', document.getElementById('previousJobTitle').value);
            formData.append('previous_company_name', document.getElementById('previousCompanyName').value);
            formData.append('previous_duration_from', document.getElementById('previousDurationFrom').value);
            formData.append('previous_duration_to', document.getElementById('previousDurationTo').value);

            // Education & Certifications
            formData.append('highest_qualification', document.getElementById('highestQualification').value);
            formData.append('field_of_study', document.getElementById('fieldOfStudy').value);
            formData.append('institution_name', document.getElementById('institution').value);
            formData.append('graduation_year', document.getElementById('graduationYear').value);
            formData.append('degree_details', document.getElementById('degreeDetails').value);
            formData.append('grade_percentage', document.getElementById('gradePercentage').value);
            formData.append('academic_achievements', document.getElementById('academicAchievements').value);

            // Handle certificate file
            const certificateFile = document.getElementById('uploadCertificate').files[0];
            if (certificateFile) {
                formData.append('certificate_file', certificateFile);
            }

            // Resume & Preferences
            const resumeFile = document.getElementById('resumeUpload').files[0];
            if (resumeFile) {
                formData.append('resume_file', resumeFile);
            }

            formData.append('preferred_job_title', document.getElementById('preferredJobTitle').value);
            formData.append('preferred_job_location', document.getElementById('preferredJobLocation').value);
            formData.append('preferred_salary_range', document.getElementById('preferredSalaryRange').value);
            formData.append('willingness_to_relocate', document.getElementById('willingnessToRelocate').value);
            formData.append('expected_joining_date', document.getElementById('expectedJoiningDate').value);
            formData.append('additional_preferences', document.getElementById('jobPreferences').value);
            formData.append('cover_letter', document.getElementById('coverLetter').value);
            formData.append('portfolio_url', document.getElementById('portfolio').value);

            try {
                const response = await fetch('../dist/backend/save-candidate-profile.php', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    const result = await response.json();
                    alert('Profile saved successfully!');
                    // Redirect or show success message
                } else {
                    throw new Error('Failed to save profile');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to save profile. Please try again.');
            }
        }

        // Add form submit event listener
        candidateForm.addEventListener('submit', handleFormSubmit);
    });
</script>

</body>

</html>