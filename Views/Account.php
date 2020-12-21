<!DOCTYPE HTML>  
    <html>
        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <style>
                <?php include('css/styles.css');?>
            </style>
        </head>
    <body>
        <div class="account-page">
            <div class="account-page-content">
                <div class="profile-details">
                    <?php
                        $image = "https://robohash.org/test?size=200x200";
                        $target_dir = "Views/images/";
                        if (isset($this->user['image'])) {
                            $image = $target_dir.$this->user['image'];
                        }
                        if (isset($_POST['Submit'])) {
                            $target_file = $_SERVER['DOCUMENT_ROOT'].$target_dir.basename($_FILES["image"]["name"]);
                            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                        }
                        echo "<img class='profile-image' src='".$image."' />";
                    ?>
                    <div class="profile-details-names">
                        <?php
                            echo "<div>name: ".$this->user['name']."</div>";
                        ?>
                        <?php
                            echo "<div>username: ".$this->user['username']."</div>";
                        ?>
                    </div>
                </div>
                <form action="/account" enctype="multipart/form-data" method="post">
                    Select image to upload:<br/><br/>
                    <input type="file" name="image"><br/><br/>
                    <input type="submit" value="Upload" name="Submit">
                </form>
            </div>
        </div>
    </body>
</html>