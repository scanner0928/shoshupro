</div>
<section class="section inquiry wow pulse" id="inquiry">
    <div class="inner">
        <div class="inquiry-inner">
            <div class="inquiry-body">
                <h1 class="section-title-home">
                    <span class="-en">Contact</span>
                </h1>
                <p>
                    お見積りやご相談は、こちらよりお問い合わせください。
                </p>
                <div class="btn">

                    <a href="<?php echo esc_url(home_url('inquiry')); ?>">お問い合わせはこちら</a>
                </div>
            </div>
            <div class="inquiry-images">
                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/kaneshima/kaneshima-contact.png" alt="">
            </div>
        </div>
    </div>
</section>
<footer id="siteFooter">
    <div class="inner">
        <div class="company">

            <div class="company-credit">
                <div class="company-logo logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/shoshupro-logo.svg" alt="消臭プロ">
                </div>

                <address class="company-info">
                    <p class="company-info-address">大阪府大阪市住之江区南港東1-2-16</p>
                    <p class="company-info-tel">
                        <a href="tel:0120218744">0120-218-744</a>
                    </p>
                </address>
                <ul class="company-snss">
                    <li class="-instagram">
                        <a href="https://www.instagram.com/shoshu_pro" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/sns/instagram.svg" alt="">
                        </a>
                    </li>
                </ul>

            </div>
            <?php include TEMPLATEPATH . '/inc/company-navigation.php'; ?>

        </div>

    </div>
</footer>
<div class="copyRight">
    <p>サイトで掲載されている画像・文章・デザイン等は、著作権法により無断使用を固くお断りします。</p>
    <p>
        Copyright © All Rights Reserved. Shoshu pro
    </p>
</div>
<div id="siteControls">
    <span href="#" id="toggle-siteNavi">
        <span>
            Menu
        </span>
    </span>
</div>

</div>

<?php wp_footer(); ?>


<script>
    jQuery(function($) {

        var $slider = $('.--slider');
        // shuffleContent($slider);

        $slider.on('init', function(event, slick) {
            // $slider.find('.slick-current').addClass('start');
            setTimeout(function() {
                $slider.find('.slick-current').addClass('start');
            }, 1000);
        });
        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            $slider.find(".slick-current:eq(" + currentSlide + ")").removeClass("start");
        });
        $slider.on('afterChange', function(event, slick, currentSlide, nextSlide) {
            currentSlide++;
            $slider.find(".slick-slide:not(.slick-clone):eq(" + currentSlide + ")").addClass("start");
        });

        $slider.slick({
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false,
            dots: true,
            speed: 1200,
            slidesToShow: 1,
            infinite: true,
            // centerMode: true,
        });

        function shuffleContent(container) {
            var content = container.find("> *");
            var total = content.length;
            content.each(function() {
                content.eq(Math.floor(Math.random() * total)).prependTo(container);
            });
        }

    });
</script>
</body>

</html>