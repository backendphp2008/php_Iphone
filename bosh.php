<?php
require('config.php');
require('lib.php');

?>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Siz kiritgan nom</th>
                        <th scope="col">Sizning no'meringiz</th>
                        <th scope="col">Siz yashaydigon joy</th>
                        <th scope="col">Nechta olishingiz</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            foreach (getAll() as $row => $value):?>
                    <tr>
                        <td scope="row">
                            <?=$value['name']?>
                        </td>
                        <td>
                            <?=$value['tel']?>
                        </td>
                        <td>
                            <?=$value['joy']?>
                        </td>
                        <td>
                            <?=$value['son']?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <form action="index.php">
                <button class="btn btn-outline-danger"
                    style="border-radius: 35px; margin: 5px 980px; width: 150px;">Tastiqlash</button>
            </form>
        </div>
    </div>
</body>

</html>
<!--CRUD - CREATE-READ-UPDATE-DELETE-->