<?php
    require('core/models/users.php');
    $model = new Users();
    $users = $model->get_users();
?>
<?php
    require('core/models/needs.php');
    $model_needs = new Needs();
    $needs = $model_needs->get_needs();
?>
<div>
    <div>
        <div style="display: flex; margin: auto; width: 100%; height: 90%">
            <div id="usersContainer" style="width: 66%">
                <div style="display: flex; align-items: center; background-color: black; padding: 15px;
                    border-radius: 10px; border: 3px solid blue">
                    <h4 style="color: white; margin: auto; width: 10%">Пошук</h4>
                    <input type="text" id="searchInput" style="padding: 5px; border: 3px solid darkblue; 
                    border-radius: 3px; background-color: blue; color: white; font-weight: 500; margin: auto; width: 50%">
                    <select id="roleFilter" style="margin-right: 10px; margin: auto; width: 20%">
                        <option value="all">All</option>
                        <option value="moder">moder</option>
                        <option value="user">user</option>
                    </select>
                </div>
                <?php foreach ($users as $row): ?>
                    <?php if ($row['role_id'] != 3): ?>
                        <div class="of_user" data-role="<?= $row['role_id'] ?>" data-login="<?= strtolower($row['login']) ?>">
                            <p style="margin: auto; color: white; width: 30%; font-weight: 500; height: 50px; 
                            text-align: left; padding: 12px;">
                                <?= $row['login'] ?>
                            </p>
                            <?php if ($row['role_id'] == 1): ?>
                                <p style="margin: auto; color: grey; width: 12%; font-weight: 500; height: 50px; 
                                padding: 12px">user</p>
                                <a class="btn" style="width: 10px; height: 15px; margin: auto; border: 3px dashed blue; 
                                border-radius: 30px; background-color: black; color: black; font-weight: 900" 
                                href="handler_edit2_users@<?=$row['id']?>"></a>
                            <?php elseif ($row['role_id'] == 2): ?>
                                <p style="margin: auto; color: grey; width: 12%; font-weight: 500; height: 50px; 
                                padding: 12px;">moder</p>
                                <a class="btn" style="width: 10px; height: 15px; margin: auto; border: 3px solid blue; 
                                border-radius: 30px; background-color: darkblue; color: black; font-weight: 900"
                                href="handler_edit1_users@<?=$row['id']?>"></a>
                            <?php endif; ?>
                            <p style="margin: auto; color: yellow; width: 40%; font-weight: 500; height: 50px; padding: 12px;">
                                <?= $row['email'] ?>
                            </p>
                            <a class="btn btn_of_user" href="handler_del_users@<?=$row['id']?>">Видалити</a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div style="width: 32%; margin-left: 1%; background-color: black; border: 3px solid yellow; border-radius: 10px; padding-bottom: 5px">
                <div style="width: 100%; height: 50px; background-color: yellow; padding: 10px; opacity:0.8">
                    <h5 style="margin: 5px">НОВІ ПОВІДОМЛЕННЯ</h5>
                </div>
                <?php foreach ($needs as $row_needs): ?>
                    <?php if($row_needs['problem_needs'] != null && $row_needs['problem_needs'] != ""):?>
                        <div style="height: 2px; background-color: grey; width: 100%; opacity: 0.5"></div>
                        <div style="display: flex; padding: 9px">
                            <h5 style="color: white; margin: auto">ID: #<?=$row_needs['id']?></h5>
                            <a href="needs_details@<?=$row_needs['id']?>" class="btn" style="width:40%; background-color: black; color: white; background-color: orange; margin: auto; color: black; font-weight: 500; opacity: 0.8">
                                Деталі
                            </a>
                        </div>
                    <?php endif;?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <style>
        .of_user {
            height: 54px;
            display: flex;
            background-color: black;
            border-radius: 8px;
            margin-top: 10px;
            border: 2px solid blue;
        }
        .btn_of_user {
            border: 0;
            width: 15%;
            border-radius: 0 4px 4px 0;
            background-color: darkblue;
            color: white;
            padding: 12px;
            font-weight: 500;
        }
        #roleFilter, #searchInput {
            border-radius: 3px;
            padding: 5px;
            border: 3px solid darkblue;
            background-color: blue;
            color: white;
            margin-right: 10px;
            font-weight: 500;
        }
    </style>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const roleFilter = document.getElementById('roleFilter');
        const searchInput = document.getElementById('searchInput');
        const usersContainer = document.getElementById('usersContainer');
        const userElements = Array.from(usersContainer.getElementsByClassName('of_user'));

        roleFilter.addEventListener('change', filterUsers);
        searchInput.addEventListener('input', filterUsers);

        function filterUsers() {
            const selectedRole = roleFilter.value;
            const searchQuery = searchInput.value.toLowerCase();

            userElements.forEach(function (userElement) {
                const userRole = userElement.getAttribute('data-role');
                const userLogin = userElement.getAttribute('data-login');

                const matchesRole = selectedRole === 'all' || (selectedRole === 'user' && userRole == 1) || 
                (selectedRole === 'moder' && userRole == 2);
                const matchesSearch = userLogin.includes(searchQuery);

                if (matchesRole && matchesSearch) {
                    userElement.style.display = 'flex';
                } else {
                    userElement.style.display = 'none';
                }
            });
        }
    });
</script>