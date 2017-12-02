<footer> 
	<!-- Begin Inner -->
	<div class="inner">
		<div class="one-third widget">
			<h3 class="widget-title">SMPN 2 SUNGAI PENUH</h3>
			<p style="text-align:justify">
				SMP Negeri 2 Sungai Penuh sejak berdiri tanggal 25 Mei 1960 bernama SGB sampai berubah menjadi SMP Negeri 2 Sungai Penuh, 
				Sejak berdirinya Tahun 1960 sampai sekarang SMP Negeri 2 Sungai Penuh  berkedudukan di Sungai Penuh ibu kota Kabupaten Kerinci 
				sekarang berubah nama Kota Sungai Penuh, tepatnya di Jl.Jend. Sudirman  Kecamatan Sungai Penuh Kota Sungai Penuh.
			</p>
		</div>
		<div class="one-third widget">
		<?php foreach($identitas as $i)
				{ ?>
			<h3 class="widget-title">Alamat</h3>
			<i class="icon-location contact"></i> <?php echo $i['alamat']; ?><br />
			<i class="icon-phone contact"></i><?php echo $i['telp']; ?> <br />
			<i class="icon-mail contact"></i> <a href="mailto:info@smpn2spn.sch.id"><?php echo $i['email']; ?></a> 
		<?php } ?>
		</div>
		<div class="one-third last widget">
			<h3 class="widget-title">LOKASI</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.225627792098!2d101.39050921436616!3d-2.0656659984941688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2da1a67642f333%3A0x5839e8e794e60395!2sSMPN+2+Sungai+Penuh!5e0!3m2!1sen!2sid!4v1496768070707" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="clear"></div>
	</div> 
</footer>
				
<div class="subfooter"> 
	<!-- Begin Inner -->
	<div class="inner">
		<p>© 2017 <a href="<?php base_url();?>"><b>SMP Negeri 2 Sungai Penuh</b></a>. All rights reserved.</p>
		<ul class="social">
		<?php foreach($identitas as $i)
				{ ?>
			<li><a href="<?php echo $i['twitter']; ?>"><i class="icon-s-twitter"></i></a></li>
			<li><a href="<?php echo $i['facebook']; ?>"><i class="icon-s-facebook"></i></a></li>
			<li><a href="<?php echo $i['youtube']; ?>"><i class="icon-s-youtube"></i></a></li>
			<li><a href="#"><i class="icon-s-pinterest"></i></a></li>
			<li><a href="#"><i class="icon-s-flickr"></i></a></li>
			<li><a href="#"><i class="icon-s-vimeo"></i></a></li>
			<?php } ?>
		</ul>
		<div class="clear"></div>
	</div>
	<!-- Begin Inner --> 
</div>