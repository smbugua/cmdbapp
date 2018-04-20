 <?php
 include('../layout/nav.php');
  include('../includes/auth.php');

if(isset($_POST['edit'])){
						
$result=mysqli_query("select * from markets");

while($row=mysqli_fetch_array($result))
{
          $no=$row['no'];
          $marketname=$row['market'];
          $marketabbreviation=$row['mkt'];
   echo "<tr class='rowData' data-id='$no'>"
           . "<td class='data'><div data-id='$no'>$no</div></td>"
           .  "<td class='data'><div data-id='$no'>$marketname</div></td>"
           .   "<td class='data'><div data-id='$no'>$marketabbreviation</div> </td>"
           . "</tr> ";
          
 }
}

?>