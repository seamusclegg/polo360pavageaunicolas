<?php $this->inc('elements/header.php'); ?>

<div class="row" id="contenu">
      <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php
        $a = new Area('Contenu');
        $a->display($c);
         ?>
  </div>
</div>

<div id="headline">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="col1">
<?php
$aa = new Area('Col1');
$aa->display($c);
 ?>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="col2">
<?php
$ab = new Area('col2');
$ab->display($c);
?>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="col3">
  <?php
    $ac = new Area('col3');
    $ac->display($c);
   ?>
</div>
</div>
</div>
<hr/>
<div id="feature">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="social">
<?php
$ad = new Area('Social');
$ad->display($c);
 ?>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="contact">
  <?php
  $ae = new Area('Contact');
  $ae->display($c);
   ?>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="actu">

<?php
  $af = new Area('Actu');
  $af->display($c);
?>
</div>
</div>
</div>
<?php $this->inc('elements/footer.php'); ?>
