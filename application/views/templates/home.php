<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>SMPN 2 Sungai Penuh</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/style/images/icon.png" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/css/customForTable.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/css/media-queries.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/js/fancybox/jquery.fancybox.css" media="all" />
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/style/type/fontello.css">
		<link href="<?php echo base_url();?>assets/strukturjs/css/primitives.latest.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/ddsmoothmenu.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/twitter.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/selectnav.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.slickforms.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.easytabs.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.fitvids.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/strukturjs/js/jquery/jquery-ui-1.10.2.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/strukturjs/js/primitives.min.js"></script>
		
		<style type="text/css">
			div.fs-font {
			  font-size: 2em;
			}
			
			div.sc-font {
			  font-size: 3em;
			  fon-color: #f3f3f3;
			}
		</style>
		
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function () {
				var options = new primitives.orgdiagram.Config();

				var items = [
					new primitives.orgdiagram.ItemConfig({
						id: 0,
						parent: null,
						title: "Kepala Sekolah",
						description: "MISYENNI, S.Pd",
						image: "<?php echo base_url();?>assets/strukturjs/images/photos/avatarF.png"
					}),
					new primitives.orgdiagram.ItemConfig({
						id: 1,
						parent: 0,
						title: "Wa. Kepala Sekolah",
						description: "DARMANSYAH, S.pd",
						image: "<?php echo base_url();?>assets/strukturjs/images/photos/avatar.png"
					}),
					new primitives.orgdiagram.ItemConfig({
						id: 2,
						parent: 0,
						title: "Wa. Kepala Sekolah",
						description: "HARYALIS, S.pd",
						image: "<?php echo base_url();?>assets/strukturjs/images/photos/avatar.png"
					}),
					new primitives.orgdiagram.ItemConfig({
						id: 3,
						parent: 0,
						title: "Wa. Kepala Sekolah",	
						description: "HAMDI KADIR, S.pd",
						image: "<?php echo base_url();?>assets/strukturjs/images/photos/avatar.png"
					}),
				];

				options.items = items;
				options.cursorItem = 0;

				jQuery("#strukturorganisasi").orgDiagram(options);
			});//]]>  
		</script>

	</head>
	<body class="full-layout">
		<!-- Begin Body Wrapper -->
		
		<div class="body-wrapper"> 
			<!-- Begin Top Wrapper -->
			<div class="top-wrapper">
				<div class="inner">
					<!-- Begin Header -->
					<header>
						<div class="logo">
							<a href="<?php echo base_url();?>">
								<img src="<?php echo base_url();?>assets/style/images/logoo.png" width="300px" alt="" />
							</a>
						</div>
						
						<!-- nav -->
						<?php echo $header;?>
						<!-- nav -->
						
						<div class="clear"></div>
					</header>
					<!-- End Header -->
				</div>
			</div>
				
			<!-- ini mulai isi content -->
			<?php echo $content;?>
			<!-- ini akhir isi content -->
				
			
			<!-- Begin footer -->
			<?php echo $footer;?>
			<!-- End Footer  --> 
  
		</div>
		
		<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/scripts.js"></script>
	</body>
</html>