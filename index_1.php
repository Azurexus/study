<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?time=<?= time() ?>">
    <title>Document</title>
</head>

<body>
    <?php
    $array = [
        [
            'item' => 'Товар1',
            'description' => 'описание товара',
            'price' => 200,
            'currency' => 'RUB',
            'discount' => false,
            'currency_width_discount' => 100
        ],
        [
            'item' => 'Товар1',
            'description' => 'описание товара',
            'price' => 200,
            'currency' => 'RUB',
            'discount' => false,
            'currency_width_discount' => 100
        ],
        [
            'item' => 'Товар1',
            'description' => 'описание товара',
            'price' => 500,
            'currency' => 'RUB',
            'discount' => false,
            'currency_width_discount' => 100
        ],
        [
            'item' => 'Товар1',
            'description' => 'описание товара',
            'price' => 200,
            'currency' => 'USD',
            'discount' => false,
            'currency_width_discount' => 100
        ]
    ];
    ?>
    <form action="user.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="pass" placeholder="Password">
        <input type="submit" value="отправить">
    </form>

    <div class="box">
        <?php foreach ($array as $item) : ?>
            <div class="boxy">
                <div class="boxes"></div>
                    <span>
                        <?=$item['item'] ?>
                    </span>
                <span><?=$item['price'] ?></span>
                <span><?=$item['currency'] ?></span>
                <span>Цена со скидкой:<?=$item['currency_width_discount'] ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>