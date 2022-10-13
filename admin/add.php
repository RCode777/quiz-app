<?php

require "../func/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Academy - Add Quiz</title>
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
                    <h1>Add Quiz</h1>
                    <div class="line"></div>
                    <br>
                    <br>
                    <form action="" method="post">
                        <input type="text" name="judul" class="form-control">
                        <br>
                        <input type="text" name="deskripsi" class="form-control">
                        <br>
                        <input type="text" name="author" class="form-control">
                        <br>
                        <input type="text" name="waktu" class="form-control" value="<?= date("d M Y"); ?>">
                        <br>
                        <input type="text" name="quiz1" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban1" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz2" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban2" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz3" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban3" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz4" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban4" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz5" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban5" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz6" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban6" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz7" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban7" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz8" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban8" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz9" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban9" class="form-control" placeholder="Enter your correct answer">
                        <br>
                        <input type="text" name="quiz10" class="form-control" placeholder="Enter your question">
                        <input type="text" name="jawaban10" class="form-control" placeholder="Enter your correct answer">
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
        $jawaban8 = $_POST["jawaban8"];
        $jawaban9 = $_POST["jawaban9"];
        $jawaban10 = $_POST["jawaban10"];

        $query = mysqli_query($kon, "INSERT INTO quiz VALUES (
            '',
            '$judul',  
            '$deskripsi', 
            '$author', 
            '$waktu', 
            '$quiz1', 
            '$jawaban1', 
            '$quiz2', 
            '$jawaban2', 
            '$quiz3', 
            '$jawaban3', 
            '$quiz4', 
            '$jawaban4', 
            '$quiz5', 
            '$jawaban5', 
            '$quiz6', 
            '$jawaban6', 
            '$quiz7', 
            '$jawaban7', 
            '$quiz8', 
            '$jawaban8', 
            '$quiz9', 
            '$jawaban9', 
            'quiz10', 
            '$jawaban10')");

        if ($query) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> quiz baru berhasil di tambah
                        <a href="index.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                    </div>';
        }
    }

    ?>
</body>

</html>