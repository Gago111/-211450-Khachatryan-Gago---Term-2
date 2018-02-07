<?php
$valueToSearch = $_POST['questions'];
$submit = $_POST['submit'];
// print_r($valueToSearch);

if($valueToSearch == 0){
  $valueToSearch = 1;
}
if($submit == "Back"){
  $valueToSearch = 1;
  $submit = "";
}

if($valueToSearch == 99999){
	echo "You like Football!";
}

if($valueToSearch == 999999) {
	echo "You like Basketball!";
}

if($valueToSearch == 999) {
	echo "You like rugby!";
}

if($valueToSearch == 9999) {
	echo "You don't like anything!";
}

if($valueToSearch == 333) {
	echo "Then no one knows!";
}




$query = "SELECT * FROM `quiz` WHERE `id`= '$valueToSearch'";
$search_result = filterTable($query);
function filterTable($query)
{
$connect = mysqli_connect("localhost", "root", "raspberry", "quiz6");
$filter_Result = mysqli_query($connect, $query);
return $filter_Result;
}
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="style.css">
    <title>Quize</title>
    <style>
      input {
        background-color: black;
		height: 20px;
		width: 20px;
		
		
      }
    </style>
</head>
<body>

  
          <table  class="align-right">

       
            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td>question <?php echo $row['id'];?>:</td>
                <td><?php echo $row['questions'];?></td>
            </tr>

        </table>
        <form action="#" method="post">
        <input type="submit" name="questions" value="<?php echo $row['id_yes'];?>">Yes<br><br>
        <input type="submit" name="questions" value="<?php echo $row['id_no'];?>">No<br><br>
        <input type="submit" name="questions" value="<?php echo $row['id_idk'];?>">I don't know<br><br><br>
        <input type="submit" name="submit" value="Back">Back to first question<br>
        </form>
        <?php endwhile;?>
</body>
</html>
