<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Baby Blog</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
			<img src="img/banner.jpg" alt="">
		</div>
	</nav>
	
	<section class="textbox">
		<div class="container2">
			<article>
				<span>BaBy Blog</span>
				<h1>Create a unique and beautiful blog. It’s easy and free.</h1>
				<p>Save the moments that matter. Blogger lets you safely store thousands of posts, photos,</p>
			</article>
		</div>
	</section>

	<?php
    include __DIR__."/database/exe_db.php";
    ?>

	<section class="item">
		<div class="container2">
		<?php 
            $result = FindData::findAllArticle();
            while(($row=$result->fetch_array())!=null){ ?>
						<div class="box-item">
				<img src="./img/<?php echo $row["head_img"] ?>">
				<span>lifestyle</span>
				<h1><?php echo $row["name"]; ?></h1>
				<p><?php echo nl2br(substr($row["descript"], 0, 500))."...." ?></p>
				<p><a class="btn btn-default" href="blog.php?article_id=<?php echo $row["id"]; ?>" role="button">Read More</a></p>
			</div>
        <?php } ?>
		</div>
	</section>

	<div class="clear"></div>
	
	<section class="news">
		<h1>62160190@go.buu.ac.th</h1>
	</section>
