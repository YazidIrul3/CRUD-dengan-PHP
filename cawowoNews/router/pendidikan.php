<?php 
    include '../api/getNews.php';
    $new_news =  select("SELECT * FROM news WHERE category='Pendidikan' ORDER BY id DESC LIMIT 6");
    $all_news =  select("SELECT * FROM news where category='Pendidikan'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan Page</title>
    <link rel="icon" type="image/x-" href="../logo/logo.png">
    <!-- tailwind start -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- tailwind end -->
    <!-- phosphor iconst start -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- phosphor iconst end -->
</head>
<body>
    <div class="flex justify-center flex-col overflow-hidden w-svh">
    <nav class="flex xl:flex-row lg:flex-row flex-col justify-between items-center bg-blue-950 py-3 text-slate-50 w-full" id="navbar">
           <a href="user.php">
              <img src="../logo/logo.png" class="w-20 ml-10 m-3"/>
            </a>
            <div class="font-semibold mx-5 " id="navbar-menu">
                <a class="mx-3" href="olahraga.php" id="olahraga-page">Olahraga</a>
                <a class="mx-3" href="politik.php">Politik</a>
                <a class="mx-3" href="teknologi.php">Teknologi</a>
                <a class="mx-3" href="pendidikan.php">Pendidikan</a>
            </div>
        </nav>

        <nav class="text-blue-950 font-semibold bg-orange-100 py-1.5 text-2xl w-full">
            <div class='flex flex-col'>
                <h3>BREAKING</h3>
                <h4 class="text-red-500 ml-16 font-semibold">NEWS</h4>
            </div> 
        </nav>
    </div>

    <div class="flex flex-col ml-2 xl:w-8/12 lg:w-8/12 w-11/12 ">
        <div class="xl:text-2xl lg:text-xl text-lg font-bold mt-3 ">
                <div>
                    <h1>Berita Terbaru</h1>
                </div>

                <div class="bg-blue-950 h-2 w-20 mt-1    rounded-xl">
                    <span class=""></span>
                </div>
            </div>
            <div class="flex flex-col ">
                <?php
                    foreach ($new_news['items'] as $value) {?>
                      <a href="detailNews.php?id_news=<?php echo $value['id']?>"
                        class="flex flex-row items-center xl:h-44 lg:h-44 h-20 font-bold xl:my-4 lg:my-4 my-14 ">

                        <div class="xl:w-4/12 lg:w-4/12 w-6/12 h-44">
                            <img src="../img/<?php echo $value['image']?>"  
                            alt='card-pic' 
                            class="w-full h-full object-cover"/>
                        </div>    

                        <div class="ml-3 xl:text-lg lg:text-lg text-xs w-10/12 ">
                            <h1 class="text-slate-950 uppercase hover:underline "><?php echo $value['title']?></h1>
                            <h2 class="text-red-600"><?php echo $value['category']?></h2>
                        </div>
                        
                    </a>
                <?php
            }
            ?>
            </div>
        </div>
    
        </div>
    

    <div class="overflow-x-scroll h-full font-bold">
        <div class="flex flex-col ml-2 xl:w-8/12 lg:w-8/12 w-11/12 ">
            <div class="xl:text-2xl lg:text-xl text-lg font-bold mt-3 ">
                    <div>
                        <h1>Semua Berita</h1>
                    </div>

                    <div class="bg-blue-950 h-2 w-20 mt-1   rounded-xl">
                        <span class=""></span>
                    </div>
                </div>
            </div>

        <div class="flex flex-row justify-center items-center gap-4 p-4 mt-4 w-[1600px] h-full">
            <?php
                foreach ($all_news['items'] as $value) {?>
                <a href="detailNews.php?id_news=<?php echo $value['id']?>"
                class="h-72 w-96">

                    <div class="">
                        <img src="../img/<?php echo $value['image']?>"  
                        alt='card-pic' 
                        class="rounded-lg w-80 h-44 object-cover"/>
                    </div>    
                    
                    <div class="xl:text-sm lg:text-sm text-xs">
                        <h1 class="text-slate-950 uppercase hover:underline "><?php echo $value['title']?></h1>
                    </div>
                    
                </a>
                <?php
            }
            ?>
        </div>
    </div>

   

    <footer class="w-screen h-full py-12 mt-8 bg-blue-950 flex text-orange-100 justify-evenly items-center" >
        <div>
            <img src="../logo/logo.png" class="w-28 ml-10"/>
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