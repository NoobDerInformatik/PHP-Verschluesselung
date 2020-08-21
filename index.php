<?php
$klartext = "geheim";
$hash = password_hash($klartext, PASSWORD_BCRYPT);
echo $hash."<br>";

if (password_verify('geheim', $hash)) {
    echo "pw stimmt";
}else{
    echo "pw stimmt nicht";
}
?>
