<?php

require 'connection.php';


class SubjectModel extends Connection{

    public function getAllSubject(){
        $sql = "SELECT * FROM `subject`";
        $result = $this->connect()->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    public function getSubject($id){
        $sql = "SELECT * FROM `subject` WHERE `subject_id` = $id";
        $result = $this->connect()->query($sql);
        $obj = mysqli_fetch_object($result);
        return $obj;
    }

    public function addSubject($arr){
        $sql = "INSERT INTO `subject` ";
        $sql .= "(" . implode(", ", array_keys($arr)) . ") VALUES ";
        $sql .= "('" . implode("', '", array_values($arr)) . "')";
        
        var_dump($sql);
        return $this->connect()->query($sql);
        
    }

    public function updateSubject($arr, $id){
        $sql = "UPDATE `subject` SET ";
        foreach($arr as $key => $val){
            $datas .= $key . " = '" . $val . "', ";
        }
        $sql .= substr($datas, 0, -2);
        $sql .= " WHERE `subject_id` = $id";
        
        var_dump($sql);
        //return $this->connect()->query($sql);
    }

    public function deleteSubject($id){
        $sql = "DELETE FROM `subject` WHERE `subject_id` = $id";
        var_dump($sql);
        //return $this->connect()->query($sql);
    }
}
