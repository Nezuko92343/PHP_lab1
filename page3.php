<?php 
$X = 'Jimin (BTS)';
$Y = 'Біографія';

$pages = [
    ['file'=>'index.php?id=1','title'=>'Lalisa Manoban (BlackPink)'],
    ['file'=>'page2.php?id=2','title'=>'Kai (Exo)'],
    ['file'=>'page3.php?id=3','title'=>'Jimin (BTS)'],
    ['file'=>'page4.php?id=4','title'=>'Jisoo (BlackPink)'],
    ['file'=>'page5.php?id=5','title'=>'Felix (Stray Kids)'],
];

$img = 'jimin.jfif';
$aimg ='instagram.png';

$alink = 'https://www.instagram.com/j.m';
$maplink = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313885.42629416!2d125.23235454184936!3d35.79462444248789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356455ebcb11ba9b%3A0x91249b00ba88db4b!2z0K7QttC90LDRjyDQmtC-0YDQtdGP!5e0!3m2!1sru!2sua!4v1758469004014!5m2!1suk!2sua';

$ol_list = [
    "Освіта та танці:
Чімін навчався у Busan High School of Arts, де спеціалізувався на сучасному танці (modern dance). Його викладачі помітили талант і підштовхнули до участі в прослуховуваннях, що врешті привело до підписання контракту з Big Hit Entertainment.",
    "Сольні треки в складі гурту
В рамках BTS він виконав кілька сольних пісень: “Lie” (2016), “Serendipity” (2017) та “Filter” (2020). Вони досягали високих позицій у чартах, і “Filter” встановив рекорд за кількістю стрімів серед корейських пісень у перші 24 години після виходу."
];


$block_6_text = [
    "
Чімін (Пак Чі Мін, народився 13 жовтня 1995 року в Пусані, Південна Корея) — співак, танцюрист та автор пісень, відомий як один із вокалістів і головних танцюристів гурту BTS. Він навчався у Busan High School of Arts, де спеціалізувався на сучасному танці, що згодом визначило його сценічний стиль.",
    "У складі BTS дебютував у 2013 році та здобув світове визнання завдяки потужній харизмі, емоційному вокалу й унікальним сольним трекам, серед яких “Lie”, “Serendipity” та “Filter”. У 2023 році він розпочав успішну сольну кар’єру, випустивши альбом Face, а його сингл Like Crazy став першим корейським сольним треком, що очолив Billboard Hot 100."
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