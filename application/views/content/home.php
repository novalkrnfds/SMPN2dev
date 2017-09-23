<div class="wrapper">	
	<div class="inner light no-margin">
		<div class="bannercontainer">
			<div class="banner">
				<ul>
					<li data-transition="random"> <img src="https://ret-tech.id/SMPNDEV/SMPN2/images/header/2.jpg" alt="" />
						<!--<div class="caption sft red-bg" data-x="70" data-y="70" data-speed="300" data-start="1500" data-easing="easeOutExpo">Manage your communications easily</div>
						<div class="caption sfl white-bg" data-x="70" data-y="151" data-speed="300" data-start="2100" data-easing="easeOutExpo"><i class="icon-check"></i> Etiam porta sem malesuada magna mollis euismod.</div>-->
						<div class="caption sfl fs-font" data-x="70" data-y="151" data-speed="300" data-start="1000" data-easing="easeOutExpo"> <font color="#fcfcfc"><b>Selamat Datang di Website</font></b></div>
						<div class="caption sfl sc-font" data-x="70" data-y="198" data-speed="300" data-start="1500" data-easing="easeOutExpo"> <font color="#fcfcfc">SMP Negeri 2 Sungai Penuh</font></div>
						<!--div class="caption sfb" data-x="70" data-y="319" data-speed="300" data-start="3900" data-easing="easeOutExpo"><a href="project.html" class="button big navy">View Projects</a></div-->
					</li>
					<li data-transition="random"> <img src="https://ret-tech.id/SMPNDEV/SMPN2/images/kegiatan/6.jpg" alt="" />
						<div class="caption navy-bg lfr" data-x="70" data-y="151" data-speed="300" data-start="800" data-easing="easeOutExpo">Sekolah Inklusi</div>
						<div class="caption navy-bg sc-font lfr" data-x="70" data-y="205" data-speed="300" data-start="1000" data-easing="easeOutExpo"> <font color="#fcfcfc">Menerima siswa dari berbagai latar belakang agama, <br>
					kemampuan intelektual dan mental</font></div>
					</li>
					<li data-transition="random"> <img src="https://ret-tech.id/SMPNDEV/SMPN2/images/kegiatan/2.jpg" alt="" />
						<div class="caption sfl fs-font" data-x="679" data-y="151" data-speed="300" data-start="1000" data-easing="easeOutExpo"> <font color="#fcfcfc"><b>Membentuk Siswa Berprestasi</font></b></div>
						<div class="caption sfl sc-font" data-x="630" data-y="198" data-speed="300" data-start="1500" data-easing="easeOutExpo"> <font color="#fcfcfc">Dengan Fasilitas Terbaik</font></div>
					</li>
					<li data-transition="random"> <img src="http://foto2.data.kemdikbud.go.id/getImage/10502332/3.jpg" alt="" />
						<!--div class="caption navy-bg sft" data-x="80" data-y="80" data-speed="300" data-start="800" data-easing="easeOutExpo">Observe the operations and opportunities</div-->
					</li>
					<li data-transition="random"> <img src="https://ret-tech.id/SMPNDEV/SMPN2/images/header/1.jpg" alt="" />
						<!--div class="caption navy-bg sft" data-x="80" data-y="80" data-speed="300" data-start="800" data-easing="easeOutExpo">Observe the operations and opportunities</div-->
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom"></div>
			</div>
		</div>
	</div>
	<div class="inner dark">
		<div class="aligncenter">
			<h1 class="lined">Selamat Datang di Website Resmi SMPN 2 Sungai Penuh</h1>
		</div>
	</div>
	<div class="inner light">
	<?php if($data)
			foreach($data as $u) : ?>
		<h3>Sambutan Kepala Sekolah</h3>
		<div class="one-fourth">
			<img src="<?php echo base_url();?>admin/assets/uploads/<?php echo $u->foto_kepsek; ?>" width="100%" alt="Drs. Moh. Khotim, M.Pd">
		</div>
		<div class="row-item">
				<p style="text-align: justify;"><?php echo $u->sambutan; ?></p>
				
			<div class="gap" style="height: 30px;">
			</div>
		</div>
	<?php endforeach; ?>
	</div>
	<div class="inner dark">
	<?php if($berita)
			foreach($berita as $b) : ?>
		<div class="one-half">
			<h3>Info Sekolah</h3>
			<div class="tabs tab-container">
				<ul class="etabs">
					<li class="tab"><a href="#berita">Berita</a></li>
					<li class="tab"><a href="#kegiatan">Kegiatan</a></li>
				</ul>
				<div class="panel-container">
					<div id="berita">
						<div class="grid-wrapper">
							<a href="#"><b><?php echo $b->judul; ?></b></a>
							<p style='text-align: justify;'><img src='<?php echo base_url();?>admin/assets/uploads/berita/<?php echo $b->gambar; ?>' width='100px' style='float:left; margin: 5px 10px 0 0; padding: 3px; background: #fff; border: 1px solid #dcdcdc'>
								<?php echo substr($b->body, 0, 180); ?>... <a href="<?php echo base_url('Berita/Selengkapnya/'. $b->id) ?>" class="more">Selengkapnya →</a></p><br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		
		<div class="one-half last">
			<h3>Pengumuman</h3>
			<!-- Begin Toggle -->
			
			<?php
			
			foreach($pengumuman as $p) { 
				if ($p > 0)
				{?>
			<div class="toggle">
				<h4 class="title"><?php echo $p->judul; ?></h4>
				<div class="togglebox">
					<div>
						<p><?php echo $p->isi; ?></p>
					</div>
				</div>
			</div>
			<?php } else { ?>
			<div class="toggle">
				<h4 class="title">Tidak Ada Pengumuman</h4>
				<div class="togglebox">
					<div>
						<p>Tidak Ada Pengumuman</p>
					</div>
				</div>
			</div>
			<?php } 
			} ?>
			<!-- End Toggle --> 
		</div>
		<p><font color="#f3f3f3">.</font></p>
		<br>
		<div class="grid-wrapper">
		</div>
		<br>
		<br>
		<br>
		<br>
		<br><br>
	</div>
	
	<div class="inner light">
		<h3 style="text-align:center;">Link Terkait</h3>
			 <div class="one-fifth">
				<a href="http://m-edukasi.kemdikbud.go.id" title="E-dukasi" target="_blank"><img src="<?php echo base_url();?>assets/style/images/edukasi.png" alt=""></a>
			</div>
			<div class="one-fifth">
				<a href="http://jardiknas.kemdikbud.go.id/" title="Jardiknas" target="_blank"><img src="<?php echo base_url();?>assets/style/images/jardiknas.png" alt=""></a>
			</div>
			<div class="one-fifth">
				<a href="https://www.kemdikbud.go.id/" title="Kemdikbud" target="_blank"><img src="<?php echo base_url();?>assets/style/images/kemdiknas.png" alt=""></a>
			</div>
			<div class="one-fifth">
				<a href="http://nisn.data.kemdikbud.go.id/page/data" title="NISN" target="_blank"><img src="<?php echo base_url();?>assets/style/images/logo_nisn2.png" alt=""></a>
			</div>
			<div class="one-fifth last">
				<a href="http://www.simdik.info/datasiswa/index.boge" title="Simdik" target="_blank"><img src="<?php echo base_url();?>assets/style/images/sindik.png" alt=""></a>
			</div>
		<div class="clear"></div>
		<br>
	</div>
</div>