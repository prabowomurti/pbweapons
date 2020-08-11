<html>
<head>
<title>Daftar Senjata di Point Blank</title>

<script type="text/javascript" src="pbweapons/views/scripts/jquery-1.4.min.js"></script>
<script type="text/javascript" src="pbweapons/views/scripts/general-script.js"></script>
<style type="text/css"><?php $this->load->view('styles/style-general.css');?></style>

</head>
<body>
	
<h1>Berikut Daftar Main Weapon di Point Blank (Point Item) (klik di masing2 header untuk mengurutkan)<br />
List of Main Weapons in Point Blank (Point Item) (click each header to sort)</h1>

<div class="table" >
	<div class="thead" >
		<div><a href="#">ID</a></div>
		<div><a href="#">Name</a></div>
		<div><a href="#">Damage</a></div>
		<div><a href="#">F. Speed</a></div>
		<div><a href="#">Accuracy</a></div>
		<div><a href="#">V.Recoil</a></div>
		<div><a href="#">H.Recoil</a></div>
		<div><a href="#">M.Speed</a></div>
		<div><a href="#">Ammo</a></div>
		<div><a href="#">Range</a></div>
		<div><a href="#">Price</a></div>
		<div>Picture</div>
	</div>
	<div class="tbody">
<?php
foreach ($weapons as $row):
?>
	<div class="tr">
		<div><?=$row->weapon_id?></div>
		<div><?=$row->weapon_name?></div>
		<div><?=$row->damage?></div>
		<div><?=$row->fspeed?></div>
		<div><?=$row->akurasi?></div>
		<div><?=$row->vrecoil?></div>
		<div><?=$row->hrecoil?></div>
		<div><?=$row->mspeed?></div>
		<div><?=$row->ammo?></div>
		<div><?=$row->range?></div>
		<div><?=$row->price?></div>
		<div><a class="show-image" href="#<?php echo $row->weapon_id?>">Show</a></div>

	</div>
<?php
endforeach;
?>
	</div><!--end of class body-->

	<a href="http://prabowomurti.com">Prabowo Murti</a> thanks to Allah SWT,
		<a href="http://codeigniter.com">CI</a>,
		<a href="http://jquery.com">jQ</a>,
		<a href="http://pb.gemscool.com">PB</a>,
		<a href="http://packtpub.com/article/jquery-table-manipulation-part1">packtpub</a>
</div><!--end of class container-->

<div id="popup">
	<a id="popup-close" href="#" title="close popup">X</a>
	<div>
		<img src="" alt="" />
	</div>
</div>
<div id="popup-background"></div>

</body>
</html>
