<?php
    require('core/models/users.php');
    $model = new Users();
    $model->del_article($this->parameter);
    echo "
        <script>
            alert('Користувача видалено успішно');
            window.location = 'admin_page';
        </script>
    ";
?>
