<?php
include 'connect.php';
if(isset($_POST['view'])){ 
    $name=$_POST['sname'];
?>
<html>
    <head>
         <style>
    .background{
    background:rgba(0, 0, 0, 0.192)url('i/bg4.jpg') ;
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
a, a:hover, a:focus, a:active {
      text-decoration: none;
      color: inherit;
}
.button:hover {opacity: 0.5;}
        </style>
</head>
<body class="background">
    <br>
<button class="button1 "><a href="custview.php">Return</a></button>
<table class = "center ">
    <tr>
    <th>Transaction ID</th>
    <th>Transaction Date</th>
    <th>Sender ID</th>
    <th>Sender Name</th>
    <th>Reciever ID</th>
    <th>Reciever Name</th>
    <th>Amount</th>
    </tr>
    <tbody>
    <?php
        $sql = "SELECT * FROM transaction WHERE sender = '$name'";
        $records=$conn->query($sql);
        while($out=$records->fetch_assoc())
        {
             echo "<tr>";
             echo "<td>".$out['transid']."</td>";
             echo "<td>".$out['tdate']."</td>";
             echo "<td>".$out['cid']."</td>";
             echo "<td>".$out['sender']."</td>";
             echo "<td>".$out['rid']."</td>";
             echo "<td>".$out['reciever']."</td>";
             echo "<td>".$out['amount']."</td>";
             echo "</tr>";
        }
    ?>

          <script type="text/javascript">
            alert("Okay");
          </script>

    <?php
    }
    ?>
</tbody>
</table>
</body>
</html>
