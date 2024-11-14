<?php 
    class Barang{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }

        public function dataBarang(){
            $sql="SELECT * FROM Barang";
            $rs = $this->dbh->query($sql);
            return $rs;
        }
        
        public function getAllJenis(){
            $sql = "SELECT * FROM jenis_barang";
            // fungsi query, eksekusi query dan ambil datanya
            $rs = $this->dbh->query($sql); 
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO barang(kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_barang_id)
                    VALUES (?,?,?,?,?,?,?)";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }
    }
?>