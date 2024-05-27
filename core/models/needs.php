<?php

require_once('core/providers/mysql_provider.php');

class Needs extends MySqlProvider{
    public function add_needs($message_needs, $phone, $name, $problem_needs){
        $sql_query = 'insert into needs (message_needs, phone, name, problem_needs)';
        $sql_query .= " values (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param('siss', $message_needs, $phone, $name, $problem_needs);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на додавання потреби');
        }
    }
    public function get_needs(){
        $needs = [];
        $sql = 'select * from needs';
        $result = $this->conn->query($sql);
        if (!$result) {
            throw new Exeption('Помилка виконання SQL-запиту на зчитування потреб');
        } elseif ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $needs[] = $row;
            }
        }
        return $needs;
    }

    public function get_article($aid){
        $sql = 'select * from needs where id=?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $aid);
        $stmt->execute();
        $result = $stmt->get_result();
        $article = $result->fetch_assoc();
        return $article;
    }

    public function edit_needs($problem_needs, $aid){
        $sql = 'update needs set ';
        $sql .= 'problem_needs=? ';
        $sql .= 'where id=?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('si', $problem_needs, $aid);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на редагування потреби');
        }
    }

    public function del_article($aid){
        $sql = 'delete from needs where id=? ';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $aid);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на видалення потреби');
        }
    }

    public function get_limit_needs($limit, $k){
        $limit_needs = [];
        $sql = 'select * from needs limit ?, ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ii', $limit, $k);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $limit_needs[] = $row;
            }
        }
        return $limit_needs;
    }
}