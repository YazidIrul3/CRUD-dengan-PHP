<?php 
include './api/updateNews.php';
include './api/getNews.php';

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
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex justify-center items-center flex-col">
    <nav class="flex justify-between items-center bg-blue-950 py-3 text-slate-50 w-screen" id='navbar'>
        <h1 class="font-bold ml-4">CAWOWO NEWS</h1>
        <div class="font-semibold mx-10">
            <a class="mx-3" href="#">Olahraga</a>
            <a class="mx-3" href="#">Politik</a>
            <a class="mx-3" href="#">Teknologi</a>
            <a class="mx-3" href="#">Pendidikan</a>
        </div>
    </nav>
    <div class="text-blue-950 font-semibold bg-orange-100 py-1.5 text-2xl w-screen ">
        <div class='flex flex-col'>
            <h3>BREAKING</h3>
            <h4 class="text-red-500 ml-16 font-semibold">NEWS</h4>
        </div> 
    </div>

    <div class='flex flex-col justify-center items-center h-full mt-2 p-2 xl:w-8/12 lg:w-8/12 sm:w-11/12 w-full'>
        <div class="mx-auto flex flex-col justify-center"> 
            <div class="mb-3">   
                <h1 class="font-bold text-4xl uppercase"><?php foreach($data_news['items'] as $news) {echo $news['title'];}?></h1>
            </div>
                <img class="w-full rounded-lg" src=<?php foreach($data_news['items'] as $news) {echo $news['image'];}?>  alt='card-pic' class="rounded-lg"/>
           
                <p><?php foreach($data_news['items'] as $news) {echo $news['description'];}?></p>
        </div>
    </div>
</div>
</body>
</html>

