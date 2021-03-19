<?php
	$con = mysqli_connect("localhost","root","","technokraftdb");
	

	$qrt="select * from  techno_blogs";
	$runt=mysqli_query($con,$qrt);
	
	
		$c=1;
		$table="";
		$table.="  <thead>
                <tr>
				 <th>Sr.No</th>
                  <th>Blog Title</th>
                  <th>Blog Description</th>
                  <th>Blog Image</th>
				  <th>Update</th>
                  <th>Delete</th>
                 </tr>
                </thead>
                <tbody>";
		while($rowt=mysqli_fetch_array($runt)){
		$table.="<tr>";
		$table.="<td>".$c."</td>";
		$table.="<td id='btitle".$rowt["ID"]."'>".$rowt["btitle"]."</td>";
        $table.="<td id='bdesc".$rowt["ID"]."'>".$rowt["bdesc"]."</td>";
        $table.="<td><img src='images/".$rowt["bimage"]."' style='max-height:100px;''></td>";
		$table.="<td><a href='javascript:void(0)' onclick='modifyrec(".$rowt["ID"].")'>Update</a></td>";
		$table.="<td><a href='javascript:void(0)' onclick='deleterec(".$rowt["ID"].")'>Delete</a></td>";
		
		$c++; 
		$table.="</tr>";
		}
		$table.="</tbody>";
		echo $table;
		
		
		
?>