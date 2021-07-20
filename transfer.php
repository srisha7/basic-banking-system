<!DOCTYPE html>
<html>
<head> 
<title> Sparks Foundation Bank</title>
<style>
     .background{
    background:rgba(0, 0, 0, 0.192)url('i/bg4.jpg');
	background-size:100% ;
	background-blend-mode: darken;
    }
    a, a:hover, a:focus, a:active {
      text-decoration: none;
      color: inherit;
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
  color: white!important;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  opacity:1;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  max-width:200px;
  margin-left:600px;
  margin-top:40px;
}
form{
    margin-top:40px;
}
div{
    font-size:60px;
    color:#990033;
    margin-left:500px;
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
    </style>
</head>
<body class="background">

<button class="button1 "><a href="custview.php">Return</a></button>    
<div> <b>Money Transfer</b></div>

<form action="money.php" method="POST">
    <input type="text" name="cid"  placeholder="Enter sender id"> 
   <br> <input type="text" name="sender" placeholder="Enter sender name">
    <br><input type="text" name="rid" placeholder="Enter reciever id">
    <br><input type="text" name="reciever"  placeholder="Enter reciever name">
    <br><input type="text" name="amount" placeholder="Enter amount">
    <br><input type="submit" class="button" name="transfer" value="Transfer" onclick="myFunction();" />
  <script>
  function myFunction()
  {
    document.out_print.action = "money.php";
    document.out_print.submit();                
  }
  </script>

</form>
</body>
</html> 
