<?php

// Panggil file Jasa.php
require_once('./Jasa.php');

use Pbo\marketplace\Jasa;

// Object
$jasa = new Jasa();

$produk = new Jasa();

$produk->setKode('P0001')
     ->setNama('Laptop')
     ->setHarga(10000000)
     ->setStok(5);

// Hasil
echo "Produk: " . $produk->getNama();
echo "<br>";

echo "Harga: Rp. " . $produk->getHarga();
echo "<br>";

echo "Stok: " . $produk->getStok();
echo "<br>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br>";

echo "Total harga setelah pajak: Rp. " . $produk->total();
echo "<br>";

echo "Metode Pembayaran: " . $produk->payment("transfer");
echo "<br>";