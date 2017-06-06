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
					<a href="<?php echo base_url()."berita/id/2";?>">
						<img src="<?php echo $foto;?>" alt="" />
					</a> 
				</div>
				<div class="post-content">
					<h2><a href="<?php echo base_url()."berita/id/2";?>"><?php echo $judul; ?></a></h2>
					<div class="meta"> 
						<span class="date">06 Juni 2017</span> 
						<span class="tags">
							<a href="#">Info</a>, <a href="#">Sekolah</a>
						</span> 
						<span class="comments">
							<a href="#">3 Comments</a>
						</span> 
					</div>
					<p style="text-align:justify;"><?php echo substr($isi, 0, 250)."..."; ?></p>
					<a href="<?php echo base_url()."berita/id/2";?>" class="more">Selengkapnya →</a> 
				</div>
				<div class="clear"></div>
			</div>
			<div class="post">
				<div class="overlay"> 
					<a href="blog-post.html">
						<img src="<?php echo base_url();?>assets/style/images/art/b2-full.jpg" alt="" />
					</a> 
				</div>
				<div class="post-content">
					<h2><a href="blog-post.html">Elit Justo Sem Ornare</a></h2>
					<div class="meta"> 
						<span class="date">8 Dec 2012</span> 
						<span class="tags">
							<a href="#">mood</a>, <a href="#">daily</a>, <a href="#">fun</a>
						</span> 
						<span class="comments">
							<a href="#">4 Comments</a>
						</span> 
					</div>
					<p>Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis. </p>
					<a href="blog-post.html" class="more">Continue reading →</a> 
				</div>
				<div class="clear"></div>
			</div>
			<!-- Begin Page Navi -->
			<div class="page-navi">
				<ul>
					<li><a href="#" class="current">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next</a></li>
					<li><a href="#">Last</a></li>
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