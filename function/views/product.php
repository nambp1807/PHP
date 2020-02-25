<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <h1>Danh sách sản phẩm</h1>
        <a href="?route=login">Thêm sản phẩm</a>
        <?php
           $arr= [
               [
                   "name"=>"Iphone 6",
                   "price"=>6000000,
                   "qty"=>6,
                   "desc"=>"het hang"
               ],
               [
                   "name"=>"Iphone 7",
                   "price"=>7000000,
                   "qty"=>7,
                   "desc"=>"hang moi"
               ],
               [
                   "name"=>"Iphone 8",
                   "price"=>8000000,
                   "qty"=>8,
                   "desc"=>"abc"
               ],
               [
                   "name"=>"Iphone X",
                   "price"=>1100000,
                   "qty"=>10,
                   "desc"=>"het hang"
               ],
               [
                   "name"=>"Iphone 11",
                   "price"=>9000000,
                   "qty"=>11,
                   "desc"=>"aaaaaa"
               ],
               [
                   "name"=>"Samsung j5",
                   "price"=>11000000,
                   "qty"=>6,
                   "desc"=>"abs"
               ],
               [
                   "name"=>"Samsung j7",
                   "price"=>5000000,
                   "qty"=>6,
                   "desc"=>"hang moi"
               ],
               [
                   "name"=>"note 9",
                   "price"=>9000000,
                   "qty"=>6,
                   "desc"=>"abc"
               ],
               [
                   "name"=>"note 10",
                   "price"=>10000000,
                   "qty"=>7,
                   "desc"=>"het hang"
               ],
               [
                   "name"=>"Samsung A8",
                   "price"=>8000000,
                   "qty"=>8,
                   "desc"=>"ban chay"
               ],
           ]
        ?>
        <table class="table" >
            <tr>
                <th>name</th>
                <th>price</th>
                <th>qty</th>
                <th>desc</th>
            </tr>

            <?php foreach ($arr as $a):?>
                <tr>
                    <th><?php echo $a["name"];?></th>
                    <th><?php echo $a["price"];?></th>
                    <th><?php echo $a["qty"];?></th>
                    <th><?php echo $a["desc"];?></th>
                </tr>
            <?php endforeach;?>
        </table>
</body>
</html>