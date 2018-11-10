<?php
if ($_SESSION['login']!=='Елена' || $_SESSION['password']!=='789') {
header("Location:tableList.php");
exit();
}

?>