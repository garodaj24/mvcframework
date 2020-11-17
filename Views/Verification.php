<!DOCTYPE HTML>  
    <html>
        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <style>
                <?php include('css/styles.css');?>
            </style>
        </head>
    <body>
        <div class="login-page">
            <div class="form">
                <?php
                    echo "render email: " . $_POST['email'];
                ?>
            </div>
            <div class="form">
                <?php
                    echo "render password: " . $_POST['password'];
                ?>
            </div>
        </div>
    </body>
</html>