<html>
<title>
    
    Records
    
    </title>

<head>
    <style>
    
        body{
            
            background-color: cornflowerblue;
        }
        table{
            width:50%;
            color:black;
             border: 2px solid yellow ;
             position:fixed;
             color:beige;
    </style>
    </head>
    
    
    <body>
    
        
        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "adminpanel");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM register";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo"<center>";
        echo "<table>";
            echo "<tr>";
                echo "<th>username</th>";
                echo "<th>email</th>";
                echo "<th>pincode</th>";
                echo "<th>phone</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['pincode'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo"</center>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
    </body>
</html>