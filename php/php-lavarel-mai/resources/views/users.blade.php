<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
            foreach ($users as $user){
            ?>
            <tr>
                <td> <?php echo $user->id ?></td>
                <td> <?php echo $user->name ?></td>
                <td> <?php echo $user->email ?></td> 
            </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>