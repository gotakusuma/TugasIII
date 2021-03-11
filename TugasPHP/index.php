<!DOCTYPE html>
<html lang="en">

<head>
    <title>Keindahan Bukit Savana Tianyar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url(./image/11.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <img src="C:\xampp\htdocs\TugasPHP\revisi 2.jpg" width="100%">
    </div>

    <div class="container">
        <!--Salam-->
        <div class="row">
            <div class="col-sm-12" style="background-color:whitesmoke;">
                <h3>
                    <marquee> Om Swastyastu, Welcome To GOKU Blog, Have A Nice Day! Blog Dengan Isi Pembahasan Seputaran Wisata Alam Menarik Di Indonesia </marquee>
                </h3>
            </div>
        </div>

        <!--Navbar-->
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">Wisata</a></li>
                <li><a data-toggle="tab" href="#menu2">Profile</a></li>
                <li><a data-toggle="tab" href="#menu3">Tentang</a></li>
            </ul>
        </div>


        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12 text-center">
                    <h2>Surga Tersembunyi</h2>
                    <h3>
                        <p>Di Alam Tianyar,Karangasem,Bali</p>
                    </h3>
                </div>
            </div>

            <div class="container" style="width: 700px;"></div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>


                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="image/monkey-bike-bali-tour.jpg" alt="Los Angeles" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="image/2018-10-02 10.33.14 1.jpg" alt="Chicago" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="image/Savana-Tianyar-Karangasem-3.jpg" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!--Konten1-->
        <form  method="POST" action="">

Nilai awal  <input type="text" name="na" value="<?=isset($_POST['na']) ? $_POST['na'] : ''?>"><br><br>
Nilai beda  <input type="text" name="nb" value="<?=isset($_POST['nb']) ? $_POST['nb'] : ''?>"><br><br>
Suku yang di cari  <input type="text" name="nc" value="<?=isset($_POST['nc']) ? $_POST['nc'] : ''?>"><br><br>

<input type="submit" name="submit" value="hasil">

</form>

<hr>

<h3>Hasil aritmatika</h3>

<?php
if (isset($_POST['submit'])){
$na = $_POST['na'];
$nb = $_POST['nb'];
$nc = $_POST['nc'];
echo "Nilai Awal = ". $na;
echo "<br> Nilai Beda = ". $nb;
echo "<br> Nilai dari aritmatika setelah diinput : " ;
for ($i=1 ; $i<=$nc; $i++){
    $hasil = $na + ($nb*($i-1));
    echo "<br>".$hasil;
}
$hasilsuku = $na + ($nc-1) * $nb;
echo "<br> <br> Nilai suku ke- ". $nc;
echo "<br>".$hasilsuku;
}
?>

<form action="" method="get">
Nilai Ke-n <input type="number" name="n" placeholder="Max 100" required>
<input type="submit" value="Generate">
</form>
<hr>
<h3>Hasil Deret Bilangan Fibonacci</h3>

<?php

$deret[1] = 4;
$deret[2] = 7;

$n = isset($_GET['n'])?$_GET['n']:'1';

if ($n >= 3 and $n <= 100)
{
 $hasil = "$deret[1], $deret[2]";
 for($i=3;$i<=$n;$i++)
 {
  $x=$i-1;
  $y=$i-2;

  $deret[$i] = $deret[$x] + $deret[$y];
  $hasil .= ", $deret[$i]";

 }
 echo "<b>Deret Bilangan Fibonacci 1 - $n</b>";
 echo "<div style='color:blue'>Output: $hasil</div>";
} else {
 echo "<b style='color:black'>Maaf nilai n harus diantara 3 s/d 100<b>";
}
?>

        <!--Form-->
        <div class="col-lg-4 " style="backgroundcolor: whitesmoke; float: right; width: 450px; margin: 15px;">
            <div class="container ">
                <div class="content">
                    <div class="col-lg-8 bg-info" style="backgroundcolor: skyblue; width: 390px">
                        <h2>Leave a Reply</h2>
                        <hr>
                        <p>Support Terus Blog Ini Ya ! :)</p>
                        <form class=" form-horizontal " action=" ">
                            <div class="form-group ">
                                <label class="control-label col-sm-3 ">Username:</label>
                                <div class="col-sm-9 ">
                                    <input type="text" class="formcontrol " required placeholder="Masukkan Nama " name="nama ">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-sm-3 ">Email:</label>
                                <div class="col-sm-9 ">
                                    <input type="email" class="formcontrol " placeholder="Email " name="email ">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-sm-3 ">Password:</label>
                                <div class="col-sm-9 ">
                                    <input type="password" class="formcontrol psw " placeholder="Enter password ">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-sm-3 ">Re-Password:</label>
                                <div class="col-sm-9 ">
                                    <input type="password" class="formcontrol repsw " placeholder="Enter password ">
                                    <small class="errpsw "></small>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-sm-3 ">Comment:</label>
                                <div class="col-sm-9 ">
                                    <textarea type="text" class="formcontrol " rows="3" required placeholder="Masukkan Komentar " name="comment ">
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-offset-2 col-sm-9 ">
                                    <div class="checkbox ">
                                        <label><input type="checkbox" name="remember "> Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-offset-3 col-sm-9 ">
                                    <button type="submit " class="btn btn-default ">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="myModal " class="modal fade " role="dialog ">
                <div class="modal-dialog ">
                    <!-- Modal content-->
                    <div class="modal-content ">
                        <div class="modal-header ">
                            <button type="button " class="close " datadismiss="modal ">&times;</button>
                            <h4 class="modal-title ">Berhasil</h4>
                        </div>
                        <div class="modal-body ">
                            <p></p>
                        </div>
                        <div class="modal-footer ">
                            <button type="button " class="btn btn-default " datadismiss="modal ">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>




<!--Konten2-->
<div class="container">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Instagram</th>
                <th>Email</th>
                <th>No.Telepon</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>nyoman_gotama</td>
                <td>gotakusuma@gmail.com</td>
                <td>081339533025</td>
            </tr>
        </tbody>
    </table>
</div>

</body>

</html>