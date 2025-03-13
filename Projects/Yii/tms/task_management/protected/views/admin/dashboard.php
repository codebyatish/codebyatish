<div class="row">
<?php if (Yii::app()->user->getState('user_role') == 'admin') { ?>
    <div class="col-md-4">
        <div class="card shadow-sm border-secondary">
            <div class="card-header bg-primary text-white d-flex align-items-center">
                <i class="bi bi-people-fill me-2"></i> Users
            </div>
            <div class="card-body text-center">
                <h4 class="fw-bold">Total Users:</h4>
                <p class="fs-4 text-primary"><?php echo $totalUsers; ?></p>
            </div>
        </div>
    </div>
<?php } ?>
    <div class="col-md-4">
        <div class="card shadow-sm border-success">
            <div class="card-header bg-success text-white d-flex align-items-center">
                <i class="bi bi-list-task me-2"></i> Tasks
            </div>
            <div class="card-body text-center">
                <h4 class="fw-bold">Total Tasks:</h4>
                <p class="fs-4 text-success"><?php echo $totalTasks; ?></p>
            </div>
        </div>
    </div>
</div>
