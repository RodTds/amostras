<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h1>3 - Palavra Contida na outra</h1>
    </div>
    <div class="row">
        <div class="container d-flex justify-content-center align-items-center col-3 mt-5 mb-3">

            <form action="" method="post">

                <form method="post">

                    <div class="mb-3">
                        <label for="valor" class="form-label">Digite a Palavra </label>
                        <input type="text" id="valor" name="valor" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="valor2" class="form-label">Digite a Segunda Palavra</label>
                        <input type="text" id="valor2" name="valor2" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </form>
        </div>
        <div class="row">
            <div class="container text-center" >
                <?php
                 function verificarPalavraContida($palavra1, $palavra2) {
                    // Usa a função strpos para verificar se a segunda palavra está na primeira
                    if (strpos($palavra1, $palavra2) !== false) {
                        return true; // A segunda palavra está contida na primeira
                    } else {
                        return false; // A segunda palavra não está contida na primeira
                    }
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    try {
                       $valor = strval($_POST['valor']);
                       $valor2 = strval($_POST['valor2']);
                      
                    
                    echo verificarPalavraContida($valor, $valor2) == true ?"A segunda esta Contida na Primeira":"Não esta Contida";
                            
                    } catch (Exception $e) {

                        echo "Erro : $e->getMessage()";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>