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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/sweetalert2/sweetalert2.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

	<style type="text/css">
		.error-msg{
			color: #dc3545;
			font-weight: 600;
		}
		.success-msg{
			color: green;
			font-weight: 600;
		}
		.field-icon {
          float: right;
          margin-left: -30px;
          margin-top: -26px;
          margin-right: 10px;
          position: relative;
          z-index: 2;
        }
	</style>
</head>
