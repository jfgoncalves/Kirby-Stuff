<div class="featured">
        <h1>Featured Page</h1>
        <article>
                <?php $featured = $pages->findbyUID("your page")->first() ?>
                <h2><?php echo $featured->title() ?></h2>
                <?php
                $image = $featured->images()->filterBy('featured', 'oui');
                $fimage = $image->first();
                if ($featured->hasImages() && $image !== "") {
                        echo '<img src="'.$fimage->url().'" width="250px" />';
                } ?>
                <div>
                        <?php echo $featured->text() ?>
                </div>
        </article>
</div>