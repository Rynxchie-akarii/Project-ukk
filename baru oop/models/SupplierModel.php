<?php
include_once "../config/koneksi.php";

class SupplierModel
{
    private $db;

    public function __construct()
    {
        // Membuat objek koneksi
        $this->db = new koneksi();
    }

    // Mengambil semua data supplier
    public function getAllSuppliers()
    {
        $query = "SELECT * FROM tb_supplier";
        $result = mysqli_query($this->db->conn, $query);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // Mengambil data supplier berdasarkan ID
    public function getSupplierById($id_supplier)
    {
        // Pastikan ID yang diterima valid dan bukan NULL atau tidak valid
        if (empty($id_supplier)) {
            return null; // Kembalikan null jika ID tidak valid
        }
    
        // Menulis query SQL untuk mengambil supplier berdasarkan ID
        $query = "SELECT * FROM tb_supplier WHERE id = $id_supplier";
        
        // Menjalankan query
        $result = mysqli_query($this->db->conn, $query);
    
        // Memeriksa apakah data ditemukan
        if ($result->num_rows > 0) {
            return $result->fetch_assoc(); // Mengembalikan hasil dalam bentuk array asosiatif
        } else {
            return null; // Jika tidak ditemukan
        }
    }

    // Menambahkan data supplier
    public function addSupplier($nama_supplier, $alamat, $no_telepon)
    {
        $query = "INSERT INTO tb_supplier (nama_supplier, alamat, no_telepon) 
                  VALUES ('$nama_supplier', '$alamat', '$no_telepon')";
        $result = mysqli_query($this->db->conn, $query);
    }

    // Mengupdate data supplier
    public function updateSupplier($id_supplier, $nama_supplier, $alamat, $no_telepon)
    {
        // Mengupdate data supplier tanpa prepared statements
        $sql = "UPDATE tb_supplier 
                SET nama_supplier = '$nama_supplier', alamat = '$alamat', no_telepon = '$no_telepon' 
                WHERE id = $id_supplier";
        return mysqli_query($this->db->conn, $sql);
    }

    // Menghapus data supplier
    public function deleteSupplier($id)
    {
        $query = "DELETE FROM tb_supplier WHERE id = $id";
        $result = mysqli_query($this->db->conn, $query);
    }

    // Fungsi untuk mengambil kategori supplier
    public function getCategories()
    {
        // Pastikan Anda memiliki tabel kategori di database, misalnya tabel 'tb_kategori_supplier'
        $query = "SELECT * FROM tb_supplier";  // Asumsi nama tabel kategori adalah 'tb_kategori_supplier'
        $result = mysqli_query($this->db->conn, $query);

        $categories = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }

        return $categories;
    }

    // Menutup koneksi
    public function closeConnection()
    {
        $this->db->close();
    }
}
?>
