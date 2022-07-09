<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "gmtr_bd";
    $conexao = @mysqli_connect($servidor, $usuario, $senha, $banco);
    error_reporting(0);
    ini_set(“display_errors”, 0 );
    $forma = $_GET['forma'];
    $sql = @mysqli_query($conexao, "SELECT conteudo, diretorio, nome FROM conteudo, imagem, forma WHERE id_forma = " . $forma . " and id_forma = id_conteudo and id_forma = id_imagem; ");
        while ($dados = @mysqli_fetch_array($sql)){ 
            $conteudo = $dados[conteudo]; 
            $imagem = $dados[diretorio];
            $nome = $dados[nome];
        }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="margin: 20px;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="menu.php?menu=1"><img src="assets/img/logo1.png" style="height: 50px;">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html" style="color: var(--dark);">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php?menu=1" style="color: var(--dark);">Conteúdo</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php?menu=2" style="color: var(--dark);">Calculadora</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        if($forma>=1 && $forma<=6){
            echo "
                <div class='text-center d-xl-flex justify-content-xl-center align-items-xl-center'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h1>".$nome."</h1>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='".$imagem."' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                ".$conteudo."
                            </div>
                        </div>
                ";
        }else if($forma==0){
            echo "
                <div class='text-center d-xl-flex justify-content-xl-center align-items-xl-center'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h1>Conceitos Básicos</h1>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Ponto: </b>Conceito adimensional, uma vez que não possui dimensão. Os pontos determinam uma localização e são indicados com letras maiúsculas.<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/ponto.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Reta: </b>A reta, representada por letra minúscula, é uma linha ilimitada unidimensional (possui o comprimento como dimensão) e pode se apresentar na posição horizontal, vertical ou inclinada. Dependendo da posição das retas, quando elas se cruzam, ou seja, possuem um ponto em comum, são chamadas de retas concorrentes.Por outro lado, as que não possuem ponto em comum, são classificadas como retas paralelas.<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/reta.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Semirreta: </b>As semirretas são retas que possuem início, mas não apresentam um fim, ou seja, elas são ilimitadas num dos sentidos. São representadas com uma seta acima das letras, a qual indica a direção da semirreta.<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/semirreta.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Segmento de Reta: </b>O segmento de reta é definido como uma parte da reta, o qual está delimitada por dois pontos.Geralmente, os segmentos de reta são representados dentro de colchetes (Segmento de Reta [AB]) ou com um traço acima das letras.<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/segmentodereta.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Plano: </b>Corresponde a uma superfície plana bidimensional, ou seja, possui duas dimensões: comprimento e largura. Nessa superfície que se formam as figuras geométricas.<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/plano.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Ângulo: </b>Os ângulos são formados pela união de dois segmentos de reta, a partir de um ponto comum, chamado de vértice do ângulo. São classificados em ângulo reto (Â = 90°), ângulo agudo (Â < 90°), ângulo obtuso (Â > 90°).<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/angulo.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Área: </b>A área de uma figura geométrica expressa o tamanho de uma superfície. Assim, quanto maior a superfície da figura, maior será sua área.<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/area.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 text-justify' style='margin: 20px; font-size: 20px;'> 
                                <p><b>Perímetro: </b>O perímetro corresponde a soma de todos os lados de uma figura geométrica.<br/></p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'><img src='assets/img/perimetro.png' style='max-width: 60%; margin: 20px'></div>
                        </div>
                ";
        }else{
            header("Location: index.html");
        }
    ?>
                        <div class='row'>
                            <div class='col'>
                                <p class='d-xl-flex justify-content-xl-center align-items-xl-end copyright' style='margin-top: 0px;color: var(--gray);font-family: 'Annie Use Your Telescope', cursive;'>Arthur Scapin Pereira © 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>