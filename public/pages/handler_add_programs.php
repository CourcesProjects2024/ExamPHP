//Обровник додавання волонтерських програми

<?php
try{
    $name = $_POST['name'];
    $about = $_POST['about'];
    $source = $_POST['source'];
    $tag1 = $_POST['tag1'];
    $tag2 = $_POST['tag2'];
    $tag3 = $_POST['tag3'];

    if (($tag1 && ($tag1 === $tag2 || $tag1 === $tag3)) || ($tag2 && $tag2 === $tag3)) {
        throw new Exception('Теги не повинні повторюватись.');
    }

    date_default_timezone_set('Europe/Kiev');
    $publish = date('Y-m-d H:i:s');
    $photo = "public/files/{$_FILES['photo']['name']}";

    $type = $_FILES['photo']['type'];
    if ($type !== 'image/png' && $type !== 'image/jpeg' && $type !== 'image/gif'){
        throw new Exception('Файл має неграфічний формат');
    }

    $size = $_FILES['photo']['size'];
    if ($size > 10 * 1024 * 1024){
        throw new Exception('Розмір файлу більше 10Mb');
    }

    if (!file_exists($photo)){
        if(!copy($_FILES['photo']['tmp_name'], $photo)){
            throw new Exception('Не вдалося завантажити файл на сервер');
        }
    }

    require('core/models/programs.php');
    $model = new Programs();
    $model->add_programs($name, $about, $photo, $source, $tag1, $tag2, $tag3, $publish);

    echo "
        <script>
            alert('Новина успішно збережена');
            window.location = 'programs';
        </script>
    ";
}
catch (Exception $e){
    echo "
        <script>
            alert('{$e->getMessage()}');
            window.location = 'programs';
        </script>
    ";
}
?>