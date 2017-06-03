<nav id="menu" class="menu">
	<ul id="tiny">
		<li class="<?php if($this->uri->segment(1) == null){echo "active";}?>">
			<a href="<?php echo base_url();?>">Home</a>
		</li>
		<li class="<?php if($this->uri->segment(2) == "profil" || $this->uri->segment(2) == "struktur_organisasi" || $this->uri->segment(2) == "visimisi"){echo "active";}?>">
			<a href="#">Profil</a>
			<ul>
				<li><a href="#">Sejarah Sekolah</a></li>
				<li><a href="<?php echo base_url()."index.php/profil/struktur_organisasi"; ?>">Struktur Organinasi</a></li>
				<li><a href="<?php echo base_url()."index.php/profil/visimisi"; ?>">Visi & Misi</a></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->segment(2)=="galeri"){echo "active";}?>">
			<a href="<?php echo base_url()."index.php/web/galeri"; ?>">Galeri</a>
		</li>
		<li>
			<a href="#">Fasilitas</a>
			<ul>
				<li><a href="#">To do list</a></li>
				<li><a href="#">To do list</a></li>
				<li><a href="#">To do list</a></li>
			</ul>
		</li>
		<li>
			<a href="#">To do list</a>
			<ul>
				<li><a href="#">To do list</a></li>
				<li><a href="#">To do list</a></li>
				<li><a href="#">PTo do list</a></li>
				<li><a href="#">To do list</a></li>
				<li><a href="#">To do list</a></li>
				<li><a href="#">To do list</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Kontak</a>
		</li>
	</ul>
</nav>