<?php
// membuat class , biasanya class kita namai sama dengan nama file nya agar kita mudah mencari nya
//dalam contoh ini nama class nya  `person`, jadi nama file nya juga kita busat person
// tp kita tidak harus menulis kita bebas yang penting kita tau


// membuat class dengan kata kunci class dan di ikuti namanya

// pada contoh ini kita menamai file dengan nama person, karena kita ingin membuat class dengan nama person
// memberi nama class di rekomendasikan menggunakan style pascal case / diawali dengan huruf besar, jika lebih dari satu kalimat kalimat selanjutnya juga diawali dengan huruf besar
class Person {
    var $data = 'bismillah';
    var string $nama; // propertise dengan type
    var $alamat;
    var string $agama = "islam"; // default value dari properti ini adalah 'islam';
    var ?string $hobi = null;
// function


function doa (string $data) :string{

    return "$data, anda membaca bismillah";
}
};


// dialam ini kita bebas mau buat sesuai keperluan kita
//contoh



// class person2{

// };

// class person3{


// };