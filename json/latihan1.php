<?php

// $mahasiswa = [
//     [
//         "nama" => "Maisaroh",
//         "nim" => "2217020122",
//         "email" => "sarohmai627@gmail.com"
//     ],
//     [
//         "nama" => "Kekenola",
//         "nim" => "2217020111",
//         "email" => "kekenola@gmail.com"
//     ]
// ];

//data diambil dari database
$dbh = new PDO('mysql :host=localhost;dbname=phpdasar', 'root', 'root');
$db = $dbh->prepare ('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>