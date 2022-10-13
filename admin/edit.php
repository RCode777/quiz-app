<?php

require "../func/koneksi.php";
$id = $_GET["id"];
$query = mysqli_query($kon, "SELECT * FROM quiz WHERE id='$id'");
$result = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Academy - Edit Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../../assets/img/isci transparant.png" type="image/x-icon">
</head>

<body>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Edit Quiz</h1>
                    <div class="line"></div>
                    <br>
                    <br>
                    <form action="" method="post">
                        <input type="text" name="judul" class="form-control" value="<?= $result["judul"] ?>">
                        <br>
                        <input type="text" name="deskripsi" class="form-control" value="<?= $result["deskripsi"] ?>">
                        <br>
                        <input type="text" name="author" class="form-control" value="<?= $result["author"] ?>">
                        <br>
                        <input type="text" name="waktu" class="form-control" value="<?= $result["waktu"] ?>">
                        <br>
                        <input type="text" name="quiz1" class="form-control" placeholder="Enter your question" value="<?= $result["quiz1"] ?>">
                        <input type="text" name="jawaban1" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban1"] ?>">
                        <br>
                        <input type="text" name="quiz2" class="form-control" placeholder="Enter your question" value="<?= $result["quiz2"] ?>">
                        <input type="text" name="jawaban2" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban2"] ?>">
                        <br>
                        <input type="text" name="quiz3" class="form-control" placeholder="Enter your question" value="<?= $result["quiz3"] ?>">
                        <input type="text" name="jawaban3" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban3"] ?>">
                        <br>
                        <input type="text" name="quiz4" class="form-control" placeholder="Enter your question" value="<?= $result["quiz4"] ?>">
                        <input type="text" name="jawaban4" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban4"] ?>">
                        <br>
                        <input type="text" name="quiz5" class="form-control" placeholder="Enter your question" value="<?= $result["quiz5"] ?>">
                        <input type="text" name="jawaban5" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban5"] ?>">
                        <br>
                        <input type="text" name="quiz6" class="form-control" placeholder="Enter your question" value="<?= $result["quiz6"] ?>">
                        <input type="text" name="jawaban6" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban6"] ?>">
                        <br>
                        <input type="text" name="quiz7" class="form-control" placeholder="Enter your question" value="<?= $result["quiz7"] ?>">
                        <input type="text" name="jawaban7" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban7"] ?>">
                        <br>

                        <input type="text" name="quiz8" class="form-control" placeholder="Enter your question" value="<?= $result["quiz8"] ?>">
                        <input type="text" name="jawaban8" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban8"] ?>">
                        <br>
                        <input type="text" name="quiz9" class="form-control" placeholder="Enter your question" value="<?= $result["quiz9"] ?>">
                        <input type="text" name="jawaban9" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban9"] ?>">
                        <br>
                        <input type="text" name="quiz10" class="form-control" placeholder="Enter your question" value="<?= $result["quiz10"] ?>">
                        <input type="text" name="jawaban10" class="form-control" placeholder="Enter your correct answer" value="<?= $result["jawaban10"] ?>">
                        <br>
                        <button class="btn btn-outline-dark" name="submit">Add Quiz</button>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST["submit"])) {
        function ubah($data)
        {
            global $id;
            global $kon;

            $judul = $_POST["judul"];
            $deskripsi = $_POST["deskripsi"];
            $author = $_POST["author"];
            $waktu = $_POST["waktu"];
            $quiz1 = $_POST["quiz1"];
            $quiz2 = $_POST["quiz2"];
            $quiz3 = $_POST["quiz3"];
            $quiz4 = $_POST["quiz4"];
            $quiz5 = $_POST["quiz5"];
            $quiz6 = $_POST["quiz6"];
            $quiz7 = $_POST["quiz7"];
            $quiz8 = $_POST["quiz8"];
            $quiz9 = $_POST["quiz9"];
            $quiz10 = $_POST["quiz10"];
            $jawaban1 = $_POST["jawaban1"];
            $jawaban2 = $_POST["jawaban2"];
            $jawaban3 = $_POST["jawaban3"];
            $jawaban4 = $_POST["jawaban4"];
            $jawaban5 = $_POST["jawaban5"];
            $jawaban6 = $_POST["jawaban6"];
            $jawaban7 = $_POST["jawaban7"];
            $jawaban8 = $_POST["jawaban7"];
            $jawaban9 = $_POST["jawaban7"];
            $jawaban10 = $_POST["jawaban7"];



            $query = mysqli_query($kon, "UPDATE quiz SET 
            judul = '$judul', 
            deskripsi = '$deskripsi', 
            author = '$author', 
            waktu = '$waktu', 
            quiz1 = '$quiz1', 
            quiz2 = '$quiz2', 
            quiz3 = '$quiz3', 
            quiz4 = '$quiz4', 
            quiz5 = '$quiz5', 
            quiz6 = '$quiz6', 
            quiz7 = '$quiz7', 
            quiz8 = '$quiz8', 
            quiz9 = '$quiz9', 
            quiz10 = '$quiz10', 
            jawaban1 = '$jawaban1', 
            jawaban2 = '$jawaban2', 
            jawaban3 = '$jawaban3', 
            jawaban4 = '$jawaban4', 
            jawaban5 = '$jawaban5', 
            jawaban6 = '$jawaban6', 
            jawaban7 = '$jawaban7', 
            jawaban8 = '$jawaban8', 
            jawaban9 = '$jawaban9', 
            jawaban10 = '$jawaban10'
            WHERE id = '$id'
            ");
            return mysqli_affected_rows($kon);
        }

        if (ubah($_POST) > 0) {
            echo "
            <script>
               alert('quiz berhasil diubah');
               document.location.href = 'index.php'
            </script>   
            ";
        } else {
            echo "
           <script>
              alert('quiz gagal diubah');
              document.location.href = 'index.php'
           </script>   
           ";
        }
    }

    ?>
</body>

</html>