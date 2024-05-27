<?php
    require('core/models/users.php');
    $model = new Users();
    $users = $model->get_users();
?>
<?php
    require('core/models/needs.php');
    $needs_model = new Needs();
    $article = $needs_model->get_article($this->parameter);
?>
<?php foreach ($users as $row): ?>
    <?php if (($row['role_id'] == 2 || $row['role_id'] == 3) && $this->user == $row['login']): ?>
        <form id="form2" action="handler_edit_needs@<?=$this->parameter?>" method="post" enctype="multipart/form-data">
            <div class="form-group panel">
                <label for="problem_needs">Причина проблеми:</label>
                <input type="text" id="problem_needs" name="problem_needs" class="form-control" value="<?=$article['problem_needs']?>" required>
            </div>
            <div class="form-group buttons">
                <input type="submit" id="submit" name="submit" class="btn btn-success" value="Відправити">
                <input type="reset" id="reset" name="reset" class="btn btn-danger" value="Очистити">
            </div>
        </form>
    <?php endif; ?>
<?php endforeach; ?>