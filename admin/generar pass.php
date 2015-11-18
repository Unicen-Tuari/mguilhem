<?php

echo "MD5: " . md5('123456'). "</br>";
echo "BCRYPT: " . password_hash('123456', PASSWORD_DEFAULT);

?>
