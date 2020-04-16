<?php

/* @var $this yii\web\View */
ini_set('memory_limit', '1024M');

use bsadnu\googlecharts\PieChart;
use kartik\select2\Select2;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

$this->title = '';
?>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-lite-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">TZS

                        </h4>
                        <h6 class="text-white m-b-0">TOTAL COLLECTION</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-1" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="fa fa-cog"></i>update :<?= date('H:i') ?></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">
                            TZS

                        </h4>
                        <h6 class="text-white m-b-0">UBUNGO </h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-2" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="fa fa-cog"></i>update :<?= date('H:i') ?></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-pink update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">TZ

                        </h4>
                        <h6 class="text-white m-b-0">KINONDONI</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-3" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="fa fa-cog"></i>update :<?= date('H:i') ?></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-lite-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">
                            TZ

                        </h4>
                        <h6 class="text-white m-b-0">ZONE 1</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-4" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="fa fa-cog"></i>update :<?= date('H:i') ?></p>
            </div>
        </div>
    </div>    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-yellow update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">
                            TZ

                        </h4>
                        <h6 class="text-white m-b-0">ZONE 2</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-1" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="fa fa-cog"></i>update :<?= date('H:i') ?></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-c-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-8">
                        <h4 class="text-white">TZS

                        </h4>
                        <h6 class="text-white m-b-0">ZONE 3</h6>
                    </div>
                    <div class="col-4 text-right">
                        <canvas id="update-chart-2" height="50"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="fa fa-cog"></i>update :<?= date('H:i') ?></p>
            </div>
        </div>
    </div>


</div>

<?php
$series = [
    [
        'name' => 'Entity 1',
        'data' => [
            ['2018-10-04', 4.66],
            ['2018-10-05', 9.0],
        ],
    ],
    [
        'name' => 'Entity 2',
        'data' => [
            ['2018-10-04', 6.88],
            ['2018-10-05', 3.77],
        ],
    ],
    [
        'name' => 'Entity 3',
        'data' => [
            ['2018-10-04', 4.40],
            ['2018-10-05', 5.0],
        ],
    ],
    [
        'name' => 'Entity 4',
        'data' => [
            ['2018-10-04', 4.5],
            ['2018-10-05', 4.18],
        ],
    ],
];



?>

<style>

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
    }


    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }


    .col-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-12 {
        -ms-flex-order: 12;
        order: 12
    }







    .col-form-legend {
        padding-top: .5rem;
        padding-bottom: .5rem;
        margin-bottom: 0;
        font-size: 1rem
    }

    .form-control-plaintext {
        padding-top: .5rem;
        padding-bottom: .5rem;
        margin-bottom: 0;
        line-height: 1.25;
        border: solid transparent;
        border-width: 1px 0
    }

    .form-control-plaintext.form-control-lg, .form-control-plaintext.form-control-sm, .input-group-lg > .form-control-plaintext.form-control, .input-group-lg > .form-control-plaintext.input-group-addon, .input-group-lg > .input-group-btn > .form-control-plaintext.btn, .input-group-sm > .form-control-plaintext.form-control, .input-group-sm > .form-control-plaintext.input-group-addon, .input-group-sm > .input-group-btn > .form-control-plaintext.btn {
        padding-right: 0;
        padding-left: 0
    }





    .btn-dark.focus, .btn-dark:focus {
        box-shadow: 0 0 0 3px rgba(52, 58, 64, .5)
    }

    .btn-dark.disabled, .btn-dark:disabled {
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark.active, .btn-dark:active, .show > .btn-dark.dropdown-toggle {
        background-color: #23272b;
        background-image: none;
        border-color: #1d2124
    }

    .btn-outline-primary {
        color: #007bff;
        background-color: transparent;
        background-image: none;
        border-color: #007bff
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-outline-primary.focus, .btn-outline-primary:focus {
        box-shadow: 0 0 0 3px rgba(0, 123, 255, .5)
    }

    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #007bff;
        background-color: transparent
    }

    .btn-outline-primary.active, .btn-outline-primary:active, .show > .btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-outline-secondary {
        color: #868e96;
        background-color: transparent;
        background-image: none;
        border-color: #868e96
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #868e96;
        border-color: #868e96
    }

    .btn-outline-secondary.focus, .btn-outline-secondary:focus {
        box-shadow: 0 0 0 3px rgba(134, 142, 150, .5)
    }

    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #868e96;
        background-color: transparent
    }

    .btn-outline-danger.focus, .btn-outline-danger:focus {
        box-shadow: 0 0 0 3px rgba(220, 53, 69, .5)
    }

    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent
    }

    .btn-outline-danger.active, .btn-outline-danger:active, .show > .btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-outline-light {
        color: #f8f9fa;
        background-color: transparent;
        background-image: none;
        border-color: #f8f9fa
    }

    .btn-outline-light:hover {
        color: #fff;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-outline-light.focus, .btn-outline-light:focus {
        box-shadow: 0 0 0 3px rgba(248, 249, 250, .5)
    }

    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent
    }

    .btn-outline-light.active, .btn-outline-light:active, .show > .btn-outline-light.dropdown-toggle {
        color: #fff;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-outline-dark {
        color: #343a40;
        background-color: transparent;
        background-image: none;
        border-color: #343a40
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-outline-dark.focus, .btn-outline-dark:focus {
        box-shadow: 0 0 0 3px rgba(52, 58, 64, .5)
    }

    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent
    }

    .btn-outline-dark.active, .btn-outline-dark:active, .show > .btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-link {
        font-weight: 400;
        color: #007bff;
        border-radius: 0
    }

    .btn-link, .btn-link.active, .btn-link:active, .btn-link:disabled {
        background-color: transparent
    }

    .btn-link, .btn-link:active, .btn-link:focus {
        border-color: transparent;
        box-shadow: none
    }

    .btn-link:hover {
        border-color: transparent
    }

    .btn-link:focus, .btn-link:hover {
        color: #0056b3;
        text-decoration: underline;
        background-color: transparent
    }

    .btn-link:disabled {
        color: #868e96
    }

    .btn-link:disabled:focus, .btn-link:disabled:hover {
        text-decoration: none
    }

    .btn-group-lg > .btn, .btn-lg {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem
    }

    .btn-group-sm > .btn, .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block + .btn-block {
        margin-top: .5rem
    }

    input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
        width: 100%
    }

    .fade {
        opacity: 0;
        transition: opacity .15s linear
    }

    .fade.show {
        opacity: 1
    }

    .collapse {
        display: none
    }

    .collapse.show {
        display: block
    }

    tr.collapse.show {
        display: table-row
    }

    tbody.collapse.show {
        display: table-row-group
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        transition: height .35s ease
    }

    .dropdown, .dropup {
        position: relative
    }

    .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-left: .3em solid transparent
    }

    .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropup .dropdown-menu {
        margin-top: 0;
        margin-bottom: .125rem
    }

    .dropup .dropdown-toggle::after {
        border-top: 0;
        border-bottom: .3em solid
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem
    }

    .dropdown-divider {
        height: 0;
        margin: .5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background: 0 0;
        border: 0
    }

    .dropdown-item:focus, .dropdown-item:hover {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa
    }

    .dropdown-item.active, .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #007bff
    }

    .dropdown-item.disabled, .dropdown-item:disabled {
        color: #868e96;
        background-color: transparent
    }

    .show > a {
        outline: 0
    }

    .dropdown-menu.show {
        display: block
    }

    .dropdown-header {
        display: block;
        padding: .5rem 1.5rem;
        margin-bottom: 0;
        font-size: .875rem;
        color: #868e96;
        white-space: nowrap
    }

    .btn-group, .btn-group-vertical {
        position: relative;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle
    }

    .btn-group-vertical > .btn, .btn-group > .btn {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        margin-bottom: 0
    }

    .btn-group-vertical > .btn:hover, .btn-group > .btn:hover {
        z-index: 2
    }

    .btn-group-vertical > .btn.active, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn:focus, .btn-group > .btn.active, .btn-group > .btn:active, .btn-group > .btn:focus {
        z-index: 2
    }

    .btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group, .btn-group-vertical .btn + .btn, .btn-group-vertical .btn + .btn-group, .btn-group-vertical .btn-group + .btn, .btn-group-vertical .btn-group + .btn-group {
        margin-left: -1px
    }

    .btn-toolbar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .btn-toolbar .input-group {
        width: auto
    }

    .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0
    }

    .btn-group > .btn:first-child {
        margin-left: 0
    }

    .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }



    @media (min-width: 992px) {
        .navbar-expand-lg {
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-lg .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand-lg .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .navbar-expand-lg .navbar-toggler {
            display: none
        }
    }

    @media (max-width: 1199px) {
        .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-xl .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand-xl .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .navbar-expand-xl .navbar-toggler {
            display: none
        }
    }

    .navbar-expand {
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand > .container, .navbar-expand > .container-fluid {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-expand .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand > .container, .navbar-expand > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important
    }

    .navbar-expand .navbar-toggler {
        display: none
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, .3)
    }

    .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, .5);
        border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-dark .navbar-brand {
        color: #fff
    }

    .navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75)
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, .25)
    }

    .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link {
        color: #fff
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .5);
        border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .5)
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .card-title {
        margin-bottom: .75rem
    }

    .card-subtitle {
        margin-top: -.375rem;
        margin-bottom: 0
    }

    .card-text:last-child {
        margin-bottom: 0
    }

    .card-link:hover {
        text-decoration: none
    }

    .card-link + .card-link {
        margin-left: 1.25rem
    }

    .card > .list-group:first-child .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .card > .list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125)
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
    }

    .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0, 0, 0, .03);
        border-top: 1px solid rgba(0, 0, 0, .125)
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
    }

    .card-header-tabs {
        margin-right: -.625rem;
        margin-bottom: -.75rem;
        margin-left: -.625rem;
        border-bottom: 0
    }

    .card-header-pills {
        margin-right: -.625rem;
        margin-left: -.625rem
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem
    }

    .card-img {
        width: 100%;
        border-radius: calc(.25rem - 1px)
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px)
    }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(.25rem - 1px);
        border-bottom-left-radius: calc(.25rem - 1px)
    }

    @media (min-width: 576px) {
        .card-deck {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .card-deck .card {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-right: 15px;
            margin-left: 15px
        }
    }

    @media (min-width: 576px) {
        .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap
        }

        .card-group .card {
            -ms-flex: 1 0 0%;
            flex: 1 0 0%
        }

        .card-group .card + .card {
            margin-left: 0;
            border-left: 0
        }

        .card-group .card:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .card-group .card:first-child .card-img-top {
            border-top-right-radius: 0
        }

        .card-group .card:first-child .card-img-bottom {
            border-bottom-right-radius: 0
        }

        .card-group .card:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .card-group .card:last-child .card-img-top {
            border-top-left-radius: 0
        }

        .card-group .card:last-child .card-img-bottom {
            border-bottom-left-radius: 0
        }

        .card-group .card:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .card-group .card:not(:first-child):not(:last-child) .card-img-bottom, .card-group .card:not(:first-child):not(:last-child) .card-img-top {
            border-radius: 0
        }
    }

    .card-columns .card {
        margin-bottom: .75rem
    }

    @media (min-width: 576px) {
        .card-columns {
            -webkit-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 1.25rem;
            column-gap: 1.25rem
        }

        .card-columns .card {
            display: inline-block;
            width: 100%
        }
    }

    .breadcrumb {
        padding: .75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        border-radius: .25rem
    }

    .breadcrumb::after {
        display: block;
        clear: both;
        content: ""
    }

    .breadcrumb-item {
        float: left
    }

    .breadcrumb-item + .breadcrumb-item::before {
        display: inline-block;
        padding-right: .5rem;
        padding-left: .5rem;
        color: #868e96;
        content: "/"
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: underline
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: none
    }

    .breadcrumb-item.active {
        color: #868e96
    }

    .pagination {
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: .25rem
    }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .page-item:last-child .page-link {
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem
    }

    .page-item.active .page-link {
        z-index: 2;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .page-item.disabled .page-link {
        color: #868e96;
        pointer-events: none;
        background-color: #fff;
        border-color: #ddd
    }

    .page-link {
        position: relative;
        display: block;
        padding: .5rem .75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #ddd
    }

    .page-link:focus, .page-link:hover {
        color: #0056b3;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #ddd
    }

    .pagination-lg .page-link {
        padding: .75rem 1.5rem;
        font-size: 1.25rem;
        line-height: 1.5
    }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: .3rem;
        border-bottom-left-radius: .3rem
    }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem
    }

    .pagination-sm .page-link {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: .2rem;
        border-bottom-left-radius: .2rem
    }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: .2rem;
        border-bottom-right-radius: .2rem
    }

    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem
    }

    .badge:empty {
        display: none
    }

    .btn .badge {
        position: relative;
        top: -1px
    }

    .badge-pill {
        padding-right: .6em;
        padding-left: .6em;
        border-radius: 10rem
    }

    .badge-primary {
        color: #fff;
        background-color: #007bff
    }

    .badge-primary[href]:focus, .badge-primary[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #0062cc
    }

    .badge-secondary {
        color: #fff;
        background-color: #868e96
    }

    .badge-secondary[href]:focus, .badge-secondary[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #6c757d
    }

    .badge-success {
        color: #fff;
        background-color: #28a745
    }

    .badge-success[href]:focus, .badge-success[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #1e7e34
    }

    .badge-info {
        color: #fff;
        background-color: #17a2b8
    }

    .badge-info[href]:focus, .badge-info[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #117a8b
    }

    .badge-warning {
        color: #111;
        background-color: #ffc107
    }

    .badge-warning[href]:focus, .badge-warning[href]:hover {
        color: #111;
        text-decoration: none;
        background-color: #d39e00
    }

    .badge-danger {
        color: #fff;
        background-color: #dc3545
    }

    .badge-danger[href]:focus, .badge-danger[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #bd2130
    }

    .badge-light {
        color: #111;
        background-color: #f8f9fa
    }

    .badge-light[href]:focus, .badge-light[href]:hover {
        color: #111;
        text-decoration: none;
        background-color: #dae0e5
    }

    .badge-dark {
        color: #fff;
        background-color: #343a40
    }

    .badge-dark[href]:focus, .badge-dark[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #1d2124
    }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: .3rem
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem
        }
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0
    }

    .alert {
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem
    }

    .alert-heading {
        color: inherit
    }

    .alert-link {
        font-weight: 700
    }

    .alert-dismissible .close {
        position: relative;
        top: -.75rem;
        right: -1.25rem;
        padding: .75rem 1.25rem;
        color: inherit
    }

    .alert-primary {
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff
    }

    .alert-primary hr {
        border-top-color: #9fcdff
    }

    .alert-primary .alert-link {
        color: #002752
    }

    .alert-secondary {
        color: #464a4e;
        background-color: #e7e8ea;
        border-color: #dddfe2
    }

    .alert-secondary hr {
        border-top-color: #cfd2d6
    }

    .alert-secondary .alert-link {
        color: #2e3133
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb
    }

    .alert-success hr {
        border-top-color: #b1dfbb
    }

    .alert-success .alert-link {
        color: #0b2e13
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb
    }

    .alert-info hr {
        border-top-color: #abdde5
    }

    .alert-info .alert-link {
        color: #062c33
    }

    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba
    }

    .alert-warning hr {
        border-top-color: #ffe8a1
    }

    .alert-warning .alert-link {
        color: #533f03
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb
    }

    .alert-danger hr {
        border-top-color: #f1b0b7
    }

    .alert-danger .alert-link {
        color: #491217
    }

    .alert-light {
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe
    }

    .alert-light hr {
        border-top-color: #ececf6
    }

    .alert-light .alert-link {
        color: #686868
    }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca
    }

    .alert-dark hr {
        border-top-color: #b9bbbe
    }

    .alert-dark .alert-link {
        color: #040505
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0
        }
        to {
            background-position: 0 0
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0
        }
        to {
            background-position: 0 0
        }
    }

    .progress {
        display: -ms-flexbox;
        display: flex;
        overflow: hidden;
        font-size: .75rem;
        line-height: 1rem;
        text-align: center;
        background-color: #e9ecef;
        border-radius: .25rem
    }

    .progress-bar {
        height: 1rem;
        line-height: 1rem;
        color: #fff;
        background-color: #007bff;
        transition: width .6s ease
    }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem
    }

    .progress-bar-animated {
        -webkit-animation: progress-bar-stripes 1s linear infinite;
        animation: progress-bar-stripes 1s linear infinite
    }

    .media {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .media-body {
        -ms-flex: 1;
        flex: 1
    }

    .list-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0
    }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit
    }

    .list-group-item-action:focus, .list-group-item-action:hover {
        color: #495057;
        text-decoration: none;
        background-color: #f8f9fa
    }

    .list-group-item-action:active {
        color: #212529;
        background-color: #e9ecef
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: .75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .125)
    }

    .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .list-group-item:focus, .list-group-item:hover {
        text-decoration: none
    }

    .list-group-item.disabled, .list-group-item:disabled {
        color: #868e96;
        background-color: #fff
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0
    }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0
    }

    .list-group-flush:last-child .list-group-item:last-child {
        border-bottom: 0
    }

    .list-group-item-primary {
        color: #004085;
        background-color: #b8daff
    }

    a.list-group-item-primary, button.list-group-item-primary {
        color: #004085
    }

    a.list-group-item-primary:focus, a.list-group-item-primary:hover, button.list-group-item-primary:focus, button.list-group-item-primary:hover {
        color: #004085;
        background-color: #9fcdff
    }

    a.list-group-item-primary.active, button.list-group-item-primary.active {
        color: #fff;
        background-color: #004085;
        border-color: #004085
    }

    .list-group-item-secondary {
        color: #464a4e;
        background-color: #dddfe2
    }

    a.list-group-item-secondary, button.list-group-item-secondary {
        color: #464a4e
    }

    a.list-group-item-secondary:focus, a.list-group-item-secondary:hover, button.list-group-item-secondary:focus, button.list-group-item-secondary:hover {
        color: #464a4e;
        background-color: #cfd2d6
    }

    a.list-group-item-secondary.active, button.list-group-item-secondary.active {
        color: #fff;
        background-color: #464a4e;
        border-color: #464a4e
    }

    .list-group-item-success {
        color: #155724;
        background-color: #c3e6cb
    }

    a.list-group-item-success, button.list-group-item-success {
        color: #155724
    }

    a.list-group-item-success:focus, a.list-group-item-success:hover, button.list-group-item-success:focus, button.list-group-item-success:hover {
        color: #155724;
        background-color: #b1dfbb
    }

    a.list-group-item-success.active, button.list-group-item-success.active {
        color: #fff;
        background-color: #155724;
        border-color: #155724
    }

    .list-group-item-info {
        color: #0c5460;
        background-color: #bee5eb
    }

    a.list-group-item-info, button.list-group-item-info {
        color: #0c5460
    }

    a.list-group-item-info:focus, a.list-group-item-info:hover, button.list-group-item-info:focus, button.list-group-item-info:hover {
        color: #0c5460;
        background-color: #abdde5
    }

    a.list-group-item-info.active, button.list-group-item-info.active {
        color: #fff;
        background-color: #0c5460;
        border-color: #0c5460
    }

    .list-group-item-warning {
        color: #856404;
        background-color: #ffeeba
    }

    a.list-group-item-warning, button.list-group-item-warning {
        color: #856404
    }

    a.list-group-item-warning:focus, a.list-group-item-warning:hover, button.list-group-item-warning:focus, button.list-group-item-warning:hover {
        color: #856404;
        background-color: #ffe8a1
    }

    a.list-group-item-warning.active, button.list-group-item-warning.active {
        color: #fff;
        background-color: #856404;
        border-color: #856404
    }

    .list-group-item-danger {
        color: #721c24;
        background-color: #f5c6cb
    }

    a.list-group-item-danger, button.list-group-item-danger {
        color: #721c24
    }

    a.list-group-item-danger:focus, a.list-group-item-danger:hover, button.list-group-item-danger:focus, button.list-group-item-danger:hover {
        color: #721c24;
        background-color: #f1b0b7
    }

    a.list-group-item-danger.active, button.list-group-item-danger.active {
        color: #fff;
        background-color: #721c24;
        border-color: #721c24
    }

    .list-group-item-light {
        color: #818182;
        background-color: #fdfdfe
    }

    a.list-group-item-light, button.list-group-item-light {
        color: #818182
    }

    a.list-group-item-light:focus, a.list-group-item-light:hover, button.list-group-item-light:focus, button.list-group-item-light:hover {
        color: #818182;
        background-color: #ececf6
    }

    a.list-group-item-light.active, button.list-group-item-light.active {
        color: #fff;
        background-color: #818182;
        border-color: #818182
    }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca
    }

    a.list-group-item-dark, button.list-group-item-dark {
        color: #1b1e21
    }

    a.list-group-item-dark:focus, a.list-group-item-dark:hover, button.list-group-item-dark:focus, button.list-group-item-dark:hover {
        color: #1b1e21;
        background-color: #b9bbbe
    }

    a.list-group-item-dark.active, button.list-group-item-dark.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5
    }

    .close:focus, .close:hover {
        color: #000;
        text-decoration: none;
        opacity: .75
    }

    button.close {
        padding: 0;
        background: 0 0;
        border: 0;
        -webkit-appearance: none
    }

    .modal-open {
        overflow: hidden
    }

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        outline: 0
    }

    .modal.fade .modal-dialog {
        transition: -webkit-transform .3s ease-out;
        transition: transform .3s ease-out;
        transition: transform .3s ease-out, -webkit-transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        transform: translate(0, -25%)
    }

    .modal.show .modal-dialog {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px
    }

    .modal-content {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000
    }

    .modal-backdrop.fade {
        opacity: 0
    }

    .modal-backdrop.show {
        opacity: .5
    }

    .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #e9ecef
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5
    }

    .modal-body {
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 15px
    }

    .modal-footer {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding: 15px;
        border-top: 1px solid #e9ecef
    }

    .modal-footer > :not(:first-child) {
        margin-left: .25rem
    }

    .modal-footer > :not(:last-child) {
        margin-right: .25rem
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 30px auto
        }

        .modal-sm {
            max-width: 300px
        }
    }

    @media (min-width: 992px) {
        .modal-lg {
            max-width: 800px
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: .875rem;
        word-wrap: break-word;
        opacity: 0
    }

    .tooltip.show {
        opacity: .9
    }

    .tooltip .arrow {
        position: absolute;
        display: block;
        width: 5px;
        height: 5px
    }

    .tooltip.bs-tooltip-auto[x-placement^=top], .tooltip.bs-tooltip-top {
        padding: 5px 0
    }

    .tooltip.bs-tooltip-auto[x-placement^=top] .arrow, .tooltip.bs-tooltip-top .arrow {
        bottom: 0
    }

    .tooltip.bs-tooltip-auto[x-placement^=top] .arrow::before, .tooltip.bs-tooltip-top .arrow::before {
        margin-left: -3px;
        content: "";
        border-width: 5px 5px 0;
        border-top-color: #000
    }

    .tooltip.bs-tooltip-auto[x-placement^=right], .tooltip.bs-tooltip-right {
        padding: 0 5px
    }

    .tooltip.bs-tooltip-auto[x-placement^=right] .arrow, .tooltip.bs-tooltip-right .arrow {
        left: 0
    }

    .tooltip.bs-tooltip-auto[x-placement^=right] .arrow::before, .tooltip.bs-tooltip-right .arrow::before {
        margin-top: -3px;
        content: "";
        border-width: 5px 5px 5px 0;
        border-right-color: #000
    }

    .tooltip.bs-tooltip-auto[x-placement^=bottom], .tooltip.bs-tooltip-bottom {
        padding: 5px 0
    }

    .tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow, .tooltip.bs-tooltip-bottom .arrow {
        top: 0
    }

    .tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow::before, .tooltip.bs-tooltip-bottom .arrow::before {
        margin-left: -3px;
        content: "";
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }

    .tooltip.bs-tooltip-auto[x-placement^=left], .tooltip.bs-tooltip-left {
        padding: 0 5px
    }

    .tooltip.bs-tooltip-auto[x-placement^=left] .arrow, .tooltip.bs-tooltip-left .arrow {
        right: 0
    }

    .tooltip.bs-tooltip-auto[x-placement^=left] .arrow::before, .tooltip.bs-tooltip-left .arrow::before {
        right: 0;
        margin-top: -3px;
        content: "";
        border-width: 5px 0 5px 5px;
        border-left-color: #000
    }

    .tooltip .arrow::before {
        position: absolute;
        border-color: transparent;
        border-style: solid
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: .25rem
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        padding: 1px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: .875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem
    }

    .popover .arrow {
        position: absolute;
        display: block;
        width: 10px;
        height: 5px
    }

    .popover .arrow::after, .popover .arrow::before {
        position: absolute;
        display: block;
        border-color: transparent;
        border-style: solid
    }

    .popover .arrow::before {
        content: "";
        border-width: 11px
    }

    .popover .arrow::after {
        content: "";
        border-width: 11px
    }

    .popover.bs-popover-auto[x-placement^=top], .popover.bs-popover-top {
        margin-bottom: 10px
    }

    .popover.bs-popover-auto[x-placement^=top] .arrow, .popover.bs-popover-top .arrow {
        bottom: 0
    }

    .popover.bs-popover-auto[x-placement^=top] .arrow::after, .popover.bs-popover-auto[x-placement^=top] .arrow::before, .popover.bs-popover-top .arrow::after, .popover.bs-popover-top .arrow::before {
        border-bottom-width: 0
    }

    .popover.bs-popover-auto[x-placement^=top] .arrow::before, .popover.bs-popover-top .arrow::before {
        bottom: -11px;
        margin-left: -6px;
        border-top-color: rgba(0, 0, 0, .25)
    }

    .popover.bs-popover-auto[x-placement^=top] .arrow::after, .popover.bs-popover-top .arrow::after {
        bottom: -10px;
        margin-left: -6px;
        border-top-color: #fff
    }

    .popover.bs-popover-auto[x-placement^=right], .popover.bs-popover-right {
        margin-left: 10px
    }

    .popover.bs-popover-auto[x-placement^=right] .arrow, .popover.bs-popover-right .arrow {
        left: 0
    }

    .popover.bs-popover-auto[x-placement^=right] .arrow::after, .popover.bs-popover-auto[x-placement^=right] .arrow::before, .popover.bs-popover-right .arrow::after, .popover.bs-popover-right .arrow::before {
        margin-top: -8px;
        border-left-width: 0
    }

    .popover.bs-popover-auto[x-placement^=right] .arrow::before, .popover.bs-popover-right .arrow::before {
        left: -11px;
        border-right-color: rgba(0, 0, 0, .25)
    }

    .popover.bs-popover-auto[x-placement^=right] .arrow::after, .popover.bs-popover-right .arrow::after {
        left: -10px;
        border-right-color: #fff
    }

    .popover.bs-popover-auto[x-placement^=bottom], .popover.bs-popover-bottom {
        margin-top: 10px
    }

    .popover.bs-popover-auto[x-placement^=bottom] .arrow, .popover.bs-popover-bottom .arrow {
        top: 0
    }

    .popover.bs-popover-auto[x-placement^=bottom] .arrow::after, .popover.bs-popover-auto[x-placement^=bottom] .arrow::before, .popover.bs-popover-bottom .arrow::after, .popover.bs-popover-bottom .arrow::before {
        margin-left: -7px;
        border-top-width: 0
    }

    .popover.bs-popover-auto[x-placement^=bottom] .arrow::before, .popover.bs-popover-bottom .arrow::before {
        top: -11px;
        border-bottom-color: rgba(0, 0, 0, .25)
    }

    .popover.bs-popover-auto[x-placement^=bottom] .arrow::after, .popover.bs-popover-bottom .arrow::after {
        top: -10px;
        border-bottom-color: #fff
    }

    .popover.bs-popover-auto[x-placement^=bottom] .popover-header::before, .popover.bs-popover-bottom .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 20px;
        margin-left: -10px;
        content: "";
        border-bottom: 1px solid #f7f7f7
    }

    .popover.bs-popover-auto[x-placement^=left], .popover.bs-popover-left {
        margin-right: 10px
    }

    .popover.bs-popover-auto[x-placement^=left] .arrow, .popover.bs-popover-left .arrow {
        right: 0
    }

    .popover.bs-popover-auto[x-placement^=left] .arrow::after, .popover.bs-popover-auto[x-placement^=left] .arrow::before, .popover.bs-popover-left .arrow::after, .popover.bs-popover-left .arrow::before {
        margin-top: -8px;
        border-right-width: 0
    }

    .popover.bs-popover-auto[x-placement^=left] .arrow::before, .popover.bs-popover-left .arrow::before {
        right: -11px;
        border-left-color: rgba(0, 0, 0, .25)
    }

    .popover.bs-popover-auto[x-placement^=left] .arrow::after, .popover.bs-popover-left .arrow::after {
        right: -10px;
        border-left-color: #fff
    }

    .popover-header {
        padding: 8px 14px;
        margin-bottom: 0;
        font-size: 1rem;
        color: inherit;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(.3rem - 1px);
        border-top-right-radius: calc(.3rem - 1px)
    }

    .popover-header:empty {
        display: none
    }

    .popover-body {
        padding: 9px 14px;
        color: #212529
    }

    .carousel {
        position: relative
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden
    }

    .carousel-item {
        position: relative;
        display: none;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        transition: -webkit-transform .6s ease;
        transition: transform .6s ease;
        transition: transform .6s ease, -webkit-transform .6s ease;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
    }

    .carousel-item-next, .carousel-item-prev, .carousel-item.active {
        display: block
    }

    .carousel-item-next, .carousel-item-prev {
        position: absolute;
        top: 0
    }

    .carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
        .carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .active.carousel-item-right, .carousel-item-next {
        -webkit-transform: translateX(100%);
        transform: translateX(100%)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
        .active.carousel-item-right, .carousel-item-next {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    .active.carousel-item-left, .carousel-item-prev {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
        .active.carousel-item-left, .carousel-item-prev {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    .carousel-control-next, .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .5
    }

    .carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9
    }

    .carousel-control-prev {
        left: 0
    }

    .carousel-control-next {
        right: 0
    }

    .carousel-control-next-icon, .carousel-control-prev-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M4 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M1.5 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 10px;
        left: 0;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none
    }

    .carousel-indicators li {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, .5)
    }

    .carousel-indicators li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators .active {
        background-color: #fff
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center
    }

    .align-baseline {
        vertical-align: baseline !important
    }

    .align-top {
        vertical-align: top !important
    }

    .align-middle {
        vertical-align: middle !important
    }

    .align-bottom {
        vertical-align: bottom !important
    }

    .align-text-bottom {
        vertical-align: text-bottom !important
    }

    .align-text-top {
        vertical-align: text-top !important
    }

    .bg-primary {
        background-color: #007bff !important
    }

    a.bg-primary:focus, a.bg-primary:hover {
        background-color: #0062cc !important
    }

    .bg-secondary {
        background-color: #868e96 !important
    }

    a.bg-secondary:focus, a.bg-secondary:hover {
        background-color: #6c757d !important
    }

    .bg-success {
        background-color: #28a745 !important
    }

    a.bg-success:focus, a.bg-success:hover {
        background-color: #1e7e34 !important
    }

    .bg-info {
        background-color: #17a2b8 !important
    }

    a.bg-info:focus, a.bg-info:hover {
        background-color: #117a8b !important
    }

    .bg-warning {
        background-color: #ffc107 !important
    }

    a.bg-warning:focus, a.bg-warning:hover {
        background-color: #d39e00 !important
    }

    .bg-danger {
        background-color: #dc3545 !important
    }

    a.bg-danger:focus, a.bg-danger:hover {
        background-color: #bd2130 !important
    }

    .bg-light {
        background-color: #f8f9fa !important
    }

    a.bg-light:focus, a.bg-light:hover {
        background-color: #dae0e5 !important
    }

    .bg-dark {
        background-color: #343a40 !important
    }

    a.bg-dark:focus, a.bg-dark:hover {
        background-color: #1d2124 !important
    }

    .bg-white {
        background-color: #fff !important
    }

    .bg-transparent {
        background-color: transparent !important
    }

    .border {
        border: 1px solid #e9ecef !important
    }

    .border-0 {
        border: 0 !important
    }

    .border-top-0 {
        border-top: 0 !important
    }

    .border-right-0 {
        border-right: 0 !important
    }

    .border-bottom-0 {
        border-bottom: 0 !important
    }

    .border-left-0 {
        border-left: 0 !important
    }

    .border-primary {
        border-color: #007bff !important
    }

    .border-secondary {
        border-color: #868e96 !important
    }

    .border-success {
        border-color: #28a745 !important
    }

    .border-info {
        border-color: #17a2b8 !important
    }

    .border-warning {
        border-color: #ffc107 !important
    }

    .border-danger {
        border-color: #dc3545 !important
    }

    .border-light {
        border-color: #f8f9fa !important
    }

    .border-dark {
        border-color: #343a40 !important
    }

    .border-white {
        border-color: #fff !important
    }

    .rounded {
        border-radius: .25rem !important
    }

    .rounded-top {
        border-top-left-radius: .25rem !important;
        border-top-right-radius: .25rem !important
    }

    .rounded-right {
        border-top-right-radius: .25rem !important;
        border-bottom-right-radius: .25rem !important
    }

    .rounded-bottom {
        border-bottom-right-radius: .25rem !important;
        border-bottom-left-radius: .25rem !important
    }

    .rounded-left {
        border-top-left-radius: .25rem !important;
        border-bottom-left-radius: .25rem !important
    }

    .rounded-circle {
        border-radius: 50%
    }

    .rounded-0 {
        border-radius: 0
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: ""
    }




    .mb-sm-3 {
        margin-bottom: 1rem !important
    }

    .ml-sm-3 {
        margin-left: 1rem !important
    }

    .mx-sm-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .my-sm-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .m-sm-4 {
        margin: 1.5rem !important
    }

    .mt-sm-4 {
        margin-top: 1.5rem !important
    }

    .mr-sm-4 {
        margin-right: 1.5rem !important
    }

    .mb-sm-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-sm-4 {
        margin-left: 1.5rem !important
    }

    .mx-sm-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .my-sm-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .m-sm-5 {
        margin: 3rem !important
    }

    .mt-sm-5 {
        margin-top: 3rem !important
    }

    .mr-sm-5 {
        margin-right: 3rem !important
    }

    .mb-sm-5 {
        margin-bottom: 3rem !important
    }

    .ml-sm-5 {
        margin-left: 3rem !important
    }

    .mx-sm-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .my-sm-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .p-sm-0 {
        padding: 0 !important
    }

    .pt-sm-0 {
        padding-top: 0 !important
    }

    .pr-sm-0 {
        padding-right: 0 !important
    }

    .pb-sm-0 {
        padding-bottom: 0 !important
    }

    .pl-sm-0 {
        padding-left: 0 !important
    }

    .px-sm-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .py-sm-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .p-sm-1 {
        padding: .25rem !important
    }

    .pt-sm-1 {
        padding-top: .25rem !important
    }

    .pr-sm-1 {
        padding-right: .25rem !important
    }

    .pb-sm-1 {
        padding-bottom: .25rem !important
    }

    .pl-sm-1 {
        padding-left: .25rem !important
    }

    .px-sm-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .py-sm-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .p-sm-2 {
        padding: .5rem !important
    }

    .pt-sm-2 {
        padding-top: .5rem !important
    }

    .pr-sm-2 {
        padding-right: .5rem !important
    }

    .pb-sm-2 {
        padding-bottom: .5rem !important
    }

    .pl-sm-2 {
        padding-left: .5rem !important
    }

    .px-sm-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .py-sm-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .p-sm-3 {
        padding: 1rem !important
    }

    .pt-sm-3 {
        padding-top: 1rem !important
    }

    .pr-sm-3 {
        padding-right: 1rem !important
    }

    .pb-sm-3 {
        padding-bottom: 1rem !important
    }

    .pl-sm-3 {
        padding-left: 1rem !important
    }

    .px-sm-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .py-sm-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .p-sm-4 {
        padding: 1.5rem !important
    }

    .pt-sm-4 {
        padding-top: 1.5rem !important
    }

    .pr-sm-4 {
        padding-right: 1.5rem !important
    }

    .pb-sm-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-sm-4 {
        padding-left: 1.5rem !important
    }

    .px-sm-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .py-sm-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .p-sm-5 {
        padding: 3rem !important
    }

    .pt-sm-5 {
        padding-top: 3rem !important
    }

    .pr-sm-5 {
        padding-right: 3rem !important
    }

    .pb-sm-5 {
        padding-bottom: 3rem !important
    }

    .pl-sm-5 {
        padding-left: 3rem !important
    }

    .px-sm-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-sm-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .m-sm-auto {
        margin: auto !important
    }

    .mt-sm-auto {
        margin-top: auto !important
    }

    .mr-sm-auto {
        margin-right: auto !important
    }

    .mb-sm-auto {
        margin-bottom: auto !important
    }

    .ml-sm-auto {
        margin-left: auto !important
    }

    .mx-sm-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-sm-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }
    }

    @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important
        }

        .mt-md-0 {
            margin-top: 0 !important
        }

        .mr-md-0 {
            margin-right: 0 !important
        }

        .mb-md-0 {
            margin-bottom: 0 !important
        }

        .ml-md-0 {
            margin-left: 0 !important
        }

        .mx-md-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .my-md-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .m-md-1 {
            margin: .25rem !important
        }

        .mt-md-1 {
            margin-top: .25rem !important
        }

        .mr-md-1 {
            margin-right: .25rem !important
        }

        .mb-md-1 {
            margin-bottom: .25rem !important
        }

        .ml-md-1 {
            margin-left: .25rem !important
        }

        .mx-md-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .my-md-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .m-md-2 {
            margin: .5rem !important
        }

        .mt-md-2 {
            margin-top: .5rem !important
        }

        .mr-md-2 {
            margin-right: .5rem !important
        }

        .mb-md-2 {
            margin-bottom: .5rem !important
        }

        .ml-md-2 {
            margin-left: .5rem !important
        }

        .mx-md-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .my-md-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .m-md-3 {
            margin: 1rem !important
        }

        .mt-md-3 {
            margin-top: 1rem !important
        }

        .mr-md-3 {
            margin-right: 1rem !important
        }

        .mb-md-3 {
            margin-bottom: 1rem !important
        }

        .ml-md-3 {
            margin-left: 1rem !important
        }

        .mx-md-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .my-md-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .m-md-4 {
            margin: 1.5rem !important
        }

        .mt-md-4 {
            margin-top: 1.5rem !important
        }

        .mr-md-4 {
            margin-right: 1.5rem !important
        }

        .mb-md-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-md-4 {
            margin-left: 1.5rem !important
        }

        .mx-md-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .my-md-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .m-md-5 {
            margin: 3rem !important
        }

        .mt-md-5 {
            margin-top: 3rem !important
        }

        .mr-md-5 {
            margin-right: 3rem !important
        }

        .mb-md-5 {
            margin-bottom: 3rem !important
        }

        .ml-md-5 {
            margin-left: 3rem !important
        }

        .mx-md-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .my-md-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .p-md-0 {
            padding: 0 !important
        }

        .pt-md-0 {
            padding-top: 0 !important
        }

        .pr-md-0 {
            padding-right: 0 !important
        }

        .pb-md-0 {
            padding-bottom: 0 !important
        }

        .pl-md-0 {
            padding-left: 0 !important
        }

        .px-md-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .py-md-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .p-md-1 {
            padding: .25rem !important
        }

        .pt-md-1 {
            padding-top: .25rem !important
        }

        .pr-md-1 {
            padding-right: .25rem !important
        }

        .pb-md-1 {
            padding-bottom: .25rem !important
        }

        .pl-md-1 {
            padding-left: .25rem !important
        }

        .px-md-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .py-md-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .p-md-2 {
            padding: .5rem !important
        }

        .pt-md-2 {
            padding-top: .5rem !important
        }

        .pr-md-2 {
            padding-right: .5rem !important
        }

        .pb-md-2 {
            padding-bottom: .5rem !important
        }

        .pl-md-2 {
            padding-left: .5rem !important
        }

        .px-md-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .py-md-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .p-md-3 {
            padding: 1rem !important
        }

        .pt-md-3 {
            padding-top: 1rem !important
        }

        .pr-md-3 {
            padding-right: 1rem !important
        }

        .pb-md-3 {
            padding-bottom: 1rem !important
        }

        .pl-md-3 {
            padding-left: 1rem !important
        }

        .px-md-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .py-md-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .p-md-4 {
            padding: 1.5rem !important
        }

        .pt-md-4 {
            padding-top: 1.5rem !important
        }

        .pr-md-4 {
            padding-right: 1.5rem !important
        }

        .pb-md-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-md-4 {
            padding-left: 1.5rem !important
        }

        .px-md-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .py-md-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .p-md-5 {
            padding: 3rem !important
        }

        .pt-md-5 {
            padding-top: 3rem !important
        }

        .pr-md-5 {
            padding-right: 3rem !important
        }

        .pb-md-5 {
            padding-bottom: 3rem !important
        }

        .pl-md-5 {
            padding-left: 3rem !important
        }

        .px-md-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-md-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .m-md-auto {
            margin: auto !important
        }

        .mt-md-auto {
            margin-top: auto !important
        }

        .mr-md-auto {
            margin-right: auto !important
        }

        .mb-md-auto {
            margin-bottom: auto !important
        }

        .ml-md-auto {
            margin-left: auto !important
        }

        .mx-md-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-md-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }
    }

    @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important
        }

        .mt-lg-0 {
            margin-top: 0 !important
        }

        .mr-lg-0 {
            margin-right: 0 !important
        }

        .mb-lg-0 {
            margin-bottom: 0 !important
        }

        .ml-lg-0 {
            margin-left: 0 !important
        }

        .mx-lg-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .my-lg-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .m-lg-1 {
            margin: .25rem !important
        }

        .mt-lg-1 {
            margin-top: .25rem !important
        }

        .mr-lg-1 {
            margin-right: .25rem !important
        }

        .mb-lg-1 {
            margin-bottom: .25rem !important
        }

        .ml-lg-1 {
            margin-left: .25rem !important
        }

        .mx-lg-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .my-lg-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .m-lg-2 {
            margin: .5rem !important
        }

        .mt-lg-2 {
            margin-top: .5rem !important
        }

        .mr-lg-2 {
            margin-right: .5rem !important
        }

        .mb-lg-2 {
            margin-bottom: .5rem !important
        }

        .ml-lg-2 {
            margin-left: .5rem !important
        }

        .mx-lg-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .my-lg-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .m-lg-3 {
            margin: 1rem !important
        }

        .mt-lg-3 {
            margin-top: 1rem !important
        }

        .mr-lg-3 {
            margin-right: 1rem !important
        }

        .mb-lg-3 {
            margin-bottom: 1rem !important
        }

        .ml-lg-3 {
            margin-left: 1rem !important
        }

        .mx-lg-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .my-lg-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .m-lg-4 {
            margin: 1.5rem !important
        }

        .mt-lg-4 {
            margin-top: 1.5rem !important
        }

        .mr-lg-4 {
            margin-right: 1.5rem !important
        }

        .mb-lg-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-lg-4 {
            margin-left: 1.5rem !important
        }

        .mx-lg-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .my-lg-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .m-lg-5 {
            margin: 3rem !important
        }

        .mt-lg-5 {
            margin-top: 3rem !important
        }

        .mr-lg-5 {
            margin-right: 3rem !important
        }

        .mb-lg-5 {
            margin-bottom: 3rem !important
        }

        .ml-lg-5 {
            margin-left: 3rem !important
        }

        .mx-lg-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .my-lg-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .p-lg-0 {
            padding: 0 !important
        }

        .pt-lg-0 {
            padding-top: 0 !important
        }

        .pr-lg-0 {
            padding-right: 0 !important
        }

        .pb-lg-0 {
            padding-bottom: 0 !important
        }

        .pl-lg-0 {
            padding-left: 0 !important
        }

        .px-lg-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .py-lg-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .p-lg-1 {
            padding: .25rem !important
        }

        .pt-lg-1 {
            padding-top: .25rem !important
        }

        .pr-lg-1 {
            padding-right: .25rem !important
        }

        .pb-lg-1 {
            padding-bottom: .25rem !important
        }

        .pl-lg-1 {
            padding-left: .25rem !important
        }

        .px-lg-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .py-lg-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .p-lg-2 {
            padding: .5rem !important
        }

        .pt-lg-2 {
            padding-top: .5rem !important
        }

        .pr-lg-2 {
            padding-right: .5rem !important
        }

        .pb-lg-2 {
            padding-bottom: .5rem !important
        }

        .pl-lg-2 {
            padding-left: .5rem !important
        }

        .px-lg-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .py-lg-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .p-lg-3 {
            padding: 1rem !important
        }

        .pt-lg-3 {
            padding-top: 1rem !important
        }

        .pr-lg-3 {
            padding-right: 1rem !important
        }

        .pb-lg-3 {
            padding-bottom: 1rem !important
        }

        .pl-lg-3 {
            padding-left: 1rem !important
        }

        .px-lg-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .py-lg-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .p-lg-4 {
            padding: 1.5rem !important
        }

        .pt-lg-4 {
            padding-top: 1.5rem !important
        }

        .pr-lg-4 {
            padding-right: 1.5rem !important
        }

        .pb-lg-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-lg-4 {
            padding-left: 1.5rem !important
        }

        .px-lg-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .py-lg-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .p-lg-5 {
            padding: 3rem !important
        }

        .pt-lg-5 {
            padding-top: 3rem !important
        }

        .pr-lg-5 {
            padding-right: 3rem !important
        }

        .pb-lg-5 {
            padding-bottom: 3rem !important
        }

        .pl-lg-5 {
            padding-left: 3rem !important
        }

        .px-lg-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-lg-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .m-lg-auto {
            margin: auto !important
        }

        .mt-lg-auto {
            margin-top: auto !important
        }

        .mr-lg-auto {
            margin-right: auto !important
        }

        .mb-lg-auto {
            margin-bottom: auto !important
        }

        .ml-lg-auto {
            margin-left: auto !important
        }

        .mx-lg-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-lg-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }
    }

    @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important
        }

        .mt-xl-0 {
            margin-top: 0 !important
        }

        .mr-xl-0 {
            margin-right: 0 !important
        }

        .mb-xl-0 {
            margin-bottom: 0 !important
        }

        .ml-xl-0 {
            margin-left: 0 !important
        }

        .mx-xl-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .my-xl-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .m-xl-1 {
            margin: .25rem !important
        }

        .mt-xl-1 {
            margin-top: .25rem !important
        }

        .mr-xl-1 {
            margin-right: .25rem !important
        }

        .mb-xl-1 {
            margin-bottom: .25rem !important
        }

        .ml-xl-1 {
            margin-left: .25rem !important
        }

        .mx-xl-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .my-xl-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .m-xl-2 {
            margin: .5rem !important
        }

        .mt-xl-2 {
            margin-top: .5rem !important
        }

        .mr-xl-2 {
            margin-right: .5rem !important
        }

        .mb-xl-2 {
            margin-bottom: .5rem !important
        }

        .ml-xl-2 {
            margin-left: .5rem !important
        }

        .mx-xl-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .my-xl-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .m-xl-3 {
            margin: 1rem !important
        }

        .mt-xl-3 {
            margin-top: 1rem !important
        }

        .mr-xl-3 {
            margin-right: 1rem !important
        }

        .mb-xl-3 {
            margin-bottom: 1rem !important
        }

        .ml-xl-3 {
            margin-left: 1rem !important
        }

        .mx-xl-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .my-xl-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .m-xl-4 {
            margin: 1.5rem !important
        }

        .mt-xl-4 {
            margin-top: 1.5rem !important
        }

        .mr-xl-4 {
            margin-right: 1.5rem !important
        }

        .mb-xl-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-xl-4 {
            margin-left: 1.5rem !important
        }

        .mx-xl-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .my-xl-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .m-xl-5 {
            margin: 3rem !important
        }

        .mt-xl-5 {
            margin-top: 3rem !important
        }

        .mr-xl-5 {
            margin-right: 3rem !important
        }

        .mb-xl-5 {
            margin-bottom: 3rem !important
        }

        .ml-xl-5 {
            margin-left: 3rem !important
        }

        .mx-xl-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .my-xl-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .p-xl-0 {
            padding: 0 !important
        }

        .pt-xl-0 {
            padding-top: 0 !important
        }

        .pr-xl-0 {
            padding-right: 0 !important
        }

        .pb-xl-0 {
            padding-bottom: 0 !important
        }

        .pl-xl-0 {
            padding-left: 0 !important
        }

        .px-xl-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .py-xl-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .p-xl-1 {
            padding: .25rem !important
        }

        .pt-xl-1 {
            padding-top: .25rem !important
        }

        .pr-xl-1 {
            padding-right: .25rem !important
        }

        .pb-xl-1 {
            padding-bottom: .25rem !important
        }

        .pl-xl-1 {
            padding-left: .25rem !important
        }

        .px-xl-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .py-xl-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .p-xl-2 {
            padding: .5rem !important
        }

        .pt-xl-2 {
            padding-top: .5rem !important
        }

        .pr-xl-2 {
            padding-right: .5rem !important
        }

        .pb-xl-2 {
            padding-bottom: .5rem !important
        }

        .pl-xl-2 {
            padding-left: .5rem !important
        }

        .px-xl-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .py-xl-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .p-xl-3 {
            padding: 1rem !important
        }

        .pt-xl-3 {
            padding-top: 1rem !important
        }

        .pr-xl-3 {
            padding-right: 1rem !important
        }

        .pb-xl-3 {
            padding-bottom: 1rem !important
        }

        .pl-xl-3 {
            padding-left: 1rem !important
        }

        .px-xl-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .py-xl-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .p-xl-4 {
            padding: 1.5rem !important
        }

        .pt-xl-4 {
            padding-top: 1.5rem !important
        }

        .pr-xl-4 {
            padding-right: 1.5rem !important
        }

        .pb-xl-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-xl-4 {
            padding-left: 1.5rem !important
        }

        .px-xl-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .py-xl-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .p-xl-5 {
            padding: 3rem !important
        }

        .pt-xl-5 {
            padding-top: 3rem !important
        }

        .pr-xl-5 {
            padding-right: 3rem !important
        }

        .pb-xl-5 {
            padding-bottom: 3rem !important
        }

        .pl-xl-5 {
            padding-left: 3rem !important
        }

        .px-xl-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-xl-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .m-xl-auto {
            margin: auto !important
        }

        .mt-xl-auto {
            margin-top: auto !important
        }

        .mr-xl-auto {
            margin-right: auto !important
        }

        .mb-xl-auto {
            margin-bottom: auto !important
        }

        .ml-xl-auto {
            margin-left: auto !important
        }

        .mx-xl-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-xl-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }
    }

    .text-justify {
        text-align: justify !important
    }

    .text-nowrap {
        white-space: nowrap !important
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .text-left {
        text-align: left !important
    }

    .text-right {
        text-align: right !important
    }

    .text-center {
        text-align: center !important
    }

    @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important
        }

        .text-sm-right {
            text-align: right !important
        }

        .text-sm-center {
            text-align: center !important
        }
    }

    @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important
        }

        .text-md-right {
            text-align: right !important
        }

        .text-md-center {
            text-align: center !important
        }
    }

    @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important
        }

        .text-lg-right {
            text-align: right !important
        }

        .text-lg-center {
            text-align: center !important
        }
    }

    @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important
        }

        .text-xl-right {
            text-align: right !important
        }

        .text-xl-center {
            text-align: center !important
        }
    }

    .text-lowercase {
        text-transform: lowercase !important
    }

    .text-uppercase {
        text-transform: uppercase !important
    }

    .text-capitalize {
        text-transform: capitalize !important
    }

    .font-weight-normal {
        font-weight: 400
    }

    .font-weight-bold {
        font-weight: 700
    }

    .font-italic {
        font-style: italic
    }

    .text-white {
        color: #fff !important
    }

    .text-primary {
        color: #007bff !important
    }

    a.text-primary:focus, a.text-primary:hover {
        color: #0062cc !important
    }

    .text-secondary {
        color: #868e96 !important
    }

    a.text-secondary:focus, a.text-secondary:hover {
        color: #6c757d !important
    }

    .text-success {
        color: #28a745 !important
    }

    a.text-success:focus, a.text-success:hover {
        color: #1e7e34 !important
    }

    .text-info {
        color: #17a2b8 !important
    }

    a.text-info:focus, a.text-info:hover {
        color: #117a8b !important
    }

    .text-warning {
        color: #ffc107 !important
    }

    a.text-warning:focus, a.text-warning:hover {
        color: #d39e00 !important
    }

    .text-danger {
        color: #dc3545 !important
    }

    a.text-danger:focus, a.text-danger:hover {
        color: #bd2130 !important
    }

    .text-light {
        color: #f8f9fa !important
    }

    a.text-light:focus, a.text-light:hover {
        color: #dae0e5 !important
    }

    .text-dark {
        color: #343a40 !important
    }

    a.text-dark:focus, a.text-dark:hover {
        color: #1d2124 !important
    }

    .text-muted {
        color: #868e96 !important
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .visible {
        visibility: visible !important
    }

    .invisible {
        visibility: hidden !important
    }


    .feather {
        font-family: feather !important;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .icon-alert-octagon:before {
        content: "\e81b"
    }

    .icon-alert-circle:before {
        content: "\e81c"
    }

    .icon-activity:before {
        content: "\e81d"
    }

    .icon-alert-triangle:before {
        content: "\e81e"
    }

    .icon-align-center:before {
        content: "\e81f"
    }

    .icon-airplay:before {
        content: "\e820"
    }

    .icon-align-justify:before {
        content: "\e821"
    }

    .icon-align-left:before {
        content: "\e822"
    }

    .icon-align-right:before {
        content: "\e823"
    }

    .icon-arrow-down-left:before {
        content: "\e824"
    }

    .icon-arrow-down-right:before {
        content: "\e825"
    }

    .icon-anchor:before {
        content: "\e826"
    }

    .icon-aperture:before {
        content: "\e827"
    }

    .icon-arrow-left:before {
        content: "\e828"
    }

    .icon-arrow-right:before {
        content: "\e829"
    }

    .icon-arrow-down:before {
        content: "\e82a"
    }

    .icon-arrow-up-left:before {
        content: "\e82b"
    }

    .icon-arrow-up-right:before {
        content: "\e82c"
    }

    .icon-arrow-up:before {
        content: "\e82d"
    }

    .icon-award:before {
        content: "\e82e"
    }

    .icon-bar-chart:before {
        content: "\e82f"
    }

    .icon-at-sign:before {
        content: "\e830"
    }

    .icon-bar-chart-2:before {
        content: "\e831"
    }

    .icon-battery-charging:before {
        content: "\e832"
    }

    .icon-bell-off:before {
        content: "\e833"
    }

    .icon-battery:before {
        content: "\e834"
    }

    .icon-bluetooth:before {
        content: "\e835"
    }

    .icon-bell:before {
        content: "\e836"
    }

    .icon-book:before {
        content: "\e837"
    }

    .icon-briefcase:before {
        content: "\e838"
    }

    .icon-camera-off:before {
        content: "\e839"
    }

    .icon-calendar:before {
        content: "\e83a"
    }

    .icon-bookmark:before {
        content: "\e83b"
    }

    .icon-box:before {
        content: "\e83c"
    }

    .icon-camera:before {
        content: "\e83d"
    }

    .icon-check-circle:before {
        content: "\e83e"
    }

    .icon-check:before {
        content: "\e83f"
    }

    .icon-check-square:before {
        content: "\e840"
    }

    .icon-cast:before {
        content: "\e841"
    }

    .icon-chevron-down:before {
        content: "\e842"
    }

    .icon-chevron-left:before {
        content: "\e843"
    }

    .icon-chevron-right:before {
        content: "\e844"
    }

    .icon-chevron-up:before {
        content: "\e845"
    }

    .icon-chevrons-down:before {
        content: "\e846"
    }

    .icon-chevrons-right:before {
        content: "\e847"
    }

    .icon-chevrons-up:before {
        content: "\e848"
    }

    .icon-chevrons-left:before {
        content: "\e849"
    }

    .icon-circle:before {
        content: "\e84a"
    }

    .icon-clipboard:before {
        content: "\e84b"
    }

    .icon-chrome:before {
        content: "\e84c"
    }

    .icon-clock:before {
        content: "\e84d"
    }

    .icon-cloud-lightning:before {
        content: "\e84e"
    }

    .icon-cloud-drizzle:before {
        content: "\e84f"
    }

    .icon-cloud-rain:before {
        content: "\e850"
    }

    .icon-cloud-off:before {
        content: "\e851"
    }

    .icon-codepen:before {
        content: "\e852"
    }

    .icon-cloud-snow:before {
        content: "\e853"
    }

    .icon-compass:before {
        content: "\e854"
    }

    .icon-copy:before {
        content: "\e855"
    }

    .icon-corner-down-right:before {
        content: "\e856"
    }

    .icon-corner-down-left:before {
        content: "\e857"
    }

    .icon-corner-left-down:before {
        content: "\e858"
    }

    .icon-corner-left-up:before {
        content: "\e859"
    }

    .icon-corner-up-left:before {
        content: "\e85a"
    }

    .icon-corner-up-right:before {
        content: "\e85b"
    }

    .icon-corner-right-down:before {
        content: "\e85c"
    }

    .icon-corner-right-up:before {
        content: "\e85d"
    }

    .icon-cpu:before {
        content: "\e85e"
    }

    .icon-credit-card:before {
        content: "\e85f"
    }

    .icon-crosshair:before {
        content: "\e860"
    }

    .icon-disc:before {
        content: "\e861"
    }

    .icon-delete:before {
        content: "\e862"
    }

    .icon-download-cloud:before {
        content: "\e863"
    }

    .icon-download:before {
        content: "\e864"
    }

    .icon-droplet:before {
        content: "\e865"
    }

    .icon-edit-2:before {
        content: "\e866"
    }

    .icon-edit:before {
        content: "\e867"
    }

    .icon-edit-1:before {
        content: "\e868"
    }

    .icon-external-link:before {
        content: "\e869"
    }

    .icon-eye:before {
        content: "\e86a"
    }

    .icon-feather:before {
        content: "\e86b"
    }

    .icon-facebook:before {
        content: "\e86c"
    }

    .icon-file-minus:before {
        content: "\e86d"
    }

    .icon-eye-off:before {
        content: "\e86e"
    }

    .icon-fast-forward:before {
        content: "\e86f"
    }

    .icon-file-text:before {
        content: "\e870"
    }

    .icon-film:before {
        content: "\e871"
    }

    .icon-file:before {
        content: "\e872"
    }

    .icon-file-plus:before {
        content: "\e873"
    }

    .icon-folder:before {
        content: "\e874"
    }

    .icon-filter:before {
        content: "\e875"
    }

    .icon-flag:before {
        content: "\e876"
    }

    .icon-globe:before {
        content: "\e877"
    }

    .icon-grid:before {
        content: "\e878"
    }

    .icon-heart:before {
        content: "\e879"
    }

    .icon-home:before {
        content: "\e87a"
    }

    .icon-github:before {
        content: "\e87b"
    }

    .icon-image:before {
        content: "\e87c"
    }

    .icon-inbox:before {
        content: "\e87d"
    }

    .icon-layers:before {
        content: "\e87e"
    }

    .icon-info:before {
        content: "\e87f"
    }

    .icon-instagram:before {
        content: "\e880"
    }

    .icon-layout:before {
        content: "\e881"
    }

    .icon-link-2:before {
        content: "\e882"
    }

    .icon-life-buoy:before {
        content: "\e883"
    }

    .icon-link:before {
        content: "\e884"
    }

    .icon-log-in:before {
        content: "\e885"
    }

    .icon-list:before {
        content: "\e886"
    }

    .icon-lock:before {
        content: "\e887"
    }

    .icon-log-out:before {
        content: "\e888"
    }

    .icon-loader:before {
        content: "\e889"
    }

    .icon-mail:before {
        content: "\e88a"
    }

    .icon-maximize-2:before {
        content: "\e88b"
    }

    .icon-map:before {
        content: "\e88c"
    }

    .icon-map-pin:before {
        content: "\e88e"
    }

    .icon-menu:before {
        content: "\e88f"
    }

    .icon-message-circle:before {
        content: "\e890"
    }

    .icon-message-square:before {
        content: "\e891"
    }

    .icon-minimize-2:before {
        content: "\e892"
    }

    .icon-mic-off:before {
        content: "\e893"
    }

    .icon-minus-circle:before {
        content: "\e894"
    }

    .icon-mic:before {
        content: "\e895"
    }

    .icon-minus-square:before {
        content: "\e896"
    }

    .icon-minus:before {
        content: "\e897"
    }

    .icon-moon:before {
        content: "\e898"
    }

    .icon-monitor:before {
        content: "\e899"
    }

    .icon-more-vertical:before {
        content: "\e89a"
    }

    .icon-more-horizontal:before {
        content: "\e89b"
    }

    .icon-move:before {
        content: "\e89c"
    }

    .icon-music:before {
        content: "\e89d"
    }

    .icon-navigation-2:before {
        content: "\e89e"
    }

    .icon-navigation:before {
        content: "\e89f"
    }

    .icon-octagon:before {
        content: "\e8a0"
    }

    .icon-package:before {
        content: "\e8a1"
    }

    .icon-pause-circle:before {
        content: "\e8a2"
    }

    .icon-pause:before {
        content: "\e8a3"
    }

    .icon-percent:before {
        content: "\e8a4"
    }

    .icon-phone-call:before {
        content: "\e8a5"
    }

    .icon-phone-forwarded:before {
        content: "\e8a6"
    }

    .icon-phone-missed:before {
        content: "\e8a7"
    }

    .icon-phone-off:before {
        content: "\e8a8"
    }

    .icon-phone-incoming:before {
        content: "\e8a9"
    }

    .icon-phone:before {
        content: "\e8aa"
    }

    .icon-phone-outgoing:before {
        content: "\e8ab"
    }

    .icon-pie-chart:before {
        content: "\e8ac"
    }

    .icon-play-circle:before {
        content: "\e8ad"
    }

    .icon-play:before {
        content: "\e8ae"
    }

    .icon-plus-square:before {
        content: "\e8af"
    }

    .icon-plus-circle:before {
        content: "\e8b0"
    }

    .icon-plus:before {
        content: "\e8b1"
    }

    .icon-pocket:before {
        content: "\e8b2"
    }

    .icon-printer:before {
        content: "\e8b3"
    }

    .icon-power:before {
        content: "\e8b4"
    }

    .icon-radio:before {
        content: "\e8b5"
    }

    .icon-repeat:before {
        content: "\e8b6"
    }

    .icon-refresh-ccw:before {
        content: "\e8b7"
    }

    .icon-rewind:before {
        content: "\e8b8"
    }

    .icon-rotate-ccw:before {
        content: "\e8b9"
    }

    .icon-refresh-cw:before {
        content: "\e8ba"
    }

    .icon-rotate-cw:before {
        content: "\e8bb"
    }

    .icon-save:before {
        content: "\e8bc"
    }

    .icon-search:before {
        content: "\e8bd"
    }

    .icon-server:before {
        content: "\e8be"
    }

    .icon-scissors:before {
        content: "\e8bf"
    }

    .icon-share-2:before {
        content: "\e8c0"
    }

    .icon-share:before {
        content: "\e8c1"
    }

    .icon-shield:before {
        content: "\e8c2"
    }

    .icon-settings:before {
        content: "\e8c3"
    }

    .icon-skip-back:before {
        content: "\e8c4"
    }

    .icon-shuffle:before {
        content: "\e8c5"
    }

    .icon-sidebar:before {
        content: "\e8c6"
    }

    .icon-skip-forward:before {
        content: "\e8c7"
    }

    .icon-slack:before {
        content: "\e8c8"
    }

    .icon-slash:before {
        content: "\e8c9"
    }

    .icon-smartphone:before {
        content: "\e8ca"
    }

    .icon-square:before {
        content: "\e8cb"
    }

    .icon-speaker:before {
        content: "\e8cc"
    }

    .icon-star:before {
        content: "\e8cd"
    }

    .icon-stop-circle:before {
        content: "\e8ce"
    }

    .icon-sun:before {
        content: "\e8cf"
    }

    .icon-sunrise:before {
        content: "\e8d0"
    }

    .icon-tablet:before {
        content: "\e8d1"
    }

    .icon-tag:before {
        content: "\e8d2"
    }

    .icon-sunset:before {
        content: "\e8d3"
    }

    .icon-target:before {
        content: "\e8d4"
    }

    .icon-thermometer:before {
        content: "\e8d5"
    }

    .icon-thumbs-up:before {
        content: "\e8d6"
    }

    .icon-thumbs-down:before {
        content: "\e8d7"
    }

    .icon-toggle-left:before {
        content: "\e8d8"
    }

    .icon-toggle-right:before {
        content: "\e8d9"
    }

    .icon-trash-2:before {
        content: "\e8da"
    }

    .icon-trash:before {
        content: "\e8db"
    }

    .icon-trending-up:before {
        content: "\e8dc"
    }

    .icon-trending-down:before {
        content: "\e8dd"
    }

    .icon-triangle:before {
        content: "\e8de"
    }

    .icon-type:before {
        content: "\e8df"
    }

    .icon-twitter:before {
        content: "\e8e0"
    }

    .icon-upload:before {
        content: "\e8e1"
    }

    .icon-umbrella:before {
        content: "\e8e2"
    }

    .icon-upload-cloud:before {
        content: "\e8e3"
    }

    .icon-unlock:before {
        content: "\e8e4"
    }

    .icon-user-check:before {
        content: "\e8e5"
    }

    .icon-user-minus:before {
        content: "\e8e6"
    }

    .icon-user-plus:before {
        content: "\e8e7"
    }

    .icon-user-x:before {
        content: "\e8e8"
    }

    .icon-user:before {
        content: "\e8e9"
    }

    .icon-users:before {
        content: "\e8ea"
    }

    .icon-video-off:before {
        content: "\e8eb"
    }

    .icon-video:before {
        content: "\e8ec"
    }

    .icon-voicemail:before {
        content: "\e8ed"
    }

    .icon-volume-x:before {
        content: "\e8ee"
    }

    .icon-volume-2:before {
        content: "\e8ef"
    }

    .icon-volume-1:before {
        content: "\e8f0"
    }

    .icon-volume:before {
        content: "\e8f1"
    }

    .icon-watch:before {
        content: "\e8f2"
    }

    .icon-wifi:before {
        content: "\e8f3"
    }

    .icon-x-square:before {
        content: "\e8f4"
    }

    .icon-wind:before {
        content: "\e8f5"
    }

    .icon-x:before {
        content: "\e8f6"
    }

    .icon-x-circle:before {
        content: "\e8f7"
    }

    .icon-zap:before {
        content: "\e8f8"
    }

    .icon-zoom-in:before {
        content: "\e8f9"
    }

    .icon-zoom-out:before {
        content: "\e8fa"
    }

    .icon-command:before {
        content: "\e8fb"
    }

    .icon-cloud:before {
        content: "\e8fc"
    }

    .icon-hash:before {
        content: "\e8fd"
    }

    .icon-headphones:before {
        content: "\e8fe"
    }

    .icon-underline:before {
        content: "\e8ff"
    }

    .icon-italic:before {
        content: "\e900"
    }

    .icon-bold:before {
        content: "\e901"
    }

    .icon-crop:before {
        content: "\e902"
    }

    .icon-help-circle:before {
        content: "\e903"
    }

    .icon-paperclip:before {
        content: "\e904"
    }

    .icon-shopping-cart:before {
        content: "\e905"
    }

    .icon-tv:before {
        content: "\e906"
    }

    .icon-wifi-off:before {
        content: "\e907"
    }

    .icon-minimize:before {
        content: "\e88d"
    }

    .icon-maximize:before {
        content: "\e908"
    }

    .icon-gitlab:before {
        content: "\e909"
    }

    .icon-sliders:before {
        content: "\e90a"
    }

    .icon-star-on:before {
        content: "\e90b"
    }

    .icon-heart-on:before {
        content: "\e90c"
    }

    body {
        background-color: #f3f3f3;
        font-size: .875em;
        overflow-x: hidden;
        color: #353c4e;
        font-family: open sans, sans-serif;
        background-attachment: fixed
    }

    ul {
        padding-left: 0;
        list-style-type: none;
        margin-bottom: 0
    }

    *:focus {
        outline: none
    }

    a {
        font-size: 13px;
        color: #404e67
    }

    @media only screen and (min-width: 1400px) {
        a {
            font-size: 14px
        }
    }

    a:focus, a:hover {
        text-decoration: none;
        color: #01a9ac
    }

    h6 {
        font-size: 14px
    }

    p {
        font-size: 13px
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px
        }
    }

    .media-left {
        padding-right: 20px
    }

    .main-body .page-wrapper {
        padding: 1.8rem;
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s
    }

    .main-body .page-wrapper .menu-rtl .page-header-title i {
        margin-left: 20px
    }

    .main-body .page-wrapper .page-header {
        margin-bottom: 30px
    }



    .main-body .page-wrapper .page-header-title h4 {
        display: block;
        margin-bottom: 0;
        font-weight: 600;
        color: #303548;
        font-size: 20px;
        text-transform: capitalize
    }

    .main-body .page-wrapper .page-header-title span {
        font-size: 13px;
        color: #919aa3;
        display: inline-block;
        margin-top: 10px;
        text-transform: capitalize
    }




    .author-details {
        border-top: 1px solid #e9ecef;
        border-bottom: 1px solid #e9ecef;
        padding: 10px 0;
        margin-bottom: 10px
    }

    .author-details img ~ .dot1, .author-details img ~ .dot2 {
        height: 14px;
        width: 14px;
        border-radius: 100%;
        top: 60%;
        position: absolute;
        padding: 5px
    }

    .author-details img ~ .dot1 {
        left: 40px
    }

    .author-details img ~ .dot2 {
        left: 50px
    }

    .author-details .recent-contain h6 {
        font-size: 1rem;
        margin-bottom: 5px
    }

    .author-details .header-right {
        text-align: right;
        margin-top: 6px
    }

    .author-details .header-right ul {
        position: relative
    }

    .author-details .header-right h4 {
        color: #919aa3;
        font-size: .875rem;
        margin-top: 5px
    }

    .author-details .header-right span {
        font-size: 1rem
    }

    .author-details .header-right li {
        display: inline-block;
        margin-right: 60px;
        text-align: left
    }

    .author-details .header-right li:last-child {
        margin-right: 0;
        position: absolute;
        right: 0;
        top: 10px;
        font-size: 20px
    }

    .login .container-fluid {
        width: auto;
        margin-top: 80px
    }

    .filter-bar .navbar .navbar-nav .dropdown-menu {
        position: absolute
    }

    .wrapper {
        padding: 0
    }

    .card-block {
        padding: 1.25rem
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, .08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, .08);
        border: none;
        margin-bottom: 30px
    }

    .card .card-footer {
        background-color: #fff;
        border-top: none
    }

    .card .card-header {
        background-color: transparent;
        border-bottom: none;
        padding: 25px 20px
    }

    .card .card-header .card-header-left {
        display: inline-block
    }

    .card .card-header .card-header-right {
        border-radius: 0 0 0 7px;
        right: 10px;
        top: 18px;
        display: inline-block;
        float: right;
        padding: 7px 0;
        position: absolute
    }

    .card .card-header .card-header-right i {
        margin: 0 8px;
        cursor: pointer;
        font-size: 16px;
        color: #919aa3;
        line-height: 20px
    }

    .card .card-header .card-header-right i.icofont.icofont-spinner-alt-5 {
        display: none
    }

    .card .card-header .card-header-right .card-option {
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out
    }

    .card .card-header .card-header-right .card-option li {
        display: inline-block
    }

    .card .card-header span {
        color: #919aa3;
        display: block;
        font-size: 13px;
        margin-top: 5px
    }

    .card .card-header + .card-block, .card .card-header + .card-block-big {
        padding-top: 0
    }

    .card .card-header h5 {
        margin-bottom: 0;
        color: #505458;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        margin-right: 10px;
        line-height: 1.4
    }

    .card .card-block table tr {
        padding-bottom: 20px
    }

    .card .card-block .sub-title {
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1px
    }

    .card .card-block code {
        background-color: #eee;
        margin: 5px;
        display: inline-block
    }

    .card .card-block .dropdown-menu {
        top: 38px
    }

    .card .card-block p {
        line-height: 25px
    }

    .card .card-block a.dropdown-item {
        margin-bottom: 0;
        font-size: 14px;
        -webkit-transition: .25s;
        transition: .25s
    }

    .card .card-block a.dropdown-item:active, .card .card-block a.dropdown-item .active {
        background-color: #01a9ac
    }

    .card .card-block.remove-label i {
        margin: 0;
        padding: 0
    }

    .card .card-block.button-list span.badge {
        margin-left: 5px
    }

    .card .card-block .dropdown-menu {
        background-color: #fff;
        padding: 0
    }

    .card .card-block .dropdown-menu .dropdown-divider {
        background-color: #ddd;
        margin: 3px 0
    }

    .card .card-block .dropdown-menu > a {
        padding: 10px 16px;
        line-height: 1.429
    }

    .card .card-block .dropdown-menu > li > a:focus, .card .card-block .dropdown-menu > li > a:hover {
        background-color: rgba(202, 206, 209, .5)
    }

    .card .card-block .dropdown-menu > li:first-child > a:first-child {
        border-top-right-radius: 4px;
        border-top-left-radius: 4px
    }

    .card .card-block .badge-box {
        padding: 10px;
        margin: 12px 0
    }

    .card .card-block-big {
        padding: 30px 35px
    }

    .card .card-block-small {
        padding: 15px 20px
    }

    .pcoded .card.full-card {
        position: fixed;
        top: 56px;
        z-index: 99999;
        -webkit-box-shadow: none;
        box-shadow: none;
        left: 0;
        border-radius: 0;
        border: 1px solid #ddd;
        width: 100vw;
        height: calc(100vh - 56px)
    }

    .pcoded .card.full-card.card-load {
        position: fixed
    }

    .pcoded .card.card-load {
        position: relative;
        overflow: hidden
    }

    .pcoded .card.card-load .card-loader {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: rgba(255, 255, 255, .7);
        z-index: 999
    }

    .pcoded .card.card-load .card-loader i {
        margin: 0 auto;
        color: #ab7967;
        font-size: 20px
    }

    .card-header-text {
        margin-bottom: 0;
        font-size: 1rem;
        color: rgba(51, 51, 51, .85);
        font-weight: 600;
        display: inline-block;
        vertical-align: middle
    }

    .icofont-rounded-down {
        -webkit-transition: all ease-in .3s;
        display: inline-block;
        transition: all ease-in .3s
    }

    .icon-up {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .rotate-refresh {
        -webkit-animation: mymove .8s infinite linear;
        animation: mymove .8s infinite linear;
        display: inline-block
    }

    @-webkit-keyframes mymove {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes mymove {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .breadcrumb-title a {
        font-size: 14px;
        color: #4a6076
    }

    .breadcrumb-title li:last-child a {
        color: #7e7e7e
    }

    .sub-title {
        border-bottom: 1px solid rgba(204, 204, 204, .35);
        padding-bottom: 10px;
        margin-bottom: 20px;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 400;
        color: #2c3e50
    }

    .blockquote {
        border-left: .25rem solid #eceeef;
        padding: .5rem 1rem
    }

    .blockquote.blockquote-reverse {
        text-align: right;
        padding-right: 1rem;
        border-right: .25rem solid #eceeef;
        border-left: none
    }

    .typography h1, .typography h2, .typography h3, .typography h4, .typography h5, .typography h6 {
        margin: 0 0 20px
    }

    .typography small {
        margin-left: 10px;
        font-weight: 600;
        color: #777
    }

    .card-block.list-tag ul li {
        display: block;
        float: none;
        margin-bottom: 5px
    }

    .card-block.list-tag ol li {
        margin-bottom: 5px
    }

    .inline-order-list {
        margin-top: 50px
    }

    .inline-order-list h4, .inline-order-list p {
        margin-bottom: 0
    }

    .card-block ul li.list-inline-item {
        display: inline-block;
        float: left
    }

    .modal {
        z-index: 99999999999
    }

    .bd-example .modal {
        display: block;
        position: inherit;
        background-color: #2c3e50;
        margin-bottom: 20px
    }

    .card .overflow-container h5 {
        margin-bottom: 5px
    }

    .button-page .card-block a.nav-link {
        margin-bottom: 0
    }

    .sweet-alert button.confirm {
        background-color: #01a9ac !important
    }

    .sweet-alert .sa-input-error {
        top: 23px
    }

    .location-selector {
        width: 100%;
        height: 250px;
        background-color: #fff;
        border: 2px dashed #e5e9ec;
        position: relative;
        margin-bottom: 20px
    }

    .location-selector .bit {
        background-color: #e5e9ec;
        cursor: pointer;
        position: absolute
    }

    .location-selector .bit:hover {
        background-color: #ddd
    }

    .location-selector .bit.bottom, .location-selector .bit.top {
        height: 25%;
        width: 40%;
        margin: 0 30%
    }

    .location-selector .bit.top {
        top: 0
    }

    .location-selector .bit.bottom {
        bottom: 0
    }

    .location-selector .bit.left, .location-selector .bit.right {
        height: 20%;
        width: 20%;
        margin-left: 0;
        margin-right: 0
    }

    .location-selector .bit.right {
        right: 0
    }

    .location-selector .bit.left {
        left: 0
    }

    button.close {
        margin-top: 7px;
        margin-bottom: 0
    }

    .mytooltip {
        display: inline;
        position: relative;
        z-index: 999
    }

    .mytooltip .tooltip-item {
        background: rgba(0, 0, 0, .1);
        cursor: pointer;
        display: inline-block;
        font-weight: 500;
        padding: 0 10px
    }

    .mytooltip .tooltip-content {
        position: absolute;
        z-index: 9999;
        width: 360px;
        left: 50%;
        margin: 0 0 20px -180px;
        bottom: 100%;
        text-align: left;
        font-size: 14px;
        line-height: 30px;
        -webkit-box-shadow: -5px -5px 15px rgba(48, 54, 61, .2);
        box-shadow: -5px -5px 15px rgba(48, 54, 61, .2);
        background: #2b2b2b;
        opacity: 0;
        cursor: default;
        pointer-events: none
    }

    .mytooltip .tooltip-content::after {
        content: '';
        top: 100%;
        left: 50%;
        border: solid transparent;
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: #2a3035 transparent transparent;
        border-width: 10px;
        margin-left: -10px
    }

    .mytooltip .tooltip-content img {
        position: relative;
        height: 140px;
        display: block;
        float: left;
        margin-right: 1em
    }

    .mytooltip .tooltip-item::after {
        content: '';
        position: absolute;
        width: 360px;
        height: 20px;
        bottom: 100%;
        left: 50%;
        pointer-events: none;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }

    .mytooltip:hover .tooltip-item::after {
        pointer-events: auto
    }

    .mytooltip:hover .tooltip-content {
        pointer-events: auto;
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0);
        transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0)
    }

    .mytooltip:hover .tooltip-content2 {
        opacity: 1;
        font-size: 18px
    }

    .mytooltip:hover .tooltip-content2 i {
        opacity: 1;
        font-size: 18px
    }

    .mytooltip:hover .tooltip-content2 {
        opacity: 1;
        font-size: 18px;
        pointer-events: auto;
        -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
        transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
    }

    .mytooltip:hover .tooltip-content2 i {
        opacity: 1;
        font-size: 18px;
        pointer-events: auto;
        -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
        transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
    }

    .mytooltip:hover .tooltip-item2 {
        color: #fff;
        -webkit-transform: translate3d(0, -0.9em, 0);
        transform: translate3d(0, -0.9em, 0)
    }

    .mytooltip:hover .tooltip-text3 {
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
    }

    .mytooltip:hover .tooltip-content3 {
        opacity: 1;
        pointer-events: auto;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
    }

    .mytooltip:hover .tooltip-content4 {
        pointer-events: auto;
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .mytooltip:hover .tooltip-text2 {
        pointer-events: auto;
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .mytooltip:hover .tooltip-inner2 {
        -webkit-transition-delay: .3s;
        transition-delay: .3s;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .mytooltip:hover .tooltip-content5 {
        opacity: 1;
        pointer-events: auto;
        -webkit-transition-delay: 0s;
        transition-delay: 0s
    }

    .mytooltip .tooltip-text {
        font-size: 14px;
        line-height: 24px;
        display: block;
        padding: 1.31em 1.21em 1.21em 0;
        color: #fff
    }

    .mytooltip .tooltip-item2 {
        color: #01a9ac;
        cursor: pointer;
        z-index: 100;
        position: relative;
        display: inline-block;
        font-weight: 700;
        font-size: 14px;
        -webkit-transition: background-color .3s, color .3s, -webkit-transform .3s;
        transition: background-color .3s, color .3s, -webkit-transform .3s;
        transition: background-color .3s, color .3s, transform .3s;
        transition: background-color .3s, color .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip.tooltip-effect-2:hover .tooltip-content {
        -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 0deg);
        transform: perspective(1000px) rotate3d(1, 0, 0, 0deg)
    }

    .tooltip-effect-5 .tooltip-text {
        padding: 1.4em
    }

    .tooltip-effect-1 .tooltip-content {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s;
        color: #fff
    }

    .tooltip-effect-2 .tooltip-content {
        -webkit-transform-origin: 50% calc(110%);
        transform-origin: 50% calc(110%);
        -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
        transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
        -webkit-transition: opacity .2s, -webkit-transform .2s;
        transition: opacity .2s, -webkit-transform .2s;
        transition: opacity .2s, transform .2s;
        transition: opacity .2s, transform .2s, -webkit-transform .2s
    }

    .tooltip-effect-3 .tooltip-content {
        -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
        transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-4 .tooltip-content {
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        -webkit-transform: scale3d(.7, .3, 1);
        transform: scale3d(.7, .3, 1);
        -webkit-transition: opacity .2s, -webkit-transform .2s;
        transition: opacity .2s, -webkit-transform .2s;
        transition: opacity .2s, transform .2s;
        transition: opacity .2s, transform .2s, -webkit-transform .2s
    }

    .tooltip-effect-5 .tooltip-content {
        width: 180px;
        margin-left: -90px;
        -webkit-transform-origin: 50% calc(106%);
        transform-origin: 50% calc(106%);
        -webkit-transform: rotate3d(0, 0, 1, 15deg);
        transform: rotate3d(0, 0, 1, 15deg);
        -webkit-transition: opacity .2s, -webkit-transform .2s;
        transition: opacity .2s, -webkit-transform .2s;
        transition: opacity .2s, transform .2s;
        transition: opacity .2s, transform .2s, -webkit-transform .2s;
        -webkit-transition-timing-function: ease, cubic-bezier(.17, .67, .4, 1.39);
        transition-timing-function: ease, cubic-bezier(.17, .67, .4, 1.39)
    }

    .tooltip-effect-6 .tooltip-content2 {
        -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
        transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-6 .tooltip-content2 i {
        -webkit-transform: scale3d(0, 0, 1);
        transform: scale3d(0, 0, 1);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-7 .tooltip-content2 {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-7 .tooltip-content2 i {
        -webkit-transform: translate3d(0, 15px, 0);
        transform: translate3d(0, 15px, 0);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-8 .tooltip-content2 {
        -webkit-transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
        transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-8 .tooltip-content2 i {
        -webkit-transform: scale3d(0, 0, 1);
        transform: scale3d(0, 0, 1);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-9 .tooltip-content2 {
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }

    .tooltip-effect-9 .tooltip-content2 i {
        -webkit-transform: translate3d(0, 20px, 0);
        transform: translate3d(0, 20px, 0);
        -webkit-transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, -webkit-transform .3s;
        transition: opacity .3s, transform .3s;
        transition: opacity .3s, transform .3s, -webkit-transform .3s
    }


    .accordion-msg {
        display: block;
        color: #222;
        padding: 14px 20px;
        border-top: 1px solid #ddd;
        font-weight: 600;
        cursor: pointer
    }

    .accordion-msg:focus, .accordion-msg:hover {
        text-decoration: none;
        outline: none
    }

    .faq-accordion .accordion-desc {
        padding: 20px
    }

    .accordion-desc {
        color: #222;
        padding: 0 20px 20px
    }

    #color-accordion .accordion-desc {
        margin-top: 14px
    }

    .ui-accordion-header-icon {
        float: right;
        font-size: 20px
    }

    .accordion-title {
        margin-bottom: 0
    }

    .accordion-block {
        padding: 0
    }

    .accordion-block p {
        margin-bottom: 0
    }

    .color-accordion-block a.ui-state-active, .color-accordion-block a:focus, .color-accordion-block a:hover {
        color: #fff;
        background: #4680ff
    }

    a.bg-default:focus, a.bg-default:hover {
        background-color: #fafafa !important;
        color: #fff
    }

    a.bg-primary:focus, a.bg-primary:hover {
        background-color: #01dbdf !important;
        color: #fff
    }

    a.bg-success:focus, a.bg-success:hover {
        background-color: #0df3a3 !important;
        color: #fff
    }

    a.bg-info:focus, a.bg-info:hover {
        background-color: #5ad9e9 !important;
        color: #fff
    }

    a.bg-warning:focus, a.bg-warning:hover {
        background-color: #feb798 !important;
        color: #fff
    }

    a.bg-danger:focus, a.bg-danger:hover {
        background-color: #fe909d !important;
        color: #fff
    }

    .tab-list p {
        padding: 10px
    }

    .tab-with-img i {
        position: absolute;
        padding: 5px
    }

    .tab-icon {
        margin-bottom: 30px
    }

    .tab-icon i {
        padding-right: 10px
    }

    .tab-below {
        border-top: 1px solid #ddd;
        border-bottom: none
    }

    .tab-below.nav-tabs .nav-link.active {
        border-color: transparent #ddd #ddd #ddd
    }

    .tab-below .nav-item {
        margin-top: -2px
    }

    .tab-below.nav-tabs .nav-link {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .card-header ~ .tab-icon .tab-with-img .sub-title i {
        right: 10px
    }

    .tab-with-img .nav-link {
        position: relative
    }

    .tabs-left, .tabs-right {
        min-width: 120px;
        vertical-align: top;
        width: 150px
    }

    .tabs-left, .tabs-left-content, .tabs-right, .tabs-right-content {
        display: table-cell
    }

    .nav-tabs.tabs-left .slide {
        height: 35px;
        width: 4px;
        bottom: 15px
    }

    .nav-tabs.tabs-right .slide {
        height: 35px;
        width: 4px;
        bottom: 15px;
        right: 0
    }

    .product-edit .md-tabs .nav-item a {
        padding: 0 0 10px !important;
        color: #404e67
    }

    .product-edit .md-tabs .nav-item a .f-20 {
        display: inline-block;
        margin-right: 10px
    }

    .md-tabs.tabs-left .nav-item, .md-tabs.tabs-right .nav-item, .tabs-left .nav-item, .tabs-right .nav-item {
        width: 100%;
        position: relative
    }

    .md-tabs {
        position: relative
    }

    .md-tabs .nav-item + .nav-item {
        margin: 0
    }

    .md-tabs .nav-link {
        border: none;
        color: #404e67
    }

    .md-tabs .nav-item {
        width: calc(100% / 4);
        text-align: center
    }

    .md-tabs .nav-link:focus, .md-tabs .nav-link:hover {
        border: none
    }

    .md-tabs .nav-item .nav-link.active ~ .slide {
        opacity: 1;
        -webkit-transition: all .3s ease-out;
        transition: all .3s ease-out
    }

    .md-tabs .nav-item .nav-link ~ .slide {
        opacity: 0;
        -webkit-transition: all .3s ease-out;
        transition: all .3s ease-out
    }

    .md-tabs .nav-item.open .nav-link, .md-tabs .nav-item.open .nav-link:focus, .md-tabs .nav-item.open .nav-link:hover, .md-tabs .nav-link.active, .md-tabs .nav-link.active:focus, .md-tabs .nav-link.active:hover {
        color: #01a9ac;
        border: none;
        background-color: transparent;
        border-radius: 0
    }

    .md-tabs .nav-item a {
        padding: 20px 0 !important;
        color: #404e67
    }

    .nav-tabs .slide {
        background: #01a9ac;
        width: calc(100% / 4);
        height: 4px;
        position: absolute;
        -webkit-transition: left .3s ease-out;
        transition: left .3s ease-out;
        bottom: 0
    }

    .nav-tabs .slide .nav-item.show .nav-link, .nav-tabs .slide .nav-link {
        color: #01a9ac
    }

    .img-tabs img {
        width: 100px;
        margin: 0 auto
    }

    .img-tabs a {
        opacity: .5;
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s
    }

    .img-tabs a span i {
        height: 25px;
        width: 25px;
        border-radius: 100%;
        bottom: 10px;
        right: 70px
    }

    .img-tabs a img {
        border: 3px solid
    }

    .img-tabs a.active {
        opacity: 1;
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s
    }

    .img-tabs .nav-item:first-child {
        border-bottom: none
    }

    #pc-left-panel-menu {
        margin-bottom: 20px
    }

    .h-active a {
        color: #01a9ac !important;
        font-weight: 600
    }

    .img-circle {
        border-radius: 50%
    }

    .b-none {
        border: none !important
    }

    .table-primary, .table-primary > td, .table-primary > th {
        background-color: #01a9ac
    }

    .table-responsive {
        display: inline-block;
        width: 100%;
        overflow-x: auto
    }

    .table.table-xl td, .table.table-xl th {
        padding: 1.25rem 2rem
    }

    .table.table-lg td, .table.table-lg th {
        padding: .9rem 2rem
    }

    .table.table-de td, .table.table-de th {
        padding: .75rem 2rem
    }

    .table.table-sm td, .table.table-sm th {
        padding: .6rem 2rem
    }

    .table.table-xs td, .table.table-xs th {
        padding: .4rem 2rem
    }

    .table-columned > tbody > tr > td:first-child, .table-columned > tbody > tr > th:first-child {
        border-left: 0
    }

    .table-columned > tfoot > tr > td:first-child, .table-columned > tfoot > tr > th:first-child {
        border-left: 0
    }

    .table-columned > tbody > tr > td, .table-columned > tbody > tr > th {
        border: 0;
        border-left: 1px solid #ddd
    }

    .table-columned > tfoot > tr > td, .table-columned > tfoot > tr > th {
        border: 0;
        border-left: 1px solid #ddd
    }

    .table-border-style {
        padding: 0
    }

    .table-border-style .table {
        margin-bottom: 0
    }

    .table > thead > tr > th {
        border-bottom-color: #ccc
    }

    .table-borderless tbody tr td, .table-borderless tbody tr th {
        border: 0
    }

    .table-bordered > thead > tr.border-solid > td, .table-bordered > thead > tr.border-solid > th {
        border-bottom-width: 2px
    }

    .table-bordered > thead > tr.border-solid:first-child > td, .table-bordered > thead > tr.border-solid:first-child th {
        border-bottom-width: 2px
    }

    .table-bordered > thead > tr.border-double > td, .table-bordered > thead > tr.border-double > th {
        border-bottom-width: 3px;
        border-bottom-style: double
    }

    .table-bordered > thead > tr.border-double:first-child > td, .table-bordered > thead > tr.border-double:first-child th {
        border-bottom-width: 3px;
        border-bottom-style: double
    }

    .rounded-card img, .user-img img {
        margin: 0 auto;
        display: block;
        width: 100%
    }

    .user-img img {
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19)
    }

    .user-about ul li {
        border-top: 1px solid rgba(204, 204, 204, .28);
        padding: 10px 0 10px 10px;
        text-align: left
    }

    .user-about ul li a {
        font-size: 16px;
        color: #666
    }

    .user-about ul li.active a {
        color: #fff
    }

    .user-about ul li.active {
        font-weight: 600;
        background: #1b8bf9
    }

    .card-title, h5 {
        margin: 0
    }

    .card-header.followers a {
        font-weight: 500;
        color: rgba(51, 51, 51, .85)
    }

    .user-profile {
        padding: 20px 0
    }

    .follow-btn button:first-child, .user-about i {
        margin-right: 10px
    }

    .btn-inline i {
        color: #fff
    }

    .btn-inline .fb-btn {
        background-color: #3b5998
    }

    .btn-inline .twitter-btn {
        background-color: #55acee
    }

    .btn-inline .pinterest-btn {
        background-color: #cb2027
    }

    .btn-inline .linkedin-btn {
        background-color: #007bb5
    }

    .btn-inline .dribbble-btn {
        background-color: #ea4c89
    }

    .user-post {
        font-style: italic
    }

    .connection-list img, .contact-user h4, .contact-user img, .earn-heading, .list-inline, .list-inline li, .service-header {
        display: inline-block
    }

    .connection-list img {
        width: 55px;
        height: 55px;
        margin: 5px
    }

    .border-post {
        border: 1px solid #ccc
    }

    .earn-sub-header {
        font-size: 15px;
        color: #ccc
    }

    .btn-inline {
        margin-top: 20px
    }

    .order-summary .progress {
        margin-bottom: 32px
    }

    .services .service-btn::after {
        top: 20px;
        right: 15px
    }

    .services-list {
        -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, .11);
        box-shadow: 0 0 5px 1px rgba(0, 0, 0, .11);
        top: 46px
    }

    .contact-menu i, .fa-cog, .services-list i {
        margin-right: 10px
    }

    .media-heading {
        cursor: pointer
    }

    h6.media-heading {
        font-weight: 600
    }

    .contact-details table .fa-star, .contact-details table .fa-star-o, .review-star i {
        color: #01a9ac
    }

    .review-star i:last-child {
        color: #ccc
    }

    .card-block.user-info {
        position: absolute;
        width: 100%;
        bottom: 10px
    }

    .profile-bg-img {
        width: 100%
    }

    .user-title {
        position: relative;
        bottom: 20px
    }

    .user-title h2 {
        color: #fff;
        text-shadow: 1px 1px 4px #373a3c;
        font-size: 20px
    }

    .profile-image img {
        border: 4px solid #fff
    }

    .user-info .media-body, .user-info .media-left {
        display: table-cell;
        vertical-align: middle
    }

    .cover-btn {
        bottom: 38px;
        right: 35px;
        position: absolute
    }

    .cover-profile .profile-bg-img {
        margin-bottom: 25px
    }

    .groups-contact span {
        float: right
    }

    .groups-contact span h4 {
        font-size: 18px;
        margin-bottom: 20px
    }

    .contact-menu {
        -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, .11);
        box-shadow: 0 0 5px 1px rgba(0, 0, 0, .11);
        top: 15%;
        right: 10%
    }

    .contact-menu .dropdown-item {
        padding: 8px 20px
    }

    .tab-header {
        margin-bottom: 20px
    }

    .card.user-card {
        border-top: none;
        -webkit-box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05);
        box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05);
        -webkit-transition: all 150ms linear;
        transition: all 150ms linear
    }

    .card.user-card:hover {
        -webkit-box-shadow: 0 0 25px -5px #9e9c9e;
        box-shadow: 0 0 25px -5px #9e9c9e
    }

    .card-header-img ~ .btn-group i {
        margin-right: 0
    }

    .card.business-info {
        border-top: none;
        border-left-width: 2px !important;
        -webkit-box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05);
        box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05);
        -webkit-transition: all 150ms linear;
        transition: all 150ms linear
    }

    .card.business-info:hover {
        -webkit-box-shadow: 0 0 25px -5px #9e9c9e;
        box-shadow: 0 0 25px -5px #9e9c9e
    }

    .top-cap-text p {
        padding: 10px 0;
        margin-bottom: 0
    }

    .user-content {
        text-align: center;
        margin-top: 20px
    }

    .user-content h4 {
        font-size: 16px;
        font-weight: 600
    }

    .user-content h5 {
        font-size: 14px
    }

    .img-overlay {
        bottom: 0;
        color: #fff;
        height: 100%;
        width: 100%;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
        position: absolute;
        -webkit-transform: scale(0);
        transform: scale(0);
        margin: 0 auto
    }

    .img-overlay span {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100px;
        text-align: center;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .img-overlay span .btn {
        display: inline-block
    }

    .img-overlay span .btn i {
        margin-right: 0
    }

    .img-hover-main {
        padding: 0 40px
    }

    .img-hover {
        position: relative;
        margin: 0 auto
    }

    .img-hover:hover .img-overlay {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        margin: 0 auto;
        background-color: rgba(0, 0, 0, .7);
        z-index: 2;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out
    }

    .card-header-img img {
        margin: 0 auto;
        display: block
    }

    .card-header-img h4 {
        margin-top: 30px;
        font-size: 20px;
        font-weight: 600;
        text-align: center
    }

    .card-header-img h5, .card-header-img h6 {
        margin-top: 15px;
        font-size: 15px;
        color: #222;
        font-weight: 500;
        text-align: center
    }

    .simple-cards .btn-group {
        margin: 20px auto 0
    }

    .simple-cards .btn-group button {
        margin: 0
    }

    .simple-cards .user-card {
        padding: 20px 0;
        text-align: center
    }

    .simple-cards .user-card .label-icon {
        margin-top: 15px
    }

    .simple-cards .user-card .label-icon i {
        font-size: 20px
    }

    .simple-cards .user-card .label-icon .badge-top-right {
        margin-left: 3px;
        top: -8px
    }

    .card-icon {
        display: block;
        margin-bottom: 5px
    }

    .btn-outline-primary {
        border-color: #01a9ac;
        font-weight: 500;
        padding: 10px 16px;
        font-size: 15px
    }

    .btn-outline-primary:hover {
        background-color: #01a9ac;
        border-color: #01a9ac
    }

    .simple-cards p {
        margin: 20px;
        font-size: 15px
    }

    .user-profile #edit-btn, .user-profile #edit-info-btn {
        margin-bottom: 0
    }

    .card-block ul.list-contacts, .card-block.groups-contact ul {
        display: block;
        float: none
    }

    .card-block ul.list-contacts li, .card-block.groups-contact ul li {
        display: block;
        float: none
    }

    ul.list-contacts .list-group-item a {
        color: #292b2c
    }

    ul.list-contacts .list-group-item.active a {
        color: #fff
    }

    .pagination li {
        display: inline-block
    }

    .card-block.groups-contact {
        margin-bottom: 0
    }

    .card-block .connection-list {
        margin-bottom: 20px
    }

    .table button {
        margin-bottom: 0
    }

    #crm-contact .img-circle, img.comment-img {
        width: 40px;
        height: 40px
    }

    .page-link {
        color: #01a9ac
    }

    .page-item.active .page-link {
        background-color: #01a9ac;
        border-color: #01a9ac
    }

    #main {
        margin-bottom: 20px
    }

    .offline-box iframe {
        width: 100%;
        border: 1px solid #ddd
    }

    .blog-page {
        border-top: none;
        -webkit-box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05);
        box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05)
    }

    .blog-page .blog-box {
        -webkit-box-shadow: 0 2px 7px 0 rgba(0, 0, 0, .15);
        box-shadow: 0 2px 7px 0 rgba(0, 0, 0, .15);
        overflow: hidden
    }

    .blog-page .blog-box h5 {
        border-bottom: 1px solid #ccc;
        color: #01a9ac;
        margin-top: 0;
        padding-bottom: 10px;
        margin-bottom: 15px;
        font-size: 18px;
        display: block
    }

    .blog-page .blog-box .option-font {
        background-color: #01a9ac;
        border-radius: 50%;
        bottom: 320px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        line-height: 35px;
        text-align: center;
        width: 35px
    }

    .blog-page .blog-box .blog-detail {
        padding: 10px
    }

    .blog-page .blog-img {
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        overflow: hidden;
        margin-bottom: -20px
    }

    .blog-page .blog-img:hover {
        opacity: .8;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .blog-page .blog-img .sharing {
        position: relative;
        bottom: 50px;
        left: 15px
    }

    .blog-page .blog-img .share {
        background-color: rgba(0, 0, 0, .5);
        border-radius: 5px;
        bottom: 3px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        left: 50px;
        padding: 3px 5px;
        position: absolute
    }

    .blog-page .blog-img .share::before {
        border-bottom: 6px solid transparent;
        border-left: 6px solid transparent;
        border-right: 6px solid rgba(0, 0, 0, .5);
        border-top: 6px solid rgba(0, 0, 0, .5);
        bottom: 8px;
        content: "";
        height: 42%;
        left: -6px;
        position: absolute;
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg);
        width: 12px
    }

    .blog-page .blog-img .share i {
        color: #fff;
        font-size: 15px;
        border-right: 1px solid #fff;
        padding: 0 5px
    }

    .blog-page .blog-img .share i:last-child {
        border: none
    }

    .blog-page .blog-img .share i a {
        padding: 0 5px;
        color: #fff
    }

    .author {
        display: inline-block;
        float: right
    }

    .author a {
        font-size: 13px
    }

    .blog_post_img h5 {
        display: block
    }

    .blog-date {
        font-size: 18px;
        padding-bottom: 10px;
        display: block
    }

    .blog-date i {
        margin-left: 5px;
        font-size: 14px;
        color: #01a9ac
    }

    .blog-date .icon-calendar {
        font-size: 16px;
        margin-top: 5px
    }

    .day {
        color: #bbb;
        padding-left: 10px;
        font-size: 14px
    }

    .btn-blog a {
        color: #fff !important
    }

    .blog-single h4 {
        margin-top: 20px;
        color: #01a9ac;
        font-weight: 400
    }

    .blog-single p {
        margin: 20px 0
    }

    .blog-single p:last-child {
        color: #777
    }

    .blog-single .qutoe-text {
        font-size: 15px;
        color: #01a9ac;
        border-left: 3px solid #01a9ac;
        padding-left: 25px;
        font-weight: 400
    }

    .blog-single img:first-child {
        width: 100%
    }

    .blog-article .articles img {
        width: 100%
    }

    .blog-big-user h6, .blog-big-user p {
        color: #757575
    }

    .blog-s-reply h6 {
        color: #01a9ac
    }

    .shares-like li:first-child, .shares-like li i {
        color: #777
    }

    .blog-tag li {
        display: inline-block;
        padding: 5px 15px;
        border: 1px solid #ccc;
        margin: 5px 15px 5px 0
    }

    .blog-tag li a, .blog-tag li i {
        color: #777
    }

    .blog-tag li:first-child {
        border: none;
        padding: 5px 0
    }

    .blog-tag li i {
        font-size: 20px;
        vertical-align: middle
    }

    .blog-tag li:hover {
        background-color: #01a9ac;
        border-color: #01a9ac
    }

    .blog-tag li:hover a, .blog-tag li:hover i {
        color: #fff
    }

    .shares-like li {
        display: inline-block;
        margin: 5px 15px 5px 0;
        font-size: 20px
    }

    .shares-like li:first-child {
        font-size: 17px
    }

    .shares-like li i {
        color: #fff
    }

    .shares-like .btn-facebook, .shares-like .btn-google-plus, .shares-like .btn-linkedin, .shares-like .btn-pinterest, .shares-like .btn-twitter {
        color: #fff;
        padding: 10px 15px;
        display: inline-block
    }

    .btn-dribbble i, .btn-dropbox i, .btn-facebook i, .btn-flickr i, .btn-github i, .btn-google-plus i, .btn-instagram i, .btn-linkedin i, .btn-pinterest i, .btn-skype i, .btn-tumblr i, .btn-twitter i, .btn-youtube i {
        display: inline-block;
        padding: 5px 15px;
        border-radius: 3px 0 0 3px;
        margin: -7px 0 -7px -13px
    }

    .blog-article .articles h6 {
        padding-top: 20px;
        font-weight: 400
    }

    .blog-article .articles a {
        font-weight: 400;
        font-size: 15px;
        color: #01a9ac;
        margin: 20px 0;
        display: block
    }

    .blog-s-reply h6 span {
        font-size: 12px;
        color: #777;
        margin-left: 5px
    }

    .blog-u-comment span {
        font-size: 14px
    }

    .blog-u-comment .blog-edit a, .blog-u-comment .blog-reply a {
        margin-right: 10px;
        font-size: 12px
    }

    .system_font_color {
        font-size: 18px;
        color: #01a9ac
    }

    .system_font_color a {
        color: #01a9ac;
        margin-left: 5px
    }



    .port_detail_next_search a {
        color: #333;
        -webkit-transition: all .3s 0s;
        transition: all .3s 0s
    }

    .port_detail_next_search a i {
        float: right;
        margin-top: 6px
    }

    .blog_detail_social_icon span {
        font-size: 18px;
        padding: 10px;
        border: 1px solid #999;
        border-radius: 50px;
        cursor: pointer;
        margin-right: 10px;
        -webkit-transition: all .5s ease;
        transition: all .5s ease;
        display: inline-block;
        margin-bottom: 10px
    }

    .blog_detail_social_icon span:hover {
        background-color: #01a9ac;
        color: #fff
    }

    .latest_blog h5 a {
        color: #333;
        font-weight: 600
    }

    .gallery-page .card-block {
        margin-bottom: -20px
    }



    .thumbnail .thumb {
        position: relative;
        display: block
    }

    .card.gallery-desc {
        overflow: hidden
    }

    .masonry-media {
        overflow: hidden
    }

    .masonry-media img {
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .masonry-media img:hover {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    .masonry-image .masonry-media {
        margin-bottom: 20px
    }

    figure.effect-goliath {
        background: #01a9ac
    }

    .barchart canvas, .tristate canvas {
        width: 100% !important
    }

    .ct-series-a .ct-line {
        stroke: #1ce3bb
    }

    .ct-series-b .ct-line {
        stroke: rgba(255, 157, 136, .62)
    }

    .ct-series-c .ct-line {
        stroke: rgba(79, 84, 103, .45)
    }

    .ct-series-d .ct-line {
        stroke: rgba(129, 142, 219, .61)
    }

    .ct-series-a .ct-point, .ct-series-b .ct-point, .ct-series-c .ct-point, .ct-series-d .ct-point {
        stroke: rgba(52, 54, 70, .47);
        stroke-width: 8px;
        stroke-linecap: round
    }

    .ct-series-a .ct-slice-donut {
        stroke: #01c0c8
    }

    .ct-series-b .ct-slice-donut {
        stroke: #83d6de
    }

    .ct-series-c .ct-slice-donut {
        stroke: #1abc9c
    }

    .ct-series-d .ct-slice-donut {
        stroke: #4f5467
    }

    .task-list select {
        width: 92%
    }

    .task-list select .task-list img {
        margin-right: 5px;
        display: inline-block
    }

    .task-list input {
        width: 80%
    }

    .task-list-table img {
        width: 40px
    }

    .task-list-table img i {
        color: #333;
        margin-right: 5px
    }

    .task-page td:last-child {
        position: relative
    }

    .task-page a {
        cursor: pointer
    }

    .task-page tr td:last-child i {
        margin-right: 10px
    }

    .thumb-img {
        position: relative;
        display: block
    }

    .thumb-img:hover .caption-hover {
        background-color: rgba(0, 0, 0, .7);
        visibility: visible;
        opacity: 1;
        filter: alpha(opacity=100);
        position: absolute;
        width: 100%;
        height: 100%
    }

    .caption-hover {
        top: 0;
        visibility: hidden;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all .15s ease-in-out;
        transition: all .15s ease-in-out
    }

    .caption-hover > span {
        top: 38%;
        width: 100%;
        position: absolute;
        text-align: center
    }

    .media .b-2-primary {
        border: 2px solid #01a9ac
    }

    .thumb-block {
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        padding: 3px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 3px;
        -webkit-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out
    }

    .thumb-block a {
        font-size: 12px
    }

    .thumb-block .btn i {
        margin-right: 0
    }

    .comment-block .btn i {
        margin-right: 0
    }

    .dropdown-item {
        color: #666;
        padding: 6px 20px
    }

    .dropdown-item.active, .dropdown-item:active {
        background-color: #01a9ac
    }

    .task-detail-right .counter {
        text-align: center;
        color: #777
    }

    .task-details .table.table-xs td, .task-details .table.table-xs th {
        padding: 1rem .3rem
    }

    .assign-user .media-left {
        position: relative
    }

    .assign-user .media-left img {
        margin-bottom: 0
    }

    .photo-table img {
        display: inline-block;
        width: 40px;
        margin-bottom: 5px
    }

    .v-middle {
        vertical-align: middle
    }

    .revision-block .form-group {
        margin-bottom: 0
    }

    .revision-block .btn i {
        margin-right: 0
    }

    .task-setting .switchery {
        display: block !important;
        float: right
    }

    .task-setting .form-group {
        margin-bottom: 0
    }

    .task-attachment i {
        cursor: pointer
    }

    .filter-bar .nav, .filter-bar .nav-item {
        display: inline-block
    }

    .filter-bar > .navbar {
        background-color: #fff;
        border-radius: 4px;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .05), 0 3px 1px -2px rgba(0, 0, 0, .08), 0 1px 5px 0 rgba(0, 0, 0, .08);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .05), 0 3px 1px -2px rgba(0, 0, 0, .08), 0 1px 5px 0 rgba(0, 0, 0, .08);
        padding: .5rem 1rem
    }

    .navbar-nav .nav-item {
        float: left;
        line-height: 26px
    }

    .nav-item button i {
        margin-right: 0
    }

    .filter-bar .navbar-light .navbar-nav .nav-link {
        margin-right: 10px
    }

    .card-footer .task-list-table, .card-footer .task-list-table a img {
        display: inline-block
    }

    .task-board {
        margin-top: 10px;
        float: right
    }

    .task-board .dropdown {
        display: inline-block
    }

    p.task-detail {
        margin-bottom: 5px
    }

    p.task-due {
        margin-bottom: 0
    }

    .task-right-header-revision, .task-right-header-status, .task-right-header-users {
        padding-bottom: 10px;
        padding-top: 10px;
        border-bottom: 1px solid #ccc
    }

    .taskboard-right-progress, .taskboard-right-revision, .taskboard-right-users {
        margin-top: 10px
    }

    .task-right .icofont {
        margin-top: 5px;
        margin-right: 0
    }

    .taskboard-right-revision .media .media-body .chat-header {
        font-size: 13px
    }

    .media-left i {
        margin-right: 0
    }

    .nav-item.nav-grid {
        float: right
    }

    .faq-progress .progress {
        position: relative;
        background-color: #eeeded;
        height: 10px
    }

    .faq-progress .progress .faq-text1, .faq-progress .progress .faq-text2, .faq-progress .progress .faq-text3, .faq-progress .progress .faq-text4, .faq-progress .progress .faq-text5 {
        font-weight: 600;
        margin-right: -37px
    }

    .faq-progress .progress .faq-bar1, .faq-progress .progress .faq-bar2, .faq-progress .progress .faq-bar3, .faq-progress .progress .faq-bar4, .faq-progress .progress .faq-bar5 {
        background: #29aecc;
        height: 10px;
        border-radius: 0;
        position: absolute;
        top: 0
    }

    .faq-progress .progress .faq-bar1 {
        background-color: #fe9365
    }

    .faq-progress .progress .faq-text1 {
        color: #2196f3
    }

    .faq-progress .progress .faq-bar2, .faq-progress .progress .faq-bar5 {
        background-color: #0ac282
    }

    .faq-progress .progress .faq-text2, .faq-progress .progress .faq-text5 {
        color: #4caf50
    }

    .faq-progress .progress .faq-bar3 {
        background-color: #fe5d70
    }

    .faq-progress .progress .faq-text3 {
        color: #ff5252
    }

    .faq-progress .progress .faq-bar4 {
        background-color: #01a9ac
    }

    .faq-progress .progress .faq-text4 {
        color: #f57c00
    }

    .card-faq h4 {
        color: #2196f3
    }

    .faq-progress .progress {
        margin-bottom: 10px
    }

    .issue-list-progress {
        border-bottom: 1px solid #ccc
    }

    .issue-list-progress .progress {
        position: relative;
        background-color: #eeeded;
        height: 9px;
        width: 100%;
        margin: 20px 0;
        overflow: visible
    }

    .issue-progress .progress .issue-text1 {
        font-weight: 600;
        position: absolute
    }

    .issue-progress .progress .issue-bar1 {
        background: #01a9ac;
        height: 10px;
        border-radius: 0;
        position: absolute;
        top: 0
    }

    .matrics-issue .sub-title {
        padding-top: 20px;
        padding-bottom: 10px;
        display: block
    }

    .bg-white {
        background-color: #fff !important
    }

    .matrics-issue div h6 {
        padding-top: 10px;
        color: #777
    }

    .dd-w, .sp-container {
        z-index: 99999 !important
    }

    table.matrics-table tr:first-child td {
        border-top: none !important
    }

    #issue-list-table > thead > tr > th {
        border-bottom: none
    }

    .note-card .notes-list {
        margin-bottom: 20px
    }

    .prod-img {
        position: relative;
        overflow: hidden
    }

    .prod-img .btn i {
        margin-right: 0
    }

    .prod-item .prod-img .option-hover {
        display: none;
        position: absolute;
        right: 0;
        top: 50%;
        left: 0
    }

    .prod-item .prod-img .option-hover .btn-icon {
        border-radius: 5px
    }

    .hvr-shrink {
        display: inline-block;
        vertical-align: middle;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .hvr-shrink:hover {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    .prod-img .p-new a {
        position: absolute;
        top: 15px;
        right: 0;
        padding: 8px 13px;
        line-height: 1;
        font-size: 13px;
        text-transform: uppercase;
        border-radius: 2px 0 0 2px;
        background: #2dcee3;
        color: #fff;
        letter-spacing: 1px;
        font-weight: 600
    }

    .prod-info .br-wrapper {
        margin: 0 auto 20px
    }

    .prod-info .br-widget {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-top: 0
    }

    .prod-info h4 {
        font-size: 18px;
        margin-bottom: 10px
    }

    .prod-info .prod-price {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 10px
    }

    .prod-info .prod-price .old-price {
        color: #919aa3;
        text-decoration: line-through;
        font-size: 50%
    }

    .prod-view:hover .option-hover {
        display: inline-block;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
        z-index: 1
    }

    .prod-item .prod-info {
        background: #fff;
        padding: 30px 0 20px
    }

    .prod-item .br-widget {
        min-height: inherit
    }

    .prod-img .p-sale {
        position: absolute;
        top: 15px;
        right: 20px;
        width: 40px;
        height: 40px;
        font-size: 11px;
        text-transform: uppercase;
        border-radius: 50%;
        background-color: #ff5252;
        color: #fff;
        font-weight: 800;
        letter-spacing: 1px;
        padding: 11px 4px
    }

    .prod-info .br-widget {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-top: 0
    }

    .option-icon i {
        height: 25px;
        width: 25px;
        font-size: 25px;
        line-height: 36px
    }

    .product-detail-page {
        border-top: none
    }

    .product-detail .br-wrapper {
        margin: 10px 0
    }

    .product-detail .product-detail .btn i {
        margin-right: 0
    }

    .product-detail .br-widget {
        min-height: 35px;
        margin-top: 0;
        display: block
    }

    .product-detail .btn-number {
        background-color: #e0e0e0;
        border-color: #d4d4d4;
        border-radius: 0;
        color: #000
    }

    .product-detail .product-price {
        display: inline-block;
        margin-right: 50px;
        font-size: 24px
    }

    .product-detail .pro-desc {
        margin-top: 15px;
        margin-bottom: 15px
    }

    .product-detail .done-task {
        text-decoration: line-through
    }

    .product-detail hr {
        margin-top: 15px;
        margin-bottom: 15px
    }

    #small_banner .slick-slide {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        opacity: .5
    }

    #small_banner img {
        cursor: pointer
    }

    #small_banner .slick-center {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
        opacity: 1
    }

    #small_banner:hover .slick-prev {
        left: 0;
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s
    }

    #small_banner:hover .slick-next {
        right: 0;
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s
    }

    .port_details_all_img {
        overflow: hidden
    }

    .page-link:hover {
        color: #01a9ac
    }

    .slick-prev {
        left: -45px;
        z-index: 1;
        height: 100%;
        background: rgba(0, 0, 0, .62);
        width: 4%;
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s
    }

    .slick-prev:focus, .slick-prev:hover {
        color: transparent;
        outline: none;
        background: rgba(0, 0, 0, .8)
    }

    .brighttheme-icon-sticker:after {
        top: -5px;
        content: "\002016"
    }

    .slick-next {
        right: -45px;
        z-index: 1;
        height: 100%;
        background: rgba(0, 0, 0, .62);
        width: 4%;
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s
    }

    .slick-next:focus, .slick-next:hover {
        color: transparent;
        outline: none;
        background: rgba(0, 0, 0, .8)
    }

    .counter-input .input-group {
        width: 20%
    }

    .pro-det-tab .tab-content {
        border: 1px solid #ccc;
        border-top: 0
    }

    .big_banner .port_big_img {
        margin-bottom: 15px
    }

    .cd-price .cd-price-month {
        font-size: 64px
    }

    .product-edit .br-wrapper {
        margin: 10px 0 30px
    }

    .addcontact .md-content > div ul {
        padding-left: 0
    }

    .panel {
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }

    .panel-body p {
        overflow: hidden;
        margin-bottom: 0
    }

    .panels-wells .panel {
        margin-bottom: 20px
    }

    .panels-wells .panel .panel-body {
        padding: 15px
    }

    .panel-heading {
        padding: 10px 15px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }

    .panel-footer {
        padding: 10px 15px;
        background-color: #fafafa;
        border-top: 1px solid #eee;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }

    .well-sm {
        padding: 9px;
        border-radius: 3px
    }

    .well-lg {
        padding: 24px;
        border-radius: 6px
    }

    .search-result .card {
        border-top: none;
        -webkit-box-shadow: 0 2px 7px 0 rgba(0, 0, 0, .15);
        box-shadow: 0 2px 7px 0 rgba(0, 0, 0, .15)
    }

    .search-result .card .card-block h5 {
        font-weight: 600
    }

    .search-result .card .card-block p {
        margin-bottom: 0;
        margin-top: 10px;
        line-height: 1.4
    }

    .seacrh-header {
        margin-top: 20px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .search-content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        border-bottom: 1px solid #ccc
    }

    .search-content img {
        width: 120px
    }

    .search-content:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0
    }

    .search-result i {
        float: right;
        line-height: 1.5
    }

    .search2 .card-block:first-child {
        padding-top: 0
    }

    .cart-page .wizard > .content > .body {
        width: 100%;
        padding: 0
    }

    .wizard > .content > .body {
        width: 100%
    }

    .card .wizard > .steps .current a {
        outline: none;
        border-radius: 5px
    }

    .payment-card {
        border: 1px solid #ccc;
        border-radius: 0;
        margin-bottom: 15px;
        padding: 20px
    }

    .payment-card table {
        margin-bottom: 0
    }

    .confirmation {
        text-align: center;
        font-size: 80px
    }

    .confirmation-icon {
        color: #fe5d70
    }

    .width-100 {
        width: 100%
    }

    .post-input {
        padding: 10px 10px 10px 5px;
        display: block;
        width: 100%;
        border: none;
        resize: none
    }

    .file-upload-lbl {
        max-width: 15px;
        padding: 5px 0 0
    }

    .post-timelines .media {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    a[data-lightbox=example-set] .img-fluid, a[data-lightbox=roadtrip] .img-fluid, a[data-toggle=lightbox] .img-fluid {
        margin: 10px 0
    }

    .post-new-footer {
        border-top: 1px solid #ccc
    }

    .post-new-footer i {
        font-size: 18px;
        margin-right: 15px;
        cursor: pointer
    }

    .inline-editable .btn {
        padding: 10px
    }

    .inline-editable .input-group .form-control {
        width: 100%
    }

    .input-group span {
        cursor: pointer
    }

    .input-group a {
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 12px
    }

    .msg-send {
        background-color: #f3f3f3
    }

    .msg-send:focus {
        background-color: #f3f3f3
    }

    .wall-dropdown:after {
        position: absolute;
        top: 20px;
        right: 15px;
        cursor: pointer
    }

    .wall-img-preview {
        display: inline-block;
        text-align: center
    }

    .wall-img-preview .wall-item {
        display: block;
        float: left;
        position: relative;
        overflow: hidden;
        border: 2px solid #fff;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center
    }

    .wall-img-preview .wall-item:first-child:nth-last-child(2), .wall-img-preview .wall-item:first-child:nth-last-child(2) ~ div {
        width: 50%
    }

    .wall-img-preview .wall-item > img {
        display: none
    }

    .wall-img-preview .wall-item:first-child:nth-last-child(2), .wall-img-preview .wall-item:first-child:nth-last-child(2) ~ div {
        width: 50%
    }

    .wall-img-preview .wall-item:first-child:nth-last-child(10), .wall-img-preview .wall-item:first-child:nth-last-child(10) ~ div:not(:last-child), .wall-img-preview .wall-item:first-child:nth-last-child(11) ~ div:nth-last-of-type(-n+3), .wall-img-preview .wall-item:first-child:nth-last-child(3), .wall-img-preview .wall-item:first-child:nth-last-child(3) ~ div, .wall-img-preview .wall-item:first-child:nth-last-child(4), .wall-img-preview .wall-item:first-child:nth-last-child(4) ~ div:not(:last-child), .wall-img-preview .wall-item:first-child:nth-last-child(5), .wall-img-preview .wall-item:first-child:nth-last-child(5) ~ div:not(:nth-last-of-type(-n+2)), .wall-img-preview .wall-item:first-child:nth-last-child(6), .wall-img-preview .wall-item:first-child:nth-last-child(6) ~ div, .wall-img-preview .wall-item:first-child:nth-last-child(7) ~ div:nth-last-of-type(-n+3), .wall-img-preview .wall-item:first-child:nth-last-child(9), .wall-img-preview .wall-item:first-child:nth-last-child(9) ~ div {
        width: 33.333333%
    }

    .wall-img-preview .wall-item:first-child:nth-last-child(5) ~ div:nth-last-of-type(-n+2) {
        width: 50%
    }

    .wall-img-preview .wall-item:first-child:nth-last-child(11), .wall-img-preview .wall-item:first-child:nth-last-child(11) ~ div:not(:nth-last-of-type(-n+3)), .wall-img-preview .wall-item:first-child:nth-last-child(12), .wall-img-preview .wall-item:first-child:nth-last-child(12) ~ div, .wall-img-preview .wall-item:first-child:nth-last-child(7), .wall-img-preview .wall-item:first-child:nth-last-child(7) ~ div:not(:nth-last-of-type(-n+3)), .wall-img-preview .wall-item:first-child:nth-last-child(8), .wall-img-preview .wall-item:first-child:nth-last-child(8) ~ div {
        width: 25%
    }

    .wall-img-preview .wall-item:first-child:nth-last-child(10) ~ div:nth-child(10), .wall-img-preview .wall-item:first-child:nth-last-child(4) ~ div:nth-child(4), .wall-img-preview .wall-item:only-child {
        width: 100%
    }

    .fb-timeliner h2 {
        background: #01a9ac;
        color: #fff;
        margin-top: 0;
        padding: 15px;
        font-size: 16px;
        border-radius: 2px;
        -webkit-border-radius: 4px;
        font-weight: 300
    }

    .fb-timeliner ul {
        margin-left: 15px;
        margin-bottom: 20px
    }

    .fb-timeliner ul li {
        margin-bottom: 3px
    }

    .fb-timeliner ul li a {
        color: #999797;
        border-left: 4px solid #d3d7dd;
        padding-left: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
        display: block
    }

    .fb-timeliner ul li a:hover {
        color: #999797;
        border-left: 4px solid #b1b1b1;
        padding-left: 10px
    }

    .fb-timeliner ul li.active a {
        color: #7a7a7a;
        border-left: 4px solid #7a7a7a;
        padding-left: 10px
    }

    .dotted-line-theme .no_edit {
        width: 100% !important
    }

    .dotted-line-theme .no_edit .i_text {
        font-size: 13px
    }

    .dotted-line-theme .no_edit {
        padding: 15px 2px
    }

    .dotted-line-theme .just_edit input[type=radio] {
        opacity: 0
    }

    .dotted-line-theme .ibtn_container {
        padding-left: 0;
        margin-top: 2px;
        position: absolute;
        top: 6px;
        z-index: 999;
        width: 120px
    }

    .dotted-line-theme .ibtn_container i {
        color: #fff;
        margin-right: 0
    }

    .dotted-line-theme .i_edit, .dotted-line-theme .ibtn_container, .dotted-line-theme .just_edit, .dotted-line-theme .just_edit input, .dotted-line-theme .just_edit textarea, .dotted-line-theme .no_edit, .dotted-line-theme .no_edit .i_text {
        font-size: 13px
    }

    .wizard > .content > .body label.error {
        margin-left: 0
    }

    #msform #progressbar li.active {
        color: #01a9ac
    }

    #msform #progressbar li.active:before, #progressbar li.active:after {
        background: #01a9ac
    }

    #msform a {
        color: #01a9ac;
        font-weight: 600
    }

    .invoice-contact {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 30px;
        padding-top: 30px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .invoice-table {
        border-left: 1px solid #fff;
        padding-left: 20px
    }

    .invoice-table td, .invoice-table th {
        border-top: none;
        padding: 3px 0
    }

    .invoice-table > tbody > tr:last-child > td, .invoice-table > tfoot > tr:last-child > td {
        padding-bottom: 0
    }

    .invoice-box h1 {
        font-size: 7rem
    }

    .invoice-order {
        padding-left: 0
    }

    .invoice-order th:first-child {
        padding-left: 0;
        width: 80px
    }

    .invoice-detail-table th:first-child {
        width: 450px;
        text-align: left
    }

    .invoice-detail-table thead th {
        text-align: center
    }

    .invoice-detail-table td {
        vertical-align: middle;
        text-align: center
    }

    .invoice-detail-table td:first-child {
        text-align: left
    }

    .invoice-total {
        background: #f3f3f3;
        padding: 30px 0
    }

    .invoice-total td, .invoice-total th {
        text-align: right
    }

    .invoice-total td {
        padding-left: 30px
    }

    .invoive-info {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 30px
    }

    .invoive-info h6 {
        margin-bottom: 20px;
        text-transform: uppercase;
        font-weight: 600;
        color: #757575
    }

    .invoice-total tbody {
        padding-right: 20px;
        float: right
    }

    .dropdown-menu i {
        margin-right: 5px
    }

    .grid-layout span {
        display: block;
        border: 1px solid #ddd;
        padding: 10px;
        margin: 5px 0
    }

    .vertical-alignment .row {
        padding: 15px 0;
        min-height: 10rem;
        border: 1px solid #ddd
    }

    .inte-benifits {
        border: 1px solid #ddd
    }

    .inte-benifits ul {
        list-style: square;
        padding-left: 20px
    }

    .version .card-block {
        padding: 0
    }

    .card.version .card-header .card-header-right {
        background-color: #fff;
        top: 8px
    }

    .version .nav {
        display: block
    }

    .version .nav li {
        display: block;
        padding: 10px 20px;
        cursor: pointer
    }

    .version .nav li:hover {
        background-color: #f6f7f7
    }

    .version .nav li a {
        color: #666
    }

    .version .nav li span {
        position: absolute;
        right: 20px
    }

    .version .navigation-header a {
        color: #999
    }

    .support-btn {
        padding: 0 20px 20px
    }

    .introjs-helperNumberLayer {
        background: -webkit-gradient(linear, left top, left bottom, from(#fe7686), to(#fe5d70));
        background: linear-gradient(to bottom, #fe7686 0%, #fe5d70 100%)
    }

    .dd-handle, .dd3-content {
        font-weight: 600
    }

    .img-radius {
        border-radius: 5px
    }

    .version .nav li:first-child {
        border-top: 1px solid #ddd;
        color: #666
    }

    .dd-w, .sp-container {
        z-index: 99
    }

    #sessionTimeout-dialog .close {
        display: none
    }

    .pull-0 {
        right: auto
    }

    .pull-1 {
        right: 8.333333%
    }

    .pull-2 {
        right: 16.666667%
    }

    .pull-3 {
        right: 25%
    }

    .pull-4 {
        right: 33.333333%
    }

    .pull-5 {
        right: 41.666667%
    }

    .pull-6 {
        right: 50%
    }

    .pull-7 {
        right: 58.333333%
    }

    .pull-8 {
        right: 66.666667%
    }

    .pull-9 {
        right: 75%
    }

    .pull-10 {
        right: 83.333333%
    }

    .pull-11 {
        right: 91.666667%
    }

    .pull-12 {
        right: 100%
    }

    .push-0 {
        left: auto
    }

    .push-1 {
        left: 8.333333%
    }

    .push-2 {
        left: 16.666667%
    }

    .push-3 {
        left: 25%
    }

    .push-4 {
        left: 33.333333%
    }

    .push-5 {
        left: 41.666667%
    }

    .push-6 {
        left: 50%
    }

    .push-7 {
        left: 58.333333%
    }

    .push-8 {
        left: 66.666667%
    }

    .push-9 {
        left: 75%
    }

    .push-10 {
        left: 83.333333%
    }

    .push-11 {
        left: 91.666667%
    }

    .push-12 {
        left: 100%
    }

    .offset-1 {
        margin-left: 8.333333%
    }

    .offset-2 {
        margin-left: 16.666667%
    }

    .offset-3 {
        margin-left: 25%
    }

    .offset-4 {
        margin-left: 33.333333%
    }

    .offset-5 {
        margin-left: 41.666667%
    }

    .offset-6 {
        margin-left: 50%
    }

    .offset-7 {
        margin-left: 58.333333%
    }

    .offset-8 {
        margin-left: 66.666667%
    }

    .offset-9 {
        margin-left: 75%
    }

    .offset-10 {
        margin-left: 83.333333%
    }

    .offset-11 {
        margin-left: 91.666667%
    }

    @media (min-width: 576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-sm-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto
        }

        .col-sm-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-sm-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-sm-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-sm-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-sm-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-sm-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-sm-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-sm-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-sm-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-sm-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .pull-sm-0 {
            right: auto
        }

        .pull-sm-1 {
            right: 8.333333%
        }

        .pull-sm-2 {
            right: 16.666667%
        }

        .pull-sm-3 {
            right: 25%
        }

        .pull-sm-4 {
            right: 33.333333%
        }

        .pull-sm-5 {
            right: 41.666667%
        }

        .pull-sm-6 {
            right: 50%
        }

        .pull-sm-7 {
            right: 58.333333%
        }

        .pull-sm-8 {
            right: 66.666667%
        }

        .pull-sm-9 {
            right: 75%
        }

        .pull-sm-10 {
            right: 83.333333%
        }

        .pull-sm-11 {
            right: 91.666667%
        }

        .pull-sm-12 {
            right: 100%
        }

        .push-sm-0 {
            left: auto
        }

        .push-sm-1 {
            left: 8.333333%
        }

        .push-sm-2 {
            left: 16.666667%
        }

        .push-sm-3 {
            left: 25%
        }

        .push-sm-4 {
            left: 33.333333%
        }

        .push-sm-5 {
            left: 41.666667%
        }

        .push-sm-6 {
            left: 50%
        }

        .push-sm-7 {
            left: 58.333333%
        }

        .push-sm-8 {
            left: 66.666667%
        }

        .push-sm-9 {
            left: 75%
        }

        .push-sm-10 {
            left: 83.333333%
        }

        .push-sm-11 {
            left: 91.666667%
        }

        .push-sm-12 {
            left: 100%
        }

        .offset-sm-0 {
            margin-left: 0
        }

        .offset-sm-1 {
            margin-left: 8.333333%
        }

        .offset-sm-2 {
            margin-left: 16.666667%
        }

        .offset-sm-3 {
            margin-left: 25%
        }

        .offset-sm-4 {
            margin-left: 33.333333%
        }

        .offset-sm-5 {
            margin-left: 41.666667%
        }

        .offset-sm-6 {
            margin-left: 50%
        }

        .offset-sm-7 {
            margin-left: 58.333333%
        }

        .offset-sm-8 {
            margin-left: 66.666667%
        }

        .offset-sm-9 {
            margin-left: 75%
        }

        .offset-sm-10 {
            margin-left: 83.333333%
        }

        .offset-sm-11 {
            margin-left: 91.666667%
        }
    }

    @media (min-width: 768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-md-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto
        }

        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .pull-md-0 {
            right: auto
        }

        .pull-md-1 {
            right: 8.333333%
        }





        .push-lg-12 {
            left: 100%
        }

        .offset-lg-0 {
            margin-left: 0
        }

        .offset-lg-1 {
            margin-left: 8.333333%
        }

        .offset-lg-2 {
            margin-left: 16.666667%
        }

        .offset-lg-3 {
            margin-left: 25%
        }

        .offset-lg-4 {
            margin-left: 33.333333%
        }

        .offset-lg-5 {
            margin-left: 41.666667%
        }

        .offset-lg-6 {
            margin-left: 50%
        }

        .offset-lg-7 {
            margin-left: 58.333333%
        }

        .offset-lg-8 {
            margin-left: 66.666667%
        }

        .offset-lg-9 {
            margin-left: 75%
        }

        .offset-lg-10 {
            margin-left: 83.333333%
        }

        .offset-lg-11 {
            margin-left: 91.666667%
        }
    }

    @media (min-width: 1200px) {
        .col-xl {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-xl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto
        }

        .col-xl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-xl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-xl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-xl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-xl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-xl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-xl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-xl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-xl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-xl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-xl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-xl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .pull-xl-0 {
            right: auto
        }

        .pull-xl-1 {
            right: 8.333333%
        }

        .pull-xl-2 {
            right: 16.666667%
        }

        .pull-xl-3 {
            right: 25%
        }

        .pull-xl-4 {
            right: 33.333333%
        }

        .pull-xl-5 {
            right: 41.666667%
        }

        .pull-xl-6 {
            right: 50%
        }

        .pull-xl-7 {
            right: 58.333333%
        }

        .pull-xl-8 {
            right: 66.666667%
        }

        .pull-xl-9 {
            right: 75%
        }

        .pull-xl-10 {
            right: 83.333333%
        }

        .pull-xl-11 {
            right: 91.666667%
        }

        .pull-xl-12 {
            right: 100%
        }

        .push-xl-0 {
            left: auto
        }

        .push-xl-1 {
            left: 8.333333%
        }

        .push-xl-2 {
            left: 16.666667%
        }

        .push-xl-3 {
            left: 25%
        }

        .push-xl-4 {
            left: 33.333333%
        }

        .push-xl-5 {
            left: 41.666667%
        }

        .push-xl-6 {
            left: 50%
        }

        .push-xl-7 {
            left: 58.333333%
        }

        .push-xl-8 {
            left: 66.666667%
        }

        .push-xl-9 {
            left: 75%
        }

        .push-xl-10 {
            left: 83.333333%
        }

        .push-xl-11 {
            left: 91.666667%
        }

        .push-xl-12 {
            left: 100%
        }

        .offset-xl-0 {
            margin-left: 0
        }

        .offset-xl-1 {
            margin-left: 8.333333%
        }

        .offset-xl-2 {
            margin-left: 16.666667%
        }

        .offset-xl-3 {
            margin-left: 25%
        }

        .offset-xl-4 {
            margin-left: 33.333333%
        }

        .offset-xl-5 {
            margin-left: 41.666667%
        }

        .offset-xl-6 {
            margin-left: 50%
        }

        .offset-xl-7 {
            margin-left: 58.333333%
        }

        .offset-xl-8 {
            margin-left: 66.666667%
        }

        .offset-xl-9 {
            margin-left: 75%
        }

        .offset-xl-10 {
            margin-left: 83.333333%
        }

        .offset-xl-11 {
            margin-left: 91.666667%
        }
    }

    .ie-warning {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999999;
        background: #000;
        width: 100%;
        height: 100%;
        text-align: center;
        color: #fff;
        font-family: courier new, Courier, monospace;
        padding: 50px 0
    }

    .ie-warning p {
        font-size: 17px
    }

    .ie-warning .iew-container {
        min-width: 1024px;
        width: 100%;
        height: 200px;
        background: #fff;
        margin: 50px 0
    }

    .ie-warning .iew-download {
        list-style: none;
        padding: 30px 0;
        margin: 0 auto;
        width: 720px
    }

    .ie-warning .iew-download > li {
        float: left;
        vertical-align: top
    }

    .ie-warning .iew-download > li > a {
        display: block;
        color: #000;
        width: 140px;
        font-size: 15px;
        padding: 15px 0
    }

    .ie-warning .iew-download > li > a > div {
        margin-top: 10px
    }

    .ie-warning .iew-download > li > a:hover {
        background-color: #eee
    }

    .image-cropper-container {
        margin-top: 10px
    }

    .alpaca-field img {
        width: 250px
    }

    .arrow_box {
        z-index: 0
    }

    @media only screen and (max-width: 575px) {
        .sticky-card {
            margin-bottom: 250px
        }
    }

    .j-pro .j-label {
        font-weight: 600
    }



    .theme-loader .ball-scale {
        left: 50%;
        top: 50%;
        position: absolute;
        height: 50px;
        width: 50px;
        margin: -25px 0 0 -25px
    }

    .theme-loader .ball-scale .contain {
        height: 100%;
        width: 100%
    }

    .theme-loader .ball-scale .contain .ring {
        display: none
    }



    .theme-loader .ball-scale .contain .ring:first-child .frame {
        height: 100%;
        width: 100%;
        border-radius: 50%;
        border: 3px solid transparent;
        border-left-color: #0ac282;
        border-right-color: #0ac282;
        -webkit-animation: round-rotate 1.5s ease-in-out infinite;
        animation: round-rotate 1.5s ease-in-out infinite
    }

    @-webkit-keyframes round-rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes round-rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }



    .generic-image-body li {
        padding: 0 20px;
        display: inline-block
    }

    .generic-image-body code {
        display: block
    }

    .generic-image-body img {
        display: block;
        margin: 10px auto 0
    }

    .p-0 {
        padding: 0
    }

    .p-5 {
        padding: 5px
    }

    .p-10 {
        padding: 10px
    }

    .p-15 {
        padding: 15px
    }

    .p-20 {
        padding: 20px
    }

    .p-25 {
        padding: 25px
    }

    .p-30 {
        padding: 30px
    }

    .p-35 {
        padding: 35px
    }

    .p-40 {
        padding: 40px
    }

    .p-45 {
        padding: 45px
    }

    .p-50 {
        padding: 50px
    }

    .p-t-0 {
        padding-top: 0 !important
    }

    .p-t-5 {
        padding-top: 5px !important
    }

    .p-t-10 {
        padding-top: 10px !important
    }

    .p-t-15 {
        padding-top: 15px !important
    }

    .p-t-20 {
        padding-top: 20px !important
    }

    .p-t-25 {
        padding-top: 25px !important
    }

    .p-t-30 {
        padding-top: 30px !important
    }

    .p-t-35 {
        padding-top: 35px !important
    }

    .p-t-40 {
        padding-top: 40px !important
    }

    .p-t-45 {
        padding-top: 45px !important
    }

    .p-t-50 {
        padding-top: 50px !important
    }

    .p-b-0 {
        padding-bottom: 0 !important
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .p-b-10 {
        padding-bottom: 10px !important
    }

    .p-b-15 {
        padding-bottom: 15px !important
    }

    .p-b-20 {
        padding-bottom: 20px !important
    }

    .p-b-25 {
        padding-bottom: 25px !important
    }

    .p-b-30 {
        padding-bottom: 30px !important
    }

    .p-b-35 {
        padding-bottom: 35px !important
    }

    .p-b-40 {
        padding-bottom: 40px !important
    }

    .p-b-45 {
        padding-bottom: 45px !important
    }

    .p-b-50 {
        padding-bottom: 50px !important
    }

    .p-l-0 {
        padding-left: 0
    }

    .p-l-5 {
        padding-left: 5px
    }

    .p-l-10 {
        padding-left: 10px
    }

    .p-l-15 {
        padding-left: 15px
    }

    .p-l-20 {
        padding-left: 20px
    }

    .p-l-25 {
        padding-left: 25px
    }

    .p-l-30 {
        padding-left: 30px
    }

    .p-l-35 {
        padding-left: 35px
    }

    .p-l-40 {
        padding-left: 40px
    }

    .p-l-45 {
        padding-left: 45px
    }

    .p-l-50 {
        padding-left: 50px
    }

    .p-r-0 {
        padding-right: 0
    }

    .p-r-5 {
        padding-right: 5px
    }

    .p-r-10 {
        padding-right: 10px
    }

    .p-r-15 {
        padding-right: 15px
    }

    .p-r-20 {
        padding-right: 20px
    }

    .p-r-25 {
        padding-right: 25px
    }

    .p-r-30 {
        padding-right: 30px
    }

    .p-r-35 {
        padding-right: 35px
    }

    .p-r-40 {
        padding-right: 40px
    }

    .p-r-45 {
        padding-right: 45px
    }

    .p-r-50 {
        padding-right: 50px
    }

    .m-0 {
        margin: 0
    }

    .m-5 {
        margin: 5px
    }

    .m-10 {
        margin: 10px
    }

    .m-15 {
        margin: 15px
    }

    .m-20 {
        margin: 20px
    }

    .m-25 {
        margin: 25px
    }

    .m-30 {
        margin: 30px
    }

    .m-35 {
        margin: 35px
    }

    .m-40 {
        margin: 40px
    }

    .m-45 {
        margin: 45px
    }

    .m-50 {
        margin: 50px
    }

    .m-t-0 {
        margin-top: 0
    }

    .m-t-5 {
        margin-top: 5px
    }

    .m-t-10 {
        margin-top: 10px
    }

    .m-t-15 {
        margin-top: 15px
    }

    .m-t-20 {
        margin-top: 20px
    }

    .m-t-25 {
        margin-top: 25px
    }

    .m-t-30 {
        margin-top: 30px
    }

    .m-t-35 {
        margin-top: 35px
    }

    .m-t-40 {
        margin-top: 40px
    }

    .m-t-45 {
        margin-top: 45px
    }

    .m-t-50 {
        margin-top: 50px
    }

    .m-b-0 {
        margin-bottom: 0
    }

    .m-b-5 {
        margin-bottom: 5px
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .m-b-15 {
        margin-bottom: 15px
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .m-b-25 {
        margin-bottom: 25px
    }

    .m-b-30 {
        margin-bottom: 30px
    }

    .m-b-35 {
        margin-bottom: 35px
    }

    .m-b-40 {
        margin-bottom: 40px
    }

    .m-b-45 {
        margin-bottom: 45px
    }

    .m-b-50 {
        margin-bottom: 50px
    }

    .m-l-0 {
        margin-left: 0
    }

    .m-l-5 {
        margin-left: 5px
    }

    .m-l-10 {
        margin-left: 10px
    }

    .m-l-15 {
        margin-left: 15px
    }

    .m-l-20 {
        margin-left: 20px
    }

    .m-l-25 {
        margin-left: 25px
    }

    .m-l-30 {
        margin-left: 30px
    }

    .m-l-35 {
        margin-left: 35px
    }

    .m-l-40 {
        margin-left: 40px
    }

    .m-l-45 {
        margin-left: 45px
    }

    .m-l-50 {
        margin-left: 50px
    }

    .m-r-0 {
        margin-right: 0
    }

    .m-r-5 {
        margin-right: 5px
    }

    .m-r-10 {
        margin-right: 10px
    }

    .m-r-15 {
        margin-right: 15px
    }

    .m-r-20 {
        margin-right: 20px
    }

    .m-r-25 {
        margin-right: 25px
    }

    .m-r-30 {
        margin-right: 30px
    }

    .m-r-35 {
        margin-right: 35px
    }

    .m-r-40 {
        margin-right: 40px
    }

    .m-r-45 {
        margin-right: 45px
    }

    .m-r-50 {
        margin-right: 50px
    }

    .d-none {
        display: none
    }

    .d-inline-block {
        display: inline-block
    }



    .b-radius-0 {
        border-radius: 0 !important
    }

    .b-radius-5 {
        border-radius: 5px !important
    }

    .b-radius-10 {
        border-radius: 10px !important
    }

    .f-10 {
        font-size: 10px
    }

    .f-12 {
        font-size: 12px
    }

    .f-14 {
        font-size: 14px
    }

    .f-16 {
        font-size: 16px
    }

    .f-18 {
        font-size: 18px
    }

    .f-20 {
        font-size: 20px
    }

    .f-22 {
        font-size: 22px
    }

    .f-24 {
        font-size: 24px
    }

    .f-26 {
        font-size: 26px
    }

    .f-28 {
        font-size: 28px
    }

    .f-30 {
        font-size: 30px
    }

    .f-32 {
        font-size: 32px
    }

    .f-34 {
        font-size: 34px
    }

    .f-36 {
        font-size: 36px
    }

    .f-38 {
        font-size: 38px
    }

    .f-40 {
        font-size: 40px
    }

    .f-42 {
        font-size: 42px
    }

    .f-44 {
        font-size: 44px
    }

    .f-46 {
        font-size: 46px
    }

    .f-48 {
        font-size: 48px
    }

    .f-50 {
        font-size: 50px
    }

    .f-52 {
        font-size: 52px
    }

    .f-54 {
        font-size: 54px
    }

    .f-56 {
        font-size: 56px
    }

    .f-58 {
        font-size: 58px
    }

    .f-60 {
        font-size: 60px
    }

    .f-62 {
        font-size: 62px
    }

    .f-64 {
        font-size: 64px
    }

    .f-66 {
        font-size: 66px
    }

    .f-68 {
        font-size: 68px
    }

    .f-70 {
        font-size: 70px
    }

    .f-72 {
        font-size: 72px
    }

    .f-74 {
        font-size: 74px
    }

    .f-76 {
        font-size: 76px
    }

    .f-78 {
        font-size: 78px
    }

    .f-80 {
        font-size: 80px
    }

    .f-w-100 {
        font-weight: 100
    }

    .f-w-300 {
        font-weight: 300
    }

    .f-w-400 {
        font-weight: 400
    }

    .f-w-600 {
        font-weight: 600
    }

    .f-w-700 {
        font-weight: 700
    }

    .f-w-900 {
        font-weight: 600
    }

    .f-s-normal {
        font-style: normal
    }

    .f-s-italic {
        font-style: italic
    }

    .f-s-oblique {
        font-style: oblique
    }

    .f-s-initial {
        font-style: initial
    }

    .f-s-inherit {
        font-style: inherit
    }

    .text-center {
        text-align: center
    }

    .text-left {
        text-align: left
    }

    .text-right {
        text-align: right
    }

    .text-capitalize {
        text-transform: capitalize
    }

    .text-uppercase {
        text-transform: uppercase
    }

    .text-lowercase {
        text-transform: lowercase
    }

    .text-overline {
        text-decoration: overline
    }

    .text-line-through {
        text-decoration: line-through
    }

    .text-underline {
        text-decoration: underline
    }

    .baseline {
        vertical-align: baseline
    }

    .sub {
        vertical-align: sub
    }

    .super {
        vertical-align: super
    }

    .top {
        vertical-align: top
    }

    .text-top {
        vertical-align: text-top
    }

    .middle {
        vertical-align: middle
    }

    .bottom {
        vertical-align: bottom
    }

    .text-bottom {
        vertical-align: text-bottom
    }

    .initial {
        vertical-align: initial
    }

    .inherit {
        vertical-align: inherit
    }

    .pos-static {
        position: static
    }

    .pos-absolute {
        position: absolute
    }

    .pos-fixed {
        position: fixed
    }

    .pos-relative {
        position: relative
    }

    .pos-initial {
        position: initial
    }

    .pos-inherit {
        position: inherit
    }

    .f-left {
        float: left
    }

    .f-right {
        float: right
    }



    .bg-color-box span {
        color: #fff
    }



    .color-danger {
        background-color: #fe5d70
    }

    .color-success {
        background-color: #0ac282
    }

    .color-inverse {
        background-color: #404e67
    }

    .color-info {
        background-color: #2dcee3
    }

    .loader-primary {
        background-color: #01a9ac !important
    }

    .loader-warning {
        background-color: #fe9365 !important
    }

    .loader-default {
        background-color: #e0e0e0 !important
    }

    .loader-danger {
        background-color: #fe5d70 !important
    }

    .loader-success {
        background-color: #0ac282 !important
    }

    .loader-inverse {
        background-color: #404e67 !important
    }

    .loader-info {
        background-color: #2dcee3 !important
    }

    .nestable-primary {
        background-color: #01a9ac !important;
        border-color: #01a9ac;
        color: #fff !important
    }

    .nestable-warning {
        background-color: #fe9365 !important;
        border-color: #fe9365;
        color: #fff !important
    }

    .nestable-default {
        background-color: #e0e0e0 !important;
        border-color: #e0e0e0;
        color: #fff !important
    }

    .nestable-danger {
        background-color: #fe5d70 !important;
        border-color: #fe5d70;
        color: #fff !important
    }

    .nestable-success {
        background-color: #0ac282 !important;
        border-color: #0ac282;
        color: #fff !important
    }

    .nestable-inverse {
        background-color: #404e67 !important;
        border-color: #404e67;
        color: #fff !important
    }

    .nestable-info {
        background-color: #2dcee3 !important;
        border-color: #2dcee3;
        color: #fff !important
    }

    table thead .border-bottom-primary th, table tbody .border-bottom-primary th, table tbody .border-bottom-primary td {
        border-bottom: 1px solid #01a9ac
    }


    .table-styling .table-warning, .table-styling.table-warning {
        background-color: #fe9365;
        color: #fff;
        border: 3px solid #fe9365
    }

    .table-styling .table-warning thead, .table-styling.table-warning thead {
        background-color: #fe6f32;
        border: 3px solid #fe6f32
    }

    .table-styling .table-default, .table-styling.table-default {
        background-color: #e0e0e0;
        color: #fff;
        border: 3px solid #e0e0e0
    }

    .table-styling .table-default thead, .table-styling.table-default thead {
        background-color: #c7c7c7;
        border: 3px solid #c7c7c7
    }

    .table-styling .table-danger, .table-styling.table-danger {
        background-color: #fe5d70;
        color: #fff;
        border: 3px solid #fe5d70
    }

    .table-styling .table-danger thead, .table-styling.table-danger thead {
        background-color: #fe2a43;
        border: 3px solid #fe2a43
    }

    .table-styling .table-success, .table-styling.table-success {
        background-color: #0ac282;
        color: #fff;
        border: 3px solid #0ac282
    }

    .table-styling .table-success thead, .table-styling.table-success thead {
        background-color: #089262;
        border: 3px solid #089262
    }

    .table-styling .table-inverse, .table-styling.table-inverse {
        background-color: #404e67;
        color: #fff;
        border: 3px solid #404e67
    }

    .table-styling .table-inverse thead, .table-styling.table-inverse thead {
        background-color: #2c3648;
        border: 3px solid #2c3648
    }

    .table-styling .table-info, .table-styling.table-info {
        background-color: #2dcee3;
        color: #fff;
        border: 3px solid #2dcee3
    }

    .table-styling .table-info thead, .table-styling.table-info thead {
        background-color: #1ab0c3;
        border: 3px solid #1ab0c3
    }

    .toolbar-primary .tool-item {
        background: #01a9ac !important
    }

    .toolbar-primary .tool-item.selected, .toolbar-primary .tool-item:hover {
        background: #017779 !important
    }

    .toolbar-primary.tool-top .arrow {
        border-color: #01a9ac transparent transparent
    }

    .toolbar-primary.tool-bottom .arrow {
        border-color: transparent transparent #01a9ac
    }

    .toolbar-primary.tool-left .arrow {
        border-color: transparent transparent transparent #01a9ac
    }

    .toolbar-primary.tool-right .arrow {
        border-color: transparent #01a9ac transparent transparent
    }

    .btn-toolbar-primary.pressed {
        background-color: #01a9ac
    }

    .toolbar-warning .tool-item {
        background: #fe9365 !important
    }

    .toolbar-warning .tool-item.selected, .toolbar-warning .tool-item:hover {
        background: #fe6f32 !important
    }

    .toolbar-warning.tool-top .arrow {
        border-color: #fe9365 transparent transparent
    }

    .toolbar-warning.tool-bottom .arrow {
        border-color: transparent transparent #fe9365
    }

    .toolbar-warning.tool-left .arrow {
        border-color: transparent transparent transparent #fe9365
    }

    .toolbar-warning.tool-right .arrow {
        border-color: transparent #fe9365 transparent transparent
    }

    .btn-toolbar-warning.pressed {
        background-color: #fe9365
    }

    .toolbar-light .tool-item {
        background: #e0e0e0 !important
    }

    .toolbar-light .tool-item.selected, .toolbar-light .tool-item:hover {
        background: #c7c7c7 !important
    }

    .toolbar-light.tool-top .arrow {
        border-color: #e0e0e0 transparent transparent
    }

    .toolbar-light.tool-bottom .arrow {
        border-color: transparent transparent #e0e0e0
    }

    .toolbar-light.tool-left .arrow {
        border-color: transparent transparent transparent #e0e0e0
    }

    .toolbar-light.tool-right .arrow {
        border-color: transparent #e0e0e0 transparent transparent
    }

    .btn-toolbar-light.pressed {
        background-color: #e0e0e0
    }

    .toolbar-danger .tool-item {
        background: #fe5d70 !important
    }

    .toolbar-danger .tool-item.selected, .toolbar-danger .tool-item:hover {
        background: #fe2a43 !important
    }

    .toolbar-danger.tool-top .arrow {
        border-color: #fe5d70 transparent transparent
    }

    .toolbar-danger.tool-bottom .arrow {
        border-color: transparent transparent #fe5d70
    }

    .toolbar-danger.tool-left .arrow {
        border-color: transparent transparent transparent #fe5d70
    }

    .toolbar-danger.tool-right .arrow {
        border-color: transparent #fe5d70 transparent transparent
    }

    .btn-toolbar-danger.pressed {
        background-color: #fe5d70
    }

    .toolbar-success .tool-item {
        background: #0ac282 !important
    }

    .toolbar-success .tool-item.selected, .toolbar-success .tool-item:hover {
        background: #089262 !important
    }

    .toolbar-success.tool-top .arrow {
        border-color: #0ac282 transparent transparent
    }

    .toolbar-success.tool-bottom .arrow {
        border-color: transparent transparent #0ac282
    }

    .toolbar-success.tool-left .arrow {
        border-color: transparent transparent transparent #0ac282
    }

    .toolbar-success.tool-right .arrow {
        border-color: transparent #0ac282 transparent transparent
    }

    .btn-toolbar-success.pressed {
        background-color: #0ac282
    }

    .toolbar-dark .tool-item {
        background: #404e67 !important
    }

    .toolbar-dark .tool-item.selected, .toolbar-dark .tool-item:hover {
        background: #2c3648 !important
    }

    .toolbar-dark.tool-top .arrow {
        border-color: #404e67 transparent transparent
    }

    .toolbar-dark.tool-bottom .arrow {
        border-color: transparent transparent #404e67
    }

    .toolbar-dark.tool-left .arrow {
        border-color: transparent transparent transparent #404e67
    }

    .toolbar-dark.tool-right .arrow {
        border-color: transparent #404e67 transparent transparent
    }

    .btn-toolbar-dark.pressed {
        background-color: #404e67
    }

    .toolbar-info .tool-item {
        background: #2dcee3 !important
    }

    .toolbar-info .tool-item.selected, .toolbar-info .tool-item:hover {
        background: #1ab0c3 !important
    }

    .toolbar-info.tool-top .arrow {
        border-color: #2dcee3 transparent transparent
    }

    .toolbar-info.tool-bottom .arrow {
        border-color: transparent transparent #2dcee3
    }

    .toolbar-info.tool-left .arrow {
        border-color: transparent transparent transparent #2dcee3
    }

    .toolbar-info.tool-right .arrow {
        border-color: transparent #2dcee3 transparent transparent
    }

    .btn-toolbar-info.pressed {
        background-color: #2dcee3
    }

    .card-border-primary {
        border-top: 4px solid #01a9ac
    }

    .card-border-warning {
        border-top: 4px solid #fe9365
    }

    .card-border-default {
        border-top: 4px solid #e0e0e0
    }

    .card-border-danger {
        border-top: 4px solid #fe5d70
    }

    .card-border-success {
        border-top: 4px solid #0ac282
    }

    .card-border-inverse {
        border-top: 4px solid #404e67
    }

    .card-border-info {
        border-top: 4px solid #2dcee3
    }

    .panels-wells .panel-primary {
        border-color: #01a9ac
    }

    .panels-wells .panel-warning {
        border-color: #fe9365
    }

    .panels-wells .panel-default {
        border-color: #e0e0e0
    }

    .panels-wells .panel-danger {
        border-color: #fe5d70
    }

    .panels-wells .panel-success {
        border-color: #0ac282
    }

    .panels-wells .panel-inverse {
        border-color: #404e67
    }

    .panels-wells .panel-info {
        border-color: #2dcee3
    }

    .b-t-primary {
        border-top: 1px solid #01a9ac
    }

    .b-b-primary {
        border-bottom: 1px solid #01a9ac
    }

    .b-l-primary {
        border-left: 1px solid #01a9ac
    }

    .b-r-primary {
        border-right: 1px solid #01a9ac
    }

    .b-t-warning {
        border-top: 1px solid #fe9365
    }

    .b-b-warning {
        border-bottom: 1px solid #fe9365
    }

    .b-l-warning {
        border-left: 1px solid #fe9365
    }

    .b-r-warning {
        border-right: 1px solid #fe9365
    }

    .b-t-default {
        border-top: 1px solid #e0e0e0
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .b-l-default {
        border-left: 1px solid #e0e0e0
    }

    .b-r-default {
        border-right: 1px solid #e0e0e0
    }

    .b-t-danger {
        border-top: 1px solid #fe5d70
    }

    .b-b-danger {
        border-bottom: 1px solid #fe5d70
    }

    .b-l-danger {
        border-left: 1px solid #fe5d70
    }

    .b-r-danger {
        border-right: 1px solid #fe5d70
    }

    .b-t-success {
        border-top: 1px solid #0ac282
    }

    .b-b-success {
        border-bottom: 1px solid #0ac282
    }

    .b-l-success {
        border-left: 1px solid #0ac282
    }

    .b-r-success {
        border-right: 1px solid #0ac282
    }

    .b-t-inverse {
        border-top: 1px solid #404e67
    }

    .b-b-inverse {
        border-bottom: 1px solid #404e67
    }

    .b-l-inverse {
        border-left: 1px solid #404e67
    }

    .b-r-inverse {
        border-right: 1px solid #404e67
    }

    .b-t-info {
        border-top: 1px solid #2dcee3
    }

    .b-b-info {
        border-bottom: 1px solid #2dcee3
    }

    .b-l-info {
        border-left: 1px solid #2dcee3
    }

    .b-r-info {
        border-right: 1px solid #2dcee3
    }

    .b-t-theme {
        border-top: 1px solid #ddd
    }

    .b-b-theme {
        border-bottom: 1px solid #ddd
    }

    .b-l-theme {
        border-left: 1px solid #ddd
    }

    .b-r-theme {
        border-right: 1px solid #ddd
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(1) > a > .pcoded-micon {
        background-color: #2196f3
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(2) > a > .pcoded-micon {
        background-color: #ff7588
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(3) > a > .pcoded-micon {
        background-color: #16d39a
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(4) > a > .pcoded-micon {
        background-color: #ffb64d
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(5) > a > .pcoded-micon {
        background-color: #ab7967
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(6) > a > .pcoded-micon {
        background-color: #39adb5
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(7) > a > .pcoded-micon {
        background-color: #7c4dff
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(8) > a > .pcoded-micon {
        background-color: #ff5370
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(9) > a > .pcoded-micon {
        background-color: #2196f3
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(10) > a > .pcoded-micon {
        background-color: #ff7588
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(11) > a > .pcoded-micon {
        background-color: #16d39a
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(12) > a > .pcoded-micon {
        background-color: #ffb64d
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(13) > a > .pcoded-micon {
        background-color: #ab7967
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(14) > a > .pcoded-micon {
        background-color: #39adb5
    }

    .pcoded .pcoded-item.pcoded-left-item > li:nth-child(15) > a > .pcoded-micon {
        background-color: #7c4dff
    }


    .checkbox-danger input[type=checkbox]:checked + label::before {
        background-color: #fe5d70
    }

    .checkbox-success input[type=checkbox]:checked + label::before {
        background-color: #0ac282
    }

    .checkbox-inverse input[type=checkbox]:checked + label::before {
        background-color: #404e67
    }

    .checkbox-info input[type=checkbox]:checked + label::before {
        background-color: #2dcee3
    }

    .bootstrap-tagsinput {
        border: 1px solid #01a9ac;
        line-height: 30px;
        border-radius: 2px
    }

    .bootstrap-tagsinput .tag {
        padding: 6px;
        border-radius: 2px
    }

    .select2-container--default:focus {
        border-color: #01a9ac
    }

    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #fff transparent
    }

    .select2-container--default .select2-search__field:focus {
        border: 1px solid #01a9ac
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #01a9ac
    }

    .select2-container--default .select2-selection--multiple {
        padding: 3px
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #01a9ac;
        border: 1px solid #01a9ac;
        padding: 5px 15px;
        color: #fff
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice span {
        color: #fff
    }

    .select2-container--default .select2-selection--multiple .select2-search__field {
        border: none
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border: 1px solid #01a9ac
    }

    .select2-container--default .select2-selection--single {
        color: #fff;
        height: auto
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        background-color: #01a9ac;
        color: #fff;
        padding: 8px 30px 8px 20px
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 10px;
        right: 15px
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #fff transparent transparent transparent
    }

    .ms-container .ms-list.ms-focus {
        border-color: #01a9ac;
        -webkit-box-shadow: inset 0 1px 1px rgba(26, 188, 156, .49), 0 0 8px rgba(26, 188, 156, .5);
        box-shadow: inset 0 1px 1px rgba(26, 188, 156, .49), 0 0 8px rgba(26, 188, 156, .5)
    }

    .ms-container .ms-selectable li.ms-hover, .ms-container .ms-selection li.ms-hover {
        background-color: #01a9ac
    }

    .ms-selectable .custom-header, .ms-selection .custom-header {
        background-color: #01a9ac;
        color: #fff;
        text-align: center
    }

    .ms-list {
        display: block !important
    }

    .ms-list li {
        width: 100%
    }

    .form-group .messages p {
        margin-bottom: 0;
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s
    }

    .form-group .popover-valid {
        position: absolute;
        right: 40px;
        top: 7px
    }

    .wizard > .steps .current a {
        background: #01a9ac;
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s;
        cursor: pointer;
        border-radius: 2px;
        outline: 1px solid #fff;
        outline-offset: -7px
    }

    .wizard > .steps .current a:hover {
        background: #01c2c5;
        outline-offset: 0
    }

    #design-wizard .steps li {
        position: relative;
        z-index: 99;
        margin-bottom: 20px
    }

    #design-wizard .steps li:after {
        content: "";
        position: absolute;
        height: 2px;
        background: #01a9ac;
        width: 100%;
        top: 30px;
        z-index: -1
    }

    #design-wizard .steps li a {
        width: 20%;
        margin: 0 auto;
        text-align: center;
        border-radius: 2px
    }

    .wizard > .steps .done a {
        background: #e0e0e0
    }

    .card .card-block .wizard-form .steps ul {
        display: block
    }

    .card .card-block .wizard-form li {
        margin-right: 0
    }

    .wizard > .content {
        border: 1px solid #ccc;
        border-radius: 2px;
        background: #fff
    }

    .label {
        border-radius: 4px;
        font-size: 75%;
        padding: 4px 7px;
        margin-right: 5px;
        font-weight: 400;
        color: #fff !important
    }

    .label-main {
        display: inline-block;
        vertical-align: middle;
        margin: 8px 5px
    }

    .badge {
        border-radius: 10px;
        padding: 3px 7px
    }

    .badge-top-left {
        margin-right: -10px;
        right: 100%;
        top: -3px
    }

    .badge-top-right {
        margin-left: -10px;
        top: -3px
    }

    .badge-bottom-left {
        margin-left: -33px;
        bottom: -12px;
        right: 97%
    }

    .badge-bottom-right {
        margin-left: -10px;
        bottom: -12px
    }

    .label.label-lg {
        padding: 8px 21px
    }

    .label.label-md {
        padding: 6px 14px
    }

    .badge-lg {
        padding: 5px 9px;
        font-size: 14px
    }

    .badge-md {
        padding: 4px 8px;
        font-size: 14px
    }

    span.badge {
        display: inline-block !important
    }

    .label-default {
        background-color: #e0e0e0 !important;
        border-color: #e0e0e0;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #fff
    }

    .label-inverse-default {
        border: 1px solid;
        border-color: #e0e0e0;
        color: #e0e0e0 !important
    }

    .label-inverse-primary {
        border: 1px solid;
        border-color: #01a9ac;
        color: #01a9ac !important
    }

    .label-inverse-success {
        border: 1px solid;
        border-color: #0ac282;
        color: #0ac282 !important
    }

    .label-inverse-warning {
        border: 1px solid;
        border-color: #fe9365;
        color: #fe9365 !important
    }

    .label-inverse-danger {
        border: 1px solid;
        border-color: #fe5d70;
        color: #fe5d70 !important
    }

    .label-inverse-info {
        border: 1px solid;
        border-color: #2dcee3;
        color: #2dcee3 !important
    }

    .label-inverse-info-border {
        border: 1px solid;
        border-color: #404e67;
        color: #404e67 !important
    }

    .badge-inverse-default {
        border: 1px solid;
        border-color: #e0e0e0;
        color: #e0e0e0 !important
    }

    .badge-inverse-primary {
        border: 1px solid;
        border-color: #01a9ac;
        color: #01a9ac !important
    }

    .badge-inverse-success {
        border: 1px solid;
        border-color: #0ac282;
        color: #0ac282 !important
    }

    .badge-inverse-warning {
        border: 1px solid;
        border-color: #fe9365;
        color: #fe9365 !important
    }

    .badge-inverse-danger {
        border: 1px solid;
        border-color: #fe5d70;
        color: #fe5d70 !important
    }

    .badge-inverse-info {
        border: 1px solid;
        border-color: #404e67;
        color: #404e67 !important
    }

    .label-icon {
        position: relative
    }

    .label-icon label {
        position: absolute
    }

    .icofont.icofont-envelope {
        font-size: 20px
    }

    .data-table-main.icon-list-demo [class*=col-] {
        margin-bottom: 10px
    }

    .data-table-main.icon-svg-demo [class*=col-] {
        margin-bottom: 10px
    }

    .icon-list-demo i {
        border: 1px solid #eceeef;
        border-radius: 3px;
        color: rgba(43, 61, 81, .7);
        display: inline-block;
        font-size: 24px;
        height: 50px;
        line-height: 50px;
        margin: 0 12px 0 0;
        text-align: center;
        vertical-align: middle;
        width: 50px
    }

    .icon-list-demo div {
        cursor: pointer;
        white-space: nowrap;
        margin-bottom: 10px
    }

    .icon-list-demo i:hover {
        color: #64b0f2
    }

    .flags .f-item {
        padding: 12px;
        border: 1px solid #ddd;
        margin-right: 15px;
        display: inline-block
    }

    .data-table-main.flags [class*=col-] {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 10px
    }

    .content-flag label {
        margin-bottom: 0;
        cursor: pointer
    }

    .content-flag .txt-ellipsis {
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 120px;
        overflow: hidden
    }

    .outer-ellipsis {
        overflow: hidden;
        text-overflow: ellipsis;
        vertical-align: middle;
        white-space: nowrap;
        width: 250px
    }

    label.txt-ellipsis {
        overflow: hidden;
        text-overflow: ellipsis;
        vertical-align: middle;
        white-space: nowrap;
        width: 135px
    }

    .flags .f-item .name, .flags .f-item .capital {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding-bottom: 0
    }

    .flags .f-item .code {
        display: block;
        font-size: 90%;
        color: #999;
        padding-bottom: 0
    }

    .bg-pic {
        background-color: rgba(0, 0, 0, .5);
        background-blend-mode: overlay
    }

    .j-pro {
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid rgba(0, 0, 0, .15)
    }

    .j-pro .j-header {
        background-color: #01a9ac;
        border-top: 1px solid #01a9ac;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .j-pro .j-icon-right {
        border-left: 1px solid rgba(0, 0, 0, .32)
    }

    .j-pro .j-icon-left {
        border-right: 1px solid rgba(0, 0, 0, .32)
    }

    .j-pro .j-footer {
        background-color: #fff;
        border-top: 1px dashed #01a9ac;
        padding: 20px 25px;
        position: inherit
    }

    .j-pro .j-footer button {
        margin-bottom: 0;
        float: right
    }

    .j-pro .j-divider-text span {
        color: #222
    }

    .j-pro .btn-primary.disabled, .j-pro .sweet-alert button.disabled.confirm, .sweet-alert .j-pro button.disabled.confirm, .j-pro .wizard > .actions a.disabled, .wizard > .actions .j-pro a.disabled, .j-pro .btn-primary:disabled, .j-pro .sweet-alert button.confirm:disabled, .sweet-alert .j-pro button.confirm:disabled, .j-pro .wizard > .actions a:disabled, .wizard > .actions .j-pro a:disabled {
        background-color: #0ac282;
        border-color: #0ac282
    }

    .j-pro input[type=text], .j-pro input[type=password], .j-pro input[type=email], .j-pro input[type=search], .j-pro input[type=url], .j-pro textarea, .j-pro select, .j-forms input[type=text], .j-forms input[type=password], .j-forms input[type=email], .j-forms input[type=search], .j-forms input[type=url], .j-forms textarea, .j-forms select {
        border: 1px solid rgba(0, 0, 0, .15)
    }

    .j-pro input[type=text]:hover, .j-pro input[type=password]:hover, .j-pro input[type=email]:hover, .j-pro input[type=search]:hover, .j-pro input[type=url]:hover, .j-pro textarea:hover, .j-pro select:hover, .j-pro input[type=text]:focus, .j-pro input[type=password]:focus, .j-pro input[type=email]:focus, .j-pro input[type=search]:focus, .j-pro input[type=url]:focus, .j-pro textarea:focus, .j-pro select:focus, .j-pro .j-file-button:hover + input, .j-forms input[type=text]:hover, .j-forms input[type=password]:hover, .j-forms input[type=email]:hover, .j-forms input[type=search]:hover, .j-forms input[type=url]:hover, .j-forms textarea:hover, .j-forms select:hover, .j-forms input[type=text]:focus, .j-forms input[type=password]:focus, .j-forms input[type=email]:focus, .j-forms input[type=search]:focus, .j-forms input[type=url]:focus, .j-forms textarea:focus, .j-forms select:focus {
        border: 1px solid #01a9ac
    }

    .j-pro .j-radio-toggle, .j-pro .j-checkbox-toggle, .j-pro .j-inline-group .j-radio-toggle, .j-pro .j-inline-group .j-checkbox-toggle {
        padding: 9px 0 18px
    }

    .j-pro .j-tooltip, .j-pro .j-tooltip-image {
        background-color: #01a9ac
    }

    .j-pro .j-tooltip:before, .j-pro .j-tooltip-image:before {
        border-color: #01a9ac transparent
    }

    .j-pro .j-primary-btn, .j-pro .j-file-button, .j-pro .j-secondary-btn, .j-pro .j-widget .j-addon-btn {
        background-color: #01a9ac
    }

    .j-pro .j-primary-btn:hover, .j-pro .j-file-button:hover, .j-pro .j-secondary-btn:hover, .j-pro .j-widget .j-addon-btn:hover {
        background-color: #01c2c5
    }

    .j-pro .j-ratings input + label:hover, .j-pro .j-ratings input + label:hover ~ label, .j-pro .j-ratings input:checked + label, .j-pro .j-ratings input:checked + label ~ label {
        color: #01a9ac
    }

    .j-unit .checkbox-fade {
        display: block;
        margin-top: 20px
    }

    .j-forms {
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid rgba(0, 0, 0, .15)
    }

    .j-forms button i {
        margin-right: 0
    }

    .j-forms .checkbox-fade {
        margin-top: 10px
    }

    .j-forms .checkbox-fade .disabled-view {
        opacity: .5;
        cursor: not-allowed
    }

    .j-forms .link {
        color: #01a9ac;
        border-bottom: none;
        text-transform: capitalize;
        margin-bottom: 15px
    }

    .j-forms .label {
        margin-bottom: 15px
    }

    .j-forms .btn-primary:disabled, .j-forms .sweet-alert button.confirm:disabled, .sweet-alert .j-forms button.confirm:disabled, .j-forms .wizard > .actions a:disabled, .wizard > .actions .j-forms a:disabled {
        background-color: #e0e0e0;
        border-color: #e0e0e0
    }

    .j-forms .radio-toggle, .j-forms .checkbox-toggle, .j-forms .inline-group .radio-toggle, .j-forms .inline-group .checkbox-toggle {
        padding: 9px 0 8px 0
    }

    .j-forms .header {
        background-color: #01a9ac;
        border-top: 1px solid #01a9ac;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .j-forms .divider-text span {
        color: #222
    }

    .j-forms .widget .addon, .j-forms .widget .addon-btn {
        background-color: #01a9ac;
        color: #fff
    }

    .j-forms .widget .addon:hover, .j-forms .widget .addon:focus, .j-forms .widget .addon-btn:hover, .j-forms .widget .addon-btn:focus {
        background-color: #01c2c5
    }

    .j-forms .widget .addon:hover i, .j-forms .widget .addon:focus i, .j-forms .widget .addon-btn:hover i, .j-forms .widget .addon-btn:focus i {
        color: #fff
    }

    .j-forms .widget .addon i, .j-forms .widget .addon-btn i {
        color: #fff
    }

    .j-forms .footer {
        background-color: #fff;
        border-top: 1px dashed #1abc9c;
        padding: 20px 25px;
        position: inherit
    }

    .j-forms .footer button {
        float: right;
        margin-bottom: 0
    }

    .j-forms .stepper .stepper-arrow {
        background-color: #01a9ac
    }

    .j-forms .stepper .stepper-arrow:hover {
        background-color: #01c2c5
    }

    .j-forms .stepper .stepper-arrow.up:after {
        border-bottom: 7px solid #fff
    }

    .j-forms .stepper .stepper-arrow.down:after {
        border-top: 7px solid #fff
    }

    .popup-menu {
        padding: 0
    }

    .popup-menu .popup-list {
        background-color: #2c3e50;
        border-radius: 0
    }

    .popup-menu .popup-list > ul > li {
        -webkit-transition: all ease-in .3s;
        transition: all ease-in .3s;
        color: #fff;
        border-left: none;
        cursor: pointer
    }

    .popup-menu .popup-list > ul > li:hover {
        background-color: #384c5f;
        color: #fff
    }

    .j-tabs-container .j-tabs-label, .j-tabs-container input[type=radio]:checked + .j-tabs-label {
        border-top: 4px solid #01a9ac
    }

    .pop-up-logo img {
        margin-top: 10px;
        margin-left: 80px
    }

    .popup-list-open .popup-list-wrapper {
        z-index: 99
    }

    .span4 label {
        color: #222 !important
    }

    .pop-up-wrapper {
        margin-left: 0 !important
    }

    @media only screen and (max-width: 480px) {
        .j-forms, .j-pro {
            border: none;
            background-color: #fff
        }

        .j-forms .footer, .j-forms .j-footer, .j-pro .footer, .j-pro .j-footer {
            border-top: none
        }

        .j-forms .footer button, .j-forms .j-footer button, .j-pro .footer button, .j-pro .j-footer button {
            margin: 5px
        }

        .j-forms .j-content, .j-pro .j-content {
            padding: 0
        }

        .j-forms .j-divider-text, .j-pro .j-divider-text {
            border-top: none
        }

        .j-forms .j-divider-text span, .j-pro .j-divider-text span {
            white-space: unset;
            background: 0 0;
            border: none
        }

        .j-forms .icon-right ~ input, .j-forms .j-forms .icon-right ~ textarea, .j-pro .icon-right ~ input, .j-pro .j-forms .icon-right ~ textarea {
            padding-right: 0
        }

        .j-wrapper {
            padding: 0;
            border: none;
            background-color: transparent
        }
    }

    .box-list div div div {
        margin-bottom: 20px
    }

    .box-list {
        padding-bottom: 0
    }

    .box-list p {
        margin-bottom: 0 !important
    }

    .z-depth-top-0 {
        -webkit-box-shadow: 0 -5px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 -5px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-top-1 {
        -webkit-box-shadow: 0 -7px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 -7px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-top-2 {
        -webkit-box-shadow: 0 -9px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 -9px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-top-3 {
        -webkit-box-shadow: 0 -10px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 -10px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-top-4 {
        -webkit-box-shadow: 0 -11px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 -11px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-top-5 {
        -webkit-box-shadow: 0 -12px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 -12px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-bottom-0 {
        -webkit-box-shadow: 0 5px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 5px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-bottom-1 {
        -webkit-box-shadow: 0 7px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 7px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-bottom-2 {
        -webkit-box-shadow: 0 9px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 9px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-bottom-3 {
        -webkit-box-shadow: 0 10px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 10px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-bottom-4 {
        -webkit-box-shadow: 0 11px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 11px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-bottom-5 {
        -webkit-box-shadow: 0 12px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 12px 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-left-0 {
        -webkit-box-shadow: -5px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: -5px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-left-1 {
        -webkit-box-shadow: -7px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: -7px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-left-2 {
        -webkit-box-shadow: -9px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: -9px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-left-3 {
        -webkit-box-shadow: -10px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: -10px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-left-4 {
        -webkit-box-shadow: -11px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: -11px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-left-5 {
        -webkit-box-shadow: -12px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: -12px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-right-0 {
        -webkit-box-shadow: 5px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 5px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-right-1 {
        -webkit-box-shadow: 7px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 7px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-right-2 {
        -webkit-box-shadow: 9px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 9px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-right-3 {
        -webkit-box-shadow: 10px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 10px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-right-4 {
        -webkit-box-shadow: 11px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 11px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-right-5 {
        -webkit-box-shadow: 12px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 12px 0 25px -5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-0 {
        -webkit-box-shadow: 0 0 25px 5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 0 25px 5px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-1 {
        -webkit-box-shadow: 0 0 25px 7px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 0 25px 7px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-2 {
        -webkit-box-shadow: 0 0 25px 9px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 0 25px 9px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-3 {
        -webkit-box-shadow: 0 0 25px 10px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 0 25px 10px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-4 {
        -webkit-box-shadow: 0 0 25px 11px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 0 25px 11px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    .z-depth-5 {
        -webkit-box-shadow: 0 0 25px 12px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent;
        box-shadow: 0 0 25px 12px #ccc, 0 1px 5px 0 rgba(0, 0, 0, .1), 0 0 0 0 transparent
    }

    table.table-bordered.dataTable tbody th:focus, table.table-bordered.dataTable tbody td:focus {
        outline: none
    }

    .card .card-block ul.pagination li {
        margin-right: 0
    }

    .page-item.active .page-link {
        background-color: #01a9ac;
        border-color: #01a9ac
    }

    .page-link {
        color: #222
    }

    td.highlight {
        font-weight: 700;
        color: #2dcee3;
        background-color: #f5f5f5
    }

    .table.compact td, .table.compact th {
        padding: .45rem
    }

    .dataTables_paginate .pagination {
        float: right
    }

    #multi-table_wrapper .dataTables_paginate .pagination {
        float: none
    }

    #footer-search tfoot .form-control, #footer-select tfoot .form-control, #form-input-table .form-control, .search-api .form-control, #dt-live-dom .form-control {
        width: 90%
    }

    .search-api .global_filter, .search-api .column_filter {
        margin: 0 auto
    }

    .search-api .checkbox-fade {
        display: block;
        text-align: center
    }


    #row-select .selected, #row-delete .selected {
        background-color: #01a9ac;
        color: #fff
    }

    div.dt-autofill-list div.dt-autofill-button button {
        background-color: #01a9ac;
        border-color: #01a9ac
    }

    table.dataTable {
        border-collapse: collapse !important
    }

    table.dataTable tbody > tr.selected, table.dataTable tbody > tr > .selected {
        background-color: #01a9ac;
        color: #fff
    }

    table.dataTable td.select-checkbox:before, table.dataTable th.select-checkbox:before {
        margin-top: 0
    }

    table.dataTable tr.selected td.select-checkbox:after, table.dataTable tr.selected th.select-checkbox:after {
        margin-top: -6px;
        margin-left: -5px
    }

    button.dt-button, div.dt-button, a.dt-button, button.dt-button:focus:not(.disabled), div.dt-button:focus:not(.disabled), a.dt-button:focus:not(.disabled), button.dt-button:active:not(.disabled), button.dt-button.active:not(.disabled), div.dt-button:active:not(.disabled), div.dt-button.active:not(.disabled), a.dt-button:active:not(.disabled), a.dt-button.active:not(.disabled) {
        background-color: #01a9ac;
        border-color: #01a9ac;
        border-radius: 2px;
        color: #fff;
        background-image: none;
        font-size: 14px
    }

    button.dt-button.btn-warning, div.dt-button.btn-warning, a.dt-button.btn-warning {
        background-color: #fe9365;
        border-color: #fe9365;
        border-radius: 2px;
        color: #fff;
        background-image: none
    }

    button.dt-button.btn-danger, div.dt-button.btn-danger, a.dt-button.btn-danger {
        background-color: #fe5d70;
        border-color: #fe5d70;
        border-radius: 2px;
        color: #fff;
        background-image: none
    }

    button.dt-button.btn-inverse, div.dt-button.btn-inverse, a.dt-button.btn-inverse {
        background-color: #404e67;
        border-color: #404e67;
        border-radius: 2px;
        color: #fff;
        background-image: none
    }

    button.dt-button:hover:not(.disabled), div.dt-button:hover:not(.disabled), a.dt-button:hover:not(.disabled) {
        background-image: none;
        background-color: #01c2c5;
        border-color: #01a9ac
    }

    button.dt-button.btn-warning:hover:not(.disabled), div.dt-button.btn-warning:hover:not(.disabled), a.dt-button.btn-warning:hover:not(.disabled) {
        background-image: none;
        background-color: #feb798;
        border-color: #fe9365
    }

    button.dt-button.btn-danger:hover:not(.disabled), div.dt-button.btn-danger:hover:not(.disabled), a.dt-button.btn-danger:hover:not(.disabled) {
        background-image: none;
        background-color: #fe909d;
        border-color: #fe5d70
    }

    button.dt-button.btn-inverse:hover:not(.disabled), div.dt-button.btn-inverse:hover:not(.disabled), a.dt-button.btn-inverse:hover:not(.disabled) {
        background-image: none;
        background-color: #546686;
        border-color: #404e67
    }

    div.dt-button-collection button.dt-button:active:not(.disabled), div.dt-button-collection button.dt-button.active:not(.disabled), div.dt-button-collection div.dt-button:active:not(.disabled), div.dt-button-collection div.dt-button.active:not(.disabled), div.dt-button-collection a.dt-button:active:not(.disabled), div.dt-button-collection a.dt-button.active:not(.disabled) {
        background-color: #01a9ac;
        border-color: #01a9ac;
        background-image: none
    }

    div.dt-buttons {
        clear: both
    }

    .card .table-card-header b {
        display: block;
        color: #01a9ac;
        margin-top: 15px
    }

    .card .table-card-header span {
        color: #017779;
        display: inline-block;
        margin-top: 0
    }

    div.dataTables_wrapper div.dataTables_info {
        display: inline-block
    }

    table.DTCR_clonedTable.dataTable {
        position: absolute !important;
        background-color: rgba(255, 255, 255, .7);
        z-index: 202
    }

    div.DTCR_pointer {
        width: 1px;
        background-color: #0259c4;
        z-index: 201
    }

    table.DTFC_Cloned thead, table.DTFC_Cloned tfoot {
        background-color: #fff
    }

    div.DTFC_Blocker {
        background-color: #fff
    }

    div.DTFC_LeftWrapper table.dataTable, div.DTFC_RightWrapper table.dataTable {
        margin-bottom: 0;
        z-index: 2
    }

    div.DTFC_LeftWrapper table.dataTable.no-footer, div.DTFC_RightWrapper table.dataTable.no-footer {
        border-bottom: none
    }

    th, td {
        white-space: nowrap
    }

    table.fixedHeader-floating {
        position: fixed !important;
        background-color: #fff
    }

    table.fixedHeader-floating.no-footer {
        border-bottom-width: 0
    }

    table.fixedHeader-locked {
        position: absolute !important;
        background-color: #fff
    }

    @media print {
        table.fixedHeader-floating {
            display: none
        }
    }

    table.dataTable th.focus, table.dataTable td.focus {
        outline: 3px solid #01a9ac;
        outline-offset: -1px
    }

    table.dataTable td.focus {
        outline: 1px solid #fe5d70;
        outline-offset: -3px;
        background-color: #f8e6e6 !important
    }

    #events {
        margin-bottom: 1em;
        padding: 1em;
        background-color: #f6f6f6;
        border: 1px solid #999;
        border-radius: 3px;
        height: 100px;
        overflow: auto
    }

    table.dt-rowReorder-float {
        position: absolute !important;
        opacity: .8;
        table-layout: fixed;
        outline: 2px solid #888;
        outline-offset: -2px;
        z-index: 2001
    }

    tr.dt-rowReorder-moving {
        outline: 2px solid #555;
        outline-offset: -2px
    }

    body.dt-rowReorder-noOverflow {
        overflow-x: hidden
    }

    table.dataTable td.reorder {
        text-align: center;
        cursor: move
    }

    #result {
        border: 1px solid #888;
        background: #f7f7f7;
        padding: 1em;
        margin-bottom: 1em
    }

    div.DTS {
        display: block !important
    }

    div.DTS tbody th, div.DTS tbody td {
        white-space: nowrap
    }

    div.DTS div.DTS_Loading {
        z-index: 1
    }

    div.DTS div.dataTables_scrollBody table {
        z-index: 2
    }

    div.DTS div.dataTables_paginate, div.DTS div.dataTables_length {
        display: none
    }

    .footable .pagination > .active > a, .footable .pagination > .active > a:focus, .footable .pagination > .active > a:hover, .footable .pagination > .active > span, .footable .pagination > .active > span:focus, .footable .pagination > .active > span:hover {
        background-color: #01a9ac;
        border-color: #01a9ac
    }

    .footable .pagination > li > a, .footable .pagination > li > span {
        color: #222
    }

    .footable-details.table, .footable.table, table.footable > tfoot > tr.footable-paging > td > span.label {
        margin-bottom: 0
    }

    table.footable-paging-center > tfoot > tr.footable-paging > td {
        padding-bottom: 0
    }

    .make-me-red {
        color: red
    }

    .scroll-container .wtHolder {
        height: 350px !important
    }

    .scroll-container #highlighting .wtHolder, .scroll-container #populating .wtHolder, .scroll-container #paginating .wtHolder, .scroll-container #searching .wtHolder, .scroll-container #drag .wtHolder, .scroll-container #validation .wtHolder, .scroll-container #readOnly .wtHolder, .scroll-container #nonEditable .wtHolder, .scroll-container #numericData .wtHolder, .scroll-container #dateDate .wtHolder, .scroll-container #timeData .wtHolder, .scroll-container #checkbox .wtHolder, .scroll-container #select .wtHolder, .scroll-container #dropdown .wtHolder, .scroll-container #autocomplete .wtHolder, .scroll-container #jQuery .wtHolder, .scroll-container #chromaJS .wtHolder, .scroll-container #context .wtHolder, .scroll-container #configuration .wtHolder, .scroll-container #copyPaste .wtHolder, .scroll-container #buttons .wtHolder, .scroll-container #comments .wtHolder {
        height: auto !important
    }

    .handson-pagination {
        margin-top: 30px
    }

    .currentRow {
        background-color: #f9f9fb !important
    }

    .currentCol {
        background-color: #e7e8ef !important
    }

    .contact-table tr td:nth-child(n-2) {
        text-align: center
    }

    .contact-table tr td:last-child {
        position: relative
    }

    .contact-table tr td:last-child .dropdown-menu {
        top: 52px
    }

    #checkbox-select tr td.select-checkbox, #checkbox-select tr th.select-checkbox {
        padding-left: 30px
    }

    #checkbox-select tr td.select-checkbox:before, #checkbox-select tr td.select-checkbox:after, #checkbox-select tr th.select-checkbox:before, #checkbox-select tr th.select-checkbox:after {
        left: 15px
    }

    .bg-facebook {
        background-color: #3b5997
    }

    .text-facebook {
        color: #3b5997
    }

    .bg-twiter {
        background-color: #42c0fb
    }

    .text-twiter {
        color: #42c0fb
    }

    .bg-dribble {
        background-color: #ec4a89
    }

    .text-dribble {
        color: #ec4a89
    }

    .bg-pinterest {
        background-color: #bf2131
    }

    .text-pinterest {
        color: #bf2131
    }

    .bg-youtube {
        background-color: #e0291d
    }

    .text-youtube {
        color: #e0291d
    }

    .bg-googleplus {
        background-color: #c73e2e
    }

    .text-googleplus {
        color: #c73e2e
    }

    .bg-instagram {
        background-color: #aa7c62
    }

    .text-instagram {
        color: #aa7c62
    }

    .bg-viber {
        background-color: #7b519d
    }

    .text-viber {
        color: #7b519d
    }

    .bg-amazon {
        background-color: #000
    }

    .text-amazon {
        color: #000
    }

    .bg-c-blue {
        background: -webkit-gradient(linear, left top, right top, from(#01a9ac), to(#01dbdf));
        background: linear-gradient(to right, #01a9ac, #01dbdf)
    }

    .bg-simple-c-blue {
        background: #01a9ac
    }

    .text-c-blue {
        color: #01a9ac
    }

    .bg-c-pink {
        background: -webkit-gradient(linear, left top, right top, from(#fe5d70), to(#fe909d));
        background: linear-gradient(to right, #fe5d70, #fe909d)
    }

    .bg-simple-c-pink {
        background: #fe5d70
    }

    .text-c-pink {
        color: #fe5d70
    }

    .bg-c-green {
        background: -webkit-gradient(linear, left top, right top, from(#0ac282), to(#0df3a3));
        background: linear-gradient(to right, #0ac282, #0df3a3)
    }

    .bg-simple-c-green {
        background: #0ac282
    }

    .text-c-green {
        color: #0ac282
    }

    .bg-c-yellow {
        background: -webkit-gradient(linear, left top, right top, from(#fe9365), to(#feb798));
        background: linear-gradient(to right, #fe9365, #feb798)
    }

    .bg-simple-c-yellow {
        background: #fe9365
    }

    .text-c-yellow {
        color: #fe9365
    }

    .bg-c-orenge {
        background: -webkit-gradient(linear, left top, right top, from(#FE8A7D), to(#feb8b0));
        background: linear-gradient(to right, #FE8A7D, #feb8b0)
    }

    .bg-simple-c-orenge {
        background: #fe8a7d
    }

    .text-c-orenge {
        color: #fe8a7d
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#01a9ac), to(#01dbdf));
        background: linear-gradient(to right, #01a9ac, #01dbdf)
    }

    .bg-simple-c-lite-green {
        background: #01a9ac
    }

    .text-c-lite-green {
        color: #01a9ac
    }

    .update-card {
        color: #fff
    }

    .update-card .card-footer {
        background-color: transparent;
        border-top: 1px solid #fff
    }

    .statustic-progress-card .progress {
        height: 5px
    }

    .user-radial-card {
        text-align: center
    }

    .user-radial-card > div {
        margin: 0 auto;
        display: block
    }

    .user-radial-card > div img {
        -webkit-box-shadow: 0 0 0 10px #fff;
        box-shadow: 0 0 0 10px #fff
    }

    .user-radial-card p {
        margin-bottom: 0
    }

    .user-card-full {
        overflow: hidden
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px
    }

    .user-card-full .social-link li {
        display: inline-block
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .user-card-full .social-link li a i {
        color: #666
    }

    .user-card-full .social-link li a i.facebook:hover {
        color: #3b5997
    }

    .user-card-full .social-link li a i.twitter:hover {
        color: #42c0fb
    }

    .user-card-full .social-link li a i.instagram:hover {
        color: #aa7c62
    }

    .user-card-full .social-link li a i.youtube:hover {
        color: #e0291d
    }

    .statustic-card .card-block {
        position: relative
    }

    .statustic-card .card-block .progress {
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 0;
        height: 5px;
        overflow: visible
    }

    .statustic-card .card-block .progress .progress-bar {
        position: relative
    }

    .statustic-card .card-block .progress .progress-bar:before {
        content: "";
        height: 5px;
        width: 5px;
        border-radius: 50%;
        position: absolute;
        right: 0;
        background: inherit
    }

    .statustic-card .card-block .progress .progress-bar.bg-c-blue:before {
        -webkit-animation: blue-blink-bar .5s linear infinite;
        animation: blue-blink-bar .5s linear infinite
    }

    .statustic-card .card-block .progress .progress-bar.bg-c-green:before {
        -webkit-animation: green-blink-bar .5s linear infinite;
        animation: green-blink-bar .5s linear infinite
    }

    .statustic-card .card-block .progress .progress-bar.bg-c-pink:before {
        -webkit-animation: pink-blink-bar .5s linear infinite;
        animation: pink-blink-bar .5s linear infinite
    }

    .statustic-card .card-block .progress .progress-bar.bg-c-yellow:before {
        -webkit-animation: yellow-blink-bar .5s linear infinite;
        animation: yellow-blink-bar .5s linear infinite
    }

    @-webkit-keyframes blue-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(1, 169, 172, .1);
            box-shadow: 0 0 0 0 rgba(1, 169, 172, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(1, 169, 172, .3);
            box-shadow: 0 0 0 6px rgba(1, 169, 172, .3)
        }
    }

    @keyframes blue-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(1, 169, 172, .1);
            box-shadow: 0 0 0 0 rgba(1, 169, 172, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(1, 169, 172, .3);
            box-shadow: 0 0 0 6px rgba(1, 169, 172, .3)
        }
    }

    @-webkit-keyframes green-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(10, 194, 130, .1);
            box-shadow: 0 0 0 0 rgba(10, 194, 130, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(10, 194, 130, .3);
            box-shadow: 0 0 0 6px rgba(10, 194, 130, .3)
        }
    }

    @keyframes green-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(10, 194, 130, .1);
            box-shadow: 0 0 0 0 rgba(10, 194, 130, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(10, 194, 130, .3);
            box-shadow: 0 0 0 6px rgba(10, 194, 130, .3)
        }
    }

    @-webkit-keyframes pink-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(254, 93, 112, .1);
            box-shadow: 0 0 0 0 rgba(254, 93, 112, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(254, 93, 112, .3);
            box-shadow: 0 0 0 6px rgba(254, 93, 112, .3)
        }
    }

    @keyframes pink-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(254, 93, 112, .1);
            box-shadow: 0 0 0 0 rgba(254, 93, 112, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(254, 93, 112, .3);
            box-shadow: 0 0 0 6px rgba(254, 93, 112, .3)
        }
    }

    @-webkit-keyframes yellow-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(254, 147, 101, .1);
            box-shadow: 0 0 0 0 rgba(254, 147, 101, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(254, 147, 101, .3);
            box-shadow: 0 0 0 6px rgba(254, 147, 101, .3)
        }
    }

    @keyframes yellow-blink-bar {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(254, 147, 101, .1);
            box-shadow: 0 0 0 0 rgba(254, 147, 101, .1)
        }
        50% {
            -webkit-box-shadow: 0 0 0 6px rgba(254, 147, 101, .3);
            box-shadow: 0 0 0 6px rgba(254, 147, 101, .3)
        }
    }

    .widget-statstic-card {
        position: relative;
        overflow: hidden
    }

    .widget-statstic-card .st-icon {
        color: #fff;
        font-size: 23px;
        padding: 40px 40px 20px 20px;
        border-radius: 50%;
        position: absolute;
        top: -30px;
        right: -30px;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .widget-statstic-card h2 {
        font-weight: 600;
        display: inline-block
    }

    .widget-statstic-card span {
        border-radius: 30px;
        padding: 5px 20px;
        color: #fff;
        font-weight: 600
    }

    .widget-statstic-card:hover .st-icon {
        font-size: 50px
    }

    .social-card {
        color: #fff;
        overflow: hidden
    }

    .social-card .social-icon {
        background-color: #fff;
        border-radius: 5px;
        text-align: center;
        padding: 22px 23px
    }

    .social-card .download-icon {
        color: #fff;
        background-color: rgba(255, 255, 255, .5);
        position: absolute;
        height: 125px;
        width: 125px;
        right: -125px;
        font-size: 35px;
        padding: 40px 22px;
        border-radius: 50%;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .social-card:hover .download-icon {
        right: -60px
    }

    .widget-visitor-card {
        overflow: hidden;
        padding: 10px 0
    }

    .widget-visitor-card i {
        color: #fff;
        font-size: 80px;
        position: absolute;
        bottom: -10px;
        opacity: .3;
        left: -10px;
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .widget-visitor-card:hover i {
        -webkit-transform: rotate(0deg) scale(1.4);
        transform: rotate(0deg) scale(1.4);
        opacity: .5
    }

    .app-design .btn {
        padding: 5px 8px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 5px
    }

    .app-design .team-section img {
        width: 35px;
        border-radius: 5px
    }

    .app-design .progress-box p {
        margin-bottom: 0
    }

    .app-design .progress-box .progress {
        width: calc(100% - 80px);
        height: 8px;
        text-align: center;
        margin: 0 auto;
        background-color: #e5e5e5;
        border-radius: 30px;
        position: relative;
        overflow: inherit
    }

    .app-design .progress-box .progress .progress-bar {
        border-radius: 30px
    }

    .app-design .progress-box .progress .progress-bar label {
        position: absolute;
        top: -24px;
        right: 0;
        color: #222;
        font-weight: 600;
        font-size: 13px
    }

    .widget-card-1 {
        margin-top: 20px;
        text-align: right
    }

    .widget-card-1 .card1-icon {
        width: 60px;
        height: 60px;
        position: absolute;
        top: -15px;
        font-size: 35px;
        border-radius: 8px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        color: #fff;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .widget-card-1 .card-block > span {
        color: #919aa3
    }

    .widget-card-1 h4 {
        font-weight: 400;
        margin-top: 10px
    }

    .widget-card-1:hover .card1-icon {
        top: -25px
    }

    .user-widget-card {
        margin-top: 10px;
        margin-bottom: 40px;
        text-align: center;
        color: #fff
    }

    .user-widget-card .card-block {
        padding: 1.95rem 1.25rem .85rem
    }

    .user-widget-card .card1-icon {
        width: 40px;
        height: 40px;
        position: absolute;
        top: -15px;
        left: calc(50% - 20px);
        font-size: 20px;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 0 5px rgba(255, 255, 255, .5);
        box-shadow: 0 0 0 5px rgba(255, 255, 255, .5);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
        color: #fff
    }

    .user-widget-card h4 {
        font-weight: 400;
        margin-top: 10px
    }

    .user-widget-card .more-info {
        background: #fff;
        padding: 5px 15px;
        border-radius: 15px;
        position: absolute;
        left: calc(50% - 45px);
        -webkit-box-shadow: 0 1px 14px -5px #000;
        box-shadow: 0 1px 14px -5px #000
    }

    .order-card {
        color: #fff;
        overflow: hidden
    }

    .order-card .card-icon {
        position: absolute;
        right: -17px;
        font-size: 100px;
        top: 20px;
        opacity: .5
    }

    .user-card2 .risk-rate {
        display: inline-block;
        margin: 0 auto
    }

    .user-card2 .risk-rate span {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        border: 6px dashed #d6d6d6;
        border-top-color: #fe9365;
        border-bottom-color: transparent;
        padding: 45px;
        display: block;
        position: relative
    }

    .user-card2 .risk-rate span:after {
        content: "";
        width: 90px;
        height: 90px;
        background-color: rgba(254, 147, 101, .5);
        border-radius: 50%;
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 1
    }

    .user-card2 .risk-rate span b {
        font-size: 20px;
        color: #fff;
        z-index: 2;
        position: relative
    }

    .table-card .card-block {
        padding-left: 0;
        padding-right: 0;
        padding-top: 0
    }

    .table-card .card-block .table > thead > tr > th {
        border-top: 0
    }

    .table-card .card-block .table .chk-option {
        vertical-align: middle;
        width: 30px;
        display: inline-block
    }

    .table-card .card-block .table .chk-option .checkbox-fade, .table-card .card-block .table .chk-option .checkbox-fade .cr, .table-card .card-block .table .chk-option .checkbox-zoom, .table-card .card-block .table .chk-option .checkbox-zoom .cr {
        margin-right: 0
    }

    .table-card .card-block .table label {
        margin-bottom: 0
    }

    .table-card .card-block .table tr td:first-child, .table-card .card-block .table tr th:first-child {
        padding-left: 20px
    }

    .table-card .card-block .table tr td:last-child, .table-card .card-block .table tr th:last-child {
        padding-right: 20px
    }

    #app-sale1, #app-sale2, #app-sale3, #app-sale4 {
        height: 46px !important;
        width: 100px !important
    }

    .user-activity-card .u-img {
        position: relative
    }

    .user-activity-card .u-img .cover-img {
        width: 40px;
        height: 40px
    }

    .user-activity-card .u-img .profile-img {
        width: 20px;
        height: 20px;
        position: absolute;
        bottom: -5px;
        right: -5px
    }

    .wather-card {
        overflow: hidden
    }

    .wather-card .nature-card {
        position: relative;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, #fea57e), to(#fe9365));
        background: linear-gradient(#fea57e 60%, #fe9365 100%);
        overflow: hidden
    }

    .wather-card .nature-card .main-img {
        width: 100%
    }

    @media only screen and (min-width: 1400px) {
        .wather-card .nature-card .main-img {
            height: 260px
        }
    }

    .wather-card .nature-card .bottom-img {
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%
    }

    .wather-card .nature-card .snow1, .wather-card .nature-card .snow2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%
    }

    .wather-card .nature-card .snow1 {
        -webkit-animation: sparcle 2.1s linear infinite;
        animation: sparcle 2.1s linear infinite
    }

    .wather-card .nature-card .snow2 {
        -webkit-animation: sparcle 2.1s linear infinite;
        animation: sparcle 2.1s linear infinite;
        -webkit-animation-delay: 1.15s;
        animation-delay: 1.15s
    }

    .wather-card .nature-card .nature-cont {
        position: absolute;
        top: 20px;
        text-align: center;
        width: 100%
    }

    @-webkit-keyframes sparcle {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }
        20% {
            opacity: 1;
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px)
        }
        50% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            transform: translateY(0px)
        }
        80% {
            opacity: 1;
            -webkit-transform: translateY(5px);
            transform: translateY(5px)
        }
        100% {
            opacity: 0;
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }
    }

    @keyframes sparcle {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }
        20% {
            opacity: 1;
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px)
        }
        50% {
            opacity: 1;
            -webkit-transform: translateY(0px);
            transform: translateY(0px)
        }
        80% {
            opacity: 1;
            -webkit-transform: translateY(5px);
            transform: translateY(5px)
        }
        100% {
            opacity: 0;
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }
    }

    .user-card .usre-image {
        position: relative;
        display: inline-block;
        margin: 0 auto
    }

    .user-card .usre-image img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 1px solid #01a9ac;
        padding: 4px
    }

    .user-card .usre-image:before {
        content: "\e83f";
        font-family: feather;
        position: absolute;
        bottom: 10px;
        right: 10px;
        color: #fff;
        background-color: #0ac282;
        border-radius: 50%;
        padding: 0 3px
    }

    .user-card .usre-image:after {
        content: "Permenant";
        position: absolute;
        bottom: -15px;
        left: calc(100% - 27px);
        color: #fff;
        background-color: #01a9ac;
        border-radius: 5px;
        padding: 0 3px
    }

    .user-card .btn {
        margin: 10px auto 15px
    }

    .feed-card h6 {
        margin-top: 7px
    }

    .feed-card .feed-icon {
        color: #fff;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 8px
    }

    .latest-update-card .card-block {
        padding-top: 0
    }

    .latest-update-card .card-block .latest-update-box {
        position: relative
    }

    .latest-update-card .card-block .latest-update-box:after {
        content: "";
        position: absolute;
        background: #ddd;
        height: 100%;
        width: 1px;
        top: 0;
        left: 110px;
        z-index: 1
    }

    .latest-update-card .card-block .latest-update-box .update-meta {
        z-index: 2;
        min-width: 160px
    }

    .latest-update-card .card-block .latest-update-box .update-meta .update-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        padding: 12px 13px;
        font-size: 16px;
        color: #fff;
        margin-left: 10px
    }

    @media only screen and (max-width: 575px) {
        .latest-update-card .card-block .latest-update-box:after {
            display: none
        }

        .latest-update-card .card-block .latest-update-box .update-meta {
            z-index: 2;
            min-width: 100%;
            text-align: left !important;
            margin-bottom: 15px;
            border-top: 1px solid #f1f1f1;
            padding-top: 15px
        }
    }

    .latest-activity-card .card-block {
        padding-top: 0
    }

    .latest-activity-card .card-block .latest-update-box {
        position: relative
    }

    .latest-activity-card .card-block .latest-update-box .update-meta {
        z-index: 2;
        min-width: 160px
    }

    .latest-activity-card .card-block .latest-update-box .update-meta .update-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        padding: 12px 13px;
        font-size: 16px;
        color: #fff;
        margin-left: 10px
    }

    @media only screen and (max-width: 575px) {
        .latest-activity-card .card-block .latest-update-box .update-meta {
            z-index: 2;
            min-width: 100%;
            text-align: left !important;
            margin-bottom: 15px;
            border-top: 1px solid #f1f1f1;
            padding-top: 15px
        }
    }

    .latest-activity-card .table td {
        vertical-align: middle
    }

    .per-task-card .card-block {
        padding: 0
    }

    .per-task-card .per-task-block {
        margin-left: 0;
        margin-right: 0
    }

    .per-task-card .per-task-block > div {
        padding-top: 20px;
        padding-bottom: 20px
    }

    .per-task-card .per-task-block > div:nth-child(odd) {
        padding-left: 0
    }

    .per-task-card .per-task-block > div:nth-child(even) {
        background-color: rgba(1, 169, 172, .1);
        padding-right: 0
    }

    #monthly-graph .amcharts-graph-g2 .amcharts-graph-stroke {
        stroke-linejoin: round;
        stroke-linecap: round;
        -webkit-animation: am-moving-dashes 1s linear infinite;
        animation: am-moving-dashes 1s linear infinite
    }

    #monthly-graph .lastBullet {
        -webkit-animation: am-pulsating 1s ease-out infinite;
        animation: am-pulsating 1s ease-out infinite
    }

    #monthly-graph .amcharts-graph-column-front {
        -webkit-transition: all .3s .3s ease-out;
        transition: all .3s .3s ease-out
    }

    #monthly-graph .amcharts-graph-column-front:hover {
        -webkit-transition: all .3s ease-out;
        transition: all .3s ease-out;
        fill-opacity: .4
    }

    #monthly-graph .amcharts-graph-g3 {
        stroke-linejoin: round;
        stroke-linecap: round;
        stroke-dasharray: 500%;
        -webkit-animation: am-draw 40s;
        animation: am-draw 40s
    }

    @-webkit-keyframes am-moving-dashes {
        100% {
            stroke-dashoffset: -31px
        }
    }

    @keyframes am-moving-dashes {
        100% {
            stroke-dashoffset: -31px
        }
    }

    @-webkit-keyframes am-pulsating {
        0% {
            stroke-opacity: 1;
            stroke-width: 0
        }
        100% {
            stroke-opacity: 0;
            stroke-width: 50px
        }
    }

    @keyframes am-pulsating {
        0% {
            stroke-opacity: 1;
            stroke-width: 0
        }
        100% {
            stroke-opacity: 0;
            stroke-width: 50px
        }
    }

    @-webkit-keyframes am-draw {
        0% {
            stroke-dashoffset: 500%
        }
        100% {
            stroke-dashoffset: 0
        }
    }

    @keyframes am-draw {
        0% {
            stroke-dashoffset: 500%
        }
        100% {
            stroke-dashoffset: 0
        }
    }

    .quater-card .progress {
        height: 4px
    }

    .card.social-network p {
        line-height: 1.6
    }

    .alert {
        font-size: 15px;
        margin-bottom: 2rem
    }

    .alert.icons-alert {
        border-left-width: 48px
    }

    .alert.icons-alert .alert-icon {
        left: 15px;
        position: relative;
        text-align: center;
        top: 0;
        z-index: 3
    }

    .alert.icons-alert p {
        line-height: 21px;
        margin-bottom: 0
    }

    .close {
        font-size: 16px;
        margin-top: 5px
    }

    .alert-default {
        background-color: #fff;
        border-color: #e0e0e0;
        color: #e0e0e0
    }

    .alert-primary {
        background-color: #fff;
        border-color: #01a9ac;
        color: #01a9ac
    }

    .alert-success {
        background-color: #fff;
        border-color: #0ac282;
        color: #0ac282
    }

    .alert-info {
        background-color: #fff;
        border-color: #2dcee3;
        color: #2dcee3
    }

    .alert-warning {
        background-color: #fff;
        border-color: #fe9365;
        color: #fe9365
    }

    .alert-danger {
        background-color: #fff;
        border-color: #fe5d70;
        color: #fe5d70
    }

    .border-default {
        border-color: transparent;
        border-left: 3px solid #e0e0e0;
        border-radius: 0;
        -webkit-box-shadow: 0 0 1px #999;
        box-shadow: 0 0 1px #999;
        color: #e0e0e0
    }

    .border-primary {
        border-color: transparent;
        border-left: 3px solid #01a9ac;
        border-radius: 0;
        -webkit-box-shadow: 0 0 1px #999;
        box-shadow: 0 0 1px #999;
        color: #01a9ac
    }

    .border-success {
        border-color: transparent;
        border-left: 3px solid #0ac282;
        border-radius: 0;
        -webkit-box-shadow: 0 0 1px #999;
        box-shadow: 0 0 1px #999;
        color: #0ac282
    }

    .border-info {
        border-color: transparent;
        border-left: 3px solid #2dcee3;
        border-radius: 0;
        -webkit-box-shadow: 0 0 1px #999;
        box-shadow: 0 0 1px #999;
        color: #2dcee3
    }

    .border-warning {
        border-color: transparent;
        border-left: 3px solid #fe9365;
        border-radius: 0;
        -webkit-box-shadow: 0 0 1px #999;
        box-shadow: 0 0 1px #999;
        color: #fe9365
    }

    .border-danger {
        border-color: transparent;
        border-left: 3px solid #fe5d70;
        border-radius: 0;
        -webkit-box-shadow: 0 0 1px #999;
        box-shadow: 0 0 1px #999;
        color: #fe5d70
    }

    .background-default {
        background-color: #e0e0e0;
        color: #fff
    }

    .background-primary {
        background-color: #01a9ac;
        color: #fff
    }

    .background-success {
        background-color: #0ac282;
        color: #fff
    }

    .background-info {
        background-color: #2dcee3;
        color: #fff
    }

    .background-warning {
        background-color: #fe9365;
        color: #fff
    }

    .background-danger {
        background-color: #fe5d70;
        color: #fff
    }

    .icons-alert {
        position: relative
    }

    .icons-alert:before {
        color: #fff;
        content: '\f027';
        font-family: icofont !important;
        font-size: 16px;
        left: -30px;
        position: absolute;
        top: 20px
    }

    [class*=alert-] code {
        margin-left: 10px
    }



    .login-block .auth-box {
        margin: 20px auto 0;
        max-width: 450px
    }

    .login-block .auth-box .confirm h3 {
        color: #01a9ac;
        font-size: 34px
    }

    .login-block .auth-box i.icofont-check-circled {
        font-size: 42px
    }

    .login-block.offline-404 .auth-box {
        max-width: 650px
    }

    .login-block.offline-404 .auth-box h1 {
        color: #2c3e50;
        font-size: 160px;
        font-weight: 600;
        letter-spacing: 5px;
        text-shadow: 3px -2px 4px rgba(128, 128, 128, .57)
    }

    .login-block.with-header {
        min-height: calc(100vh - 56px)
    }

    .footer {
        background-color: #404e67;
        color: #fff;
        padding: 15px 0;
        position: fixed;
        bottom: 0;
        width: 100%
    }

    .footer p {
        margin-bottom: 0
    }


    .caption-breadcrumb .breadcrumb-header span, .primary-breadcrumb .breadcrumb-header span, .inverse-breadcrumb .breadcrumb-header span, .danger-breadcrumb .breadcrumb-header span, .info-breadcrumb .breadcrumb-header span, .warning-breadcrumb .breadcrumb-header span, .success-breadcrumb .breadcrumb-header span {
        display: block;
        font-size: 13px;
        margin-top: 5px
    }

    .front-icon-breadcrumb .breadcrumb-header {
        display: inline-block
    }

    .front-icon-breadcrumb .big-icon {
        display: inline-block
    }

    .front-icon-breadcrumb .big-icon i {
        font-size: 50px;
        margin-right: 10px;
        color: #01a9ac
    }

    .front-icon-breadcrumb .d-inline-block span {
        display: block;
        font-size: 13px;
        margin-top: 5px
    }

    .primary-breadcrumb, .inverse-breadcrumb, .danger-breadcrumb, .info-breadcrumb, .warning-breadcrumb, .success-breadcrumb {
        background-color: #01a9ac;
        color: #fff
    }

    .primary-breadcrumb h5, .inverse-breadcrumb h5, .danger-breadcrumb h5, .info-breadcrumb h5, .warning-breadcrumb h5, .success-breadcrumb h5, .primary-breadcrumb a, .inverse-breadcrumb a, .danger-breadcrumb a, .info-breadcrumb a, .warning-breadcrumb a, .success-breadcrumb a, .primary-breadcrumb .breadcrumb-title li:last-child a, .inverse-breadcrumb .breadcrumb-title li:last-child a, .danger-breadcrumb .breadcrumb-title li:last-child a, .info-breadcrumb .breadcrumb-title li:last-child a, .warning-breadcrumb .breadcrumb-title li:last-child a, .success-breadcrumb .breadcrumb-title li:last-child a, .primary-breadcrumb .breadcrumb-item + .breadcrumb-item::before, .inverse-breadcrumb .breadcrumb-item + .breadcrumb-item::before, .danger-breadcrumb .breadcrumb-item + .breadcrumb-item::before, .info-breadcrumb .breadcrumb-item + .breadcrumb-item::before, .warning-breadcrumb .breadcrumb-item + .breadcrumb-item::before, .success-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
        color: #fff
    }

    .inverse-breadcrumb {
        background-color: #404e67
    }

    .danger-breadcrumb {
        background-color: #fe5d70
    }

    .info-breadcrumb {
        background-color: #2dcee3
    }

    .warning-breadcrumb {
        background-color: #fe9365
    }

    .success-breadcrumb {
        background-color: #0ac282
    }

    .nvd-chart {
        height: 400px
    }

    .peity-chart .peity {
        width: 100%;
        height: 250px
    }

    @-webkit-keyframes dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0
        }
        50% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -35px
        }
        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px
        }
    }

    @keyframes dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0
        }
        50% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -35px
        }
        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px
        }
    }

    .morris-hover {
        position: absolute;
        min-width: 100px;
        width: 100px;
        right: 0;
        background: #fff;
        padding: 20px;
        border: 1px solid #ccc
    }

    .rickshaw_graph svg {
        width: 100% !important
    }



    #main-chat .chat-single-box.active .chat-header {
        background-color: #01a9ac
    }

    #main-chat .chat-single-box.active .chat-header a {
        color: #fff
    }

    #main-chat .chat-single-box .chat-header a {
        color: #fff
    }

    #main-chat .chat-box ul.boxs li.chat-single-box .chat-header.custom-collapsed {
        position: absolute;
        bottom: 0;
        width: 300px
    }

    #main-chat .minimized {
        background-color: #1e2730
    }

    #main-chat .user-groups {
        padding-left: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px
    }

    #main-chat .user-groups .userlist-box {
        border-bottom: none
    }

    #main-chat .user-groups .userlist-box:last-child {
        padding-bottom: 0;
        margin-bottom: 0
    }

    #main-chat .user-groups .media {
        padding-left: 0
    }

    #main-chat .user-groups h6 {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 20px
    }

    #main-chat .user-groups li {
        margin-bottom: 20px
    }

    #main-chat .user-groups li:last-child {
        margin-bottom: 0
    }

    #main-chat .user-groups li.work, #main-chat .user-groups li.frnds {
        position: relative;
        padding-left: 20px
    }

    #main-chat .user-groups li.work:before, #main-chat .user-groups li.frnds:before {
        content: '';
        position: absolute;
        height: 10px;
        width: 10px;
        background-color: #0ac282;
        border-radius: 50px;
        left: 0;
        top: 6px
    }

    #main-chat .user-groups li.frnds:before {
        background-color: #fe5d70
    }

    .user-box {
        height: 100%
    }

    .close {
        opacity: 1
    }

    .write-msg {
        padding: 12px;
        bottom: 10px;
        border-top: 1px solid #ddd
    }

    .write-msg #paper-btn i {
        font-size: 18px;
        margin-right: 0;
        cursor: pointer
    }

    .chat-box .secondary:active:hover {
        background-color: #fff
    }

    #main-chat .chat-box ul.boxs li.minimized {
        height: 30px;
        width: 30px;
        bottom: 0;
        position: absolute;
        left: -50px;
        border-radius: 5px 5px 0 0;
        cursor: pointer
    }

    #main-chat .chat-box ul.boxs li.minimized .count {
        color: #fff;
        text-align: center;
        margin: 5px
    }

    #main-chat .chat-box ul.boxs li.minimized .chat-dropdown {
        list-style: none;
        display: none;
        position: absolute;
        background-color: #f5f5f5;
        -webkit-box-shadow: 0 1px 8px 0 rgba(5, 5, 5, .5);
        box-shadow: 0 1px 8px 0 rgba(5, 5, 5, .5);
        width: 150px;
        z-index: 100;
        border-radius: 5px;
        padding: 5px 0
    }

    #main-chat .chat-box ul.boxs li.minimized .chat-dropdown li {
        padding: 2px 5px
    }

    #main-chat .chat-box ul.boxs li.minimized .chat-dropdown li div {
        display: inline-block
    }

    #main-chat .chat-box ul.boxs li.minimized .chat-dropdown li .username {
        width: 85%;
        height: 22px
    }

    #main-chat .chat-box ul.boxs li.minimized .chat-dropdown li .remove {
        width: 13%;
        padding: 2px 4px;
        float: right
    }

    #main-chat .chat-box ul.boxs li.minimized .chat-dropdown li .remove:hover {
        background-color: silver !important
    }

    #main-chat .chat-box ul.boxs li.minimized .chat-dropdown li:hover {
        color: #000
    }

    #main-chat .chat-box ul.boxs li.hidden {
        display: none
    }

    .chat-single-box {
        height: 440px;
        float: right;
        width: 300px;
        margin-right: 15px;
        direction: ltr;
        z-index: 999;
        bottom: 0
    }

    .chat-single-box .chat-header {
        background-color: #e0e0e0;
        color: #fff
    }

    .chat-single-box .chat-header .close {
        margin-top: 0
    }

    .box-live-status {
        height: 10px;
        width: 10px;
        border-radius: 100%;
        border: 1px solid
    }

    .chat-msg-img {
        height: 50px;
        width: 50px
    }

    .msg-reply {
        padding: 5px;
        position: relative;
        right: 10px;
        border-radius: 2px;
        top: 6px;
        margin-bottom: 10px
    }

    .header-users {
        right: 0;
        top: 103px;
        width: 300px;
        height: 100%
    }

    .users {
        right: 0;
        top: 103px;
        width: 300px;
        height: 100%
    }

    .p-chat-user {
        position: fixed;
        top: 56px;
        z-index: 99;
        border-left: 1px solid #ccc
    }

    .users-main {
        height: 100%;
        width: 300px;
        position: fixed;
        border-radius: 0
    }

    .userlist-box {
        cursor: pointer;
        border-bottom: 1px solid #efefef
    }

    .userlist-box .media-left {
        padding-right: 10px
    }

    .users-main .media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 0;
        padding-bottom: 10px;
        margin-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
        position: relative
    }

    .user-box .media-object {
        height: 45px;
        width: 45px;
        display: inline-block
    }

    .chat-menu-content, .chat-menu-reply {
        background: #f3f3f3;
        position: relative;
        overflow: visible;
        border-radius: 4px
    }

    .chat-menu-content:before {
        position: absolute;
        top: 20px;
        left: -14px;
        width: 0;
        height: 0;
        content: '';
        border: 8px solid transparent;
        border-right-color: #f3f3f3
    }

    .chat-menu-reply:before {
        position: absolute;
        top: 20px;
        right: -14px;
        width: 0;
        height: 0;
        content: '';
        border: 8px solid transparent;
        border-left-color: #01a9ac
    }

    .chat-reply-box {
        background-color: #fff;
        position: absolute;
        bottom: 73px;
        width: 100%;
        padding-top: 15px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 10px;
        border-top: 1px solid #ccc
    }

    .chat-inner-header {
        text-align: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
        padding: 20px
    }

    .chat-send {
        position: absolute;
        bottom: 5px;
        right: 0;
        border: none;
        background-color: transparent;
        color: #01a9ac;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .showChat_inner .chat-messages {
        padding-bottom: 20px;
        padding-left: 15px;
        padding-right: 15px
    }

    .chat-menu-content .chat-cont, .chat-menu-reply .chat-cont {
        padding: 10px
    }

    .chat-menu-content .chat-time, .chat-menu-reply .chat-time {
        padding-left: 10px;
        padding-bottom: 10px
    }

    .back_chatBox {
        margin: 0 auto;
        font-weight: 600
    }

    .back_chatBox i {
        float: left;
        position: absolute;
        margin-top: 5px;
        left: 20px;
        cursor: pointer
    }

    .designation {
        cursor: pointer
    }

    .extra-profile-list {
        display: none
    }

    .chat-menu-reply .chat-cont, .chat-menu-reply .chat-time {
        color: #fff
    }

    .chat-menu-reply {
        background: #01a9ac;
        margin-right: 10px
    }

    .users-main .media .chat-header {
        font-size: 14px;
        font-weight: 600
    }

    .users-main .media-body div + div {
        font-size: 12px
    }

    .chat-body {
        overflow-y: auto;
        height: 340px
    }

    .users-main-fix {
        height: auto;
        position: fixed;
        bottom: 0;
        top: 151px
    }

    .chat-footer, .chat-link {
        border-color: #01a9ac
    }

    .chat-footer .input-group-addon {
        padding: 7px .75rem
    }

    .form-control:focus ~ .chat-send {
        border-color: #01a9ac
    }

    .minimized-box {
        padding: 5px 10px
    }

    .write-msg input {
        border-radius: 0;
        border-right: 0
    }

    .write-msg .btn {
        -webkit-box-shadow: none;
        box-shadow: none;
        border-left: 0;
        font-size: 14px
    }

    .write-msg .btn-secondary:hover {
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .15);
        border-left: 0
    }

    .form-control:focus ~ .input-group-btn .btn-secondary {
        border-color: #66afe9;
        color: #01a9ac
    }

    .img-chat-profile {
        height: 45px;
        width: 45px
    }

    .chat-minimize .chat-body, .chat-minimize .chat-footer {
        display: none
    }

    .chat-box {
        margin-right: 290px;
        height: 440px;
        position: fixed;
        bottom: 0;
        right: 0;
        z-index: 99
    }

    .user-box .media-object, .friend-box .media-object {
        height: 45px;
        width: 45px;
        display: inline-block
    }

    .friend-box img {
        margin-right: 10px;
        margin-bottom: 10px
    }

    .chat-header {
        color: #222
    }

    .live-status {
        height: 10px;
        width: 10px;
        position: absolute;
        top: 20px;
        right: 20px;
        border-radius: 100%;
        border: 1px solid
    }

    .showChat {
        display: none
    }

    .showChat_inner {
        position: fixed;
        top: 56px;
        background-color: #fff;
        right: 0;
        display: none;
        width: 300px;
        height: 100%;
        z-index: 99;
        border-left: 1px solid #ccc
    }

    .showChat_inner .img-circle {
        border-radius: 0 !important
    }

    .amber-colors ul li p, .bg-danger li p, .bg-default li p, .bg-info li p, .bg-primary li p, .bg-success li p, .bg-warning li p, .blue-colors ul li p, .blue-grey-colors ul li p, .brown-colors ul li p, .cyan-colors ul li p, .deep-orange-colors ul li p, .deep-purple-colors ul li p, .green-colors ul li p, .grey-colors ul li p, .indigo-colors ul li p, .light-blue-colors ul li p, .light-green-colors ul li p, .lime-colors ul li p, .orange-colors ul li p, .pink-colors ul li p, .purple-colors ul li p, .red-colors ul li p, .teal-colors ul li p, .yellow-colors ul li p, .primary-colorr ul li p, .success-colorr ul li p, .info-colorr ul li p, .warning-colorr ul li p, .danger-colorr ul li p {
        font-size: 18px;
        padding: 10px 0;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        margin-bottom: 0
    }

    .red-colors ul li:nth-child(14) {
        background-color: #e40505
    }

    .red-colors ul li:nth-child(14) p:before {
        content: "#e40505"
    }

    .red-colors ul li:nth-child(13) {
        background-color: #f30606
    }

    .red-colors ul li:nth-child(13) p:before {
        content: "#f30606"
    }

    .red-colors ul li:nth-child(12) {
        background-color: #f90f0f
    }

    .red-colors ul li:nth-child(12) p:before {
        content: "#f90f0f"
    }

    .red-colors ul li:nth-child(11) {
        background-color: #fa1d1d
    }

    .red-colors ul li:nth-child(11) p:before {
        content: "#fa1d1d"
    }

    .red-colors ul li:nth-child(10) {
        background-color: #fa2c2c
    }

    .red-colors ul li:nth-child(10) p:before {
        content: "#fa2c2c"
    }

    .red-colors ul li:nth-child(9) {
        background-color: #fa3b3b
    }

    .red-colors ul li:nth-child(9) p:before {
        content: "#fa3b3b"
    }

    .red-colors ul li:nth-child(8) {
        background-color: #fb4a4a
    }

    .red-colors ul li:nth-child(8) p:before {
        content: "#fb4a4a"
    }

    .red-colors ul li:nth-child(7) {
        background-color: #fb5959
    }

    .red-colors ul li:nth-child(7) p:before {
        content: "#fb5959"
    }

    .red-colors ul li:nth-child(6) {
        background-color: #fb6868
    }

    .red-colors ul li:nth-child(6) p:before {
        content: "#fb6868"
    }

    .red-colors ul li:nth-child(5) {
        background-color: #fc7777
    }

    .red-colors ul li:nth-child(5) p:before {
        content: "#fc7777"
    }

    .red-colors ul li:nth-child(4) {
        background-color: #fc8686
    }

    .red-colors ul li:nth-child(4) p:before {
        content: "#fc8686"
    }

    .red-colors ul li:nth-child(3) {
        background-color: #fd9595
    }

    .red-colors ul li:nth-child(3) p:before {
        content: "#fd9595"
    }

    .red-colors ul li:nth-child(2) {
        background-color: #fda4a4
    }

    .red-colors ul li:nth-child(2) p:before {
        content: "#fda4a4"
    }

    .red-colors ul li:nth-child(1) {
        background-color: #fdb3b3
    }

    .red-colors ul li:nth-child(1) p:before {
        content: "#fdb3b3"
    }

    .pink-colors ul li:nth-child(14) {
        background-color: #d4166c
    }

    .pink-colors ul li:nth-child(14) p:before {
        content: "#d4166c"
    }

    .pink-colors ul li:nth-child(13) {
        background-color: #e21873
    }

    .pink-colors ul li:nth-child(13) p:before {
        content: "#e21873"
    }

    .pink-colors ul li:nth-child(12) {
        background-color: #e7217b
    }

    .pink-colors ul li:nth-child(12) p:before {
        content: "#e7217b"
    }

    .pink-colors ul li:nth-child(11) {
        background-color: #e92f83
    }

    .pink-colors ul li:nth-child(11) p:before {
        content: "#e92f83"
    }

    .pink-colors ul li:nth-child(10) {
        background-color: #ea3d8b
    }

    .pink-colors ul li:nth-child(10) p:before {
        content: "#ea3d8b"
    }

    .pink-colors ul li:nth-child(9) {
        background-color: #ec4b94
    }

    .pink-colors ul li:nth-child(9) p:before {
        content: "#ec4b94"
    }

    .pink-colors ul li:nth-child(8) {
        background-color: #ed599c
    }

    .pink-colors ul li:nth-child(8) p:before {
        content: "#ed599c"
    }

    .pink-colors ul li:nth-child(7) {
        background-color: #ef67a4
    }

    .pink-colors ul li:nth-child(7) p:before {
        content: "#ef67a4"
    }

    .pink-colors ul li:nth-child(6) {
        background-color: #f074ac
    }

    .pink-colors ul li:nth-child(6) p:before {
        content: "#f074ac"
    }

    .pink-colors ul li:nth-child(5) {
        background-color: #f282b5
    }

    .pink-colors ul li:nth-child(5) p:before {
        content: "#f282b5"
    }

    .pink-colors ul li:nth-child(4) {
        background-color: #f390bd
    }

    .pink-colors ul li:nth-child(4) p:before {
        content: "#f390bd"
    }

    .pink-colors ul li:nth-child(3) {
        background-color: #f59ec5
    }

    .pink-colors ul li:nth-child(3) p:before {
        content: "#f59ec5"
    }

    .pink-colors ul li:nth-child(2) {
        background-color: #f6accd
    }

    .pink-colors ul li:nth-child(2) p:before {
        content: "#f6accd"
    }

    .pink-colors ul li:nth-child(1) {
        background-color: #f8bad6
    }

    .pink-colors ul li:nth-child(1) p:before {
        content: "#f8bad6"
    }

    .purple-colors ul li:nth-child(14) {
        background-color: #b014ff
    }

    .purple-colors ul li:nth-child(14) p:before {
        content: "#b014ff"
    }

    .purple-colors ul li:nth-child(13) {
        background-color: #b524ff
    }

    .purple-colors ul li:nth-child(13) p:before {
        content: "#b524ff"
    }

    .purple-colors ul li:nth-child(12) {
        background-color: #ba33ff
    }

    .purple-colors ul li:nth-child(12) p:before {
        content: "#ba33ff"
    }

    .purple-colors ul li:nth-child(11) {
        background-color: #c042ff
    }

    .purple-colors ul li:nth-child(11) p:before {
        content: "#c042ff"
    }

    .purple-colors ul li:nth-child(10) {
        background-color: #c552ff
    }

    .purple-colors ul li:nth-child(10) p:before {
        content: "#c552ff"
    }

    .purple-colors ul li:nth-child(9) {
        background-color: #ca61ff
    }

    .purple-colors ul li:nth-child(9) p:before {
        content: "#ca61ff"
    }

    .purple-colors ul li:nth-child(8) {
        background-color: #cf70ff
    }

    .purple-colors ul li:nth-child(8) p:before {
        content: "#cf70ff"
    }

    .purple-colors ul li:nth-child(7) {
        background-color: #d47fff
    }

    .purple-colors ul li:nth-child(7) p:before {
        content: "#d47fff"
    }

    .purple-colors ul li:nth-child(6) {
        background-color: #d98fff
    }

    .purple-colors ul li:nth-child(6) p:before {
        content: "#d98fff"
    }

    .purple-colors ul li:nth-child(5) {
        background-color: #de9eff
    }

    .purple-colors ul li:nth-child(5) p:before {
        content: "#de9eff"
    }

    .purple-colors ul li:nth-child(4) {
        background-color: #e4adff
    }

    .purple-colors ul li:nth-child(4) p:before {
        content: "#e4adff"
    }

    .purple-colors ul li:nth-child(3) {
        background-color: #e9bdff
    }

    .purple-colors ul li:nth-child(3) p:before {
        content: "#e9bdff"
    }

    .purple-colors ul li:nth-child(2) {
        background-color: #ecf
    }

    .purple-colors ul li:nth-child(2) p:before {
        content: "#ecf"
    }

    .purple-colors ul li:nth-child(1) {
        background-color: #f3dbff
    }

    .purple-colors ul li:nth-child(1) p:before {
        content: "#f3dbff"
    }

    .deep-purple-colors ul li:nth-child(14) {
        background-color: #6b05f9
    }

    .deep-purple-colors ul li:nth-child(14) p:before {
        content: "#6b05f9"
    }

    .deep-purple-colors ul li:nth-child(13) {
        background-color: #7414fa
    }

    .deep-purple-colors ul li:nth-child(13) p:before {
        content: "#7414fa"
    }

    .deep-purple-colors ul li:nth-child(12) {
        background-color: #7d23fa
    }

    .deep-purple-colors ul li:nth-child(12) p:before {
        content: "#7d23fa"
    }

    .deep-purple-colors ul li:nth-child(11) {
        background-color: #8632fb
    }

    .deep-purple-colors ul li:nth-child(11) p:before {
        content: "#8632fb"
    }

    .deep-purple-colors ul li:nth-child(10) {
        background-color: #8f41fb
    }

    .deep-purple-colors ul li:nth-child(10) p:before {
        content: "#8f41fb"
    }

    .deep-purple-colors ul li:nth-child(9) {
        background-color: #9850fb
    }

    .deep-purple-colors ul li:nth-child(9) p:before {
        content: "#9850fb"
    }

    .deep-purple-colors ul li:nth-child(8) {
        background-color: #a05ffc
    }

    .deep-purple-colors ul li:nth-child(8) p:before {
        content: "#a05ffc"
    }

    .deep-purple-colors ul li:nth-child(7) {
        background-color: #a96efc
    }

    .deep-purple-colors ul li:nth-child(7) p:before {
        content: "#a96efc"
    }

    .deep-purple-colors ul li:nth-child(6) {
        background-color: #b27cfc
    }

    .deep-purple-colors ul li:nth-child(6) p:before {
        content: "#b27cfc"
    }

    .deep-purple-colors ul li:nth-child(5) {
        background-color: #bb8bfd
    }

    .deep-purple-colors ul li:nth-child(5) p:before {
        content: "#bb8bfd"
    }

    .deep-purple-colors ul li:nth-child(4) {
        background-color: #c49afd
    }

    .deep-purple-colors ul li:nth-child(4) p:before {
        content: "#c49afd"
    }

    .deep-purple-colors ul li:nth-child(3) {
        background-color: #cda9fd
    }

    .deep-purple-colors ul li:nth-child(3) p:before {
        content: "#cda9fd"
    }

    .deep-purple-colors ul li:nth-child(2) {
        background-color: #d5b8fd
    }

    .deep-purple-colors ul li:nth-child(2) p:before {
        content: "#d5b8fd"
    }

    .deep-purple-colors ul li:nth-child(1) {
        background-color: #dec7fe
    }

    .deep-purple-colors ul li:nth-child(1) p:before {
        content: "#dec7fe"
    }

    .indigo-colors ul li:nth-child(14) {
        background-color: #415dfe
    }

    .indigo-colors ul li:nth-child(14) p:before {
        content: "#415dfe"
    }

    .indigo-colors ul li:nth-child(13) {
        background-color: #4d68fe
    }

    .indigo-colors ul li:nth-child(13) p:before {
        content: "#4d68fe"
    }

    .indigo-colors ul li:nth-child(12) {
        background-color: #5a72fe
    }

    .indigo-colors ul li:nth-child(12) p:before {
        content: "#5a72fe"
    }

    .indigo-colors ul li:nth-child(11) {
        background-color: #677dfe
    }

    .indigo-colors ul li:nth-child(11) p:before {
        content: "#677dfe"
    }

    .indigo-colors ul li:nth-child(10) {
        background-color: #7388fe
    }

    .indigo-colors ul li:nth-child(10) p:before {
        content: "#7388fe"
    }

    .indigo-colors ul li:nth-child(9) {
        background-color: #8093fe
    }

    .indigo-colors ul li:nth-child(9) p:before {
        content: "#8093fe"
    }

    .indigo-colors ul li:nth-child(8) {
        background-color: #8d9efe
    }

    .indigo-colors ul li:nth-child(8) p:before {
        content: "#8d9efe"
    }

    .indigo-colors ul li:nth-child(7) {
        background-color: #9aa9ff
    }

    .indigo-colors ul li:nth-child(7) p:before {
        content: "#9aa9ff"
    }

    .indigo-colors ul li:nth-child(6) {
        background-color: #a6b3ff
    }

    .indigo-colors ul li:nth-child(6) p:before {
        content: "#a6b3ff"
    }

    .indigo-colors ul li:nth-child(5) {
        background-color: #b3beff
    }

    .indigo-colors ul li:nth-child(5) p:before {
        content: "#b3beff"
    }

    .indigo-colors ul li:nth-child(4) {
        background-color: #c0c9ff
    }

    .indigo-colors ul li:nth-child(4) p:before {
        content: "#c0c9ff"
    }

    .indigo-colors ul li:nth-child(3) {
        background-color: #ccd4ff
    }

    .indigo-colors ul li:nth-child(3) p:before {
        content: "#ccd4ff"
    }

    .indigo-colors ul li:nth-child(2) {
        background-color: #d9dfff
    }

    .indigo-colors ul li:nth-child(2) p:before {
        content: "#d9dfff"
    }

    .indigo-colors ul li:nth-child(1) {
        background-color: #e6e9ff
    }

    .indigo-colors ul li:nth-child(1) p:before {
        content: "#e6e9ff"
    }

    .blue-colors ul li:nth-child(14) {
        background-color: #3a6eff
    }

    .blue-colors ul li:nth-child(14) p:before {
        content: "#3a6eff"
    }

    .blue-colors ul li:nth-child(13) {
        background-color: #4778ff
    }

    .blue-colors ul li:nth-child(13) p:before {
        content: "#4778ff"
    }

    .blue-colors ul li:nth-child(12) {
        background-color: #5381ff
    }

    .blue-colors ul li:nth-child(12) p:before {
        content: "#5381ff"
    }

    .blue-colors ul li:nth-child(11) {
        background-color: #608aff
    }

    .blue-colors ul li:nth-child(11) p:before {
        content: "#608aff"
    }

    .blue-colors ul li:nth-child(10) {
        background-color: #6d94ff
    }

    .blue-colors ul li:nth-child(10) p:before {
        content: "#6d94ff"
    }

    .blue-colors ul li:nth-child(9) {
        background-color: #7a9dff
    }

    .blue-colors ul li:nth-child(9) p:before {
        content: "#7a9dff"
    }

    .blue-colors ul li:nth-child(8) {
        background-color: #86a6ff
    }

    .blue-colors ul li:nth-child(8) p:before {
        content: "#86a6ff"
    }

    .blue-colors ul li:nth-child(7) {
        background-color: #93b0ff
    }

    .blue-colors ul li:nth-child(7) p:before {
        content: "#93b0ff"
    }

    .blue-colors ul li:nth-child(6) {
        background-color: #a0b9ff
    }

    .blue-colors ul li:nth-child(6) p:before {
        content: "#a0b9ff"
    }

    .blue-colors ul li:nth-child(5) {
        background-color: #adc3ff
    }

    .blue-colors ul li:nth-child(5) p:before {
        content: "#adc3ff"
    }

    .blue-colors ul li:nth-child(4) {
        background-color: #b9ccff
    }

    .blue-colors ul li:nth-child(4) p:before {
        content: "#b9ccff"
    }

    .blue-colors ul li:nth-child(3) {
        background-color: #c6d5ff
    }

    .blue-colors ul li:nth-child(3) p:before {
        content: "#c6d5ff"
    }

    .blue-colors ul li:nth-child(2) {
        background-color: #d3dfff
    }

    .blue-colors ul li:nth-child(2) p:before {
        content: "#d3dfff"
    }

    .blue-colors ul li:nth-child(1) {
        background-color: #e0e8ff
    }

    .blue-colors ul li:nth-child(1) p:before {
        content: "#e0e8ff"
    }

    .light-blue-colors ul li:nth-child(14) {
        background-color: #059cf9
    }

    .light-blue-colors ul li:nth-child(14) p:before {
        content: "#059cf9"
    }

    .light-blue-colors ul li:nth-child(13) {
        background-color: #14a2fa
    }

    .light-blue-colors ul li:nth-child(13) p:before {
        content: "#14a2fa"
    }

    .light-blue-colors ul li:nth-child(12) {
        background-color: #23a8fa
    }

    .light-blue-colors ul li:nth-child(12) p:before {
        content: "#23a8fa"
    }

    .light-blue-colors ul li:nth-child(11) {
        background-color: #32aefb
    }

    .light-blue-colors ul li:nth-child(11) p:before {
        content: "#32aefb"
    }

    .light-blue-colors ul li:nth-child(10) {
        background-color: #41b4fb
    }

    .light-blue-colors ul li:nth-child(10) p:before {
        content: "#41b4fb"
    }

    .light-blue-colors ul li:nth-child(9) {
        background-color: #50bafb
    }

    .light-blue-colors ul li:nth-child(9) p:before {
        content: "#50bafb"
    }

    .light-blue-colors ul li:nth-child(8) {
        background-color: #5fc0fc
    }

    .light-blue-colors ul li:nth-child(8) p:before {
        content: "#5fc0fc"
    }

    .light-blue-colors ul li:nth-child(7) {
        background-color: #6ec6fc
    }

    .light-blue-colors ul li:nth-child(7) p:before {
        content: "#6ec6fc"
    }

    .light-blue-colors ul li:nth-child(6) {
        background-color: #7cccfc
    }

    .light-blue-colors ul li:nth-child(6) p:before {
        content: "#7cccfc"
    }

    .light-blue-colors ul li:nth-child(5) {
        background-color: #8bd2fd
    }

    .light-blue-colors ul li:nth-child(5) p:before {
        content: "#8bd2fd"
    }

    .light-blue-colors ul li:nth-child(4) {
        background-color: #9ad7fd
    }

    .light-blue-colors ul li:nth-child(4) p:before {
        content: "#9ad7fd"
    }

    .light-blue-colors ul li:nth-child(3) {
        background-color: #a9ddfd
    }

    .light-blue-colors ul li:nth-child(3) p:before {
        content: "#a9ddfd"
    }

    .light-blue-colors ul li:nth-child(2) {
        background-color: #b8e3fd
    }

    .light-blue-colors ul li:nth-child(2) p:before {
        content: "#b8e3fd"
    }

    .light-blue-colors ul li:nth-child(1) {
        background-color: #c7e9fe
    }

    .light-blue-colors ul li:nth-child(1) p:before {
        content: "#c7e9fe"
    }

    .cyan-colors ul li:nth-child(14) {
        background-color: #05c6e3
    }

    .cyan-colors ul li:nth-child(14) p:before {
        content: "#05c6e3"
    }

    .cyan-colors ul li:nth-child(13) {
        background-color: #06d3f2
    }

    .cyan-colors ul li:nth-child(13) p:before {
        content: "#06d3f2"
    }

    .cyan-colors ul li:nth-child(12) {
        background-color: #0edbf9
    }

    .cyan-colors ul li:nth-child(12) p:before {
        content: "#0edbf9"
    }

    .cyan-colors ul li:nth-child(11) {
        background-color: #1dddfa
    }

    .cyan-colors ul li:nth-child(11) p:before {
        content: "#1dddfa"
    }

    .cyan-colors ul li:nth-child(10) {
        background-color: #2bdffa
    }

    .cyan-colors ul li:nth-child(10) p:before {
        content: "#2bdffa"
    }

    .cyan-colors ul li:nth-child(9) {
        background-color: #3ae1fa
    }

    .cyan-colors ul li:nth-child(9) p:before {
        content: "#3ae1fa"
    }

    .cyan-colors ul li:nth-child(8) {
        background-color: #49e4fb
    }

    .cyan-colors ul li:nth-child(8) p:before {
        content: "#49e4fb"
    }

    .cyan-colors ul li:nth-child(7) {
        background-color: #58e6fb
    }

    .cyan-colors ul li:nth-child(7) p:before {
        content: "#58e6fb"
    }

    .cyan-colors ul li:nth-child(6) {
        background-color: #67e8fb
    }

    .cyan-colors ul li:nth-child(6) p:before {
        content: "#67e8fb"
    }

    .cyan-colors ul li:nth-child(5) {
        background-color: #76eafc
    }

    .cyan-colors ul li:nth-child(5) p:before {
        content: "#76eafc"
    }

    .cyan-colors ul li:nth-child(4) {
        background-color: #85edfc
    }

    .cyan-colors ul li:nth-child(4) p:before {
        content: "#85edfc"
    }

    .cyan-colors ul li:nth-child(3) {
        background-color: #94effc
    }

    .cyan-colors ul li:nth-child(3) p:before {
        content: "#94effc"
    }

    .cyan-colors ul li:nth-child(2) {
        background-color: #a3f1fd
    }

    .cyan-colors ul li:nth-child(2) p:before {
        content: "#a3f1fd"
    }

    .cyan-colors ul li:nth-child(1) {
        background-color: #b2f3fd
    }

    .cyan-colors ul li:nth-child(1) p:before {
        content: "#b2f3fd"
    }

    .teal-colors ul li:nth-child(14) {
        background-color: #05cfb3
    }

    .teal-colors ul li:nth-child(14) p:before {
        content: "#05cfb3"
    }

    .teal-colors ul li:nth-child(13) {
        background-color: #06dec0
    }

    .teal-colors ul li:nth-child(13) p:before {
        content: "#06dec0"
    }

    .teal-colors ul li:nth-child(12) {
        background-color: #06edcd
    }

    .teal-colors ul li:nth-child(12) p:before {
        content: "#06edcd"
    }

    .teal-colors ul li:nth-child(11) {
        background-color: #0af9d7
    }

    .teal-colors ul li:nth-child(11) p:before {
        content: "#0af9d7"
    }

    .teal-colors ul li:nth-child(10) {
        background-color: #19f9da
    }

    .teal-colors ul li:nth-child(10) p:before {
        content: "#19f9da"
    }

    .teal-colors ul li:nth-child(9) {
        background-color: #27f9dc
    }

    .teal-colors ul li:nth-child(9) p:before {
        content: "#27f9dc"
    }

    .teal-colors ul li:nth-child(8) {
        background-color: #36fadf
    }

    .teal-colors ul li:nth-child(8) p:before {
        content: "#36fadf"
    }

    .teal-colors ul li:nth-child(7) {
        background-color: #45fae1
    }

    .teal-colors ul li:nth-child(7) p:before {
        content: "#45fae1"
    }

    .teal-colors ul li:nth-child(6) {
        background-color: #54fbe3
    }

    .teal-colors ul li:nth-child(6) p:before {
        content: "#54fbe3"
    }

    .teal-colors ul li:nth-child(5) {
        background-color: #63fbe6
    }

    .teal-colors ul li:nth-child(5) p:before {
        content: "#63fbe6"
    }

    .teal-colors ul li:nth-child(4) {
        background-color: #72fbe8
    }

    .teal-colors ul li:nth-child(4) p:before {
        content: "#72fbe8"
    }

    .teal-colors ul li:nth-child(3) {
        background-color: #81fceb
    }

    .teal-colors ul li:nth-child(3) p:before {
        content: "#81fceb"
    }

    .teal-colors ul li:nth-child(2) {
        background-color: #90fced
    }

    .teal-colors ul li:nth-child(2) p:before {
        content: "#90fced"
    }

    .teal-colors ul li:nth-child(1) {
        background-color: #9ffcef
    }

    .teal-colors ul li:nth-child(1) p:before {
        content: "#9ffcef"
    }

    .green-colors ul li:nth-child(14) {
        background-color: #05d85c
    }

    .green-colors ul li:nth-child(14) p:before {
        content: "#05d85c"
    }

    .green-colors ul li:nth-child(13) {
        background-color: #06e763
    }

    .green-colors ul li:nth-child(13) p:before {
        content: "#06e763"
    }

    .green-colors ul li:nth-child(12) {
        background-color: #06f669
    }

    .green-colors ul li:nth-child(12) p:before {
        content: "#06f669"
    }

    .green-colors ul li:nth-child(11) {
        background-color: #12f972
    }

    .green-colors ul li:nth-child(11) p:before {
        content: "#12f972"
    }

    .green-colors ul li:nth-child(10) {
        background-color: #21f97a
    }

    .green-colors ul li:nth-child(10) p:before {
        content: "#21f97a"
    }

    .green-colors ul li:nth-child(9) {
        background-color: #30fa83
    }

    .green-colors ul li:nth-child(9) p:before {
        content: "#30fa83"
    }

    .green-colors ul li:nth-child(8) {
        background-color: #3ffa8c
    }

    .green-colors ul li:nth-child(8) p:before {
        content: "#3ffa8c"
    }

    .green-colors ul li:nth-child(7) {
        background-color: #4efb95
    }

    .green-colors ul li:nth-child(7) p:before {
        content: "#4efb95"
    }

    .green-colors ul li:nth-child(6) {
        background-color: #5dfb9e
    }

    .green-colors ul li:nth-child(6) p:before {
        content: "#5dfb9e"
    }

    .green-colors ul li:nth-child(5) {
        background-color: #6cfba7
    }

    .green-colors ul li:nth-child(5) p:before {
        content: "#6cfba7"
    }

    .green-colors ul li:nth-child(4) {
        background-color: #7bfcb0
    }

    .green-colors ul li:nth-child(4) p:before {
        content: "#7bfcb0"
    }

    .green-colors ul li:nth-child(3) {
        background-color: #8afcb9
    }

    .green-colors ul li:nth-child(3) p:before {
        content: "#8afcb9"
    }

    .green-colors ul li:nth-child(2) {
        background-color: #98fcc2
    }

    .green-colors ul li:nth-child(2) p:before {
        content: "#98fcc2"
    }

    .green-colors ul li:nth-child(1) {
        background-color: #a7fdcb
    }

    .green-colors ul li:nth-child(1) p:before {
        content: "#a7fdcb"
    }

    .light-green-colors ul li:nth-child(14) {
        background-color: #6fe423
    }

    .light-green-colors ul li:nth-child(14) p:before {
        content: "#6fe423"
    }

    .light-green-colors ul li:nth-child(13) {
        background-color: #78e631
    }

    .light-green-colors ul li:nth-child(13) p:before {
        content: "#78e631"
    }

    .light-green-colors ul li:nth-child(12) {
        background-color: #81e73e
    }

    .light-green-colors ul li:nth-child(12) p:before {
        content: "#81e73e"
    }

    .light-green-colors ul li:nth-child(11) {
        background-color: #8ae94c
    }

    .light-green-colors ul li:nth-child(11) p:before {
        content: "#8ae94c"
    }

    .light-green-colors ul li:nth-child(10) {
        background-color: #93eb5a
    }

    .light-green-colors ul li:nth-child(10) p:before {
        content: "#93eb5a"
    }

    .light-green-colors ul li:nth-child(9) {
        background-color: #9bec67
    }

    .light-green-colors ul li:nth-child(9) p:before {
        content: "#9bec67"
    }

    .light-green-colors ul li:nth-child(8) {
        background-color: #a4ee75
    }

    .light-green-colors ul li:nth-child(8) p:before {
        content: "#a4ee75"
    }

    .light-green-colors ul li:nth-child(7) {
        background-color: #adf083
    }

    .light-green-colors ul li:nth-child(7) p:before {
        content: "#adf083"
    }

    .light-green-colors ul li:nth-child(6) {
        background-color: #b6f190
    }

    .light-green-colors ul li:nth-child(6) p:before {
        content: "#b6f190"
    }

    .light-green-colors ul li:nth-child(5) {
        background-color: #bff39e
    }

    .light-green-colors ul li:nth-child(5) p:before {
        content: "#bff39e"
    }

    .light-green-colors ul li:nth-child(4) {
        background-color: #c8f5ac
    }

    .light-green-colors ul li:nth-child(4) p:before {
        content: "#c8f5ac"
    }

    .light-green-colors ul li:nth-child(3) {
        background-color: #d1f6b9
    }

    .light-green-colors ul li:nth-child(3) p:before {
        content: "#d1f6b9"
    }

    .light-green-colors ul li:nth-child(2) {
        background-color: #daf8c7
    }

    .light-green-colors ul li:nth-child(2) p:before {
        content: "#daf8c7"
    }

    .light-green-colors ul li:nth-child(1) {
        background-color: #e3fad4
    }

    .light-green-colors ul li:nth-child(1) p:before {
        content: "#e3fad4"
    }

    .lime-colors ul li:nth-child(14) {
        background-color: #baf905
    }

    .lime-colors ul li:nth-child(14) p:before {
        content: "#baf905"
    }

    .lime-colors ul li:nth-child(13) {
        background-color: #bffa14
    }

    .lime-colors ul li:nth-child(13) p:before {
        content: "#bffa14"
    }

    .lime-colors ul li:nth-child(12) {
        background-color: #c3fa23
    }

    .lime-colors ul li:nth-child(12) p:before {
        content: "#c3fa23"
    }

    .lime-colors ul li:nth-child(11) {
        background-color: #c7fb32
    }

    .lime-colors ul li:nth-child(11) p:before {
        content: "#c7fb32"
    }

    .lime-colors ul li:nth-child(10) {
        background-color: #cbfb41
    }

    .lime-colors ul li:nth-child(10) p:before {
        content: "#cbfb41"
    }

    .lime-colors ul li:nth-child(9) {
        background-color: #cffb50
    }

    .lime-colors ul li:nth-child(9) p:before {
        content: "#cffb50"
    }

    .lime-colors ul li:nth-child(8) {
        background-color: #d3fc5f
    }

    .lime-colors ul li:nth-child(8) p:before {
        content: "#d3fc5f"
    }

    .lime-colors ul li:nth-child(7) {
        background-color: #d7fc6e
    }

    .lime-colors ul li:nth-child(7) p:before {
        content: "#d7fc6e"
    }

    .lime-colors ul li:nth-child(6) {
        background-color: #dbfc7c
    }

    .lime-colors ul li:nth-child(6) p:before {
        content: "#dbfc7c"
    }

    .lime-colors ul li:nth-child(5) {
        background-color: #dffd8b
    }

    .lime-colors ul li:nth-child(5) p:before {
        content: "#dffd8b"
    }

    .lime-colors ul li:nth-child(4) {
        background-color: #e3fd9a
    }

    .lime-colors ul li:nth-child(4) p:before {
        content: "#e3fd9a"
    }

    .lime-colors ul li:nth-child(3) {
        background-color: #e8fda9
    }

    .lime-colors ul li:nth-child(3) p:before {
        content: "#e8fda9"
    }

    .lime-colors ul li:nth-child(2) {
        background-color: #ecfdb8
    }

    .lime-colors ul li:nth-child(2) p:before {
        content: "#ecfdb8"
    }

    .lime-colors ul li:nth-child(1) {
        background-color: #f0fec7
    }

    .lime-colors ul li:nth-child(1) p:before {
        content: "#f0fec7"
    }

    .yellow-colors ul li:nth-child(14) {
        background-color: #ffd812
    }

    .yellow-colors ul li:nth-child(14) p:before {
        content: "#ffd812"
    }

    .yellow-colors ul li:nth-child(13) {
        background-color: #ffda1f
    }

    .yellow-colors ul li:nth-child(13) p:before {
        content: "#ffda1f"
    }

    .yellow-colors ul li:nth-child(12) {
        background-color: #ffdc2b
    }

    .yellow-colors ul li:nth-child(12) p:before {
        content: "#ffdc2b"
    }

    .yellow-colors ul li:nth-child(11) {
        background-color: #ffde38
    }

    .yellow-colors ul li:nth-child(11) p:before {
        content: "#ffde38"
    }

    .yellow-colors ul li:nth-child(10) {
        background-color: #ffe045
    }

    .yellow-colors ul li:nth-child(10) p:before {
        content: "#ffe045"
    }

    .yellow-colors ul li:nth-child(9) {
        background-color: #ffe352
    }

    .yellow-colors ul li:nth-child(9) p:before {
        content: "#ffe352"
    }

    .yellow-colors ul li:nth-child(8) {
        background-color: #ffe55e
    }

    .yellow-colors ul li:nth-child(8) p:before {
        content: "#ffe55e"
    }

    .yellow-colors ul li:nth-child(7) {
        background-color: #ffe76b
    }

    .yellow-colors ul li:nth-child(7) p:before {
        content: "#ffe76b"
    }

    .yellow-colors ul li:nth-child(6) {
        background-color: #ffe978
    }

    .yellow-colors ul li:nth-child(6) p:before {
        content: "#ffe978"
    }

    .yellow-colors ul li:nth-child(5) {
        background-color: #ffeb85
    }

    .yellow-colors ul li:nth-child(5) p:before {
        content: "#ffeb85"
    }

    .yellow-colors ul li:nth-child(4) {
        background-color: #ffed91
    }

    .yellow-colors ul li:nth-child(4) p:before {
        content: "#ffed91"
    }

    .yellow-colors ul li:nth-child(3) {
        background-color: #ffef9e
    }

    .yellow-colors ul li:nth-child(3) p:before {
        content: "#ffef9e"
    }

    .yellow-colors ul li:nth-child(2) {
        background-color: #fff1ab
    }

    .yellow-colors ul li:nth-child(2) p:before {
        content: "#fff1ab"
    }

    .yellow-colors ul li:nth-child(1) {
        background-color: #fff3b8
    }

    .yellow-colors ul li:nth-child(1) p:before {
        content: "#fff3b8"
    }

    .amber-colors ul li:nth-child(14) {
        background-color: #ffb012
    }

    .amber-colors ul li:nth-child(14) p:before {
        content: "#ffb012"
    }

    .amber-colors ul li:nth-child(13) {
        background-color: #ffb41f
    }

    .amber-colors ul li:nth-child(13) p:before {
        content: "#ffb41f"
    }

    .amber-colors ul li:nth-child(12) {
        background-color: #ffb92b
    }

    .amber-colors ul li:nth-child(12) p:before {
        content: "#ffb92b"
    }

    .amber-colors ul li:nth-child(11) {
        background-color: #ffbd38
    }

    .amber-colors ul li:nth-child(11) p:before {
        content: "#ffbd38"
    }

    .amber-colors ul li:nth-child(10) {
        background-color: #ffc145
    }

    .amber-colors ul li:nth-child(10) p:before {
        content: "#ffc145"
    }

    .amber-colors ul li:nth-child(9) {
        background-color: #ffc552
    }

    .amber-colors ul li:nth-child(9) p:before {
        content: "#ffc552"
    }

    .amber-colors ul li:nth-child(8) {
        background-color: #ffca5e
    }

    .amber-colors ul li:nth-child(8) p:before {
        content: "#ffca5e"
    }

    .amber-colors ul li:nth-child(7) {
        background-color: #ffce6b
    }

    .amber-colors ul li:nth-child(7) p:before {
        content: "#ffce6b"
    }

    .amber-colors ul li:nth-child(6) {
        background-color: #ffd278
    }

    .amber-colors ul li:nth-child(6) p:before {
        content: "#ffd278"
    }

    .amber-colors ul li:nth-child(5) {
        background-color: #ffd685
    }

    .amber-colors ul li:nth-child(5) p:before {
        content: "#ffd685"
    }

    .amber-colors ul li:nth-child(4) {
        background-color: #ffdb91
    }

    .amber-colors ul li:nth-child(4) p:before {
        content: "#ffdb91"
    }

    .amber-colors ul li:nth-child(3) {
        background-color: #ffdf9e
    }

    .amber-colors ul li:nth-child(3) p:before {
        content: "#ffdf9e"
    }

    .amber-colors ul li:nth-child(2) {
        background-color: #ffe3ab
    }

    .amber-colors ul li:nth-child(2) p:before {
        content: "#ffe3ab"
    }

    .amber-colors ul li:nth-child(1) {
        background-color: #ffe7b8
    }

    .amber-colors ul li:nth-child(1) p:before {
        content: "#ffe7b8"
    }

    .orange-colors ul li:nth-child(14) {
        background-color: #ff7814
    }

    .orange-colors ul li:nth-child(14) p:before {
        content: "#ff7814"
    }

    .orange-colors ul li:nth-child(13) {
        background-color: #ff8124
    }

    .orange-colors ul li:nth-child(13) p:before {
        content: "#ff8124"
    }

    .orange-colors ul li:nth-child(12) {
        background-color: #ff8933
    }

    .orange-colors ul li:nth-child(12) p:before {
        content: "#ff8933"
    }

    .orange-colors ul li:nth-child(11) {
        background-color: #ff9242
    }

    .orange-colors ul li:nth-child(11) p:before {
        content: "#ff9242"
    }

    .orange-colors ul li:nth-child(10) {
        background-color: #ff9b52
    }

    .orange-colors ul li:nth-child(10) p:before {
        content: "#ff9b52"
    }

    .orange-colors ul li:nth-child(9) {
        background-color: #ffa461
    }

    .orange-colors ul li:nth-child(9) p:before {
        content: "#ffa461"
    }

    .orange-colors ul li:nth-child(8) {
        background-color: #ffad70
    }

    .orange-colors ul li:nth-child(8) p:before {
        content: "#ffad70"
    }

    .orange-colors ul li:nth-child(7) {
        background-color: #ffb67f
    }

    .orange-colors ul li:nth-child(7) p:before {
        content: "#ffb67f"
    }

    .orange-colors ul li:nth-child(6) {
        background-color: #ffbe8f
    }

    .orange-colors ul li:nth-child(6) p:before {
        content: "#ffbe8f"
    }

    .orange-colors ul li:nth-child(5) {
        background-color: #ffc79e
    }

    .orange-colors ul li:nth-child(5) p:before {
        content: "#ffc79e"
    }

    .orange-colors ul li:nth-child(4) {
        background-color: #ffd0ad
    }

    .orange-colors ul li:nth-child(4) p:before {
        content: "#ffd0ad"
    }

    .orange-colors ul li:nth-child(3) {
        background-color: #ffd9bd
    }

    .orange-colors ul li:nth-child(3) p:before {
        content: "#ffd9bd"
    }

    .orange-colors ul li:nth-child(2) {
        background-color: #ffe2cc
    }

    .orange-colors ul li:nth-child(2) p:before {
        content: "#ffe2cc"
    }

    .orange-colors ul li:nth-child(1) {
        background-color: #ffeadb
    }

    .orange-colors ul li:nth-child(1) p:before {
        content: "#ffeadb"
    }

    .deep-orange-colors ul li:nth-child(14) {
        background-color: #ec3305
    }

    .deep-orange-colors ul li:nth-child(14) p:before {
        content: "#ec3305"
    }

    .deep-orange-colors ul li:nth-child(13) {
        background-color: #f93707
    }

    .deep-orange-colors ul li:nth-child(13) p:before {
        content: "#f93707"
    }

    .deep-orange-colors ul li:nth-child(12) {
        background-color: #fa4316
    }

    .deep-orange-colors ul li:nth-child(12) p:before {
        content: "#fa4316"
    }

    .deep-orange-colors ul li:nth-child(11) {
        background-color: #fa5025
    }

    .deep-orange-colors ul li:nth-child(11) p:before {
        content: "#fa5025"
    }

    .deep-orange-colors ul li:nth-child(10) {
        background-color: #fa5c34
    }

    .deep-orange-colors ul li:nth-child(10) p:before {
        content: "#fa5c34"
    }

    .deep-orange-colors ul li:nth-child(9) {
        background-color: #fb6843
    }

    .deep-orange-colors ul li:nth-child(9) p:before {
        content: "#fb6843"
    }

    .deep-orange-colors ul li:nth-child(8) {
        background-color: #fb7452
    }

    .deep-orange-colors ul li:nth-child(8) p:before {
        content: "#fb7452"
    }

    .deep-orange-colors ul li:nth-child(7) {
        background-color: #fb8061
    }

    .deep-orange-colors ul li:nth-child(7) p:before {
        content: "#fb8061"
    }

    .deep-orange-colors ul li:nth-child(6) {
        background-color: #fc8c70
    }

    .deep-orange-colors ul li:nth-child(6) p:before {
        content: "#fc8c70"
    }

    .deep-orange-colors ul li:nth-child(5) {
        background-color: #fc987f
    }

    .deep-orange-colors ul li:nth-child(5) p:before {
        content: "#fc987f"
    }

    .deep-orange-colors ul li:nth-child(4) {
        background-color: #fca48e
    }

    .deep-orange-colors ul li:nth-child(4) p:before {
        content: "#fca48e"
    }

    .deep-orange-colors ul li:nth-child(3) {
        background-color: #fdb09d
    }

    .deep-orange-colors ul li:nth-child(3) p:before {
        content: "#fdb09d"
    }

    .deep-orange-colors ul li:nth-child(2) {
        background-color: #fdbcac
    }

    .deep-orange-colors ul li:nth-child(2) p:before {
        content: "#fdbcac"
    }

    .deep-orange-colors ul li:nth-child(1) {
        background-color: #fdc8bb
    }

    .deep-orange-colors ul li:nth-child(1) p:before {
        content: "#fdc8bb"
    }

    .brown-colors ul li:nth-child(14) {
        background-color: #513631
    }

    .brown-colors ul li:nth-child(14) p:before {
        content: "#513631"
    }

    .brown-colors ul li:nth-child(13) {
        background-color: #61403a
    }

    .brown-colors ul li:nth-child(13) p:before {
        content: "#61403a"
    }

    .brown-colors ul li:nth-child(12) {
        background-color: #714b44
    }

    .brown-colors ul li:nth-child(12) p:before {
        content: "#714b44"
    }

    .brown-colors ul li:nth-child(11) {
        background-color: #81554d
    }

    .brown-colors ul li:nth-child(11) p:before {
        content: "#81554d"
    }

    .brown-colors ul li:nth-child(10) {
        background-color: #916057
    }

    .brown-colors ul li:nth-child(10) p:before {
        content: "#916057"
    }

    .brown-colors ul li:nth-child(9) {
        background-color: #a06b61
    }

    .brown-colors ul li:nth-child(9) p:before {
        content: "#a06b61"
    }

    .brown-colors ul li:nth-child(8) {
        background-color: #aa7a71
    }

    .brown-colors ul li:nth-child(8) p:before {
        content: "#aa7a71"
    }

    .brown-colors ul li:nth-child(7) {
        background-color: #b38981
    }

    .brown-colors ul li:nth-child(7) p:before {
        content: "#b38981"
    }

    .brown-colors ul li:nth-child(6) {
        background-color: #bd9791
    }

    .brown-colors ul li:nth-child(6) p:before {
        content: "#bd9791"
    }

    .brown-colors ul li:nth-child(5) {
        background-color: #c6a6a1
    }

    .brown-colors ul li:nth-child(5) p:before {
        content: "#c6a6a1"
    }

    .brown-colors ul li:nth-child(4) {
        background-color: #d0b5b1
    }

    .brown-colors ul li:nth-child(4) p:before {
        content: "#d0b5b1"
    }

    .brown-colors ul li:nth-child(3) {
        background-color: #dac4c1
    }

    .brown-colors ul li:nth-child(3) p:before {
        content: "#dac4c1"
    }

    .brown-colors ul li:nth-child(2) {
        background-color: #e3d3d0
    }

    .brown-colors ul li:nth-child(2) p:before {
        content: "#e3d3d0"
    }

    .brown-colors ul li:nth-child(1) {
        background-color: #ede2e0
    }

    .brown-colors ul li:nth-child(1) p:before {
        content: "#ede2e0"
    }

    .grey-colors ul li:nth-child(14) {
        background-color: #323232
    }

    .grey-colors ul li:nth-child(14) p:before {
        content: "#323232"
    }

    .grey-colors ul li:nth-child(13) {
        background-color: #3f3f3f
    }

    .grey-colors ul li:nth-child(13) p:before {
        content: "#3f3f3f"
    }

    .grey-colors ul li:nth-child(12) {
        background-color: #4b4b4b
    }

    .grey-colors ul li:nth-child(12) p:before {
        content: "#4b4b4b"
    }

    .grey-colors ul li:nth-child(11) {
        background-color: #585858
    }

    .grey-colors ul li:nth-child(11) p:before {
        content: "#585858"
    }

    .grey-colors ul li:nth-child(10) {
        background-color: #656565
    }

    .grey-colors ul li:nth-child(10) p:before {
        content: "#656565"
    }

    .grey-colors ul li:nth-child(9) {
        background-color: #727272
    }

    .grey-colors ul li:nth-child(9) p:before {
        content: "#727272"
    }

    .grey-colors ul li:nth-child(8) {
        background-color: #7e7e7e
    }

    .grey-colors ul li:nth-child(8) p:before {
        content: "#7e7e7e"
    }

    .grey-colors ul li:nth-child(7) {
        background-color: #8b8b8b
    }

    .grey-colors ul li:nth-child(7) p:before {
        content: "#8b8b8b"
    }

    .grey-colors ul li:nth-child(6) {
        background-color: #989898
    }

    .grey-colors ul li:nth-child(6) p:before {
        content: "#989898"
    }

    .grey-colors ul li:nth-child(5) {
        background-color: #a5a5a5
    }

    .grey-colors ul li:nth-child(5) p:before {
        content: "#a5a5a5"
    }

    .grey-colors ul li:nth-child(4) {
        background-color: #b1b1b1
    }

    .grey-colors ul li:nth-child(4) p:before {
        content: "#b1b1b1"
    }

    .grey-colors ul li:nth-child(3) {
        background-color: #bebebe
    }

    .grey-colors ul li:nth-child(3) p:before {
        content: "#bebebe"
    }

    .grey-colors ul li:nth-child(2) {
        background-color: #cbcbcb
    }

    .grey-colors ul li:nth-child(2) p:before {
        content: "#cbcbcb"
    }

    .grey-colors ul li:nth-child(1) {
        background-color: #d8d8d8
    }

    .grey-colors ul li:nth-child(1) p:before {
        content: "#d8d8d8"
    }

    .blue-grey-colors ul li:nth-child(14) {
        background-color: #35444a
    }

    .blue-grey-colors ul li:nth-child(14) p:before {
        content: "#35444a"
    }

    .blue-grey-colors ul li:nth-child(13) {
        background-color: #3f5159
    }

    .blue-grey-colors ul li:nth-child(13) p:before {
        content: "#3f5159"
    }

    .blue-grey-colors ul li:nth-child(12) {
        background-color: #4a5f68
    }

    .blue-grey-colors ul li:nth-child(12) p:before {
        content: "#4a5f68"
    }

    .blue-grey-colors ul li:nth-child(11) {
        background-color: #546d77
    }

    .blue-grey-colors ul li:nth-child(11) p:before {
        content: "#546d77"
    }

    .blue-grey-colors ul li:nth-child(10) {
        background-color: #5f7a85
    }

    .blue-grey-colors ul li:nth-child(10) p:before {
        content: "#5f7a85"
    }

    .blue-grey-colors ul li:nth-child(9) {
        background-color: #6a8894
    }

    .blue-grey-colors ul li:nth-child(9) p:before {
        content: "#6a8894"
    }

    .blue-grey-colors ul li:nth-child(8) {
        background-color: #78949f
    }

    .blue-grey-colors ul li:nth-child(8) p:before {
        content: "#78949f"
    }

    .blue-grey-colors ul li:nth-child(7) {
        background-color: #87a0aa
    }

    .blue-grey-colors ul li:nth-child(7) p:before {
        content: "#87a0aa"
    }

    .blue-grey-colors ul li:nth-child(6) {
        background-color: #96abb4
    }

    .blue-grey-colors ul li:nth-child(6) p:before {
        content: "#96abb4"
    }

    .blue-grey-colors ul li:nth-child(5) {
        background-color: #a5b7bf
    }

    .blue-grey-colors ul li:nth-child(5) p:before {
        content: "#a5b7bf"
    }

    .blue-grey-colors ul li:nth-child(4) {
        background-color: #b4c3ca
    }

    .blue-grey-colors ul li:nth-child(4) p:before {
        content: "#b4c3ca"
    }

    .blue-grey-colors ul li:nth-child(3) {
        background-color: #c3cfd4
    }

    .blue-grey-colors ul li:nth-child(3) p:before {
        content: "#c3cfd4"
    }

    .blue-grey-colors ul li:nth-child(2) {
        background-color: #d2dbdf
    }

    .blue-grey-colors ul li:nth-child(2) p:before {
        content: "#d2dbdf"
    }

    .blue-grey-colors ul li:nth-child(1) {
        background-color: #e1e7e9
    }

    .blue-grey-colors ul li:nth-child(1) p:before {
        content: "#e1e7e9"
    }

    .primary-colorr ul li:nth-child(14) {
        background-color: #1cc9a7
    }

    .primary-colorr ul li:nth-child(14) p:before {
        content: "#1cc9a7"
    }

    .primary-colorr ul li:nth-child(13) {
        background-color: #1ed7b2
    }

    .primary-colorr ul li:nth-child(13) p:before {
        content: "#1ed7b2"
    }

    .primary-colorr ul li:nth-child(12) {
        background-color: #23e1bb
    }

    .primary-colorr ul li:nth-child(12) p:before {
        content: "#23e1bb"
    }

    .primary-colorr ul li:nth-child(11) {
        background-color: #31e2bf
    }

    .primary-colorr ul li:nth-child(11) p:before {
        content: "#31e2bf"
    }

    .primary-colorr ul li:nth-child(10) {
        background-color: #3ee4c4
    }

    .primary-colorr ul li:nth-child(10) p:before {
        content: "#3ee4c4"
    }

    .primary-colorr ul li:nth-child(9) {
        background-color: #4ce6c8
    }

    .primary-colorr ul li:nth-child(9) p:before {
        content: "#4ce6c8"
    }

    .primary-colorr ul li:nth-child(8) {
        background-color: #59e8cc
    }

    .primary-colorr ul li:nth-child(8) p:before {
        content: "#59e8cc"
    }

    .primary-colorr ul li:nth-child(7) {
        background-color: #66ead0
    }

    .primary-colorr ul li:nth-child(7) p:before {
        content: "#66ead0"
    }

    .primary-colorr ul li:nth-child(6) {
        background-color: #74ecd4
    }

    .primary-colorr ul li:nth-child(6) p:before {
        content: "#74ecd4"
    }

    .primary-colorr ul li:nth-child(5) {
        background-color: #81eed8
    }

    .primary-colorr ul li:nth-child(5) p:before {
        content: "#81eed8"
    }

    .primary-colorr ul li:nth-child(4) {
        background-color: #8fefdc
    }

    .primary-colorr ul li:nth-child(4) p:before {
        content: "#8fefdc"
    }

    .primary-colorr ul li:nth-child(3) {
        background-color: #9cf1e1
    }

    .primary-colorr ul li:nth-child(3) p:before {
        content: "#9cf1e1"
    }

    .primary-colorr ul li:nth-child(2) {
        background-color: #aaf3e5
    }

    .primary-colorr ul li:nth-child(2) p:before {
        content: "#aaf3e5"
    }

    .primary-colorr ul li:nth-child(1) {
        background-color: #b7f5e9
    }

    .primary-colorr ul li:nth-child(1) p:before {
        content: "#b7f5e9"
    }

    .success-colorr ul li:nth-child(14) {
        background-color: #33d176
    }

    .success-colorr ul li:nth-child(14) p:before {
        content: "#33d176"
    }

    .success-colorr ul li:nth-child(13) {
        background-color: #3bd37c
    }

    .success-colorr ul li:nth-child(13) p:before {
        content: "#3bd37c"
    }

    .success-colorr ul li:nth-child(12) {
        background-color: #44d581
    }

    .success-colorr ul li:nth-child(12) p:before {
        content: "#44d581"
    }

    .success-colorr ul li:nth-child(11) {
        background-color: #4cd787
    }

    .success-colorr ul li:nth-child(11) p:before {
        content: "#4cd787"
    }

    .success-colorr ul li:nth-child(10) {
        background-color: #54d98c
    }

    .success-colorr ul li:nth-child(10) p:before {
        content: "#54d98c"
    }

    .success-colorr ul li:nth-child(9) {
        background-color: #5dda92
    }

    .success-colorr ul li:nth-child(9) p:before {
        content: "#5dda92"
    }

    .success-colorr ul li:nth-child(8) {
        background-color: #65dc98
    }

    .success-colorr ul li:nth-child(8) p:before {
        content: "#65dc98"
    }

    .success-colorr ul li:nth-child(7) {
        background-color: #6dde9d
    }

    .success-colorr ul li:nth-child(7) p:before {
        content: "#6dde9d"
    }

    .success-colorr ul li:nth-child(6) {
        background-color: #76e0a3
    }

    .success-colorr ul li:nth-child(6) p:before {
        content: "#76e0a3"
    }

    .success-colorr ul li:nth-child(5) {
        background-color: #7ee2a8
    }

    .success-colorr ul li:nth-child(5) p:before {
        content: "#7ee2a8"
    }

    .success-colorr ul li:nth-child(4) {
        background-color: #86e4ae
    }

    .success-colorr ul li:nth-child(4) p:before {
        content: "#86e4ae"
    }

    .success-colorr ul li:nth-child(3) {
        background-color: #8fe6b4
    }

    .success-colorr ul li:nth-child(3) p:before {
        content: "#8fe6b4"
    }

    .success-colorr ul li:nth-child(2) {
        background-color: #97e8b9
    }

    .success-colorr ul li:nth-child(2) p:before {
        content: "#97e8b9"
    }

    .success-colorr ul li:nth-child(1) {
        background-color: #9fe9bf
    }

    .success-colorr ul li:nth-child(1) p:before {
        content: "#9fe9bf"
    }

    .info-colorr ul li:nth-child(14) {
        background-color: #3d9cdd
    }

    .info-colorr ul li:nth-child(14) p:before {
        content: "#3d9cdd"
    }

    .info-colorr ul li:nth-child(13) {
        background-color: #45a1de
    }

    .info-colorr ul li:nth-child(13) p:before {
        content: "#45a1de"
    }

    .info-colorr ul li:nth-child(12) {
        background-color: #4ea5e0
    }

    .info-colorr ul li:nth-child(12) p:before {
        content: "#4ea5e0"
    }

    .info-colorr ul li:nth-child(11) {
        background-color: #57aae1
    }

    .info-colorr ul li:nth-child(11) p:before {
        content: "#57aae1"
    }

    .info-colorr ul li:nth-child(10) {
        background-color: #5faee3
    }

    .info-colorr ul li:nth-child(10) p:before {
        content: "#5faee3"
    }

    .info-colorr ul li:nth-child(9) {
        background-color: #68b2e4
    }

    .info-colorr ul li:nth-child(9) p:before {
        content: "#68b2e4"
    }

    .info-colorr ul li:nth-child(8) {
        background-color: #71b7e6
    }

    .info-colorr ul li:nth-child(8) p:before {
        content: "#71b7e6"
    }

    .info-colorr ul li:nth-child(7) {
        background-color: #79bbe7
    }

    .info-colorr ul li:nth-child(7) p:before {
        content: "#79bbe7"
    }

    .info-colorr ul li:nth-child(6) {
        background-color: #82c0e9
    }

    .info-colorr ul li:nth-child(6) p:before {
        content: "#82c0e9"
    }

    .info-colorr ul li:nth-child(5) {
        background-color: #8bc4ea
    }

    .info-colorr ul li:nth-child(5) p:before {
        content: "#8bc4ea"
    }

    .info-colorr ul li:nth-child(4) {
        background-color: #93c8ec
    }

    .info-colorr ul li:nth-child(4) p:before {
        content: "#93c8ec"
    }

    .info-colorr ul li:nth-child(3) {
        background-color: #9ccded
    }

    .info-colorr ul li:nth-child(3) p:before {
        content: "#9ccded"
    }

    .info-colorr ul li:nth-child(2) {
        background-color: #a5d1ef
    }

    .info-colorr ul li:nth-child(2) p:before {
        content: "#a5d1ef"
    }

    .info-colorr ul li:nth-child(1) {
        background-color: #add6f1
    }

    .info-colorr ul li:nth-child(1) p:before {
        content: "#add6f1"
    }

    .warning-colorr ul li:nth-child(14) {
        background-color: #f2c619
    }

    .warning-colorr ul li:nth-child(14) p:before {
        content: "#f2c619"
    }

    .warning-colorr ul li:nth-child(13) {
        background-color: #f2c922
    }

    .warning-colorr ul li:nth-child(13) p:before {
        content: "#f2c922"
    }

    .warning-colorr ul li:nth-child(12) {
        background-color: #f3cb2c
    }

    .warning-colorr ul li:nth-child(12) p:before {
        content: "#f3cb2c"
    }

    .warning-colorr ul li:nth-child(11) {
        background-color: #f3cd36
    }

    .warning-colorr ul li:nth-child(11) p:before {
        content: "#f3cd36"
    }

    .warning-colorr ul li:nth-child(10) {
        background-color: #f4d03f
    }

    .warning-colorr ul li:nth-child(10) p:before {
        content: "#f4d03f"
    }

    .warning-colorr ul li:nth-child(9) {
        background-color: #f4d249
    }

    .warning-colorr ul li:nth-child(9) p:before {
        content: "#f4d249"
    }

    .warning-colorr ul li:nth-child(8) {
        background-color: #f5d552
    }

    .warning-colorr ul li:nth-child(8) p:before {
        content: "#f5d552"
    }

    .warning-colorr ul li:nth-child(7) {
        background-color: #f5d75c
    }

    .warning-colorr ul li:nth-child(7) p:before {
        content: "#f5d75c"
    }

    .warning-colorr ul li:nth-child(6) {
        background-color: #f6d966
    }

    .warning-colorr ul li:nth-child(6) p:before {
        content: "#f6d966"
    }

    .warning-colorr ul li:nth-child(5) {
        background-color: #f7dc6f
    }

    .warning-colorr ul li:nth-child(5) p:before {
        content: "#f7dc6f"
    }

    .warning-colorr ul li:nth-child(4) {
        background-color: #f7de79
    }

    .warning-colorr ul li:nth-child(4) p:before {
        content: "#f7de79"
    }

    .warning-colorr ul li:nth-child(3) {
        background-color: #f8e083
    }

    .warning-colorr ul li:nth-child(3) p:before {
        content: "#f8e083"
    }

    .warning-colorr ul li:nth-child(2) {
        background-color: #f8e38c
    }

    .warning-colorr ul li:nth-child(2) p:before {
        content: "#f8e38c"
    }

    .warning-colorr ul li:nth-child(1) {
        background-color: #f9e596
    }

    .warning-colorr ul li:nth-child(1) p:before {
        content: "#f9e596"
    }

    .danger-colorr ul li:nth-child(14) {
        background-color: #e85445
    }

    .danger-colorr ul li:nth-child(14) p:before {
        content: "#e85445"
    }

    .danger-colorr ul li:nth-child(13) {
        background-color: #e95d4e
    }

    .danger-colorr ul li:nth-child(13) p:before {
        content: "#e95d4e"
    }

    .danger-colorr ul li:nth-child(12) {
        background-color: #ea6557
    }

    .danger-colorr ul li:nth-child(12) p:before {
        content: "#ea6557"
    }

    .danger-colorr ul li:nth-child(11) {
        background-color: #eb6d60
    }

    .danger-colorr ul li:nth-child(11) p:before {
        content: "#eb6d60"
    }

    .danger-colorr ul li:nth-child(10) {
        background-color: #ed7669
    }

    .danger-colorr ul li:nth-child(10) p:before {
        content: "#ed7669"
    }

    .danger-colorr ul li:nth-child(9) {
        background-color: #ee7e72
    }

    .danger-colorr ul li:nth-child(9) p:before {
        content: "#ee7e72"
    }

    .danger-colorr ul li:nth-child(8) {
        background-color: #ef867c
    }

    .danger-colorr ul li:nth-child(8) p:before {
        content: "#ef867c"
    }

    .danger-colorr ul li:nth-child(7) {
        background-color: #f08f85
    }

    .danger-colorr ul li:nth-child(7) p:before {
        content: "#f08f85"
    }

    .danger-colorr ul li:nth-child(6) {
        background-color: #f1978e
    }

    .danger-colorr ul li:nth-child(6) p:before {
        content: "#f1978e"
    }

    .danger-colorr ul li:nth-child(5) {
        background-color: #f29f97
    }

    .danger-colorr ul li:nth-child(5) p:before {
        content: "#f29f97"
    }

    .danger-colorr ul li:nth-child(4) {
        background-color: #f3a8a0
    }

    .danger-colorr ul li:nth-child(4) p:before {
        content: "#f3a8a0"
    }

    .danger-colorr ul li:nth-child(3) {
        background-color: #f4b0a9
    }

    .danger-colorr ul li:nth-child(3) p:before {
        content: "#f4b0a9"
    }

    .danger-colorr ul li:nth-child(2) {
        background-color: #f6b8b2
    }

    .danger-colorr ul li:nth-child(2) p:before {
        content: "#f6b8b2"
    }

    .danger-colorr ul li:nth-child(1) {
        background-color: #f7c1bb
    }

    .danger-colorr ul li:nth-child(1) p:before {
        content: "#f7c1bb"
    }

    #draggableMultiple .sortable-moves {
        cursor: move;
        margin-bottom: 0;
        -webkit-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .14);
        box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .14);
        margin-bottom: 20px;
        padding: 15px 0 15px 60px
    }

    .sortable-moves {
        font-size: 14px;
        line-height: 1.55556em;
        list-style-type: none;
        margin-bottom: 15px;
        min-height: 3.55556em;
        padding-left: 5.11111em;
        position: relative;
        cursor: move
    }

    .sortable-moves img {
        position: absolute;
        height: 40px;
        left: 10px;
        border-radius: 5px;
        top: 15px
    }

    .sortable-moves h6 {
        font-weight: 600
    }

    .card-sub {
        cursor: move;
        border: none;
        -webkit-box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05);
        box-shadow: 0 0 1px 2px rgba(0, 0, 0, .05), 0 -2px 1px -2px rgba(0, 0, 0, .04), 0 0 0 -1px rgba(0, 0, 0, .05)
    }

    .card-sub:hover {
        -webkit-box-shadow: 0 0 25px -5px #9e9c9e;
        box-shadow: 0 0 25px -5px #9e9c9e;
        -webkit-transition: all 180ms linear;
        transition: all 180ms linear
    }

    .payment-card .icofont-paypal-alt, .payment-card .icofont-visa-alt, .payment-card .icofont-mastercard {
        display: block;
        font-size: 60px;
        color: #ed5565
    }

    .payment-card .icofont-visa-alt {
        color: #1c84c6
    }

    .payment-card .icofont-mastercard {
        color: #f8ac59
    }

    .payment-tabs .md-tabs.nav-tabs .nav-item {
        width: calc(100% / 6)
    }

    .payment-tabs .nav-tabs .slide, .payment-tabs .md-tabs .nav-item + .nav-item {
        width: calc(100% / 6)
    }

    .demo-container {
        padding-bottom: 0
    }

    .jp-card .jp-card-front, .jp-card .jp-card-back {
        background: #01a9ac !important
    }

    .payment-form {
        max-width: 550px;
        margin: 0 auto;
        padding: 20px;
        padding-bottom: 0
    }

    .ace_editor {
        width: 100% !important;
        position: relative !important;
        margin-top: 20px
    }

    .long-press:focus {
        outline-color: #01a9ac
    }

    .inputor:focus {
        border-color: #01a9ac
    }

    #edui1 {
        width: auto !important
    }

    .tab-pane form .md-add-on i {
        font-size: 20px
    }

    .wall-elips {
        position: absolute;
        right: 15px
    }

    .social-wallpaper {
        position: relative
    }

    .social-profile {
        position: relative;
        padding-top: 15px
    }

    .timeline-btn {
        position: absolute;
        bottom: 0;
        right: 30px
    }

    .nav-tabs.md-tabs.tab-timeline li a {
        padding: 20px 0 10px;
        color: #404e67;
        font-size: 16px
    }

    .social-timeline-left {
        position: absolute;
        top: -200px;
        margin-right: 15px
    }

    .post-input {
        padding: 10px 10px 10px 5px;
        display: block;
        width: 100%;
        border: none;
        resize: none
    }

    .user-box .media-object, .friend-box .media-object {
        height: 45px;
        width: 45px;
        display: inline-block;
        cursor: pointer
    }

    .friend-box img {
        margin-right: 10px;
        margin-bottom: 10px
    }

    .chat-header {
        color: #222
    }

    .live-status {
        height: 9px;
        width: 9px;
        position: absolute;
        bottom: 0;
        right: 17px;
        border-radius: 100%;
        border: 1px solid;
        top: 5px
    }

    .tab-timeline .slide {
        bottom: -1px
    }

    .image-upload input {
        visibility: hidden;
        max-width: 0;
        max-height: 0
    }

    .file-upload-lbl {
        max-width: 15px;
        padding: 5px 0 0
    }

    .ellipsis::after {
        top: 15px;
        border: none;
        position: absolute;
        content: '\f142';
        font-family: FontAwesome;
        right: 30px
    }

    .elipsis-box {
        -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, .11);
        box-shadow: 0 0 5px 1px rgba(0, 0, 0, .11);
        top: 40px;
        right: -10px
    }

    .elipsis-box:after {
        content: '';
        height: 13px;
        width: 13px;
        background: #fff;
        position: absolute;
        top: -5px;
        right: 10px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-box-shadow: -3px -3px 11px 1px rgba(170, 170, 170, .22);
        box-shadow: -3px -3px 11px 1px rgba(170, 170, 170, .22)
    }

    .friend-elipsis {
        left: -10px;
        top: -10px
    }

    .social-profile:hover .profile-hvr, .social-wallpaper:hover .profile-hvr {
        opacity: 1;
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s
    }

    .profile-hvr {
        opacity: 0;
        position: absolute;
        text-align: center;
        width: 100%;
        font-size: 20px;
        padding: 10px;
        top: 0;
        color: #fff;
        background-color: rgba(0, 0, 0, .61);
        -webkit-transition: all ease-in-out .3s;
        transition: all ease-in-out .3s
    }

    .social-profile {
        margin: 0 15px
    }

    .social-follower {
        text-align: center
    }

    .social-follower h4 {
        font-size: 18px;
        margin-bottom: 10px;
        font-style: normal
    }

    .social-follower h5 {
        font-size: 14px
    }

    .social-follower .follower-counter {
        text-align: center;
        margin-top: 25px;
        margin-bottom: 25px;
        font-size: 13px
    }

    .social-follower .follower-counter .txt-primary {
        font-size: 24px
    }

    .timeline-icon {
        height: 45px;
        width: 45px;
        display: block;
        margin: 0 auto;
        border: 4px #fff solid
    }

    .social-timelines-left:after {
        height: 3px;
        width: 20px;
        position: absolute;
        background: #ccc;
        top: 20px;
        content: "";
        right: -10px;
        z-index: 0
    }

    .social-timelines-left {
        position: relative;
        z-index: 3
    }

    .social-timelines:before {
        position: absolute;
        content: ' ';
        width: 3px;
        background: #ccc;
        left: 48px;
        height: 100%;
        top: 0;
        z-index: 1
    }







</style>