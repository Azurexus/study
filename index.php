<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?time=<?=time() ?>">
    <title>Document</title>
</head>
<body>
    <?php 
        $array = [
                    ['item' => 'Товар1',
                    'description' => 'описание товара',
                    'price' => 200,
                    'currency' => 'RUB',
                    'discount' => false,
                    'currency_width_discount' => 100],
                    ['item' => 'Товар1',
                    'description' => 'описание товара',
                    'price' => 200,
                    'currency' => 'RUB',
                    'discount' => false,
                    'currency_width_discount' => 100],
                    ['item' => 'Товар1',
                    'description' => 'описание товара',
                    'price' => 200,
                    'currency' => 'RUB',
                    'discount' => false,
                    'currency_width_discount' => 100],
                    ['item' => 'Товар1',
                    'description' => 'описание товара',
                    'price' => 200,
                    'currency' => 'RUB',
                    'discount' => false,
                    'currency_width_discount' => 100]
                ];
    ?>
    <form action="user.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="pass" placeholder="Password">
        <input type="submit" value="отправить">
    </form>
    <div class="box">
        <div class="boxy">
            <div class="boxes"></div>
            <span>
                <!-- <?php
                
                    foreach($array as $item){
                        echo $item;
                    }
                ?> -->
            </span>
            <span>10000руб.</span>
        </div>
        <div class="boxy">
            <div class="boxes"></div>
            <span>Товар2</span>
            <span>5345руб.</span>
        </div>
        <div class="boxy">
            <div class="boxes"></div>
            <span>Товар3</span>
            <span>875руб.</span>
        </div>
        <div class="boxy">
            <div class="boxes"></div>
            <span>Товар4</span>
            <span>9855руб.</span>
        </div>
    </div>
</body>
</html>