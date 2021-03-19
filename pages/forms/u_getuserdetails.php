<?php
	$con = mysqli_connect("localhost","root","","technokraftdb");
	

	if($con){
		echo "success";
	  }else{
		  echo"error";
	  }
	$qrt="select * from  techno_user";
	$runt=mysqli_query($con,$qrt);
	
	
		$c=1;
		$table="";
		$table.="  <thead>
                <tr>
				 <th>Sr.No</th>
                  <th>USER Name </th>
                  <th>PHONE </th>
                  <th>EMAIL ID</th>
                  <th>ADDRESS</th>
				  <th>IMAGE</th>
				  <th>Update</th>
                  <th>Delete</th>
                 </tr>
                </thead>
                <tbody>";

		while($rowt=mysqli_fetch_array($runt)){
		$table.="<tr>";
		$table.="<td>".$c."</td>";
        $table.="<td id='uname".$rowt["id"]."'>".$rowt["uname"]."</td>";
        $table.="<td id='uphone".$rowt["id"]."'>".$rowt["uphone"]."</td>";
        $table.="<td id='uemail".$rowt["id"]."'>".$rowt["uemail"]."</td>";
        $table.="<td id='uaddress".$rowt["id"]."'>".$rowt["uaddress"]."</td>";
        
        $table.="<td><img src='images/".$rowt["uimage"]."' style='max-height:115px;''></td>"; 

		$table.="<td><a href='javascript:void(0)' onclick='modifyrec(".$rowt["id"].")'>Update</a></td>";
		$table.="<td><a href='javascript:void(0)' onclick='deleterec(".$rowt["id"].")'>Delete</a></td>";
		
		$c++; 
		$table.="</tr>";
		}
		$table.="</tbody>";
		echo $table;
		

// echo "<pre>";
// print_r($table);
// echo "</pre>";


// if($con){
//   echo "success";
// }else{
//     echo"error";
// }
		
		
?>