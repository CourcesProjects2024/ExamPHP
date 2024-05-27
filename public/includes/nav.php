<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: black">
    <div class="container">
        <a class="navbar-brand" href="main"><img src="public/assets/img/logo.png" alt="." style="width: 50px; height: 50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="main">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="programs">Волонтерство</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">Про сайт</a>
                </li>
                <?php if ($this->user === "admin555") {?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_page">Сторінка адміністратора</a>
                    </li>
                <?php }  ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="" style="margin-right: 50px">
                        Вітаємо Вас, <?=$this->user?> !
                    </a>
                </li>
                <?php if ($this->user === "Гість") {?>
                    <li class="nav-item">
                        <a class="nav-link" href="entry">Вхід</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reg">Реєстрація</a>
                    </li>
                <?php } else {  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="exit">Вихід</a>
                    </li>
                <?php }  ?>
            </ul>
        </div>
    </div>
</nav>
<br>