<nav id="menu" class="menu">
	<ul id="tiny">
		<li class="<?php if($this->uri->segment(1) == null){echo "active";}?>">
			<a href="<?php echo base_url();?>">Home</a>
		</li>
		<li class="<?php if($this->uri->segment(2) == "profil" || $this->uri->segment(2) == "prestasi" || $this->uri->segment(2) == "struktur_organisasi" || $this->uri->segment(2) == "visimisi"){echo "active";}?>">
			<a href="#">Profil</a>
			<ul>
				<li><a href="#">Sejarah Sekolah</a></li>
				<li><a href="<?php echo base_url()."profil/struktur_organisasi"; ?>">Struktur Organinasi</a></li>
				<li><a href="<?php echo base_url()."profil/visimisi"; ?>">Visi & Misi</a></li>
				<li><a href="<?php echo base_url()."profil/visimisi"; ?>">Sarana & Prasarana</a></li>
				<li><a href="<?php echo base_url()."profil/prestasi"; ?>">Prestasi</a></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->segment(2)=="galeri"){echo "active";}?>">
			<a href="<?php echo base_url()."web/galeri"; ?>">Galeri</a>
		</li>
		<li class="<?php if($this->uri->segment(1)=="berita" || $this->uri->segment(2)=="id"){echo "active";}?>">
			<a href="<?php echo base_url()."berita";?>">Berita</a>
		</li>
		<li>
			<a href="#">Akademik</a>
			<ul>
				<li><a href="#">Agenda Kegiatan</a></li>
				<li><a href="#">Pengumuman</a></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->segment(2)=="kontak"){echo "active";}?>">
			<a href="<?php echo base_url()."web/kontak"; ?>">Kontak</a>
		</li>
	</ul>
</nav>