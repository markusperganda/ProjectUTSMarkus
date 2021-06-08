<?php
class data {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "utsdodi";

    function __construct(){
        $this->con= mysqli_connect($this->host,$this->username,$this->password,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function insert_user($name, $password){
        mysqli_query($this->con, "insert into user values ('','$name','$password')");
    }

    function viewuser(){
        $query = mysqli_query($this->con,"SELECT * FROM user");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function vieworder(){
        $query = mysqli_query($this->con,"SELECT * FROM pesan");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function insert_order($nama, $ukuran, $alamat){
        mysqli_query($this->con, "insert into pesan values ('','$nama', '$ukuran', '$alamat')");
    }

    function delete_user($no){
        mysqli_query($this->con, "DELETE FROM user WHERE no = '$no'");
    }

    function delete_order($no){
        mysqli_query($this->con, "DELETE FROM pesan WHERE no = '$no'");
    }

    function add_user($no){
        $query = mysqli_query($this->con,"SELECT * FROM user WHERE no = '$no'");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function add_order($no){
        $query = mysqli_query($this->con,"SELECT * FROM pesan WHERE no = '$no'");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function update_user($no, $nama, $password){
        mysqli_query($this->con, "UPDATE user SET nama='$nama', password='$password' WHERE no = '$no'");
    }

    function update_order($no, $nama, $ukuran, $alamat){
        mysqli_query($this->con, "UPDATE pesan SET nama='$nama', ukuran='$ukuran', alamat='$alamat' WHERE no = '$no'");
    }
}
?>