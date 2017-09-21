<nav id="menu" class="menu">
	<ul id="tiny">
		<li class="<?php if($this->uri->segment(1) == null){echo "active";}?>">
			<a href="<?php echo base_url();?>">Home</a>
		</li>
		<li class="<?php if($this->uri->segment(2) == "Profil" || $this->uri->segment(2) == "Sejarah" || $this->uri->segment(2) == "Saranaprasarana" || $this->uri->segment(2) == "Prestasi" || $this->uri->segment(2) == "Struktur_organisasi" || $this->uri->segment(2) == "Visimisi"){echo "active";}?>">
			<a href="#">Profil</a>
			<ul>
				<li><a href="<?php echo base_url()."Profil/Sejarah"; ?>">Sejarah Sekolah</a></li>
				<li><a href="<?php echo base_url()."Profil/Struktur_organisasi"; ?>">Struktur Organisasi</a></li>
				<li><a href="<?php echo base_url()."Profil/Visimisi"; ?>">Visi & Misi</a></li>
				<li><a href="<?php echo base_url()."Profil/Saranaprasarana"; ?>">Sarana & Prasarana</a></li>
				<li><a href="<?php echo base_url()."Profil/Prestasi"; ?>">Prestasi</a></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->segment(2)=="Galeri"){echo "active";}?>">
			<a href="<?php echo base_url('Web/Galeri'); ?>">Galeri</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="Berita" || $this->uri->segment(2)=="id"){echo "active";}?>">
			<a href="<?php echo base_url('Berita');?>">Berita</a>
		</li>
		<li>
			<a href="#">Akademik</a>
			<ul>
				<li><a href="#">Agenda Kegiatan</a></li>
				<li><a href="#">Pengumuman</a></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->segment(2)=="Kontak"){echo "active";}?>">
			<a href="<?php echo base_url()."Web/Kontak"; ?>">Kontak</a>
		</li>
	</ul>
</nav>