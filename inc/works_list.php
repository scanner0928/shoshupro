<?php
$tax = ($subjects = get_the_terms($post->ID, 'works_category')) ? reset($subjects) : false;
$cat_class = 'cat-' . $tax->slug;
if (!$works_list_tag) {
    $works_list_tag = 'h2';
}
?>

<article class="works_list <?php echo $tax->slug; ?>">
    <a href="<?php the_permalink(); ?>">
        <p class="works_list-cat <?php echo $cat_class; ?>">
            <?php echo $tax->name; ?>
        </p>

        <div class="works_list-body">
            <<?php echo $works_list_tag; ?> class="works_list-title">
                <?php the_title(); ?>
            </<?php echo $works_list_tag; ?>>
            <p class="works_list-price">
                <?php the_field('ryokin'); ?>
                <span class="works_list-price-etc"><?php the_field('ryokin-etc'); ?></span>
            </p>
        </div>
        <div class="works_list-images">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/no_image.jpg" alt="画像なし">
            <?php endif; ?>
        </div>
    </a>
</article>