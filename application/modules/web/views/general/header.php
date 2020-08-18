<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="<?php echo base_url() . 'component/js/jquery.js' ?>"></script>
	<script type="text/javascript">
	 $(document).ready(function () {
		
		$('search').keyup(function){
			var name =(.this).val();
			$.post('pencarian.php' , { name:name }, function(data){



			});
		});  
	 
	  });

	</script>
</head>

<style>
*{
	margin:0px;
}
</style>
<body >
	<div class="wrap">
		<div class="header" style="width: 100%; height: 150px; background:white;">	
	<div>
		<ul style="background:white;list-style: none;position: relative;display: inline-table;width: 98%;border-bottom:1px solid;border-color:darkgrey;" >
					    <li style="float:left;border-right:1px solid;border-color:darkgrey;"><a href="#" style="color:#000;display: block;padding: 25px;text-decoration: none;">Distro</a></li>
						<li style="float:left;border-right:1px solid;border-color:darkgrey;"><a href="#" style="color:#000;display: block;padding: 25px;text-decoration: none;">Distro+</a></li>
					    <li style="float:left;border-right:1px solid;border-color:darkgrey;"><a href="#" style="color:#000;display: block;padding: 25px;text-decoration: none;">icon</a></li>
		</ul>
			<div style="float: right; margin-right:80px;">
			<br>
				<div id="filter"></div>
				<form method="post" action="#">
					<input  type="text" name="search" size="20" placeholder="search.."  style="height:30px; border-radius:10px; ">
					</input>
				</form>
				
			</div>
	</div>
					
				<nav style="text-align: center;width: 100%;font-family: Old English Text MT;border-bottom:1px solid;border-color:darkgrey;">
			    <ul style="background:white;list-style: none;position: relative;display: inline-table;width: auto;" >
					    <li><span></span></li>
					    <li style="float:left;"><a class="home" style="color:#000;display: block;padding: 25px;text-decoration: none;"><b>Home</b></a></li>
						<li style="float:left;"><a class="baju"  style="color:#000;display: block;padding: 25px;text-decoration: none;"><b>Tshirt</b></a></li>
					    <li style="float:left;"><a class="celana" style="color:#000;display: block;padding: 25px;text-decoration: none;"><b>Pants</b></a></li>
					    <li style="float:left;"><a class="aksesoris" style="color:#000;display: block;padding: 25px;text-decoration: none;"><b>Accessories</b></a></li>
				</ul>

				</nav>
		</div>
		