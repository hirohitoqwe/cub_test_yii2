<div class="admin-index">
    <?php foreach ($users as $user): ?>
        <div class="p-4 mb-2">
            <h3><?= $user->username ?></h3>
        </div>
    <?php endforeach; ?>
</div>