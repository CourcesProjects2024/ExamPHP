<?php

require_once('core/providers/mysql_provider.php');

class Programs extends MySqlProvider{
    public function add_programs($name, $about, $photo, $source, $tag1, $tag2, $tag3, $publish){
        $sql_query = 'insert into programs (name, about, photo, source, tag1, tag2, tag3, publish)';
        $sql_query .= " values (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param('ssssssss', $name, $about, $photo, $source, $tag1, $tag2, $tag3, $publish);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на додавання організації');
        }
    }
    public function get_programs(){
        $programs = [];
        $sql = 'select * from programs';
        $result = $this->conn->query($sql);
        if (!$result) {
            throw new Exeption('Помилка виконання SQL-запиту на зчитування волонтерських програм');
        } elseif ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $programs[] = $row;
            }
        }
        return $programs;
    }

    public function get_article($aid){
        $sql = 'select * from programs where id=?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $aid);
        $stmt->execute();
        $result = $stmt->get_result();
        $article = $result->fetch_assoc();
        return $article;
    }

    public function edit_programs($name, $about, $photo, $source, $tag1, $tag2, $tag3, $publish, $aid){
        $sql = 'update programs set ';
        $sql .= 'name=?, about=?, photo=?, source=?, tag1=?, tag2=?, tag3=?, publish=? ';
        $sql .= 'where id=?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssssssssi', $name, $about, $photo, $source, $tag1, $tag2, $tag3, $publish, $aid);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на редагування волонтерської програми');
        }
    }

    public function del_article($aid){
        $sql = 'delete from programs where id=? ';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $aid);
        if(!$stmt->execute()){
            throw new Exeption('Помилка виконання SQL-запиту на видалення волонтерської програми');
        }
    }

    public function get_limit_programs($limit, $k){
        $limit_programs = [];
        $sql = 'select * from programs limit ?, ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ii', $limit, $k);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $limit_programs[] = $row;
            }
        }
        return $limit_programs;
    }
}