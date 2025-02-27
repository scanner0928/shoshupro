<?php include TEMPLATEPATH . '/header.php'; ?>

<div id="pageContents">

    <section class="section">
        <div class="inner">
            <div class="section-body">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php include TEMPLATEPATH . '/inc/works-detail.php'; ?>
                <?php endwhile;
                endif; ?>

            </div>
        </div>
    </section>

</div>

<?php include TEMPLATEPATH . '/footer.php'; ?>