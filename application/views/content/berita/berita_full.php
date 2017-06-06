<div class="wrapper">
	<div class="inner light">
		<div class="page-intro clearfix">
			<h1 class="page-title alignleft">Blog</h1>
			<div class="navigation alignright"> 
				<a href="#" title="Previous">
					<i class='icon-left-open-1'></i>
				</a> 
				<a href="#" title="Next"><i class='icon-right-open-1'></i></a> 
			</div>
		</div>
      
		<!-- Begin Blog -->
		<section class="content full">
			<div class="post">
				<div class="overlay">
					<img src="<?php echo $foto;?>" alt="" />
				</div>
				<div class="post-content">
					<h2><a href="blog-post.html"><?php echo $judul; ?></a></h2>
					<div class="meta"> 
						<span class="date">06 Juni 2017</span> 
						<span class="tags">
							<a href="#">Info</a>, <a href="#">Sekolah</a>
						</span> 
						<span class="comments"><a href="#">3 Comments</a></span> 
					</div>
					<p style="text-align:justify;"><?php echo $isi; ?></p>
				
			   
				</div>
				<div class="clear"></div>
			</div>
			
			<!-- Begin Comments -->
			<div id="comments">
				<h3>4 Comments</h3>
				<ol id="singlecomments" class="commentlist">
					<li class= "clearfix">
						<div class="user">
							<img alt="" src="<?php echo base_url('assets');?>/style/images/art/a1.jpg" class="avatar" />
						</div>
						<div class="message"> 
							<a class="reply-link" href="#">Reply</a>
							<div class="info">
								<h2><a href="#">Isabel</a></h2>
								<div class="meta">February 21, 2010</div>
							</div>
							<p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
						</div>
						<ul class="children">
							<li class= "clearfix">
								<div class="user">
									<img alt="" src="<?php echo base_url('assets');?>/style/images/art/a2.jpg" class="avatar" />
								</div>
								<div class="message"> 
									<a class="reply-link" href="#">Reply</a>
									<div class="info">
										<h2><a href="#">Marianne</a></h2>
										<div class="meta">February 22, 2010</div>
									</div>
									<p>Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit non magna.</p>
								</div>
								<ul class="children">
									<li class= "clearfix">
										<div class="user">
											<img alt="" src="<?php echo base_url('assets');?>/style/images/art/a3.jpg" class="avatar" />
										</div>
										<div class="message"> 
											<a class="reply-link" href="#">Reply</a>
											<div class="info">
												<h2><a href="#">Charlene</a></h2>
												<div class="meta">April 4, 2010</div>
											</div>
											<p>Nullam id dolor id nibh ultricies vehicula ut id. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class= "clearfix">
						<div class="user">
							<img alt="" src="<?php echo base_url('assets');?>/style/images/art/a1.jpg" class="avatar" />
						</div>
						<div class="message"> 
							<a class="reply-link" href="#">Reply</a>
							<div class="info">
								<h2><a href="#">Isabel</a></h2>
								<div class="meta">February 28, 2010</div>
							</div>
							<p>Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</li>
				</ol>
			</div>
			<!-- End Comments -->
			
			<hr />
			
			<!-- Begin Form -->
			<div class="comment-form-wrapper">
				<h3>Would you like to share your thoughts?</h3>
				<p>Your email address will not be published. Required fields are marked *</p>
				<form class="comment-form" name="form_name" action="#" method="post">
					<div class="name-field">
						<input type="text" name="first" title="Name*"/>
					</div>
					<div class="email-field">
						<input type="text" name="first" title="Email*" />
					</div>
					<div class="website-field">
						<input type="text" name="first" title="Website" />
					</div>
					<div class="message-field">
						<textarea name="textarea" id="textarea" rows="5" cols="30" title="Enter your comment here..."></textarea>
					</div>
					<input type="submit" value="Submit" name="submit" class="btn-submit" />
				</form>
			</div>
			<!-- End Form --> 
			
		</section>
		<!-- End Blog --> 
      
		<!-- Begin Sidebar -->
		<aside class="sidebar">
			<div class="sidebox widget">
				<h3>Popular Posts</h3>
				<ul class="post-list">
					<li>
						<h6><a href="blog-post.html">Vivamus sagittis lacus vel augue metus laoreet rutrum dolor auctor.</a></h6>
						<em>3th Oct 2012</em> 
					</li>
					<li>
						<h6><a href="blog-post.html">Scelerisque nisl consectetur et.</a></h6>
						<em>28th Sep 2012</em> 
					</li>
					<li>
						<h6><a href="blog-post.html">Pellentesque ornare sem lacinia quam venenatis vestibulum.</a></h6>
						<em>15th Aug 2012</em>
					</li>
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
  