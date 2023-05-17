<section id="main-container">
	<div class="container">
		<div class="row">
			<?php
          $query = "SELECT * FROM blogs";
          $query_run = mysqli_query($connection, $query);

          if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
			<!-- Blog start -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<!-- 1st post start -->
				<div class="post">
					<!-- post image start -->
					<div class="post-image-wrapper">
						<?php echo '<img src="' . $blog_image_path . $row['blog_db_image'] . '" class="img-responsive" alt="" />' ?>
						<span class="blog-date">
							<?php echo $row['blog_db_date']; ?>
						</span>
					</div>
					<!-- post image end -->
					<div class="post-header clearfix">
						<h2 class="post-title">
							<?php echo $row['blog_title']; ?>
						</h2>
						<div class="post-meta">
							<span class="post-meta-author">Posted by Admin</span>
							<div class="pull-right">
								<span class="post-meta-comments"><i class="fa fa-comment-o"></i> 0</span>
								<span class="post-meta-hits"><i class="fa fa-heart-o"></i> 0</span>
							</div>
						</div>
						<!-- post meta end -->
					</div>
					<!-- post heading end -->
					<div class="post-body">
						<p style=" text-align: justify;text-justify: inter-word;">
							<?php echo $row['description']; ?>
						</p>
					</div>
				</div>
				<!-- 1st post end -->
			</div>
			<?php
            }
          }
          ?>
			<!--/ Content col end -->
		</div>
		<!--/ row end -->
	</div>
	<!--/ container end -->
</section>