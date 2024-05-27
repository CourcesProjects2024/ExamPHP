<?php
    require('core/models/users.php');
    $model = new Users();
    $users = $model->get_users();
?>
<?php
    require('core/models/needs.php');
    $model_needs = new Needs();
    $needs = $model_needs->get_needs();
?>
<div class="main-box">
    <div class="container">
        <div style="display: flex">
            <h1 style="color: white; width: 65%">Потреби користувачів</h1>
            <?php if ($this->user != "Гість"): ?>
                <a href="needs_add" class="btn" style="width: 20%; 
                    background-color: blue; color: white; margin: auto">
                    Додати запит
                </a>
            <?php endif; ?>
        </div>
        <?php foreach ($needs as $row_needs): ?>
            <div style="width: 100%; padding: 10px; background-color: white; border: 2px solid grey; 
                margin: 6px; border-radius: 5px">
                <h5 style="text-align: left"><?=$row_needs['message_needs']?></h5>
                <hr>
                <div style="display: flex; width: 100%">
                    <p style="width: 20%; text-align: left; color: blue">+380<?=$row_needs['phone']?></p>
                    <div style="width: 60%">
                        <?php foreach ($users as $row): ?>
                            <?php if (($row['role_id'] == 3 || $row['role_id'] == 2) && $this->user == $row['login']): ?>
                                <a href="needs_edit@<?=$row['id']?>" class="btn btn-warning" style="width:25%; margin: auto">
                                    Повідомити
                                </a>
                                <a href="needs_details@<?=$row_needs['id']?>" class="btn" style="width:15%; margin: auto; 
                                    background-color: black; color: white">
                                    Деталі
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <p style="width: 20%; text-align: right; color: grey; 
                    font-style: italic">by <?=$row_needs['name']?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>