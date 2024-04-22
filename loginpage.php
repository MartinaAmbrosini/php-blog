<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container-form">
        <form class="p-4 login-form" style="background-color: hsla(7000, 80%, 100%, 0.5);" action=" login.php"
            method="post">
            <h2><b>LOGIN</b></h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label style="color: black; font-weight: bold; font-size: 1.3em;" class="form-label m-1">NOME UTENTE <span
                    style="color: red; font-size: 1.5em;">*</span></label>
            <input class="form-control border-primary mb-3" type="text" name="username"
                placeholder="Inserire nome utente">

            <label style="color: black; font-weight: bold; font-size: 1.3em;" class="form-label m-1">PASSWORD <span
                    style="color: red; font-size: 1.5em;">*</span></label>
            <input class="form-control border-primary" type="password" name="password" placeholder="Inserire password">

            <button type="submit" class="btn btn-primary m-0 mt-3">ENTRA</button>
        </form>
    </div>
</body>

</html>