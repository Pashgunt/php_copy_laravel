<style>
    .news__read {
        width: 100px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 15px;
        background: red;
    }

    .news__read:hover {
        cursor: pointer;
    }
</style>

<div class="news__wrapper _container">
    <div class="news__title"><?= $title ?></div>
    <div class="news__text"><?= $text ?></div>
    <div class="news__read">Читать</div>
    <div>
        <span class="news__user"><?= $user ?></span>
        <span><?= $date ?></span>
    </div>
</div>