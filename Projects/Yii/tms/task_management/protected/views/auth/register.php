<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex justify-content-center">
    <div class="card shadow p-4" style="width: 100%; max-width: 600px;">
        <h3 class="text-center">Register</h3>

        <!-- Success Message -->
        <?php if (Yii::app()->user->hasFlash('success')): ?>
            <div class="alert alert-success"><?php echo Yii::app()->user->getFlash('success'); ?></div>
        <?php endif; ?>

        <div id="error-message" class="alert alert-danger d-none"></div>

        <form id="register-form" action="<?php echo Yii::app()->createUrl('auth/register'); ?>" method="POST" onsubmit="return validateForm()">
            <input type="hidden" name="YII_CSRF_TOKEN" value="<?php echo Yii::app()->request->csrfToken; ?>">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your first name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your last name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter your phone number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Enter confirm password">
                    </div>
                </div>
            </div>

            <button type="submit" name="register_user" class="btn btn-primary w-100">Register</button>

            <div class="text-center mt-3">
                <p>Already have an account? <a href="<?php echo Yii::app()->createUrl('auth/login'); ?>">Login here</a></p>
            </div>
        </form>
    </div>
</div>
<script>
function validateForm() {
    let firstName = document.getElementById("first_name").value.trim();
    let lastName = document.getElementById("last_name").value.trim();
    let phone = document.getElementById("phone_number").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    let confirmPassword = document.getElementById("confirm_password").value.trim();
    let errorMessage = document.getElementById("error-message");

    let phoneRegex = /^[0-9]\d{9}$/;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (firstName === "") {
        showError("First Name are required.");
        return false;
    }else if(lastName === ""){
        showError("Last Name are required.");
        return false;
    }else if (!phoneRegex.test(phone)) {
        showError("Invalid mobile format [10 Digit].");
        return false;
    } else if (!emailRegex.test(email)) {
        showError("Invalid email format.");
        return false;
    }else if(password === ""){
        showError("Password are required.");
        return false;
    } else if (password !== confirmPassword) {
        showError("Passwords do not match.");
        return false;
    } else {
        errorMessage.classList.add("d-none");
        return true;
    }
}

function showError(message) {
    let errorMessage = document.getElementById("error-message");
    errorMessage.textContent = message;
    errorMessage.classList.remove("d-none");
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
