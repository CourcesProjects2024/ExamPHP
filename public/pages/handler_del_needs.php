<?php
    require('core/models/needs.php');
    $model = new Needs();
    $model->del_article($this->parameter);
    echo '   
        <h5 style="color: green">
            ВИДАЛЕНО УСПІШНО
        </h5>
    ';
?>

<div class="main-box">
    <div class="container">
        <a href="main" class="btn" style="border: 3px solid black; background-color: white">
            Повернутись
        </a>
    </div>
</div>