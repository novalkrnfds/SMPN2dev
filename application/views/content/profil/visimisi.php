<div class="wrapper">
    <div class="inner light">
		<div class="page-intro clearfix">
			<h1 class="page-title">Visi & Misi</h1>
		</div>
		<!--<h1>Visi</h1>
		<blockquote>
			<p><br><i class="icon-quote special"></i> &nbsp;Unggul Dalam Mutu, Berpijak Pada Iman Dan Takwa.<br><br></p>
		</blockquote>
		<p style="text-align:justify">
			Kami memilih visi ini untuk tujuan jangka panjang, jangka menengah dan jangka pendek. 
			Visi ini menjiwai warga sekolah kami untuk selalu mewujudkannya setiap saat dan berkelanjutan dalam mencapai tujuan sekolah.</p>
		<div class="one-half">
			<h5>Visi tersebut mencerminkan profil dan cita-cita sekolah yang :</h5>
			<ol class="">
				<li>Berorientasi ke depan dengan memperhatikan potensi kekinian.</li>
				<li>Sesuai dengan norma dan harapan masyarakat. </li>
				<li>Ingin mencapai keunggulan.</li>
				<li>Mendorong semangat dan komitmen seluruh warga sekolah.</li>
				<li>Mendorong adanya perubahan yang lebih baik.</li>
				<li>Mengarahkan langkah-langkah strategis (misi) sekolah.</li>
			</ol>
		</div> !-->
		
		<?php
		$no= 1;
		if($visi)
			foreach($visi as $b) :
				echo $b->visi;
			endforeach;
		?>
		
		
		<div class="clear"></div>
		<hr />
		<!--<h1>Misi</h1>
		<blockquote>
			<p><br><i class="icon-quote special"></i> &nbsp;Disiplin  Dalam  Kerja, Mewujudkan Manajemen Kekeluargaan, Kerjasama, Pelayanan Prima Dengan Meningkatkan Silaturahmi.<br><br></p>
		</blockquote>
		<h5>Penjabaran misi di atas meliputi :</h5>
		<div class="third-half">
			<ol class="">
				<li>Melaksanakan pembelajaran dan bimbingan secara efektif sehingga setiap siswa berkembang secara optimal, sesuai dengan potensi yang dimiliki.</li>
				<li>Menumbuhkan semangat keunggulan secara intensif kepada seluruh warga sekolah.</li>
				<li>Mendorong dan membantu setiap siswa untuk mengenali potensi dirinya, sehingga dapat berkembang secara optimal.</li>
				<li>Menumbuhkan dan mendorong keunggulan dalam penerapan ilmu pengetahuan, teknologi dan seni.</li>
				<li>Menumbuhkan penghayatan terhadap ajaran agama yang dianut dan budaya bangsa sehingga terbangun siswa yang kompeten dan berakhlak mulia.</li>
				<li>Mendorong lulusan yang berkualitas, berprestasi, berakhlak tinggi, dan bertaqwa pada Tuhan Yang Maha Esa. </li>
			</ol>
		</div>
		<hr>
		<h1>Tujuan SMPN 2 Sungah Penuh</h1>
		<h5>Tujuan sekolah kami merupakan jabaran dari visi dan misi sekolah agar komunikatif dan bisa diukur sebagai berikut :</h5>
		<div class="">
			<ul class="unordered">
				<li>Unggul dalam kegiatan keagamaan dan kepedulian sekolah.</li>
				<li>Unggul dalam perolehan nilai UN.</li>
				<li>Unggul dalam persaingan masuk ke jenjang SMA negeri.</li>
				<li>Unggul dalam penerapan ilmu pengetahuan dan teknologi, terutama bidang sains dan matematika.</li>
				<li>Unggul dalam lomba olah raga, kesenian, PMR,  dan Pramuka.</li>
				<li>Unggul dalam kebersihan, Keindahan Linkungan  sekolah.</li>
			</ul>
		</div> !-->
		
		<?php
		$no= 1;
		if($visi)
			foreach($visi as $b) :
				echo $b->misi;
			endforeach;
		?>
	</div>
	<!-- End Sub Footer Wrapper --> 
  
</div>
