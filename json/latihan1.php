<?php

// $mahasiswa = [
//     [
//     "nama" => "wildan haqiqi",
//     "nip"  =>"2217020158",
//     "email" =>"wildanhaqiqi120@gmail.com"
//     ],
//      [
//     "nama" => "haqiqi wildan",
//     "nip"  =>"2217020000",
//     "email" =>"wildanhaqiqi120@gmail.com"
//     ]
// ];



$dbh = new PDO('mysql:host=localhost;dbname=bkkbn_pengaduan','root','');
$db =$dbh->prepare('SELECT * FROM users');
$db->execute();
$users =$db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode( $users);
echo $data; 
?>