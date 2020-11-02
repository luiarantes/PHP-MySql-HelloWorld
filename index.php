<?php

include 'db-vars.php';

# Abre conexão com o Banco de Dados
$conn = new mysqli("$HOST", "$USER", "$PASS", "$DB");

# Verifica conexão
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "  <head>\n";
echo "    <meta charset=\"UTF-8\"/>\n";
echo "    <title>Hello World!</title>\n";
echo "  </head>\n";
echo "  <body>\n";

# Consulta tabela e exibe resultado
$sql = "SELECT * FROM tabela2 WHERE id =1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "    <h1>".$row["coluna"]."<h1>\n";
  }
} else {
  echo "0 results";
}

# Fecha conexão
$conn->close();

echo "  </body>\n";
echo "</html>\n";

?>
