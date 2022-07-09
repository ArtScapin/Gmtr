<?php    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "gmtr_bd";
    $conexao = @mysqli_connect($servidor, $usuario, $senha, $banco);
    error_reporting(0);
    ini_set(“display_errors”, 0 );
    $forma = $_GET['forma'];
    if($_GET['funcao']){
        $funcao = $_GET['funcao'];
        if($_GET['opcao']){
            $opcao=$_GET['opcao'];
        }
    }
    $sql = @mysqli_query($conexao, "SELECT nome FROM forma WHERE id_forma = " . $forma . "; ");
        while ($dados = @mysqli_fetch_array($sql)){ 
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
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="menu.php?menu=2"><img src="assets/img/logo1.png" style="height: 50px;">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html" style="color: var(--dark);">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php?menu=1" style="color: var(--dark);">Conteúdo</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php?menu=2" style="color: var(--dark);">Calculadora</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <div class='text-center d-xl-flex justify-content-xl-center align-items-xl-center'>
                    <div class='container'>
                        <div class='row' style="margin-bottom: 15%">
                            <div class='col-md-12'>
                                <h1><?php echo $nome; ?></h1>
                            </div>
                        </div>
                        <?php
                            if(!$funcao){ ?>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=1'";?> style='height: 100%; width: 100%;'>Área</a>
                                    </div>
                                    <div class='col-md-6'>
                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=2'";?> style='height: 100%; width: 100%;'>Perímetro</a>
                                    </div>
                                </div> <?php
                            }else if($funcao==1 || $funcao==2){
                                if(!$opcao){
                                    switch ($forma) {
                                        case '1':
                                            if ($funcao==1) { ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo o RAIO, quero saber o valor da ÁREA do círculo!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo a ÁREA, quero saber o valor do RAIO do círculo!</a>
                                                    </div>
                                                </div> <?php
                                            }else{ ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo o RAIO, quero saber o valor do PERÍMETRO do círculo!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo o PERÍMETRO, quero saber o valor do RAIO do círculo!</a>
                                                    </div>
                                                </div> <?php
                                            }
                                            break;
                                        
                                        case '2':
                                            if ($funcao==1) { ?>
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo a BASE e a ALTURA, quero saber o valor da ÁREA do triângulo!</a>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo a BASE e a ÁREA, quero saber o valor da ALTURA do triângulo!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=3'";?> style='height: 100%; width: 100%;'>Possuo a ALTURA e a ÁREA, quero saber o valor da BASE do triângulo!</a>
                                                    </div>
                                                </div> <?php
                                            }else{ ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo o LADO, quero saber o valor do PERÍMETRO do triângulo!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo o PERÍMETRO, quero saber o valor do LADO do triângulo!</a>
                                                    </div>
                                                </div> <?php
                                            }
                                            break;
                                        
                                        case '3':
                                            if ($funcao==1) { ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo as DIAGONAIS, quero saber o valor da ÁREA do losango!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo uma DIAGONAL e a ÁREA, quero saber o valor da outra DIAGONAL do losango!</a>
                                                    </div>
                                                </div> <?php
                                            }else{ ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo o LADO, quero saber o valor do PERÍMETRO do losango!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo o PERÍMETRO, quero saber o valor do LADO do losango!</a>
                                                    </div>
                                                </div> <?php
                                            }
                                            break;
                                        
                                        case '4':
                                            if ($funcao==1) { ?>
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo a BASE e a ALTURA, quero saber o valor da ÁREA do quadrado!</a>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo a BASE e a ÁREA, quero saber o valor da ALTURA do quadrado!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=3'";?> style='height: 100%; width: 100%;'>Possuo a ALTURA e a ÁREA, quero saber o valor da BASE do quadrado!</a>
                                                    </div>
                                                </div> <?php
                                            }else{ ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo o LADO, quero saber o valor do PERÍMETRO do quadrado!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo o PERÍMETRO, quero saber o valor do LADO do quadrado!</a>
                                                    </div>
                                                </div> <?php
                                            }
                                            break;
                                        
                                        case '5':
                                            if ($funcao==1) { ?>
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo a BASE e a ALTURA, quero saber o valor da ÁREA do retângulo!</a>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo a BASE e a ÁREA, quero saber o valor da ALTURA do retângulo!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=3'";?> style='height: 100%; width: 100%;'>Possuo a ALTURA e a ÁREA, quero saber o valor da BASE do retângulo!</a>
                                                    </div>
                                                </div> <?php
                                            }else{ ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo o LADO, quero saber o valor do PERÍMETRO do retângulo!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo o PERÍMETRO, quero saber o valor do LADO do retângulo!</a>
                                                    </div>
                                                </div> <?php
                                            }
                                            break;
                                        
                                        case '6':
                                            if ($funcao==1) { ?>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo as BASES e a ALTURA, quero saber o valor da ÁREA do trapézio!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo a ÁREA, uma BASE a ALTURA, quero saber o valor da outra BASE do trapézio!</a>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=3'";?> style='height: 100%; width: 100%;'>Possuo as BASES e a ÁREA, quero saber o valor da ALTURA do trapézio!</a>
                                                    </div>
                                                </div> <?php
                                            }else{ ?>
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=1'";?> style='height: 100%; width: 100%;'>Possuo as BASES e os LADOS, quero saber o valor do PERÍMETRO do trapézio!</a>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=2'";?> style='height: 100%; width: 100%;'>Possuo o PERÍMETRO, uma BASE e os LADOS, quero saber o valor da outra BASE do trapézio!</a>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <a class='btn btn-outline-dark btn-lg' role='button' href=<?php echo "'calculadora.php?forma=".$forma."&funcao=".$funcao."&opcao=3'";?> style='height: 100%; width: 100%;'>Possuo as BASES, o PERÍMETRO e um LADO, quero saber o valor do outro LADO do trapézio!</a>
                                                    </div>
                                                </div> <?php
                                            }
                                            break;
                                        
                                        default:
                                            # code...
                                            break;
                                    }
                                }else{
                                    switch ($forma) {
                                        case '1':
                                            if($funcao==1){ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Raio:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Pi:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=($_GET['txt_2']*($_GET['txt_1']*$_GET['txt_1']));
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Pi:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=sqrt($_GET['txt_1']/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }else{ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Raio:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Pi:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=(2*$_GET['txt_2']*$_GET['txt_1']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Perímetro:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Pi:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=($_GET['txt_1']/(2*$_GET['txt_2']));
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }
                                            break;
                                         
                                        case '2':
                                            if($funcao==1){ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=(($_GET['txt_1']*$_GET['txt_2'])/2);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=((2*$_GET['txt_1'])/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==3){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=((2*$_GET['txt_1'])/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }else{ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Raio:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Pi:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=(2*$_GET['txt_2']*$_GET['txt_1']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Perímetro:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Pi:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=($_GET['txt_1']/(2*$_GET['txt_2']));
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }
                                            break;

                                        case '3':
                                            if($funcao==1){ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Diagonal 1:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Diagonal 2:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=(($_GET['txt_1']*$_GET['txt_2'])/2);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Diagonal:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=((2*$_GET['txt_1'])/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }else{ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Lado:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=(4*$_GET['txt_1']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Perímetro:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=($_GET['txt_1']/4);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }
                                            break;

                                        case '4':
                                            if($funcao==1){ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=(($_GET['txt_1']*$_GET['txt_2']));
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=($_GET['txt_1']/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==3){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=($_GET['txt_1']/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }else{ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Lado:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=(4*$_GET['txt_1']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Perímetro:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=($_GET['txt_1']/4);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }
                                            break;

                                        case '5':
                                            if($funcao==1){ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=(($_GET['txt_1']*$_GET['txt_2']));
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=($_GET['txt_1']/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==3){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2']){
                                                            $resultado=($_GET['txt_1']/$_GET['txt_2']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }else{ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Lado:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=(4*$_GET['txt_1']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Perímetro:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=($_GET['txt_1']/4);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }
                                            break;
                                                
                                        case '6':
                                            if($funcao==1){ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base 1:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base 2:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_3">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2'] && $_GET['txt_3']){
                                                            $resultado=(($_GET['txt_1']+$_GET['txt_2'])/2)*$_GET['txt_3'];
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Altura:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_3">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2'] && $_GET['txt_3']){
                                                            $resultado=(2*$_GET['txt_1']/$_GET['txt_3'])-$_GET['txt_2'];
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==3){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Área:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base 1:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_2">
                                                            </div>
                                                        </div>
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Base 2:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_3">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1'] && $_GET['txt_2'] && $_GET['txt_3']){
                                                            $resultado=(2*$_GET['txt_1']/($_GET['txt_2']+$_GET['txt_3']));
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }else{ 
                                                if($opcao==1){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Lado:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=(4*$_GET['txt_1']);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }else if ($opcao==2){ ?>
                                                    <form action="calculadora.php">
                                                        <div class='row'>
                                                            <div class='col-md-3'></div>
                                                            <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                <h3>Perímetro:</h3>
                                                            </div>
                                                            <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                <input type="text" style="width: 360px; max-width: 100%; " name="txt_1">
                                                            </div>
                                                        </div>
                                                        <?php if($_GET['txt_1']){
                                                            $resultado=($_GET['txt_1']/4);
                                                            echo "
                                                                <div class='row'>
                                                                    <div class='col-md-3'></div>
                                                                    <div class='col-md-2' style='font-size: 20px; text-align: left;'>
                                                                        <h3>Resultado:</h3>
                                                                    </div>
                                                                    <div class='col-md-7' style='font-size: 20px; text-align: left;'>
                                                                        <input type='text' style='width: 360px; max-width: 100%; ' value='".$resultado."' readonly>
                                                                    </div>
                                                                </div>
                                                            ";
                                                        } ?>
                                                        <div class="row">
                                                            <div class='col-md-12' style='font-size: 20px; text-align: center; margin-top: 10px;'>
                                                                <button type="submit" class="btn btn-outline-dark btn-lg" style='width: 30%;'>Calcular</a>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="forma" value=<?php echo "'".$forma."'"; ?>>
                                                        <input type="hidden" name="funcao" value=<?php echo "'".$funcao."'"; ?>>
                                                        <input type="hidden" name="opcao" value=<?php echo "'".$opcao."'"; ?>>
                                                    </form><?php
                                                }                                             
                                            }
                                            break;

                                        default:
                                            # code...
                                            break;
                                    }
                                }

                            }
                        ?>
                        <div class='row'>
                            <div class='col'>
                                <p class='d-xl-flex justify-content-xl-center align-items-xl-end copyright' style='margin-top: 20%;color: var(--gray);font-family: Annie Use Your Telescope, cursive; '>Arthur Scapin Pereira © 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>