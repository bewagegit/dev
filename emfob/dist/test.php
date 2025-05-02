<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Register</h2>
    <form id="registrationForm" action="register.php" method="POST">
        <div class="mb-3">
            <label for="userType" class="form-label">User Type</label>
            <select id="userType" name="userType" class="form-select" required>
                <option value="">Select User Type</option>
                <option value="candidate">Candidate</option>
                <option value="employer">Employer</option>
                <option value="freelancer">Freelancer</option>
                <option value="consultancy">Consultancy</option>
            </select>
        </div>

        <!-- Common Fields -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
        </div>

        <!-- Dynamic Fields -->
        <div id="dynamicFields"></div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#userType').change(function() {
            let userType = $(this).val();
            let dynamicFields = $('#dynamicFields');
            dynamicFields.empty();

            if (userType === "candidate") {
                dynamicFields.append(`
                    <div class="mb-3">
                        <label for="candidateName" class="form-label">Candidate Name</label>
                        <input type="text" class="form-control" id="candidateName" name="candidateName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Are you a Fresher or Experienced?</label>
                        <div>
                            <input type="radio" id="fresher" name="experience" value="fresher" required>
                            <label for="fresher">Fresher</label>
                        </div>
                        <div>
                            <input type="radio" id="experienced" name="experience" value="experienced" required>
                            <label for="experienced">Experienced</label>
                        </div>
                    </div>
                `);
            } else if (userType === "employer") {
                dynamicFields.append(`
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="companyName" name="companyName" required>
                    </div>
                    <div class="mb-3">
                        <label for="companyWebsite" class="form-label">Company Website</label>
                        <input type="url" class="form-control" id="companyWebsite" name="companyWebsite" required>
                    </div>
                `);
            } else if (userType === "freelancer") {
                dynamicFields.append(`
                    <div class="mb-3">
                        <label for="freelancerName" class="form-label">Your Full Name</label>
                        <input type="text" class="form-control" id="freelancerName" name="freelancerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="portfolioLink" class="form-label">Portfolio Link</label>
                        <input type="url" class="form-control" id="portfolioLink" name="portfolioLink" required>
                    </div>
                `);
            } else if (userType === "consultancy") {
                dynamicFields.append(`
                    <div class="mb-3">
                        <label for="consultancyName" class="form-label">Consultancy Name</label>
                        <input type="text" class="form-control" id="consultancyName" name="consultancyName" required>
                    </div>
                    <div class="mb-3">
                        <label for="websiteLink" class="form-label">Website Link</label>
                        <input type="url" class="form-control" id="websiteLink" name="websiteLink" required>
                    </div>
                `);
            }
        });
    });
</script>
</body>
</html>
