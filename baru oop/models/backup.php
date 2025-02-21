<?php
// Memasukkan kelas koneksi
include_once "../config/koneksi.php"; 

class HpModel
{
    private $db;

    public function __construct()
    {
        // Membuat objek koneksi
        $this->db = new koneksi();
    }

    // Fungsi untuk mengambil semua data HP
    public function getAllHp()
    {
        $sql = "SELECT * FROM hpsamsung, tb_supplier WHERE hpsamsung.id_supplier = tb_supplier.id_supplier";
        $result = mysqli_query($this->db->conn, $sql);
        
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

     // Fungsi untuk mengambil data HP berdasarkan ID
    public function getHpById($id) {
    // Mengambil data berdasarkan ID
    $sql = "SELECT * FROM hpsamsung WHERE id = $id";
    $result = mysqli_query($this->db->conn, $sql);
                
     // Mengecek apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
         return mysqli_fetch_assoc($result); // Mengembalikan data dalam bentuk array asosiatif
    }
                    
    return null; // Jika data tidak ditemukan
                }
                

    // Fungsi untuk menambahkan data HP
    public function addHp($nama_hp, $varian, $stok, $harga, $tanggal_masuk, $tanggal_keluar ,$id_supplier)
    {
        // Menambahkan data HP tanpa prepared statements
        $sql = "INSERT INTO hpsamsung (nama_hp, varian, stok, harga, tanggal_masuk, tanggal_keluar, id_supplier) 
                VALUES ('$nama_hp', '$varian', $stok, $harga, '$tanggal_masuk', '$tanggal_keluar', '$id_supplier')";
        return mysqli_query($this->db->conn, $sql);
    }

    // Fungsi untuk mengedit data HP berdasarkan ID
    public function updateHp($id, $nama_hp, $varian, $stok, $harga, $tanggal_masuk, $tanggal_keluar) {
        $sql = "UPDATE hpsamsung 
                SET nama_hp = '$nama_hp', varian = '$varian', stok = $stok, harga = $harga, 
                    tanggal_masuk = '$tanggal_masuk', tanggal_keluar = '$tanggal_keluar' 
                WHERE id = $id";
        
        return mysqli_query($this->db->conn, $sql);
    }

    

    // Fungsi untuk menghapus data HP berdasarkan ID
    public function deleteHp($id)
    {
        // Menghapus data HP tanpa prepared statements
        $sql = "DELETE FROM hpsamsung WHERE id = $id";
        return mysqli_query($this->db->conn, $sql);
    }

    // Menutup koneksi
    public function closeConnection()
    {
        $this->db->close();
    }
}
?>

