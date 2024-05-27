<?php

require_once('core/providers/mysql_provider.php');

class Users extends MySqlProvider{
    public function add_user($login, $passw, $email, $regdate, $birthday, $role_id, $status_id){
        $sql_query = 'insert into users (login, password, email, regdate, birthday, role_id, status_id)';
        $sql_query .= "values (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param('sssssii', $login, $passw, $email, $regdate, $birthday, $role_id, $status_id);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на додавання користувача');
        }
    }

    public function check_free_login($login){
        $sql_query = 'select login from users where login=?';
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param('s', $login);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на додавання користувача');
        }
        $result = $stmt->get_result();
        $N = $result->num_rows;
        return($N === 0);
    }

    public function check_auth_user($login, $passw){
        $sql_query = 'select * from users where login=? and password=?';
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param('ss', $login, $passw);

        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на авторизацію користувача');
        }
        $result = $stmt->get_result();
        $N = $result->num_rows;
        return($N === 1);
    }

    public function get_users(){
        $users = [];
        $sql = 'select * from users';
        $result = $this->conn->query($sql);
        if (!$result) {
            throw new Exeption('Помилка виконання SQL-запиту на зчитування списку користувачів');
        } elseif ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $users[] = $row;
            }
        }
        return $users;
    }

    public function del_article($aid){
        $sql = 'delete from users where id=? ';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $aid);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на видалення користувача');
        }
    }

    public function edit_users_role($role_id, $aid){
        $sql = 'update users set ';
        $sql .= 'role_id=? ';
        $sql .= 'where id=?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ii', $role_id, $aid);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на редагування користувача');
        }
    }
}