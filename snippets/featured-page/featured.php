<div class="featured">
        <h1>Featured Page</h1>
        <article>
                <?php $featured = $pages->findbyUID("your page")->first() ?>
                <h2><?php echo $featured->title() ?></h2>
                <?php
                $image = $featured->images()->filterBy('featured', 'yes');
                if ($featured->hasImages() && $image !== "") {
                        echo '<img src="'.$image->first()->url().'" />';
                } ?>
                <div>
                        <?php echo $featured->text() ?>
                </div>
        </article>
</div>
