<?php

require_once '../db.php';

class User 
{
    public $id;
    public $name;
    public $email;
    public $pass;
    public $role;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT user_id, name, email, pass, role FROM users WHERE user_id=$id";
        $result = $mysqli->query($query);

        $user_data = $result->fetch_assoc();

        $this->id = $user_data['user_id'];
        $this->name = $user_data['name'];
        $this->email = $user_data['email'];
        $this->pass = $user_data['pass'];
        $this->role = $user_data['role'];
    }

    public static function getAll()
    {
        global $mysqli;

        $query = "SELECT user_id FROM users";
        $result = $mysqli->query($query);

        $users = [];
        while ($user_data = $result->fetch_assoc()) {
            $users[] = new self($user_data['user_id']);
        }

        return $users;
    }
}

// $user = new User(1);
// var_dump($user);
// echo '<hr>';
// $users = User::getAll();
// var_dump($users);
