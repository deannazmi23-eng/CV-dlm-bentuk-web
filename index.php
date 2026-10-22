index.php
<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);
    
    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-success'>terimakasih
    <strong>$nama</strong>, pesan anda telah berhasil dikirim ke server SMKN 5 BATAM!</div>";
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">

    <title>CV Dean Nazmi Fattaya - SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <div class="profile-info">
            <div class="avatar">🙍‍♀️</div>
            <div>
                <h1 style="margin:0;">Dean Nazmi</h1>
                <p style="margin:5px 0 0 0; color: gray;">siswa teknik komputer dan jaringan SMKN 5 Batam</p>
</div>
</div>
 <nav>
    <a href="#profil">home</a>
    <a href="#skills">skills</a>
    <a href="#kontak">contact</a>
    <button id="btm.theme" onclick="toggletheme()">🌙dark mode</button>
</nav>
</header>

<div class="main-content">
    <div class="left-column">
        <div class="card" id="profil">
            <h2>PROFIL</h2>
            <h3>🙍‍♀️ BIODATA</h3>
            <p>salah satu siswa di SMKN 5 Batam dengan jurusan teknik komputer dan jaringan.</p>

            <h3>🎓 PENDIDIKAN </h3>
            <ul>
                <li>TK ALBASARIAH</LI>
                <LI>MI MUHAMMADIYAH</LI>
                <LI>SMP MUHAMMADIYAH</LI>
                <LI>SMKN 5 BATAM </LI>
</ul>

            <h3>💼 PENGALAMAN KERJA </H3>
            <ul>
                <li>mengkonfigurasi mikrotik</li>
                <li>mengcrimmping kabel lan </li>
                <li>membuat wifi menggunakan access point</li>
</ul>
</div>
</div>

<div class="right-column">
    <div class="card" id="skills">
        <h2>NETWORK SKILLS</h2>

        <div class="skill-item">
            <span class="skill-name">mikrotik routersSO</span>
            <div class="progress-bar"><div class="progress-fill" style="width: 90%;">
</div>
</div>
</div>

        <div class="skill-item">
            <span class="skill-name">cisco networkin</span>
            <div class="progress-bar"><div class="progress-fill" stylee="width: 85%;">
</div>
</div>
</div>

        <div class="skill-item">
            <span class="skill-name">linux server (debian/ubuntu)</span>
            <div class="progress-bar"><div class="progres-fill" style="width: 80%;">
</div>
</div>
</div>

        <div class="skill-item">
            <span class="skill-name">network security</span>
            <div class="progress-bar"><div class="progress-fill" style="width: 75%;">
</div>
</div>
</div>
</div>

        <div class="card" id="kontak">
            <h2>FORM KONTAK </h2>

            <?php echo $pesan_status; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">


            <div class="form-group">
                <label for="nama">nama lengkap:</label>
                <input type="text" id="nama" name="txt_nama" placeholder="masukan nama..." required>
</div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" id="email" name="txt_email" placeholder="masukan email..." required>
</div>

            <div class="form-goup">
                <label for="pesan">pesan:</label>
                <textarea id="pesan" name="txt_pesan" rows="4" placeholder="tuliskan pesan..." required></textarea>
</div>

            <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
</form>
</div>
</div>
</div>
</div>

<script src="script.js"></script>
</body>
</html>
