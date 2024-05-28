<?php
    require('core/models/needs.php');
    $needs_model = new Needs();
    $article = $needs_model->get_article($this->parameter);
?>
<?php
    require('core/models/users.php');
    $model = new Users();
    $users = $model->get_users();
?>
<div class="main-box">
    <div style="width: 100%; text-align: left; background-color: white; 
    padding: 20px; border: 1px solid black">
        <div style="display: flex; background-color: black; padding: 15px; border-radius: 10px">
            <h2 style="color: yellow; width: 75%"><?=$article['name']?></h2>
            <div style="text-align: left">
                <h3 style="color: white; width: 25%; margin: 5px">+380<?=$article['phone']?></h3>
            </div>
        </div>
        <h3 style="color: black; margin: 10px 0 10px 0"><?=$article['message_needs']?></h3>
        <?php if($article['problem_needs'] != null && $article['problem_needs'] != ""):?>
            <div style="width: 95%; background-color: orange; color: black; padding: 2%;
            margin: 5% 2% 2% 2%; border: 2px dashed black; border-radius: 10px">
                <p><?=$article['problem_needs']?></p>
            </div>
        <?php endif;?>
        <div style="display: flex; weight: 100%; margin: auto">
            <a href="main" class="btn" style="background-color: black; 
                color: white; border-radius: 5px; width: 20%; margin: 8px; height: 37px">Назад до списку</a>
            <?php foreach ($users as $row): ?>
                <?php if (($row['role_id'] == 3) && $this->user == $row['login']): ?>
                    <a class="btn btn-danger" style="margin: auto; margin-top: 8px" 
                    href="handler_del_needs@<?=$this->parameter?>">Видалити</a>
                <?php endif; ?>
            <?php endforeach; ?>
            <div style="text-align: right; width: 65%">
                <p style="color: black; font-weight: 900; margin-top: 15px">ID #<?=$article['id']?></p>
            </div>
        </div>
    </div>
</div>