  <?php
 $link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"yezdeekay");
 
 $id=$_GET["id"];
 
	
 
 {
 $res=mysqli_query($link,"select * from subcatg where id=$id");
 echo "<select id='statedd'>";
 while($row=mysqli_fetch_array($res))
 {
	 echo"<option>";echo $row["subcategoryname"];echo"</option>";
 }
 echo "</select>";
 }
 
 ?>