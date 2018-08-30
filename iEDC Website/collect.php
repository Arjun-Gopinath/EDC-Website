<html>
    <head>
        <link rel="icon" type="img/png" href="img/logo.ico">
          <link rel="stylesheet" href="css/main.css">
        <style>
            body{
                background:linear-gradient(to right,#13547a,#80d0c7 );
            }
            .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
        </style>  
        <body>
            
        

<?php 


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$semester = $_POST["semester"];
$branch = $_POST["branch"];
$Email = $_POST["Email"];
$mobile = $_POST["mobile"];


$cf1name = $_POST["cf1name"];
$cf1lname = $_POST["cf1lname"]; 
$cf1sem = $_POST["cf1sem"];
$cf1branch = $_POST["cf1branch"];
$Email1 = $_POST["Email1"];
$mobile1 = $_POST["mobile1"];
$NSSIAN1 = $_POST["NSSIAN1"];

if(empty($_POST["NSSIAN1"])){
    $NSSIAN1="Nill";
}

if(empty($_POST["cf2name"])){
    $cf2name =$cf2lname =$cf2sem =$cf2branch =$Email2 =$mobile2 =$NSSIAN2 = "Nill";
}
else{
$cf2name = $_POST["cf2name"];
$cf2lname = $_POST["cf2lname"];
$cf2sem = $_POST["cf2sem"];
$cf2branch = $_POST["cf2branch"];
$Email2 = $_POST["Email2"];
$mobile2 = $_POST["mobile2"];
$NSSIAN2 = $_POST["NSSIAN2"];
}

if(empty($_POST["cf3name"])){
    $cf3name =$cf3lname =$cf3sem =$cf3branch =$Email3 =$mobile3 =$NSSIAN3 = "Nill";
}
else{
$cf3name = $_POST["cf3name"];
$cf3lname = $_POST["cf3lname"];
$cf3sem = $_POST["cf3sem"];
$cf3branch = $_POST["cf3branch"];
$Email3 = $_POST["Email3"];
$mobile3 = $_POST["mobile3"];
$NSSIAN3 = $_POST["NSSIAN3"];
}

if(empty($_POST["cf4name"])){
    $cf4name =$cf4lname =$cf4sem =$cf4branch =$Email4 =$mobile4 =$NSSIAN4 = "Nill";
}
else{
$cf4name = $_POST["cf4name"];
$cf4lname = $_POST["cf4lname"];
$cf4sem = $_POST["cf4sem"];
$cf4branch = $_POST["cf4branch"];
$Email4 = $_POST["Email4"];
$mobile4 = $_POST["mobile4"];
$NSSIAN4 = $_POST["NSSIAN4"];
}

if(empty($_POST["cf5name"])){
    $cf5name =$cf5lname =$cf5sem =$cf5branch =$Email5 =$mobile5 =$NSSIAN5 = "Nill";
}
else{
$cf5name = $_POST["cf5name"];
$cf5lname = $_POST["cf5lname"];
$cf5sem = $_POST["cf5sem"];
$cf5branch = $_POST["cf5branch"];
$Email5 = $_POST["Email5"];
$mobile5 = $_POST["mobile5"];
$NSSIAN5 = $_POST["NSSIAN5"];
}

$company = $_POST["company"];
$website = $_POST["website"];
$employee = $_POST["employee"];
$desc1 = $_POST["desc"];
$whopay = $_POST["whopay"];
$custpain = $_POST["custpain"];
$Competitors = $_POST["Competitors"];
$UVP = $_POST["UVP"];
$solution = $_POST["solution"];
$copyright = $_POST["copyright"];
$customers = $_POST["customers"];
$marketing = $_POST["marketing"];
$makemoney = $_POST["makemoney"];
$investment = $_POST["investment"];
$Goals = $_POST["Goals"];

echo $_POST["docfile"];
echo $_POST["imgfile"];

$servername = "localhost";
$username = "root";
$password = "";
if(isset($_POST['submit']))
{
$dbname="startup";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE TABLE IF NOT EXISTS reg (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30),lastname VARCHAR(30)  ,
semester VARCHAR(30)  ,branch VARCHAR(30)  ,
Email VARCHAR(50)  ,mobile VARCHAR(30)  ,
cf1name VARCHAR(30)  ,cf1lname VARCHAR(30)  ,
cf1sem VARCHAR(30)  ,cf1branch VARCHAR(30)  ,
Email1 VARCHAR(30)  ,mobile1 VARCHAR(30)  ,
NSSIAN1 VARCHAR(30)  ,cf2name VARCHAR(30)  ,cf2lname VARCHAR(30)  ,
cf2sem VARCHAR(30)  ,cf2branch VARCHAR(30)  ,
Email2 VARCHAR(30) ,mobile2 VARCHAR(30)  ,
NSSIAN2 VARCHAR(30)  ,cf3name VARCHAR(30)  ,
cf3lname VARCHAR(30)  ,cf3sem VARCHAR(30)  ,
cf3branch VARCHAR(30)  ,Email3 VARCHAR(30) ,
mobile3 VARCHAR(30)  ,NSSIAN3 VARCHAR(30)  ,
cf4name VARCHAR(30)  ,cf4lname VARCHAR(30)  ,
cf4sem VARCHAR(30)  ,cf4branch VARCHAR(30)  ,
Email4 VARCHAR(30) ,mobile4 VARCHAR(30)  ,
NSSIAN4 VARCHAR(30) ,cf5name VARCHAR(30)  ,
cf5lname VARCHAR(30)  ,cf5sem VARCHAR(30)  ,
cf5branch VARCHAR(30)  ,Email5 VARCHAR(30) ,
mobile5 VARCHAR(30)  ,NSSIAN5 VARCHAR(30)  ,
company VARCHAR(30),website VARCHAR(30),employee VARCHAR(30),
desc1 VARCHAR(30),whopay VARCHAR(3000),
custpain VARCHAR(3000),Competitors VARCHAR(3000),
UVP VARCHAR(3000),solution VARCHAR(3000),
copyright VARCHAR(3000),customers VARCHAR(3000),
marketing VARCHAR(3000),makemoney VARCHAR(3000),
investment VARCHAR(3000),Goals VARCHAR(3000))";
if ($conn->query($sql) === TRUE) {
  //  echo "Table created";
} else {
 //   echo "Error creating table: " . $conn->error."<br><br>";
}

$sql="INSERT INTO reg(firstname,lastname,semester,branch,Email,mobile,
cf1name,cf1lname,cf1sem,cf1branch,Email1,mobile1,NSSIAN1,
cf2name,cf2lname,cf2sem,cf2branch,Email2,mobile2,NSSIAN2,
cf3name,cf3lname,cf3sem,cf3branch,Email3,mobile3,NSSIAN3,
cf4name,cf4lname,cf4sem,cf4branch,Email4,mobile4,NSSIAN4,
cf5name,cf5lname,cf5sem,cf5branch,Email5,mobile5,NSSIAN5,
company,website,employee,desc1,whopay,custpain,Competitors,
UVP,solution,copyright,customers,marketing,makemoney,investment,
Goals) 

VALUES ('".$firstname."','".$lastname."','".$semester."','".$branch."','".$Email."','".$mobile."',
'".$cf1name."','".$cf1lname."','".$cf1sem."','".$cf1branch."','".$Email1."','".$mobile1."','".$NSSIAN1."',
'".$cf2name."','".$cf2lname."','".$cf2sem."','".$cf2branch."','".$Email2."','".$mobile2."','".$NSSIAN2."',
'".$cf3name."','".$cf3lname."','".$cf3sem."','".$cf3branch."','".$Email3."','".$mobile3."','".$NSSIAN3."',
'".$cf4name."','".$cf4lname."','".$cf4sem."','".$cf4branch."','".$Email4."','".$mobile4."','".$NSSIAN4."',
'".$cf5name."','".$cf5lname."','".$cf5sem."','".$cf5branch."','".$Email5."','".$mobile5."','".$NSSIAN5."',
'".$company."','".$website."','".$employee."','".$desc1."','".$whopay."','".$custpain."','".$Competitors."',
'".$UVP."','".$solution."','".$copyright."','".$customers."','".$marketing."','".$makemoney."','".$investment."',
'".$Goals."')";
if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
  

$stmt = $conn->prepare("SELECT * FROM reg ORDER BY id DESC LIMIT 1 ");
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$id = $row["id"];
 
} else {
 //   echo "Error: " . $sql . "<br>" . $conn->error;
}
}


 ?>
 <h2 align="center"> <br>Greatings <?php echo $firstname.' '.$lastname ?><br><br>Your application have been registered . <br><br>Please note your Reference Id: <?php echo "EDC00044".$id ?><br><br>Further Updates will be notified through the Email: <?php echo $Email ?>.</h2>
<br>
<form action="index.html" method=post class="form-box">
<div class="form-group col-md-12"  align=center>
		<input type="submit" class="btn btn-outline-white btn-round btns-action anim-3" value="Home Page" >
	</div>
</form>
<img src="img/Picture1.png" alt="Do For Kerala Icon" style="width:auto;height:auto;" class = "center">

 </body>
    </head>
</html>
