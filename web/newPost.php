<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Post</title>
    <?php include 'db/init.html'; ?>
</head>

<?php
// Include your database connection code here
// $servername, $username, $password, $dbname should be defined in your connection file
include 'db/db-start.php';
// Sample connection code (replace with your actual connection code)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $postContent = $_POST["post_content"];

    // Insert the post into the database
    $sql = "INSERT INTO posts (user_id, message) VALUES (1, '$postContent')"; // Assuming user_id 1 for simplicity

    // if ($conn->query($sql) === TRUE) {
    //     echo "Post created successfully!";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}

// Close the database connection
$conn->close();
?>

<body>
    <div class="container">
        <?php include 'db/header.html'; ?>
        <div class="box middle-box">
            <div class="post-form">
                <h2>New Post</h2>

                <!-- Form for creating a new post -->
                <form method="post" class="new-post form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="text" name="post-title" id="post-title">

                    <input type="submit" value="Create Post">
                </form>
            </div>

        </div>
        <?php include 'db/footer.html'; ?>
    </div>
</body>

</html>