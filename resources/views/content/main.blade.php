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