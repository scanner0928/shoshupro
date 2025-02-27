<article class="blog-article">
    <header class="-header">
        <h2 class="-title"><?php the_title(); ?></h2>
        <p class="-meta">
            <?php echo get_post_time('Y.m.d'); ?>
        </p>
    </header>
    <div class="-contents">
        <?php the_content(); ?>
    </div>
</article>