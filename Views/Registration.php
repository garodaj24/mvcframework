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
                <form method="POST" action="/auth/registration" class="register-form">
                    <input type="text" name="name" placeholder="name"/>
                    <input type="text" name="email" placeholder="email address"/>
                    <input type="text" name="username" placeholder="username"/>
                    <input type="password" name="password" placeholder="password"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="/auth/login">Sign In</a></p>
                </form>
            </div>
        </div>
    </body>
</html>