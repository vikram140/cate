 <?php
 $link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"yezdeekay");
 
 
 ?>
 
 
 <form name="form1" action="" method="post">
 
 
 <table>
 <tr>
<td>select country</td>
<td><select id="countrydd" onchange="change_country()">
<option>select</option>
<?php
$res=mysqli_query($link,"select * from catt");
while($row=mysqli_fetch_array($res))
{

?>
<option value="<?php echo $row["id"];?>"><?php echo $row["username"];?></option>
<?php
}
?>
</select></td>
 </tr>
 
 <tr>
 <td> select state</td>
<td>
<div id="state">
<select>
<option>select</option>

</select>
</div>
</td>
 </tr>
 
 </table>
 
 
 </form>
 
 <script type="text/javascript">
 function  change_country()
 {
	 var xmlhttp=new XMLHttpRequest();
	 xmlhttp.open("GET","ajax.php?country="+document.getElementById("countrydd").value,false);
 xmlhttp.sened(null);
  document.getElementById("state").innerHTML=xmlhttp.responseText;

 }
 
 </script>
 
 