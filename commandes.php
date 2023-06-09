<?php
require_once('config.php');

$agent = $bdd->prepare("SELECT * FROM client ");

$agent->execute();

$total = $bdd->query("SELECT count(*) as total FROM client")->fetch()['total'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->

</head>

<body>

    <?php require_once('./layouts/header.php') ?>

    <div class="container-fluid">
        <div class="row">
            <?php require_once('./layouts/sidebar.php') ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Commandes</h1>
                </div>

                <div>
                </div>
                <div class="container text-center ">
                    <div class="row row-cols-2 ">
                        <div class="col-md-6 border border-primary"">
                            <h1 class="h2">Listes des Commandes</h1>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cilents</th>
                                        <th scope="col">Voitures</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Agents</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>00</td>
                                        <td>00</td>
                                        <td>00</td>
                                        <td>00</td>
                                        <td>00</td>
                                    </tr>

                                    <div>

                                    </div>
                                </tbody>

                            </table>

                        </div>
                        <div class="col-md-5 offset-md-1  border border-primary">
                            <h1 class="h2">Ajout de Commandes</h1>

                            <form class="row g-3">


                                <div class="col-12">
                                <label for="inputname" class="form-label">Nom</label>
                                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                </div>

                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-12">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>





    <script>
        src = "js/bootstrap.bundle.min.js"
    </script>
    <script src="sweetalert2.all.min.js"></script>
</body>

</html>