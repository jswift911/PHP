<style>
    html {
        background-color: lightgray;
        height: 100vh;
    }

    .gallery {
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    a img {
        height: 220px;
        margin-top: 2%;
    }
    p {
        display: flex;
        justify-content: center;
        margin-top: 1%;
        font-size: larger;
    }
    form {
        display: flex;
        justify-content: center;
        margin-top: 1%;
    }
</style>

<div class="gallery">
    <?php
    $dir = "img" . DIRECTORY_SEPARATOR;
    $images = preg_grep('/^([^.])/', scandir($dir));
    ?>
    <?php foreach ($images as $image) : ?>
        <a href="<?= $dir . $image ?>" target="blank">
            <img src="<?= $dir . $image ?>" alt="<?= $image ?>"/>
        </a>
    <?php endforeach; ?>
</div>
<p>Выберите картинку для загрузки на сервер и обновите страницу</p>
<form
        action="<?php
        $uploadfile = "img/" . $_FILES['somename']['name'];
        move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile);
        ?>"
        method="post" enctype='multipart/form-data'>
    <input type="file" name="somename"/>
    <input type="submit" value="Загрузить"/>
</form>
