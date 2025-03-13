<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex justify-content-center">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center">Login</h3>

        <!-- Success Message -->
        <?php if (Yii::app()->user->hasFlash('success')): ?>
            <div class="alert alert-success"><?php echo Yii::app()->user->getFlash('success'); ?></div>
        <?php endif; ?>

        <!-- Error Message -->
        <?php if (Yii::app()->user->hasFlash('error')): ?>
            <div class="alert alert-danger"><?php echo Yii::app()->user->getFlash('error'); ?></div>
        <?php endif; ?>

        <form id="login-form" action="<?php echo Yii::app()->createUrl('auth/login'); ?>" method="POST">
            <input type="hidden" name="YII_CSRF_TOKEN" value="<?php echo Yii::app()->request->csrfToken; ?>">

            <div class="mb-3 mt-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <div class="text-center mt-3">
                <p>Don't have an account? <a href="<?php echo Yii::app()->createUrl('auth/register'); ?>">Register here</a></p>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
