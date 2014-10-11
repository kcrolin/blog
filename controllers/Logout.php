<?php class logout extends controller
{ function index(){ session_destroy(); header('Location: '.BASE_URL); } }

?>
