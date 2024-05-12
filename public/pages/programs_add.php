<?php if ($this->user !== 'admin555'): ?>
    <script>
        window.location = 'page403';
    </script>
<?php else: ?>
    <div class="main-box">
        <div class="container">
            <h3>Додавання новин</h3>
            <hr>
            <form id="form2" action="handler_add_programs" method="post" enctype="multipart/form-data">
                <div class="form-group panel">
                    <label for="name">Назва організації:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group panel">
                    <label for="about">Опис:</label>
                    <textarea id="about" name="about" class="form-control" rows="4" required></textarea>
                </div>
                <div class="form-group panel">
                    <label for="photo">Фото:</label>
                    <input type="file" id="photo" name="photo" class="form-control" required>
                </div>
                <div class="form-group panel">
                    <label for="source">Соціальні мережі:</label>
                    <input type="url" id="source" name="source" class="form-control" required>
                </div>
                <div class="form-group panel">
                    <label for="tag1">Теги:</label>
                    <input type="text" id="tag1" name="tag1" class="form-control">
                    <input type="text" id="tag2" name="tag2" class="form-control">
                    <input type="text" id="tag3" name="tag3" class="form-control">
                </div>
                <div class="form-group buttons">
                    <input type="submit" id="submit" name="submit" class="btn btn-success" value="Відправити">
                    <input type="reset" id="reset" name="reset" class="btn btn-danger" value="Очистити">
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>