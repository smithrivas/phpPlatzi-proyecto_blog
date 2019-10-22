<?php
$result = false;

if (!empty($_POST)) {
    $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);
}
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
                <h2>New posts</h2>
                <p><a class="btn btn-outline-primary btn-sm" href="posts.php">Back</a></p>
                <?php if ($result) { ?>
                    <div class="alert alert-success">El post a sido agregado exitosamente.</div>
                <?php } ?>

                <form action="insert-post.php" method="post">
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input class="form-control" type="text" name="title" id="inputTitle">
                </div>
                    <textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
                    <br/>
                    <input class="btn btn-info btn-sm" type="submit" value="Save">
                </form>
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