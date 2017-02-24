<?php
include("database.php");
$word=$_POST['value'];
$word_array=explode(" ",$word);
//print_r($word_array);
$where = ''; $order_by = '';$when='';$var=2;
for($i=0;$i<count($word_array);$i++){
	
	$where .= "(pname like '%$word_array[$i]%' or btype like '%$word_array[$i]%' or ptype like '%$word_array[$i]%') or";
	$order_by .= "(pname like '%$word_array[$i]%' or btype like '%$word_array[$i]%' or ptype like '%$word_array[$i]%') and";
     $when .="WHEN pname like '%$word_array[$i]%' or btype like '%$word_array[$i]%' or ptype like '%$word_array[$i]%' THEN $var   ";
	$var++;
	}
$where1 = chop($where,"or");
$order_by1 = chop($order_by,"and");
//echo $where1;
echo $sql = "select * from products where $where1 ORDER BY ( CASE WHEN $order_by1 THEN 1 $when ELSE 1000 END)ASC";
echo"<br>";
$result = mysqli_query($con,$sql) ;

if(!$result){
	die("Select query failed" . mysqli_error($con));
}
while($row = mysqli_fetch_assoc($result)){
	echo "<div id='product_spaces' style='float:left'>";
	
	echo "<table> <tr>";

	echo "<td colspan='2' style='padding-left:30px'><img style='width:200px;height:200px' src='".$row['image'] ."'/></td> </tr>";
	
	//echo "<tr> <td style='padding-left:10px'>product name:</td> <td> <a style='color:red'href='desc.php?pid=".$row['count']."'> " .$row['pname']. " </a></p>" ;	
	echo"<tr> <td style='padding-left:10px'>product name:</td> <td> <span style='color:red' >".$row['pname']."</span>";
	echo "<tr> <td style='padding-left:10px'>cost:</td> "."<td style='padding-right:70px'>". $row['cost'] ." Rs</td> </tr>";
	echo" <td> <button class='details' id='".$row['count']."'> product description</button></td>";
	echo " </tr></table>";
	echo "</div>";
}


?>