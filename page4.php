<?php 
$X = 'Jisoo';
$Y = 'Біографія';

$pages = [
    ['file'=>'index.php?id=1','title'=>'Lalisa Manoban (BlackPink)'],
    ['file'=>'page2.php?id=2','title'=>'Kai (Exo)'],
    ['file'=>'page3.php?id=3','title'=>'Jimin (BTS)'],
    ['file'=>'page4.php?id=4','title'=>'Jisoo (BlackPink)'],
    ['file'=>'page5.php?id=5','title'=>'Felix (Stray Kids)'],
];

$img = 'jisoo.jfif';
$aimg ='instagram.png';

$alink = 'https://www.instagram.com/j.m';
$maplink = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313885.42629416!2d125.23235454184936!3d35.79462444248789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356455ebcb11ba9b%3A0x91249b00ba88db4b!2z0K7QttC90LDRjyDQmtC-0YDQtdGP!5e0!3m2!1sru!2sua!4v1758469004014!5m2!1suk!2sua';

$ol_list = [
    "Сольний дебют і рекорди:
Її дебютний сингл-альбом Me (2023) продав понад 1,03 млн копій за менш ніж два дні, ставши найкраще продаваним альбомом жіночого соліста в історії чарту Circle Album Chart.",
    "Видавець власного EP «Amortage»:
У лютому 2025 року Чіsу випустила свій EP Amortage через лейбл Blissoo та Warner Records. EP складається з треків корейською та англійською і досліджує різні стадії кохання."
];


$block_6_text = [
    "Чісу (Кім Чі Су, народилася 3 січня 1995 року в Кванджу, Південна Корея) — південнокорейська співачка, акторка та учасниця світового K-pop гурту BLACKPINK. Вона приєдналася до YG Entertainment як трейні у 2011 році й дебютувала з BLACKPINK у 2016-му, швидко здобувши популярність завдяки своєму вокалу, харизмі та візуальній привабливості.",
    "У 2021–2022 роках Чісу зіграла головну роль у драмі Snowdrop, що принесла їй акторське визнання. У березні 2023 року вона здійснила сольний музичний дебют із сингл-альбомом Me, який встановив рекорди продажів серед жіночих солістів у Кореї."
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