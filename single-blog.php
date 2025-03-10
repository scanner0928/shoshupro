<?php include TEMPLATEPATH . '/header.php'; ?>

<div id="pageContents">

    <section class="section">
        <div class="inner">
            <div class="section-body">
                <?php if (have_posts()) : ?>
                    <div class="blog-section">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php include TEMPLATEPATH . '/inc/blog-article.php'; ?>
                        <?php endwhile; ?>
                        <!-- <div class="blog-kaneshima">
                            <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/kaneshima/kaneshima-point.png" alt="" class="blog-kaneshima-img">
                        </div> -->
                    </div>
                <?php endif; ?>
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>

                <nav class="blog-navigation post_prevnext" role="navigation">

                    <div class="post_prevnext-previous">
                        <?php if (!empty($prev_post)): ?>
                            <a href="<?php echo get_the_permalink($prev_post); ?>" rel="next">
                                <div class="post_prevnext-linktext"><?php echo $prev_post->post_title; ?></div>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="post_prevnext-list">
                        <p class="btn">
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ一覧へ</a>
                        </p>
                    </div>
                    <div class="post_prevnext-next"><a href="<?php echo get_the_permalink($next_post); ?>" rel="next">
                            <?php if (!empty($next_post)): ?>
                                <div class="post_prevnext-linktext"><?php echo $next_post->post_title; ?></div>
                        </a>
                    <?php endif; ?>
                    </div>

                </nav>

            </div>
        </div>
    </section>
</div>

<?php include TEMPLATEPATH . '/footer.php'; ?>