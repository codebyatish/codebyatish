<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            position: fixed;
            height: 100%;
            background: #343a40;
            padding-top: 20px;
        }
        .sidebar .admin-info {
            text-align: center;
            padding-bottom: 10px;
            color: #fff;
            font-weight: bold;
        }
        .sidebar hr {
            margin: 10px 15px;
            border-color: #6c757d;
        }
        .sidebar a {
            padding: 12px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ffffff;
            display: block;
            transition: 0.3s ease;
        }
        .sidebar a:hover {
            background: #495057;
            color: #fff;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .navbar {
            background: #007bff;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-light">Admin Panel</h4>
        <div class="admin-info">
            <p>Welcome, <?php echo Yii::app()->user->getState('user_name'); ?></p>
        </div>
        <hr>
        <a href="<?php echo Yii::app()->createUrl('admin/dashboard'); ?>">Dashboard</a>
        <?php if (Yii::app()->user->getState('user_role') == 'admin') { ?>
        <a href="<?php echo Yii::app()->createUrl('user/index'); ?>">Users</a>
        <?php } ?>
        <a href="<?php echo Yii::app()->createUrl('task/index'); ?>">Tasks</a>
        <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>" class="text-danger">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
        </nav>

        <div class="container mt-4">
            <?php echo $content; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
