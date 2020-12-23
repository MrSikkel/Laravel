<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Главная</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/modal.css" rel="stylesheet">
  <style type="text/css">
    /*carousel*/
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    /* Carousel*/
    .carousel,
    .carousel-item,
    .carousel-item.active {
      height: 80%;
    }
    .carousel-inner {
      height: 80%;
    }

  </style>
</head>

<body>

<div id="app">
  <!-- Navbar -->
  @include('navbar.main')
  @include('navbar.nav')
  <!-- Navbar -->

  <!--Main-->
  <main>
      @include('modal.login')
      @include('modal.recover_pass')
      @include('modal.reg')
</div>

<div class="container" id="show">

  <section class="text-center">

    <div class="row mt-4">

      <div class="col-md-6 mb-3 hoveffilblu animated zoomIn">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
               aria-controls="pills-home" aria-selected="true">Профиль<i class="far ml-2 fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
               aria-controls="pills-profile" aria-selected="false">Настройки<i class="fas ml-2 fa-cog"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
               aria-controls="pills-contact" aria-selected="false">Курсы<i class="far ml-2 fa-bookmark"></i></a>
          </li>
        </ul>
        <div class="tab-content pt-2 pl-1" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
               aria-labelledby="pills-home-tab">
            <div class="card" style="width: 300px;">
              <div class="view overlay">
                <img class="card-img-top" src="img/isaeva_adm.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body">
                <p class="card-title text-left"><?php 
				echo '<b>Фамилия: </b>' .$model->familiya. '<br>'.
						'<b>Имя: </b>' .$model->name. '<br>'.
						'<b>Отчество: </b>' .$model->otchestvo. '<br>'.
						'<b>Телефон: </b>' .$model->phone_number. '<br>'.
            '<b>Дата рождения: </b>' .$model->date_of_birth;
                  ?></p>
                <h4 class="card-title"></h4>
                <p class="card-text text-left"><a href="">Редактировать</a></p>
               

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>

                </button>
              </div>
            </div>

            <div class="card mt-4" style="width: 300px; max-height: 500px; overflow-y: auto;">
              <div class="card-body">
                <h4 class="card-title">История курсов<i class="far fa-clock ml-2"></i></h4>
                <ul class="list-group">
                  <li class="list-group-item">
                    <a class="text-primary">Название курса</a>
                    </br>
                    № Группы: 122
                    </br>
                    20.05.2019 / 29.05.2019
                  </li>
                  <li class="list-group-item">
                    <a class="text-primary">Название курса</a>
                    </br>
                    № Группы: 122
                    </br>
                    20.05.2019 / 29.05.2019
                  </li>
                  <li class="list-group-item">
                    <a class="text-primary">Название курса</a>
                    </br>
                    № Группы: 122
                    </br>
                    20.05.2019 / 29.05.2019
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form style="width: 350px;">
              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="">Имя</label>
                  <input type="text" class="form-control" id="" placeholder="Имя" name="name" value="<?= $model->name; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Фамилия</label>
                  <input type="text" class="form-control" id="" placeholder="Фамилия" value="<?= $model->familiya; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="">Отчество</label>
                <input type="text" id="" class="form-control" placeholder="Отчество" value="<?= $model->otchestvo; ?>">
                <small class="form-text text-muted">
                </small>
              </div>
              <div class="form-group">
                <label for="">Почта</label>
                <input type="email" id="" class="form-control" placeholder="Почта" value="<?= $model2->email; ?>">
                <small class="form-text text-muted">
                </small>
              </div>
              <div class="form-group">
                <label for="">Старый пароль</label>
                <input type="password" id="" class="form-control">
                <small class="form-text text-muted">
                </small>
              </div>
              <div class="form-group">
                <label for="">Пароль</label>
                <input type="password" id="" class="form-control">
                <small class="form-text text-muted">
                </small>
              </div>
              <div class="form-group">
                <label for="">Повторно пароль</label>
                <input type="password" id="" class="form-control">
                <small class="form-text text-muted">
                </small>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="">Город</label>
                  <input type="text" class="form-control" id="" placeholder="Город" value="">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">Фотография</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="ru">
                    <label class="custom-file-label" for="customFileLang"></label>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-sm">Редактировать</button>
              <button type="submit" class="btn btn-success btn-sm">Принять</button>

              <div class="alert alert-success" role="alert">
                Изменения приняты
              </div>
              <div class="alert alert-danger" role="alert">
                Ошибка редактирования
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="card border-primary m-3" style="max-width: 20rem;">
              <div class="card-header bg-transparent border-primary">Название курса</div>
              <div class="card-body">
                <h5 class="card-title">Стоимость: 2000р</h5>
                <p class="card-text">Дата оформления:</p>
                <p class="card-text">Кто ведет:</p>
                <p class="card-text">Описание</p>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <button type="submit" class="btn btn-danger btn-sm">Отменить</button>
                <button type="submit" class="btn btn-primary btn-sm">Оплатить</button>
              </div>
            </div>

            <div class="card border-primary m-3" style="max-width: 20rem;">
              <div class="card-header bg-transparent border-primary">Название курса</div>
              <div class="card-body">
                <h5 class="card-title">Стоимость: 2000р</h5>
                <p class="card-text">Дата оформления:</p>
                <p class="card-text">Кто ведет:</p>
                <p class="card-text">Описание</p>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <button type="submit" class="btn btn-danger btn-sm">Отменить</button>
                <button type="submit" class="btn btn-primary btn-sm">Оплатить</button>
              </div>
            </div>

            <div class="card border-primary m-3" style="max-width: 20rem;">
              <div class="card-header bg-transparent border-primary">Название курса</div>
              <div class="card-body">
                <h5 class="card-title">Стоимость: 2000р</h5>
                <p class="card-text">Дата оформления:</p>
                <p class="card-text">Кто ведет:</p>
                <p class="card-text">Описание</p>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <button type="submit" class="btn btn-danger btn-sm">Отменить</button>
                <button type="submit" class="btn btn-primary btn-sm">Оплатить</button>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-md-6 mb-3 hoveffilblu animated zoomIn">
        <div class="card border-primary m-3">
          <div class="card-header bg-transparent border-primary bg-primary text-white">Новости<i
                    class="fas ml-2 fa-newspaper"></i></div>
          <div class="card-body">
            <blockquote class="blockquote mb-0 card-body">
              <div class="card border-primary">
                <div class="card-body">
                  <h5 class="card-title">Заголовок новости</h5>
                  <p>Текст новости</p>
                  <button type="submit" class="btn btn-primary btn-sm">Читать далее</button>
                </div>
              </div>

              <div class="card border-primary mt-3">
                <div class="card-body">
                  <h5 class="card-title">Заголовок новости</h5>
                  <p>Текст новости</p>
                  <button type="submit" class="btn btn-primary btn-sm">Читать далее</button>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        <div class="card border-primary m-3">
          <div class="card-header bg-transparent border-primary bg-primary text-white">Оплаченные курсы<i
                    class="far ml-2 fa-bookmark"></i></div>
          <div class="card-body">
            <blockquote class="blockquote mb-0 card-body">
              <ul class="list-group">
                <li class="list-group-item text-primary"><a>Название курса</a></br>
                  <button type="submit" class="btn btn-primary btn-sm">О курсе</button>
                </li>
                <li class="list-group-item text-primary"><a>Название курса</a></br>
                  <button type="submit" class="btn btn-primary btn-sm">О курсе</button>
                </li>
              </ul>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <p class="note note-primary"><strong>Какие-то данные:</strong> Lorem, ipsum dolor sit amet consectetur
      adipisicing
      elit. Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat
      illo rem id nisi consequatur esse, sint perspiciatis soluta porro?</p>
  </section>
</div>
</main>
<!--Main-->

<!--Footer-->
<footer class="page-footer text-center font-small mt-4 maincolor">

  <div class="pt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <!--<div class="col-md-2">
          <img src="img/logo.png" alt="">
        </div>-->
        <div class="col-md-5 mt-md-0 mt-3">
          <p>
            Областное государственное бюджетное профессиональное образовательное учреждение «Северский
            промышленный колледж»
            Свидетельство о государственной аккредитации № 723 от 20 января 2015 г.
            Лицензия № 1713 от 8 февраля 2016 г.
          </p>
          <div>

            <!-- Facebook -->
            <a>
              <i class="fab fa-facebook-f fa-lg m-2 fa-2x text-white"> </i>
            </a>
            <!-- Vk -->
            <a class="">
              <i class="fab fa-vk fa-lg m-2 fa-2x text-white"> </i>
            </a>
            <!-- Twitter-->
            <a class="">
              <i class="fab fa-twitter fa-lg m-2 fa-2x text-white"> </i>
            </a>
            <!--Youtube -->
            <a class="">
              <i class="fab fa-youtube fa-lg m-2 fa-2x text-white"> </i>
            </a>
            <!--Instagram-->
            <a class="">
              <i class="fab fa-instagram fa-lg m-2 fa-2x text-white"> </i>
            </a>
          </div>

        </div>

        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-7 mb-md-0 mb-3 text-right">
          <p>
            Россия, 636036, г. Северск Томской области
            </br>
            ул. Крупской, 17, каб. 212
            </br>
            т. (3823) 780-311
            </br>
            факс (3823) 780-304
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--/.Footer-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/x-template" id="modal-template">
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header">
              default header
            </slot>
            <a class="modal-default-button" @click="$emit('close')">
              <i class="fas fa-2x text-primary fa-times"></i>
            </a>
          </div>

          <div class="modal-body">
            <slot name="body">
              default body
            </slot>
          </div>


          <slot name="footer">

          </slot>

        </div>
      </div>
    </div>
  </transition>
</script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>
  /*$(function() {
      $("a").each(function(b) {
          if (this.title) {
              var c = this.title;
              var x = 0;
              var y = 35;
              $(this).mouseover(function(d) {
                  this.title = "";
                  $("body").append('<div id="tooltip">' + c + "</div>");
                  $("#tooltip").css({
                      left: (d.pageX + x) + "px",
                      top: (d.pageY + y) + "px",
                      opacity: "0.8"
                  }).show(300)
              }).mouseout(function() {
                  this.title = c;
                  $("#tooltip").remove()
              }).mousemove(function(d) {
                  $("#tooltip").css({
                      left: (d.pageX + x) + "px",
                      top: (d.pageY + y) + "px"
                  })
              })
          }
      })
      });*/
</script>
</body>

</html>
