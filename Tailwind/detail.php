<?php include_once "struktur/top.php" ?>

<?php

include_once "proses.php";

$id = $_GET['id'];
$student = Student::show($id);

?>

    <!-- <div class="h-screen bg-"></div> -->
    <div class="flex bg-slate-300 rounded-xl p-3 m-3"> 
        <div class="basis-1/5">
            <p class="font-bold">Nama</p>
            <p class="font-bold">Nis</p>
        </div>
        <div class="basis-4/5">
            <p><?= $student['name'] ?></p>
            <p><?= $student['nis'] ?></p>
        </div>
    </div>
    <a href="index.php">
        <div class="bg-gray-700  w-full p-5 text-center text-xl font-bold text-white hover:bg-gray-800 ">
            Kembali
        </div>
    </a>
    <br>

<?php include_once "struktur/bottom.php" ?>