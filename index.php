<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Manan Kanani - Website Designer and Developer </title>
    <link rel="icon" type="image/svg" href="images/icon.svg">
    <link rel="prefetch" href="https://www.manankanani.in/images/Main_pic.jpg" />
    <meta name="description" content="I am Manan Kanani , Professional Website Designer and Developer based in Mumbai, Maharashtra, India. With a journey starting in February 2020." />
</head>

<body onload="myFunction()">
    <div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <main style="display:none;" id="myDiv" class="animate-bottom" id="main">
        <?php include 'Header.php'; ?>

        <section class="hero">
            <div class="left-sec-1">
                <!-- <h1>HEY, I'M MANAN, A CREATIVE WEBSITE DESIGNER AND DEVELOPER.</h1> -->

                <h2 class="title-above">Hey,</h2>
                <h1>I'm Manan Kanani</h1>
                <h2 class="title-below">A Creative Website Designer and Developer</h2>

                <div class="skills">
                    <span><i class="ri-shining-2-fill"></i></span> <span>Designer</span>
                    <span><i class="ri-shining-2-fill"></i></span> <span>Developer</span>
                    <span class="hide-mob"><i class="ri-shining-2-fill"></i></span> <span class="hide-mob">Digital Marketer</span>
                </div>
                <div class="btn-grp">
                    <a href="<?php echo $baseURL; ?>/about-me" title="About Me"  class="btn-Secondary">About Me</a>
                    <a href="<?php echo $baseURL; ?>/contact-me" title="contact me" class="btn-primary">Let's talk</a>
                </div>
            </div>

            <div class="right-sec-1">
                <div class="img-grp">
                    <img src="images/Main_pic.jpg" alt="manan's Picture" class="hero-pic" />
                        <img src="images/pic_bg.png" alt="manan's Picture" class="hero-pic-bg hide-mob" />
                </div>
            </div>
        </section>

        <section class="text-coursel">
            <div class="marquee">
                <span><i class="ri-shining-2-fill"></i></span> <span>WEBSITE DESIGNER</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>WEBSITE DEVELOPER</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>UI/UX DESIGNER</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>MERN Stack</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>DSA</span>
            </div>
            <div class="marquee marquee2">
                <span><i class="ri-shining-2-fill"></i></span> <span>WEBSITE DESIGNER</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>WEBSITE DEVELOPER</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>UI/UX DESIGNER</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>MERN Stack</span>
                <span><i class="ri-shining-2-fill"></i></span> <span>DSA</span>
        </section>


        
        <section class=" Services flex items-center flex-col">
            <div class="uper-service  flex flex-col items-center">
                <h1 class="title-effect section-title">Services.</h1>
                <p class="section-desc">Here are the services I am providing to you.</p>
            </div>
            <div class="ser lower-service">
                <div class=" flex ser-up-up justify-between mob-items-center mob-flex-col gap-40">
                    <a href="#">
                        <div class="item">
                            <div class="ser-icon"><img src="images/port_icons/1.png" alt="UI/UX Desingnig"></div>
                            <div class="ser-title">UI/UX Desingnig.</div>
                            <p class="ser-text"> I provide stunning designs for your UI/UX project, I can handle any project related to landing page designs, e- commerce designs, portfolio website designs, business websites, and many more as per your requirements. </p>
                        </div>
                    </a>

                    <a href="#">
                    <div class="item">
                            <div class="ser-icon"><img src="images/port_icons/2.png" alt="Graphic Designing"></div>
                            <div class="ser-title">Graphic Designing.</div>
                            <p class="ser-text"> I provide amazing and professional Graphic Assets for your projects such as social media post designs, logo designs, business card designs, poster designs, youtube and blogs thumbnail designs, product label designs, and many more categories as per your requirements. </p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item">
                            <div class="ser-icon"><img src="images/port_icons/3.png" alt="Web Development"></div>
                            <div class="ser-title">Web Development.</div>
                            <p class="ser-text"> After designing the web apps or sites I also offer the services of web development for any kind of the website such as business landing pages, product related website development I can handle all the projects. </p>
                        </div>
                    </a>
                </div>
                <div class="ser flex justify-between mob-items-center mob-flex-col gap-40">
                    <a href="#">
                        <div class="item">
                            <div class="ser-icon"><img src="images/port_icons/4.png" alt="Social Media Post Designing"></div>
                            <div class="ser-title">Social Media Post Designing.</div>
                            <p class="ser-text"> Social media post designs are very important if you have a business and want to promote your business on social media, I am also providing the service of designing your social media posts for your business. </p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item">
                            <div class="ser-icon"><img src="images/port_icons/5.png" alt="Mobile App UI/UX"></div>
                            <div class="ser-title">Mobile App UI/UX.</div>
                            <p class="ser-text"> With the service of web design and development, I am offering the service of mobile apps IJI/UX designs if you are looking for someone who can create the layout and pages of your mobile app professionally I am here to handle this kind of project. </p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item">
                            <div class="ser-icon"><img src="images/port_icons/6.png" alt="Let's Talk"></div>
                            <div class="ser-title">Want your stunning desings.</div>
                            <p class="ser-text"> If you want any kind of the listed services you can simply send me an email or leave a message on any social media platform. </p>
                            <button class="btn-small" onclick="window.location.href='#';"> Let's Talk </button>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <section class="portfolio flex items-center flex-col">
            <div class="upper-portfolio flex flex-col items-center">
                <h1 class="title-effect section-title">Portfolio.</h1>
                <p class="section-desc">Discover my portfolio featuring a variety of projects.</p>
            </div>
            <div class="lower-portfolio">
                <div class="port-menu-bg">
                    <ul class="port-menu flex justify-between gap-10">
                        <li><a href="#" class="active" data-category="all">All</a></li>
                        <li><a href="#" data-category="Web Development">Web Development</a></li>
                        <li><a href="#" data-category="Graphic Designing">Graphic Designing</a></li>
                        <li><a href="#" data-category="Social Media Post Designing">Social Media Post Designing</a></li>
                        <li><a href="#" data-category="UI/UX Designing">UI/UX Designing</a></li>
                    </ul>
                </div>

                <div class="port-posts flex flex-wrap gap-20 mob-flex-col">
                    <?php 
                        // Fetch data from the database
                        $query = "SELECT * FROM portfolio_projects";
                        $result = mysqli_query($db, $query);

                        // Check if there are any rows in the result
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $projectID = $row['id'];
                                $category = $row['category'];
                                $title = $row['title'];
                                $featuredImagePath = $row['featured_image_path'];
                                $slug = strtolower(str_replace(' ', '-', $title));
                            
                                // Display dynamic content with a link to the Project Details Page
                                echo '<a href="portfolio-detail/' . $slug . '" class="item" data-category="' . $category . '" onmouseover="scrollImage(this)" onmouseout="resetImage(this)">
                                            <div class="port-post-img">
                                                <img loading="lazy" src="' . $featuredImagePath . '" alt="">
                                            </div>
                                            <p>' . $category . '</p>
                                            <h2>' . $title . '</h2>
                                        </a>';
                            }
                        } else {
                            echo "No projects found";
                        }

                        // Close the database connection
                        mysqli_close($db);
                        ?>


                </div>
            </div>
        </section>


        <section class="Testimonial flex items-center flex-col">
            <div class="uper-testi flex flex-col items-center">
                <h1 class="title-effect section-title">Testimonials.</h1>

                <p class="section-desc">Here are some testimonials from my clients.</p>
            </div>
            <div class="lower-testi">
                <div class="testi-up owl-carousel flex justify-between">

                        <div class="item">
                            <div class="pro-pic">
                                <img src="images/Testimonials/nk.png" alt="NK">
                            </div>
                            <div class="test-cont">
                                <p>"I took visiting card service from Manan Kanani & I got professional and Modern design. with great service."</p>
                                <h2>- NK Accounting.</h2>
                            </div>
                        </div>

                        <div class="item">
                            <div class="pro-pic">
                                <img src="images/Testimonials/bb.png" alt="NK">
                            </div>
                            <div class="test-cont">
                                <p>"I took the help of manan in making significant changes in my wordpress website. I can say that the work was professional & very good."</p>
                                <h2>- Body Bulldozer.com.</h2>
                            </div>
                        </div>

                        <div class="item">
                            <div class="pro-pic">
                                <i class="ri-user-6-fill" style="color:#f4f4f4; font-size:40px"></i>
                            </div>
                            <div class="test-cont">
                                <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit earum adipisci doloribus eos, quisquam ea obcaecati nesciunt itaque tenetur tempora"</p>
                                <h2>- Manan Kanani.</h2>
                            </div>
                        </div>
 
                </div>
            </div>
        </section>

        <?php include 'Footer.php'; ?>

    </main>




        <script>
            // Testimonials

        var owl = $('.owl-carousel');
                owl.owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:2000,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:2,
                            nav:false
                        },
                        1000:{
                            items:3,
                            nav:false,
                        }
                    }
                });
                $('.play').on('click',function(){
                    owl.trigger('play.owl.autoplay',[1000])
                })
                $('.stop').on('click',function(){
                    owl.trigger('stop.owl.autoplay')
                })
        </script>
</body>

</html>