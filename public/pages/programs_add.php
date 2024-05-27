<?php if ($this->user !== 'admin555'): ?>
    <script>
        window.location = 'page403';
    </script>
<?php else: ?>
    <div class="main-box">
        <div class="container">
            <h3>Додавання програми</h3>
            <hr>
            <form id="form2" action="handler_add_programs" method="post" enctype="multipart/form-data">
                <div class="form-group panel">
                    <label for="name">Organization Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group panel">
                    <label for="about">Description:</label>
                    <textarea id="about" name="about" class="form-control" rows="4" required></textarea>
                </div>
                <div class="form-group panel">
                    <label for="photo">Photo:</label>
                    <input type="file" id="photo" name="photo" class="form-control" required>
                </div>
                <div class="form-group panel">
                    <label for="source">Social Media:</label>
                    <input type="url" id="source" name="source" class="form-control" required>
                </div>
                <div class="form-group panel">
                    <label for="tag1">Tags:</label>
                    <select id="tag1" name="tag1" class="form-control">
                        <option value="">none</option>
                        <option value="nets">nets</option>
                        <option value="weaving">weaving</option>
                        <option value="with children">with children</option>
                        <option value="bracelets">bracelets</option>
                        <option value="ecology">ecology</option>
                        <option value="fundraising">fundraising</option>
                        <option value="help">help</option>
                        <option value="work">work</option>
                        <option value="animals">animals</option>
                    </select>
                    <select id="tag2" name="tag2" class="form-control">
                        <option value="">none</option>
                        <option value="nets">nets</option>
                        <option value="weaving">weaving</option>
                        <option value="with_children">with_children</option>
                        <option value="bracelets">bracelets</option>
                        <option value="ecology">ecology</option>
                        <option value="fundraising">fundraising</option>
                        <option value="help">help</option>
                        <option value="work">work</option>
                        <option value="animals">animals</option>
                    </select>
                    <select id="tag3" name="tag3" class="form-control">
                        <option value="">none</option>
                        <option value="nets">nets</option>
                        <option value="weaving">weaving</option>
                        <option value="with children">with children</option>
                        <option value="bracelets">bracelets</option>
                        <option value="ecology">ecology</option>
                        <option value="fundraising">fundraising</option>
                        <option value="help">help</option>
                        <option value="work">work</option>
                        <option value="animals">animals</option>
                    </select>
                </div>
                <div class="form-group buttons">
                    <input type="submit" id="submit" name="submit" class="btn btn-success" value="Submit">
                    <a href="programs" class="btn btn-danger">Назад</a>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>