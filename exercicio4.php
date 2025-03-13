<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h1>4 - Validar Data</h1>
    </div>
    <div class="row">
        <div class="container d-flex justify-content-center align-items-center col-3 mt-5 mb-3">

            <form action="" method="post">

                <form method="post">

                    <div class="mb-3">
                        <label for="valor" class="form-label">Dia</label>
                        <input type="text" id="valor" name="valor" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="valor2" class="form-label">Mês</label>
                        <input type="text" id="valor2" name="valor2" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="valor3" class="form-label">Ano</label>
                        <input type="text" id="valor3" name="valor3" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </form>
        </div>
        <div class="row">
            <div class="container text-center">
                <?php
                 // Função para verificar se a data é válida
                function verificarDataValida($dia, $mes, $ano): bool        
                {
                    // Verifica se a data é válida usando a função checkdate()
                    if (checkdate($mes, $dia, $ano)) {
                        return true; // Data válida
                    } else {
                        return false; // Data inválida
                    }
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    try {
                        $dia = intval( $_POST['valor']);
                        $mes = intval( $_POST['valor2']);
                        $ano = intval( $_POST['valor3']);
                       
                        // Verificar se a data é válida
                        if (verificarDataValida($dia, $mes, $ano)) {
                            // Exibe a data no formato dd/mm/YYYY
                            $dia = strval( $dia );
                            $mes = strval( $mes );
                            $ano = strval( $ano );
                            echo "Data válida: " . str_pad($dia, 2, "0", STR_PAD_LEFT) . "/" . str_pad($mes, 2, "0", STR_PAD_LEFT) . "/" . $ano . "\n";
                        } else {
                            echo "A data informada é inválida.\n";
                        }
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