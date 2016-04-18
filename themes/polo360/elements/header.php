<!DOCTYPE html>
<html>
  <head>
    <?php Loader::element('header_required'); ?>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/style.css"/>
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/bootstrap-3.3.6-dist/css/bootstrap.css"/>
    <title>Polo 360</title>
  </head>
  <body>

      <div class="container">
        <div id="header">
          <div class="row">
            <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2">
                <img src="<?php echo $this->getThemePath(); ?>/img/logo.png" alt="logo Polo 3600"/>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
              <?php
                $ah = new GlobalArea('Menu');
                $ah->display($c);
              ?>
          </div>
        </div>
