<?php 
//array associative
$mahasiswa =[
    [
        "nama" => "Elon Musk",
        "nim"  => "205314083",
        "email"=> "elonmusk@gmail.com",
        "jurusan" => "Informatika",
        "gambar" => "foto1.jpeg"
    ],
    [
        "nama" => "Jeff Bezos",
        "nim"  => "205314085",
        "email"=> "jeffbezos@gmail.com",
        "jurusan" => "Industri",
        "gambar" => "foto2.jpg"
    ] 
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1> Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs) : ?>  
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"] ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NIM : <?= $mhs["nim"]; ?></li>
    <li>Jurusan : <?= $mhs["email"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?> 
</body>
</html>