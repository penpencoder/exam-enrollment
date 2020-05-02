<?php

require 'connection.php';

class StudentModel extends Connection{

    public function getAllStudent(){
        $sql = "SELECT * FROM `student`";
        $result = $this->connect()->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    public function getStudent($id){
        $sql = "SELECT * FROM `student` WHERE `id` = $id";
        $result = $this->connect()->query($sql);
        $obj = mysqli_fetch_object($result);

        return $obj;
    }

    public function addStudent($arr){
        $sql = "INSERT INTO `student` ";
        $sql .= "(" . implode(", ", array_keys($arr)) . ") VALUES ";
        $sql .= "('" . implode("','", array_values($arr)) . "')";

        return $this->connect()->query($sql);
        var_dump($sql);
    }

    public function updateStudent($arr, $id){
        $sql = "UPDATE `student` SET ";
        foreach($arr as $key => $val){
            $datas .= $key . " = '" . $val . "', ";
        }
        $sql .= substr($datas, 0, -2);
        $sql .= " WHERE `id` = $id";
        
        return $this->connect()->query($sql);
        var_dump($sql);
    }

    public function deleteStudent($id){
        $sql = "DELETE FROM `student` WHERE id = $id";
        return $this->connect()->query($sql);
    }

}

// $test = new Student;
// $arrayName = array(
//     'name' => "Covid Rusvi",
//     'email' => "virus@virus.com",
//     'number' => "0999388477",
//     'address' => "Manila City",
//     'subject' => "3"
// );


//$test->deleteStudent(4);