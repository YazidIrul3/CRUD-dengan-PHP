<?php 
include '../api/postNews.php';

if(isset($_POST['create'])) {
    if(post_news($_POST) > 0) {
        echo "<script>
            alert('Data created success');
            document.location.href = 'formCreateNews.php';
        </script>";
} else {
    echo "<script>
    alert('Data created failed');
    document.location.href = 'formCreateNews.php';
    </script>";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Form Create News</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

            <form method="POST" enctype="multipart/form-data" class="flex flex-col items-center justify-center w-7/12" id="form">
            
                <div class="w-56 mb-3 bg-top"  id="logo">
                    <img src="../img/logo.png" alt="Logo">
                </div>

                <fieldset class="w-full flex justify-center flex-col mx-auto ">
                    <!-- <div class="box-border h-auto w-auto p-0 p-5 rounded-xl bg-slate-500 opacity-25"> -->
                        <div class="form flex flex-col">
                            <label for="title">Title: </label>
                            <input type="text" name="title" placeholder="add some new title" class="w-full shadow-xl p-2 rounded-xl" style="background-color:#5e5e5e;" require/>
                        </div>

                        <div class="form flex flex-col my-2">
                            <label for="description">Description: </label>
                            <textarea name="description" class="w-full h-44 shadow-xl rounded-xl" style="background-color:#5e5e5e;" require></textarea>
                        </div>
                        
                        <div class="form flex flex-col">
                            <label for="image">Image:</label>
                            <input type="file" name="image" class="w-full shadow-xl p-2 rounded-xl" style="background-color:#5e5e5e;" require/>
                        </div>
                        
                        <div class="form my-2">
                            <label>Category:</label>
                                <select name="category" class="w-full shadow-xl p-2 rounded-xl" style="background-color:#5e5e5e;">
                                        <option>Olahraga</option>
                                        <option>Tekonologi</option>
                                        <option>Politik</option>
                                </select>
                        </div>
                            
                        <div class="form shadow-xl rounded-xl px-4 py-2 w-20 text-white flex justify-center items-center hover:bg-zinc-600 hover:cursor-pointer bg-neutral-700">
                            <input type="submit" value="create" name="create" />
                        </div>                
                    <!-- </div> -->
                </fieldset>
            </form>
        </div>

        <script src="../js/jquery-3.7.1.min.js"></script>
        <script src="../js/parallax.js"></script>
    </body>
</html>