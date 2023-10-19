<?php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "WordCount.php";

// Kelas untuk menjalankan pengujian
class SimpleTest extends TestCase{
    public function testCountWords()
    {
        // Membuat instance dari kelas WordCount yang akan diuji.
        $Wc = new WordCount();

        //Kalimat yang akan diuji, terdiri dari 4 kata.
        $TestSentence = "My name is Joko";
        
        // Memanggil metod countWords untuk menghitung jumlah kata.
        $WordCount = $Wc->countWords($TestSentence);

        //Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        // Memastikan bahwa jumlah kata yang dihitung sama dengan yang diharapkan (4).
        $this->assertEquals(4, $WordCount);

        //Jadi, program ini adalah sebuah test unit sederhana untuk memeriksa apakah metod 'countWords' dari kelas 'WordCount' berfungsi dengan benar untuk menghitung jumlah kata dalam sebuah kalimat.
    }
}
?>