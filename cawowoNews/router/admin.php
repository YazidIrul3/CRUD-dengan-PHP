<?php 
    // $source = "http://localhost/cawowoNews/getNews.php";
    // $content = file_get_contents($source);
    // $data =json_decode($content,true);

    // var_dump($data);

    include "../api/getNews.php";
    $data_news = select("SELECT * FROM news");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="website icon" type="png" href="logo.png">
    <link rel="icon" type="image/x-" href="../logo/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 <div class=" h-full bg-slate-700 relative p-4" >
     
     <div class='flex flex-col items-center pt-32 mt-10'>
     <nav class="flex items-center justify-center  xl:flex-row lg:flex-row flex-col fixed py-3 top-0 bg-slate-700 w-full" id="navbar">
          <a href="user.php" class="w-52" >  <img src="../logo/logo.png" ></a>
        </nav>
         <div class='grid gap-4 place-content-center place-items-center xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 w-screen w-80 p-4  '>
             
             <?php
        foreach ($data_news['items'] as $value) {?>
    <div class=' flex flex-col w-80 h-full justify-between p-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg shadow-black shadow-sm ' >
        <div >
            <img class='rounded-sm h-44 object-cover w-full' src="../img/<?php echo $value['image']?>"  alt='card-pic'/>
        <!-- </div> -->
        <!-- <div> -->
            <h1 class=' text-lg font-bold '><?php echo $value['title']?></h1>
        <!-- </div> -->
        <!-- <div> -->
            <!-- <p><?php echo $value['description']?></p> -->
        <div class="flex justify-end mt-2 items-end">
                <a href='updateNews.php?id_news=<?php echo $value['id']?>'
                 class='bg-neutral-600 hover:bg-neutral-700 p-2 rounded-lg px-4 mr-1 shadow-black shadow-sm font-medium   '
                 >
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                </svg>
                

                </a>

                <a href='deleteNews.php?id_news=<?php echo $value['id']?>'
                 class='bg-neutral-600 hover:bg-neutral-700 p-2 rounded-lg px-4 shadow-black shadow-sm font-medium   '
                 >
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>

                </a>
            </div>
        </div>  



        </div>
    <?php
}
?>
</div>

    <a href="formCreateNews.php" class="flex justify-end fixed p-4 right-4 bottom-4 bg-neutral-600 hover:bg-neutral-700 rounded-full text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
</svg>

    </a>
</div>


</div>

</body>
</html>