<?php
$tax = ($subjects = get_the_terms($post->ID, 'works_category')) ? reset($subjects) : false;
$cat_class = 'cat-' . $tax->slug;
if (!$blog_list_tag) {
    $blog_list_tag = 'p';
}
?>

<li class="blog_list <?php echo $tax->slug; ?>">
    <a href="<?php the_permalink(); ?>" class="blog_list-grid">
        <<?php echo $blog_list_tag; ?> class="-title">
            <?php the_title(); ?>
        </<?php echo $blog_list_tag; ?>>
        <p class="-cat <?php echo $cat_class; ?>">
            <?php echo $tax->name; ?>
        </p>
        <p class="-date">
            <?php echo get_post_time('Y.m.d'); ?>
        </p>
    </a>
</li>