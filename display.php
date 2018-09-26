<!DOCTYPE html>
<html lang="en">

  <head>
    <title>SimpleCMS</title>
  </head>

  <body>
    <?php

  include_once('_class/simpleCMS.php');
  $obj = new simpleCMS();
  $obj->host = 'database.host.net';
  $obj->username = 'DB1234567';
  $obj->password = 'DBpassword';
  $obj->table = 'DB1234567';
  $obj->connect();

  if ( $_POST )
    $obj->write($_POST);

  echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

?>
  </body>

</html>