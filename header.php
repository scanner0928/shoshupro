<?php
$pagedata = Inv::page_info();
// $pagedata = new inv_pageInfo();
$body_class = $pagedata->bodyclass;
$is_richheader = get_field('is_rich_header');
if ($is_richheader) {
    $body_class[] = 'home';
}
if (has_post_thumbnail()) {
    $header_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $header_img_url = get_template_directory_uri() . '/_assets/images/header/header-spray.jpg';
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">
    <link rel="icon" href="/shoshupro-favicon.svg" type="image/svg+xml">
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/_assets/js/wow.js"></script>
    <script>
        new WOW().init({
            offset: 300,
        });
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9VR8EDKHN0"></script>
</head>

<body <?php if ($body_class) {
            echo ' class="', join(' ', $body_class), '"';
        }; ?>>
    <div id="coffin">
        <header id="siteHeader">
            <a href="<?php echo esc_url(home_url()); ?>/" class="logo" id="siteHeader-logo">
                <?php include TEMPLATEPATH . '/_assets/images/shoshupro-logo.svg'; ?>
            </a>
            <nav id="siteHeader-navigation">

                <a href="tel:0120218744" id="siteHeader-tel">
                    <?php include TEMPLATEPATH . '/_assets/images/shoshupro-freedial.svg'; ?>
                </a>

            </nav>
        </header>
        <nav id="siteNavi">
            <div class="company">

                <div class="company-credit">
                    <div class="company-logo logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/shoshupro-logo.svg" alt="">
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

        </nav>

        <div id="siteContents">
            <?php if (!is_home()): ?>
                <?php if ($is_richheader): ?>
                    <div class="homeHeader">
                        <div class="homeHeader-wrapper <?php echo 'header-' . $pagedata->meta['slug']; ?>">
                            <div class="homeHeader-inner">
                                <div class="homeHeader-body">
                                    <h1 class="homeHeader-title">
                                        <?php echo $pagedata->meta['label']; ?>
                                    </h1>
                                    <div class="homeHeader-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>

                                </div>
                                <div class="homeHeader-images_rich">
                                    <img src="<?php echo $header_img_url; ?>" alt="">
                                </div>
                                <img src="<?php echo $header_img_url; ?>" alt="" class="homeHeader-bg">

                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="pageHeader">
                        <div class="pageHeader-inner">
                            <h1 class="pageHeader-title">
                                <span class="-en">
                                    <?php echo strtoupper($pagedata->meta['slug']); ?>
                                </span>
                                <span class="-ja">
                                    <?php echo $pagedata->meta['label']; ?>
                                </span>
                            </h1>
                            <div class="pageHeader-excerpt">
                                <?php Inv::the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="breadcrumbs">
                    <div class="inner">
                        <?php if (function_exists('bcn_display')): ?>
                            <ul>
                                <?php bcn_display_list(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>