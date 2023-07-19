<div class="admin-index">
    <?php foreach ($users as $user): ?>
        <div class="p-4 mb-2">
            <h4><?= $user->id . " " . $user->username ?></h4>
        </div>
    <?php endforeach; ?>
</div>