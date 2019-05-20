<h2><?php echo $title; ?></h2>

<?php foreach ($housesale as $news_item): ?>

        <h3><?php echo $news_item['cod']; ?></h3>
        <div class="main">
                <?php echo $news_item['desc']; ?>
        </div>

<?php endforeach; ?>
