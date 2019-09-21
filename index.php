<?php

//seleciona os caminhos e pesos das arestas
$vertices = array();
$vertices[1][2] = 7;
$vertices[1][3] = 9;
$vertices[1][6] = 14;
$vertices[2][1] = 7;
$vertices[2][3] = 10;
$vertices[2][4] = 15;
$vertices[3][1] = 9;
$vertices[3][2] = 10;
$vertices[3][4] = 11;
$vertices[3][6] = 2;
$vertices[4][2] = 15;
$vertices[4][3] = 11;
$vertices[4][5] = 6;
$vertices[5][4] = 6;
$vertices[5][6] = 9;
$vertices[6][1] = 14;
$vertices[6][3] = 2;
$vertices[6][5] = 9;



// echo '<h1>Trabalho de AED 2 - Algorítimo de Dijkstra </h1>';
// echo '<h2>Vértices e suas ligações com o peso de cada aresta:  </h2>';
// echo '<pre>';
// var_dump($vertices);
// echo '</pre>';
//seleciona a partida e a chegada
$start = 1;
$fim = 5;

$S = array();//guarda o caminho
$Q = array();//guarda o peso dos menores caminhos ate cada nodo
foreach(array_keys($vertices) as $custo_aresta) $Q[$custo_aresta] = INF;//inicializa o array com cuso infinito em cada vertice

$Q[$start] = 0;


// começa a calcular
while(!empty($Q)){
    $min = array_search(min($Q), $Q);// seleciona o vertice de menor peso
    
    if($min == $fim) break;
    //nodo_apontado é para onde o nodo min aponta
    //para cada vertice, é selecionado o nodo para quem ele aponta e o custo
    foreach($vertices[$min] as $nodo_apontado=>$custo_aresta){
        //teste se o vertice está apontando para algo
        // e testa se o valor do nodo testado + p peso da aresta é menor que o peso do nodo apontado
        if(!empty($Q[$nodo_apontado]) && $Q[$min] + $custo_aresta < $Q[$nodo_apontado]) {
            $Q[$nodo_apontado] = $Q[$min] + $custo_aresta; // atualiza o peso do nodo apontado
            $S[$nodo_apontado] = array($min, $Q[$nodo_apontado]); // atualiza o nodo que levou até este nodo_apontado e o peso
        } 
        
    }
    unset($Q[$min]); // destroi o nodo de peso minimo do array
}

//listando o caminho
$caminho = array(); // array para guardar o caminho
$pos = $fim; // aux
while($pos != $start){ // faz o caminho inverso do vertice final, até o inicio, percorrendo o caminho em $S
    $caminho[] = $pos; // pega os vertices e coloca em um vetor
    $pos = $S[$pos][0]; // pega a vertice anterior a cada nodo
}

$caminho[] = $start; // add o vertice de partida no vetor
$caminho = array_reverse($caminho); // inverte as posições dos valores no array

//print do resultado
echo "<br />Partindo de $start até $fim";
echo "<br />O menor caminho é ".$S[$fim][1];
echo "<br />Caminho ".implode('->', $caminho);