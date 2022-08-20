<?php

    require '../asset/controller/conection.php';
    require '../asset/controller/controller.php';
    
    if($_SESSION['user']!= 'tananthanh'){
        header("location:login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ::-webkit-file-upload-button {
  background: white;
  
  padding: 1em;
}
    input{
        margin: 50px;
    }
    @import url(https://fonts.googleapis.com/css?family=Roboto:700,300);
body {
		background-color: #333;
}

.sign-up-modal p,
.sign-up-modal .form-checkbox label {
		font-size: 1em;
		font-weight: 300;
}

.sign-up-modal .form-checkbox label {
		cursor: pointer;
}

.logo {
		fill: #FEFEFE;
}

.logo-container {
		width: 100%;
		margin-top: 50px;
		position: relative;
		text-align: center;
}

.sign-up-modal {
		font-family: "Roboto", arial, sans-serif;
		color: #fefefe;
		border-style: solid;
		border-width: 10px;
		border-color: rgb(254, 254, 254);
		border-radius: 10px 10px 10px 10px;
		background-image: -moz-linear-gradient( -90deg, rgb(236, 111, 102) 0%, rgb(243, 161, 131) 100%);
		background-image: -webkit-linear-gradient( -90deg, rgb(236, 111, 102) 0%, rgb(243, 161, 131) 100%);
		background-image: -ms-linear-gradient( -90deg, rgb(236, 111, 102) 0%, rgb(243, 161, 131) 100%);
		width: 90%;
		min-width: 400px;
		max-width: 700px;
		margin: 0 auto;
		padding: 25px;
}

.sign-up-modal form {
		margin: 0 auto;
		text-align: center;
}

.sign-up-modal input::-webkit-input-placeholder {
		color: #fefefe;
		opacity: 1;
}

.sign-up-modal input:focus::-webkit-input-placeholder {
		color: #111;
		opacity: .5;
		transition: all 0.3s ease;
}

.sign-up-modal .input-container {
		margin: 10px;
}

.sign-up-modal input[type="email"],
.sign-up-modal input[type="text"],
.sign-up-modal input[type="password"],
.sign-up-modal input[type="checkbox"]:focus,
.sign-up-modal input[type="submit"]:focus {
		outline: 0;
}

.sign-up-modal input[type="email"],
.sign-up-modal input[type="text"],
.sign-up-modal input[type="password"] {
		font-weight: 700;
		font-size: 1.4em;
		padding: 10px;
		border-width: 2px;
		border-color: rgba(247, 247, 247, .3);
		border-style: solid;
		background: url('transparent');
}

.sign-up-modal input[type="email"]:focus,
.sign-up-modal input[type="text"]:focus,
.sign-up-modal input[type="password"]:focus {
		background: white;
		transition: all 0.3s ease;
		color: #222;
}

.sign-up-modal input[type="checkbox"] {
		-webkit-appearance: none;
		background-color: #fefefe;
		display: inline-block;
		position: relative;
		padding: 6px;
		margin-left: -6px;
		margin-top: 25px;
		cursor: pointer;
}

.sign-up-modal input[type="checkbox"]:checked:after {
		content: '\2714';
		font-size: 13px;
		position: absolute;
		top: -2px;
		left: 2px;
		color: #111;
}

.sign-up-modal a {
		color: #fefefe;
		text-decoration: underline;
}

.sign-up-modal a:hover {
		color: #d26960;
}

.sign-up-modal input[type="submit"] {
		font-weight: 700;
		font-size: 1.8em;
		color: #111;
		background: #fefefe;
		box-shadow: 0px 4px 0px 0px #d26a60;
		border-style: none;
		padding: 10px 50px;
		margin: 25px 0 15px 0;
		position: relative;
		display: inline-block;
		transition: all .1s linear;
}

.sign-up-modal input[type="submit"]:active {
		box-shadow: 0 2px 0 #d26a60;
		transform: translateY(3px);
		-webkit-transform: translateY(3px);
		-ms-transform: translateY(3px);
}

.sign-up-modal #close-modal-button {
		border-radius: 50%;
		width: 50px;
		height: 50px;
		background-color: #d26960;
		float: right;
		position: relative;
		top: -55px;
		left: 50px;
		cursor: pointer;
}

.sign-up-modal #close-modal-button:before {
		content: '\2716';
		font-size: 1.5em;
		position: relative;
		top: 10px;
		left: 17px;
}

@media only screen and (min-width: 768px) {
		.sign-up-modal .form-checkbox {
				text-align: left;
		}
		.sign-up-modal .password-input {
				width: 47.5%;
				margin-left: -11.5%;
		}
		.sign-up-modal .username-input {
				width: 47.5%;
		}
		.sign-up-modal .email-input {
				margin-bottom: 20px;
				margin-top: 50px;
		}
		.sign-up-modal form {
				width: 70%;
		}
}
</style>
<body>
    <script>
        $(document).ready(function(){
            $("#close-modal-button").click(function() {
		$(".sign-up-modal").fadeOut(200);
		$(".sign-up-modal").fadeIn(200);
});
        });
    </script>
<br>
<br>
<div style="text-align:center;color: red">
                <?php
                        if(count($errors) == 1){
                            ?>
                            <div >
                                <?php
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        elseif(count($errors) > 1){
                            ?>
                            <div >
                                <?php
                                foreach($errors as $showerror){
                                    ?>
                                    <li> <?php echo $showerror; ?> </li>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                    ?>  
                </div>
<div class="sign-up-modal">
		<div id="close-modal-button">
		</div>

		<div class="logo-container">
				<svg class="logo" width="94.4px" height="56px">
						<g>
								<polygon points="49.3,56 49.3,0 0,28 	" />
								<path d="M53.7,3.6v46.3l40.7-23.2L53.7,3.6z M57.7,10.6l28.4,16.2L57.7,42.9V10.6z" />
						</g>
				</svg>
		</div>

		<form class="details" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST" enctype="multipart/form-data">
        Tiêu đề: <input type="text" name="title">
       <br>
       Ảnh giới thiệu:
        <input type="file" name="image_title_name" accept="image/*">
        <br>
        Nội dung chính được bôi đen:
        <input type="text" name="main_content">
        <br>
        Nội dung đầu tiên:
        <input type="text" name="content_1">
        <br>
        Ảnh thứ nhất :
        <input type="file" name="image_1" accept="image/*">
        <br>
        Miêu tả ảnh thứ nhất :
        <input type="text" name="image_description_1">
         <br>
         Nội dung thứ 2:
        <input type="text" name="content_2">
        <br>
        Ảnh thứ 2:
        <input type="file" name="image_2" accept="image/*">
        <br>
        Miêu tả ảnh thứ 2:
        <input type="text" name="image_description_2">
        <br>
        Nội dung thứ 3:
        <input type="text" name="content_3">
        <br>
        Ảnh thứ 3:
        <input type="file" name="image_3" accept="image/*">
        <br>
        Miêu tả ảnh thứ 3:
        <input type="text" name="image_description_3">
        <br>
        <input type="submit" name="submit" value="Xong">
				
				

		</form>
</div>


   
    
</body>

</html>