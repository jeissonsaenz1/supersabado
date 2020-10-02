<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvaluacionWEB1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">EvaluacionWEB1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="calculadora.php">Calculadora<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gimnacio.php">Gimnacio Bodytech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SpringStep.php">Spring Step</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Salpicon.php">Salpicón</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-8">

                <form class="mt-3" action="Salpicon.php" method="POST" autocomplete="off">
                    <h4>Salpicon</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fruta 1</label>
                        <div class="col">
                            <input type="url" class="form-control" placeholder="Url" name="url1" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre_fruta" name="fruit1" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fruta 2</label>
                        <div class="col">
                            <input type="url" class="form-control" placeholder="Url" name="url2" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre_fruta" name="fruit2" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fruta 3</label>
                        <div class="col">
                            <input type="url" class="form-control" placeholder="Url" name="url3" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre_fruta" name="fruit3" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fruta 4</label>
                        <div class="col">
                            <input type="url" class="form-control" placeholder="Url" name="url4" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre_fruta" name="fruit4"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fruta 5</label>
                        <div class="col">
                            <input type="url" class="form-control" placeholder="Url" name="url5" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre_fruta" name="fruit5" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="ver">Preparar</button>
                </form>
                <?php if(isset($_POST["ver"])): ?>
                    <?php
                        $Url1=$_POST["url1"];
                        $Url2=$_POST["url2"];
                        $Url3=$_POST["url3"];
                        $Url4=$_POST["url4"];
                        $Url5=$_POST["url5"];
                        $fruta1=$_POST["fruit1"];
                        $fruta2=$_POST["fruit2"];
                        $fruta3=$_POST["fruit3"];
                        $fruta4=$_POST["fruit4"];
                        $fruta5=$_POST["fruit5"];
                    ?>
                
                <h4>
                <?php
                //$salpicon=array("url1"=>"fruit1", "url2"=>"fruit2", "url3"=>"fruit3", "url4"=>"fruit4", "url5"=>"fruit5");
                $salpicon=array($Url1=>$fruta1, $Url2=>$fruta2, $Url3=>$fruta3, $Url4=>$fruta4, $Url5=>$fruta5,);
                echo("<br>");
                echo("<br>");
                foreach($salpicon as $clave=>$valor){   
                    //echo($clave." ->".$valor);
                    echo("<div align='left'>");
                    echo("<img src='$clave' width='150px' height='150px'>". "    ->     ".$valor);
                    echo("<br>");
                }
                ?>
                </h4>



                <?php endif?>


                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>