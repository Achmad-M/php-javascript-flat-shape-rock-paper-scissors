<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TUGAS 2 PBO - Achmad Maulana Kusnadi</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="src/css/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="src/css/container-controls.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="src/css/container-result.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="src/css/jendela-bangun.css?v=<?php echo time(); ?>">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script defer src="src/js/main.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Achmad Maulana Kusnadi</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Kalkulator</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Game Suit</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Data Anda</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Achmad
                    <span class="text-primary">Maulana</span>
                    Kusnadi
                </h1>
                <div class="subheading mb-5">
                    Balikpapan · Manggar · Batakan ·
                    <a href="mailto:name@email.com">10221030@student.itk.ac.id</a>
                </div>
                <p class="lead mb-5">I am just an ordinary student at the Kalimantan Institute of Technology. My ID
                    student number is 10221030, and I also reside in Balikpapan. I have never performed a somersault in.
                </p>
                <div class="social-icons">
                    <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Kalkulator Bangun Datar -->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Kalkulator Bangun Datar 🧮</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <?php
                    $controls = setKotak();
                    $bentukGeometri = 'kotak';
                    $namaBentukGeometri;
                    $gambarBentukGeometri;
                    $luas;

                    if (isset($_GET['hitung-luas'])) {
                        $bentukGeometri = $_GET['bentuk-geometri'];

                        switch ($bentukGeometri) {
                            case 'kotak':
                                hitungLuasKotak();
                                $controls = setKotak();
                                break;
                            case 'segitiga':
                                hitungLuasSegitiga();
                                $controls = setSegitiga();
                                break;
                            case 'persegi-panjang':
                                hitungLuasPersegiPanjang();
                                $controls = setPersegiPanjang();
                                break;
                            case 'lingkaran':
                                hitungLuasLingkaran();
                                $controls = setLingkaran();
                                break;
                            case 'trapesium':
                                hitungLuasTrapesium();
                                $controls = setTrapesium();
                                break;
                            case 'belah-ketupat':
                                hitungLuasBelahKetupat();
                                $controls = setBelahKetupat();
                                break;
                        }
                    }

                    if (isset($_GET['ubah-bentuk-geometri'])) {
                        $bentukGeometri = $_GET['bentuk-geometri'];
                        switch ($bentukGeometri) {
                            case 'kotak':
                                $controls = setKotak();
                                break;
                            case 'persegi-panjang':
                                $controls = setPersegiPanjang();
                                break;
                            case 'segitiga':
                                $controls = setSegitiga();
                                break;
                            case 'lingkaran':
                                $controls = setLingkaran();
                                break;
                            case 'trapesium':
                                $controls = setTrapesium();
                                break;
                            case 'belah-ketupat':
                                $controls = setBelahKetupat();
                                break;
                        }
                    }

                    function setKotak()
                    {
                        global $namaBentukGeometri;
                        global $gambarBentukGeometri;
                        $namaBentukGeometri = 'Kotak';
                        $gambarBentukGeometri = '<img src="src/assets/kotak.svg" class="bentuk-geometri" alt="">';
                        return '
                                                <label class="control" for="sisi">
                                                    <span>Sisi (cm):</span>
                                                    <input type="text" name="sisi" id="sisi" placeholder="contoh 5.0">
                                                </label>
                                                ';
                    }

                    function setSegitiga()
                    {
                        global $namaBentukGeometri;
                        global $gambarBentukGeometri;
                        $namaBentukGeometri = 'Segitiga';
                        $gambarBentukGeometri = '<img src="src/assets/segitiga.svg" class="bentuk-geometri" alt="">';
                        return '
                                                <label class="control" for="alas">
                                                    <span>Alas (cm):</span>
                                                    <input type="text" name="alas" id="alas" placeholder="contoh 5.0">
                                                </label>
                                                <label class="control" for="tinggi">
                                                    <span>Tinggi (cm):</span>
                                                    <input type="text" name="tinggi" id="tinggi" placeholder="contoh 2.5">
                                                </label>
                                                ';
                    }

                    function setPersegiPanjang()
                    {
                        global $namaBentukGeometri;
                        global $gambarBentukGeometri;
                        $namaBentukGeometri = 'Persegi Panjang';
                        $gambarBentukGeometri = '<img src="src/assets/persegi_panjang.svg" class="bentuk-geometri" alt="">';
                        return '
                                                <label class="control" for="panjang">
                                                    <span>Panjang (cm):</span>
                                                    <input type="text" name="panjang" id="panjang" placeholder="contoh 5.0">
                                                </label>
                                                <label class="control" for="lebar">
                                                    <span>Lebar (cm):</span>
                                                    <input type="text" name="lebar" id="lebar" placeholder="contoh 2.5">
                                                </label>
                                                ';
                    }

                    function setLingkaran()
                    {
                        global $namaBentukGeometri;
                        global $gambarBentukGeometri;
                        $namaBentukGeometri = 'Lingkaran';
                        $gambarBentukGeometri = '<img src="src/assets/lingkaran.svg" class="bentuk-geometri" alt="">';
                        return '
                                                <label class="control" for="jari-jari">
                                                    <span>Jari-Jari (cm):</span>
                                                    <input type="text" name="jari-jari" id="jari-jari" placeholder="contoh 5.0">
                                                </label>
                                                ';
                    }

                    function setTrapesium()
                    {
                        global $namaBentukGeometri;
                        global $gambarBentukGeometri;
                        $namaBentukGeometri = 'Trapesium';
                        $gambarBentukGeometri = '<img src="src/assets/trapesium.svg" class="bentuk-geometri" alt="">';
                        return '
                                                <label class="control" for="panjang-atas">
                                                    <span>Panjang Atas (cm):</span>
                                                    <input type="text" name="panjang-atas" id="panjang-atas" placeholder="contoh 5.0">
                                                </label>
                                                <label class="control" for="panjang-bawah">
                                                    <span>Panjang Bawah (cm):</span>
                                                    <input type="text" name="panjang-bawah" id="panjang-bawah" placeholder="contoh 3.0">
                                                </label>
                                                <label class="control" for="tinggi">
                                                    <span>Tinggi (cm):</span>
                                                    <input type="text" name="tinggi" id="tinggi" placeholder="contoh 2.5">
                                                </label>
                                                ';
                    }

                    function setBelahKetupat()
                    {
                        global $namaBentukGeometri;
                        global $gambarBentukGeometri;
                        $namaBentukGeometri = 'Belah Ketupat';
                        $gambarBentukGeometri = '<img src="src/assets/belah_ketupat.svg" class="bentuk-geometri" alt="">';
                        return '
                                                <label class="control" for="diagonal-1">
                                                    <span>Diagonal 1 (cm):</span>
                                                    <input type="text" name="diagonal-1" id="diagonal-1" placeholder="contoh 5.0">
                                                </label>
                                                <label class="control" for="diagonal-2">
                                                    <span>Diagonal 2 (cm):</span>
                                                    <input type="text" name="diagonal-2" id="diagonal-2" placeholder="contoh 2.5">
                                                </label>
                                                ';
                    }

                    function hitungLuasKotak()
                    {
                        if (!isValidateValues([$_GET['sisi']])) {
                            return;
                        }
                        global $luas;
                        $sisi = (float) $_GET['sisi'];
                        $luas = $sisi ** 2;
                    }

                    function hitungLuasPersegiPanjang()
                    {
                        if (!isValidateValues([$_GET['panjang'], $_GET['lebar']])) {
                            return;
                        }
                        global $luas;
                        $panjang = (float) $_GET['panjang'];
                        $lebar = (float) $_GET['lebar'];
                        $luas = $panjang * $lebar;
                    }

                    function hitungLuasSegitiga()
                    {
                        if (!isValidateValues([$_GET['alas'], $_GET['tinggi']])) {
                            return;
                        }
                        global $luas;
                        $alas = (float) $_GET['alas'];
                        $tinggi = (float) $_GET['tinggi'];
                        $luas = ($alas * $tinggi) / 2;
                    }

                    function hitungLuasLingkaran()
                    {
                        if (!isValidateValues([$_GET['jari-jari']])) {
                            return;
                        }
                        global $luas;
                        $jari_jari = (float) $_GET['jari-jari'];
                        $luas = pi() * $jari_jari ** 2;
                    }

                    function hitungLuasTrapesium()
                    {
                        if (!isValidateValues([$_GET['panjang-atas'], $_GET['panjang-bawah'], $_GET['tinggi']])) {
                            return;
                        }
                        global $luas;
                        $panjang_atas = (float) $_GET['panjang-atas'];
                        $panjang_bawah = (float) $_GET['panjang-bawah'];
                        $tinggi = (float) $_GET['tinggi'];
                        $luas = (($panjang_atas + $panjang_bawah) * $tinggi) / 2;
                    }

                    function hitungLuasBelahKetupat()
                    {
                        if (!isValidateValues([$_GET['diagonal-1'], $_GET['diagonal-2']])) {
                            return;
                        }
                        global $luas;
                        $diagonal_1 = (float) $_GET['diagonal-1'];
                        $diagonal_2 = (float) $_GET['diagonal-2'];
                        $luas = ($diagonal_1 * $diagonal_2) / 2;
                    }

                    function isValidateValues($values)
                    {
                        foreach ($values as $value) {
                            if (!is_numeric($value)) {
                                return false;
                            }
                        }
                        return true;
                    }
                    ?>

                    <main class="container-content">
                        <form class="container-controls" method="GET">
                            <h2>Isikan Nilai di Bawah Ini</h2>
                            <div class="controls">
                                <?php echo $controls; ?>
                            </div>
                            <button class="tombol" name="hitung-luas">Hitung</button>
                            <input type="text" hidden name="bentuk-geometri" value="<?php echo $bentukGeometri; ?>">
                        </form>

                        <div class="container-result">
                            <?php
                            echo "<h2>$namaBentukGeometri</h2>";
                            echo $gambarBentukGeometri;
                            echo isset($luas) ? '<div class="hasil">Luas ' . $namaBentukGeometri . ' adalah ' . round($luas, 2) . 'cm²</div>' : '';
                            ?>
                            <button id="tombol" class="tombol">Pilih bentuk geometri lainnya</button>
                        </div>
                    </main>

                    <form class="jendela-bangun" id="jendela-bangun">
                        <div class="jendela-bangun-container">
                            <header class="jendela-bangun-header">
                                <h2>Pilih Bentuk</h2>
                                <span class="jendela-bangun-close" id="jendela-bangunClose">×</span>
                            </header>

                            <main class="jendela-bangun-options">
                                <label for="kotak" class="option">
                                    <input type="radio" <?php if ($bentukGeometri == 'kotak') {
                                                            echo 'checked';
                                                        } ?> name="bentuk-geometri" class="radio" value="kotak" id="kotak" data-shapeName="Kotak">
                                    <label for="kotak"></label>
                                    <p>Kotak</p>
                                    <img src="src/assets/kotak.svg" class="bentuk-geometri" alt="">
                                </label>
                                <label for="segitiga" class="option">
                                    <input type="radio" <?php if ($bentukGeometri == 'segitiga') {
                                                            echo 'checked';
                                                        } ?> name="bentuk-geometri" class="radio" value="segitiga" id="segitiga" data-shapeName="Segitiga">
                                    <p>Segitiga</p>
                                    <img src="src/assets/segitiga.svg" class="bentuk-geometri" alt="">
                                </label>
                                <label for="lingkaran" class="option">
                                    <input type="radio" <?php if ($bentukGeometri == 'lingkaran') {
                                                            echo 'checked';
                                                        } ?> name="bentuk-geometri" class="radio" value="lingkaran" id="lingkaran" data-shapeName="Lingkaran">
                                    <p>Lingkaran</p>
                                    <img src="src/assets/lingkaran.svg" class="bentuk-geometri" alt="">
                                </label>
                                <label for="persegi-panjang" class="option">
                                    <input type="radio" <?php if ($bentukGeometri == 'persegi-panjang') {
                                                            echo 'checked';
                                                        } ?> name="bentuk-geometri" class="radio" value="persegi-panjang" id="persegi-panjang" data-shapeName="Persegi Panjang">
                                    <p>Persegi Panjang</p>
                                    <img src="src/assets/persegi_panjang.svg" class="bentuk-geometri" alt="">
                                </label>
                                <label for="trapesium" class="option">
                                    <input type="radio" <?php if ($bentukGeometri == 'trapesium') {
                                                            echo 'checked';
                                                        } ?> name="bentuk-geometri" class="radio" value="trapesium" id="trapesium" data-shapeName="Trapesium">
                                    <p>Trapesium</p>
                                    <img src="src/assets/trapesium.svg" class="bentuk-geometri" alt="">
                                </label>
                                <label for="belah-ketupat" class="option">
                                    <input type="radio" <?php if ($bentukGeometri == 'belah-ketupat') {
                                                            echo 'checked';
                                                        } ?> name="bentuk-geometri" class="radio" value="belah-ketupat" id="belah-ketupat" data-shapeName="Belah Ketupat">
                                    <p>Belah Ketupat</p>
                                    <img src="src/assets/belah_ketupat.svg" class="bentuk-geometri" alt="">
                                </label>
                            </main>

                            <button class="tombol" id="jendela-bangun-button" name="ubah-bentuk-geometri">Pilih <span id="nama-bentuk-geometri">Kotak</span></button>

                        </div>
                    </form>
                </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Game Suit 🎰</h2>
                <?php

                // Set up the values for the game...
                // 0 is Rock, 1 is Paper, and 2 is Scissors
                $names = ['Rock 👊🏻', 'Paper ✋🏻', 'Scissors ✌🏻'];
                $human = isset($_POST['human']) ? $_POST['human'] + 0 : -1;

                $computer = 0; // Hard code the computer to rock
                // TODO: Make the computer be random
                $computer = rand(0, 2);

                // This function takes as its input the computer and human play
                // and returns "Tie", "You Lose", "You Win" depending on play
                // where "You" is the human being addressed by the computer
                function check($computer, $human)
                {
                    // For now this is a rock-savant checking function
                    // TODO: Fix this
                    if ($human == $computer) {
                        return 'Tie 🤝';
                    } elseif ($human == 0 && $computer == 2) {
                        return 'You Win 👏🏻🏆';
                    } elseif ($human == 1 && $computer == 0) {
                        return 'You Win 👏🏻🏆';
                    } elseif ($human == 2 && $computer == 1) {
                        return 'You Win 👏🏻🏆';
                    } elseif ($human == 0 && $computer == 1) {
                        return 'You Lose 🤪🤡';
                    } elseif ($human == 1 && $computer == 2) {
                        return 'You Lose 🤪🤡';
                    } elseif ($human == 2 && $computer == 0) {
                        return 'You Lose 🤪🤡';
                    }
                    return false;
                }

                // Check to see how the play happenned
                $result = check($computer, $human);

                ?>

                <div class="container">
                    <h1>Rock Paper Scissors</h1>

                    <?php
                    if (isset($_REQUEST['name'])) {
                        echo '<p>Welcome: ';
                        echo htmlentities($_REQUEST['name']);
                        echo "</p>\n";
                    }
                    ?>

                    <form method="post">

                        <select name="human">
                            <option value="-1">Select</option>
                            <option value="0">Rock</option>
                            <option value="1">Paper</option>
                            <option value="2">Scissors</option>
                            <option value="3">Test</option>
                        </select>

                        <input type="submit" value="Play">
                        <input type="submit" name="logout" value="Logout">
                    </form>

                    <?php
                    if ($human == -1) {
                        print "Please select a strategy and press Play.\n";
                    } elseif ($human == 3) {
                        for ($c = 0; $c < 3; $c++) {
                            for ($h = 0; $h < 3; $h++) {
                                $r = check($c, $h);
                                print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
                            }
                        }
                    } else {
                        print "<br>Your Play= $names[$human] <br>Computer Play= $names[$computer] <br>Result= $result\n";
                    }
                    ?>

                </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Data Diri Anda🤫🧐</h2>
                <div class="subheading mb-3">Nama, NIM, EMAIL, HOBBY</div>
                <?php
                // Inisialisasi variabel untuk menyimpan data dari form
                $name = '';
                $nim = '';
                $email = '';
                $hobby = '';

                // Cek apakah ada data yang dikirimkan melalui metode POST
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Ambil data dari form
                    $name = $_POST['name'];
                    $nim = $_POST['nim'];
                    $email = $_POST['email'];
                    $hobby = $_POST['hobby'];
                }

                // Fungsi untuk menghindari cross-site scripting (XSS)
                function sanitizeInput($input)
                {
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);
                    return $input;
                }
                ?>

                <!DOCTYPE html>
                <html>

                <head>
                    <title>Form Processing</title>
                </head>

                <body>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="contoh: Lisa blekping">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="contoh: 10221099">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="contoh: lisablekping@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="hobby" class="form-label">Hobby</label>
                            <input type="text" class="form-control" id="hobby" name="hobby" placeholder="contoh: Joget">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <?php
                    // Menampilkan cerita jika data sudah diisi dan dikirim
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        echo "<br><p>My name is $name. My NIM is $nim. You can reach me at $email. One of my hobbies is $hobby.</p>";
                    }
                    ?>
                </body>

                </html>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
</body>

</html>