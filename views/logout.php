<?php   
setcookie('role', $login->role, time()-3600, "/");
setcookie('id', $login->id, time()-3600, "/");
header("location:/index.php"); //to redirect back to "index.php" after logging out
exit();
?>