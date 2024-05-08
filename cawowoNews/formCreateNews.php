

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
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div>
    <header>
        <h3>New News</h3>
    </header>
    

         <form method="POST">

            <fieldset>

                <p>
                    <label for="title">title: </label>
                    <input type="text" name="title" placeholder="title lengkap" />
                </p>
                <p>
                    <label for="description">description: </label>
                    <textarea name="description"></textarea>
                </p>
            
                <p>
                    <label for="image">Image: </label>
                    <input type="text" name="image" placeholder=""/>
                </p>

                <p>
                    <input type="submit" value="create" name="create" />
                </p>

            </fieldset>

         </form>
        </div>
    </body>
</html>