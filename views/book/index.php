<div class="book-index">
    <?php foreach ($books as $book): ?>
        <div>
            <h3><?= $book->book_name ?></h3>
            <div class="desc">
                <?= $book->book_description ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
