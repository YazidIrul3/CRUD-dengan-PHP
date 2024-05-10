<?php 
    // $source = "http://localhost/cawowoNews/getNews.php";
    // $content = file_get_contents($source);
    // $data =json_decode($content,true);

    // var_dump($data);

    include "./api/getNews.php";
    $data_news = select("SELECT * FROM news")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex justify-center flex-col">
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

<div class='flex justify-center items-center h-full mt-4'>
<div class='grid gap-3 place-content-center place-items-center xl:grid-cols-5 lg:grid-cols-4 sm:grid-cols-3 grid-cols-2 w-11/12 '>
    <?php
        foreach ($data_news['items'] as $value) {?>
        <a href="detailNews.php?id_news=<?php echo $value['id']?>" class="flex flex-col w-full h-44 font-bold hover:text-blue-600">
            <img src=<?php echo $value['image']?>  alt='card-pic' class="rounded-lg"/>
            <h1 class="text-slate-950 uppercase hover:underline underline-offset-1 "><?php echo $value['title']?></h1>
        </a>
    <?php
}
?>
</div>
</div>
<footer class="bg-blue-950 flex text-orange-100 justify-center items-center" >
    
</footer>
</div>
</body>
</html>