<?php 
include '../api/updateNews.php';
include '../api/getNews.php';

$id_news = (int)$_GET['id_news'];

$data_news = select("SELECT * FROM news WHERE id=$id_news");
// $data_news['items'];

if(isset($_POST['update'])) { 
        if(update_news($_POST, $id_news) > 0 ) {
        echo "<script>
        alert('Data updated success');
        document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data updated failed');
        document.location.href = 'admin.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Section- News</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-" href="../logo/logo.png">
    <style>
        #logo {
            opacity: 0;
            transition: 3.5s;
        }

        #logo.muncul {
            opacity: 1;
        }

        .form {
            opacity: 0;
            transform: translate(0, 40px);
            transition: 1s;
        }

        .form.atas {
            opacity: 1;
            transform: translate(0,0px);
        }
    </style>
</head>

<body>

        <div class="relative w-screen h-screen h-14 flex justify-center mx-auto bg-slate-700">

            <form method="POST" enctype="multipart/form-data" class="flex flex-col p-5 items-center justify-center w-9/12" id="form">
            
                <div class="w-56 mb-3 mt-2 bg-top"  id="logo">
                    <img src="../logo/logo.png" alt="Logo">
                </div>

                <fieldset class="w-full flex justify-center flex-col mx-auto ">
                    <!-- <div class="box-border h-auto w-auto p-0 p-5 rounded-xl bg-slate-500 opacity-25"> -->
                        <div class="form flex flex-col">
                            <label for="title">Title: </label>
                            <input 
                            type="text"
                            name="title" 
                            placeholder="add some new title" 
                            class="w-full shadow-xl p-2 rounded-xl" 
                            style="background-color:#5e5e5e;" 
                            require 
                            value="<?php foreach($data_news['items'] as $news) {echo $news['title'];}?>" />
                        </div>

                        <div class="form flex flex-col my-2">
                            <label for="description">Description: </label>
                            <textarea 
                            name="description" 
                            class="w-full h-64 shadow-xl rounded-xl p-2" 
                            style="background-color:#5e5e5e;" 
                            require
                            ><?php foreach($data_news['items'] as $news) {echo $news['description'];}?>
                            </textarea>
                        </div>
                        
                        <div class="form flex flex-col">
                            <label for="image">Image:</label>
                            <input 
                            type="text"
                            name="image" 
                            value=<?php foreach($data_news['items'] as $news) {echo $news['image'];}?>
                            class="w-full shadow-xl p-2 rounded-xl" 
                            style="background-color:#5e5e5e;" 
                            require
                            />
                        </div>
                        
                        <div class="form my-2">
                            <label>Category:</label>
                                <select name="category" 
                                class="w-full shadow-xl p-2 rounded-xl" 
                                style="background-color:#5e5e5e;"
                                value=<?php foreach($data_news['items'] as $news) {echo $news['category'];}?>
                                >
                                        <option>Olahraga</option>
                                        <option>Teknologi</option>
                                        <option>Politik</option>
                                        <option>Pendidikan</option>
                                </select>
                        </div>
                            
                        <div class="form shadow-xl rounded-xl px-4 py-2 w-20 text-white flex justify-center items-center hover:bg-zinc-600 hover:cursor-pointer bg-neutral-700">
                            <input type="submit" value="update" name="update" />
                        </div>                
                    <!-- </div> -->
                </fieldset>
            </form>
        </div>

        <script src="../js/jquery-3.7.1.min.js"></script>
        <script src="../js/parallax.js"></script>
    </body>