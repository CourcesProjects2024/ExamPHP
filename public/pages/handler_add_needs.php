<?php
try{
    $message_needs = $_POST['message_needs'];
    $phone = $_POST['phone'];
    $name = $this->user;
    $problem_needs = null;

    require('core/models/needs.php');
    $model = new Needs();
    $model->add_needs($message_needs, $phone, $name, $problem_needs);

    echo "
        <script>
            alert('Новина успішно збережена');
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