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
    a {
        text-decoration: none;
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
        color: black;
        margin-bottom: 1%;
    }
</style>

<div class="gallery">
    <?php
    $mysqli = mysqli_connect('localhost:3307', 'root', '', 'PHP1');
    $query = mysqli_query($mysqli, "SELECT * FROM PHP1.gallery;");

    $images = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $images[] = $row;
    }

    mysqli_close($mysqli);
    ?>

<!--    target="blank" - при клике открывает изображение в полном размере в новой вкладке,
        поэтому я не стал создавать отдельно вторую страницу для этого, т.к. функционал идентичный
        и менее трудозатратный. Это можно увидеть в предыдущей моей домашней работе.     -->
    <?php foreach ($images as $image) : ?>
        <a href="<?= $image['url'] ?>" target="blank">
            <img src="<?= $image['url'] ?>" alt="<?= $image['name'] ?>"/>
            <p>id файла: <?=$image['id']?></p>
            <p>Имя файла: <?=$image['name']?></p>
            <p>Размер файла: <?=$image['size']?> байт </p>
        </a>
    <?php endforeach; ?>

</div>