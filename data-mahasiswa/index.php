<?php
session_start();

if ($_SESSION['username'] == '') {
    echo "<script>
			window.location.href='../auth/form-login.php'
		  </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main">
        <div class="preloader">

            <div class="loading">

                <img src="../assets/laoding.png" width="80">

                <p>Harap Tunggu</p>

            </div>

        </div>
        <div class="header">
            <div class="judul">Selamat Datang di Website Saya</div>
            <ul>
                <li><a href="index.php" class="button"><span class="text-span">Home</span></a></li>
                <?php
                $user = isset($_SESSION['username']) ? $_SESSION['username'] : '';
                ?>

                <li>
                    <?php if (!empty($user)) { ?>
                        <div class="dropdown">
                            <span class="menu">Form</span>
                            <div class="dropdown-content">
                                <a href="form.php">Insert Data Mahasiswa</a> <br>
                                <a href="../data-nilai/form-nilai.php">Insert Nilai Mahasiswa</a>
                            </div>
                        </div>
                </li>
                <li>
                    <div class="dropdown">
                        <span class="menu">Laporan</span>
                        <div class="dropdown-content">
                            <a href="./laporan.php">Laporan Data Mahasiswa</a> <br>
                            <a href="../data-nilai/laporan-nilai.php">Laporan Nilai Mahasiswa</a>
                        </div>
                    </div>
                </li>
                <li><a href="../auth/logout.php" class="login-button">Logout</a></li>
            <?php } else { ?>
                <li><a href="../auth/form-login.php" class="login-button">Login</a></li>
            <?php } ?>

            </ul>
        </div>
        <img src="../assets/ROG.jpg" class="rog" alt="">
        <div class="content">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0099ff" fill-opacity="1" d="M0,192L24,202.7C48,213,96,235,144,202.7C192,171,240,85,288,42.7C336,0,384,0,432,16C480,32,528,64,576,112C624,160,672,224,720,234.7C768,245,816,203,864,202.7C912,203,960,245,1008,224C1056,203,1104,117,1152,112C1200,107,1248,181,1296,181.3C1344,181,1392,107,1416,69.3L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path>
            </svg>
            <h2>Profil Mahasiswa</h2>
            <div class="profil">
                <img src="../assets/childe.png" alt="Fatui Herbinger" class="childe" id="myImg">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                </div>
                <div class="data-mahasiswa">
                    <ul>
                        <li>Renzi Febriandika</li>
                        <li>RenziFebriandika923@gmail.com</li>
                        <li>Full stack developer</li>
                    </ul>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0099ff" fill-opacity="1" d="M0,192L18.5,181.3C36.9,171,74,149,111,133.3C147.7,117,185,107,222,96C258.5,85,295,75,332,96C369.2,117,406,171,443,208C480,245,517,267,554,250.7C590.8,235,628,181,665,165.3C701.5,149,738,171,775,181.3C812.3,192,849,192,886,160C923.1,128,960,64,997,64C1033.8,64,1071,128,1108,144C1144.6,160,1182,128,1218,106.7C1255.4,85,1292,75,1329,58.7C1366.2,43,1403,21,1422,10.7L1440,0L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path>
            </svg>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reprehenderit cumque laboriosam quisquam alias accusantium. Reiciendis velit vel cupiditate! Cumque tempore consequatur esse magnam praesentium pariatur dolores dolore inventore in fuga laborum, aperiam labore odio blanditiis quam fugit molestiae non aut soluta quisquam. Delectus quo odit amet, quibusdam repellat deleniti!</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reprehenderit cumque laboriosam quisquam alias accusantium. Reiciendis velit vel cupiditate! Cumque tempore consequatur esse magnam praesentium pariatur dolores dolore inventore in fuga laborum, aperiam labore odio blanditiis quam fugit molestiae non aut soluta quisquam. Delectus quo odit amet, quibusdam repellat deleniti!</p>
        </div>
        <div class="footer">
            <div class="copy">
                <p>Renzi febriandika: &copy;</p>
            </div>
        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        $(document).ready(function() {

            $(".preloader").fadeOut();

        })
    </script>
</body>

</html>