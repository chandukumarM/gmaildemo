<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My Account</title>
    <link rel="icon" href="images/googlea.jpg" type="image/jpg">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>
  <body>
<div id="topbar"class="container-fluid">
  <div class="col-md-11 col-sm-11">
<img id="brand"class="img-responsive" src="images/brandd.png" alt="logo">
  </div>
  <div id="btn1"class="col-md-1 col-sm-1">
<button class="btn-responsive" id="btn" type="button" name="button">Sign in</button>
  </div>
</div>




  <div class="container-fluid">
    <div class="container text-center">
<h4 id="font">Create Your Google Account</h4>
    </div>
<div class="container">


  <div class="col-md-6"id="ckc">

<div class="col-md-1" id="ppt">
fffff
</div>
<div class="col-md-10">


<div class="text-center hd">
  One account is all you need
</div>
<div class="text-center shd">
  One free account gets you into everything Google.

</div>
<img class="center-block img-responsive" src="images/dfd.PNG" alt="">
<div class="text-center bhb">
  Take it all with you
</div>


<div class="text-center">
  Switch between devices, and pick up wherever you left off.


</div>



<img class="center-block img-responsive"src="images/fgb.PNG" alt=""id="hj">
</div>








<div class="col-md-1"id="ppt">
fff
</div>





    </div>

   <div class="col-md-6" id="ffd" >
     <div class="col-md-2"id="ppp">
       dddd
     </div>

     <div class="col-md-8" id="cccc">


<form class="form-horizontal" onsubmit="return valid()" novalidate id="gmail">
  <label class="" for="name">Name</label>
<div class="form-horizontal">

  <input type="text" id="fname" name="fname" value="" placeholder="  first" onfocus="mc1()" onfocusout="mc2()">
  <input type="text" id="lname" value="" placeholder="  last" onfocus="lc()" onfocusout="lc2()">
  <span id="name_error" style="color:red;display:none">you can't leave this empty</span>
</div>
<label for="">Choose your username</label>
<div class="form-horizontal">
  <input type="email" id="email" class="form-control" value="" onfocus="em()"onfocusout="em2()" data-toggle="popover"  data-content="
  You will get an email with a link to confirm that this address is yours  " data-placement="left">
  <span id="email_error" style="color:red;display:none;z-index:2;position:relative">you can't leave this empty</span>

  <span id="inside">@gmail.com</span>
  <br><br>
  <span ><a id="eek" href="#">I prefer to use my current email address</a> </span>
</div>


<label  id="pbr" for="">Create new passwords</label>
<div class="form-horizontal">
  <input type="password" value="" id="pwd" onfocus="pw()" onfocusout="pw2()"data-toggle="popover"  data-content="the password must contain 8 digits atleat one special charater include in it " data-placement="left">
  <span id="pwd_error" style="color:red;display:none">you can't leave this empty</span>
</div>
<label for="">Confirm your passwords</label>
<div class="form-horizontal">
  <input type="password" id="cpwd" value="" onfocus="cpw()"onfocusout="cpw2()" data-toggle="popover"  data-content="the password must be matched with the new password." data-placement="left">
  <span id="cpwd_error" style="color:red;display:none">you can't leave this empty</span>
</div>
<label for="">Birthday</label>
<div class="form-horizontal row">
  <div class="col-md-3">
<select class="btn-default" name="" id="vbr">
  <option value="">January</option>
  <option value="">February</option>
</select>
  </div>

  <!---<div class="dropdown col-md-3" id="vbr">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" onfocus="mnt()" onfocusout="mnt2()">Month
    <span class=""><i class="fa fa-sort" aria-hidden="true"></i></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Select month</a></li>
        <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">January</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">February</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">March</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">April</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">May</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">June</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">July</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">August</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">september</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">October</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">November</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">December</a></li>


    </ul>
  </div>--->
<div class="form-horizontal col-md-9" id="vbs">
  <input class="text-center" type="" id="day"value="" onfocus="da()" placeholder="day" onfocusout="da2()" data-toggle="popover"  data-content="Enter date" data-placement="bottom">
  <input class="text-center"type="text" id="year" value="" onfocus="yea()" placeholder="year" onfocusout="yea2()"data-toggle="popover"  data-content="Enter year" data-placement="bottom">
</div>

</div>
<span id="bday_error" style="color:red;display:none">you can't leave this empty</span>


<label for="">Gender</label><br>
<select class="col-md-9" id="gender" onfocus="gdr()" onfocusout="gdr2()" data-toggle="popover"  data-content="Select gender " data-placement="left">
    <option>I am .....</option>
     <option>male</option>
      <option>female</option>
       <option>other</option>

    </select>
    <div id="hid"class="col-md-3">
this ismy
    </div>
  <label for="">Mobile Number</label>


 <div class="input-group">
<select class="btn-default" name="" id="mcss">
  <option >
  <a href="" type="image/svg"><img class="ind" src="images/in.svg" alt="">India</a></option>
    <option >
      <img class="ind" src="images/us.svg" alt="">America</option>
      <option >
        <img class="ind" src="images/nz.svg" alt="">Newziland</option>
        <option >
          <img class="ind" src="images/us.svg" alt="">Sierra Leone</option>

</select>
            <!--    <div class="input-group-btn bs-dropdown-to-select-group">
                    <button id="btt1"type="button" class="btn btn-default dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown" >
                        <span data-bind="bs-drp-sel-label"><img class="ind"src="images/in.svg" alt=""></span>
                        <input type="hidden" name="selected_value" data-bind="bs-drp-sel-value" value="">
<span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" style="">
                        <li data-value="1"><a href="#"> <img class="ind" src="images/in.svg" alt="">India </a></li>
  <li role="presentation" class="divider"></li>
                        <li data-value="2"><a href="#"> <img class="ind" src="images/us.svg" alt="">America </a></li>
                        <li data-value="3"><a href="#"> <img class="ind" src="images/nz.svg" alt="">Newziland</a></li>
                        <li data-value="4"><a href="#"><img class="ind" src="images/sl.svg" alt="">Sierra Leone </a></li>
                    </ul>
                </div>---->
                  <input type="tel" value="+91"  id="mob" onfocus="mb()" onfocusout="mb2()" data-toggle="popover"  data-content="Enter your 10 digits mobile number"  data-placement="bottom">

            </div>
            <span id="mob_error" style="color:red;display:none">you can't leave this empty</span>
            <label for="">Your current email address</label>
<br>  <input type="email" name="" id="cemail" onfocus="ce()" onfocusout="ce2()" data-toggle="popover"  data-content="please enter your current email address(Optional) " data-placement="left" required>
<span id="cemail_error" style="color:red;display:none">you can't leave this empty</span> <br>
<label for="">Location</label>
<br>
<select class="col-md-9" id="dfd"  data-toggle="popover"  data-content="Select your cuntry " data-placement="left">
    <option>India</option>
     <option>Us</option>
      <option>Russia</option>
       <option>England</option>

    </select>
  <br>
  <div class="col-md-offset-9"id="next">
    <button type="submit" name="button" id="bttt" onclick="return validate()">Next step</button>
  </div>


    </form>
<span id="fgr">
  <a href="#">  Learn more</a> about why we ask for this information.</span>
     </div>

     <div class="col-md-2"id="ppt">
       ddd
     </div>

    </div>
</div>

  </div>

<script type="text/javascript">
  function valid() {
    var fname=document.getElementById('gmail').fname;
    alert(fname);
      var lname=document.getElementById('gmail').lname;
        var email=document.getElementById('gmail').email;
          var pwd=document.getElementById('gmail').pwd;
            var cpwd=document.getElementById('gmail').cpwd;
              var menu1=document.getElementById('gmail').menu1;
                var day=document.getElementById('gmail').day;
                  var year=document.getElementById('gmail').year;
                    var mob=document.getElementById('gmail').mob;
                      var cemail=document.getElementById('gmail').cemail;


if(fname.value==''){

  if(lname.value==''){

    if(email.value==''){
      if(pwd.value==''){
        if(cpwd.value==''){
    if(menu1.value==''){
  document.getElementById("name_error").style.display="block";
  document.getElementById("fname").style.borderColor="#E34234";
  document.getElementById("name_error").style.display="block";
  document.getElementById("lname").style.borderColor="#E34234";
  document.getElementById("email_error").style.display="block";
  document.getElementById("email").style.borderColor="#E34234";
  document.getElementById("pwd_error").style.display="block";
  document.getElementById("pwd").style.borderColor="#E34234";
  document.getElementById("cpwd_error").style.display="block";
  document.getElementById("cpwd").style.borderColor="#E34234";
  document.getElementById("bday_error").style.display="block";
  document.getElementById("menu1").style.borderColor="#E34234";

  document.getElementById("day").style.borderColor="#E34234";
    document.getElementById("mob_error").style.display="block";
      document.getElementById("cemail_error").style.display="block";

  document.getElementById("year").style.borderColor="#E34234";

  document.getElementById("gender").style.borderColor="#E34234";
  document.getElementById("mob").style.borderColor="#E34234";
  document.getElementById("cemail").style.borderColor="#E34234";
  return false;
}
}
}
}
}
}
return true;


  }
</script>

<script type="text/javascript">
function mc1()
{

  document.getElementById("gmail").fname.style.borderColor="grey";
  console.log("work");

}
function lc()
{

  document.getElementById("lname").style.borderColor="#5bc0de";
  document.getElementById("name_error").style.display="none";

}

function em()
{
  document.getElementById("email").style.borderColor="#5bc0de";
  document.getElementById("email_error").style.display="none";
}
function pw()
{
  document.getElementById("pwd").style.borderColor="#5bc0de";
  document.getElementById("pwd_error").style.display="none";
console.log("work");
}

function cpw()
{
  document.getElementById("cpwd").style.borderColor="#5bc0de";
  document.getElementById("cpwd_error").style.display="none";
console.log("work");
}

function da()
{
  document.getElementById("day").style.borderColor="#5bc0de";

console.log("work");
}

function yea()
{
  document.getElementById("year").style.borderColor="#5bc0de";
  document.getElementById("bday_error").style.display="none";
}
function gdr()
{
  document.getElementById("gender").style.borderColor="#5bc0de";
}
function mb()
{
    document.getElementById("mob").style.borderColor="#5bc0de";
    document.getElementById("mob_error").style.display="none";
}
function ce()
{
  document.getElementById("cemail").style.borderColor="#5bc0de";
  document.getElementById("cemail_error").style.display="none";
}
function mnt()
{
    document.getElementById("menu1").style.borderColor="#5bc0de";
}
</script>


<script type="text/javascript">
function mc2()
{
if(fname.value==""){
document.getElementById("name_error").style.display="block";
	document.getElementById("fname").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("fname").style.borderColor = "#5bc0de";
	console.log(" fname working");
	}
}

function lc2()
{
if(lname.value==""){
document.getElementById("name_error").style.display="block";
	document.getElementById("lname").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("lname").style.borderColor = "#5bc0de";
	console.log(" lname working");
	}
}


function em2()
{
if(email.value==""){
document.getElementById("email_error").style.display="block";
	document.getElementById("email").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("email").style.borderColor = "#5bc0de";
	console.log("email working");
	}
}

function pw2()
{
if(pwd.value==""){
document.getElementById("pwd_error").style.display="block";
	document.getElementById("pwd").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("pwd").style.borderColor = "#5bc0de";
	console.log("pwd working");
	}
}
function cpw2()
{
if(cpwd.value==""){
document.getElementById("cpwd_error").style.display="block";
	document.getElementById("cpwd").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("cpwd").style.borderColor = "#5bc0de";
	console.log(" cpwd working");
	}
}
function yea2()
{
if(year.value==""){
document.getElementById("bday_error").style.display="block";
	document.getElementById("year").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("year").style.borderColor = "#5bc0de";
	console.log(" year working");
	}
}

function gdr2()
{
if(gender.value==""){

	document.getElementById("gender").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("gender").style.borderColor = "#5bc0de";
	console.log(" gender working");
	}
}

function da2()
{
if(day.value==""){

	document.getElementById("day").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("day").style.borderColor = "#5bc0de";
	console.log(" day working");
	}
}

function gdr2()
{
if(gender.value==""){

	document.getElementById("gender").style.borderColor = "#E34234";
	}else
	{
	document.getElementById("gender").style.borderColor = "#5bc0de";
	console.log(" fname working");
	}
}

function mb2()
{
if(mob.value==""){

	document.getElementById("mob").style.borderColor = "#E34234";
  document.getElementById("mob_error").style.display="block";

  }else
	{
	document.getElementById("mob").style.borderColor = "#5bc0de";
	console.log(" mob working");
	}
}


function ce2()
{
if(cemail.value==""){

	document.getElementById("cemail").style.borderColor = "#E34234";
  document.getElementById("cemail_error").style.display="block";

  }else
	{
	document.getElementById("cemail").style.borderColor = "#5bc0de";
	console.log(" cemail working");
	}
}


function mnt2()
{
if(menu1.value==""){

	document.getElementById("menu1").style.borderColor = "#E34234";

  }else
	{
	document.getElementById("menu1").style.borderColor = "#5bc0de";
	console.log(" menu1 working");
	}
}






</script>

<!--<script type="text/javascript">


function first()
{
  document.getElementById("bttt").disabled=true;
  console.log("working")
}
</script>-->
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>

<script type="text/javascript">
function validate() {
  var password=document.getElementById("pwd").value;
  var confirmPassword=document.getElementById("cpwd").value;
  if(password != confirmPassword){
  alert("passwords do not match");
   return false;
}
return true;
}

</script>

<div class="mbr">
  hhhhhh
</div>
<div class="container-fluid footer">
  <div class="col-md-1 text-center eee">
    google
  </div>

  <div class="col-md-9 xxx">
  <a class="dgd"href="#">privacy & terms</a>
  </div>
  <div class="col-md-2 text-left">
    <img id="nbk"src="images/unil.png" alt="">
<select class="" name="" id="baby">
  <option value="">English(united states)</option>
  <option value="">Hindi</option>
  <option value="">Telugu</option>
  <option value="">urdu</option>
</select>
  </div>
</div>



  </body>
</html>
