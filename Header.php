<?php 
    $baseURL = ''; // Set a default value for localhost
    if (!empty($_SERVER['HTTP_HOST'])) {
        // $baseURL = 'https://' . $_SERVER['HTTP_HOST'];
        $baseURL = '/New-portfolio';
        // $baseURL = 'https://www.manankanani.in';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RBPDHCKT6R"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RBPDHCKT6R');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="<?php echo $baseURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $baseURL; ?>/css/utility.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $baseURL; ?>/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $baseURL; ?>/owlcarousel/dist/assets/owl.theme.default.min.css">

    <!-- A2HS -->

    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Manan Kanani">
    <meta name="apple-mobile-web-app-title" content="Manan Kanani">
    <meta name="theme-color" content="#202020">
    <meta name="msapplication-navbutton-color" content="#202020">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/index">
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="/images/icon_192x192.png">



    <!-- Open Graph Properties -->

	<meta property="og:type" content="website" />
	<meta property="og:title" content="Manan Kanani - Website Designer and Developer" />
	<meta property="og:description" content="I am Manan Kanani , Professional Website Designer and Developer based in Mumbai, Maharashtra, India. With a journey starting in February 2020." />
	<meta property="og:image" itemprop="image" content="https://www.manankanani.in/images/Main_pic.jpg />
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:url" content="https://www.manankanani.in" />
	<meta property="og:site_name" content="Manan Kanani" />

	<!-- Tweeter Cards -->

	<meta name="twitter:card" content="app">
	<meta name="twitter:site" content="https://www.manankanani.in">
	<meta name="twitter:image" content="https://www.manankanani.in/images/Main_pic.jpg">
	<meta name="twitter:title" content="Manan Kanani">
	<meta name="twitter:description" content="I am Manan Kanani , Professional Website Designer and Developer based in Mumbai, Maharashtra, India. With a journey starting in February 2020">
	<meta name="twitter:app:name:iphone" content="Manan Kanani">
	<meta name="twitter:app:id:iphone" content="">
	<meta name="twitter:app:name:ipad" content="Manan Kanani">
	<meta name="twitter:app:id:ipad" content="">
	<meta name="twitter:app:name:googleplay" content="Manan Kanani">
	<meta name="twitter:app:id:googleplay" content="">
	<meta name="twitter:app:country" content="India">

	<!-- Other Meta tags -->
	<meta name=”robots” content=”index, follow”>
	<meta name="keywords" content="portfolio, resposnive, resume, personal, card, cv, manankanani" />
	<meta name="author" content="Manan Kanani" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $("#navMenus").on('click', 'a', function () {
        $("#navMenus a.active").removeClass("active");
        // adding classname 'active' to current click li 
        $(this).addClass("active");
        });
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="scroll-to-top" id="myBtn">
        <a href="#top"><i class="ri-arrow-up-s-line"></i></a>
    </div>
<header id="top"> 
    <nav>
        <div class="left-nav">
            <a href="<?php echo $baseURL; ?>/index" class="logo"><h1>MK.</h1></a>
        </div>
        <div class="menu menu-close">
            <i class="ri-close-fill hide-pc" id="button-close"></i>
            <ul id="navMenus">
                <li><a href="<?php echo $baseURL; ?>/index">Home</a></li>
                <li><a href="<?php echo $baseURL; ?>/about-me">About Me</a></li>
                <li><a href="<?php echo $baseURL; ?>/services">Services</a></li>
                <li><a href="<?php echo $baseURL; ?>/portfolio">Portfolio</a></li>
                <li><a href="<?php echo $baseURL; ?>/contact-me">Contact Me</a></li>
            </ul>

            <div class="menu-bottom-mobile hide-pc">
                <p>Get in touch</p>
                <div class="mbm-up">
                    <a href="https://github.com/MananKanani5/" aria-label="Github" rel="nofollow" target="_blank"><i class="ri-github-fill"></i></a>
                    <a href="https://wa.link/2je7uf" aria-label="WhatsApp" rel="nofollow" target="_blank"><i class="ri-whatsapp-fill"></i></a>
                    <a href="https://www.instagram.com/m_a_n_a_n_02/" aria-label="Instagram" rel="nofollow" target="_blank"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/manan-kanani/" aria-label="LinkedIn" rel="nofollow" target="_blank"><i class="ri-linkedin-fill"></i></a>
                
                </div>
                <div class="mbm-down">
                    <a href="https://www.facebook.com/manan.kanani.1" aria-label="Facebook" rel="nofollow" target="_blank"><i class="ri-facebook-fill"></i></a>
                    <a href="https://twitter.com/MananKanani1" aria-label="Twitter" rel="nofollow" target="_blank"><i class="ri-twitter-fill"></i></a>
                    <a href="https://in.pinterest.com/kananimanan/" aria-label="Pinterest" rel="nofollow" target="_blank"><i class="ri-pinterest-fill"></i></a>
                    <a href="https://leetcode.com/manankanani/" aria-label="leetcode" rel="nofollow" target="_blank"><img width="32px" height="32px" src="<?php echo $baseURL; ?>/images/leetcode.svg" alt="leetcode"/></a>
               
            </div>
                
            </div>
        </div>

        <div class="right-nav">
            <a href="#" id="pop-open" class="btn-primary">Let's talk</a>
            <!-- <i class="fa fa-bars " "></i> -->
            <i class="ri-menu-2-line hide-pc" id="button-open"></i>
        </div>
    </nav>
</header>

<div class="talk-bg-close fade-in">
    <div class="talk-pop-up fade-in-bottom">
        <form action="email.php" method="post">
        <i class="ri-close-fill" id="pop-close"></i>
        <h1 class="pop-title">Let's Talk</h1>
            <input type="text" name="Name" placeholder="Your Name*" required>
            <input type="tel" name="number" placeholder="Phone Number*" required>
            <input type="email" name="Email" placeholder="Email*" required>
            <textarea name="Message" id="" placeholder="Desciption" cols="30" rows="5"></textarea>
            <input type="submit" class="btn-primary" value="Let's Talk">
        </form>
    </div>
</div>



    <script src="<?php echo $baseURL; ?>/js/main.js"> </script>
    <script src="<?php echo $baseURL; ?>/owlcarousel/dist/owl.carousel.min.js"></script>
    <script>
        $("#pop-open").click(function(){
            $(".talk-bg-close").toggleClass("talk-bg-open");
        });

        $("#pop-close").click(function(){
            $(".talk-bg-close").toggleClass("talk-bg-open");
        });
    </script>


    <script>
        $("#button-open").click(function(){
            $(".menu-close").toggleClass("menu-open");
        });

        $("#button-close").click(function(){
            $(".menu-close").toggleClass("menu-open");
        });
    </script>


    <script>
        let mybutton = document.getElementById("myBtn");

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
    </script>

</body>
</html>