<?php
$head_title = 'Питомник Сибирских кошек - Kotofey'; // header title
include 'parts/head.php';
include 'plugins/slider/slider.php';
?>
            
<!-- content of home page -->
<div class="main">
  <div class="row display-flex"> <!-- main row -->
    <div id="content" class="col-md-8"> <!-- content column -->
      <div class="row"> 
        <div class="col"> <!-- main content -->
          <?php include 'parts/home-maincontent.php'; ?>
        </div>
      </div>
      <div id="slider" class="row">
        <div class="col-md text-center">
          <p>Найдите нас:</p>
          <iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.798165805778!2d37.60554681579988!3d55.76200828055583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a46812851bb%3A0x784132510f40f284!2z0JvQtdC-0L3RgtGM0LXQstGB0LrQuNC5INC_0LXRgC4sIDI2LCDQnNC-0YHQutCy0LAsIDEyNTAwOQ!5e0!3m2!1sru!2sru!4v1555062276866!5m2!1sru!2sru" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="sld" class="col-md text-center">
          <p>Наши коты и кошки:</p>
          <?php headslider(); ?>
        </div>
      </div>
    </div> <!-- end of content column -->

    <div class="col-md-4"> <!-- newsbox column -->
      <?php include 'parts/newsbox.php'; ?>
    </div> <!-- end of newsbox column -->
  </div> <!-- end of main row -->
</div> <!-- end of main block -->

<script src="js/equalheight.js"></script>

<!-- footer here -->
<?php include 'parts/footer.php';?>


