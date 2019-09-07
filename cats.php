<?php 
  $head_title = 'Наши котята, коты и кошки'; // header title
  include 'parts/head.php';
?>

<div class="main"> <!-- котята (main) -->
  <p class="h1 text-primary text-center">Продажа котят питомника Kotofey</p>
  <div class="row d-flex justify-content-center text-center">
    <div class="col d-flex justify-content-center">
      <div class="card " style="padding: 10px; max-width: 700px;">
        <p class="text-danger"> Хорунжий (свободен!) </p>
        <p class="text-danger"> Мальчик окраса: черный мраморный </p>
        <p class="text-danger"> Дата рождения: 22.09.2018 </p>
        <a class="lightzoom" href="/img/cats/ct1/ct1.jpg">
          <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/ct1/ct1.jpg">
        </a>
        <button id="morepicsbtn1" class="btn-danger">Еще фотографии</button>
        <button id="morepicsbtn2" style="display: none;" class="btn-danger">Скрыть</button>
        <div id="morepics" style="display: none;">
          <a class="lightzoom" href="img/cats/ct1/ct2.jpg">
            <img alt="cat" class="cat-ct img-thumbnail" src="img/cats/ct1/ct2.jpg">
          </a>
          <a class="lightzoom" href="/img/cats/ct1/ct3.jpg">
            <img alt="cat" class="cat-ct img-thumbnail" src="/img/cats/ct1/ct3.jpg">
          </a>
          <a class="lightzoom" href="/img/cats/ct1/ct4.jpg">
            <img alt="cat" class="cat-ct img-thumbnail" src="/img/cats/ct1/ct4.jpg">
          </a>
          <a class="lightzoom" href="/img/cats/ct1/ct5.jpg">
            <img alt="cat" class="cat-ct img-thumbnail" src="/img/cats/ct1/ct5.jpg">
          </a>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end of main div -->

<div id="sec" class="d-flex justify-content-center text-center"> <!-- коты и кошки(secondary) -->
  <div class="col">
    <h2 class="text-primary ">Наши коты</h2>
      <div class="row d-flex justify-content-center text-center"> <!-- 1st row -->
        <div class="col-md-3">
          <div class="card ch1" style="padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Ангелур Баюн </p>
            <p class="text-danger"> Окрас - черный пятнистый </p>
            <a class="lightzoom" href="/img/cats/Angelur-Baiyun-1.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/Angelur-Baiyun-1.jpg">
            </a>
            <button onclick=" document.location.href='/Angelur-Baiyun.php'; " class="btn-danger">Подробнее</button>
          </div>
        </div>

        <div class="col-md-3">
          <div id="ch" class="card" style="padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Таймыр Симбирцит оф Ангелур </p>
            <p class="text-danger"> Окрас - черный пятнистый </p>
            <a class="lightzoom" href="/img/cats/Angelur-Taimyr-1.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/Angelur-Taimyr-1.jpg">
            </a>
            <button onclick=" document.location.href=''; " class="btn-danger">Подробнее</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card ch1" style="padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Букет Сказка Сибири </p>
            <p class="text-danger"> Окрас - черный мраморный </p>
            <a class="lightzoom" href="/img/cats/byket-skaska_sibiri-1.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/byket-skaska_sibiri-1.jpg">
            </a>
            <button onclick=" document.location.href=''; " class="btn-danger">Подробнее</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card ch1" style="padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Кипарис Сказка Сибири </p>
            <p class="text-danger"> Окрас - черный золотой пятнистый </p>
            <a class="lightzoom" href="/img/cats/kiparis-skaska_sibiri-1.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/kiparis-skaska_sibiri-1.jpg">
            </a>
            <button onclick=" document.location.href=''; " class="btn-danger">Подробнее</button>
          </div>
        </div>
      </div> <!-- end of 1st row -->
      
      <h2 class="text-primary text-center">Наши кошки</h2>
      <div class="row"> <!-- 2nd row -->
        
        <div class="col-md-3">
          <div class="card ch1" style="padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Горошинка Сказка Сибири </p>
            <p class="text-danger"> Окрас - Черный золотой пятнистый </p>
            <a class="lightzoom" href="/img/cats/goroshina-skaska_sibiri.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/goroshina-skaska_sibiri.jpg">
            </a>
            <button onclick=" document.location.href=''; " class="btn-danger">Подробнее</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card ch1" style="padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Песня Ангара </p>
            <p class="text-danger"> Окрас - черный пятнистый </p>
            <a class="lightzoom" href="/img/cats/song-angara-1.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/song-angara-1.jpg">
            </a>
            <button onclick=" document.location.href=''; " class="btn-danger">Подробнее</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card ch1" style="max-width: 350px; padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Егоза Сказка Сибири </p>
            <p class="text-danger"> Окрас - черный золотой тигровый с белым </p>
            <a class="lightzoom" href="/img/cats/egoza-skaska_sibiri-1.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/egoza-skaska_sibiri-1.jpg">
            </a>
            <button onclick=" document.location.href=''; " class="btn-danger">Подробнее</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card ch1" style="padding: 10px; margin-bottom: 5px;">
            <p class="text-danger"> Артистка Сказки Сибири </p>
            <p class="text-danger"> Окрас - золотой мраморный </p>
            <a class="lightzoom" href="/img/cats/Actress-Tale-Siberia-1.jpg">
              <img alt="cat" class="img-fluid img-thumbnail" src="/img/cats/Actress-Tale-Siberia-1.jpg">
            </a>
            <button onclick=" document.location.href=''; " class="btn-danger">Подробнее</button>
          </div>
        </div>
      </div> <!-- end of 2nd row -->
  </div>
</div> <!-- end of secondary div -->


<script type="text/javascript">
  $(function(){
    $('#morepicsbtn1').click(function(){
      $('#morepicsbtn1').toggle();
      $('#morepicsbtn2').toggle();
      $('#morepics').toggle();
    });
    $('#morepicsbtn2').click(function(){
      $('#morepicsbtn2').toggle();
      $('#morepicsbtn1').toggle();
      $('#morepics').toggle();
    });
  });
</script>         
    

<!-- footer here -->
<?php include 'parts/footer.php';?>


