<?php 
include_once("proses.php");

$students = Student::index();

if (isset($_POST['kirim'])){
    $response = Student::create([
        'name' => $_POST['name'],
        'nis' => $_POST['nis']
    ]);

    header("Location: index.php");
    setcookie('message', $response, time() + 10);
}

if (isset($_POST['delete'])){
    $response = Student::delete($_POST['id']);
    setcookie('message', $response, time() + 10);

    header("Location: index.php");
}
?>

    <?php include_once "struktur/top.php" ?>

<div class="flex">
    
    <div class="basis-1/4 p-1">
    <form action="" method="post" autocomplete="off">
        <div class="p-4 bg-white rounded-xl">
            <div class="bg-yellow-400 p-3 rounded-xl">
                <h3 class="font-bold">Nama</h3>
                <input type="text" name="name" id="" placeholder="Nama..." class="rounded-md placeholder:p-3 w-full placeholder:text-sm">
                <h3 class="font-bold">Nis</h3>
                <input type="number" name="nis" id="" placeholder="Nis..." class="rounded-md placeholder:p-3 w-full placeholder:text-sm">
                <br></br>
                <input type="submit" class="bg-green-800 rounded-md w-full text-white" name="kirim" value="kirim">
            </div>
        </div>
    </div>  
    </form>
    <div class="basis-3/4 p-3 ">
        <table border="1" class="w-full">
            <thead class="bg-yellow-400">
                <tr class="border border-black text-white">
                <th>No.</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white border border-black text-center">
                <?php foreach ($students as $key => $student) : ?>
                    <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['nis'] ?></td>
                    
                    <td>
                        <button type="button" class="bg-blue-500 rounded-md text-white pr-1 pl-1"><a href="detail.php?id=<?=$student['id']?>">Detail</a></button>
                        <button type="button" class="bg-green-500 rounded-md text-white pr-1 pl-1"><a href="edit.php?id=<?=$student['id']?>">Edit</a></button>

                        <form action="" method="post" class="inline">
                        <input type="hidden" name="id" value="<?=$student['id']?>">
                        <button type="submit" class="bg-red-500 rounded-md text-white pr-1 pl-1" name="delete">Delete</button>
                        </form>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>



<?php include_once "struktur/bottom.php" ?>




