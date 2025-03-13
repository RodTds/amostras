<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h1>7 - Diferenca em dias </h1>
    </div>
    <div class="row">
        <div class="container d-flex justify-content-center align-items-center col-3 mt-5 mb-3">

            <form action="" method="post">

                <form method="post">

                    <div class="mb-3">
                        <label for="data1" class="form-label">Insira a Data</label>
                        <input type="date" id="data1" name="data1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="data2" class="form-label">Insira a Data</label>
                        <input type="date" id="data2" name="data2" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </form>
        </div>
        <div class="row">
            <div class="container text-center">
                <?php
                // Função para calcular a diferença de dias entre duas datas
                function calcularDiferencaDias($data1, $data2)
                {
                    // Converte as datas para o formato DateTime
                    $data1 = new DateTime($data1);
                    $data2 = new DateTime($data2);

                    // Calcula a diferença entre as datas
                    $intervalo = $data1->diff($data2);

                    // Retorna a diferença em dias
                    return $intervalo->days;
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    try {
                        $data1 = $_POST['data1'];
                        $data2 = $_POST['data2'];
                        // Calcular a diferença de dias
                        $diferencaDias = calcularDiferencaDias($data1, $data2);

                        // Exibir a diferença
                        echo "A diferença de dias entre as duas datas é: $diferencaDias dias";
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