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
  <div class="font-small pt-2 container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-xs-3 col-lg-2">
          <img src="img/logo.png">
        </div>
        <div class="col-lg-6 col-xs-6 col-md-6 mb-md-0">
          <p>
            Областное государственное бюджетное профессиональное образовательное учреждение «Северский промышленный колледж»
            <br>
            Свидетельство о государственной аккредитации № 723 от 20 января 2015 г.
            <br>
            Лицензия № 1713 от 8 февраля 2016 г.
          </p>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar maincolor navbar-expand-lg navbar-dark animated fadeIn">
    <div class="container">

      <!-- search -->
      <form id="demo-b">
        <input class="mr-2" type="search">
      </form>



      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto text-center">
          <li class="nav-item active">
            <a class="nav-link" href="#">Бесплатные мероприятия
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Ближайшие курсы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Расписание занятий</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Фото</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">ЧАВО</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Преподаватели</a>
          </li>
          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                
                            </li>
            @endguest
        </ul>
        
        <!-- Right -->
        <ul class="navbar-nav ml-auto">

        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main-->
  <main>
    <modal v-if="showModalLogin" @close="showModalLogin = false">
      <h3 slot="header">Вход</h3>
      <div slot="body">
        <div class="container">
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="name" type="text" id="form1" class="form-control">
              <label for="form1">Логин</label>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-12 my-auto">
          <div class="md-form">
            <input  type="password" name="password" id="form2" class="form-control" ref="password">
            <label for="form2">Пароль</label>
          </div>
        </div>
        </div>
        </div>
      </div>
      <div slot="footer" class="modal-footer">
        <div class="col-12 text-center">
          <button class="btn-sm col-12 btn-primary" type="Submit">Вход</button>
          <span class="badge col-12 badge-primary"><a id="show-modal" @click="showModalFReg = true">Забыли пароль?</a></span>
        </div>
      </div>
    </modal>

      <modal v-if="showModalFReg" @close="showModalFReg = false">
        <h3 slot="header">Восстановление пароля</h3>
        <div slot="body">
          <div class="container">
          <div class="row">
            <div class="col-sm-12 my-auto">
              <div class="md-form">
                <input name="name" type="email" id="form1" class="form-control">
                <label for="form1">Введите почту</label>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div slot="footer" class="modal-footer">
          <div class="col-12 text-center">
            <button class="btn-sm col-12 btn-primary" type="Submit">Отправить</button>
          </div>
        </div>
      </modal>

    <modal v-if="showModalReg" @close="showModalReg = false">
      <h3 slot="header">Регистрация</h3>
      <div slot="body">
        <div class="container">
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="name" type="text" id="form1" class="form-control">
              <label for="form1">Логин</label>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-12 my-auto">
          <div class="md-form">
            <input  type="password" name="password" id="form2" class="form-control" ref="password">
            <label for="form2">Пароль</label>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input  type="password" name="password" id="form3" class="form-control" ref="password">
              <label for="form3">Повторно пароль</label>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-sm-12 my-auto">
              <div class="md-form">
                <input  type="email" name="email" id="form4" class="form-control">
                <label for="form4">Почта</label>
              </div>
            </div>
            </div>
        </div>
      </div>
      <div slot="footer" class="modal-footer">
        <div class="col-12 text-center">
          <button class="btn-sm col-12 btn-primary" type="Submit">Регистрация</button>
        </div>
      </div>
    </modal>
  </div>

    <div class="container" id="show">
      <!--Carousel-->
      <div id="carouselExampleIndicators" v-show="show" class="carousel tales slide mt-2 animated zoomIn" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/KOSMOS.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/KOSMOS.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/KOSMOS.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <a>
        <i v-on:click="show = !show" class="fas fa text-primary fa-eye"></i>
    </a>
      <!--/Carousel-->
      <hr class="my-2">
      <section class="text-center">

          <div class="row">

              <div class="col-lg-4 col-md-12 mb-3 hoveffilblu animated zoomIn">

                  <div class="view z-depth-1-half blurfilter">
                      <img src="img/blue.jpg" class="img-fluid" alt="">
                      <div class="mask flex-center waves-effect waves-light">
                        <span>
                      		<h3>Краткое описание</h3>
                      		<p>Перейти далее</p>
                      	</span>
                        <p class="white-text"><embed style="width: 120px; " type="image/svg+xml" src="icons/Master-Klassy.svg" /></br>Мастер-классы</p>
                      </div>
                  </div>

              </div>

              <div class="col-lg-4 col-md-6 mb-3 hoveffilblu animated zoomIn">

                  <div class="view z-depth-1-half blurfilter">
                      <img src="img/blue.jpg" class="img-fluid" alt="">
                      <div class="mask flex-center waves-effect waves-light">
                        <span>
                      		<h3>Краткое описание</h3>
                      		<p>Перейти далее</p>
                      	</span>
                        <p class="white-text"><i class="fas text-white fa-5x fa-chart-line"></i></br>Переподготовка</br>и повышение квалификации</p>
                      </div>
                  </div>

              </div>

              <div class="col-lg-4 col-md-6 mb-3 hoveffilblu animated zoomIn">

                  <div class="view z-depth-1-half blurfilter">
                      <img src="img/blue.jpg" class="img-fluid" alt="">
                      <div class="mask flex-center waves-effect waves-light">
                        <span>
                      		<h3>Краткое описание</h3>
                      		<p>Перейти далее</p>
                      	</span>
                        <p class="white-text"><embed style="width: 120px; " type="image/svg+xml" src="icons/Kursy_Dlya_Shkolnikov.svg" /></br>Курсы для школьников</p>
                      </div>
                  </div>

              </div>

          </div>

          <div class="row">

              <div class="col-md-6 mb-3 hoveffilblu animated zoomIn">

                  <div class="view z-depth-1-half blurfilter">
                      <img src="img/blue.jpg" class="img-fluid" alt="">
                      <div class="mask flex-center waves-effect waves-light">
                        <span>
                      		<h3>Краткое описание</h3>
                      		<p>Перейти далее</p>
                      	</span>
                        <p class="white-text"><p class="white-text"><embed style="width: 120px; " type="image/svg+xml" src="icons/Professii.svg" /></br>Профессии</p>
                      </div>
                  </div>

              </div>

              <div class="col-md-6 mb-3 hoveffilblu animated zoomIn">

                  <div class="view z-depth-1-half blurfilter default">
                      <img src="img/blue.jpg" class="img-fluid" alt="">
                      <div class="mask flex-center waves-effect waves-light">
                        <span>
                          <h3>Краткое описание</h3>
                      		<p>Перейти далее</p>
                      	</span>
                        <p class="white-text"><i class="fas text-white fa-5x fa-align-left"></i></br>Пример</p>
                      </div>
                  </div>

              </div>

          </div>
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
              Областное государственное бюджетное профессиональное образовательное учреждение «Северский промышленный колледж»
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
	</div>
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
