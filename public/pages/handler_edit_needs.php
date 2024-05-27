<?php
try{
    $problem_needs = $_POST['problem_needs'];

    require('core/models/needs.php');
    $model = new Needs();
    $model->edit_needs($problem_needs, $this->parameter);

    echo "
        <script>
            alert('Оновлено успішно');
            window.location = 'main';
        </script>
    ";
}
catch (Exeption $e){
    echo "
        <script>
            alert({$e->getMessage()});
            window.location = 'main';
        </script>
    ";
}