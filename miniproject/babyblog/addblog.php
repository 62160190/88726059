<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <title>blog</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> 
    <div class="container">

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

    <?php
    include __DIR__."/database/exe_db.php";
    ?>


    <form id="frmAddBlog" action="" method="post" enctype="multipart/form-data">
        <div style="padding-left: 10px; padding-right: 10px;">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                            <br>
                            <div class="mb-3">
                                <label class="form-label">Heading</label>
                                <input type="text" class="form-control" id="head" name="head" value="">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Select a photo from your computer</label>
                                <input class="form-control" type="file" id="fileImg" name="fileImg" value="">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea class="form-control" id="editor1" name="editor1" rows="3"></textarea>
                            </div>
                            <br>
                            <button class="btn btn-Dark" onclick="return getText()">Add</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

        <hr>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>

        var d = document;
        function getText(){

            if(d.getElementById('head').value == "") { alert("โปรดเพิ่มหัวเรื่อง"); return false; }
            if(d.getElementById('fileImg').value == "") { alert("โปรดเพิ่มรูปภาพ"); return false; } 
            if(d.getElementById('editor1').value == "") { alert("โปรดกรอกข้อมูลบทความ"); return false; } 
            
            $("#frmAddBlog").submit(function(event) {
                event.preventDefault();

                var formData = new FormData();
                var file = $('#fileImg')[0].files;

                formData.append('file',file[0]);
                formData.append('head',d.getElementById('head').value);
                formData.append('editor1',d.getElementById('editor1').value);
                
                $.ajax({
                    type: "POST",
                    url: "save_blog.php",
                    data: formData,
                    processData: false, 
                    contentType: false, 
                    success: function(data){

                        if(data=="add_success"){
                            alert("success!");
                            window.location.reload();
                        }else{
                            alert("failed.");
                        }

                    }
                });
    
            });

        }

    </script>
</body>
</html>

