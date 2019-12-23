<?php
echo "<a href=\"./\">BACK</a>";
echo "<h1>13. REVIEW</h1>";
/* EXERCISE 1 :
1. Create an Array about data of authors like :
$authors = [
[
"name" => "Lorem",
"age" => "18",
"posts_quantity" => "5",
],
[
"name" => "Lorem",
"age" => "18",
"post_quantity" => "5",
],
];
+ At least 5 authors.
2. Display it into website depends on Bootstrap 4 Table, in 4 column : Name, Age, Post Counting, Salary.
3. Make sure, if posts_quantity > 10, show at Salary Column = posts_quantity * 10000, otherwise, display 0.
 */
/* 
 * Write a program to calculate the total price of your phone purchase . You will keep purchasing phones(hint : loop !) until you run out of money in your bank account . 
 * You 'll also buy accessories for each phone as long as your purchase amount is below your mental spending threshold.
 * 
 * After you' ve calculated your purchase amount, add in the tax, then print out the calculated purchase amount, properly formatted .
 * 
 * Finally, check the amount against your bank account balance to see if you can afford it or not .
 * 
 * You should set up some constants for the "tax rate," "phone price," "accessory price," and "spending threshold,"  as well as a variable for your "bank account balance." "
 * 
 * You should define functions for calculating the tax and for formatting the price with a " $ " and rounding to two decimal places.
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

//EX1:
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
        td,
        th {
            border: 1px solid black;
        }
        </style>
    </head>

    <body>
        <?php
        $authors = [
            [
                "name" => "Lorem",
                "age" => "18",
                "posts_quantity" => "5",
            ],
            [
                "name" => "Mai",
                "age" => "21",
                "posts_quantity" => "15",
            ],
            [
                "name" => "Nam",
                "age" => "30",
                "posts_quantity" => "10",
            ],
            [
                "name" => "Hung",
                "age" => "29",
                "posts_quantity" => "19",
            ],
            [
                "name" => "Lan",
                "age" => "20",
                "posts_quantity" => "11",
            ],
        ];
        ?>
        <table>
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>Counting</th>
                <th>Salary</th>
            </thead>
            <tbody>
                <?php
                for($i=0; $i<count($authors); $i++){
                    ?>
                    <tr>
                    <td>
                    <?php
                        echo $authors[$i]["name"];
                        ?>
                    </td>
                    <td>
                    <?php
                        echo $authors[$i]["age"];
                        ?>
                    </td>
                    <td> 
                    <?php
                        echo $authors[$i]["posts_quantity"];
                    ?>
                    </td>
                    <td>
                    <?php
                        if($authors[$i]["posts_quantity"] > 10){
                            echo $authors[$i]["posts_quantity"]*10000;
                        } else {
                            echo 0;
                        };
                    ?>
                    </td>
                <?php
                }
                ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>
<?php
//EX 2:

?>