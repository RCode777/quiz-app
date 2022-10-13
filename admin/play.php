<?php
require "../func/koneksi.php";
$id = $_GET["id"];
$query = mysqli_query($kon, "SELECT * FROM quiz WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Academy - <?= $data["judul"] ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>


    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h1><?= $data["judul"] ?></h1>
                    <div class="line"></div>
                    <br>
                    <p class="text-muted"><?= $data["deskripsi"] ?></p>

                    <form action="" method="POST">
                        <p><?= $data["quiz1"] ?> :</p>
                        <input type="text" name="jawaban1" id="jawaban1" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz2"] ?> :</p>
                        <input type="text" name="jawaban2" id="jawaban2" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz3"] ?> :</p>
                        <input type="text" name="jawaban3" id="jawaban3" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz4"] ?> :</p>
                        <input type="text" name="jawaban4" id="jawaban4" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz5"] ?> :</p>
                        <input type="text" name="jawaban5" id="jawaban5" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz6"] ?> :</p>
                        <input type="text" name="jawaban6" id="jawaban6" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz7"] ?> :</p>
                        <input type="text" name="jawaban7" id="jawaban7" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz8"] ?> :</p>
                        <input type="text" name="jawaban8" id="jawaban8" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz9"] ?> :</p>
                        <input type="text" name="jawaban9" id="jawaban9" class="form-control" autocomplete="off" placeholder="Enter Answer">

                        <br>
                        <p><?= $data["quiz10"] ?> :</p>
                        <input type="text" name="jawaban10" id="jawaban10" class="form-control" autocomplete="off" placeholder="Enter Answer">
                        <br>
                        <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>

                    </form>


                    <br>
                </div>
                <div class="col-md-6">
                    <br><br><br><br><br><br>
                    <?php
                    if (isset($_POST["submit"])) {


                        $jawaban1 = mysqli_real_escape_string($kon, $_POST["jawaban1"]);
                        $jawaban2 = mysqli_real_escape_string($kon, $_POST["jawaban2"]);
                        $jawaban3 = mysqli_real_escape_string($kon, $_POST["jawaban3"]);
                        $jawaban4 = mysqli_real_escape_string($kon, $_POST["jawaban4"]);
                        $jawaban5 = mysqli_real_escape_string($kon, $_POST["jawaban5"]);
                        $jawaban6 = mysqli_real_escape_string($kon, $_POST["jawaban6"]);
                        $jawaban7 = mysqli_real_escape_string($kon, $_POST["jawaban7"]);
                        $jawaban8 = mysqli_real_escape_string($kon, $_POST["jawaban8"]);
                        $jawaban9 = mysqli_real_escape_string($kon, $_POST["jawaban9"]);
                        $jawaban10 = mysqli_real_escape_string($kon, $_POST["jawaban10"]);

                        $correct = 0;

                        $jawaban_db_1 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban1 = '$jawaban1'"));
                        if ($jawaban_db_1) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                            Duh, jawabanmu yang nomor 1 salah nih.
                        </div>";
                        }
                        $jawaban_db_2 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban2 = '$jawaban2'"));
                        if ($jawaban_db_2) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 2 salah nih.
                                    </div>";
                        }
                        $jawaban_db_3 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban3 = '$jawaban3'"));
                        if ($jawaban_db_3) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 3 salah nih.
                                    </div>";
                        }
                        $jawaban_db_4 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban4 = '$jawaban4'"));
                        if ($jawaban_db_4) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 4 salah nih.
                                    </div>";
                        }
                        $jawaban_db_5 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban5 = '$jawaban5'"));
                        if ($jawaban_db_5) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 5 salah nih.
                                    </div>";
                        }
                        $jawaban_db_6 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban6 = '$jawaban6'"));
                        if ($jawaban_db_6) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 6 salah nih.
                                    </div>";
                        }
                        $jawaban_db_7 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban7 = '$jawaban7'"));
                        if ($jawaban_db_7) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 7 salah nih.
                                    </div>";
                        }
                        $jawaban_db_8 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban8 = '$jawaban8'"));
                        if ($jawaban_db_7) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 8 salah nih.
                                    </div>";
                        }
                        $jawaban_db_9 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban9 = '$jawaban9'"));
                        if ($jawaban_db_9) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 9 salah nih.
                                    </div>";
                        }
                        $jawaban_db_10 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM quiz WHERE jawaban10 = '$jawaban10'"));
                        if ($jawaban_db_10) {
                            $correct += 10;
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                        Duh, jawabanmu yang nomor 10 salah nih.
                                    </div>";
                        }
                        echo "<div class='alert alert-success' role='alert'>
                                        Mantap, kamu mendapatkan $correct point
                                    </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>



</html>