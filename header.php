<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />

    <meta name="description" content="Todoアプリ、Syncroです。チームでの利用を目的とし大規模開発や開発時に利用が可能になっています。誰が、何を、いつまでに、を即座に判断可能になるアプリです。">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Lato:wght@700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <title>Syncro</title>

    <?php wp_head() ?>
</head>
<header class="l-header">
    <div class="l-header__inner">
        <div class="l-header__logo">
            <a href="#">Syncro</a>
        </div>

        <nav class="l-header__nav" id="js-drawer-target">
            <ul class="l-header__list">
                <li class="l-header__item"><a href="#worries">お悩み</a></li>
                <li class="l-header__item"><a href="#features">特徴</a></li>
                <li class="l-header__item"><a href="#usage">使い方</a></li>
                <li class="l-header__item"><a href="#pricing">料金</a></li>
                <li class="l-header__item"><a href="#faq">よくあるご質問</a></li>
            </ul>
            <div class="l-header__nav-button">
                <a href="#" class="l-header__nav-button--download c-button__download">今すぐダウンロード</a>
                <a href="#" class="l-header__nav-button--login c-button__login">ログイン</a>
            </div>
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