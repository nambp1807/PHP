
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="container">
            <div class="col-md-6">
                <form method="post" action="?route=postlogin">
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="user name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="password" placeholder="password">
                    </div>
                    <?php if(isset($_SESSION['login_err'])):?>
                    <p style="color: red"><?php echo $_SESSION['login_err']?></p>
                    <?php $_SESSION['login_err']=null; endif;?>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit" name="user">Login</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>