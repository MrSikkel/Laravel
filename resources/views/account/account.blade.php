<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/account.css"> <!--Основной стиль личного кабинета-->
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">  <!--Стиль для header и footer-->
    <title>Личный кабинет</title>
</head>
<body>
@include('navbar.main')
@include('navbar.nav')
<center>
    <div id="user">
        <div id="status">
        <div id="status1">
                <div id="avatar"></div>
            <div id="qwe">
                <h2>{{Auth::user()->name}}</h2>
                <a href="#">Изменить фотографию</a>
            </div>
        </div>
        <div id="currentStatus">
        <div>
            <div class="d-flex"><h2>Статус:</h2><p>Студент</p></div>
            <div class="d-flex"><h2>Курс:</h2><p>"Лепка пельменей"</p></div>
        </div>
        <div>
            <div class="d-flex"><h2>Задания:</h2><p>Есть активные задания <a href="#">Подробнее</a></p></div>
            <div class="d-flex"><h2>Почта:</h2><p id="newletter" style="color: #0084CF;text-decoration: underline; cursor: pointer;">1 новое письмо <img src="img/down.png" width="20" id="down" height="20" style="cursor: pointer;"></p></a></div>
        </div> 
        <div id="message">
            <div class="d-flex ml mt"><h2>От:</h2><p>Lorem, ipsum dolor.</p></div>
            <div class="d-flex ml mt"><h2>Сообщение:</h2><div id="tri"><p>Lorem ipsum dolor sit amet consectetur</p></div></div>
            <div>adipisicing elit. Voluptas, consequuntur perspiciatis voluptatibus deserunt praesentium impedit, eius nemo reiciendis officiis porro maxime modi deleniti sed! Doloribus magnam sapiente perferendis reiciendis illo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa necessitatibus nulla sit ea totam a quod ab? Porro, perferendis blanditiis soluta earum excepturi, nobis temporibus rerum adipisci nihil ab autem?</div>
            <div id="panelBtn">
                <button class="btn1">Удалить</button>
                <button class="btn1">Ответить</button>
            </div>
        </div> 
    </div>
</div>
<div id="data">
    <div id="data1">
        <div id="DaTaDown">
            <h2>Оcновные данные </h2> 
            <img src="img/down.png" id="dowN" width="20" height="20" style="cursor: pointer;"></h2>
        </div>
        <div id="zxc">
        <div class="cvb">
            <p>Фамилия</p>
            <input type="text" placeholder="Ваше Фамилия">
        </div>
        
        <div class="cvb">
            <p>Имя</p>
            <input type="text" placeholder="Ваше Имя">
        </div>
        
        <div class="cvb">
            <p>Отчество</p>
            <input type="text" placeholder="Ваше Отчество">
        </div>
        <div class="btn2">
            <div class="Btn2">
                <button class="BtN2">Сохранить</button>
                <button class="BtN2">Изменить</button>
            </div>
            <img src="img/down.png"  width="20" id="down2" height="20" style="cursor: pointer;" >
        </div>
        </div>
    </div>
    <div id="contacts">
        <div id="DataDown">
            <h2>Контакты</h2> 
            <img src="img/down.png" id="DOWN" width="20" height="20" style="cursor: pointer;"></h2>
        </div>
        <div id="asd">
            <div class="bvc">
                <p>Номер телефона</p>
                <input type="text" placeholder="+7 123 456 7890">
            </div>
            <div class="bvc">
                <p>Электронная почта</p>
                <input type="text" placeholder="Ваш email">
            </div>
            <div class="btn3">
                <div class="Btn3">
                    <button class="BtN2">Сохранить</button>
                    <button class="BtN2">Изменить</button>
                </div>
                <img src="img/down.png"  width="20" id="down3" height="20" style="cursor: pointer;" >
            </div>
        </div>

    </div>
    <div id="pasport">
        <div id="DatADown">
            <h2>Паспортные данные</h2> 
            <img src="img/down.png" id="dOWN" width="20" height="20" style="cursor: pointer;"></h2>
        </div>
        <div id="iop">
            <div class="bvc">
                <p>Серия</p>
                <input type="text" placeholder="хххх">
            </div>
            <div class="bvc">
                <p>Номер</p>
                <input type="text" placeholder="хххххх">
            </div>
            <div class="bvc">
                <p>Выдан</p>
                <input type="text" placeholder="кем выдан">
            </div>
            <div class="btn4">
                <div class="Btn4">
                    <button class="BtN2">Сохранить</button>
                    <button class="BtN2">Изменить</button>
                </div>
                <img src="img/down.png"  width="20" id="down4" height="20" style="cursor: pointer;" >
            </div>
        </div>
    </div>
    <div id="karta">
        <div id="DDown">
            <h2>Реквизиты карты</h2> 
            <img src="img/down.png" id="DoWN" width="20" height="20" style="cursor: pointer;"></h2>
        </div>
        <div id="karta1">
            <div class="bvc">
                <p>Номер карты</p>
                <input type="text" placeholder="хххх хххх хххх хххх">
            </div>
            <div class="bvc">
                <p>Дата окончания действия карты</p>
                <input type="text" placeholder="хх хх">
            </div>
            <div class="bvc">
                <p>Держатель карты</p>
                <input type="text" placeholder="Имя и фамилия">
            </div>
            <div class="btn5">
                <div class="Btn5">
                    <button class="BtN2">Сохранить</button>
                    <button class="BtN2">Изменить</button>
                </div>
                <img src="img/down.png"  width="20" id="down5" height="20" style="cursor: pointer;" >
            </div>

        </div>
    </div>
    <div id="dopInfo">
        <div id="DDown1">
            <h2>Дополнительная информация</h2> 
            <img src="img/down.png" id="DoWN1" width="20" height="20" style="cursor: pointer;"></h2>
        </div>
        <div id="dopInfo1">
            <div class="bvc">
                <p>Lorem.</p>
                <input type="text" placeholder="хххх хххх хххх хххх">
            </div>
            <div class="bvc">
                <p>Lorem, ipsum.</p>
                <input type="text" placeholder="хх хх">
            </div>
            <div class="bvc">
                <p>Lorem, ipsum.</p>
                <input type="text" placeholder="Имя и фамилия">
            </div>
            <div class="btn6">
                <div class="Btn6">
                    <button class="BtN2">Сохранить</button>
                    <button class="BtN2">Изменить</button>
                </div>
                <img src="img/down.png"  width="20" id="down6" height="20" style="cursor: pointer;" >
            </div>
    </div>
</div>
</div>
    </div>
</center>
@include('footer.main')
<script src="js/jquery-3.4.1.js"></script>
<script src="js/account.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>