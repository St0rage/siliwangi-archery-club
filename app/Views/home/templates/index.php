<?php

use phpDocumentor\Reflection\Types\This;
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Siliwangi Archery Club Garut</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/base.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/vendor.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/main.css">

    <!-- script
    ================================================== -->
    <script src="<?= base_url() ?>/js/modernizr.js"></script>
    <script src="<?= base_url() ?>/js/pace.min.js"></script>

</head>

<body id="top">


    <?= $this->renderSection('page-content') ?>

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="<?= base_url() ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>/js/plugins.js"></script>
    <script src="<?= base_url() ?>/js/main.js"></script>

</body>

</html>