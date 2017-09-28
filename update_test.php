<!DOCTYPE>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<!--<table>
<tr>
    <td align="center"> From Database </td>
</tr>
<tr>
    <td>
        <table border="1">
            <tr>
                <td>First Name</td>
                <td>Last Name </td>
                <td> Gender </td>
                <td> Subject </td>
                <td> Hobbies </td>
            </tr>
-->
<?php 
$con=mysqli_connect("localhost","root","","ismat_db");
if(mysqli_errno($con))
{
    echo "Can't Connect to mySQL:".mysqli_connect_error();
}
//$name = mysqli_real_escape_string($con,$_POST['select']);
//  $fetch = mysqli_query($con,"SELECT * FROM persons WHERE FirstName='".$name."'");
//  $row_display=mysqli_fetch_assoc($fetch);
if(isset($_POST['FirstName']))
{
$name = $_POST['FirstName'];
//$name = mysqli_real_escape_string($con,$_POST['select']);
//$fetch = "SELECT * FROM persons WHERE FirstName = '".$name."'";
//$fetch="SELECT 'Firstname' FROM persons WHERE Firstname = '".$name."'";
$fetch="SELECT Firstname FROM persons WHERE Firstname = '".$name."'";
$result = mysqli_query($con,$fetch);
if(!$result)
{
echo "Error:".(mysqli_error($con));
}
//display the table
echo '<table border="1">'.'<tr>'.'<td align="center">'. 'From Database'. '</td>'.'</tr>';
echo '<tr>'.'<td>'.'<table border="1">'.'<tr>'.'<td>'.'First Name'.'</td>'.'<td>'.'Last Name'.'</td>'.'<td>'. 'Gender' .'</td>'.'<td>'. 'Subject'. '</td>'.'<td>'. 'Hobbies' .'</td>'.'</tr>';
//while($data = mysqli_fetch_row($fetch))
while($data=mysqli_fetch_row($result))  
    {
    echo ("<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td></tr>");
    }
echo '</table>'.'</td>'.'</tr>'.'</table>';
}
?>
<!--</table>
</td>
</tr>
</table>-->
<br/>
<a href="update.php"> Go back to Main Page </a>
</body>
</html>