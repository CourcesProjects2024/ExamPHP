<?php
    require('core/models/programs.php');
    $model = new Programs();
    $programs = $model->get_programs();
    $n = count($programs);
    $k = 2;
    $pages = ceil($n / $k);
    if ($this->parameter == 0){
        $this->parameter = 1;
    }
    $limit = ($this->parameter - 1) * $k;
    $limit_programs = $model->get_limit_programs($limit, $k);
?>
<div class="main-box">
    <div class="container">
        <div style="display: flex">
            <h1 style="color: white; width: 65%">Волонтерські програми</h1>
            <?php if($this->user === "admin555"): ?>
                <a href="programs_add" class="btn" style="width: 20%; 
                background-color: blue; color: white; margin: auto">
                    Додати програму
                </a>
            <?php endif; ?>
        </div>
        <?php foreach ($limit_programs as $row): ?>
            <br>
            <div style="width: 100%; height: 180px; background-color: white; border-radius: 10px; display: flex; border: 3px solid black">
                <img src="<?=$row['photo']?>" alt="-" class="mini" style="height: 150px; width: 150px">
                <div style="width: 80%">
                    <div style="display: flex; height: 50px">
                        <h2 style="width: 45%; margin-top: 20px; text-align: left"><?=$row['name']?></h2>
                        <div style="margin-right: 1%; margin-top: 10px; width: 54%">
                            <div style="display: flex; background-color: #E7E7E7; border-radius: 5px;
                            margin: auto; height: 50px">
                                <?php if($row['tag1'] !== ''): ?>
                                    <a href="<?=$row['tag1']?>" class="btn" style="margin: 5px; background-color: white;
                                        border: 0; border-radius: 5px; height: 40px; color: black; border: 1px solid black; 
                                        margin-bottom: 30px">
                                        <?=$row['tag1']?>
                                    </a>
                                <?php endif; ?>
                                <?php if($row['tag2'] !== ''): ?>
                                    <a href="<?=$row['tag2']?>" class="btn" style="margin: 5px; background-color: white;
                                        border: 0; border-radius: 5px; height: 40px; color: black; border: 1px solid black">
                                        <?=$row['tag2']?>
                                    </a>
                                <?php endif; ?>
                                <?php if($row['tag3'] !== ''): ?>
                                    <a href="<?=$row['tag3']?>" class="btn" style="margin: 5px; background-color: white;
                                        border: 0; border-radius: 5px; height: 40px; color: black; border: 1px solid black">
                                        <?=$row['tag3']?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; height: 130px">
                        <p style="width: 65%; text-align: left">
                        <br>
                            <?=$row['about']?>
                        </p>
                        <div style="width: 35%">
                            <div style="margin: 20px 0 10px 0">
                                <?php if($this->user === "admin555"): ?>
                                    <a href="programs_edit@<?=$row['id']?>" class="btn btn-success" style="margin-left: 1%; width: 36%">
                                        Змінити
                                    </a>
                                    <a href="programs_del@<?=$row['id']?>" class="btn btn-danger" style="margin-left: 1%; width: 36%">
                                        Видалити
                                    </a>
                                <?php endif; ?>
                            </div>
                            <a href="programs_details@<?=$row['id']?>" class="btn btn-main">
                                Детальніше
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php
            //print_r($limit_news);
        ?>
        <div class="pagination-panel">
            <?php
                echo '&nbsp;&nbsp;';
                for($i = 1; $i <= $pages; $i++){
                    echo "
                        <a href=\"programs@{$i}\" class=\"btn btn-sm btn-secondary nav-btn\" 
                        style=\"background-color: blue; border: 3px solid black\">
                            {$i}
                        </a>
                        &nbsp;&nbsp; &nbsp;&nbsp;
                    ";
                }
            ?>
        </div>
    </div>
    <style>
        .mini{
            width: 150px;
            height: 150px;
            margin: 15px;
            border-radius: 10px;
        }
        .btn-main{
            width: 74%; 
            height: 40px; 
            background-color: black; 
            color: white; 
            border: 0; 
            border-radius: 7px; 
            padding: auto;
        }
        .pagination-panel{
            margin: auto;
            padding: 5px 15px;
            text-align: center;
            width: 60%;
        }
        .nav-btn {
            padding: 0px 10px;
        }
    </style>
</div>