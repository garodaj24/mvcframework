<div class="page">
    <div class="page-content">
        <h3>Friends List:</h3>
        <?php
            $image = "https://robohash.org/test?size=50x50";
            $target_dir = "/public/images/";
            foreach ($this->friends as $friend) {
                echo "<div class='friend-profile-details'>";
                echo "<div><a class='friends-link' href='/account/user/".$friend['id']."'>".$friend['name']."<a/></div>";
                if (isset($friend['image'])) {
                    $image = $target_dir.$friend['image'];
                }
                echo "<img class='friend-profile-image' src='".$image."' alt='Your Profile Picture' />";
                echo "</div>";
            }
        ?>
    </div>
</div>