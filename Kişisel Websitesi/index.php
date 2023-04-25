<?php 
include("panel/db/db.php");
  
function bilgiler($conn){
    $sql = "SELECT * FROM panel";
    $result = mysqli_query($conn, $sql);
    $veriler = array(); 
    if (mysqli_num_rows($result) > 0) { //if the line number is greater than 0, there is data.
        while($row = mysqli_fetch_assoc($result)) {
           
            $veriler[] = array(
                "name" => $row["name"],
                "headerAboutme" => $row["headeraboutme"],
                "mailText" => $row["mailtext"],
                "mailAdress" => $row["mailadress"],
                "ctext1" => $row["ctext1"],
                "ctext2" => $row["ctext2"],
                "aboutme" => $row["aboutme"],
				"link1" => $row["link1"],
				"link2" => $row["link2"],
				"link3" => $row["link3"],
				"icon1" => $row["icon1"],
				"icon2" => $row["icon2"],
				"icon3" => $row["icon3"],
            );
        }
    } else {
        echo "no valid value found.";
    }
    return $veriler; 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>İbrahim Melih Ordulu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="İbrahim Melih Ordulu" />
	<meta name="keywords" content="İbrahim melih ordulu, melih ordulu cv, melih ordulu" />
	<meta name="author" content="ibrahim melih ordulu" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!--
		Load CSS
	-->
	<script src="https://kit.fontawesome.com/e48321c271.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/basic.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/blogs.css" />
	<link rel="stylesheet" href="css/ionicons.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<?php $veri=bilgiler($conn);  ?>
	<!--
		Background Gradient
	-->
	<link rel="stylesheet" href="css/gradient.css" />

	<!--
		Template New-Skin
	-->
	<link rel="stylesheet" href="css/new-skin/new-skin.css" />


	<link rel="stylesheet" href="css/demos/demo-1-colors.css" />

	<link rel="shortcut icon" href="images/favicons/favicon.ico">

</head>

<body>
	<div class="page new-skin">

		<!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- background -->
		<div class="background gradient">
			<ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
		</div>

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!--
				Header
			-->
			<header class="header">

				<!-- header profile -->
				<div class="profile">
					<div class="title"><?php echo $veri[0]["name"]; ?></div>
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
							<p><?php echo $veri[0]["ctext1"]; ?></p>
							<p><?php echo $veri[0]["ctext2"]; ?></p>
						</div>
					</div>
				</div>
			

				<!-- menu -->
				<div class="top-menu">
					<ul>
						<li class="active">
							<a href="#about-card">
								<span class="icon ion-person"></span>
								<span class="link">About</span>
							</a>
						</li>
						<li>
							<a href="#works-card">
								<span class="icon ion-paintbrush"></span>
								<span class="link">Works</span>
							</a>
						</li>
						<li>
							<a href="#blog-card">
								<span class="icon ion-chatbox-working"></span>
								<span class="link">Blog</span>
							</a>

						</li>
						<li>
							<a href="#contacts-card">
								<span class="icon ion-at"></span>
								<span class="link">Contact</span>
							</a>
						</li>
					
					</ul>
				</div>

			</header>

			<!--
				Card - Started
			-->
			<div class="card-started" id="home-card">

				<!--
					Profile
				-->
				<div class="profile no-photo">

					<!-- profile image -->
					<div class="slide" style="background-image: url(images/93899.png);"></div>

					<!-- profile titles -->
					<div class="title"><?php echo $veri[0]["name"]; ?></div>
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
							<p><?php echo $veri[0]["ctext1"]; ?></p>
							<p><?php echo $veri[0]["ctext2"]; ?></p>
						</div>
					</div>

					<!-- profile socials -->
					<div class="social">
						<a target="_blank" href="<?php echo $veri[0]["link1"]; ?>"><span class="<?php echo $veri[0]["icon1"]; ?>"></span></a>
						<a target="_blank" href="<?php echo $veri[0]["link2"]; ?>"><span class="<?php echo $veri[0]["icon2"]; ?>"></span></a>
						<a target="_blank" href="<?php echo $veri[0]["link3"]; ?>"><span class="<?php echo $veri[0]["icon3"]; ?>"></span></a>
						
						
					</div>

					<!-- profile buttons -->
				 	<div class="lnks">
						<a href="mailto:<?php echo $veri[0]["mailAdress"]; ?>" class="lnk discover">
							<span class="text"><?php echo $veri[0]["mailText"]; ?></span>
							<span class="arrow"></span>
						</a>
					</div>

				</div>

			</div>

			<!--
				Card - About
			-->
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">

					<!--
						About
					-->
					<div class="content about">

						<!-- title -->
						<div class="title"><?php echo $veri[0]["headerAboutme"]; ?></div>

						<!-- content -->
						
							<div class="textim">				
							<p>	<?php echo $veri[0]["aboutme"]; ?></p>
									
							<div class="clear"></div>
						</div>

					</div>
				</div>
			</div>

	

			
			<div class="card-inner" id="works-card">
				<div class="card-wrap">
					
					<div class="content works">

						
						<div class="title">Recent Works</div>

						
						<div class="filter-menu filter-button-group">
							<div class="f_btn active">
								<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="photo" />Image</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="gallery" />Gallery</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="video" />Video</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="music" />Music</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="design" />Content</label>
							</div>
						</div>

						
					<div class="row grid-items border-line-v">

							
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="images/works/work1.jpg" class="has-popup-image">
											<img src="images/works/work1.jpg" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="images/works/work1.jpg" class="name has-popup-image">Motorcycle Helmet</a>
										<div class="category">Image</div>
									</div>
								</div>
							</div>

							
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://vimeo.com/97102654" class="has-popup-video">
											<img src="images/works/work2.jpg" alt="" />
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="https://vimeo.com/97102654" class="name has-popup-video">Minimalism Shapes</a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>

						
							<div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
											<img src="images/works/work3.jpg" alt="" />
											<span class="info">
												<span class="ion ion-music-note"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">Staircase</a>
										<div class="category">Music</div>
									</div>
								</div>
							</div>

						
							<div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#popup-1" class="has-popup-media">
											<img src="images/works/work4.jpg" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-1" class="name has-popup-media">Mobile Application</a>
										<div class="category">Content</div>
									</div>
									<div id="popup-1" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="images/works/work4.jpg" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by described up household therefore
															attention. Excellence decisively nay man yet impression for contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another as studied it to evident.
															Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh
															removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on.
															Increasing sufficient everything men him admiration unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							
							<div class="col col-d-6 col-t-6 col-m-12 grid-item gallery border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#gallery-1" class="has-popup-gallery">
											<img src="images/works/work5.jpg" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
										<div id="gallery-1" class="mfp-hide">
											<a href="images/works/work6.jpg"></a>
											<a href="images/works/work1.jpg"></a>
											<a href="images/works/work5.jpg"></a>
										</div>
									</div>
									<div class="desc">
										<a href="images/works/work5.jpg" class="name has-popup-image">Gereal Travels</a>
										<div class="category">Gallery</div>
									</div>
								</div>
							</div>

							
							<div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true" class="has-popup-music">
											<img src="images/works/work8.jpg" alt="" />
											<span class="info">
												<span class="ion ion-music-note"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">Daylight Entrance</a>
										<div class="category">Music</div>
									</div>
								</div>
							</div>

							
							<div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="https://vimeo.com/97102654" class="has-popup-video">
											<img src="images/works/work6.jpg" alt="" />
											<span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="https://vimeo.com/97102654" class="name has-popup-video">Architecture</a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>

				
							<div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="#popup-2" class="has-popup-media">
											<img src="images/works/work7.jpg" alt="" />
											<span class="info">
												<span class="ion ion-images"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-2" class="name has-popup-media">Social Website</a>
										<div class="category">Content</div>
									</div>
									<div id="popup-2" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="images/works/work7.jpg" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by described up household therefore
															attention. Excellence decisively nay man yet impression for contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another as studied it to evident.
															Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh
															removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on.
															Increasing sufficient everything men him admiration unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="clear"></div>
						</div> 

					</div>

				</div>
			</div>

			
		
			
			<div class="card-inner blog" id="blog-card">
				<div class="card-wrap">

				
					<div class="content blog">

					
						<div class="title">
							<span >Blog</span>
						</div>

						
						<div class="row border-line-v">
					
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="images/blog/blog1.jpg" alt="By spite about do of allow" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html">
											<span class="date">April 28, 2020</span>
										</a>
										<a href="blog-post-new.html" class="name">By spite about do of allow</a>
										<div class="text">
											<p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
										</div>
									</div>
								</div>
							</div>
					
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="images/blog/blog2.jpg" alt="By spite about do of allow" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html">
											<span class="date">April 28, 2020</span>
										</a>
										<a href="blog-post-new.html" class="name">By spite about do of allow</a>
										<div class="text">
											<p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
										</div>
									</div>
								</div>
							</div>
					
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="images/blog/blog3.jpg" alt="By spite about do of allow" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html">
											<span class="date">April 28, 2020</span>
										</a>
										<a href="blog-post-new.html" class="name">By spite about do of allow</a>
										<div class="text">
											<p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
										</div>
									</div>
								</div>
							</div>
					
							<div class="col col-d-6 col-t-6 col-m-12">
								<div class="box-item">
									<div class="image">
										<a href="blog-post-new.html">
											<img src="images/blog/blog1.jpg" alt="By spite about do of allow" />
											<span class="info">
												<span class="ion ion-document-text"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post-new.html">
											<span class="date">April 28, 2020</span>
										</a>
										<a href="blog-post-new.html" class="name">By spite about do of allow</a>
										<div class="text">
											<p>Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te cule tation munere noluisse. Enim torquatos&#8230;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="pager">
							<nav class="navigation pagination">
								<div class="nav-links">
									<span class="page-numbers current">1</span>
									<a class="page-numbers" href="#">2</a>
									<a class="next page-numbers" href="#">Next</a>
								</div>
							</nav>
						</div>

					</div>

				</div>
			</div>

			<!--
				Card - Contacts
			-->
			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->

					</div>	
					 <div class="content contacts">

						

						
						<div class="row">
							
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

		</div>

		<div class="s_overlay"></div>
		<div class="content-sidebar">
			<div class="sidebar-wrap search-form">
				<aside id="secondary" class="widget-area">
					<section id="search-2" class="widget widget_search">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search …" value="" name="s">
						</label>
						<input type="submit" class="search-submit" value="Search">
					</section>
					<section class="widget widget_recent_entries">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-word">Recent</span> Posts</span>
						</h2>
						<ul>
							<li>
								<a href="#">Creativity Is More Than</a>
							</li>
							<li>
								<a href="#">Designing the perfect</a>
							</li>
							<li>
								<a href="#">Music Player Design</a>
							</li>
							<li>
								<a href="#">A Song And Dance Act</a>
							</li>
							<li>
								<a href="#">By spite about do of allow</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_recent_comments">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-word">Recent</span> Comments</span>
						</h2>
						<ul>
							<li class="recentcomments">
								<span class="comment-author-link">JOHN SMITH</span> on <a href="#">Creativity Is More Than</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">ADAM SMITH</span> on <a href="#">Creativity Is More Than</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">admin</span> on <a href="#">Designing the perfect</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">admin</span> on <a href=#">Designing the perfect</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">James</span> on <a href="#">Designing the perfect</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_archive">
						<h2 class="widget-title">
							<span class="widget-title-span">
								<span class="first-letter">Archives</span>
							</span>
						</h2>
						<ul>
							<li>
								<a href="#">November 2018</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_categories">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-letter">Categories</span></span>
						</h2>
						<ul>
							<li class="cat-item cat-item-2">
								<a href="#">Design</a>
							</li>
							<li class="cat-item cat-item-3">
								<a href="#">Music</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_meta">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-letter">Meta</span></span>
						</h2>
						<ul>
							<li><a href="#">Log in</a></li>
							<li><a href="#">Entries feed</a></li>
							<li><a href="#">Comments feed</a></li>
							<li><a href="#">WordPress.org</a></li>
						</ul>
					</section>
				</aside>
			</div>
			<span class="close"></span>
		</div>

	</div>

	<!--
		jQuery Scripts
	-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/jquery.slimscroll.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/typed.js"></script>
	<script src="https://use.fontawesome.com/8da76d029b.js"></script>

	<!--
		Google map api
	-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>

	<!--
		Main Scripts
	-->
	<script src="js/scripts.js"></script>

</body>
</html>
