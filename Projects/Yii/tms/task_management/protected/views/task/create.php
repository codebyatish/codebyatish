<h2>Create Task</h2>
<form method="POST" action="<?php echo Yii::app()->createUrl('task/create'); ?>">
    <input type="hidden" name="YII_CSRF_TOKEN" value="<?php echo Yii::app()->request->csrfToken; ?>">
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="Task[title]" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="Task[description]" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Assign To</label>
        <select name="Task[assigned_to]" class="form-control" required>
            <option value="">Select User</option>
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user['id']; ?>"><?php echo $user['full_name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="Task[status]" class="form-control">
            <option value="pending">Pending</option>
            <option value="in-progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Create Task</button>
</form>
