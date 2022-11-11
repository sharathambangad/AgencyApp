<?php
include('admin/config/dbconfig.php');
?>
<!-- Footer start -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 footer-widget">
                <h3 class="widget-title">LOCATE US </h3>

                <div class="img-gallery">
                    <div class="img-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.78033362144092!2d76.08781087222934!3d11.00216597921634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7caa72c9ac2c5%3A0xa48df6695e99c8a3!2sKolathur%20-%20Malappuram%20Rd%2C%20Kodur%2C%20Kerala%20676504!5e0!3m2!1sen!2sin!4v1635695355070!5m2!1sen!2sin" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- <div class="latest-post-items media">
                    <div class="latest-post-content media-body">
                        <h4>
                            <a href="#">Bulgaria claims to find Europe's 'oldest town'</a>
                        </h4>
                        <p class="post-meta">
                            <span class="author">Posted by John Doe</span>
                            <span class="post-meta-cat">in<a href="#"> Blog</a></span>
                        </p>
                    </div>
                </div> -->
                <!-- 1st Latest Post end -->

                <!-- <div class="latest-post-items media">
                    <div class="latest-post-content media-body">
                        <h4>
                            <a href="#">Few Answers in Case of Murdered Law Professor</a>
                        </h4>
                        <p class="post-meta">
                            <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
                            <span class="post-meta-comments"><i class="icon icon-bubbles4"></i>
                                <a href="#">03</a></span>
                        </p>
                    </div>
                </div> -->
                <!-- 2nd Latest Post end -->

                <!-- <div class="latest-post-items media">
                    <div class="latest-post-content media-body">
                        <h4>
                            <a href="#">Over the year we have lots of experience in our field</a>
                        </h4>
                        <p class="post-meta">
                            <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
                            <span class="post-meta-comments"><i class="icon icon-bubbles4"></i>
                                <a href="#">14</a></span>
                        </p>
                    </div>
                </div> -->
                <!-- 3rd Latest Post end -->
            </div>
            <!--/ End Recent Posts-->

            <div class="col-md-4 col-sm-12 footer-widget">
                <h3 class="widget-title">Flickr Photos</h3>

                <div class="img-gallery">
                    <div class="img-container">
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
                            <img src="images/gallery/1.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
                            <img src="images/gallery/2.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
                            <img src="images/gallery/3.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
                            <img src="images/gallery/4.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
                            <img src="images/gallery/5.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
                            <img src="images/gallery/6.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
                            <img src="images/gallery/7.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
                            <img src="images/gallery/8.jpg" alt="" />
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
                            <img src="images/gallery/9.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <!--/ end flickr -->
            <?php
            $query = "SELECT * FROM address WHERE id =1";
            $query_run = mysqli_query($connection, $query);

            foreach ($query_run as $row) {
            ?>
                <div class="col-md-4 col-sm-12 footer-widget footer-about-us">
                    <h3 class="widget-title">About ClickForDern</h3>
                    <p style=" text-align: justify;text-justify: inter-word;">
                        <?php echo $row['about_desc'] ?>
                    </p>
                    <h4>Address</h4>
                    <p><?php echo $row['address'] ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Phone No.</h4>
                            <p>+(91) <?php echo $row['mobile1'] ?></p>
                            <p>+(91) <?php echo $row['mobile2'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h4>Email:</h4>
                            <p><?php echo $row['email'] ?></p>
                        </div>


                    </div>

                    <p>
                        <a href="contact.php" class="btn btn-primary solid square">Reach Us <i class="fa fa-long-arrow-right"></i></a>
                    </p>
                </div>
            <?php
            }
            ?>
            <!--/ end about us -->
        </div>
        <!-- Row end -->
    </div>
    <!-- Container end -->
</footer>
<!-- Footer end -->

<!-- Footer start -->
<section id="copyright" class="copyright angle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="footer-social unstyled">
                    <li>
                        <?php
                        $query = "SELECT * FROM address WHERE id =1";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $row) {
                        ?>
                            <a title="Twitter" href="<?php echo $row['twitter'] ?>">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Facebook" href="<?php echo $row['facebook'] ?>">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Google+" href="mailto:<?php echo $row['google'] ?>">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="linkedin" href="<?php echo $row['linkedin'] ?>">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a title="Pinterest" href="<?php echo $row['pintrest'] ?>">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
                            </a>
                            <a title="Discord" href="<?php echo $row['discord'] ?>">
                                <span class="icon-pentagon wow bounceIn"><i class="fa fa-discord"></i></span>
                            </a>

                    </li>
                <?php
                        }
                ?>
                </ul>
            </div>
        </div>
        <!--/ Row end -->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="copyright-info">
                    Copyright © ClickForDern 2022. All Rights Reserved.
                    <br>
                    Developed By : ClickForDern
                </div>
            </div>
        </div>
        <!--/ Row end -->
        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-double-up"></i>
            </button>
        </div>
    </div>
    <!--/ Container end -->
</section>
<!--/ Footer end -->

<!-- Javascript Files
    ================================================== -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="js/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="js/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="js/wow.min.js"></script>
<!-- SmoothScroll -->
<script type="text/javascript" src="js/smoothscroll.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="js/waypoints.min.js"></script>
<!-- Template custom -->
<script type="text/javascript" src="js/custom.js"></script>


</div>
<!-- Body inner end -->
</body>

</html>