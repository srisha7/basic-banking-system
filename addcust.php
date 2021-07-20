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
input{
    width:40%;
    height:5%;
    border:1px;
    border-radius:5px;
    padding:8px 15px 8px 15px;
    margin:10px 0px 15px 0px;
    box-shadow:1px 1px 2px 1px grey;
    margin-left:400px;
}
.button:hover {opacity: 0.5;}
        </style>
	<title> Sparks Foundation Bank</title>
</head>
<body class="background" >
  <div>
<button class="button1 "><a href="home.php">Return</a></button><br><br>
</div>

<form action="add.php" method="POST">
   <br> <input type="text" name="sender" placeholder="Enter sender name">
    <br><input type="text" name="gmail" placeholder="Enter email id">
    <br><input type="text" name="netbala"  placeholder="enter money in account">
    <br><input type="submit" class="button" name="add" value="Add Customer" onclick="myFunction();" />
    <script>
  function myFunction()
  {
    document.out_print.action = "add.php";
    document.out_print.submit();                
  }
  </script>
</form>

</body>
</html>