
<html>
<title>Live EDITOR</title>
<body>
<table>
<form method="post">
<tr><td>HTML Here:</td><td>CSS Here:</td></tr>
<tr>
<td><textarea name="html" style="margin: 0px; height: 314px; width: 652px;"><?php echo $_POST['html'];?></textarea></td>
<td><textarea name="css" style="margin: 0px; height: 314px; width: 652px;"><?php echo $_POST['css'];?></textarea></td>
</tr>
</table><input type="submit" name="submit">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
?>
<html>
<title>Live EDITOR</title>
<style>
<?php echo $_POST['css'];?>
</style>
<body>
<?php echo $_POST['html'];?>
</body>
</html>
<?php 

}
?>
