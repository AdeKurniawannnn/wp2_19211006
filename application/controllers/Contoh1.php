<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "
 Nama Saya Ratri Nur Setyawening <br>
 Saya tinggal di daerah Cisauk <br>
 Olahraga yang saya sukai adalah Berenang
 ";
    }
}
