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

	<section id="article">
		<div class="body-read-article">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Title Article Title Article Title Article</h1>
						<p class="text-muted">Published : 29-10-2018 | Categories : Tips & Trick</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<img src="img/header.jpg" alt="cover" class="img-fluid">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsum magni, laborum hic culpa atque odio ad recusandae sequi reprehenderit laboriosam repellendus labore illum, totam earum corporis quia. In, quae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsum magni, laborum hic culpa atque odio ad recusandae sequi reprehenderit laboriosam repellendus labore illum, totam earum corporis quia. In, quae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsum magni, laborum hic culpa atque odio ad recusandae sequi reprehenderit laboriosam repellendus labore illum, totam earum corporis quia. In, quae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsum magni, laborum hic culpa atque odio ad recusandae sequi reprehenderit laboriosam repellendus labore illum, totam earum corporis quia. In, quae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsum magni, laborum hic culpa atque odio ad recusandae sequi reprehenderit laboriosam repellendus labore illum, totam earum corporis quia. In, quae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsum magni, laborum hic culpa atque odio ad recusandae sequi reprehenderit laboriosam repellendus labore illum, totam earum corporis quia. In, quae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsum magni, laborum hic culpa atque odio ad recusandae sequi reprehenderit laboriosam repellendus labore illum, totam earum corporis quia. In, quae.</p>
								<img src="img/carousel.jpg" alt="content image" class="img-fluid">
								<br><br>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe maiores aperiam nam dicta asperiores, ducimus at magnam animi beatae totam cum fugiat reiciendis soluta debitis qui, quis minima, suscipit iure?</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae fugit error fuga explicabo quos qui voluptate incidunt quibusdam dolore nam temporibus hic, a omnis, repellendus dolorum, saepe aliquid pariatur perferendis!</p>
							</div>
						</div>
						

					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<h2>Baca Juga</h2>
							</div>
						</div>
						<div class="thumbs-article">
							<div class="row">
								<div class="col-md-5">
									<div class="thumbs-image" style="background-image:url('img/app1.jpg')"></div>
								</div>
								<div class="col-md-7 thumbs-content">
									<p class="thumbs-title"> Title Article Title Article Title Article</p>
									<hr class="thumbs-hr">
									<p class="text-muted text-desc">Tips & Trick</p>
								</div>
							</div>
						</div>
						<br>
						<div class="thumbs-article">
							<div class="row">
								<div class="col-md-5">
									<div class="thumbs-image" style="background-image:url('img/app1.jpg')"></div>
								</div>
								<div class="col-md-7 thumbs-content">
									<p class="thumbs-title">Title Article Title Article  Title Article Title Article</p>
									<hr class="thumbs-hr">
									<p class="text-muted text-desc">Tips & Trick</p>
								</div>
							</div>
						</div>
						<br>
						<div class="thumbs-article">
							<div class="row">
								<div class="col-md-5">
									<div class="thumbs-image" style="background-image:url('img/app1.jpg')"></div>
								</div>
								<div class="col-md-7 thumbs-content">
									<p class="thumbs-title">Title Article Title Article Title Article</p>
									<hr class="thumbs-hr">
									<p class="text-muted text-desc">Tips & Trick</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>



<?php require_once('layouts/footer.php') ?>