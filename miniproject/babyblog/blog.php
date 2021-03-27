<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Baby Blog</title>

</head>
<body>

<nav>
		<div class="container">
			<div class="logo">
				<h1>logo</h1>
			</div>

			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="addblog.php">Add Blog</a></li>
			</ul>
		</div>
	</nav>

    <div class="container">
    <?php 
        include __DIR__."/database/exe_db.php";
        $result = FindData::findOneArticle($_GET["article_id"]);
    ?>
        <div style="padding-left: 10px; padding-right: 10px;">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <?php while(($row=$result->fetch_array())!=null){  ?>

                            <h2><?php echo $row["name"] ?></h2>
                            <img class="center" src="./img/<?php echo $row["head_img"] ?>" style="max-width:500px" alt="" srcset="">
                            <br>
                            <p class="center" style="text-indent:50px;">
                                <?php echo nl2br($row["descript"]); ?>
                            </p>
                            <p><a class="btn btn-default" href="index.php" role="button">Back</a></p>
                            
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

</body>

</html>