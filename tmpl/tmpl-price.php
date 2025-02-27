<?php /*Template Name: 【消臭の料金表】 */ ?>
<?php include TEMPLATEPATH.'/header.php'; ?>

<div id="pageContents">

    <section class="section wow fadeIn">
        <div class="inner">

            <div class="section-body">
                <p class="headline">日祝も追加料金なし！<br />
                    いつも同じ料金の <strong>明瞭会計</strong>！</p>
                <p>
                <p>見積時には臭いを発している場所を特定し、細かく分析を行います。<br />
                    その際、市販の芳香剤や薬品などを散布していると効果的な消臭ができなくなることがありますのでご注意下さい。
                </p>
                <p>
                    現場の状況によって、お見積り時に最適なご提案とご説明をさせて頂きます。<br />お見積り、ご相談はもちろん無料ですので、先ずはお気軽にお問合せ下さい。
                </p>

                <table class="price">
                    <thead>
                        <tr>
                            <th>作業項目</th>
                            <th>料金（円/㎡）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>空間消臭（オゾン脱臭）</th>
                            <td>1,100円～</td>
                        </tr>
                        <tr>
                            <th>トリプル消臭（洗浄・オゾン・遮断）</th>
                            <td>16,500円～</td>
                        </tr>
                        <tr>
                            <th>脱臭洗浄（壁面）</th>
                            <td>2,200円～</td>
                        </tr>
                        <tr>
                            <th>脱臭洗浄（床面）</th>
                            <td>3,300円～</td>
                        </tr>
                        <tr>
                            <th>脱臭洗浄（天井）</th>
                            <td>2,200円～</td>
                        </tr>
                        <tr>
                            <th>コーティング（シャダーン）</th>
                            <td>11,000円～</td>
                        </tr>
                        <tr>
                            <th>消臭フィルム(オドロック)/㎡</th>
                            <td>11,000円～</td>
                        </tr>
                        <tr>
                            <th>煤除去作業</th>
                            <td>5,500円～</td>
                        </tr>
                        <tr>
                            <th>汚泥の除去・排出作業</th>
                            <td>5,500円～</td>
                        </tr>
                        <tr>
                            <th>排泄物の除去</th>
                            <td>5,500円～</td>
                        </tr>
                        <tr>
                            <th>異物の除去作業</th>
                            <td>3,300円～</td>
                        </tr>
                        <tr>
                            <th>家財道具の洗浄作業</th>
                            <td>3,300円～</td>
                        </tr>
                        <tr>
                            <th>臭気判定報告書の作成</th>
                            <td>11,000円～</td>
                        </tr>
                    </tbody>

                </table>
                <br>
                <ul class="caution">
                    <li>表示価格は税込です。</li>
                </ul>

                <div class="point">
                    <div class="point-body">
                        <h2 class="point-title">無理な営業はいたしません！</h2>
                        <p>
                            お見積り後、しつこい営業はいたしません！<br />
                            必要とされた際に、お客様ペースでご連絡ください。
                            お見積りは無料です！
                        </p>
                    </div>
                    <div class="point-man">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/kaneshima/kaneshima-point.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $works_list_tag = 'h4'; ?>
    <section class="section --bg">
        <div class="inner">
            <header class="section-header">
                <h2 class="section-title">
                    <span class="-ja">
                        料金例
                    </span>
                </h2>
            </header>
            <div class="section-body">

                <section class="price_example-section">
                    <h3 class="price_example-title">ペット臭</h3>
                    <?php
                    $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 6,
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'works_category',
                        'field' => 'slug',
                        'terms' => array('pet'),
                        'operator' => 'IN'
                        ),
                    )
                    );
                    $datas = get_posts($args);
                    if ( $datas ) :?>
                    <div class="works_lists">
                        <?php foreach($datas as $post): setup_postdata($post);?>
                        <?php include TEMPLATEPATH.'/inc/works_list.php'; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; wp_reset_postdata();?>
                </section>
                <section class="price_example-section">
                    <h3 class="price_example-title">タバコ臭</h3>
                    <?php
                    $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 6,
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'works_category',
                        'field' => 'slug',
                        'terms' => array('tobacco'),
                        'operator' => 'IN'
                        ),
                    )
                    );
                    $datas = get_posts($args);
                    if ( $datas ) :?>
                    <div class="works_lists">
                        <?php foreach($datas as $post): setup_postdata($post);?>
                        <?php include TEMPLATEPATH.'/inc/works_list.php'; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; wp_reset_postdata();?>
                </section>
                <section class="price_example-section">
                    <h3 class="price_example-title">腐敗臭</h3>
                    <?php
                    $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 6,
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'works_category',
                        'field' => 'slug',
                        'terms' => array('corruption'),
                        'operator' => 'IN'
                        ),
                    )
                    );
                    $datas = get_posts($args);
                    if ( $datas ) :?>
                    <div class="works_lists">
                        <?php foreach($datas as $post): setup_postdata($post);?>
                        <?php include TEMPLATEPATH.'/inc/works_list.php'; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; wp_reset_postdata();?>
                </section>
            </div>
        </div>
    </section>
</div>

<?php include TEMPLATEPATH.'/footer.php'; ?>
