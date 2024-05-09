

<?php 
include "./api/postNews.php";

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
</head>

<body>

<div class="w-screen h-screen flex justify-center mx-auto">
         <form method="POST" enctype="multipart/form-data" class="flex flex-col items-center w-7/12 ">
            <h1 class="font-bold text-xl">Form Create New News</h1>

            <fieldset class="w-full flex justify-center flex-col mx-auto ">
                <div class="flex flex-col">
                    <label for="title">Title: </label>
                    <input type="text" name="title" placeholder="title lengkap" class="w-full bg-slate-100 p-2" require/>
                </div>
                <div class="flex flex-col my-2">
                    <label for="description">Description: </label>
                    <textarea name="description" class="w-full h-44 bg-slate-100 p-2" require></textarea>
                </div>
                
                <div class="flex flex-col">
                    <label for="image">Image:</label>
                    <input type="text" name="image" class="w-full bg-slate-100 p-2" require/>
                </div>
                
                <div class="my-2">
                    <label>Category:</label>
                <select name="category" class="w-full bg-slate-100 p-2">
                        <option>Olahraga</option>
                        <option>Tekonologi</option>
                        <option>Politik</option>
                </select>
                </div>
                    
                    <div class="bg-blue-950 px-4 py-2 w-20 text-white flex justify-center items-center hover:cursor-pointer bg-blue-700">
                        <input type="submit" value="create" name="create" />
                    </div>

            </fieldset>

         </form>
        </div>
    </body>
</html>