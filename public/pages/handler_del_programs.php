<?php
    require('core/models/programs.php');
    $model = new Programs();
    $model->del_article($this->parameter);
    echo '   
        <h5 style="color: green">
            ВИДАЛЕНО УСПІШНО
        </h5>
    ';
?>

<div class="main-box">
    <div class="container">
        <a href="programs" class="btn" style="border: 3px solid black; background-color: white">
            Повернутись
        </a>
    </div>
</div>
