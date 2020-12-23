<div class="page">
    <div class="page-content">
        <div class="profile-details">
            <?php
                $image = "https://robohash.org/test?size=200x200";
                $target_dir = "/public/images/";
                if (isset($this->user['image'])) {
                    $image = $target_dir.$this->user['image'];
                }
                echo "<img class='profile-image' src='".$image."' alt='Your Profile Picture' />";
            ?>
            <div class="profile-details-names">
                <?php
                    echo "<div>name: ".$this->user['name']."</div>";
                    echo "<div>username: ".$this->user['username']."</div>";
                ?>
            </div>
        </div>
        <form action="/account" enctype="multipart/form-data" method="post">
            Select image to upload:<br/><br/>
            <input type="file" name="image"><br/><br/>
            <input type="submit" value="Upload" name="Submit">
        </form>
        <?php 
            echo "<div class=login-error>".$this->uploadError."</div>";
        ?>
    </div>
</div>