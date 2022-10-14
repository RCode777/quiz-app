<?php
require "func/koneksi.php";
$id = $_GET["id"];
$query = mysqli_query($kon, "SELECT *, soal.id AS soal_id FROM soal INNER JOIN quis ON soal.id_quis=quis.id WHERE id_quis=$id");
$data = mysqli_fetch_array($query);

// echo "<pre>";
// var_dump($data);
// die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Academy - <?= $data["judul"] ?></title>
    <link rel="stylesheet" href="css/style.css">
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
                        <?php foreach ($query as $soal): ?>
                        <p><?= $soal['soal'] ?> :</p>
                            <input type="text" name="jawaban[]" id="jawaban[]" class="form-control" autocomplete="off" placeholder="Enter Answer">
                            <input type="hidden" name="soal_id[]" value="<?= $soal['soal_id'] ?>">
                            <input type="hidden" name="poin[]" value="<?= $soal['poin'] ?>">
                                <br><br>
                            <br> 
                            <?php 
                                $valid_soal_id[] = $soal['soal_id'];
                                $valid_poin[] = $soal['poin'];
                            ?>
                        <?php endforeach ?>
                        
                        <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>

                    </form>


                    <br>
                </div>
                <div class="col-md-6">
                    <br><br><br><br><br><br>
                    <?php
                    $quis_id = $_GET['id'];
                    $query = mysqli_query($kon, "SELECT * FROM point WHERE quis_id=$quis_id AND user_id=1");
                    $user_poin = mysqli_fetch_array($query);

                    if ($user_poin == TRUE) {
                        echo "<div class='alert alert-success' role='alert'>
                            Poin kamu dikuis ini adalah".$user_poin['total']."
                        </div>";
                    }

                    if (isset($_POST['submit'])) {
                        $jawaban = $_POST['jawaban'];
                        $soal_id = $_POST['soal_id'];
                        $point = $_POST['poin'];
                        $user_id = 1;
                        $jml_soal = count($jawaban);

                        $query = mysqli_query($kon, "UPDATE point SET
                                total = 0
                            WHERE quis_id=$quis_id AND user_id=1
                        ");

                        for ($i=0; $i < $jml_soal; $i++) {
                            if ($point[$i] != $valid_poin[$i] || $soal_id != $valid_soal_id) {
                                exit('Terjadi kesalahan pada server');
                            }else{

                                $query_insert = mysqli_query($kon, "INSERT INTO jawab(jawaban,soal_id,user_id) VALUES ('$jawaban[$i]','$soal_id[$i]','$user_id')");
                                    
                                if (!$query_insert) {
                                    echo 'Terjadi kesalahan pada server';
                                }else{

                                    $query = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM soal WHERE jawab='$jawaban[$i]'"));
                                        if (!$query) {
                                            $point_benar = 0;
                                            $no = $i + 1;
                                            echo "<div class='alert alert-danger' role='alert'>
                                                Duh, jawabanmu yang nomor ".$no." salah nih.
                                            </div>";

                                        }else{
                                            // echo 'ada datanya';
                                            $point_benar = $_POST['poin'];
                                            $query = mysqli_query($kon, "SELECT * FROM point WHERE quis_id=$quis_id AND user_id=1");
                                            $data_poin = mysqli_fetch_array($query);
                                            if ($data_poin == null) {
                                                $query = mysqli_query($kon, "INSERT INTO point(total,quis_id,user_id) VALUES ('$point_benar[$i]','$quis_id','$user_id')");
                                            }else{
                                                $total[$i] = $data_poin['total'] + $point_benar[$i];
                                                $query = mysqli_query($kon, "UPDATE point SET
                                                     total = '$total[$i]'
                                                     WHERE quis_id=$quis_id AND user_id=1
                                                 ");
                                                if (!$query) {
                                                    exit('Terjadi kesalahan pada server');
                                                }
                                            }
                                        }
                                }
                            }
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>