<?php
// Koneksi.php
class Koneksi
{
    private $server_name = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $db = 'db_gudanghp';
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server_name, $this->username, $this->pass, $this->db);
            if ($this->conn->connect_error) {
                throw new Exception("Koneksi gagal: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Query_Tampil($query)
    {
        $result = $this->conn->query($query);
        if ($result) {
            return $result->fetch_assoc();  // Return first row from result set
        } else {
            return false;
        }
    }

    public function Query_Perintah($query)
    {
        return $this->conn->query($query); // Execute and return result for non-select queries
    }

    public function close()
    {
        $this->conn->close();
    }
}
?>
