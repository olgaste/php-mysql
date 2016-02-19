<!DOCTYPE html>
<html>
<head>
	<title>PHP and MySQL</title>
	<meta charset = "utf-8">
	<link rel = "stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>City</h1>
		<table class="table table-bordered" >
			<tr>
				<th>City</th>
				<th>Province_id</th>
				<th>Longitude</th>
				<th>Latitude</th>
			</tr>
			<?php
			foreach($cities as $city) { ?>
			<tr>
				<td><?=$city['city'];?></td>
				<td><?=$city['province_id'];?></td>
				<td><?=$city['longitude'];?></td>
				<td><?=$city['latitude'];?></td>
			</tr>
			<?php
		}

		?>
		</table>
		<h1>Restaurant</h1>
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Sourceurl</th>
				<th>Description</th>
				<th>Original_id</th>
			</tr>
			<?php
			foreach($restaurants as $restaurant) { ?>
			<tr>
				<td><?=$restaurant['name'];?></td>
				<td><?=$restaurant['sourceurl'];?></td>
				<td><?=$restaurant['description'];?></td>
				<td><?=$restaurant['original_id'];?></td>
			</tr>
			<?php
		}

		?>
		</table>
		<h1>Accommodation</h1>
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Sourceurl</th>
				<th>Description</th>
				<th>Accommodation_type_id</th>
			</tr>
			<?php
			foreach($accommodations as $accommodation) { ?>
			<tr>
				<td><?=$accommodation['name'];?></td>
				<td><?=$accommodation['sourceurl'];?></td>
				<td><?=$accommodation['description'];?></td>
				<td><?=$accommodation['accommodation_type_id'];?></td>
			</tr>
			<?php
		}

		?>
		</table>
		<h1>Outgoings</h1>
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Sourceurl</th>
				<th>Description</th>
				<th>Outgoing_type_id</th>
			</tr>
			<?php
			foreach($outgoings as $outgoing) { ?>
			<tr>
				<td><?=$outgoing['name'];?></td>
				<td><?=$outgoing['sourceurl'];?></td>
				<td><?=$outgoing['description'];?></td>
				<td><?=$outgoing['outgoing_type_id'];?></td>
			</tr>
			<?php
		}

		?>
		</table>
		<h1>Activities</h1>
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Sourceurl</th>
				<th>Description</th>
				<th>Features</th>
			</tr>
			<?php
			foreach($activities as $activity) { ?>
			<tr>
				<td><?=$activity['name'];?></td>
				<td><?=$activity['sourceurl'];?></td>
				<td><?=$activity['description'];?></td>
				<td><?=$activity['features'];?></td>
			</tr>
			<?php
		}

		?>
		</table>
	</div>
	<!--Второй вариант-->
	<div class="container">
		<h1>City</h1>
		<dl class="dl-horizontal city">
			<dt>City:</dt>
			<dd><?php echo $city['city']?></dd>
			<dt>Province_id:</dt> 
			<dd><?php echo $city['province_id']?></dd>
			<dt>Longitude:</dt> 
			<dd><?php echo $city['longitude']?></dd>
			<dt>Latitude:</dt> 
			<dd><?php echo $city['latitude']?></dd>
		</dl>
		<h1>Restaurant</h1>
		<dl class="dl-horizontal restaurant">
			<dt>Name:</dt> 
			<dd><?php echo $restaurant['name']?></dd>
			<dt>Sourceurl:</dt> 
			<dd><?php echo $restaurant['sourceurl']?></dd>
			<dt>Description:</dt> 
			<dd><?php echo $restaurant['description']?></dd>
			<dt>Original_id:</dt> 
			<dd><?php echo $restaurant['original_id']?></dd>
		</dl>
		<h1>Accommodation</h1>
		<dl class="dl-horizontal hotel">
			<dt>Name:</dt> 
			<dd><?php echo $accommodation['name']?></dd>
			<dt>Sourceurl:</dt> 
			<dd><?php echo $accommodation['sourceurl']?></dd>
			<dt>Description:</dt> 
			<dd><?php echo $accommodation['description']?></dd>
			<dt>Accommodation_type_id:</dt> 
			<dd><?php echo $accommodation['accommodation_type_id']?></dd>
		</dl>
		<h1>Outgoings</h1>
		<dl class="dl-horizontal outgoings">
			<dt>Name:</dt> 
			<dd><?php echo $outgoing['name']?></dd>
			<dt>Sourceurl:</dt> 
			<dd><?php echo $outgoing['sourceurl']?></dd>
			<dt>Description:</dt> 
			<dd><?php echo $outgoing['description']?></dd>
			<dt>Outgoing_type_id:</dt> 
			<dd><?php echo $outgoing['outgoing_type_id']?></dd>
		</dl>
		<h1>Activities</h1>
		<dl class="dl-horizontal activities">
			<dt>Name:</dt> 
			<dd><?php echo $activity['name']?></dd>
			<dt>Sourceurl:</dt> 
			<dd><?php echo $activity['sourceurl']?></dd>
			<dt>Description:</dt> 
			<dd><?php echo $activity['description']?></dd>
			<dt>Features:</dt> 
			<dd><?php echo $activity['features']?></dd>
		</dl>
	</div>				
	
</body>
</html>

