<?php
$con = mysqli_connect("localhost","root","","testing");
$response = array();
if($con) {
    // echo "DB connected";
    $sql = "SELECT * FROM data";
    $result = mysqli_query($con,$sql);
    if($result){
        $i =0;
        header("Content-Type:JSON");
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]["id"] = $row ["id"];
            $response[$i]["name"] = $row ["name"];
            $response[$i]["email"] = $row ["email"];
            $response[$i]["mobile"] = $row ["mobile"];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else {
    echo "DB connection failed";
}
?>