<?php
try{
    $role_id = 1;

    require('core/models/users.php');
    $model = new Users();
    $model->edit_users_role($role_id, $this->parameter);

    echo "
        <script>
            alert('Оновлено успішно');
            window.location = 'admin_page';
        </script>
    ";
}
catch (Exeption $e){
    echo "
        <script>
            alert({$e->getMessage()});
            window.location = 'admin_page';
        </script>
    ";
}