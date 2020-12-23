<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ЧАВО</title>
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
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-lg-12 col-md-12 mt-3 mb-3 hoveffilblu animated zoomIn">
                <h3 class="text-center">ЧАВО</h3>
                <div class="panel-group card" id="faqAccordion">
                    <div class="panel m-2 card panel-default bg-primary">
                        <div class="panel-heading card-header accordion-toggle question-toggle collapsed"
                             data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                            <h4 class="panel-title">
                                <a href="#" class="text-white red-tooltip" data-toggle="tooltip"
                                   title="Нажмите чтобы прочитать ответ" data-placement="right">Вопрос: текст
                                    вопроса...</a>
                            </h4>

                        </div>
                        <div id="question0" class="panel-collapse collapse text-white" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Ответ</span></h5>

                                <p>
                                    Текст ответа...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel m-2 card panel-default bg-primary">
                        <div class="panel-heading card-header accordion-toggle collapsed question-toggle"
                             data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                            <h4 class="panel-title">
                                <a href="#" class="text-white">Вопрос: текст вопроса...</a>
                            </h4>

                        </div>
                        <div id="question1" class="panel-collapse collapse text-white" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Ответ</span></h5>

                                <p>
                                    Текст ответа...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel m-2 card panel-default bg-primary">
                        <div class="panel-heading card-header accordion-toggle collapsed question-toggle"
                             data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                            <h4 class="panel-title">
                                <a href="#" class="text-white">Вопрос: текст вопроса...</a>
                            </h4>

                        </div>
                        <div id="question2" class="panel-collapse collapse text-white" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Ответ</span></h5>

                                <p>
                                    Текст ответа...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel m-2 card panel-default bg-primary">
                        <div class="panel-heading card-header accordion-toggle collapsed question-toggle"
                             data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                            <h4 class="panel-title">
                                <a href="#" class="text-white">Вопрос: текст вопроса...</a>
                            </h4>

                        </div>
                        <div id="question3" class="panel-collapse collapse text-white" style="height: 0px;">
                            <div class="panel-body">
                                <h5><span class="label label-primary">Ответ</span></h5>

                                <p>
                                    Текст ответа...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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