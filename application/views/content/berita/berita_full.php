<div class="wrapper">
	<div class="inner light">
		<div class="page-intro clearfix">
			<h1 class="page-title alignleft">Info & Berita</h1>
			<div class="navigation alignright">
				<a href="#" title="Previous">
					<i class='icon-left-open-1'></i>
				</a>
				<a href="#" title="Next">
					<i class='icon-right-open-1'></i>
				</a>
			</div>
		</div>

		<!-- Begin Blog -->
		<section class="content full">
			<div class="post">
				<div class="overlay">
					<a href="">
						<img src="<?php echo $berita['gambar'];?>" alt="" />
					</a>
				</div>
				<div class="post-content">
					<h2><a><?php echo $berita['judul']; ?></a></h2>
					<div class="meta">
						<span class="comments">
							<a href="#">4 Comments</a>
						</span>
					</div>
					<p><?php echo $berita['body']; ?>...</p>
					<a href="<?php echo base_url('berita/selengkapnya'. $b->id) ?>" class="more">Selengkapnya →</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- Begin Page Navi -->
			<div class="page-navi">
				<ul>
					<li><?php echo $halaman; ?></li>
				</ul>
			</div>
			<!-- End Page Navi -->

		</section>
		<!-- End Blog -->

		<!-- Begin Sidebar -->
		<aside class="sidebar">
			<div class="sidebox widget">
				<h3>Popular Posts</h3>
				<ul class="post-list">
					<li>
						<h6><a href="blog-post.html">Vivamus sagittis lacus vel augue metus laoreet rutrum dolor auctor.</a></h6>
						<em>3th Oct 2012</em> </li>
					<li>
						<h6><a href="blog-post.html">Scelerisque nisl consectetur et.</a></h6>
						<em>28th Sep 2012</em> </li>
					<li>
						<h6><a href="blog-post.html">Pellentesque ornare sem lacinia quam venenatis vestibulum.</a></h6>
						<em>15th Aug 2012</em> </li>
				</ul>
			</div>
			<div class="sidebox widget">
				<h3>Search</h3>
				<form class="searchform" method="get">
					<input type="text" id="s2" name="s" value="type and hit enter" onfocus="this.value=''" onblur="this.value='type and hit enter'"/>
				</form>
			</div>
			<div class="sidebox widget">
				<h3>Custom Text</h3>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue. Fusce  mauris condimentum.</p>
			</div>
			<div class="sidebox widget">
				<h3>Categories</h3>
				<ul class="list">
					<li><a href="#">Web Design</a> (21)</li>
					<li><a href="#">Photography</a> (19)</li>
					<li><a href="#">Graphic Design</a> (16)</li>
					<li><a href="#">Manipulation</a> (15)</li>
					<li><a href="#">Motion Graphics</a> (12)</li>
				</ul>
			</div>
		</aside>
		<!-- End Sidebar -->

		<div class="clear"></div>
	</div>
</div>
