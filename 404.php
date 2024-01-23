<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404  Page Not Found</title>
    <link rel="icon" type="image/svg" href="images/icon.svg">

    <style>
        .pnf{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 60vh;

            h1{
                font-size: 80px;
            }
            p{
                font-size: 20px;
                margin: 20px 0 40px 0;
            }
        }
    </style>
</head>
<body>
    <main id="myDiv" class="animate-bottom">
        <?php include 'Header.php'; ?>

            <div class="pnf">
            <h1>404 - Page Not Found</h1>
            <p>Sorry, the page you are looking for might be unavailable or does not exist.</p>
            <a class="btn-primary" href="<?php echo $baseURL; ?>/index">Go to Home</a>
            </div>

        <?php include 'Footer.php'; ?>

    </main>
</body>
</html>