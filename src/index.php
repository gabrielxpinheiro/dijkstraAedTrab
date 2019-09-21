<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <title>Algorítmo de Dijkstra</title>
</head>
<body>
    <div class="container">

    <form action="dijkstra.php" method="POST">
        <div class="form-group col-md-2">
            <label for="exampleFormControlSelect1">Número de vértices</label>
            <select class="form-control" name="qtd_vertices" id="exampleFormControlSelect1">
                <?php
                    for($i = 1; $i <= 20; $i++){
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                ?>
            </select>
            <input type="submit" class="btn btn-success btn-block" value="Enviar">
        </div>
    </form>
    </div>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>