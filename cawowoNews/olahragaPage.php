<?php 
    // $source = "http://localhost/cawowoNews/getNews.php";
    // $content = file_get_contents($source);
    // $data =json_decode($content,true);

    // var_dump($data);

    include "./api/getNews.php";
    $data_news = select("SELECT category * FROM news WHERE category='Olahraga'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User POV</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex justify-center flex-col overflow-hidden w-svh">
    <nav class="flex justify-between items-center bg-blue-950 py-3 text-slate-50 w-full" id='navbar'>
        <img src="logo.png" class="w-16 ml-10"/>
        <div class="font-semibold mx-10">
            <a class="mx-3" href="#">Olahraga</a>
            <a class="mx-3" href="#">Politik</a>
            <a class="mx-3" href="#">Teknologi</a>
            <a class="mx-3" href="#">Pendidikan</a>
        </div>
    </nav>

    <nav class="text-blue-950 font-semibold bg-orange-100 py-1.5 text-2xl w-full">
        <div class='flex flex-col'>
            <h3>BREAKING</h3>
            <h4 class="text-red-500 ml-16 font-semibold">NEWS</h4>
        </div> 
    </nav>

<div class='bg-fixed flex justify-center items-center mt-4 h-svh'>
    <div class='grid gap-4 place-content-center xl:grid-cols-6 lg:grid-cols-5 sm:grid-cols-3 sm:grid-cols-3 grid-cols-3 w-11/12 '>
        <?php
            foreach ($data_news['items'] as $value) {?>
            <a  href="detailNews.php?id_news=<?php echo $value['id']?>" class="flex flex-col w-full h-44 font-bold hover:text-blue-600">
                <div class="flex flex-col">
                    <img src=<?php echo $value['image']?>  alt='card-pic' class="rounded-lg w-full"/>
                    <h1 class="text-slate-950 uppercase hover:underline "><?php echo $value['title']?></h1>
                </div>    
                
            </a>
                <!-- <div>
            </div> -->
        <?php
    }
    ?>
    </div>
</div>

<footer class="w-screen h-full py-10 bg-blue-950 flex text-orange-100 justify-center items-center" >
    <div class="flex flex-col">
        <a class="mx-3" href="#">Olahraga</a>
        <a class="mx-3" href="#">Politik</a>
        <a class="mx-3" href="#">Teknologi</a>
        <a class="mx-3" href="#">Pendidikan</a>
    </div>
    
    <div class="">
        <a class="mx-3" href="#">Githuub Repository</a>
    </div>
    </div>
</footer>
</body>
</html>