<?php

class User{
    public function __construct(){
       $host = 'localhost';
       $user = 'rahman';
       $password = '1234';
       $database = 'oop';
       $this->link = mysqli_connect($host, $user, $password, $database);
    }

    public function save_user($data){
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $query = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
        mysqli_query($this->link, $query);
        $message = 'Data save successful';
        return $message;
    }

    public function all_users(){
       return mysqli_query($this->link, "SELECT * FROM `users` ");
    }

    public function delete_users($id){
        mysqli_query($this->link, "DELETE FROM `users` WHERE `id`='$id'");
        header('Location:index.php');

    }

    public function update_users($id){
        return mysqli_query($this->link, "SELECT * FROM `users` WHERE `id`='$id' ");


    }

    public function update_users_save($data){
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        mysqli_query($this->link, "UPDATE users SET name='$name',email='$email' WHERE id=$id");
        header('Location:index.php');


    }
}


?>