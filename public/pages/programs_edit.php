<?php if ($this->user !== 'admin555'): ?>
    <script>
        window.location = 'page403';
    </script>
<?php else: ?>
    <div class="main-box">
        <div class="container">
            <?php
                require('core/models/programs.php');
                $programs_model = new Programs();
                $article = $programs_model->get_article($this->parameter);
            ?>
            <form id="form2" action="handler_edit_programs@<?=$this->parameter?>" method="post" enctype="multipart/form-data">
                <div class="form-group panel">
                    <label for="name">Назва організації:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?=$article['name']?>" required>
                </div>
                <div class="form-group panel">
                    <label for="about">Опис:</label>
                    <textarea id="about" name="about" class="form-control" rows="4" required><?=$article['about']?></textarea>
                </div>
                <div class="form-group panel">
                    <label for="photo">Фото:</label>
                    <input type="file" id="photo" name="photo" class="form-control" required>
                </div>
                <div class="form-group panel">
                    <label for="source">Соціальні мережі:</label>
                    <input type="url" id="source" name="source" class="form-control" value="<?=$article['source']?>" required>
                </div>
                <div class="form-group panel">
                    <label for="tag1">Теги:</label>
                    <input type="text" id="tag1" name="tag1" class="form-control" value="<?=$article['tag1']?>">
                    <input type="text" id="tag2" name="tag2" class="form-control" value="<?=$article['tag2']?>">
                    <input type="text" id="tag3" name="tag3" class="form-control" value="<?=$article['tag3']?>">
                </div>
                <div class="form-group buttons">
                    <input type="submit" id="submit" name="submit" class="btn btn-success" value="Відправити">
                    <input type="reset" id="reset" name="reset" class="btn btn-danger" value="Очистити">
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>