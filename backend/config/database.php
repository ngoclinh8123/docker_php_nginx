<?php
// db.php
class Db{
    public function load_env(){
        // đọc dữ liệu từ file .env
        $envFilePath = dirname(__DIR__) . '/.env';
        if (!file_exists($envFilePath)) {
            return array();
        }
        $envContent = file_get_contents($envFilePath);
        $envVariables = parse_ini_string($envContent);
        return $envVariables;
    }

    public function connect(){
        $envVars = $this->load_env();
        $servername = $envVars['DB_SERVICE'];
        $username = $envVars['DB_USER'];
        $password = $envVars['DB_PASSWORD'];
        $dbname = $envVars['DB_NAME'];
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}