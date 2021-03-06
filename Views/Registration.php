<!DOCTYPE HTML>  
    <html>
        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <style>
                <?php include('public/css/styles.css');?>
            </style>
        </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form method="POST" action="/auth/registration" class="register-form">
                    <input type="text" name="name" placeholder="name"/>
                    <?php 
                        echo "<div class=login-error>".$this->nameError."</div>";
                    ?>
                    <input type="text" name="email" placeholder="email address"/>
                    <?php 
                        echo "<div class=login-error>".$this->emailError."</div>";
                    ?>
                    <input type="text" name="username" placeholder="username"/>
                    <?php 
                        echo "<div class=login-error>".$this->usernameError."</div>";
                    ?>
                    <input type="password" name="password" placeholder="password"/>
                    <?php 
                        echo "<div class=login-error>".$this->passwordError."</div>";
                    ?>
                    <?php 
                        echo "<div class=login-error>".$this->registrationError."</div>";
                    ?>
                    <button>create</button>
                    <p class="message">Already registered? <a href="/auth/login">Sign In</a></p>
                </form>
            </div>
        </div>
    </body>
</html>