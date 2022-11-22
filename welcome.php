<?php 
    session_start();
    require_once("LineLogin.php");

    if (!isset($_SESSION['profile'])) {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include("nav.php") ?>

    <main class="container">
        <div class="bg-light p-5 rounded">

            <?php 
            
                if (isset($_SESSION['profile'])) {
                    $profile = $_SESSION['profile'];
                }

            ?>

            <h1>Welcome, <?php echo $profile->name; ?></h1>
            <p class="lead">Your Email: <?php echo $profile->email; ?></p>
            <img class="rounded" src="<?php echo $profile->picture; ?>" alt="">
        </div>
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>