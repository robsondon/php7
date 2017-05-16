<?PHP
$data = new DateTime('now', new DateTimeZone("America/Sao_Paulo"));
echo $data->format('d-m-Y H:i:s');
?>