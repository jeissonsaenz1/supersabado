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
            <div class="row justify-content-center">
                <div class="col-4">

                <form class="mt-3" action ="SpringStep.php" method="POST" autocomplete="off">
                    <h4>Sprig Step</h4>
                    <h4>
                    <div class="row">
                    <div class="col">
                        <input type="text" step="any" class="form-control" placeholder="Referencia" name="refe1" required>
                        </div>
                    </div>
                    </h4>
                    <div class="row">   
                    <br> 
                        <div class="col">
                        <input type="number" step="any" class="form-control" placeholder="Precio" name="prec1" required>
                        </div>
                        <div class="col">
                        <input type="number" step="any" class="form-control" placeholder="Cantidad" name="cant1" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="subtotal">Calcular</button>
                    
                </form>
                <?php if(isset($_POST["subtotal"])): ?>
                <h4>
                    <?php
                        $ref1=$_POST["refe1"];
                        $cant1=$_POST["cant1"];
                        $precio=$_POST["prec1"];
                        $subtotal=$precio * $cant1;
                        
                    ?>
                </h4>
                <h3 class="text-small">
                <?php
                if ($cant1 == 3) {
                    $descuento = $subtotal * 0.1;
                    echo ("Tienes descuento del 10%");
                } elseif ($cant1 > 3 and $cant1 <= 8) {
                    $descuento = $subtotal * 0.2;
                    echo ("Tienes descuento del 20%");
                } elseif ($cant1 > 8) {
                    $descuento = $subtotal * 0.5;
                    echo ("Tienes descuento del 50%");
                } elseif ($cant1 < 3 and $cant1 > 0) {
                    $descuento = 0;
                    echo ("No tienes descuento");
                } elseif ($cant1 == 0) {
                    $descuento = 0;
                    echo ("No tienes descuento");
                }
                ?>
                </h3>
                <h5 class="text-small">
                <?php
                $total = $subtotal - $descuento;
                echo "<br>";
                echo ("Compraste articulo: ".$ref1);
                echo "<br>";
                echo ("Subtotal: ".$subtotal);
                echo "<br>";
                echo ("Total Descuento: ".$descuento);
                echo "<br>";
                echo ("Total Neto: ".$total);
                ?>            
                </h5>
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