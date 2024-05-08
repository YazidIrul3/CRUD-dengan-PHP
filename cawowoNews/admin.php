<?php 
    // $source = "http://localhost/cawowoNews/getNews.php";
    // $content = file_get_contents($source);
    // $data =json_decode($content,true);

    // var_dump($data);

    include "./api/getNews.php";

    $title = '';
    $description = '';
    $image = '';
    $data_news = select("SELECT * FROM news");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-slate-700 h-screen">

        <nav class="flex justify-between items-center bg-blue-950 py-3 text-slate-50 w-screen" id='navbar'>
            <h1 class="font-bold ml-4">CAWOWO NEWS</h1>
        <div class="font-semibold mx-10">
        <a class="mx-3" href="#">Olahraga</a>
        <a class="mx-3" href="#">Politik</a>
        <a class="mx-3" href="#">Teknologi</a>
        <a class="mx-3" href="#">Pendidikan</a>
    </div>
</nav>
<div class="text-blue-950 font-semibold bg-orange-100 py-1.5 text-2xl ">
    <div class='flex flex-col'>
        <h3>BREAKING</h3>
        <h4 class="text-red-500 ml-16 font-semibold">NEWS</h4>
</div> 
</div>



<div class='flex items-center py-20'>
<div class='grid gap-4 place-content-center grid-cols-4 w-screen w-80 p-2 '>
    <?php
        foreach ($data_news['items'] as $value) {?>
    <div class=' bg-red-600 flex flex-col w-80 p-2 hover:bg-red-800 flex'>
        <div >
            <img class='rounded-sm' src=<?php echo $value['image']?>  alt='card-pic'/>
        <!-- </div> -->
        <!-- <div> -->
            <h1 class='text-slate-50 text-lg font-bold'><?php echo $value['title']?></h1>
        <!-- </div> -->
        <!-- <div> -->
            <p><?php echo $value['description']?></p>
            <div>
                <a href='updateNews.php?id_news=<?php echo $value['id']?>'
                 class='bg-slate-50 p-2 hover:flex before:hidden'
                 >
                 Edit
                </a>
                <a href='deleteNews.php?id_news=<?php echo $value['id']?>'
                 class='bg-slate-50 p-2  hover:flex before:hidden'
                 >
                 Delete
                </a>
            </div>
        </div>

        </div>
    <?php
}
?>
</div>
</div>

<footer class="bg-blue-950 flex text-orange-100 justify-center items-center" >
    <h1>privacy & enkripsi</h1>
</footer>
</div>
</body>
</html>