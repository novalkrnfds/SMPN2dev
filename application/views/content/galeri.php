<div class="wrapper">
    <div class="inner dark">
		<div class="page-intro clearfix">
			<h1 class="page-title">Galeri Sekolah</h1>
		</div>
		<div id="portfolio">
			<ul class="filter">
				<li><a class="active" href="#" data-filter="*">All</a></li>
				<li><a href="#" data-filter=".Fasilitas">Fasilitas</a></li>
				<li><a href="#" data-filter=".Ekstrakurikuler">Ekstrakulikuler</a></li>
				<li><a href="#" data-filter=".Kegiatan">Kegiatan</a></li>
				<li><a href="#" data-filter=".video">Video</a></li>
			</ul>
			<ul class="items col4">
			<?php if($gallery)
			foreach($gallery as $g) : ?>
				<li class="item <?php echo $g->tag; ?>">
					<div class="overlay">
						<a href="<?php echo base_url().'admin/assets/uploads/gallery/'. $g->gambar ?>" class="fancybox-media">
							<img src="<?php echo base_url().'admin/assets/uploads/gallery/'. $g->gambar ?>" alt="<?php echo $g->keterangan; ?>" />
						</a>
					</div>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
		<hr>
        <div class="page-navi">
          <ul>
            <li><a href="#" class="current">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next</a></li>
            <li><a href="#">Last</a></li>
          </ul>
        </div>
	</div>
</div>
<!-- End Wrapper --> 