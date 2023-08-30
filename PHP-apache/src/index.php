<html>
    <body>
        <?php
            for ($i = 0; $i < 10; $i++) {
                echo "Hello World! <br>";
            }
            try {
                $url = "pgsql:host=172.17.0.3;port=5432;dbname=mydb;";
                // make a database connection
                $pdo = new PDO($url, "postgres", "postgres", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            
                if ($pdo) {
                    echo "Connected to the $db database successfully!";
                }
            } catch (PDOException $e) {
                die($e->getMessage());
            } finally {
                if ($pdo) {
                    $pdo = null;
                }
            }
            phpinfo();
        ?>
    </body>
</html>