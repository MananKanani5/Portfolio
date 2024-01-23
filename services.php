<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Manan Kanani</title>
    <link rel="icon" type="image/svg" href="images/icon.svg">
</head>
<body onload="myFunction()">
    <div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <main style="display:none;" id="myDiv" class="animate-bottom">
    <?php include 'Header.php'; ?>

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

    <?php include 'Footer.php'; ?>
    </main>
</body>
</html>