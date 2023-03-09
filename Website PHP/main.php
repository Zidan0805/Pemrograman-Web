<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> Biodata. </a>
        <nav class="navbar">
            <a href="#" style="--i:1;" class="active">Home</a>
            <a href="#" style="--i:2;">About</a>
            <a href="#" style="--i:3;">Contact</a>
        </nav>
    </header>
    <section class="home">
        <div class="home-content">
            <h3>Hello I'ts Me</h3>
            <h1>Muhammad Zidan Maulana</h1>
            <h3>And I'm a <span>University Student</span></h3>
            <?php $hari="08"; ?>
            <?php $bulan="Mei"; ?>
            <?php $tahun="2003"; ?>
            <?php $umur="19"; ?>
            <p><?php echo"Saya adalah seorang mahasiswa UPN Veteran Jawa Timur yang lahir dikota Surabaya pada tanggal $hari $bulan $tahun
            . Sekarang saya sedang melaksanakan studi S1 di jurusan Informatika dan sekarang saya sedang menempuh awal semester 4.
             Dan sekarang saya juga sudah berumur $umur tahun. Tujuan saya sekarang adalah mengumpulkan pengalaman sebanyak-banyaknya
             dan bisa lulus dengan nilai yang memuaskan dan tepat waktu."?></p>
            <div class="sosial-media">
                <a href="https://web.facebook.com/profile.php?id=100022908092370" style="--i:7"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/zidanmaulana___/?hl=id" style="--i:8"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://github.com/Zidan0805" style="--i:9"><i class='bx bxl-github'></i></a>
            </div>
        </div>
        <div class="home-img">
            <img src="home.png" alt="">
        </div>
    </section>
    <script> src="script.js"</script>
</body>
</html>
