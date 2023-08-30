<?php

$dbconn = pg_connect("host=72.17.0.3 dbname=mydb user=myuser password=postgres");
if (!$dbconn) {
    echo "Error de conexión.";
} else {
    echo "Conexión exitosa.";
    // ... realiza consultas u operaciones con la base de datos
    pg_close($dbconn); // Cierra la conexión cuando hayas terminado
}
phpinfo();
?>