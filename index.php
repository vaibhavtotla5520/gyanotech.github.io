<?php
    include 'header.php';
?>
 <!--search overlay start-->
 <div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <h3>Search Your keyword</h3>
                        <input type="text" class="form-control" placeholder="Search..."/>
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <img class="search-close" src="assets/images/close.png" srcset="assets/images/close@2x.png 2x" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->
<section class="banner banner-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
                <div class="banner-content center-heading">
                    <span class="subheading">Build Your Problem Solving skills</span>
                    <h1>Any Time, Anywhere </h1>
                    <p>We focus on logics and the remaining part is just the syntax<br>"The more the root is strong The more the tree is long"</p>
                    <!-- <a href="#" class="btn btn-main"><i class="fa fa-list-ul mr-2"></i>our Courses </a> -->  
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


<section class="category-section2">
    <div class="container">
        <div class="row no-gutters">
            <div class="course-categories">
                <div class="category-item category-bg-1">
                  <a href="#">
                    <div class="category-icon">
                        <!-- <i class="bi bi-laptop"></i> -->
                        <img src="assets\images\icons\icons8-circled-c-100.png">
                    </div>
                    <h4>C Programming</h4>
                    <p></p>
                  </a>
                </div>
                <div class="category-item category-bg-2">
                    <a href="#">
                        <div class="category-icon">
                            <!-- <i class="bi bi-layer"></i> -->
                            <img src="assets\images\icons\icons8-c++-100.png">
                        </div>
                        <h4>C++ Programming</h4>
                        <p></p>
                    </a>
                </div>
                <div class="category-item category-bg-3">
                   <a href="#">
                    <div class="category-icon">
                        <!-- <i class="bi bi-target-arrow"></i> -->
                        <img src="assets\images\icons\icons8-java-100.png">
                    </div>
                    <h4>Java Programming</h4>
                    <p></p>
                   </a>
                </div>

                <div class="category-item category-bg-4">
                   <a href="#">
                    <div class="category-icon">
                        <!-- <i class="bi bi-rocket2"></i> -->
                        <img src="assets\images\icons\icons8-javascript-logo-100.png">
                    </div>
                    <h4>JavaScript</h4>
                    <p></p>
                   </a>
                </div>
                <div class="category-item category-bg-5">
                   <a href="#">
                    <div class="category-icon">
                        <!-- <i class="bi bi-shield"></i> -->
                        <img src="assets\images\icons\icons8-python-100.png">
                    </div>
                    <h4>Python</h4>
                    <p></p>
                   </a>
                </div>
                <div class="category-item category-bg-6" style="background-color:#9d03fc;">
                   <a href="#">
                    <div class="category-icon">
                        <!-- <i class="bi bi-shield"></i> -->
                        <img src="assets\images\icons\icons8-php-100.png">
                    </div>
                    <h4>PHP</h4>
                    <p></p>
                   </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding popular-course pb-0" id="courses">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <span class="subheading">Top Trending Courses</span>
                    <h3>Our Online Courses</h3>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="course-btn text-lg-right"><a href="#" class="btn btn-main"><i class="fa fa-store mr-2"></i>All Courses</a></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course1.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">C Programming</a></h4>    
                        <a href="course_details.php">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@1549/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>45 Hours</span>
                            </div> 
                        
                            <!-- <div class="buy-btn"><a href="buy_course.php" class="btn btn-main-2 btn-small">Buy</a></div> -->
                            <form method="post" action="buy_course.php">
                                <input type=text value="cp" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">C++ Programming</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@2249/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>55 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="cpp" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">Java Programming</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@2649/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>60 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="java" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">PHP</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@1949/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>60 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="php" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">Python</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@2249/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>90 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="py" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">Web Develoment</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@2949/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>90 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="webdev" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">JavaScript</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@1949/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>60 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="js" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">DSA with C++</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@1949/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>55 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="dsa" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <!-- <img src="assets/images/course/course2.jpg" alt="" class="img-fluid"> -->
                        <span class="course-label">Beginner / Advance</span>
                    </div>
                    
                    <div class="course-content">
                        <div class="course-price ">&nbsp;</div>   
                        
                        <h4><a href="#">Bootstrap</a></h4>    
                        <a href="#">Click Here for Details...</a>
                        <div class="course-footer d-lg-flex align-items-center justify-content-between">
                            <div class="course-meta">
                                <span class="course-student">@999/-Rs</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i>15 Hours</span>
                            </div> 
                            <form method="post" action="buy_course.php">
                                <input type=text value="boot" name="course_name" style="display:none;">
                                <input type="submit" value=" Buy ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="about-section section-padding about-2">
    <div class="container">
        <div class="row align-items-center">
             <div class="col-lg-6 col-md-12">
               <div class="about-img2">
                   <img src="assets/images/bg/choose.png" alt="" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="section-heading">
                    <span class="subheading">Custom Courses</span>
                    <h3>Want any other Course ??</h3>
                </div>

                <p>Mention the course here we'll arrange for you</p>
                <form>
                    <textarea name="custom_course" placeholder="Mention here"></textarea> <br>
                    <input type="text" name="mail_id" placeholder="example@email.com" value="">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</section> 
<section class="feature-2">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <div class="feature-item feature-style-2">
                    <div class="feature-icon">
                        <i class="bi bi-badge2"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Expert Guidence</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item feature-style-2">
                    <div class="feature-icon">
                        <i class="bi bi-article"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Live Sessions</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item feature-style-2">
                    <div class="feature-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Life Time Validity</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
    <!--course section start-->
    <section class="section-padding video-section2 clearfix" >
        <div class="video-block-container"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <span class="subheading">Course Free Demo</span>
                        <h3>2 Free Lectures for any Course</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="video-icon"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end--> 
<section class="testimonial section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading center-heading text-center">
                    <span class="subheading">Testimonials</span>
                    <h3>Learn New Skills to Go Ahead for Your Career</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="review-item">
                        <div class="client-info">
                            <i class="bi bi-quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eius autem aliquid pariatur rerum. Deserunt, praesentium.
                             Adipisci, voluptates nihil debitis</p>
                             <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                        <div class="client-desc">
                            <div class="client-img">
                                <img src="assets/images/clients/test-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="client-text">
                                <h4>John Doe</h4>
                                <span class="designation">Developer</span>
                            </div>
                        </div>
                    </div>

                     <div class="review-item">
                        <div class="client-info">
                            <i class="bi bi-quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eius autem aliquid pariatur rerum. Deserunt, praesentium.
                             Adipisci, voluptates nihil debitis</p>
                             <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                        <div class="client-desc">
                            <div class="client-img">
                                <img src="assets/images/clients/test-2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="client-text">
                                <h4>John Doe</h4>
                                <span class="designation">Developer</span>
                            </div>
                        </div>
                    </div>


                    <div class="review-item">
                        <div class="client-info">
                            <i class="bi bi-quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eius autem aliquid pariatur rerum. Deserunt, praesentium.
                             Adipisci, voluptates nihil debitis</p>
                             <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                        <div class="client-desc">
                            <div class="client-img">
                                <img src="assets/images/clients/test-3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="client-text">
                                <h4>John Doe</h4>
                                <span class="designation">Developer</span>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
<section class="team section-padding bg-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <span class="subheading">Professionals</span>
                    <h3>Our Team</h3>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="course-btn text-lg-right"><a href="#" class="btn btn-main"><i class="fa fa-user mr-2"></i>Join With us</a></div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <img src="assets/images/team/team-4.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h4>Vaibhav Totla</h4>
                        <p>Developer</p>

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <img src="assets/images/team/team-1.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h4>Aryan Khan</h4>
                        <p>Developer</p>
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <img src="assets/images/team/team-2.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h4>Akshit Jain</h4>
                        <p>Developer</p>
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <img src="assets/images/team/team-3.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h4>M</h4>
                        <p>Content Writter</p>
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   

<section class="cta-2">
    <div class="container">
        <div class="row align-items-center subscribe-section ">
            <div class="col-lg-6">
                <div class="section-heading white-text">
                    <span class="subheading"></span>
                    <h3>Join our community of students</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="subscribe-form">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <a href="#" class="btn btn-main">Join Us<i class="fa fa-angle-right ml-2"></i> </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include 'footer.php';
?>