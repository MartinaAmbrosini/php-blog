<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <nav class="navbar" style="background-color: hsla(1000, 100%, 100%, 0.2); height: 80px;">
            <div class="container-fluid">
                <h1 style="font-size: 2em;"><b>MY AWESOME BLOG</b></h1>
                <h5>Sei entrato come <b><?php echo $_SESSION['username']; ?></b></h5>
                <form class="d-flex login">
                    <button class="btn btn-danger" type="submit" name="logout"><a href="logout.php">Logout</a></button>
                    <button class="btn btn-success">Post Dashboard</button>
                    <button class="btn btn-primary">Nuovo Post</button>
                </form>
            </div>
        </nav>
        <section class="d-flex justify-content-center align-items-center mt-5">
            <div class="card w-75 mb-4">
                <div class="card-header">
                    <h3>POST</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="col-6 col-md-5 col-lg-6">Nome</th>
                                <th scope="col" class="d-none col-md-2 col-lg-2 d-md-table-cell text-center">Data Inizio
                                </th>
                                <th scope="col" class="d-none col-md-1 col-lg-1 d-md-table-cell text-center">ROI</th>
                                <th scope="col" class="col-3 col-md-1 col-lg-1 text-center">Stato</th>
                                <th scope="col" class="col-3 col-md-3 col-lg-2 text-center">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 75</td>
                                <td class="d-none d-md-table-cell text-center">15 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="done">Done</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 76</td>
                                <td class="d-none d-md-table-cell text-center">16 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="done">Done</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 77</td>
                                <td class="d-none d-md-table-cell text-center">17 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="process">Process</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 78</td>
                                <td class="d-none d-md-table-cell text-center">18 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="done">Done</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 79</td>
                                <td class="d-none d-md-table-cell text-center">19 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="failed">Failed</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 80</td>
                                <td class="d-none d-md-table-cell text-center">20 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="done">Done</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 81</td>
                                <td class="d-none d-md-table-cell text-center">21 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="failed">Failed</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/class-avatar.jpg" alt=""> Classe 82</td>
                                <td class="d-none d-md-table-cell text-center">22 Feb 2021</td>
                                <td class="d-none d-md-table-cell text-center">20%</td>
                                <td class="text-center"><label class="done">Done</label></td>
                                <td class="text-center">
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-pencil"></i></button>
                                    <button type="button"
                                        class="btn btn-outline-secondary d-inline-flex justify-content-center align-items-center"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </section>

    </body>

    </html>

    <?php
} else {
    header("Location: index.php");
    exit();
}
?>