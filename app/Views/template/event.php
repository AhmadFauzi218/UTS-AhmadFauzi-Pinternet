<?php include "header.php" ?>
	<?php include "menu.php" ?>

			<!-- banner -->
				<div class="banner">
					<div class="banner-grids">
						<div class="banner-left">
							<div class="banner-left1">
								<div class="banner-left1-grid">
									<img src="<?= base_url(); ?>assets/images/1.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="<?= base_url(); ?>assets/images/4.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
							</div>
							<div class="banner-left2">
								<div class="banner-left1-grid">
									<img src="<?= base_url(); ?>assets/images/3.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="<?= base_url(); ?>assets/images/2.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids studying
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="banner-right">
							<section class="slider">
								<div class="flexslider">
									<ul class="slides">
										<li>
											<div class="services-grid-right-grid1">
												
											</div>
										</li>
										<li>
											<div class="services-grid-right-grid2">
												
											</div>
										</li>
										<li>
											<div class="services-grid-right-grid3">
												
											</div>
										</li>
									</ul>
								</div>
							</section>
									<!--FlexSlider-->
									<script defer src="<?= base_url(); ?>assets/js/jquery.flexslider.js"></script>
									<script type="text/javascript">
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									</script>
									<!--End-slider-script-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner -->
			<!-- gallery -->
				<div class="events">
					<h2>News & Events</h2>
					<div class="events-grids">
						<div class="col-md-8 event-left">
							<div class="event-left1">
								<div class="col-xs-6 event-left1-left">
									<a href="single.html"><img src="<?= base_url(); ?>assets/images/1.jpg" alt=" " class="img-responsive" /></a>
									<div class="event-left1-left-pos">
										<ul>
											<li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>5 Tags</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>200 Likes</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Leo Paul</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xs-6 event-left1-right">
									<h4>25th / march 2016</h4>
									<h3><a href="single.html">I must explain to you how all this mistaken
										idea of denouncing</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="event-left1">
								<div class="col-xs-6 event-left1-right event-left1-right-dummy">
									<h4>28th / march 2016</h4>
									<h3><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="col-xs-6 event-left1-left">
									<a href="single.html"><img src="<?= base_url(); ?>assets/images/2.jpg" alt=" " class="img-responsive" /></a>
									<div class="event-left1-left-pos">
										<ul>
											<li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>5 Tags</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>200 Likes</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Leo Paul</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="event-left1">
								<div class="col-xs-6 event-left1-left">
									<a href="single.html"><img src="<?= base_url(); ?>assets/images/13.jpg" alt=" " class="img-responsive" /></a>
									<div class="event-left1-left-pos">
										<ul>
											<li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>5 Tags</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>200 Likes</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Leo Paul</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xs-6 event-left1-right">
									<h4>25th / march 2016</h4>
									<h3><a href="single.html">Neque porro quisquam est, qui dolorem ipsum quia dolor</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="event-left1">
								<div class="col-xs-6 event-left1-right event-left1-right-dummy">
									<h4>28th / march 2016</h4>
									<h3><a href="single.html">Quis autem vel eum iure ea voluptate velit esse quam</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="col-xs-6 event-left1-left">
									<a href="single.html"><img src="<?= base_url(); ?>assets/images/14.jpg" alt=" " class="img-responsive" /></a>
									<div class="event-left1-left-pos">
										<ul>
											<li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>5 Tags</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>200 Likes</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Leo Paul</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<nav class="paging1">
							  <ul class="pagination paging">
								<li>
								  <a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								  </a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
								  <a href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								  </a>
								</li>
							  </ul>
							</nav>
						</div>
						<div class="col-md-4 event-right">
							<div class="event-right1">
							<div class="search1">
								<form>
									<input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here...';}" required="">
									<input type="submit" value="Send">
								</form>
							</div>
							<div class="categories">
								<h3>Categories</h3>
								<ul>
									<li><a href="#">At vero eos et accusamus et iusto</a></li>
									<li><a href="#">Sed ut perspiciatis unde omnis iste</a></li>
									<li><a href="#">Accusantium doloremque laudantium</a></li>
									<li><a href="#">Vel illum qui dolorem eum fugiat quo</a></li>
									<li><a href="#">Quis autem vel eum iure reprehenderit</a></li>
									<li><a href="#">Neque porro quisquam est, qui dolorem</a></li>
								</ul>
							</div>
							<div class="posts">
								<h3>Blog Posts</h3>
								<div class="posts-grids">
									<div class="posts-grid">
										<div class="posts-grid-left">
											<a href="single.html"><img src="<?= base_url(); ?>assets/images/9.jpg" alt=" " class="img-responsive" /></a>
										</div>
										<div class="posts-grid-right">
											<h4><a href="single.html">Sed ut perspiciatis unde omnis iste natus</a></h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="posts-grid">
										<div class="posts-grid-left">
											<a href="single.html"><img src="<?= base_url(); ?>assets/images/12.jpg" alt=" " class="img-responsive" /></a>
										</div>
										<div class="posts-grid-right">
											<h4><a href="single.html">Neque porro quisquam est, qui dolorem ipsum</a></h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="posts-grid">
										<div class="posts-grid-left">
											<a href="single.html"><img src="<?= base_url(); ?>assets/images/11.jpg" alt=" " class="img-responsive" /></a>
										</div>
										<div class="posts-grid-right">
											<h4><a href="single.html">Nemo enim ipsam voluptatem quia voluptas sit</a></h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<div class="tags tags1">
								<h3>Recent Tags</h3>
								<ul>
									<li><a href="single.html">Themes</a></li>
									<li><a href="single.html">Art</a></li>
									<li><a href="single.html">Music</a></li>
									<li><a href="single.html">Entertainment</a></li>
									<li><a href="single.html">New</a></li>
									<li><a href="single.html">Design</a></li>
									<li><a href="single.html">Books</a></li>
									<li><a href="single.html">Themes</a></li>
									<li><a href="single.html">Art</a></li>
									<li><a href="single.html">Music</a></li>
									<li><a href="single.html">Entertainment</a></li>
									<li><a href="single.html">New</a></li>
									<li><a href="single.html">Design</a></li>
									<li><a href="single.html">Books</a></li>
								</ul>
							</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include "footer.php" ?>