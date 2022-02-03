<?
require_once"classes/User.php";

$user = new User;

    $id = $_GET['id'];
    $user->delete_users($id);



?>