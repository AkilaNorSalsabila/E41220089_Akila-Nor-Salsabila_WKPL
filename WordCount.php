<?php
class Wordcount
{
    // Metod untuk menghitung jumlah kata dalam sebuah kalimat
    public function countWords($sentence)
    {
        // explode digunakan untuk mengubah suatu kalimat yang terdiri dari kata-kata menjadi sebuah array berdasarkan separator atau tanda pemisah pada kalimat tersebut.
        // Terdapat count yang digunakan untuk menghitung jumlah elemen dalam array tersebut.
        // Jadi fungsi code dibawah ini adalah mengembalikan jumlah kata dalam kalimat yang diberikan
        return count(explode(" ",$sentence));

// Jadi, program ini digunakan untuk menghitung jumlah kata dalam sebuah kalimat dengan cara memecah kalimat menjadi kata-kata berdasarkan spasi dan menghitung jumlah elemen dalam array hasil pemecahan.
    }
}
?>