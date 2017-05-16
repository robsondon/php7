<?PHP
$nome = 'Robson';

function nome (){
    global $nome;
    echo $nome;
}
function nome2(){
    echo $nome . "Teste";
}
nome();
nome2();
?>