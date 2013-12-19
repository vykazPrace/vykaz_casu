<?php
if (!empty($_SESSION['prihlaseny'])) {
    unset($_SESSION['prihlaseny']);
}
header("Location: ../index.php");
?>
