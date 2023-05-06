@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<title>Account Page </title>
<style>
body {  
    background-image: url("../img/bg1.png");
    background-repeat: no-repeat;
    background-size: cover;
}


h3, h4{
 text-align: center;
 color: black;
 font-family: Arial;
}

h6{
 
 color: black;
 font-family: Arial;
}

.register {
  margin: auto;
  background: #ffff;
  max-width: 350px;
  padding: 10px;
  border-radius: 4px;
}
input[type=text]{
  display: inline-block;
  width: 100%;
  padding:10px;
  box-sizing: border-box;
  border-radius: 4px;
  border: .5px solid;
  margin: 10px 0;
}
button[type=button]{
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border-radius: 4px;
  border: none;
  background: green;
  font-size: 20px;
  cursor: pointer;
}

button[type=submit]{
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border-radius: 4px;
  border: none;
  background: red;
  font-size: 20px;
  cursor: pointer;
}
.top{

  margin-top: 100px;
}
</style>

</head>
  

<body>


<div class ="top"></div>
<div class="register">

<h3> Let's start a conversation</h3>
  <h4> Email us with any question or inquiries or you may contact us on 09159763226 and we will be happy to assist you.</h4> <br>
<form>
  
<h6>First Name: </h6>
<input type="text" name="Name" />
<br>
<h6>Email:  </h6>
<input type="text" name="email" /><br>
<h6>Subject:  </h6>
<input type="text" name="subject" /><br> 

<h6>Mobile: </h6>
<input type="tel" name="mobile" /><br> 



<h6>Message:</h6>

<textarea name="description" cols="30" rows="10" placeholder="Type here"></textarea>

  <br>


  <button type="button" onclick="validateForm()">Send Email</button>
  
  <div id="message"></div>
</form>
</div>


<script>
  function validateForm() {
    const passwordInput = document.getElementById("password");
    const ageInput = document.getElementById("age");
    const messageElement = document.getElementById("message");
  

  }
  </script>
</body>
</html>


























@endsection
