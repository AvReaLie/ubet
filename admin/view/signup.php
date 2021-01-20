<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title><?=$judul?></title>
	<style>
		#loader{
			transition:all .3s ease-in-out;
			opacity:1;
			visibility:visible;
			position:fixed;
			height:100vh;
			width:100%;
			background:#fff;
			z-index:90000
		}
		#loader.fadeOut{
			opacity:0;
			visibility:hidden
		}
		.spinner{
			width:40px;
			height:40px;
			position:absolute;
			top:calc(50% - 20px);
			left:calc(50% - 20px);
			background-color:#333;
			border-radius:100%;
			-webkit-animation:sk-scaleout 1s infinite ease-in-out;
			animation:sk-scaleout 1s infinite ease-in-out
		}
		@-webkit-keyframes sk-scaleout{
			0%{-webkit-transform:scale(0)}
			100%{-webkit-transform:scale(1);opacity:0}
		}
		@keyframes sk-scaleout{
			0%{-webkit-transform:scale(0);transform:scale(0)}
			100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}
		}
	</style>
	<link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="app">
	<div id="loader">
		<div class="spinner"></div>
	</div>
	<script>
		window.addEventListener('load', function load() {
			const loader = document.getElementById('loader');
        	setTimeout(function() {
        		loader.classList.add('fadeOut');
        	}, 300);
        });
    </script>
    <div class="peers ai-s fxw-nw h-100vh">
    	<div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(assets/static/images/bg.jpg)">
    		<div class="pos-a centerXY">
    			<div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px">
    				<img class="pos-a centerXY" src="assets/static/images/logo.png" alt="">
    			</div>
    		</div>
    	</div>
    	<div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
    		<h4 class="fw-300 c-grey-900 mB-40">Register</h4>
    		<form id="ins_rec" method="post" data-toggle="validator">
    			<div class="form-group">
    				<label class="text-normal text-dark">Username</label> 
    				<input type="text" class="form-control" name="userName" placeholder="Username">
    			</div>
    			<div class="form-group">
    				<label class="text-normal text-dark">Email Address</label> 
    				<input type="email" class="form-control" name="emailAddr" placeholder="name@email.com">
			</div>
				<div class="form-group">
					<label class="text-normal text-dark">Password</label> 
					<input type="password" class="form-control" name="passWord" placeholder="Password" data-minlength="6" id="passWord">
					<span class="help-block">Minimum of 6 characters</span>
				</div>
				<div class="form-group">
					<label class="text-normal text-dark">Confirm Password</label> 
					<input type="password" class="form-control" name="cpassWord" placeholder="Confirm Password" data-match="#passWord" data-match-error="Passwords don&#39;t match" id="cpassWord">
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/vendor.js"></script>
	<script type="text/javascript" src="assets/js/bundle.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Validate -->
	<script src="<?php echo $admin_url ?>assets/js/bootstrap-validator/dist/validator.min.js"></script>
    <script src="<?php echo $admin_url ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo $admin_url ?>assets/js/additional-methods.min.js"></script>
</body>
</html>

<script type="text/javascript">
  
$(document).ready(function (){

    $('#ins_rec').on("submit", function(e){
      e.preventDefault();
      $.ajax({

        type:'POST',
        url:'<?php echo $admin_url ?>controller/daftar_control.php',
        data:$(this).serialize(),
        success:function(vardata){

          var json = JSON.parse(vardata);

          if(json.status == 101){
            console.log(json.msg);
            alert('Daftar berhasil');document.location='<?=$admin_url?>'
          }
          else if(json.status == 102){
            console.log(json.msg);
          }
          else{
            console.log(json.msg);
          }

        }

      });

    });

});

</script>
