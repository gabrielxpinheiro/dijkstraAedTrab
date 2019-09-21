<div class="container">
<form action="ligar-arestas.php" method="POST">
<div class="form-row">
<?php

require_once 'index.php';
$qtd_vertices = $_POST['qtd_vertices'];
echo $qtd_vertices;


for($i = 1; $i <= $qtd_vertices; $i++){
    echo '
        <div class="form-group col-md-1">
            <label for="exampleFormControlSelect1">Total de Arestas do vértice ' . $i. '</label>
            <select class="form-control" name="qtd_vertices" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>';
}
echo '
    <input type="submit" class="btn btn-success btn-block" value="Enviar">';

?>
</div>
</form>
</div>
