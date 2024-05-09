<?php 
include './api/updateNews.php';
include './api/getNews.php';

$id_news = (int)$_GET['id_news'];

$data_news = select("SELECT * FROM news WHERE id=$id_news");
// $data_news['items'];

if(isset($_POST['update'])) { 
        if(update_news($_POST, $id_news) > 0 ) {
        echo "<script>
        alert('Data deleted success');
        document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data deleted failed');
        document.location.href = 'admin.php';
        </script>";
    }
}
?><!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    

         <form method="POST">

            <fieldset>

                <p>
                    <label for="title">title: </label>
                    <input type="text" name="title" placeholder="title lengkap" value=<?php foreach($data_news['items'] as $news) {echo $news['title'];}?> />
                </p>
                <p>
                    <label for="description">description: </label>
                    <input name="de  scription" value=<?php foreach($data_news['items'] as $news) {echo $news['description'];}?>></input>
                </p>
            
                <p>
                    <label for="image">Image: </label>
                    <input type="text" name="image" placeholder="" value=<?php foreach($data_news['items'] as $news) {echo $news['image'];}?>/>
                </p>

                <p>
                    <select name="category">
                        <option>Olahraga</option>
                        <option>Tekonologi</option>
                        <option>Politik</option>
                    </select>
                </p>

                <p>
                    <input type="submit" value="update" name="update" />
                </p>

            </fieldset>

         </form>
        </div>
    </body>
</html>

