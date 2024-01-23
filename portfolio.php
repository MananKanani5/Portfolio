<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Manan Kanani</title>
    <link rel="icon" type="image/svg" href="images/icon.svg">
</head>
<body onload="myFunction()">
    <div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <main style="display:none;" id="myDiv" class="animate-bottom">
    <?php include 'Header.php'; ?>

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
                                            <h3>' . $title . '</h3>
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

    <?php include 'Footer.php'; ?>
    </main>
</body>
</html>