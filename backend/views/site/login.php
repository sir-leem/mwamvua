<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<h1 style="visibility: hidden;">Welcome To Nipe Kazi </h1>
<body style="background: lightgrey">
<div class="sub-main-w3">
    <form action="#" method="post">
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
        <h2>
            <i class="fas fa-level-down-alt" style="visibility: hidden;"></i>
        </h2>
        <div class="form-style-agile">

            <?= $form
                ->field($model, 'username', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('Enter username'),'class' => 'input100']) ?>
        </div>
        <div class="form-style-agile">

            <?= $form
                ->field($model, 'password',$fieldOptions2)
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('Enter password'), 'class' => 'input100']) ?>
        </div>
        <!-- checkbox -->
     <!--   <div class="wthree-text">
            <ul>
                <li>
                    <label class="anim">

                        <span>Stay Signed In</span>
                    </label>
                </li>
                <li>
                    <a href="#">Forgot Password?</a>
                </li>
            </ul>
        </div>-->
        <!-- //checkbox -->
        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Login
            </button>
        </div>
        <?php ActiveForm::end(); ?>
    </form>
</div>
</body>
<!-- copyright -->
<div class="footer" style="background: lightgrey; padding-top: 10%">
    <p style="color: #0c0c0c">&copy; <?= date('Y'); ?> RahnTech Company Limited. All rights reserved | Powered by
        <a href="#" style="color: red">Maxima Tech Company Ltd</a>
    </p>
</div>
<!-- //copyright -->
<style>
    /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/

    .login100-form-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 5px;
        min-width: 130px;
        height: 50px;
        background-color: #f7296f;
        border-radius: 25px;

        font-family: Poppins-Regular;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    /* reset */

    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    ol,
    ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    /* start editing from here */

    a {
        text-decoration: none;
    }

    .txt-rt {
        text-align: right;
    }

    /* text align right */

    .txt-lt {
        text-align: left;
    }

    /* text align left */

    .txt-center {
        text-align: center;
    }

    /* text align center */

    .float-rt {
        float: right;
    }

    /* float right */

    .float-lt {
        float: left;
    }

    /* float left */

    .clear {
        clear: both;
    }

    /* clear float */

    .pos-relative {
        position: relative;
    }

    /* Position Relative */

    .pos-absolute {
        position: absolute;
    }

    /* Position Absolute */

    .vertical-base {
        vertical-align: baseline;
    }

    /* vertical align baseline */

    .vertical-top {
        vertical-align: top;
    }

    /* vertical align top */

    nav.vertical ul li {
        display: block;
    }

    /* vertical menu */

    nav.horizontal ul li {
        display: inline-block;
    }

    /* horizontal menu */

    img {
        max-width: 100%;
    }

    /*end reset*/

    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 100%;
        background: #2196F3;
    }

    /*--header--*/

    h1 {
        font-size: 3.5em;
        color: #fff;
        letter-spacing: 3px;
        text-align: center;
        font-style: italic;
        margin: 3vw 1vw;
        font-family: 'Josefin Sans', sans-serif;
    }

    h1 span,
    h2 i {
        color: #f7296f;
    }

    h2 {
        color: #fff;
        font-size: 22px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin-bottom: 1em;
    }

    /*--//header--*/

    /*-- content --*/

    .sub-main-w3 {
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        -webkit-box-pack: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
    }

    .sub-main-w3 form {
        max-width: 380px;
        margin: 0 5vw;
        background: rgba(10, 10, 10, 0.17);
        padding: 3.5vw;
        box-sizing: border-box;
        display: -webkit-flex;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        border-bottom: 8px solid #f7296f;
        border-radius: 25px 25px 45px 45px;
    }

    .form-style-agile {
        margin-bottom: 1.5em;
        flex-basis: 100%;
        -webkit-flex-basis: 100%;
    }

    .sub-main-w3 label {
        font-size: 14px;
        color: #fff;
        display: inline-block;
        font-weight: 500;
        margin-bottom: 12px;
        text-transform: capitalize;
        letter-spacing: 1px;
    }

    .sub-main-w3 label i {
        font-size: 15px;
        margin-left: 5px;
        color: #f7296f;
        border-radius: 50%;
        line-height: 1.9;
        text-align: center;
    }

    .form-style-agile input[type="text"],
    .form-style-agile input[type="password"] {
        width: 100%;
        color: #000;
        outline: none;
        font-size: 14px;
        letter-spacing: 1px;
        padding: 15px 15px;
        box-sizing: border-box;
        border: none;
        border: 1px solid #000;
        background: #fff;
    }

    .sub-main-w3 input[type="submit"] {
        color: #fff;
        background: #f7296f;
        border: none;
        padding: 13px 0;
        margin-top: 30px;
        outline: none;
        width: 36%;
        font-size: 16px;
        cursor: pointer;
        letter-spacing: 2px;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.49);
    }

    .sub-main-w3 input[type="submit"]:hover {
        background: #000;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }

    .wthree-text {
        width: 100%;
    }

    .wthree-text ul li:nth-child(1) {
        float: left;
    }

    .wthree-text ul li:nth-child(2) {
        float: right;
    }

    .wthree-text ul li {
        display: inline-block;
    }

    .wthree-text ul li a {
        color: #fff;
        font-size: 14px;
        letter-spacing: 1px;
        font-weight: 500;
    }

    /*-- checkbox --*/

    .wthree-text label {
        font-size: 15px;
        color: #fff;
        cursor: pointer;
        position: relative;
    }

    .wthree-text {
        text-align: center;
    }

    input.checkbox {
        background: #f7296f;
        cursor: pointer;
        width: 1.2em;
        height: 1.2em;
        vertical-align: text-bottom;
    }

    input.checkbox:before {
        content: "";
        position: absolute;
        width: 1.2em;
        height: 1.2em;
        background: inherit;
        cursor: pointer;
    }

    input.checkbox:after {
        content: "";
        position: absolute;
        top: 4px;
        left: 4px;
        z-index: 1;
        width: 1em;
        height: 1em;
        border: 1px solid #fff;
        -webkit-transition: .4s ease-in-out;
        -moz-transition: .4s ease-in-out;
        -o-transition: .4s ease-in-out;
        transition: .4s ease-in-out;
    }

    input.checkbox:checked:after {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        height: .5rem;
        border-color: #fff;
        border-top-color: transparent;
        border-right-color: transparent;
    }

    .anim input.checkbox:checked:after {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        height: .5rem;
        border-color: transparent;
        border-right-color: transparent;
        animation: .4s rippling .4s ease;
        animation-fill-mode: forwards;
    }

    @keyframes rippling {
        50% {
            border-left-color: #fff;
        }
        100% {
            border-bottom-color: #fff;
            border-left-color: #fff;
        }
    }

    /*-- //checkbox --*/

    /*--placeholder-color--*/

    ::-webkit-input-placeholder {
        color: #000;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #000;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #000;
    }

    :-ms-input-placeholder {
        color: #000;
    }

    /*-- //placeholder-color --*/

    /*-- //content --*/

    /*-- copyright --*/

    .footer {
        margin: 4vw .3vw 2vw;
    }

    .footer p {
        font-size: 14px;
        color: #fff;
        letter-spacing: 2px;
        text-align: center;
        line-height: 1.8;
    }

    .footer p a {
        color: #fff;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }

    .footer p a:hover {
        color: #f7296f;
        -webkit-transition: 0.5s all;
        -o-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -ms-transition: 0.5s all;
        transition: 0.5s all;
    }

    /*-- //copyright --*/

    /*-- bg effect --*/

    #bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    #bg canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /*-- //bg effect --*/

    /*--responsive--*/

    @media(max-width:1920px) {
        h1 {
            font-size: 3.5vw;
        }
    }

    @media(max-width:1024px) {
        h1 {
            font-size: 4.5vw;
        }
    }

    @media(max-width:800px) {
        h1 {
            font-size: 2.6em;
        }
    }

    @media(max-width:480px) {
        h1 {
            font-size: 2.3em;
            letter-spacing: 1px;
        }
        .sub-main-w3 form {
            padding: 7.5vw;
        }
        .footer p {
            letter-spacing: 1px;
        }
    }

    @media(max-width:414px) {
        .form-style-agile input[type="text"],
        .form-style-agile input[type="password"] {
            font-size: 13px;
            padding: 13px 15px;
        }
        .wthree-text ul li:nth-child(1),
        .wthree-text ul li:nth-child(2) {
            float: none;
        }
        .wthree-text ul li:nth-child(2) {
            margin-top: 10px;
        }
        .sub-main-w3 input[type="submit"] {
            width: 56%;
        }
        .wthree-text ul li {
            display: block;
        }
    }

    @media(max-width:320px) {
        h1 {
            font-size: 1.8em;
            margin: 5vw 1vw;
        }
        .sub-main-w3 form {
            padding: 25px 14px;
        }
    }

    /*--//responsive--*/
</style>

<style>
    /*!
 * Font Awesome Free 5.0.8 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
    .fa,
    .fas,
    .far,
    .fal,
    .fab {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1; }

    .fa-lg {
        font-size: 1.33333em;
        line-height: 0.75em;
        vertical-align: -.0667em; }

    .fa-xs {
        font-size: .75em; }

    .fa-sm {
        font-size: .875em; }

    .fa-1x {
        font-size: 1em; }

    .fa-2x {
        font-size: 2em; }

    .fa-3x {
        font-size: 3em; }

    .fa-4x {
        font-size: 4em; }

    .fa-5x {
        font-size: 5em; }

    .fa-6x {
        font-size: 6em; }

    .fa-7x {
        font-size: 7em; }

    .fa-8x {
        font-size: 8em; }

    .fa-9x {
        font-size: 9em; }

    .fa-10x {
        font-size: 10em; }

    .fa-fw {
        text-align: center;
        width: 1.25em; }

    .fa-ul {
        list-style-type: none;
        margin-left: 2.5em;
        padding-left: 0; }
    .fa-ul > li {
        position: relative; }

    .fa-li {
        left: -2em;
        position: absolute;
        text-align: center;
        width: 2em;
        line-height: inherit; }

    .fa-border {
        border: solid 0.08em #eee;
        border-radius: .1em;
        padding: .2em .25em .15em; }

    .fa-pull-left {
        float: left; }

    .fa-pull-right {
        float: right; }

    .fa.fa-pull-left,
    .fas.fa-pull-left,
    .far.fa-pull-left,
    .fal.fa-pull-left,
    .fab.fa-pull-left {
        margin-right: .3em; }

    .fa.fa-pull-right,
    .fas.fa-pull-right,
    .far.fa-pull-right,
    .fal.fa-pull-right,
    .fab.fa-pull-right {
        margin-left: .3em; }

    .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear; }

    .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
        animation: fa-spin 1s infinite steps(8); }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

    .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg); }

    .fa-rotate-180 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg); }

    .fa-rotate-270 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg); }

    .fa-flip-horizontal {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
        -webkit-transform: scale(-1, 1);
        transform: scale(-1, 1); }

    .fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(1, -1);
        transform: scale(1, -1); }

    .fa-flip-horizontal.fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(-1, -1);
        transform: scale(-1, -1); }

    :root .fa-rotate-90,
    :root .fa-rotate-180,
    :root .fa-rotate-270,
    :root .fa-flip-horizontal,
    :root .fa-flip-vertical {
        -webkit-filter: none;
        filter: none; }

    .fa-stack {
        display: inline-block;
        height: 2em;
        line-height: 2em;
        position: relative;
        vertical-align: middle;
        width: 2em; }

    .fa-stack-1x,
    .fa-stack-2x {
        left: 0;
        position: absolute;
        text-align: center;
        width: 100%; }

    .fa-stack-1x {
        line-height: inherit; }

    .fa-stack-2x {
        font-size: 2em; }

    .fa-inverse {
        color: #fff; }

    /* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
    readers do not read off random characters that represent icons */
    .fa-500px:before {
        content: "\f26e"; }

    .fa-accessible-icon:before {
        content: "\f368"; }

    .fa-accusoft:before {
        content: "\f369"; }

    .fa-address-book:before {
        content: "\f2b9"; }

    .fa-address-card:before {
        content: "\f2bb"; }

    .fa-adjust:before {
        content: "\f042"; }

    .fa-adn:before {
        content: "\f170"; }

    .fa-adversal:before {
        content: "\f36a"; }

    .fa-affiliatetheme:before {
        content: "\f36b"; }

    .fa-algolia:before {
        content: "\f36c"; }

    .fa-align-center:before {
        content: "\f037"; }

    .fa-align-justify:before {
        content: "\f039"; }

    .fa-align-left:before {
        content: "\f036"; }

    .fa-align-right:before {
        content: "\f038"; }

    .fa-amazon:before {
        content: "\f270"; }

    .fa-amazon-pay:before {
        content: "\f42c"; }

    .fa-ambulance:before {
        content: "\f0f9"; }

    .fa-american-sign-language-interpreting:before {
        content: "\f2a3"; }

    .fa-amilia:before {
        content: "\f36d"; }

    .fa-anchor:before {
        content: "\f13d"; }

    .fa-android:before {
        content: "\f17b"; }

    .fa-angellist:before {
        content: "\f209"; }

    .fa-angle-double-down:before {
        content: "\f103"; }

    .fa-angle-double-left:before {
        content: "\f100"; }

    .fa-angle-double-right:before {
        content: "\f101"; }

    .fa-angle-double-up:before {
        content: "\f102"; }

    .fa-angle-down:before {
        content: "\f107"; }

    .fa-angle-left:before {
        content: "\f104"; }

    .fa-angle-right:before {
        content: "\f105"; }

    .fa-angle-up:before {
        content: "\f106"; }

    .fa-angrycreative:before {
        content: "\f36e"; }

    .fa-angular:before {
        content: "\f420"; }

    .fa-app-store:before {
        content: "\f36f"; }

    .fa-app-store-ios:before {
        content: "\f370"; }

    .fa-apper:before {
        content: "\f371"; }

    .fa-apple:before {
        content: "\f179"; }

    .fa-apple-pay:before {
        content: "\f415"; }

    .fa-archive:before {
        content: "\f187"; }

    .fa-arrow-alt-circle-down:before {
        content: "\f358"; }

    .fa-arrow-alt-circle-left:before {
        content: "\f359"; }

    .fa-arrow-alt-circle-right:before {
        content: "\f35a"; }

    .fa-arrow-alt-circle-up:before {
        content: "\f35b"; }

    .fa-arrow-circle-down:before {
        content: "\f0ab"; }

    .fa-arrow-circle-left:before {
        content: "\f0a8"; }

    .fa-arrow-circle-right:before {
        content: "\f0a9"; }

    .fa-arrow-circle-up:before {
        content: "\f0aa"; }

    .fa-arrow-down:before {
        content: "\f063"; }

    .fa-arrow-left:before {
        content: "\f060"; }

    .fa-arrow-right:before {
        content: "\f061"; }

    .fa-arrow-up:before {
        content: "\f062"; }

    .fa-arrows-alt:before {
        content: "\f0b2"; }

    .fa-arrows-alt-h:before {
        content: "\f337"; }

    .fa-arrows-alt-v:before {
        content: "\f338"; }

    .fa-assistive-listening-systems:before {
        content: "\f2a2"; }

    .fa-asterisk:before {
        content: "\f069"; }

    .fa-asymmetrik:before {
        content: "\f372"; }

    .fa-at:before {
        content: "\f1fa"; }

    .fa-audible:before {
        content: "\f373"; }

    .fa-audio-description:before {
        content: "\f29e"; }

    .fa-autoprefixer:before {
        content: "\f41c"; }

    .fa-avianex:before {
        content: "\f374"; }

    .fa-aviato:before {
        content: "\f421"; }

    .fa-aws:before {
        content: "\f375"; }

    .fa-backward:before {
        content: "\f04a"; }

    .fa-balance-scale:before {
        content: "\f24e"; }

    .fa-ban:before {
        content: "\f05e"; }

    .fa-band-aid:before {
        content: "\f462"; }

    .fa-bandcamp:before {
        content: "\f2d5"; }

    .fa-barcode:before {
        content: "\f02a"; }

    .fa-bars:before {
        content: "\f0c9"; }

    .fa-baseball-ball:before {
        content: "\f433"; }

    .fa-basketball-ball:before {
        content: "\f434"; }

    .fa-bath:before {
        content: "\f2cd"; }

    .fa-battery-empty:before {
        content: "\f244"; }

    .fa-battery-full:before {
        content: "\f240"; }

    .fa-battery-half:before {
        content: "\f242"; }

    .fa-battery-quarter:before {
        content: "\f243"; }

    .fa-battery-three-quarters:before {
        content: "\f241"; }

    .fa-bed:before {
        content: "\f236"; }

    .fa-beer:before {
        content: "\f0fc"; }

    .fa-behance:before {
        content: "\f1b4"; }

    .fa-behance-square:before {
        content: "\f1b5"; }

    .fa-bell:before {
        content: "\f0f3"; }

    .fa-bell-slash:before {
        content: "\f1f6"; }

    .fa-bicycle:before {
        content: "\f206"; }

    .fa-bimobject:before {
        content: "\f378"; }

    .fa-binoculars:before {
        content: "\f1e5"; }

    .fa-birthday-cake:before {
        content: "\f1fd"; }

    .fa-bitbucket:before {
        content: "\f171"; }

    .fa-bitcoin:before {
        content: "\f379"; }

    .fa-bity:before {
        content: "\f37a"; }

    .fa-black-tie:before {
        content: "\f27e"; }

    .fa-blackberry:before {
        content: "\f37b"; }

    .fa-blind:before {
        content: "\f29d"; }

    .fa-blogger:before {
        content: "\f37c"; }

    .fa-blogger-b:before {
        content: "\f37d"; }

    .fa-bluetooth:before {
        content: "\f293"; }

    .fa-bluetooth-b:before {
        content: "\f294"; }

    .fa-bold:before {
        content: "\f032"; }

    .fa-bolt:before {
        content: "\f0e7"; }

    .fa-bomb:before {
        content: "\f1e2"; }

    .fa-book:before {
        content: "\f02d"; }

    .fa-bookmark:before {
        content: "\f02e"; }

    .fa-bowling-ball:before {
        content: "\f436"; }

    .fa-box:before {
        content: "\f466"; }

    .fa-boxes:before {
        content: "\f468"; }

    .fa-braille:before {
        content: "\f2a1"; }

    .fa-briefcase:before {
        content: "\f0b1"; }

    .fa-btc:before {
        content: "\f15a"; }

    .fa-bug:before {
        content: "\f188"; }

    .fa-building:before {
        content: "\f1ad"; }

    .fa-bullhorn:before {
        content: "\f0a1"; }

    .fa-bullseye:before {
        content: "\f140"; }

    .fa-buromobelexperte:before {
        content: "\f37f"; }

    .fa-bus:before {
        content: "\f207"; }

    .fa-buysellads:before {
        content: "\f20d"; }

    .fa-calculator:before {
        content: "\f1ec"; }

    .fa-calendar:before {
        content: "\f133"; }

    .fa-calendar-alt:before {
        content: "\f073"; }

    .fa-calendar-check:before {
        content: "\f274"; }

    .fa-calendar-minus:before {
        content: "\f272"; }

    .fa-calendar-plus:before {
        content: "\f271"; }

    .fa-calendar-times:before {
        content: "\f273"; }

    .fa-camera:before {
        content: "\f030"; }

    .fa-camera-retro:before {
        content: "\f083"; }

    .fa-car:before {
        content: "\f1b9"; }

    .fa-caret-down:before {
        content: "\f0d7"; }

    .fa-caret-left:before {
        content: "\f0d9"; }

    .fa-caret-right:before {
        content: "\f0da"; }

    .fa-caret-square-down:before {
        content: "\f150"; }

    .fa-caret-square-left:before {
        content: "\f191"; }

    .fa-caret-square-right:before {
        content: "\f152"; }

    .fa-caret-square-up:before {
        content: "\f151"; }

    .fa-caret-up:before {
        content: "\f0d8"; }

    .fa-cart-arrow-down:before {
        content: "\f218"; }

    .fa-cart-plus:before {
        content: "\f217"; }

    .fa-cc-amazon-pay:before {
        content: "\f42d"; }

    .fa-cc-amex:before {
        content: "\f1f3"; }

    .fa-cc-apple-pay:before {
        content: "\f416"; }

    .fa-cc-diners-club:before {
        content: "\f24c"; }

    .fa-cc-discover:before {
        content: "\f1f2"; }

    .fa-cc-jcb:before {
        content: "\f24b"; }

    .fa-cc-mastercard:before {
        content: "\f1f1"; }

    .fa-cc-paypal:before {
        content: "\f1f4"; }

    .fa-cc-stripe:before {
        content: "\f1f5"; }

    .fa-cc-visa:before {
        content: "\f1f0"; }

    .fa-centercode:before {
        content: "\f380"; }

    .fa-certificate:before {
        content: "\f0a3"; }

    .fa-chart-area:before {
        content: "\f1fe"; }

    .fa-chart-bar:before {
        content: "\f080"; }

    .fa-chart-line:before {
        content: "\f201"; }

    .fa-chart-pie:before {
        content: "\f200"; }

    .fa-check:before {
        content: "\f00c"; }

    .fa-check-circle:before {
        content: "\f058"; }

    .fa-check-square:before {
        content: "\f14a"; }

    .fa-chess:before {
        content: "\f439"; }

    .fa-chess-bishop:before {
        content: "\f43a"; }

    .fa-chess-board:before {
        content: "\f43c"; }

    .fa-chess-king:before {
        content: "\f43f"; }

    .fa-chess-knight:before {
        content: "\f441"; }

    .fa-chess-pawn:before {
        content: "\f443"; }

    .fa-chess-queen:before {
        content: "\f445"; }

    .fa-chess-rook:before {
        content: "\f447"; }

    .fa-chevron-circle-down:before {
        content: "\f13a"; }

    .fa-chevron-circle-left:before {
        content: "\f137"; }

    .fa-chevron-circle-right:before {
        content: "\f138"; }

    .fa-chevron-circle-up:before {
        content: "\f139"; }

    .fa-chevron-down:before {
        content: "\f078"; }

    .fa-chevron-left:before {
        content: "\f053"; }

    .fa-chevron-right:before {
        content: "\f054"; }

    .fa-chevron-up:before {
        content: "\f077"; }

    .fa-child:before {
        content: "\f1ae"; }

    .fa-chrome:before {
        content: "\f268"; }

    .fa-circle:before {
        content: "\f111"; }

    .fa-circle-notch:before {
        content: "\f1ce"; }

    .fa-clipboard:before {
        content: "\f328"; }

    .fa-clipboard-check:before {
        content: "\f46c"; }

    .fa-clipboard-list:before {
        content: "\f46d"; }

    .fa-clock:before {
        content: "\f017"; }

    .fa-clone:before {
        content: "\f24d"; }

    .fa-closed-captioning:before {
        content: "\f20a"; }

    .fa-cloud:before {
        content: "\f0c2"; }

    .fa-cloud-download-alt:before {
        content: "\f381"; }

    .fa-cloud-upload-alt:before {
        content: "\f382"; }

    .fa-cloudscale:before {
        content: "\f383"; }

    .fa-cloudsmith:before {
        content: "\f384"; }

    .fa-cloudversify:before {
        content: "\f385"; }

    .fa-code:before {
        content: "\f121"; }

    .fa-code-branch:before {
        content: "\f126"; }

    .fa-codepen:before {
        content: "\f1cb"; }

    .fa-codiepie:before {
        content: "\f284"; }

    .fa-coffee:before {
        content: "\f0f4"; }

    .fa-cog:before {
        content: "\f013"; }

    .fa-cogs:before {
        content: "\f085"; }

    .fa-columns:before {
        content: "\f0db"; }

    .fa-comment:before {
        content: "\f075"; }

    .fa-comment-alt:before {
        content: "\f27a"; }

    .fa-comments:before {
        content: "\f086"; }

    .fa-compass:before {
        content: "\f14e"; }

    .fa-compress:before {
        content: "\f066"; }

    .fa-connectdevelop:before {
        content: "\f20e"; }

    .fa-contao:before {
        content: "\f26d"; }

    .fa-copy:before {
        content: "\f0c5"; }

    .fa-copyright:before {
        content: "\f1f9"; }

    .fa-cpanel:before {
        content: "\f388"; }

    .fa-creative-commons:before {
        content: "\f25e"; }

    .fa-credit-card:before {
        content: "\f09d"; }

    .fa-crop:before {
        content: "\f125"; }

    .fa-crosshairs:before {
        content: "\f05b"; }

    .fa-css3:before {
        content: "\f13c"; }

    .fa-css3-alt:before {
        content: "\f38b"; }

    .fa-cube:before {
        content: "\f1b2"; }

    .fa-cubes:before {
        content: "\f1b3"; }

    .fa-cut:before {
        content: "\f0c4"; }

    .fa-cuttlefish:before {
        content: "\f38c"; }

    .fa-d-and-d:before {
        content: "\f38d"; }

    .fa-dashcube:before {
        content: "\f210"; }

    .fa-database:before {
        content: "\f1c0"; }

    .fa-deaf:before {
        content: "\f2a4"; }

    .fa-delicious:before {
        content: "\f1a5"; }

    .fa-deploydog:before {
        content: "\f38e"; }

    .fa-deskpro:before {
        content: "\f38f"; }

    .fa-desktop:before {
        content: "\f108"; }

    .fa-deviantart:before {
        content: "\f1bd"; }

    .fa-digg:before {
        content: "\f1a6"; }

    .fa-digital-ocean:before {
        content: "\f391"; }

    .fa-discord:before {
        content: "\f392"; }

    .fa-discourse:before {
        content: "\f393"; }

    .fa-dna:before {
        content: "\f471"; }

    .fa-dochub:before {
        content: "\f394"; }

    .fa-docker:before {
        content: "\f395"; }

    .fa-dollar-sign:before {
        content: "\f155"; }

    .fa-dolly:before {
        content: "\f472"; }

    .fa-dolly-flatbed:before {
        content: "\f474"; }

    .fa-dot-circle:before {
        content: "\f192"; }

    .fa-download:before {
        content: "\f019"; }

    .fa-draft2digital:before {
        content: "\f396"; }

    .fa-dribbble:before {
        content: "\f17d"; }

    .fa-dribbble-square:before {
        content: "\f397"; }

    .fa-dropbox:before {
        content: "\f16b"; }

    .fa-drupal:before {
        content: "\f1a9"; }

    .fa-dyalog:before {
        content: "\f399"; }

    .fa-earlybirds:before {
        content: "\f39a"; }

    .fa-edge:before {
        content: "\f282"; }

    .fa-edit:before {
        content: "\f044"; }

    .fa-eject:before {
        content: "\f052"; }

    .fa-elementor:before {
        content: "\f430"; }

    .fa-ellipsis-h:before {
        content: "\f141"; }

    .fa-ellipsis-v:before {
        content: "\f142"; }

    .fa-ember:before {
        content: "\f423"; }

    .fa-empire:before {
        content: "\f1d1"; }

    .fa-envelope:before {
        content: "\f0e0"; }

    .fa-envelope-open:before {
        content: "\f2b6"; }

    .fa-envelope-square:before {
        content: "\f199"; }

    .fa-envira:before {
        content: "\f299"; }

    .fa-eraser:before {
        content: "\f12d"; }

    .fa-erlang:before {
        content: "\f39d"; }

    .fa-ethereum:before {
        content: "\f42e"; }

    .fa-etsy:before {
        content: "\f2d7"; }

    .fa-euro-sign:before {
        content: "\f153"; }

    .fa-exchange-alt:before {
        content: "\f362"; }

    .fa-exclamation:before {
        content: "\f12a"; }

    .fa-exclamation-circle:before {
        content: "\f06a"; }

    .fa-exclamation-triangle:before {
        content: "\f071"; }

    .fa-expand:before {
        content: "\f065"; }

    .fa-expand-arrows-alt:before {
        content: "\f31e"; }

    .fa-expeditedssl:before {
        content: "\f23e"; }

    .fa-external-link-alt:before {
        content: "\f35d"; }

    .fa-external-link-square-alt:before {
        content: "\f360"; }

    .fa-eye:before {
        content: "\f06e"; }

    .fa-eye-dropper:before {
        content: "\f1fb"; }

    .fa-eye-slash:before {
        content: "\f070"; }

    .fa-facebook:before {
        content: "\f09a"; }

    .fa-facebook-f:before {
        content: "\f39e"; }

    .fa-facebook-messenger:before {
        content: "\f39f"; }

    .fa-facebook-square:before {
        content: "\f082"; }

    .fa-fast-backward:before {
        content: "\f049"; }

    .fa-fast-forward:before {
        content: "\f050"; }

    .fa-fax:before {
        content: "\f1ac"; }

    .fa-female:before {
        content: "\f182"; }

    .fa-fighter-jet:before {
        content: "\f0fb"; }

    .fa-file:before {
        content: "\f15b"; }

    .fa-file-alt:before {
        content: "\f15c"; }

    .fa-file-archive:before {
        content: "\f1c6"; }

    .fa-file-audio:before {
        content: "\f1c7"; }

    .fa-file-code:before {
        content: "\f1c9"; }

    .fa-file-excel:before {
        content: "\f1c3"; }

    .fa-file-image:before {
        content: "\f1c5"; }

    .fa-file-pdf:before {
        content: "\f1c1"; }

    .fa-file-powerpoint:before {
        content: "\f1c4"; }

    .fa-file-video:before {
        content: "\f1c8"; }

    .fa-file-word:before {
        content: "\f1c2"; }

    .fa-film:before {
        content: "\f008"; }

    .fa-filter:before {
        content: "\f0b0"; }

    .fa-fire:before {
        content: "\f06d"; }

    .fa-fire-extinguisher:before {
        content: "\f134"; }

    .fa-firefox:before {
        content: "\f269"; }

    .fa-first-aid:before {
        content: "\f479"; }

    .fa-first-order:before {
        content: "\f2b0"; }

    .fa-firstdraft:before {
        content: "\f3a1"; }

    .fa-flag:before {
        content: "\f024"; }

    .fa-flag-checkered:before {
        content: "\f11e"; }

    .fa-flask:before {
        content: "\f0c3"; }

    .fa-flickr:before {
        content: "\f16e"; }

    .fa-flipboard:before {
        content: "\f44d"; }

    .fa-fly:before {
        content: "\f417"; }

    .fa-folder:before {
        content: "\f07b"; }

    .fa-folder-open:before {
        content: "\f07c"; }

    .fa-font:before {
        content: "\f031"; }

    .fa-font-awesome:before {
        content: "\f2b4"; }

    .fa-font-awesome-alt:before {
        content: "\f35c"; }

    .fa-font-awesome-flag:before {
        content: "\f425"; }

    .fa-fonticons:before {
        content: "\f280"; }

    .fa-fonticons-fi:before {
        content: "\f3a2"; }

    .fa-football-ball:before {
        content: "\f44e"; }

    .fa-fort-awesome:before {
        content: "\f286"; }

    .fa-fort-awesome-alt:before {
        content: "\f3a3"; }

    .fa-forumbee:before {
        content: "\f211"; }

    .fa-forward:before {
        content: "\f04e"; }

    .fa-foursquare:before {
        content: "\f180"; }

    .fa-free-code-camp:before {
        content: "\f2c5"; }

    .fa-freebsd:before {
        content: "\f3a4"; }

    .fa-frown:before {
        content: "\f119"; }

    .fa-futbol:before {
        content: "\f1e3"; }

    .fa-gamepad:before {
        content: "\f11b"; }

    .fa-gavel:before {
        content: "\f0e3"; }

    .fa-gem:before {
        content: "\f3a5"; }

    .fa-genderless:before {
        content: "\f22d"; }

    .fa-get-pocket:before {
        content: "\f265"; }

    .fa-gg:before {
        content: "\f260"; }

    .fa-gg-circle:before {
        content: "\f261"; }

    .fa-gift:before {
        content: "\f06b"; }

    .fa-git:before {
        content: "\f1d3"; }

    .fa-git-square:before {
        content: "\f1d2"; }

    .fa-github:before {
        content: "\f09b"; }

    .fa-github-alt:before {
        content: "\f113"; }

    .fa-github-square:before {
        content: "\f092"; }

    .fa-gitkraken:before {
        content: "\f3a6"; }

    .fa-gitlab:before {
        content: "\f296"; }

    .fa-gitter:before {
        content: "\f426"; }

    .fa-glass-martini:before {
        content: "\f000"; }

    .fa-glide:before {
        content: "\f2a5"; }

    .fa-glide-g:before {
        content: "\f2a6"; }

    .fa-globe:before {
        content: "\f0ac"; }

    .fa-gofore:before {
        content: "\f3a7"; }

    .fa-golf-ball:before {
        content: "\f450"; }

    .fa-goodreads:before {
        content: "\f3a8"; }

    .fa-goodreads-g:before {
        content: "\f3a9"; }

    .fa-google:before {
        content: "\f1a0"; }

    .fa-google-drive:before {
        content: "\f3aa"; }

    .fa-google-play:before {
        content: "\f3ab"; }

    .fa-google-plus:before {
        content: "\f2b3"; }

    .fa-google-plus-g:before {
        content: "\f0d5"; }

    .fa-google-plus-square:before {
        content: "\f0d4"; }

    .fa-google-wallet:before {
        content: "\f1ee"; }

    .fa-graduation-cap:before {
        content: "\f19d"; }

    .fa-gratipay:before {
        content: "\f184"; }

    .fa-grav:before {
        content: "\f2d6"; }

    .fa-gripfire:before {
        content: "\f3ac"; }

    .fa-grunt:before {
        content: "\f3ad"; }

    .fa-gulp:before {
        content: "\f3ae"; }

    .fa-h-square:before {
        content: "\f0fd"; }

    .fa-hacker-news:before {
        content: "\f1d4"; }

    .fa-hacker-news-square:before {
        content: "\f3af"; }

    .fa-hand-lizard:before {
        content: "\f258"; }

    .fa-hand-paper:before {
        content: "\f256"; }

    .fa-hand-peace:before {
        content: "\f25b"; }

    .fa-hand-point-down:before {
        content: "\f0a7"; }

    .fa-hand-point-left:before {
        content: "\f0a5"; }

    .fa-hand-point-right:before {
        content: "\f0a4"; }

    .fa-hand-point-up:before {
        content: "\f0a6"; }

    .fa-hand-pointer:before {
        content: "\f25a"; }

    .fa-hand-rock:before {
        content: "\f255"; }

    .fa-hand-scissors:before {
        content: "\f257"; }

    .fa-hand-spock:before {
        content: "\f259"; }

    .fa-handshake:before {
        content: "\f2b5"; }

    .fa-hashtag:before {
        content: "\f292"; }

    .fa-hdd:before {
        content: "\f0a0"; }

    .fa-heading:before {
        content: "\f1dc"; }

    .fa-headphones:before {
        content: "\f025"; }

    .fa-heart:before {
        content: "\f004"; }

    .fa-heartbeat:before {
        content: "\f21e"; }

    .fa-hips:before {
        content: "\f452"; }

    .fa-hire-a-helper:before {
        content: "\f3b0"; }

    .fa-history:before {
        content: "\f1da"; }

    .fa-hockey-puck:before {
        content: "\f453"; }

    .fa-home:before {
        content: "\f015"; }

    .fa-hooli:before {
        content: "\f427"; }

    .fa-hospital:before {
        content: "\f0f8"; }

    .fa-hospital-symbol:before {
        content: "\f47e"; }

    .fa-hotjar:before {
        content: "\f3b1"; }

    .fa-hourglass:before {
        content: "\f254"; }

    .fa-hourglass-end:before {
        content: "\f253"; }

    .fa-hourglass-half:before {
        content: "\f252"; }

    .fa-hourglass-start:before {
        content: "\f251"; }

    .fa-houzz:before {
        content: "\f27c"; }

    .fa-html5:before {
        content: "\f13b"; }

    .fa-hubspot:before {
        content: "\f3b2"; }

    .fa-i-cursor:before {
        content: "\f246"; }

    .fa-id-badge:before {
        content: "\f2c1"; }

    .fa-id-card:before {
        content: "\f2c2"; }

    .fa-image:before {
        content: "\f03e"; }

    .fa-images:before {
        content: "\f302"; }

    .fa-imdb:before {
        content: "\f2d8"; }

    .fa-inbox:before {
        content: "\f01c"; }

    .fa-indent:before {
        content: "\f03c"; }

    .fa-industry:before {
        content: "\f275"; }

    .fa-info:before {
        content: "\f129"; }

    .fa-info-circle:before {
        content: "\f05a"; }

    .fa-instagram:before {
        content: "\f16d"; }

    .fa-internet-explorer:before {
        content: "\f26b"; }

    .fa-ioxhost:before {
        content: "\f208"; }

    .fa-italic:before {
        content: "\f033"; }

    .fa-itunes:before {
        content: "\f3b4"; }

    .fa-itunes-note:before {
        content: "\f3b5"; }

    .fa-jenkins:before {
        content: "\f3b6"; }

    .fa-joget:before {
        content: "\f3b7"; }

    .fa-joomla:before {
        content: "\f1aa"; }

    .fa-js:before {
        content: "\f3b8"; }

    .fa-js-square:before {
        content: "\f3b9"; }

    .fa-jsfiddle:before {
        content: "\f1cc"; }

    .fa-key:before {
        content: "\f084"; }

    .fa-keyboard:before {
        content: "\f11c"; }

    .fa-keycdn:before {
        content: "\f3ba"; }

    .fa-kickstarter:before {
        content: "\f3bb"; }

    .fa-kickstarter-k:before {
        content: "\f3bc"; }

    .fa-korvue:before {
        content: "\f42f"; }

    .fa-language:before {
        content: "\f1ab"; }

    .fa-laptop:before {
        content: "\f109"; }

    .fa-laravel:before {
        content: "\f3bd"; }

    .fa-lastfm:before {
        content: "\f202"; }

    .fa-lastfm-square:before {
        content: "\f203"; }

    .fa-leaf:before {
        content: "\f06c"; }

    .fa-leanpub:before {
        content: "\f212"; }

    .fa-lemon:before {
        content: "\f094"; }

    .fa-less:before {
        content: "\f41d"; }

    .fa-level-down-alt:before {
        content: "\f3be"; }

    .fa-level-up-alt:before {
        content: "\f3bf"; }

    .fa-life-ring:before {
        content: "\f1cd"; }

    .fa-lightbulb:before {
        content: "\f0eb"; }

    .fa-line:before {
        content: "\f3c0"; }

    .fa-link:before {
        content: "\f0c1"; }

    .fa-linkedin:before {
        content: "\f08c"; }

    .fa-linkedin-in:before {
        content: "\f0e1"; }

    .fa-linode:before {
        content: "\f2b8"; }

    .fa-linux:before {
        content: "\f17c"; }

    .fa-lira-sign:before {
        content: "\f195"; }

    .fa-list:before {
        content: "\f03a"; }

    .fa-list-alt:before {
        content: "\f022"; }

    .fa-list-ol:before {
        content: "\f0cb"; }

    .fa-list-ul:before {
        content: "\f0ca"; }

    .fa-location-arrow:before {
        content: "\f124"; }

    .fa-lock:before {
        content: "\f023"; }

    .fa-lock-open:before {
        content: "\f3c1"; }

    .fa-long-arrow-alt-down:before {
        content: "\f309"; }

    .fa-long-arrow-alt-left:before {
        content: "\f30a"; }

    .fa-long-arrow-alt-right:before {
        content: "\f30b"; }

    .fa-long-arrow-alt-up:before {
        content: "\f30c"; }

    .fa-low-vision:before {
        content: "\f2a8"; }

    .fa-lyft:before {
        content: "\f3c3"; }

    .fa-magento:before {
        content: "\f3c4"; }

    .fa-magic:before {
        content: "\f0d0"; }

    .fa-magnet:before {
        content: "\f076"; }

    .fa-male:before {
        content: "\f183"; }

    .fa-map:before {
        content: "\f279"; }

    .fa-map-marker:before {
        content: "\f041"; }

    .fa-map-marker-alt:before {
        content: "\f3c5"; }

    .fa-map-pin:before {
        content: "\f276"; }

    .fa-map-signs:before {
        content: "\f277"; }

    .fa-mars:before {
        content: "\f222"; }

    .fa-mars-double:before {
        content: "\f227"; }

    .fa-mars-stroke:before {
        content: "\f229"; }

    .fa-mars-stroke-h:before {
        content: "\f22b"; }

    .fa-mars-stroke-v:before {
        content: "\f22a"; }

    .fa-maxcdn:before {
        content: "\f136"; }

    .fa-medapps:before {
        content: "\f3c6"; }

    .fa-medium:before {
        content: "\f23a"; }

    .fa-medium-m:before {
        content: "\f3c7"; }

    .fa-medkit:before {
        content: "\f0fa"; }

    .fa-medrt:before {
        content: "\f3c8"; }

    .fa-meetup:before {
        content: "\f2e0"; }

    .fa-meh:before {
        content: "\f11a"; }

    .fa-mercury:before {
        content: "\f223"; }

    .fa-microchip:before {
        content: "\f2db"; }

    .fa-microphone:before {
        content: "\f130"; }

    .fa-microphone-slash:before {
        content: "\f131"; }

    .fa-microsoft:before {
        content: "\f3ca"; }

    .fa-minus:before {
        content: "\f068"; }

    .fa-minus-circle:before {
        content: "\f056"; }

    .fa-minus-square:before {
        content: "\f146"; }

    .fa-mix:before {
        content: "\f3cb"; }

    .fa-mixcloud:before {
        content: "\f289"; }

    .fa-mizuni:before {
        content: "\f3cc"; }

    .fa-mobile:before {
        content: "\f10b"; }

    .fa-mobile-alt:before {
        content: "\f3cd"; }

    .fa-modx:before {
        content: "\f285"; }

    .fa-monero:before {
        content: "\f3d0"; }

    .fa-money-bill-alt:before {
        content: "\f3d1"; }

    .fa-moon:before {
        content: "\f186"; }

    .fa-motorcycle:before {
        content: "\f21c"; }

    .fa-mouse-pointer:before {
        content: "\f245"; }

    .fa-music:before {
        content: "\f001"; }

    .fa-napster:before {
        content: "\f3d2"; }

    .fa-neuter:before {
        content: "\f22c"; }

    .fa-newspaper:before {
        content: "\f1ea"; }

    .fa-nintendo-switch:before {
        content: "\f418"; }

    .fa-node:before {
        content: "\f419"; }

    .fa-node-js:before {
        content: "\f3d3"; }

    .fa-npm:before {
        content: "\f3d4"; }

    .fa-ns8:before {
        content: "\f3d5"; }

    .fa-nutritionix:before {
        content: "\f3d6"; }

    .fa-object-group:before {
        content: "\f247"; }

    .fa-object-ungroup:before {
        content: "\f248"; }

    .fa-odnoklassniki:before {
        content: "\f263"; }

    .fa-odnoklassniki-square:before {
        content: "\f264"; }

    .fa-opencart:before {
        content: "\f23d"; }

    .fa-openid:before {
        content: "\f19b"; }

    .fa-opera:before {
        content: "\f26a"; }

    .fa-optin-monster:before {
        content: "\f23c"; }

    .fa-osi:before {
        content: "\f41a"; }

    .fa-outdent:before {
        content: "\f03b"; }

    .fa-page4:before {
        content: "\f3d7"; }

    .fa-pagelines:before {
        content: "\f18c"; }

    .fa-paint-brush:before {
        content: "\f1fc"; }

    .fa-palfed:before {
        content: "\f3d8"; }

    .fa-pallet:before {
        content: "\f482"; }

    .fa-paper-plane:before {
        content: "\f1d8"; }

    .fa-paperclip:before {
        content: "\f0c6"; }

    .fa-paragraph:before {
        content: "\f1dd"; }

    .fa-paste:before {
        content: "\f0ea"; }

    .fa-patreon:before {
        content: "\f3d9"; }

    .fa-pause:before {
        content: "\f04c"; }

    .fa-pause-circle:before {
        content: "\f28b"; }

    .fa-paw:before {
        content: "\f1b0"; }

    .fa-paypal:before {
        content: "\f1ed"; }

    .fa-pen-square:before {
        content: "\f14b"; }

    .fa-pencil-alt:before {
        content: "\f303"; }

    .fa-percent:before {
        content: "\f295"; }

    .fa-periscope:before {
        content: "\f3da"; }

    .fa-phabricator:before {
        content: "\f3db"; }

    .fa-phoenix-framework:before {
        content: "\f3dc"; }

    .fa-phone:before {
        content: "\f095"; }

    .fa-phone-square:before {
        content: "\f098"; }

    .fa-phone-volume:before {
        content: "\f2a0"; }

    .fa-php:before {
        content: "\f457"; }

    .fa-pied-piper:before {
        content: "\f2ae"; }

    .fa-pied-piper-alt:before {
        content: "\f1a8"; }

    .fa-pied-piper-pp:before {
        content: "\f1a7"; }

    .fa-pills:before {
        content: "\f484"; }

    .fa-pinterest:before {
        content: "\f0d2"; }

    .fa-pinterest-p:before {
        content: "\f231"; }

    .fa-pinterest-square:before {
        content: "\f0d3"; }

    .fa-plane:before {
        content: "\f072"; }

    .fa-play:before {
        content: "\f04b"; }

    .fa-play-circle:before {
        content: "\f144"; }

    .fa-playstation:before {
        content: "\f3df"; }

    .fa-plug:before {
        content: "\f1e6"; }

    .fa-plus:before {
        content: "\f067"; }

    .fa-plus-circle:before {
        content: "\f055"; }

    .fa-plus-square:before {
        content: "\f0fe"; }

    .fa-podcast:before {
        content: "\f2ce"; }

    .fa-pound-sign:before {
        content: "\f154"; }

    .fa-power-off:before {
        content: "\f011"; }

    .fa-print:before {
        content: "\f02f"; }

    .fa-product-hunt:before {
        content: "\f288"; }

    .fa-pushed:before {
        content: "\f3e1"; }

    .fa-puzzle-piece:before {
        content: "\f12e"; }

    .fa-python:before {
        content: "\f3e2"; }

    .fa-qq:before {
        content: "\f1d6"; }

    .fa-qrcode:before {
        content: "\f029"; }

    .fa-question:before {
        content: "\f128"; }

    .fa-question-circle:before {
        content: "\f059"; }

    .fa-quidditch:before {
        content: "\f458"; }

    .fa-quinscape:before {
        content: "\f459"; }

    .fa-quora:before {
        content: "\f2c4"; }

    .fa-quote-left:before {
        content: "\f10d"; }

    .fa-quote-right:before {
        content: "\f10e"; }

    .fa-random:before {
        content: "\f074"; }

    .fa-ravelry:before {
        content: "\f2d9"; }

    .fa-react:before {
        content: "\f41b"; }

    .fa-rebel:before {
        content: "\f1d0"; }

    .fa-recycle:before {
        content: "\f1b8"; }

    .fa-red-river:before {
        content: "\f3e3"; }

    .fa-reddit:before {
        content: "\f1a1"; }

    .fa-reddit-alien:before {
        content: "\f281"; }

    .fa-reddit-square:before {
        content: "\f1a2"; }

    .fa-redo:before {
        content: "\f01e"; }

    .fa-redo-alt:before {
        content: "\f2f9"; }

    .fa-registered:before {
        content: "\f25d"; }

    .fa-rendact:before {
        content: "\f3e4"; }

    .fa-renren:before {
        content: "\f18b"; }

    .fa-reply:before {
        content: "\f3e5"; }

    .fa-reply-all:before {
        content: "\f122"; }

    .fa-replyd:before {
        content: "\f3e6"; }

    .fa-resolving:before {
        content: "\f3e7"; }

    .fa-retweet:before {
        content: "\f079"; }

    .fa-road:before {
        content: "\f018"; }

    .fa-rocket:before {
        content: "\f135"; }

    .fa-rocketchat:before {
        content: "\f3e8"; }

    .fa-rockrms:before {
        content: "\f3e9"; }

    .fa-rss:before {
        content: "\f09e"; }

    .fa-rss-square:before {
        content: "\f143"; }

    .fa-ruble-sign:before {
        content: "\f158"; }

    .fa-rupee-sign:before {
        content: "\f156"; }

    .fa-safari:before {
        content: "\f267"; }

    .fa-sass:before {
        content: "\f41e"; }

    .fa-save:before {
        content: "\f0c7"; }

    .fa-schlix:before {
        content: "\f3ea"; }

    .fa-scribd:before {
        content: "\f28a"; }

    .fa-search:before {
        content: "\f002"; }

    .fa-search-minus:before {
        content: "\f010"; }

    .fa-search-plus:before {
        content: "\f00e"; }

    .fa-searchengin:before {
        content: "\f3eb"; }

    .fa-sellcast:before {
        content: "\f2da"; }

    .fa-sellsy:before {
        content: "\f213"; }

    .fa-server:before {
        content: "\f233"; }

    .fa-servicestack:before {
        content: "\f3ec"; }

    .fa-share:before {
        content: "\f064"; }

    .fa-share-alt:before {
        content: "\f1e0"; }

    .fa-share-alt-square:before {
        content: "\f1e1"; }

    .fa-share-square:before {
        content: "\f14d"; }

    .fa-shekel-sign:before {
        content: "\f20b"; }

    .fa-shield-alt:before {
        content: "\f3ed"; }

    .fa-ship:before {
        content: "\f21a"; }

    .fa-shipping-fast:before {
        content: "\f48b"; }

    .fa-shirtsinbulk:before {
        content: "\f214"; }

    .fa-shopping-bag:before {
        content: "\f290"; }

    .fa-shopping-basket:before {
        content: "\f291"; }

    .fa-shopping-cart:before {
        content: "\f07a"; }

    .fa-shower:before {
        content: "\f2cc"; }

    .fa-sign-in-alt:before {
        content: "\f2f6"; }

    .fa-sign-language:before {
        content: "\f2a7"; }

    .fa-sign-out-alt:before {
        content: "\f2f5"; }

    .fa-signal:before {
        content: "\f012"; }

    .fa-simplybuilt:before {
        content: "\f215"; }

    .fa-sistrix:before {
        content: "\f3ee"; }

    .fa-sitemap:before {
        content: "\f0e8"; }

    .fa-skyatlas:before {
        content: "\f216"; }

    .fa-skype:before {
        content: "\f17e"; }

    .fa-slack:before {
        content: "\f198"; }

    .fa-slack-hash:before {
        content: "\f3ef"; }

    .fa-sliders-h:before {
        content: "\f1de"; }

    .fa-slideshare:before {
        content: "\f1e7"; }

    .fa-smile:before {
        content: "\f118"; }

    .fa-snapchat:before {
        content: "\f2ab"; }

    .fa-snapchat-ghost:before {
        content: "\f2ac"; }

    .fa-snapchat-square:before {
        content: "\f2ad"; }

    .fa-snowflake:before {
        content: "\f2dc"; }

    .fa-sort:before {
        content: "\f0dc"; }

    .fa-sort-alpha-down:before {
        content: "\f15d"; }

    .fa-sort-alpha-up:before {
        content: "\f15e"; }

    .fa-sort-amount-down:before {
        content: "\f160"; }

    .fa-sort-amount-up:before {
        content: "\f161"; }

    .fa-sort-down:before {
        content: "\f0dd"; }

    .fa-sort-numeric-down:before {
        content: "\f162"; }

    .fa-sort-numeric-up:before {
        content: "\f163"; }

    .fa-sort-up:before {
        content: "\f0de"; }

    .fa-soundcloud:before {
        content: "\f1be"; }

    .fa-space-shuttle:before {
        content: "\f197"; }

    .fa-speakap:before {
        content: "\f3f3"; }

    .fa-spinner:before {
        content: "\f110"; }

    .fa-spotify:before {
        content: "\f1bc"; }

    .fa-square:before {
        content: "\f0c8"; }

    .fa-square-full:before {
        content: "\f45c"; }

    .fa-stack-exchange:before {
        content: "\f18d"; }

    .fa-stack-overflow:before {
        content: "\f16c"; }

    .fa-star:before {
        content: "\f005"; }

    .fa-star-half:before {
        content: "\f089"; }

    .fa-staylinked:before {
        content: "\f3f5"; }

    .fa-steam:before {
        content: "\f1b6"; }

    .fa-steam-square:before {
        content: "\f1b7"; }

    .fa-steam-symbol:before {
        content: "\f3f6"; }

    .fa-step-backward:before {
        content: "\f048"; }

    .fa-step-forward:before {
        content: "\f051"; }

    .fa-stethoscope:before {
        content: "\f0f1"; }

    .fa-sticker-mule:before {
        content: "\f3f7"; }

    .fa-sticky-note:before {
        content: "\f249"; }

    .fa-stop:before {
        content: "\f04d"; }

    .fa-stop-circle:before {
        content: "\f28d"; }

    .fa-stopwatch:before {
        content: "\f2f2"; }

    .fa-strava:before {
        content: "\f428"; }

    .fa-street-view:before {
        content: "\f21d"; }

    .fa-strikethrough:before {
        content: "\f0cc"; }

    .fa-stripe:before {
        content: "\f429"; }

    .fa-stripe-s:before {
        content: "\f42a"; }

    .fa-studiovinari:before {
        content: "\f3f8"; }

    .fa-stumbleupon:before {
        content: "\f1a4"; }

    .fa-stumbleupon-circle:before {
        content: "\f1a3"; }

    .fa-subscript:before {
        content: "\f12c"; }

    .fa-subway:before {
        content: "\f239"; }

    .fa-suitcase:before {
        content: "\f0f2"; }

    .fa-sun:before {
        content: "\f185"; }

    .fa-superpowers:before {
        content: "\f2dd"; }

    .fa-superscript:before {
        content: "\f12b"; }

    .fa-supple:before {
        content: "\f3f9"; }

    .fa-sync:before {
        content: "\f021"; }

    .fa-sync-alt:before {
        content: "\f2f1"; }

    .fa-syringe:before {
        content: "\f48e"; }

    .fa-table:before {
        content: "\f0ce"; }

    .fa-table-tennis:before {
        content: "\f45d"; }

    .fa-tablet:before {
        content: "\f10a"; }

    .fa-tablet-alt:before {
        content: "\f3fa"; }

    .fa-tachometer-alt:before {
        content: "\f3fd"; }

    .fa-tag:before {
        content: "\f02b"; }

    .fa-tags:before {
        content: "\f02c"; }

    .fa-tasks:before {
        content: "\f0ae"; }

    .fa-taxi:before {
        content: "\f1ba"; }

    .fa-telegram:before {
        content: "\f2c6"; }

    .fa-telegram-plane:before {
        content: "\f3fe"; }

    .fa-tencent-weibo:before {
        content: "\f1d5"; }

    .fa-terminal:before {
        content: "\f120"; }

    .fa-text-height:before {
        content: "\f034"; }

    .fa-text-width:before {
        content: "\f035"; }

    .fa-th:before {
        content: "\f00a"; }

    .fa-th-large:before {
        content: "\f009"; }

    .fa-th-list:before {
        content: "\f00b"; }

    .fa-themeisle:before {
        content: "\f2b2"; }

    .fa-thermometer:before {
        content: "\f491"; }

    .fa-thermometer-empty:before {
        content: "\f2cb"; }

    .fa-thermometer-full:before {
        content: "\f2c7"; }

    .fa-thermometer-half:before {
        content: "\f2c9"; }

    .fa-thermometer-quarter:before {
        content: "\f2ca"; }

    .fa-thermometer-three-quarters:before {
        content: "\f2c8"; }

    .fa-thumbs-down:before {
        content: "\f165"; }

    .fa-thumbs-up:before {
        content: "\f164"; }

    .fa-thumbtack:before {
        content: "\f08d"; }

    .fa-ticket-alt:before {
        content: "\f3ff"; }

    .fa-times:before {
        content: "\f00d"; }

    .fa-times-circle:before {
        content: "\f057"; }

    .fa-tint:before {
        content: "\f043"; }

    .fa-toggle-off:before {
        content: "\f204"; }

    .fa-toggle-on:before {
        content: "\f205"; }

    .fa-trademark:before {
        content: "\f25c"; }

    .fa-train:before {
        content: "\f238"; }

    .fa-transgender:before {
        content: "\f224"; }

    .fa-transgender-alt:before {
        content: "\f225"; }

    .fa-trash:before {
        content: "\f1f8"; }

    .fa-trash-alt:before {
        content: "\f2ed"; }

    .fa-tree:before {
        content: "\f1bb"; }

    .fa-trello:before {
        content: "\f181"; }

    .fa-tripadvisor:before {
        content: "\f262"; }

    .fa-trophy:before {
        content: "\f091"; }

    .fa-truck:before {
        content: "\f0d1"; }

    .fa-tty:before {
        content: "\f1e4"; }

    .fa-tumblr:before {
        content: "\f173"; }

    .fa-tumblr-square:before {
        content: "\f174"; }

    .fa-tv:before {
        content: "\f26c"; }

    .fa-twitch:before {
        content: "\f1e8"; }

    .fa-twitter:before {
        content: "\f099"; }

    .fa-twitter-square:before {
        content: "\f081"; }

    .fa-typo3:before {
        content: "\f42b"; }

    .fa-uber:before {
        content: "\f402"; }

    .fa-uikit:before {
        content: "\f403"; }

    .fa-umbrella:before {
        content: "\f0e9"; }

    .fa-underline:before {
        content: "\f0cd"; }

    .fa-undo:before {
        content: "\f0e2"; }

    .fa-undo-alt:before {
        content: "\f2ea"; }

    .fa-uniregistry:before {
        content: "\f404"; }

    .fa-universal-access:before {
        content: "\f29a"; }

    .fa-university:before {
        content: "\f19c"; }

    .fa-unlink:before {
        content: "\f127"; }

    .fa-unlock:before {
        content: "\f09c"; }

    .fa-unlock-alt:before {
        content: "\f13e"; }

    .fa-untappd:before {
        content: "\f405"; }

    .fa-upload:before {
        content: "\f093"; }

    .fa-usb:before {
        content: "\f287"; }

    .fa-user:before {
        content: "\f007"; }

    .fa-user-circle:before {
        content: "\f2bd"; }

    .fa-user-md:before {
        content: "\f0f0"; }

    .fa-user-plus:before {
        content: "\f234"; }

    .fa-user-secret:before {
        content: "\f21b"; }

    .fa-user-times:before {
        content: "\f235"; }

    .fa-users:before {
        content: "\f0c0"; }

    .fa-ussunnah:before {
        content: "\f407"; }

    .fa-utensil-spoon:before {
        content: "\f2e5"; }

    .fa-utensils:before {
        content: "\f2e7"; }

    .fa-vaadin:before {
        content: "\f408"; }

    .fa-venus:before {
        content: "\f221"; }

    .fa-venus-double:before {
        content: "\f226"; }

    .fa-venus-mars:before {
        content: "\f228"; }

    .fa-viacoin:before {
        content: "\f237"; }

    .fa-viadeo:before {
        content: "\f2a9"; }

    .fa-viadeo-square:before {
        content: "\f2aa"; }

    .fa-viber:before {
        content: "\f409"; }

    .fa-video:before {
        content: "\f03d"; }

    .fa-vimeo:before {
        content: "\f40a"; }

    .fa-vimeo-square:before {
        content: "\f194"; }

    .fa-vimeo-v:before {
        content: "\f27d"; }

    .fa-vine:before {
        content: "\f1ca"; }

    .fa-vk:before {
        content: "\f189"; }

    .fa-vnv:before {
        content: "\f40b"; }

    .fa-volleyball-ball:before {
        content: "\f45f"; }

    .fa-volume-down:before {
        content: "\f027"; }

    .fa-volume-off:before {
        content: "\f026"; }

    .fa-volume-up:before {
        content: "\f028"; }

    .fa-vuejs:before {
        content: "\f41f"; }

    .fa-warehouse:before {
        content: "\f494"; }

    .fa-weibo:before {
        content: "\f18a"; }

    .fa-weight:before {
        content: "\f496"; }

    .fa-weixin:before {
        content: "\f1d7"; }

    .fa-whatsapp:before {
        content: "\f232"; }

    .fa-whatsapp-square:before {
        content: "\f40c"; }

    .fa-wheelchair:before {
        content: "\f193"; }

    .fa-whmcs:before {
        content: "\f40d"; }

    .fa-wifi:before {
        content: "\f1eb"; }

    .fa-wikipedia-w:before {
        content: "\f266"; }

    .fa-window-close:before {
        content: "\f410"; }

    .fa-window-maximize:before {
        content: "\f2d0"; }

    .fa-window-minimize:before {
        content: "\f2d1"; }

    .fa-window-restore:before {
        content: "\f2d2"; }

    .fa-windows:before {
        content: "\f17a"; }

    .fa-won-sign:before {
        content: "\f159"; }

    .fa-wordpress:before {
        content: "\f19a"; }

    .fa-wordpress-simple:before {
        content: "\f411"; }

    .fa-wpbeginner:before {
        content: "\f297"; }

    .fa-wpexplorer:before {
        content: "\f2de"; }

    .fa-wpforms:before {
        content: "\f298"; }

    .fa-wrench:before {
        content: "\f0ad"; }

    .fa-xbox:before {
        content: "\f412"; }

    .fa-xing:before {
        content: "\f168"; }

    .fa-xing-square:before {
        content: "\f169"; }

    .fa-y-combinator:before {
        content: "\f23b"; }

    .fa-yahoo:before {
        content: "\f19e"; }

    .fa-yandex:before {
        content: "\f413"; }

    .fa-yandex-international:before {
        content: "\f414"; }

    .fa-yelp:before {
        content: "\f1e9"; }

    .fa-yen-sign:before {
        content: "\f157"; }

    .fa-yoast:before {
        content: "\f2b1"; }

    .fa-youtube:before {
        content: "\f167"; }

    .fa-youtube-square:before {
        content: "\f431"; }

    .sr-only {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px; }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto; }
    @font-face {
        font-family: 'Font Awesome 5 Brands';
        font-style: normal;
        font-weight: normal;
        src: url("../webfonts/fa-brands-400.eot");
        src: url("../webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-brands-400.woff2") format("woff2"), url("../webfonts/fa-brands-400.woff") format("woff"), url("../webfonts/fa-brands-400.ttf") format("truetype"), url("../webfonts/fa-brands-400.svg#fontawesome") format("svg"); }

    .fab {
        font-family: 'Font Awesome 5 Brands'; }
    @font-face {
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 400;
        src: url("../webfonts/fa-regular-400.eot");
        src: url("../webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-regular-400.woff2") format("woff2"), url("../webfonts/fa-regular-400.woff") format("woff"), url("../webfonts/fa-regular-400.ttf") format("truetype"), url("../webfonts/fa-regular-400.svg#fontawesome") format("svg"); }

    .far {
        font-family: 'Font Awesome 5 Free';
        font-weight: 400; }
    @font-face {
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 900;
        src: url("../webfonts/fa-solid-900.eot");
        src: url("../webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-solid-900.woff2") format("woff2"), url("../webfonts/fa-solid-900.woff") format("woff"), url("../webfonts/fa-solid-900.ttf") format("truetype"), url("../webfonts/fa-solid-900.svg#fontawesome") format("svg"); }

    .fa,
    .fas {
        font-family: 'Font Awesome 5 Free';
        font-weight: 900; }




</style>

