
<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /Ruleta_de_la_Suerte');
?>