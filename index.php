<?php
    require_once"classes/User.php";

    $user = new User;

    if(isset($_POST['save_user'])){
       $message = $user->save_user($_POST);
    }

    $all_users = $user->all_users();
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
        <input type="text" name="name" id="" placeholder='Name'>
        <input type="email" name="email" id="" placeholder='Email'>
        <input type="passowrd" name="password" id="" placeholder='Password'>
        <input type="submit" value='Save User' name="save_user" id="">
        
    </form>
    <?php if(isset($message))
    {
    ?>
    <h3><?php echo $message?></h3>
    <?php
    }
    ?>
    <hr>
    <table border>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
            while($row = mysqli_fetch_assoc($all_users))
            {
        ?>
        <tr>
            <td> <?= ucwords($row['name']) ?></td>
            <td><?=  $row['email'] ?></td>
            <td>
                <a href="edit.php?id=<?=$row['id']?>">Edit</a>
                <a href="delete.php?id=<?= $row['id']?>">Delete</a>
            </td>
        </tr>
        <?php
            }
        ?>

    </table>
</body>
</html>