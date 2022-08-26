<!-- <?php
require('config.php');
require('lib.php');

if(isset($_GET['ok'])) {
    websayt();
}
?> -->
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
                            <input class="form-control me-2" type="search" placeholder="Qidiruv..." aria-label="Search"
                                style="border-radius: 35px;">
                            <button class="btn btn-outline-success" type="submit"
                                style="border-radius: 25px;">Ok</button>
                        </form>
                        <div class="dropdown">
                            <a href=""><button class="btn btn_3" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user-o" aria-hidden="true"></i> Mening profilim
                                </button>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="haqimizda.php">Profilm</a></li>
                                <li><a class="dropdown-item" href="about.php">Sevimlilarim</a></li>
                                <li><a class="dropdown-item" href="aloqa.php">Aloqa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index.php"><img src="img/o'zbek3.jpg" alt=""
                                            style="width: 20px;height: 20px;border-radius: 100%;"> O'zbek</a></li>
                                <li><a class="dropdown-item" href="qo'shimcha.php"><img src="img/rus2.jpg" alt=""
                                            style="width: 20px;height: 20px;border-radius: 100%;"> Rus</a></li>
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
                    <h4>$ 130</h4>
                    <div style="color: orange;">
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                            class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="img/iphone.jpg" class="img-thumbnail" width="500px" ; height="400px" ;>
                </div>
                <div class="col">
                    <ul class="card" style="width: 25rem; height: 31rem; padding: 15px;">
                        <div class="card-body">
                            <strong>
                                <h4 class="card-title form-floating mb-3">Buyurtma berish</h4>
                            </strong>
                            <p class="card-text form-floating mb-3">maxsulot narxi: $130 ming so'm</p>
                            <p class="card-text">Chegirma turi: 2 chi mahsulotdan boshlab
                                har bir mahsulot uchun <strong>0 so'm chegirma</strong></p>
                        </div>
                        <form action="">

                            <ul class="list-group list-group-flush">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="floatingPassword" placeholder="text"
                                        style="border-radius: 35px;" required name="login">
                                    <label for="floatingPassword">Ismingiz</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="number" class="form-control" id="floatingPassword" placeholder="number"
                                        style="border-radius: 35px;" required name="telefon">
                                    <label for="floatingPassword">Telefon raqamingiz</label>
                                </div>
                                <select class="form-floating mb-3 form-control" style="border-radius: 35px;"
                                    name="joylar">
                                    <option value="0">Hududingizni tanlang...</option>
                                    <option>Andijon</option>
                                    <option>Farg'ona</option>
                                    <option>Namangan</option>
                                    <option>Toshkent</option>
                                    <option>Samarqand</option>
                                    <option>Buxoro</option>
                                    <option>Xorazm</option>
                                    <option>Termiz</option>
                                    <option>Surxondaryo</option>
                                    <option>Qashqadaryo</option>
                                </select>
                                <select class="form-floating mb-2 form-control" style="border-radius: 35px;"
                                    name="sonlar">
                                    <option value="0">nechta olishishingizni tallang</option>
                                    <option>1 dona</option>
                                    <option>2 dnoa</option>
                                    <option>3 dona</option>
                                    <option>4 dona</option>
                                    <option>5 dona</option>
                                    <option>6 dona</option>
                                    <option>7 dona</option>
                                    <option>8 dona</option>
                                    <option>9 dona</option>
                                    <option>10 dona</option>
                                </select>
                                <div class="col d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-outline-danger" name="ok" id="ok"
                                        style="border-radius: 35px;">Buyurtma berish</button>
                                </div>
                            </ul>
                    </ul>

                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col" style="margin: 0 100px;">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Batafsil ma'lumot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="delete.php">Xaridorlar fikrlari</a>
                        </li>
                    </ul>
                    <div style="margin: 30px 60px;">
                        🌐 Bir paytning o'zida:👇<br>
                        + xabar yozish ,<br>
                        + qo'ng'iroq qilish,<br>
                        + ob-havoni aniqlash, <br>
                        + qon bosimini o'lchash, <br>
                        + fitness mashg'ulotlari, <br>
                        + yurak urish pulslari, <br>
                        + 18 ta sefirblat kabi funksiyalarini<br>
                        jamlagan va eng muhimi har qanday <br>
                        sharoitda ham, hattoki SUVDA ham<br>
                        ishlashda davom etadigan ushbu <br>
                        Iphone ning egasi bo'lishni <br>
                        xohlaysizmi?<br><br>
                        📨 Unday bo'lsa shoshiling! chunki<br>
                        bu imkoniyat aynan siz uchun! <br> <br>
                        📦 Hoziroq buyurtma bering!<br><br>
                        💰Narxi: $130<br><br>
                        🚚 Oʻzbekiston boʻylab yetkazib<br>
                        berish mutlaqo bepul!
                    </div>
                </div>
        </footer>
    </div>
    </div>

</body>

</html>