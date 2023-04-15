<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- css link -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Biodata Diri PHP</title>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#logo"><img src="./assets/logo/Afif_Sasonda.png" alt="logo" style="width: 4rem; height: 5rem;"></a>

        <div class="navbar-nav">
            <a href="#home"><?="Home"?></a>
            <a href="#about"><?="Biodata Diri"?></a>
            <a href="#portofolio"><?="Project"?></a>
            <p href="#contact" class="contact"><?"Contact me"?></p>
        </div>

        <div class="navbar-extra">
            <a href="#award"><i data-feather="award"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <section class="hero" id="home">
        <main class="content">
            <div class="text-content">
                <p><?="Hello__"?></p>
                <h1><?="I'm"?> <span><?= "Afif Dwi Sasonda"?></span></h1>
                <p><?=
                "Saya Afif Dwi Sasonda, Lahir di Padang, 28 September 2002, jenis kelamin Laki-laki, Saya tinggal di Padang dan hobby saya adalah bermain badminton"
                ?></p>
                <p><?=
                ""
                ?></p>
                <a href="riwayatpendidikan.php" class="__me">Riwayat Pendidikan</a>

            </div>
            <div class="avatar">
                <a href="#profile"><img src="/assets/image/profile_1.png" alt="avatar" style="width: 27rem; height: 27rem;"></a>
            </div>
        </main>
    </section>


    <script>
        feather.replace()
    </script>
    <script src="./js/script.js"></script>
</body>
</html>