<?php /*Template Name: 【よくある質問】 */ ?>
<?php include TEMPLATEPATH.'/header.php'; ?>

<div id="pageContents">
    <?php
        $args = array(
            'orderby'       => 'menu_order', 
            'order'         => 'ASC',
        ); 
        $cats = get_terms( 'works_category', $args );
    ?>
    <?php if($cats): ?>
    <?php foreach($cats as $cat): ;?>
    <section class="section <?php echo '--'.$cat->slug; ?>">
        <div class=" inner">
            <header class="section-header">
                <h2 class="section-title">
                    <span class="-ja">
                        <?php echo $cat->name; ?>
                    </span>
                </h2>
            </header>
            <div class="section-body">
                <?php
                    $args = array(
                    'fields' => 'ids',
                    'post_type' => 'faq',
                    'posts_per_page' => 1,
                    'tax_query' => array(
                    array(
                        'taxonomy' => 'works_category',
                        'field' => 'slug',
                        'terms' =>  $cat->slug,
                        'operator' => 'IN'
                        ),
                    )
                    );
                    $faqs = get_posts($args);
                    $qas = get_field('qa',$faqs[0]);
                ?>
                <?php if($qas): ?>
                <dl class="faqs">
                    <?php foreach($qas as $qa): ;?>
                    <div>
                        <dt>
                            <?php echo $qa['q']; ?>
                        </dt>
                        <dd>
                            <?php echo $qa['a']; ?>
                        </dd>
                    </div>
                    <?php endforeach; ?>
                </dl>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <?php endforeach; ?>
    <?php endif; ?>


</div>

<?php include TEMPLATEPATH.'/footer.php'; ?>
