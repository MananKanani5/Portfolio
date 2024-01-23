<?php
include 'connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home | Manan Kanani </title>
    <link rel="icon" type="image/svg" href="images/icon.svg">
</head>

<body onload="myFunction()">
    <div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <main style="display:none;" id="myDiv" class="animate-bottom" id="main">
        <?php include 'Header.php'; ?>

        <?php
        
        if (isset($_GET['slug'])) {
            $slugWithExtension = mysqli_real_escape_string($db, $_GET['slug']);
            $slug = pathinfo($slugWithExtension, PATHINFO_FILENAME);
        
            // Fetch project details based on the slug
            $query = "SELECT * FROM portfolio_projects WHERE slug = '$slug'";
            $result = mysqli_query($db, $query);
        
            if ($result && mysqli_num_rows($result) > 0) {
                // Display project details
                $row = mysqli_fetch_assoc($result);
                $category = $row['category'];
                $title = $row['title'];
                $description = $row['description'];
        
                // Display project details as needed
                echo '<h1>' . $title . '</h1>';
                echo '<p>' . $category . '</p>';
                echo '<p>' . $description . '</p>';
            } else {
                echo "Project not found";
            }
        } else {
            echo "Invalid project slug";
        }
        
        ?>
        <?php include 'Footer.php'; ?>

</main>
</body>
</html>