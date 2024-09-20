<?php
session_start();
session_unset();
session_destroy();

echo "<script>alert('Anda Berada diluar dari sistem aplikasi!'); location='index.php'</script>";




?>