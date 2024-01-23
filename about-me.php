<?php
    include_once 'connection.php';
    $result = mysqli_query($db, "SELECT * from about");
    // $result1 = mysqli_query($db, "SELECT * from skills");
    $row = mysqli_fetch_array($result);
    // $row1 = mysqli_fetch_array($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me | Manan Kanani</title>
    <link rel="icon" type="image/svg" href="images/icon.svg">
    <link rel="prefetch" href="https://www.manankanani.in/images/Main_pic.jpg" />
    <meta name="description" content="I am Manan Kanani , Professional Website Designer and Developer based in Mumbai, Maharashtra, India. With a journey starting in February 2020." />

</head>
<body onload="myFunction()">
    <div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <main style="display:none;" id="myDiv" class="animate-bottom">
    <?php include 'Header.php'; ?>

    <section class="hero-abt">
        <div class="left-sec-1">
            <h1>About Me</h1>
                <p class="text-justify"><?php echo $row["about_info"];?></p>
                   <div class="abt-info"> 
                        <ul class="about-info about-info-left">
                            <li> <span class="about-info-title">Age:</span> <span> <?php echo $row["age"];?></span></li> 
                            <li> <span class="about-info-title">Phone:</span> <span><?php echo $row["phone"];?></span></li>
                            <li> <span class="about-info-title">E-mail:</span> <span><?php echo $row["email"];?></span></li>
                        </ul>
                        <ul class="about-info about-info-right">
                            <li> <span class="about-info-title">Freelance:</span> <span><?php echo $row["freelance"];?></span></li> 
                            <li> <span class="about-info-title">Residence:</span> <span><?php echo $row["residence"];?></span></li>
                            <li> <span class="about-info-title">Address:</span> <span><?php echo $row["address"];?></span></li>
                        </ul>
                    </div>
            
        </div>
            <div class="right-sec-1">
                <div class="img-grp">
                    <img src="images/Main_pic.jpg" alt="manan's Picture" class="hero-pic" />
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


        <section class="technologies flex items-center flex-col">
            <div class="flex flex-col items-center">
                <h1 class="title-effect section-title">Technologies.</h1>
                <p class="section-desc">Skilled in working with technologies that I have successfully applied to create stunning websites.</p>
            </div>

            <div class="w-100">
                <div class="tech-menu-bg">
                        <ul class="tech-menu flex justify-between gap-10">
                            <li><a href="#" class="active" data-category="all">All</a></li>
                            <li><a href="#" data-category="Frontend">Frontend</a></li>
                            <li><a href="#" data-category="Backend">Backend</a></li>
                            <li><a href="#" data-category="Databases">Databases</a></li>
                            <li><a href="#" data-category="Softwares">Softwares</a></li>
                        </ul>
                </div>
                <div class="tech-menu-items flex w-100 gap-30 flex-wrap">
                
                    <?php 
                        $query = "SELECT * FROM technologies ORDER BY RAND()";
                        $result = mysqli_query($db, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $techID = $row['id'];
                                $category = $row['category'];
                                $url = $row['imageURL'];
                                $alttext = $row['alt'];
                        
                                echo '<div class="item rotating-border" data-category="' . $category . '">
                                            <image loading="lazy" src="' . $baseURL . $url . '" alt="' . $alttext . '" />
                                        </div>';
                            }
                        } else {
                            echo "No projects found";
                        }
                        mysqli_close($db);
                        ?>
                </div>
            </div>

            
        </section>
    
    

    <?php include 'Footer.php'; ?>
    </main>
</body>
</html>