<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY AWESOME BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    session_start();

    // Verifica se l'utente ha premuto il pulsante di login
    if (isset($_GET['login'])) {
        // Se il pulsante è stato premuto, effettua il redirect alla pagina di login
        header("Location: loginpage.php");
        exit(); // Assicura che il codice successivo non venga eseguito dopo il redirect
    }
    ?>

    <nav class="navbar" style="background-color: hsla(1000, 100%, 100%, 0.2); height: 80px;">
        <div class="container-fluid">
            <h1 style="font-size: 2em;"><b>MY AWESOME BLOG</b></h1>
            <form class="d-flex login" role="login">
                <button class="btn btn-primary" type="submit" name="login">LOGIN</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                session_start();
                include "db_conn.php";
                $sql = "SELECT * FROM posts";
                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="card mb-3">
                            <img src="<?php if (is_null($row['image'])) {
                                echo 'https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg';
                            } else {
                                echo $row['image'];
                            }
                            ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                                <p class="card-text"><?php echo substr($row['content'], 0, 250) ?></p>
                                <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Leggi il post
                                    completo</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>