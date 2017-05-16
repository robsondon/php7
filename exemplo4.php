<?PHP

$ip = $_SERVER['REMOTE_ADDR'];
$page = $_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
echo $page;
?>