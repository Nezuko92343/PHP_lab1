<?php 
$X = 'Kai';
$Y = 'Біографія';

$pages = [
    ['file'=>'index.php?id=1','title'=>'Lalisa Manoban (BlackPink)'],
    ['file'=>'page2.php?id=2','title'=>'Kai (Exo)'],
    ['file'=>'page3.php?id=3','title'=>'Jimin (BTS)'],
    ['file'=>'page4.php?id=4','title'=>'Jisoo (BlackPink)'],
    ['file'=>'page5.php?id=5','title'=>'Felix (Stray Kids)'],
];

$img = 'kai.jfif';
$aimg ='instagram.png';

$alink = 'https://www.instagram.com/zkdlin/';
$maplink = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313885.42629416!2d125.23235454184936!3d35.79462444248789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356455ebcb11ba9b%3A0x91249b00ba88db4b!2z0K7QttC90LDRjyDQmtC-0YDQtdGP!5e0!3m2!1sru!2sua!4v1758469004014!5m2!1suk!2sua';

$ol_list = [
    "Майстер танцю: Кай почав займатися балетом у третьому класі, а джазовим танцем — у четвертому. Його батько підтримував його захоплення танцями, що стало важливим етапом у його житті.",
    "Сольна кар'єра: У листопаді 2020 року Кай дебютував як сольний виконавець з мініальбомом KAI, який став першим сольним альбомом корейського артиста, що очолив чати iTunes у 87 країнах."
];


$block_6_text = [
    "Кай (справжнє ім’я Кім Чон Ін, народився 14 січня 1994 року в Пусані, Південна Корея) — південнокорейський співак, танцюрист та актор, найбільш відомий як учасник популярного бой-бенду EXO. Він розпочав займатися танцями з дитинства, освоїв балет і джазовий танець, що пізніше визначило його яскравий сценічний стиль.",
    "Кай дебютував у складі EXO в 2012 році, здобувши популярність завдяки потужній харизмі та танцювальним здібностям. У 2020 році він дебютував як сольний артист із мініальбомом KAI, який очолив чарти iTunes у багатьох країнах."
];


?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>

<header class="header">
    <h1>
        <?= htmlspecialchars($X) ?>
    </h1>
</header>

<div class="container">
    <div class="container-wrapper">
       <h4>Меню</h4>
    <ul>
        <?php foreach($pages as $i => $p): ?>
            <?php $href = $p['file']; $label = $p['title']; ?>
            <li>
                <a href="<?= $href ?>" class="<?= ($_GET['id']??1)==($i+1) ? 'active' : '' ?>">
                    <?= htmlspecialchars($label) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
    <div class="container-blocks">
        <div class="block-3-4-5">
            <div class="block-3">
            <img src="<?= htmlspecialchars($img) ?>" alt="Lalisa Manoban" class="photo">
            </div>
            <div class="block-4-5">
            <div class="block-4">
                <iframe 
    src="<?= htmlspecialchars($maplink) ?>" 
    width ="100%"
    height="100%"
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

            </div>
            <div class="block-5">
                <h2>Цікаві факти:</h2>
    <ol>
        <?php foreach($ol_list as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ol>
    <a href=" <?= htmlspecialchars($alink) ?>"><img class="aimg" src=" <?= htmlspecialchars($aimg) ?>" alt="Instagram"></a>
            </div>
            </div>
        </div>
        
        <div class="block-6">
            <?= htmlspecialchars($Y) ?>
            <?php foreach($block_6_text as $paragraph): ?>
        <p><?= $paragraph ?></p>
    <?php endforeach; ?>
    
</div>

        </div> 
    </div>
</div>
</body>
</html>