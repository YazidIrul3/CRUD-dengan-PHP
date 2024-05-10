<?php 
    // $source = "http://localhost/cawowoNews/getNews.php";
    // $content = file_get_contents($source);
    // $data =json_decode($content,true);

    // var_dump($data);

    include "./api/getNews.php";
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
<div class="bg-slate-50 h-screen">
<div class='flex items-center py-20'>
<div class='grid gap-4 place-content-center grid-cols-4 w-screen w-80 p-2 '>
    <?php
        foreach ($data_news['items'] as $value) {?>
    <div class=' flex flex-col w-80 p-2 hover:bg-red-800'>
        <div >
            <img class='rounded-sm' src=<?php echo $value['image']?>  alt='card-pic'/>
        <!-- </div> -->
        <!-- <div> -->
            <h1 class='text-slate-50 text-lg font-bold'><?php echo $value['title']?></h1>
        <!-- </div> -->
        <!-- <div> -->
            <!-- <p><?php echo $value['description']?></p> -->
        <div>
                <a href='updateNews.php?id_news=<?php echo $value['id']?>'
                 class='bg-slate-50 p-2'
                 >
                 Edit
                </a>
                <a href='deleteNews.php?id_news=<?php echo $value['id']?>'
                 class='bg-slate-50 p-2'
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