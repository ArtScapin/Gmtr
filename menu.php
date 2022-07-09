<?php
    error_reporting(0);
    ini_set(“display_errors”, 0 );
    if($_GET[menu]==1){
        $função="conteudo";
    }else if($_GET[menu]==2){
        $função="calculadora";
    }else{
        header("Location: index.html");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>gmtr</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cedarville+Cursive">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="index.html"><img src="assets/img/logo1.png" style="height: 50px;">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php?menu=1" style="color: var(--dark);">Conteúdo</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php?menu=2" style="color: var(--dark);">Calculadora</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12" style="height: 80px;"></div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 15px;">
                    <h1>
                        <?php 
                            if($_GET[menu]==1){
                                echo "Conteúdo";
                            }else if($_GET[menu]==2){
                                echo "Calculadora";
                            }else{
                                header("Location: index.html");
                            }
                        ?>
                    </h1>
                </div>
            </div>
            <?php
                if($_GET[menu]==1){
                    echo "
                    <div class='row'>
                        <div class='col-md-12'><a class='btn btn-outline-dark btn-lg' role='button' href='conteudo.php?forma=0' style='width: 100%;margin-top: 5px;margin-bottom: 5px;' >Conceitos Básicos</a></div>
                    </div>
                    ";
                }
            ?>
            
            <div class="row">
                <div class="col-md-6"><a class="btn btn-outline-dark btn-lg" role="button" href='<?php echo $função.".php?forma=1"; ?>' style="width: 100%;margin-top: 5px;margin-bottom: 5px;">Círculo</a></div>
                <div class="col-md-6"><a class="btn btn-outline-dark btn-lg" role="button" href='<?php echo $função.".php?forma=2"; ?>' style="width: 100%;margin-top: 5px;margin-bottom: 5px;">Triângulo</a></div>
            </div>
            <div class="row">
                <div class="col-md-6"><a class="btn btn-outline-dark btn-lg" role="button" href='<?php echo $função.".php?forma=3"; ?>' style="width: 100%;margin-top: 5px;margin-bottom: 5px;">Losango</a></div>
                <div class="col-md-6"><a class="btn btn-outline-dark btn-lg" role="button" href='<?php echo $função.".php?forma=4"; ?>' style="width: 100%;margin-top: 5px;margin-bottom: 5px;">Quadrado</a></div>
            </div>
            <div class="row">
                <div class="col-md-6"><a class="btn btn-outline-dark btn-lg" role="button" href='<?php echo $função.".php?forma=5"; ?>' style="width: 100%;margin-top: 5px;margin-bottom: 5px;">Retângulo</a></div>
                <div class="col-md-6"><a class="btn btn-outline-dark btn-lg" role="button" href='<?php echo $função.".php?forma=6"; ?>' style="width: 100%;margin-top: 5px;margin-bottom: 5px;">Trapézio</a></div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="d-xl-flex justify-content-xl-center align-items-xl-end copyright" style="margin-top: 70px;color: var(--gray);font-family: 'Annie Use Your Telescope', cursive;">Arthur Scapin Pereira © 2021</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>