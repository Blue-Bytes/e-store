<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("import_files.php"); ?>
    <style>
        @media only screen and (max-width: 600px) {
            .carousel-inner img {
                height: 100%;
            }

            #indics {
                display: none;
            }
        }

        .carousel-inner img {
            width: 100%;
        }
    </style>
    <title>Acceuil</title>
</head>

<body>
    <?php include("header.php"); ?>
    <main>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators" id="indics">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/proxy-immage.png" alt="" height="300px">
                </div>
                <div class="carousel-item">
                    <img src="./images/proxy-image.png" alt="" height="300px" hi>
                </div>
                <div class="carousel-item">
                    <img src="./images/proxy-immmage.jpg" alt="" height="300px">
                </div>
            </div>
        </div>
        <br><br>
        <section class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width:250px;">
                        <img class="card-img-top" src="./images/690137.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width:250px;">
                        <img class="card-img-top" src="./images/690137.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width:250px;">
                        <img class="card-img-top" src="./images/690137.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <?php include("footer.php"); ?>
    <?php include("sidebar.php"); ?>
</body>

</html>