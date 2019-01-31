<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="header_top_right">
    <form action="search.php" method="GET" class="search_form">
        <input type="text" placeholder="Text to Search.." name="search">
        <input type="submit" class="btn btn-default" value="">
    </form>
</div>
</body>
</html>
<?php
    if (isset($_GET['search']) || !empty($_GET['search'])) {
        $search = mysqli_real_escape_string($db->link, $fm->validation($_GET['search']));
    }
    else{
        header("Location:404.php");
    }
?>
<?php
    $query = "SELECT * FROM news_post WHERE title LIKE '%$search%' OR body LIKE '%$search%' OR tags LIKE '%search%'";
    $post = $db->select($query);
    if ($post) {
        while ($result = $post->fetch_assoc()) {
            echo"Database data like, $result['title']";
        }
    }
    else{
        echo "result Not found";
    }