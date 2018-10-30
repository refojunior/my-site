<?php require_once('layouts/header.php') ?>

	<?php require_once('layouts/navbar.php') ?>
	
	<!-- agar navbar tidak seperti home page -->
	<style>
		#mainNav {
			background-color: white;
		}
		#mainNav .navbar-nav > li > a,
	  	#mainNav .navbar-nav > li > a:focus {
	    	color: black;
	  	}

	  	
	  	#mainNav .navbar-nav > li > a:hover {
	    	color: #e74c3c;

	  	}
	</style>
	
	<section>
		<div class="cover-page-article">
			<div class="container">
				<div class="row justify-content-center">
					
					<h1 class="title-page">&nbsp; My Articles &nbsp;</h1>
				
				</div>
			</div>
		</div>
	</section>
	
	<section id="article">
		<div class="container">
			<br><br>
			<div class="row">
		        <div class="row">
		        <div class="col-md-4">
		        	<div class="content-article">
		        		<div class="image-article" style="background-image:url('img/carousel.jpg')"></div>
		        		<div class="caption-article">
		        			<h2><a href="" class="link-article">Judul Artikel Judul Artikel Judul Artikel</a></h2>
		        			<p class="text-muted text-ket">Published : 29-10-2018 | Categories : <a href="">Tips & Trick</a></p>
		        			<hr>
		        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quis, vel. Quo incidunt enim a officiis vel, voluptate ea laudantium, voluptates veniam facere ipsa, assumenda temporibus, illo ducimus cum aspernatur! </p>
		        			<br>
		        		</div>
		        	</div>
		        </div>
		        <div class="col-md-4 item">
		        	<div class="content-article">
		        		<div class="image-article" style="background-image:url('img/app1.jpg')"></div>
		        		<div class="caption-article">
		        			<h2><a href="" class="">Judul Artikel Judul Artikel Judul Artikel</a></h2>
		        			<p class="text-muted text-ket">Published : 29-10-2018 | Categories : <a href="">Tips & Trick</a></p>
		        			<hr>
		        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quis, vel. Quo incidunt enim a officiis vel, voluptate ea laudantium, voluptates veniam facere ipsa, assumenda temporibus, illo ducimus cum aspernatur! </p>
		        			<br>
		        		</div>
		        	</div>
		        </div>
				<div class="col-md-4 item">
		        	<div class="content-article">
		        		<div class="image-article" style="background-image:url('img/header.jpg')"></div>
		        		<div class="caption-article">
		        			<h2><a href="">Judul Artikel Judul Artikel Judul Artikel</a></h2>
		        			<p class="text-muted text-ket">Published : 29-10-2018 | Categories : <a href="">Tips & Trick</a></p>
		        			<hr>
		        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quis, vel. Quo incidunt enim a officiis vel, voluptate ea laudantium, voluptates veniam facere ipsa, assumenda temporibus, illo ducimus cum aspernatur! </p>
		        			<br>
		        		</div>
		        	</div>
		        </div>
			</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<nav aria-label="...">
					<ul class="pagination pagination-lg">
						<li class="page-item disabled">
					    	<a class="page-link pagination-color" href="#" >1</a>
					    </li>
						<li class="page-item"><a class="page-link pagination-color" href="#">2</a></li>
						<li class="page-item"><a class="page-link pagination-color" href="#">3</a></li>
					</ul>
				</nav>
			</div>
			<br>
		</div>
	</section>




<?php require_once('layouts/footer.php') ?>