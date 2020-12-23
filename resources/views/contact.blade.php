<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Контакты</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
</head>

<body>
<div id="app">
    <!-- Navbar -->
    @include('navbar.main')
    @include('navbar.nav')
    <!-- Navbar -->

    <!--Main-->
    <main>
            <!--@include('modal.login')
            @include('modal.recover_pass')
            @include('modal.reg')-->
</div>

<div class="container" id="show">

    <section class="text-center">

        <div class="row mt-4">

            <div class="col-md-12 mb-3 hoveffilblu animated zoomIn">
                <p>
                    Россия, 636036, г. Северск Томской области
                    </br>
                    ул. Крупской, 17, каб. 104
                    </br>
                    т. (3823) 780-327, (3823) 780-366
                    </br>
                    факс (3823) 780-304
                    </br>
                    Эл. адрес.: skills@spospk.ru <br>
                    Начальник ЦРДОиПО: Попова Екатерина Евгеньевна
                </p>
            </div>
            <div class="col-md-12 mb-3 hoveffilblu animated zoomIn">
                <div>
                    <!-- Facebook -->
                    <a>
                        <i class="fab fa-facebook-f fa-lg m-2 fa-2x text-primary"> </i>
                    </a>
                    <!-- Vk -->
                    <a href="https://vk.com/spospk" target="_blank">
                        <i class="fab fa-vk fa-lg m-2 fa-2x text-primary"> </i>
                    </a>
                    <!-- Twitter-->
                    <a class="">
                        <i class="fab fa-twitter fa-lg m-2 fa-2x text-primary"> </i>
                    </a>
                    <!--Youtube -->
                    <a class="">
                        <i class="fab fa-youtube fa-lg m-2 fa-2x text-primary"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="">
                        <i class="fab fa-instagram fa-lg m-2 fa-2x text-primary"> </i>
                    </a>
                </div>
            </div>
            <iframe class="hoveffilblu animated zoomIn"
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad234754d755f63b72fd6b0f40345b7f35cb60c26b279c954fca9a01b017d1639&amp;source=constructor"
                    style="width:100%; height: 400px;" frameborder="0"></iframe>
        </div>
    </section>
</div>
</main>
<!--Main-->

<!--Footer-->
@include('footer.main')
<!--/.Footer-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<!--Modal-->
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
<!--/.Modal-->
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