<?php
include("database.php");
$word=$_POST['value'];

$search_word=explode(" ",$word);
//print_r($search_word);
for($i=0;$i<count($search_word);$i++){
	$sql1="select * from keyword where key_name = '$search_word[$i]'";
	$result = mysqli_query($con,$sql1);
if(!$result){
	die("Select query failed" . mysqli_error($con));
}
	
	if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
$count=++$row['count'];
	$sql2="update keyword set count='$count' where key_name='$search_word[$i]'";
      $result2 = mysqli_query($con,$sql2);
	if(!$result2){
	die("Select query failed" . mysqli_error($con));
}

	}
}

 else {
	 $sql="insert into keyword values('','$search_word[$i]','1')";
	 $result3 = mysqli_query($con,$sql);
 	 if(!$result3){
	die("Select query failed" . mysqli_error($con));

	 }
 }
}
$where1='';
$case1='';
for($i=0;$i<count($search_word);$i++){
	$where1 .=" key_name='$search_word[$i]' or";
$case1 .= " (pname like '%$search_word[$i]%' or btype like '%$search_word[$i]%' or ptype like '%$search_word[$i]%') and";
}
$where2=chop($where1,"or");
$case2=chop($case1,"and");
$case3="WHEN $case2";
//echo $case3;

$c=2;
$where3='';
$then_case='';

$sql3="select * from keyword where $where2 order by count desc";
$result4 = mysqli_query($con,$sql3);
 	 if(!$result4){
	die("Select query failed13" . mysqli_error($con));

	 }
	 while($row = mysqli_fetch_assoc($result4)){
	 $where3 .=" (pname like '%".$row['key_name']."%' or ptype like '%".$row['key_name']."%' or btype like '%".$row['key_name']."%') or"; 
	 
	 $then_case .=" WHEN pname like '%".$row['key_name']."%' or ptype like '%".$row['key_name']."%' or btype like '%".$row['key_name']."%' THEN $c";	
	 $c++;
	 
	 }
	 
	 $final_where=chop($where3,'or');
	 
	 $sql4=" select * from products where $final_where ORDER BY (CASE $case3 THEN 1 $then_case else 1000 END)ASC ";
	 //echo $sql4;
	 $result5 = mysqli_query($con,$sql4);
 	 if(!$result5){
	die("Select query failed23" . mysqli_error($con));

	 }
while($row = mysqli_fetch_assoc($result5)){
	echo "<div id='product_spaces' style='float:left'>";
	
	echo "<table> <tr>";

	echo "<td colspan='2' style='padding-left:30px'><img style='width:400px;height:400px' src='".$row['image'] ."'/></td> </tr>";
	
	//echo "<tr> <td style='padding-left:10px'>product name:</td> <td> <a style='color:red'href='product_desc7.php?pid=".$row['count']."'> " .$row['pname']. " </a></p>" ;	
	echo"<tr> <td style='padding-left:10px'>product name:</td> <td> <span style='color:red' >".$row['pname']."</span>";
	
	echo "<tr> <td style='padding-left:10px'>cost:</td> "."<td style='padding-right:70px'>". $row['cost'] ." Rs</td> </tr>";
	echo " </tr></table>";
	echo "</div>";
	 echo 'Model: <font color="blue">'.$row['pname'].'</font><br><br><br>Description: <font color="blue">'.$row['desc'].'</font><br><br><br>
							Product type/ Brand: <font color="blue">'.$row['ptype'].' '.$row['btype'].'</font><br><br><br>Cost(in Rs.): <font color="blue">'.$row['cost'].'</font><br><br><br><br>';
							
echo"<br><br><br><br><br><form action='addcart.php' method='post'>
<input type='hidden' name='count' value='".$word."'>
<input type='submit' value='Add To Cart'>
</form><br><br>";							
}
