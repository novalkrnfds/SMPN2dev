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
			<?php
			foreach($results as $b) { ?>
			<div class="post">
				
						<img src="<?php echo base_url().'admin/assets/uploads/berita/'. $b->gambar; ?>" alt="" />
					
				<div class="post-content">
					<h2><a href="<?php echo base_url('Berita/Selengkapnya/'. $b->id) ?>"><?php echo $b->judul; ?></a></h2>
					<div class="meta">
						<span class="date"><?php echo $b->dibuat; ?></span>
						<span class="tags">
							<a href="#"><?php echo $b->id_user; ?></a>
						</span>
						<span class="comments">
						</span>
					</div>
					<p><?php echo substr($b->body, 0, 500); ?>...</p>
					<a href="<?php echo base_url('Berita/Selengkapnya/'. $b->id) ?>" class="more">Selengkapnya →</a>
				</div>
				<div class="clear"></div>
			</div>
			<?php } ?>
			<!-- Begin Page Navi -->
			<div class="page-navi">
				<ul>
					<li><?php echo $links; ?></li>
				</ul>
			</div>
			<!-- End Page Navi -->

		</section>
		<!-- End Blog -->

		<!-- Begin Sidebar -->
		<aside class="sidebar">
			<div class="sidebox widget">
				<h3>Postingan Terakhir</h3>
				<ul class="post-list">
					<li>
						<h6><a href="#">Website Resmi SMPN 2 Sungai Penuh</a></h6>
						<em>20 Juni 2017</em> </li>
					<li>
						<h6><a href="#">Penerimaan Siswa dan Siswi Baru Tahun Ajaran 2017/2018</a></h6>
						<em>11 Juni 2017</em> </li>
					<li>
						<h6><a href="#">Libur Bulan Puasa</a></h6>
						<em>09 Juni 2017</em> </li>
				</ul>
			</div>
			<div class="sidebox widget">
				<h3>Pencarian</h3>
				<form class="searchform" method="get">
					<input type="text" id="s2" name="s" value="type and hit enter" onfocus="this.value=''" onblur="this.value='type and hit enter'"/>
				</form>
			</div>
			<div class="sidebox widget">
				<h3>Testimoni</h3>
				<p>Under Construction...</p>
			</div>
			<div class="sidebox widget">
				<h3>Kategori</h3>
				<ul class="list">
					<li><a href="#">Ekstrakurikuler</a></li>
					<li><a href="#">Berita</a></li>
					<li><a href="#">Pengumuman</a></li>
					<li><a href="#">Akademik</a></li>
				</ul>
			</div>
		</aside> 
		<!-- End Sidebar -->

		<div class="clear"></div>
	</div>
</div>
