<body>
<h2 align="center">LIST OF PRODUCTS</h2>
<table border=1 align="center">
<tr>
<th>ID</th>
<th>NAME</th>
<th>PRICE</th>
<th>ACTION</th>
</tr>
<?php
include "db.php";
$res=mysqli_query($conn,"select * from product");
while($row=mysqli_fetch_array($res))
{
    echo"<tr>";
    echo"<td>$row[pid]</td>";
    echo"<td>".$row['pname']."</td>";
    echo"<td>".$row['price']."</td>";
    echo"<td><a href='delete.php?id=$row[pid]'>Delete</a></td>";
    echo"</tr>";
}
?>
</table>
