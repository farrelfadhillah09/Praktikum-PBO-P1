<?php

namespace Pbo\marketplace;

require ('./PropertyConstant.php');

use Pbo\marketplace\Produk;

class Jasa{

    use Produk;
    
    public function payment($tipe){

        return match($tipe){
        "virtual" => "Virtual Account:",
        "qris" => "QRIS:",
        default => "Pembayaran Hanya Bisa Dilakukan Melalui Virtual Account dan QRIS"
        };
    }
}