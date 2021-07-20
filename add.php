<?php
include 'connect.php';
if(isset($_POST['add'])){ 
    $sender=$_POST['sender'];
    $gmail=$_POST['gmail'];
    $netbal=$_POST['netbala'];
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
  center {

    padding:30px 100px;
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
div{
                margin-top:100px;
                margin-left:60px;
                width:40%;
                height:20%;
                background-color:#990033;
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
<button class="button1 "><a href="addcust.php">Return</a></button>

    <?php
        $sq = "INSERT INTO cust (name,email,netbal)VALUES('$sender','$gmail','$netbal')";
        if(mysqli_query($conn, $sq))
        {
           echo "<h2><center><div>NAME-".$_POST['sender']."<br> EMAIL ID-".$_POST['gmail']." <br>NETBAL-".$_POST['netbala']."<br>";
           echo "Data is inserted successfully.</div></center></h2><br>";
          }
        else
         echo "no";
        
    
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
