<?php 
    // $source = "http://localhost/cawowoNews/getNews.php";
    // $content = file_get_contents($source);
    // $data =json_decode($content,true);

    // var_dump($data);

    include '../api/getNews.php';
    $data_news = select("SELECT * FROM news LIMIT 6");
    $news = select("SELECT * FROM news WHERE category='Olahraga' LIMIT 6");
    $sport_news = select("SELECT * FROM news WHERE category='Olahraga' LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User POV</title>

    <!-- tailwind start -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- tailwind end -->
    <!-- phosphor iconst start -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- phosphor iconst end -->
</head>
<body>
    <div class="flex justify-center flex-col overflow-hidden w-svh">
        <nav class="flex xl:flex-row lg:flex-row flex-col justify-between items-center bg-red-500 py-3 text-slate-50 w-full" id="navbar">
            <img src="../img/logo.png" class="w-20 ml-10 m-3"/>
            <div class="font-semibold mx-5 " id="navbar-menu">
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

    <div class='flex flex-col mb-20'>
        <div class="text-xl ml-3 font-bold mt-3">
            <h1>Berita Terbaru</h1>
        </div>
        
        <div class='flex flex-col justify-start items-center mt-4'>
            <div class='grid gap-6 w-11/12 place-content-center xl:grid-cols-6 lg:grid-cols-4 sm:grid-cols-3 grid-cols-2'>
                <?php
                    foreach ($data_news['items'] as $value) {?>
                    <a href="detailNews.php?id_news=<?php echo $value['id']?>" class="my-4 flex flex-col w-full h-44 font-bold hover:text-blue-600">
                        <div class="flex flex-col">
                            <img src="../img/<?php echo $value['image']?>"  alt='card-pic' class="rounded-lg w-full h-32 object-cover "/>
                            <h1 class="text-slate-950 text-xs uppercase hover:underline "><?php echo $value['title']?></h1>
                        </div>    
                        
                    </a>
                        <!-- <div>
                    </div> -->
                <?php
            }
            ?>
            </div>
        </div>
    </div>

    <div class="bg-fixed flex m-2 xl:flex-row lg:flex-row sm:flex-row flex-col justify-evenly w-11/12 mt-4 h-full">
        <div class="flex flex-col">
            <div class="text-xl font-bold mt-3">
                <h1>Berita Politik</h1>
            </div>
            <div class="flex flex-col">
                <?php
                    foreach ($sport_news['items'] as $value) {?>
                      <a href="detailNews.php?id_news=<?php echo $value['id']?>"
                        class="flex flex-row w-full items-center h-44 font-bold mb-3 ">

                        <div class="w-4/12 h-44">
                            <img src="../img/<?php echo $value['image']?>"  
                            alt='card-pic' 
                            class="rounded-lg w-full h-full object-cover"/>
                        </div>    

                        <div class="ml-3 xl:text-lg lg:text-lg text-sm w-3/4">
                            <h1 class="text-slate-950 uppercase hover:underline "><?php echo $value['title']?></h1>
                            <h2 class="text-red-600"><?php echo $value['category']?></h2>
                        </div>
                        
                    </a>
                        <!-- <div>
                    </div> -->
                <?php
            }
            ?>
            </div>
        </div>

        <div class="flex mt-10 xl:w-6/12 lg:w-6/12 sm:w-6/12 w-full h-full flex-col ">
            <?php
                foreach ($data_news['items'] as $value) {?>
                <a href="detailNews.php?id_news=<?php echo $value['id']?>"
                    class="flex xl:flex-row lg:flex-row sm:flex-row flex-col 
                    items-center w-80 h-full p-2 font-bold">

                    <!-- <div class="basis-1/4 h-full">
                        <img src=<?php echo $value['image']?> 
                         alt='card-pic' class="rounded-lg w-full h-full"
                         />
                    </div>     -->

                    <div class="ml-3 text-sm">
                        <h1 class="text-red-600 uppercase hover:underline "><?php echo $value['title']?></h1>
                        <!-- <h2><?php echo $value['category']?></h2> -->
                    </div>
                    
                </a>
                    <!-- <div>
                </div> -->
            <?php
        }
        ?>
        </div>
    </div>

    <div class="overflow-x-scroll">
        <div class="flex flex-row justify-center items-center gap-4 p-4 mt-4 w-[1600px]">
            <?php
                foreach ($news['items'] as $value) {?>
                <a href="detailNews.php?id_news=<?php echo $value['id']?>"
                class="h-64 w-80">

                    <div class="">
                        <img src="../img/<?php echo $value['image']?>"  
                        alt='card-pic' 
                        class="rounded-lg w-80 h-44 object-cover"/>
                    </div>    
                    
                    <div class="xl:text-sm lg:text-sm text-xs">
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

    <div class="flex flex-col xl:w-8/12 lg:w-8/12 w-11/12 ml-3 mt-10">
            <div class="text-xl font-bold mt-3 ml-2">
                <h1>Berita Pendidikan</h1>
            </div>
            <div class="flex flex-col">
                <?php
                    foreach ($sport_news['items'] as $value) {?>
                    <a href="detailNews.php?id_news=<?php echo $value['id']?>"
                    class="flex flex-row w-full items-center h-44 font-bold mb-3 ">

                        <div class="w-1/4 h-44">
                            <img src="../img/<?php echo $value['image']?>"  
                            alt='card-pic' 
                            class="rounded-lg w-full h-full object-cover"/>
                        </div>    

                        <div class="ml-3 xl:text-lg lg:text-lg text-sm w-3/4">
                            <h1 class="text-slate-950 uppercase hover:underline "><?php echo $value['title']?></h1>
                            <h2 class="text-red-600"><?php echo $value['category']?></h2>
                        </div>
                        
                    </a>
                        <!-- <div>
                    </div> -->
                <?php
            }
            ?>
            </div>
        </div>
    

    <footer class="w-screen h-full py-10 bg-red-500 flex text-orange-100 justify-evenly items-center" >
        <div>
                <img src="../img/logo.png" class="w-28 ml-10"/>
        </div>
        <div class="flex flex-col items-center">
            <div class="flex flex-col font-bold text-xl mb-3">
                <h1>Category</h1>
            </div>
            
            <div class="flex flex-col">
                <a class="mx-3" href="olahraga.php" id="olahraga-page">Olahraga</a>
                <a class="mx-3" href="politik.php">Politik</a>
                <a class="mx-3" href="teknologi.php">Teknologi</a>
                <a class="mx-3" href="pendidikan.php">Pendidikan</a>
            </div>    
        </div>
        
        <div class="">
            <a class="mx-3" href="#">Githuub Repository</a>
        </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>