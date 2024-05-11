<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Платформа Отзывов</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Главная</a>
            <a class="nav-item nav-link" href="/signup">Регистрация</a>
            <?php if (!isset($_SESSION['user'])) : ?>
                <a class="nav-item nav-link" href="/login">Вход</a>
            <?php endif; ?>
            <!-- <a class="nav-item nav-link" href="/add/add-review">Добавить отзыв</a> -->
            <? if (isset($_SESSION['user'])) : ?>
                <a class="nav-item nav-link" href="/personal-area">Мои отзывы</a>
            <? endif ?>

        </div>
        <form class="form-inline ml-auto"action="/search" method="GET">
            <input class="form-control mr-sm-2" type="search" name = "name" placeholder="Поиск продуктов и услуг" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
    </div>
</nav>
