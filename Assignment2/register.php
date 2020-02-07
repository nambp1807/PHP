<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
        <div class="container">
            <div class="col-md-6">
                <h3 style="text-align: center"> Đăng kí</h3>
                <form method="post" action="postregister.php">
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder=" username" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder=" email" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="password" placeholder=" password" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="age" placeholder=" age" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="address" placeholder=" address" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="telephone" placeholder=" telephone" >
                    </div>
                    <div class="form-group">
                        <button  class="btn btn-danger" type="submit" >Register</button>
                    </div>

                </form>
            </div>
        </div>
</body>
</html>