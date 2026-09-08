<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>
    <h1>Profil Mahasiswa</h1>
    <ul>
        <li>Nama: {{ $profile['nama'] }}</li>
        <li>NIM: {{ $profile['nim'] }}</li>
        <li>Kelas: {{ $profile['kelas'] }}</li>
    </ul>
</body>
</html>