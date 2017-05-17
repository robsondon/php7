<?PHP
$pessoa = array();

array_push($pessoa, array(
    'nome' => 'Robson',
    'Idade' => '25'
));
array_push($pessoa, array(
    'nome' => 'Bruno',
    'Idade' => '30'
));
echo json_encode($pessoa);
?>