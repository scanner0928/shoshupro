<div class="works_detail">
    <div class="works_detail-intro">
        <div class="works_detail-images">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/no_image.jpg" alt="画像なし">
            <?php endif; ?>
        </div>
        <div class="works_detail-meta">
            <h2 class="works_detail-title">
                <?php the_title(); ?>
            </h2>
            <p class="works_detail-date">
                <?php the_field('sekobi'); ?>
            </p>
        </div>
        <div class="works_detail-description">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="works_detail-body">
        <dl class="works_detail-info">
            <div>
                <dt>間取り</dt>
                <dd><?php the_field('madori'); ?></dd>
            </div>
            <div>
                <dt>施工内容</dt>
                <dd><?php the_field('sekonaiyo'); ?></dd>
            </div>
            <div>
                <dt>作業時間</dt>
                <dd><?php the_field('sagyojikan'); ?></dd>
            </div>
            <div>
                <dt>消臭機稼働時間</dt>
                <dd><?php the_field('kadojikan'); ?></dd>
            </div>
            <div>
                <dt>作業人数</dt>
                <dd><?php the_field('sagyoninzu'); ?></dd>
            </div>
            <div class="-price">
                <dt>料金</dt>
                <dd><?php the_field('ryokin'); ?>
                    <span class="works_list-price-etc"><?php the_field('ryokin-etc'); ?></span>
                </dd>
            </div>
        </dl>
        <p class="caution">
            ※ 家財道具の搬出・処分代は含まれていません。
        </p>
    </div>
</div>