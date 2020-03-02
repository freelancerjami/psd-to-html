<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP AJAX</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="header">
	<h2>Php ajax part</h2>
	<div class="form">
		<h2 id="messagedisplay"></h2>

		 <form id="jami" >
        <div class="form-group">
                <label> Name </label>
                <input type="text" value="" id="name" name="name" placeholder="Enter namme" >
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" value="" id="email" name="email" placeholder="Enter email"  >
            </div>
            <div class="form-group">
                <label>Password</label>
                <input value="" name="password" id="password" placeholder="Enter email">
            </div>
        <div class="modal-footer">
            <button type="submit" id="submit" name="submit">Submit</button>
        </div>
        </form>
	</div>
</div>

<div class="table_class">
<table style="width: 60%;margin: 0 auto;border: 1px solid black;
  border-collapse: collapse;">
	<tbody>
	<tr>
		<th>S.N</th>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Passord</th>
	</tr>
<?php
$localhost='localhost';
$dbuser='root';
$dbpassord='';
$dbdatabes='php-ajax';

$con=mysqli_connect($localhost,$dbuser,$dbpassord,$dbdatabes);

$query="SELECT * FROM ajax";
$query_run=mysqli_query($con,$query);

if(mysqli_num_rows($query_run)>0){
	$x=1;
	foreach ($query_run as $data) {?>
		

  <tr>

    
    <td><?php echo $x; ?></td>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['password']; ?></td>
  </tr>
	<?php $x++; }
}else{
	echo "no record";
}
?>
</tbody>
</table>
</div>






















	
	<script src="js/jquery-3.4.1.js"></script>
	<?php include('js/main.js'); ?>
</body>
</html>