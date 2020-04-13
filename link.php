<?php
$link = mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'passsword',  // 密碼
            'php2020');  // 預設使用的資料庫名稱
$SQL="SELECT * FROM employee";
if($result=mysqli_query($link,$SQL)){
echo "<table border='1'>";
echo "<tr>";
echo "<td><b>No</b></td><td><b>Fname</b></td><td><b>Minit</b></td><td><b>Lname</b></td><td><b>Bdate</b></td><td><b>Address</b></td><td><b>Sex</b></td><td><b>Salary</b></td>";
echo "</tr>";
	while( $row = mysqli_fetch_assoc($result) ){
echo "<tr>";
    echo "<td>".$row["No"]."</td><td>".$row["Fname"]."</td><td>".$row["Minit"]."</td><td>".$row["Lname"]."</td><td>".$row["Bdate"]."</td><td>".$row["Address"]."</td><td>".$row["Sex"]."</td><td>".$row["Salary"]."</td>";
	}
echo "</tr>";
echo "</table>";
}else{
	echo "找不到資料";
}
?>