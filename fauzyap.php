<?php
    class produk{
    public $namabarang,
             $merk,
             $harga;
    
    public function getCetak(){
            return "$this->namabarang, $this->merk ,$this->harga";
        } 
        public function __construct($namabarang="nama barang",$merk="merk",$harga=0){
            $this->namabarang = $namabarang;
            $this->merk = $merk;
            $this->harga = $harga;
        }               
    }

    $produk1 = new produk("asus a442u","Asus",6000000);
    $produk2 = new produk("HArddisk","hdd",110000);
    $produk3 = new produk("macbook","Apple",25000000);
    $produk4 = new produk("Mouse","Logitech",1210000);

    echo "Fauzy Agil Putrandy";
    echo "<br>";

    echo "Nama Barang 1: " . $produk1->getCetak();
    echo "<br>";
    echo "Nama barang 2: " . $produk2->getCetak();
    echo "<br>";
    echo "Nama Barang 3: " . $produk3->getCetak();
    echo "<br>";
    echo "Nama Barang 4: " . $produk4->getCetak();
?>