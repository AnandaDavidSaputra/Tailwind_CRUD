<?php

include_once("proses.php");

$student = Student::show($_GET['id']);

if(isset($_POST['submit'])){
    $response = Student::update([
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'nis' => $_POST['nis'],
    ]);

    setcookie('message', $response, time() + 10);

    header('Location: index.php');
}
?>


<?php include('struktur/top.php'); ?>


<!-- content -->
<div class="basis-1/4 bg-gray-300 p-5">
        <form class="rounded-xl bg-white p-4" action="" method="POST" autocomplete="off">
            <input type="hidden" name="id" value="<?=$student['id']?>">
          <h1 class="pb-5 pt-1 font-semibold
            text-3xl text-center">Form Input Nilai</h1>
          <div class="mb-3">
            <h3>Nama</h3>
            <input type="text" name="name" id="" placeholder="Nama..." class="rounded-md placeholder:p-3 w-full placeholder:text-sm" value="<?=$student['name'] ?>">
          </div>
          <div class=" mb-3">   
            <h3">Nis</h3>
            <input type="number" name="nis" id="" placeholder="Nis..." class="rounded-md placeholder:p-3 w-full placeholder:text-sm" value="<?=$student['nis'] ?>">
          </div>
          <div class="gap-2">
          <input type="submit" class="bg-green-800 rounded-md w-full text-white" name="submit" value="kirim">
          </div>
        </form>
      </div>

      <a href="index.php">
        <div class="bg-gray-700  w-full p-5 text-center text-xl font-bold text-white hover:bg-gray-800 ">
            Kembali
        </div>
    </a>

    <br>
    
      <?php include('struktur/bottom.php'); ?>
