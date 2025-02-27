<?php /*Template Name: 【腐敗臭】 */ ?>
<?php include TEMPLATEPATH.'/header.php'; ?>

<div id="pageContents">
    <section class="section">
        <div class="inner">

            <div class="section-body">
                <p class="headline">
                    孤独死現場の酷い死臭も、<br> 臭いの根源を<strong>完全消臭</strong>。
                </p>
                <p>
                    死臭とは、特殊清掃と呼ばれる孤独死、事故死、自殺や殺人事件の現場となってしまった部屋などで発生してしまう臭い全般のことを言います。<br />
                    主に孤独死のあった部屋などに残る死臭を消臭するには、血痕や体液などの臭いの元である物体や物質と汚染された物の完全撤去、洗浄をしなければいけません。<br />
                    血痕や体液は通常の清掃ではなかなか落とせず、目を覆いたくなるような凄惨な現場であっても、当然ながら『原状復帰』しなければなりません。また、孤独死の現場で死臭が蔓延し、近隣の方と大きなトラブルに発展するケースが多くあるので、住宅が密集する都市部では近隣に対しても悪臭を出さない配慮が望まれます。
                </p>
                <p>
                    消臭プロでは最新のオゾン消臭器と、独自で調合した液剤や最新技術を導入により、どんな臭いでも発生原因を完全に取り除くことが可能で、特殊清掃後はほとんどの場合、ご依頼者の方がすぐにお部屋に入って頂けるほど臭いの根源が完全に除去されます。
                </p>

                <div class="point">
                    <div class="point-body">
                        <h3 class="point-title">消臭プロしか出来ない消臭方法！</h3>
                        <ul>
                            <li>
                            消臭プロだけのトリプル消臭を用いて完全脱臭します。
                            </li>
                            <li>コーティング剤「シャダーン」と防臭シート「オドロック」の防臭効果。</li>
                            <li>腐敗臭の根源をシャットアウトします。</li>
                            <li>5,000件超の特殊清掃実績があります。</li>
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
                <p class="headline">孤独死が発生した場合の、<br>原状回復義務とは。</p>
                <p>
                    孤独死の現場となってしまい、死臭が発生した場合の賃貸物件における原状回復義務と責任についても触れておきます。<br />
                    基本的には、残置物がなくなり、消臭がしっかり行われていて、汚れや染みなどがなければ原状回復と認められています。ただし、わずかでも臭いが残っていたりすると、後々原状回復と認められず、損害賠償を請求されるなどのトラブルになる可能性が高くなります。
                </p>
                <p>
                    消臭プロでは家主の方、管理会社の方、近隣住民の方にも、施工方法や消臭方法などをしっかり説明し、後々にトラブルにならないようにご協力させていただきます。<br />
                    消臭技術だけでなく、善後処置の対応でも高い評価を頂いておりますので、安心してご相談ください。
                </p>

                <div class="point">
                    <div class="point-body">
                        <h3 class="point-title">孤独死現場の死臭の悩みを、<br />消臭プロが全て解決します。</h3>
                        <ul>
                            <li>近隣住民からのクレームに困っている。</li>
                            <li> <strong>死臭が残留</strong>して、管理会社から違約金を請求されている。</li>
                            <li>床下まで死臭が染み込んでしまっていている。</li>
                            <li>孤独死をしてしまい、 <strong>家全体に死臭が充満</strong>してしまっている。</li>
                            <li>他の特殊清掃業者に依頼したが、 <strong>臭いが残っている</strong>。</li>
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
                        'terms' => array('corruption'),
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

    <section class="section --right --inner_bgg">
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
                            <th>コーティング（シャダーン）</th>
                            <td>11,000円～</td>
                        </tr>
                        <tr>
                            <th>消臭フィルム(オドロック)/㎡</th>
                            <td>11,000円～</td>
                        </tr>
                        <tr>
                            <th>異物の除去作業</th>
                            <td>3.300円～</td>
                        </tr>
                        <tr>
                            <th>臭気判定報告書の作成／1通</th>
                            <td>11.000円</td>
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
                        'terms' => array('corruption'),
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
