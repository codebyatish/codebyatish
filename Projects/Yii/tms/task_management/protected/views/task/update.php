<h2>Update Task</h2>
<form method="POST" action="<?php echo Yii::app()->createUrl('task/update', ['id' => $task['id']]); ?>">
    <input type="hidden" name="YII_CSRF_TOKEN" value="<?php echo Yii::app()->request->csrfToken; ?>">
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="Task[title]" class="form-control" value="<?php echo $task['title']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="Task[description]" class="form-control" required><?php echo $task['description']; ?></textarea>
    </div>
    <?php if (Yii::app()->user->getState('user_role') == 'admin') { ?>
    <div class="mb-3">
        <label>Assign To</label>
        <select name="Task[assigned_to]" class="form-control" required>
            <option value="">Select User</option>
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user['id']; ?>" <?php echo ($task['assigned_to'] == $user['id']) ? 'selected' : ''; ?>><?php echo $user['full_name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php }else{ ?>
        <input type="hidden" name="Task[assigned_to]" value="<?php echo $task['assigned_to']; ?>">
    <?php } ?>
    <div class="mb-3">
        <label>Status</label>
        <select name="Task[status]" class="form-control">
            <option value="pending" <?php echo ($task['status'] == 'pending') ? 'selected' : ''; ?>>Pending</option>
            <option value="in-progress" <?php echo ($task['status'] == 'in-progress') ? 'selected' : ''; ?>>In Progress</option>
            <option value="completed" <?php echo ($task['status'] == 'completed') ? 'selected' : ''; ?>>Completed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Task</button>
</form>
