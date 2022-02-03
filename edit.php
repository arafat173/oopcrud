<?php
require_once"classes/User.php";

$user = new User;

    $id = $_GET['id'];
    $data = $user->update_users($id);
    $data = mysqli_fetch_assoc($data);


    if(isset($_POST['save_user'])){
        $user->update_users_save($_POST);
    }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <table>
        <tr>
             <input type="hidden" name="id" id="" value="<?= $data['id']?>">
            <td>
            <input type="text" name="name" id="" placeholder='Name' value="<?=  $data['name']?>">

            </td>
        </tr>
        <tr>
            <td>
            <input type="email" name="email" id="" placeholder='Email' value="<?= $data['email']?>">

            </td>
        </tr>
        
        <tr>
            <td>
            <input type="submit" value='Update User' name='save_user' id="" >

            </td>
        </tr>
    </table>
        
    </form>
 </html>