<?php
    require('core/models/programs.php');
    $programs_model = new Programs();
    $article = $programs_model->get_article($this->parameter);
?>
<div class="main-box">
    <div class="details_more">
        <div style="background-color: #191970; width: 220px; border-radius: 15px 0 0 15px">
            <img src="<?=$article['photo']?>" alt="-" style="width: 200px; height: 200px; 
                border: 5px solid black; margin-top: 10px; border-radius: 10px">
                <?php if($article['tag1'] !== ''): ?>
                    <a href="<?=$article['tag1']?>" class="btn" style="margin: 5px; background-color: white;
                        border: 0; border-radius: 5px; height: 40px; color: black; border: 1px solid black">
                        <?=$article['tag1']?>
                    </a>
                <?php endif; ?>
                <?php if($article['tag2'] !== ''): ?>
                    <a href="<?=$article['tag2']?>" class="btn" style="margin: 5px; background-color: white;
                        border: 0; border-radius: 5px; height: 40px; color: black; border: 1px solid black">
                        <?=$article['tag2']?>
                    </a>
                <?php endif; ?>
                <?php if($article['tag3'] !== ''): ?>
                    <a href="<?=$article['tag3']?>" class="btn" style="margin: 5px; background-color: white;
                        border: 0; border-radius: 5px; height: 40px; color: black; border: 1px solid black">
                        <?=$article['tag3']?>
                    </a>
                <?php endif; ?>
        </div>
        <div style="margin-left: 15px; width: 60%; text-align: left">
            <h2 style="color: purple"><?=$article['name']?></h2>
            <div style="text-align: justify">
                <h6><?=$article['about']?></h6>
                <a href="<?=$article['source']?>" class="btn btn-warning">Джерело</a>
            </div>
            <p style="color: black; font-weight: 900">ID #<?=$article['id']?></p>
        </div>
        <div>
            <a href="programs" class="btn" style="background-color: black; 
            color: white; border-radius: 5px; margin-top: 420px">Назад до списку</a>
        </div>
    </div>
</div>

<style>
    .details_more{
        background-color: white;
        width: 100%;
        height: 500px;
        display: flex;
        padding: 15px;
        border-radius: 20px;
        border: 3px solid black;
    }
</style>