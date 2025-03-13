<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Task List</h2>
    <?php if (Yii::app()->user->getState('user_role') == 'admin') { ?>
        <a href="<?php echo Yii::app()->createUrl('task/create'); ?>" class="btn btn-primary">Create Task</a>
    <?php } ?>
</div>


<table class="table table-hover table-bordered shadow-sm">
    <thead class="text-center">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Assigned To</th>
            <th>Status</th>
            <th>Created By</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td class="text-center"><?php echo $task['id']; ?></td>
                <td><?php echo htmlspecialchars($task['title']); ?></td>
                <td class="description" title="<?php echo htmlspecialchars($task['description']); ?>">
                    <?php echo strlen($task['description']) > 50 ? htmlspecialchars(substr($task['description'], 0, 50)) . '...' : htmlspecialchars($task['description']); ?>
                </td>
                <td><?php echo htmlspecialchars($task['assigned_user_name']); ?></td>
                <td class="text-center">
                    <?php
                        $statusColors = [
                            'pending' => 'warning',
                            'in progress' => 'primary',
                            'completed' => 'success'
                        ];
                        $status = strtolower($task['status']); 
                        $badgeClass = isset($statusColors[$status]) ? $statusColors[$status] : 'secondary';
                    ?>
                    <span class="badge bg-<?php echo $badgeClass; ?>">
                        <?php echo ucfirst($task['status']); ?>
                    </span>
                </td>
                <td><?php echo htmlspecialchars($task['created_by_name']); ?></td>
                <td class="text-center">
                    <a href="<?php echo Yii::app()->createUrl('task/update', ['id' => $task['id']]); ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                    <?php if (Yii::app()->user->getState('user_role') == 'admin') { ?>
                        <a href="<?php echo Yii::app()->createUrl('task/delete', ['id' => $task['id']]); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?');">Delete</a>
                    <?php } ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
