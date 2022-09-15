<?php
    $arr=array(
        array("produto" => "Camisa",
              "preço" => "R$50,00",
              "estoque" => 10
        ),
        array("produto" => "Calça", 
              "preço" => "R$70,00",
              "estoque" => 5
        ),
        array("produto" => "Boné", 
              "preço" => "R$45,00",
              "estoque" => 8
        ),
    );

    print_r($arr);
    echo "<br/>";
    print_r($arr[0]);
    echo "<br/>";
    print_r($arr[1]);
    echo "<br/>";
    print_r($arr[2]);
    echo "<br/>";

    $total_reg = count($arr); //variável para número de registros
    echo "Número de registros {$total_reg}";
?>