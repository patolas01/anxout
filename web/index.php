<!DOCTYPE html>
<html>

<head>
    <title>Anxout</title>
    <?php
    include 'db/init.html';
    include 'db/db-start.php';
    ?>
</head>

<!-- <body onload="postsGen();"> -->

<body>

    <div class="container">

        <?php include 'db/header.html'; ?>

        <div class="box middle-box">
            <div id="title">
                <!--img id="logo" src="img/anxtyLogo.png" alt="logo"-->
                <h1>Anxout</h1>
                <h3>You can do whatever you want, nobody's gonna judge you</h3>
            </div>


            <!--Post Template-->
            <?php

            $sql = "SELECT posts.*, users.username FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.post_id DESC";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<article class="postArticle" id="i' . $row['user_id'] . '"> <div class="userInfo"><img class="post UserPic" src="db/img/default_user.png" alt="User Profile Picture"> <p>@' . $row['username'] . '</p> <div class="react"><div class="reactLike" id="i' . $row['user_id'] . '" onclick="likePost(' . $row['user_id'] . ');"><img src="https://images.emojiterra.com/twitter/v14.0/512px/1f90d.png" alt="Like Button"></div></div> </div> <h4>' . $row['title'] . '</h4> <p class="descPost">' . $row['message'] . '</p> </article>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>


        </div>

        <?php include 'db/footer.html'; ?>
    </div>
</body>

</html>