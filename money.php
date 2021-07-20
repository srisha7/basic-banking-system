<?php
include 'connect.php';
if(isset($_POST['transfer'])){ 
    $iden=$_POST['cid'];
   $riden=$_POST['rid'];
   $amount=$_POST['amount'];
?>
<html>
    <head>
         <style>
    .background{
    background:rgba(0, 0, 0, 0.192)url('i/bg4.jpg') ;
	background-size:100% ;
	background-blend-mode: darken;
    }
    center{
      margin-top:30px;
    
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
.button {
  background-color:#990033;
  border: none;
  color: white!important;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  opacity:1;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  margin-left:400px;
  margin-top:40px;
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
input{
    width:15%;
    height:5%;
    border:1px;
    border-radius:5px;
    padding:8px 15px 8px 15px;
    margin-top:100px;
    margin-left:550px;
    box-shadow:1px 1px 2px 1px grey;
}
a, a:hover, a:focus, a:active {
      text-decoration: none;
      color: inherit;
}
.button:hover {opacity: 0.5;}
        </style>
</head>
<body class="background">


<?php
   

    $sq1="SELECT * from cust where id=$iden";
    $quer=mysqli_query($conn,$sq1);
    $sql1=mysqli_fetch_array($quer);
    $sq1="SELECT * from cust where id=$riden";
    $quer=mysqli_query($conn,$sq1);
    $sql2=mysqli_fetch_array($quer);
    if(($amount)<0)
    {
      echo "amount is less than zero. Can't be transferred.";
    }
    else if(($amount)==0)
    {
      echo "amount is equal to zero. Invalid entry.";
    }
    else if (($amount)>$sql1['netbal'])
    {
      echo "Amount can't be transferred. It is greater than your net balance!!!";
    }
    else
   {
     $newbalance=$sql1['netbal']-$amount;
     $sql3="UPDATE cust SET netbal=$newbalance WHERE id=$iden";
     mysqli_query($conn,$sql3);
     $newbalance=$sql2['netbal']+$amount;
     $sql3="UPDATE cust SET netbal=$newbalance WHERE id=$riden";
     mysqli_query($conn,$sql3);
     $sen=$sql1['name'];
     $rec=$sql2['name'];
     $sql4="INSERT INTO transaction (cid,sender,rid,reciever,amount)VALUES('$iden','$sen','$riden','$rec','$amount')";
    $sql5=mysqli_query($conn,$sql4);
    if($sql5)
    echo "<h1><center>".$_POST['amount']."/- Amount is transferred!!!</center></h1><br>";
    $newbalance=0;
    $amount=0;
   }

?>
<?php
}
?>

 
<button class="button1 "><a href="viewtrans.php">Return</a></button><br><br>
</body>
</html>