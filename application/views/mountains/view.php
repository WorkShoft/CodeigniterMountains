<?php
echo '<h2>'.$mountains_item['Name'].'</h2>';


echo "<table><th>Mountains</th><th>Height</th><th>Longitude</th><th>Latitude</th>";
echo <<<EOL

<tr>
<td>$mountains_item[Mountains] </td>
<td> $mountains_item[Height]m </td>
<td> $mountains_item[Longitude]º</td> 
<td>$mountains_item[Latitude]º</td>
 </tr>
</table>
EOL;

?>

<br/>
<style>
 body{
     padding: 6px;
     background: url("https://wallpapershome.com/images/pages/pic_h/5537.jpg");
 }


 
 table td, table th{
     padding: 6px;

 }


</style>
