<?php 

mysqli_connect("db", "mysql-inst-01.c973bu7odyi3.us-east-1.rds.amazonaws.com", "mysql.rootp4ss") or die(mysqli_error()); 

echo "<!DOCTYPE html>";
echo "<html>";
echo "  <head>";
echo "    <meta charset=\"UTF-8\"/>";
echo "    <title>Hello World!</title>";
echo "  </head>";
echo "  <body>";
echo "    <h3>Hello World!<h3>";
echo "  </body>";
echo "</html>";

?>
