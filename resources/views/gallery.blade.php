<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Курсы для школьников</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel='stylesheet' href='css/unite-gallery.css' type='text/css' />
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

</div>

<div class="container" id="show">

        <section class="text-center my-5">

            <div class="row">

            <div class="col-md-6 mb-3 hoveffilblu animated zoomIn">

<div class="bgr-el accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx194" role="tablist"
     aria-multiselectable="true">

   <!-- <ul class="list-unstyled d-flex justify-content-center pt-5">
        <li><i class="fas fa-star mr-3 fa-2x" aria-hidden="true"></i></li>
    </ul> -->

    <a href="http://www.electrickids.spospk.ru/"><h3 class="text-center text-uppercase py-5 px-3 text-white">Electric Kids</h3></a>

    <hr class="mb-0">

    <div class="card">

        <div class="card-header" role="tab" id="heading1">
            <a data-toggle="collapse" data-parent="#accordionEx194" href="#collapse1"
               aria-expanded="true"
               aria-controls="collapse1">
                <a href="http://www.electrickids.spospk.ru/"><h3 class="mb-0">
                    Подробнее
                    <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span>
                    </div>
                </h3></a>
            </a>
        </div>
    </div>
</div>

</div>

<div class="col-md-6 mb-3 hoveffilblu animated zoomIn">
<div class="bgr-web accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx194" role="tablist"
     aria-multiselectable="true">

   <!-- <ul class="list-unstyled d-flex justify-content-center pt-5 bg-danger">
        <li><i class="far fa-star fa-2x" aria-hidden="true"></i></li>
    </ul> -->

    <a href="http://webdev.spospk.ru/"><h3 class="text-center text-uppercase py-5 px-3 text-white">Веб-дизайн</h3></a>

    <hr class="mb-0">

    <div class="card">

        <div class="card-header" role="tab" id="heading4">
            <a class="collapsed" data-toggle="collapse" href="#collapse4" aria-expanded="false"
               aria-controls="collapse4">
                <a href="http://webdev.spospk.ru/"><h3 class="mb-0">
                    Подробнее
                    <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span>
                    </div>
                </h3></a>
            </a>
        </div>
    </div>
</div>
</div>

<div class="col-md-6 mb-3 hoveffilblu animated zoomIn">
<div class="bgr-game accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx194" role="tablist"
     aria-multiselectable="true">

   <!-- <ul class="list-unstyled d-flex justify-content-center pt-5">
        <li><i class="far fa-star fa-2x" aria-hidden="true"></i></li>
    </ul> -->

    <a href="http://gamedev.spospk.ru/"><h3 class="text-center text-uppercase py-5 px-3 text-white">Компьютерные игры</h3></a>

    <hr class="mb-0">

    <div class="card">

        <div class="card-header" role="tab" id="heading10">
            <a class="collapsed" data-toggle="collapse" href="#collapse10" aria-expanded="false"
               aria-controls="collapse10">
                <a href="http://gamedev.spospk.ru/"><h3 class="mb-0">
                    Подробнее
                    <div class="animated-icon1 float-right mt-1"><span></span><span></span><span></span>
                    </div>
                </h3></a>
            </a>
        </div>
    </div>
</div>
</div>
            <div class="col"></div>
            </div>

        </section>

</div>


<!--Footer-->
@include('footer.main')
<!--/.Footer-->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type='text/javascript' src='js/unitegallery.js'></script>
<script type='text/javascript' src='js/ug-theme-tiles.js'></script>
<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery("#gallery").unitegallery();

    });
</script>
<script type="text/javascript">
    // Tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
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