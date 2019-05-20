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
			<!--/ Navbar -->
			<!--Modal-->
			@include('modal.login')
			@include('modal.recover_pass')
			@include('modal.reg')
			<!--/ Modal-->
			</div>
			<div id="show">
			<!--Main-->
			@include('content.main')
			<!--/ Main-->
			<!--Footer-->
			@include('footer.main')
			<!--/ Footer-->
		</div>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
	</body>
</html>
