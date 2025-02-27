<?php include TEMPLATEPATH.'/header.php'; ?>

<div id="pageContents">

    <section class="section">
        <div class="inner">
            <div class="section-body">
                <?php if (have_posts()) : ?>
                <div class="works_lists">
                    <?php while (have_posts()) : the_post(); ?>
                    <?php include TEMPLATEPATH.'/inc/works_list.php'; ?>
                    <?php endwhile; ?>
                </div>
                <?php else: ?>
                <p class="nopost">
                    現在投稿はありません。
                </p>
                <?php endif; ?>
            </div>
        </div>
    </section>

</div>

<?php include TEMPLATEPATH.'/footer.php'; ?>
