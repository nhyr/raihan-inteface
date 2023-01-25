<?php

require_once 'MusikTiup.php';
require_once 'MusikTekan.php';

class Pianika implements MusikTiup, MusikTekan {
    public function tiup(){
        echo '<br> Suara Pianika Ditiup Pfufff';
    }

    public function tekan()
    {
        echo '<br> Suara Pianika Ditiup, Lalu Ditekan Net, Not, Net';
    }
}

?>