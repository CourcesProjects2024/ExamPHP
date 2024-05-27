<div class="main-box">
    <div class="container">
        <form id="form2" action="handler_add_needs" method="post" enctype="multipart/form-data">
            <div class="form-group panel">
                <label for="message_needs">Запит:</label>
                <input type="text" id="message_needs" name="message_needs" class="form-control" required>
            </div>
            <div class="form-group panel">
                <label for="phone">Телефон:</label>
                <div style="display: flex">
                    <p>+380</p>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
            </div>
            <div class="form-group buttons">
                <input type="submit" id="submit" name="submit" class="btn btn-success" value="Відправити">
                <input type="reset" id="reset" name="reset" class="btn btn-danger" value="Очистити">
            </div>
        </form>
    </div>
</div>