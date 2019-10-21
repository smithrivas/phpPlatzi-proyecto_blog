<?php
include_once '../config.php';
$query = $pdo->prepare("SELECT * FROM blog_posts ORDER BY id DESC");
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog Title</h1>
            </div>
        </div>        
        <div class="row">            
            <div class="col-md-8">
            <h2>Posts</h2>
            <p><a class="btn btn-primary btn-sm" href="insert-post.php">New post</a></p>
                <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($blogPosts as $blogPost) { ?>
                <tr>
                    <td><?=$blogPost['title'];?></td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php } ?>
                </table>            
            </div>    
            <div class="col-md-4">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <footer>
                This is a footer<br/>
                <a href="admin/index.php">Admin panel</a>
            </footer>
            </div>            
        </div>
    </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>    
</html>