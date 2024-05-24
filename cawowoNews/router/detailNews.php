<?php 
include '../api/updateNews.php';
include '../api/getNews.php';

$id_news = (int)$_GET['id_news'];

$data_news = select("SELECT * FROM news WHERE id=$id_news");
// $data_news['items'];

if(isset($_POST['update'])) { 
        if(update_news($_POST, $id_news) > 0 ) {
        echo "<script>
        alert('Data deleted success');
        document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data deleted failed');
        document.location.href = 'admin.php';
        </script>";
    }
}
?><!DOCTYPE html>
<html>
<head>
    <title>Detail News Page</title>
    <link rel="icon" type="image/x-" href="../logo/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex justify-center items-center flex-col">
<nav class="flex xl:flex-row lg:flex-row flex-col justify-between items-center bg-blue-950 py-3 text-slate-50 w-full" id="navbar">
            <img src="../logo/logo.png" class="w-16 ml-10"/>
            <div class="font-semibold mx-10 " id="navbar-menu">
                <a class="mx-3" href="olahraga.php" id="olahraga-page">Olahraga</a>
                <a class="mx-3" href="politik.php">Politik</a>
                <a class="mx-3" href="teknologi.php">Teknologi</a>
                <a class="mx-3" href="pendidikan.php">Pendidikan</a>
            </div>

            <!-- <div class="mr-2 text-xl xl:hidden lg:hidden flex" id="hamburger-menu">
                <i class="ph ph-list"></i>
            </div> -->
        </nav>

        <nav class="text-blue-950 font-semibold bg-orange-100 py-1.5 text-2xl w-full">
            <div class='flex flex-col'>
                <h3>BREAKING</h3>
                <h4 class="text-red-500 ml-16 font-semibold">NEWS</h4>
            </div> 
        </nav>

    <div class='flex flex-col justify-center items-center h-full mt-2 p-2 xl:w-6/12 lg:w-6/12 sm:w-11/12 w-11/12'>
        <div class="mx-auto flex flex-col justify-center w-11/12"> 
            <div class="mb-5">   
                <h1 class="font-bold xl:text-3xl lg:txt-xl sm:text-lg text-lg uppercase"><?php foreach($data_news['items'] as $news) {echo $news['title'];}?></h1>
            </div>
            <div class="">
                <img src="../img/<?php echo $news['image']?>"  alt='card-pic' class="rounded-lg w-full"/>
            </div>
                <p class="mt-5 text-pretty text-lg"><?php foreach($data_news['items'] as $news) {echo $news['description'];}?></p>
        </div>
    </div>
</div>
</body>
</html>