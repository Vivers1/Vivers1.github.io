<?php
setcookie('user', $user['user'], time() - 3600, "/");
header('Location: ../index');
?>