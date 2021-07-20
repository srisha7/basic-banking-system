<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<style>
    .background{
    background:rgba(0, 0, 0, 0.192)url('i/bg4.jpg');
	background-size:100% ;
	background-blend-mode: darken;
    }
    table {
	border-collapse: collapse;
	width: 70%;
    
  }
  
  th, td {
	text-align: left;
	padding: 8px;
  }
  
  tr{background-color:antiquewhite; }
  
  th {
	background-color:lightblue
  ;
	color:white;
  }
  .center {
  margin-left: auto;
  margin-right: auto;
 
}
.button1 {
  background-color:#990033;
  border: none;
  margin-top:0px;
  margin-left:0px;
  color: white!important;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  opacity:1;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;

}
.button {
  background-color:#990033;
  border: none;
  margin-top:40px;
  margin-left:400px;
  color: white!important;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  opacity:1;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;

}
a, a:hover, a:focus, a:active {
      text-decoration: none;
      color: inherit;
}

.button:hover {opacity: 0.5;}
        </style>
	<title> Sparks Foundation Bank</title>
</head>
<body class="background" >
  <div>
<button class="button1 "><a href="home.php">Return</a></button><br><br>
</div>
<table class = "center">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Netbal</th>
</tr>
<?php
include 'connect.php';
$sql="SELECT id, name ,email,netbal from cust";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["netbal"]."</td></tr>";
}
echo "</table>";
$conn->close();
?>
<button class="button"> <a href="viewtrans.php">View Transaction History</a></button>

<button class="button "><a href="transfer.php">Money Transfer</a></button>

</body>
</html>