<h2>Users List</h2>

<?php if (!empty($users)): ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo CHtml::encode($user->id); ?></td>
                    <td><?php echo CHtml::encode($user->first_name); ?></td>
                    <td><?php echo CHtml::encode($user->last_name); ?></td>
                    <td><?php echo CHtml::encode($user->email); ?></td>
                    <td><?php echo CHtml::encode($user->role); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No users found.</p>
<?php endif; ?>
