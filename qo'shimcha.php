<?php
require('config.php');
require('lib.php');

if(isset($_GET['ok'])) {
    websayt();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar">
                    <div class="container-fluid">
                        <a style="font-family: Harlow Solid Italic;" class="navbar-brand"><strong>100k.uz</strong></a>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Поиск ..." aria-label="Search"
                                style="border-radius: 35px;">
                            <button class="btn btn-outline-success" type="submit"
                                style="border-radius: 25px;">Ok</button>
                        </form>
                        <div class="dropdown">
                            <a href=""><button class="btn btn_3" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user-o" aria-hidden="true"></i> Мой профайл
                                </button>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="haqimizda.php">птофилим</a></li>
                                <li><a class="dropdown-item" href="about.php">Мои любимые</a></li>
                                <li><a class="dropdown-item" href="aloqa.php">коммуникация</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php"><img src="o'zbek3.jpg" alt=""
                                            style="width: 20px;height: 20px;border-radius: 100%;"> узбекский</a></li>
                                <li><a class="dropdown-item" href="qo'shimcha.php"><img src="rus2.jpg" alt=""
                                            style="width: 20px;height: 20px;border-radius: 100%;"> Русь</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid navbar-light bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Iphone 13 pro max</h2>
                </div>
                <div class="col">
                    <h5>$ 130</h5>
                    <div style="color: orange;">
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                            class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="iphone.jpg" class="img-thumbnail" width="500px" ; height="400px" ;>

                </div>
                <div class="col">
                    <ul class="card" style="width: 25rem; height: 31rem; padding: 15px;">
                        <div class="card-body">
                            <strong>
                                <h4 class="card-title form-floating mb-3">Заказ</h4>
                            </strong>
                            <p class="card-text form-floating mb-3">Цена товара: $130 тыс.сум</p>
                            <p class="card-text">Тип скидки: на каждый товар,
                                начиная со 2-го товара <strong>0 сум скидка</strong></p>
                        </div>
                        <form action="">

                            <ul class="list-group list-group-flush">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="text"
                                        style="border-radius: 35px;" required name="login">
                                    <label for="floatingPassword">Ваше имя</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="number" class="form-control" id="floatingPassword" placeholder="number"
                                        style="border-radius: 35px;" required name="telefon">
                                    <label for="floatingPassword">Ваш номер телефона</label>
                                </div>
                                <select class="form-floating mb-2 form-control" style="border-radius: 35px;"
                                    name="joylar">
                                    <option value="0">Выберите свой регион...</option>
                                    <option>Андижан</option>
                                    <option>Фергана</option>
                                    <option>Наманган</option>
                                    <option>Ташкент</option>
                                    <option>Самарканд</option>
                                    <option>Бухара</option>
                                    <option>Хорезм</option>
                                    <option>Термез</option>
                                    <option>Сурхандарьинская область</option>
                                    <option>Кашкадарья</option>
                                </select>
                                <select class="form-floating mb-2 form-control" style="border-radius: 35px;"
                                    name="sonlar">
                                    <option value="0">выберите, сколько вы получите...</option>
                                    <option>1 дона</option>
                                    <option>2 дона</option>
                                    <option>3 дона</option>
                                    <option>4 дона</option>
                                    <option>5 дона</option>
                                    <option>6 дона</option>
                                    <option>7 дона</option>
                                    <option>8 дона</option>
                                    <option>9 дона</option>
                                    <option>10 дона</option>
                                </select>
                                <div class="col d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-outline-danger" name="ok" id="ok"
                                        style="border-radius: 35px;">Заказ</button>
                                </div>
                            </ul>
                    </ul>

                    </form>
                </div>
            </div>
            <footer>
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="qo'shimcha.php">Подробнее</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lib2.php">Отзывы покупателей</a>
                            </li>


                        </ul>
                        <div style="margin: 30px 60px;">

                            🌐 В какой-то момент:👇<br>
                            + написание сообщения, <br>
                            + вызов,<br>
                            + обнаружение погоды, <br>
                            + измерение артериального давления, <br>
                            + занятия фитнесом, <br>
                            + пульсирующий пульс, <br>
                            + 18 функций, таких как sephirblat<br>
                            суммированный, а главное любой <br>
                            даже в условиях, даже в воде<br>
                            этот <br>
                            который продолжает работать
                            Как стать обладателем умных Iphone <br>
                            хотите?фото: <br><br>
                            📨 Тогда поторопитесь! потому что<br>
                            эта возможность именно для вас! фото: <br>
                            📦 Закажите прямо сейчас!фото: <br><br>
                            💰Стоимость: $130<br><br>
                            🚚Доставка по всему Узбекистану<br>
                            дарить абсолютно бесплатно!
                        </div>
                    </div>
            </footer>

        </div>
    </div>

</body>

</html>