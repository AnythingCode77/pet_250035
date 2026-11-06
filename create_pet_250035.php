<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Halaman ini hanya menerima data dari form.");
}

function tampilkan($nilai) {
    return htmlspecialchars((string)$nilai, ENT_QUOTES, "UTF-8");
}

$petName    = trim($_POST["pet_name_250035"] ?? "");
$petType    = trim($_POST["pet_type_250035"] ?? "");
$petGender  = trim($_POST["pet_gender_250035"] ?? "");
$petAge     = trim($_POST["pet_age_250035"] ?? "");
$petOwner   = trim($_POST["pet_owner_250035"] ?? "");
$petAddress = trim($_POST["pet_address_250035"] ?? "");
$petPhone   = trim($_POST["pet_phone_250035"] ?? "");

$jenisHewan = [
    "Cat" => "Kucing",
    "Dog" => "Anjing",
    "Reptile" => "Reptil",
    "Bird" => "Burung",
    "Rodent" => "Hewan pengerat"
];

$jenisKelamin = [
    "Male" => "Male",
    "Female" => "Female"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan Diterima</title>
</head>
<body>
    <h1>Data Berhasil Diterima</h1>

    <p><strong>Nama hewan:</strong>
        <?= tampilkan($petName) ?>
    </p>

    <p><strong>Jenis hewan:</strong>
        <?= tampilkan($jenisHewan[$petType] ?? $petType) ?>
    </p>

    <p><strong>Jenis kelamin:</strong>
        <?= tampilkan($jenisKelamin[$petGender] ?? $petGender) ?>
    </p>

    <p><strong>Umur:</strong>
        <?= tampilkan($petAge) ?> bulan
    </p>

    <p><strong>Nama pemilik:</strong>
        <?= tampilkan($petOwner) ?>
    </p>

    <p><strong>Alamat:</strong>
        <?= nl2br(tampilkan($petAddress)) ?>
    </p>

    <p><strong>Telepon:</strong>
        <?= tampilkan($petPhone) ?>
    </p>

    <p>
        <a href="add_pet_250035.php">Kembali ke form</a>
    </p>
</body>
</html>
