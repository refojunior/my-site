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
		<!-- isi artikel -->
		<div class="body-read-article">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Title Article Title Article Title Article</h1>
						<p class="text-muted">Published : 29-10-2018 | Categories : Tips & Trick</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8" id="col-width">
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
					<!-- menu kanan artikel terbaru -->
					<div class="col-md-4" id="right-menu">
						<hr class="thumbs-hr">
						<div class="row">
							<div class="col-md-12">
								<h2>Artikel Terbaru</h2>
							</div>
						</div>
						<div class="thumbs-article">
							<div class="row">
								<div class="col-md-5">
									<div class="thumbs-image" style="background-image:url('img/app1.jpg')"></div>
								</div>
								<div class="col-md-7 thumbs-content">
									<a href=""><span class="text-desc">Tips & Trick</span></a> 
									<a href="" class="thumbs-link"><p class="thumbs-title">5 Tips Ngoding untuk Menjadi Programer yang Lebih Professional</p></a>
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
									<a href=""><span class="text-desc">Tips & Trick</span></a> 
									<a href="" class="thumbs-link"><p class="thumbs-title">Ini Perbedaan let dan var Yang Harus Kamu Ketahui Pada Javascript</p></a>
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
									<a href=""><span class="text-desc">Tips & Trick</span></a> 
									<a href="" class="thumbs-link"><p class="thumbs-title">Function Array Baru di Javascript ES6 dan ES7</p></a>
								</div>
							</div>
						</div>

						<br>
						<!-- menu kanan baca juga  -->
						<div class="row">
							<div class="col-md-12">
								<h2>Baca Juga</h2>
							</div>
						</div>
						<div class="row">
							<div class="right-menu">
								<ul>
									<li><a href="">Judul Artikel Judul Artikel Judul Artikel Judul Artikel </a></li>
									<li><a href="">Judul Artikel Judul Artikel  </a></li>
									<li><a href="">Judul Artikel Judul Artikel Judul Artikel </a> </li>
									<li><a href="">Judul Artikel  </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- COMMENT -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="disqus_thread"></div>
						<script>

						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://refojunior.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				</div>
			</div>
		</div>
	</section>

	<section id="article">
		<div class="container" >
			<div class="row">
				<div class="col-md-12">
					<h2>Baca Juga</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
		        	<div class="bottom-list" style="background-image:url('img/carousel.jpg')"></div>
		        	<div class="bottom-caption">
		        		<span class="bottom-category">Tips & Trick</span>
		        		<div class="bottom-title">
			        		<a href="">Judul Artikel Judul Artikel Judul Artikel Judul Artikel Judul Artikel Judul Artikel </a>
			        	</div><br>
		        	</div>
	        	</div>
	        	<div class="col-md-4">
		        	<div class="bottom-list" style="background-image:url('img/carousel.jpg')"></div>
		        	<div class="bottom-caption">
		        		<span class="bottom-category">Tips & Trick</span>
		        		<div class="bottom-title">
			        		<a href="">Judul Artikel Judul Artikel Judul Artikel Judul Artikel Judul Artikel Judul Artikel </a>
			        	</div><br>
		        	</div>
	        	</div>
	        	<div class="col-md-4">
		        	<div class="bottom-list" style="background-image:url('img/carousel.jpg')"></div>
		        	<div class="bottom-caption">
		        		<span class="bottom-category">Tips & Trick</span>
		        		<div class="bottom-title">
			        		<a href="">Judul Artikel Judul Artikel Judul Artikel Judul Artikel Judul Artikel Judul Artikel </a>
			        	</div><br>
		        	</div>
	        	</div>
			</div>
		</div>
		
	</section>

<?php require_once('layouts/footer.php') ?>