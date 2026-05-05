<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />

    <title></title>

    <?php wp_head() ?>
</head>
<header class="l-header">
    <div class="l-header__inner">
        <div class="l-header__logo">
            <a href="#">LOGO</a>
        </div>

        <nav class="l-header__nav" id="js-drawer-target">
            <ul class="l-header__list">
                <li class="l-header__item <?php if (is_front_page()) echo 'is-active'; ?>"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="l-header__item <?php if (is_page('About')) echo 'is-active'; ?>"><a href="<?php echo home_url('About'); ?>">About</a></li>
                <li class="l-header__item <?php if (is_page('Service')) echo 'is-active'; ?>"><a href="<?php echo home_url('Service'); ?>">Service</a></li>
                <li class="l-header__item <?php if (is_page('News')) echo 'is-active'; ?>"><a href="<?php echo home_url('News'); ?>">News</a></li>
                <li class="l-header__item <?php if (is_page('Contact')) echo 'is-active'; ?>"><a href="<?php echo home_url('Contact'); ?>">Contact</a></li>
            </ul>
            <a href="<?php echo home_url('Request-for-information'); ?>" class="l-header__nav-button <?php if (is_page('Request-for-information')) echo 'is-active'; ?>">資料請求</a>
        </nav>

        <button
            class="l-header__drawer-icon"
            id="js-drawer"
            aria-controls="header__nav"
            aria-expanded="false"
            aria-label="メニューを開く">
            <span class="l-header__drawer-line"></span>
            <span class="l-header__drawer-line"></span>
            <span class="l-header__drawer-line"></span>
        </button>
    </div>

    <div class="l-header__overlay" id="js-drawer-overlay"></div>
</header>

<body>