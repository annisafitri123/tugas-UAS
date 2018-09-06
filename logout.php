<?php
session_start();
unset($_session['islogin']);
session_destroy();
header("location:form_artikel.php");
?>