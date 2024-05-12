<?php
    require('core/models/programs.php');
    $model = new Programs();
    $article = $model->get_article($this->parameter);
?>
<div class="main-box">
    <div class="container">
        <h3 style="color: black; margin-top: 120px; font-weight: 900">ID #<?=$this->parameter?></h3>
        <h4>Підтверджуєте видалення даної програми?</h4>
        <div display="flex">
            <a href="programs" class="btn btn-warning" style="margin: 20px; width: 200px">Ні</a>
            <a href="handler_del_programs@<?=$this->parameter?>" class="btn btn-danger" style="margin: 20px; width: 200px" 
                name="confirm">
                Так
            </a>
        </div>
    </div>
</div>