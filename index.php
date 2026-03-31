<?php
include 'koneksi.php';

$queryProfile = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$profile = mysqli_fetch_assoc($queryProfile);

$querySertifikat = mysqli_query($conn, "SELECT * FROM sertifikat");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #f5f5f5;
    color: #222;
}

nav {
    background: white;
    padding: 15px 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
}

nav a {
    text-decoration: none;
    color: #333;
    margin-left: 20px;
}

.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 80px;
}

.hero h1 {
    font-size: 45px;
    margin: 0;
}

.hero p {
    color: #666;
    max-width: 400px;
}

.hero img {
    width: 300px;
    border-radius: 15px;
}

.section {
    padding: 60px 80px;
}

.section h2 {
    margin-bottom: 20px;
}

.about {
    display: flex;
    gap: 50px;
}

.skill {
    margin-bottom: 10px;
}

.bar {
    background: #ddd;
    height: 8px;
    border-radius: 10px;
}

.fill {
    background: #333;
    height: 8px;
    border-radius: 10px;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card img {
    width: 100%;
    border-radius: 8px;
}

.card h3 {
    margin: 10px 0 5px;
}

.card p {
    color: #666;
    font-size: 14px;
}

@media(max-width:768px){
    .hero {
        flex-direction: column;
        text-align: center;
    }

    .about {
        flex-direction: column;
    }

    nav {
        padding: 15px 20px;
    }

    .section {
        padding: 40px 20px;
    }
}
</style>
</head>

<body>

<nav>
    <div><b><?php echo $profile['nama']; ?></b></div>
    <div>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#certificates">Certificates</a>
    </div>
</nav>

<section class="hero" id="home">
    <div>
        <h1><?php echo $profile['nama']; ?></h1>
        <p><?php echo $profile['deskripsi']; ?></p>
    </div>

    <div>
        <img src="img/<?php echo $profile['foto']; ?>">
    </div>
</section>

<section class="section" id="about">
    <h2>About Me</h2>

    <div class="about">
        <div>
            <p>
                Saya aktif dalam kepanitiaan Insevent dan Himpunan Mahasiswa Sistem Informasi (INFORSa) 
                sebagai bentuk pengembangan soft skill, teamwork, dan kepemimpinan.
            </p>

            <h3>Pengalaman</h3>
            <p>Panitia Seminar</p>
        </div>

        <div>
            <h3>Skills</h3>

            <div class="skill">HTML</div>
            <div class="bar"><div class="fill" style="width:80%"></div></div>

            <div class="skill">CSS</div>
            <div class="bar"><div class="fill" style="width:75%"></div></div>

            <div class="skill">Bootstrap</div>
            <div class="bar"><div class="fill" style="width:70%"></div></div>

            <div class="skill">Vue JS</div>
            <div class="bar"><div class="fill" style="width:70%"></div></div>
        </div>
    </div>
</section>

<section class="section" id="certificates">
    <h2>Certificates</h2>

    <div class="grid">
        <?php while ($row = mysqli_fetch_assoc($querySertifikat)) { ?>
            <div class="card">
                <img src="img/<?php echo $row['gambar']; ?>">
                <h3><?php echo $row['judul']; ?></h3>
                <p><?php echo $row['deskripsi']; ?></p>
            </div>
        <?php } ?>
    </div>
</section>

</body>
</html>