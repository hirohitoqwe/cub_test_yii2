<div class="news-index">
    <?php foreach ($newss as $news): ?>
        <div>
            <h3><?= $news->news_headline ?></h3>
            <div class="text-bg-info">
                <?= $news->news_text ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
