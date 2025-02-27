<?php /*Template Name: 【タバコ臭】 */ ?>
<?php include TEMPLATEPATH.'/header.php'; ?>

<div id="pageContents">
    <section class="section">
        <div class="inner">

            <div class="section-body">
                <p class="headline">
                    <strong>嫌なタバコ臭</strong>も、<br />
                    消臭プロなら完全消臭。
                </p>
                <p>タバコ臭の消臭依頼の理由は、来客者のためや、子供への影響の為、禁煙をきっかけに部屋のタバコ臭を消したいなど様々ですが、最も多いのは賃貸物件の退去時の復旧、または物件売却時の資産価値の減益を考えてのご依頼で、タバコ臭は不動産価値を下げる大きな要因となります。</p>
                <p>長年、室内で喫煙していると部屋の隅々にまで染み込んでしまい、市販の消臭剤などではタバコ臭の原因を除去することはできません。壁面クロスの洗浄、または張替えを含め完全消臭をしない限り、中途半端な消臭では、後々になって必ずトラブルになってしまいます。</p>

                <div class="point">
                    <div class="point-body">
                        <h3 class="point-title">タバコ臭のデメリットは！？</h3>
                        <ul>
                            <li>
                                タバコ臭は壁紙内部の基礎部分に浸透しやすく、<strong>クロス洗浄のみでは脱臭できない</strong>
                            </li>
                            <li>
                                非喫煙者のタバコ臭への感知力は高く、<strong>嫌悪感を示す人が多い</strong>
                            </li>
                            <li>
                                タバコ臭には<strong>複合有害物質</strong>を含んでいる
                            </li>
                            <li>
                                タバコ臭でお宅・お部屋の<strong>資産価値が下がる</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="point-man">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/kaneshima/kaneshima-point.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section  --bg">
        <div class="inner wow fadeIn">
            <div class="section-body">
                <p class="headline">
                    タバコのヤニも、<br>トリプル消臭で徹底除去。
                </p>
                <p>非喫煙者にとっては、とても気になるタバコ臭（ヤニ臭）ですが、実は喫煙者であっても室内に染み付いたタバコ臭は不快に感じることがあります。
                    理由は、タバコ臭にはニコチン、タール、窒素化合物、アンモニア、アルデヒド、硫化水素、アセトアルデヒド、ビニルピリジンなど、人間が不快に感じる悪臭成分が数多く含まれているからです。</p>
                <p>もちろん程度により施工方法は多少異なりますが、基本的にタバコ臭は消臭プロが開発したタバコ臭専用の溶剤とオゾン脱臭が効果的で「トリプル消臭」で完全除去が可能です。タバコ臭でお悩みなら、是非ご相談ください。</p>

                <div class="point">
                    <div class="point-body">
                        <h3 class="point-title">タバコ臭の悩みを、消臭プロが全て解決します。</h3>
                        <ul>
                            <li>民泊の禁煙部屋で宿泊者が喫煙し、 <strong>臭いが取れず困っている</strong>。</li>
                            <li>物件の前所有者がタバコを吸っていたので臭いがする。</li>
                            <li>前住人がトイレで喫煙していたらしく、トイレだけ消臭したい。</li>
                            <li>建物の構造上、空気が停留するために、常にタバコ臭がする。</li>
                            <li>他の消臭業者に依頼したが、 <strong>臭いが残っている</strong>。</li>
                        </ul>
                    </div>
                    <div class="point-man">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/kaneshima/kaneshima-point.png" alt="">
                    </div>
                </div>
            </div>
            <div class="section-image_bg_fixed" style="--imgurl:url(<?php echo $header_img_url; ?>);"></div>
        </div>
    </section>


    <section class="section">
        <div class="inner">
            <header class="section-header">
                <h2 class="section-title">
                    <span class="-ja">
                        消臭実績
                    </span>
                    <span class="-en">Works</span>
                </h2>
            </header>
            <div class="section-body">
                <?php
                    $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 1,
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
                <?php foreach($datas as $post): setup_postdata($post);?>
                <?php include TEMPLATEPATH.'/inc/works-detail.php'; ?>
                <?php endforeach; ?>
                <?php else: ?>
                <p class="nopost">
                    まだ実績がありません。
                </p>
                <?php endif; wp_reset_postdata();?>

            </div>
        </div>
    </section>

    <section class="section --right">
        <div class="inner wow fadeInLeft">
            <header class="section-header">
                <h2 class="section-title">
                    <span class="-ja">
                        料金
                    </span>
                    <span class="-en">Price</span>
                </h2>
            </header>
            <div class="section-body">

                <p class="p_left">見積時には臭いを発している場所を特定し、細かく分析を行います。<br />
                    その際、市販の芳香剤や薬品などを散布していると効果的な消臭ができなくなることがありますのでご注意下さい。</p>
                <p class="p_left">現場の状況によって、お見積り時に最適なご提案とご説明をさせて頂きます。<br />お見積り、ご相談はもちろん無料ですので、先ずはお気軽にお問合せ下さい。</p>

                <table class="price">
                    <thead>
                        <tr>
                            <th>作業項目</th>
                            <th>料金（税込）／1㎥あたり</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>空間消臭（オゾン脱臭）</td>
                            <td>16,500円～</td>
                        </tr>
                        <tr>
                            <td>トリプル消臭(洗浄・オゾン・遮断)</td>
                            <td>1.540円～</td>
                        </tr>
                        <tr>
                            <td>脱臭洗浄（壁面）</td>
                            <td>2,200円～</td>
                        </tr>
                        <tr>
                            <td>脱臭洗浄（床面）</td>
                            <td>3,300円～</td>
                        </tr>
                        <tr>
                            <td>脱臭洗浄（天井）</td>
                            <td>2,200円～</td>
                        </tr>
                        <tr>
                            <td>コーティング作業（シャダーン）</td>
                            <td>11,000円～</td>
                        </tr>
                        <tr>
                            <td>消臭フィルム(オドロック)</td>
                            <td>11,000円～</td>
                        </tr>
                        <tr>
                            <td>臭気判定報告書の作成／1通</td>
                            <td>11,000円～</td>
                        </tr>
                    </tbody>
                </table>

                <div class="point">
                    <div class="point-body">
                        <h3 class="point-title">無理な営業はいたしません！</h3>
                        <p>
                            お見積り後、しつこい営業はいたしません！<br />
                            必要とされた際に、お客様ペースでご連絡ください。
                            お見積りは無料です！
                        </p>
                        <p class="btn">
                            <a href="<?php echo esc_url( home_url('/price/') ); ?>">もっと詳しく料金を見る</a>
                        </p>
                    </div>
                    <div class="point-man">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/kaneshima/kaneshima-point.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section wow fadeInUp --left" id="faq">
        <div class="inner">
            <header class="section-header">
                <h2 class="section-title">
                    <span class="-ja">
                        よくある質問
                    </span>
                    <span class="-en">FAQ</span>
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
                        'terms' => array('tobacco'),
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
                <?php else: ?>
                <p class="nopost">
                    まだ質問がありません。
                </p>
                <?php endif; ?>
            </div>
            <p class="btn">
                <a href="<?php echo esc_url( home_url('/faq/') ); ?>">他の質問を見る</a>
            </p>
        </div>
    </section>

</div>

<?php include TEMPLATEPATH.'/footer.php'; ?>
