
<script type="text/javascript">

function validation()
{

  var cpassword= document.getElementById("cpassword");
  var npassword=document.getElementById("npassword");
  var rnpassword=document.getElementById("rnpassword");


  if(cpassword.value.trim()=="")
  {
    document.getElementById("currentPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(cpassword.value.length<8)
    {
    document.getElementById("currentPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("currentPasswordErr").innerHTML= "";
    }
}

  if(npassword.value.trim()=="")
  {
    document.getElementById("newPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(npassword.value.length<8)
    {
    document.getElementById("newPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("newPasswordErr").innerHTML= "";
    }
}

 if(rnpassword.value.trim()=="")
 {
 document.getElementById("retypePasswordErr").innerHTML= "*Confirm Password is required";
   return false;
 }
 else {
    if(!(npassword.value==rnpassword.value))
    {
      document.getElementById("retypePasswordErr").innerHTML= "*Password and confirm password have to be same";
    return false;
    }
    else {
      document.getElementById("retypePasswordErr").innerHTML= "";
    }

}


return true;

}


function checkCurrentpassword()
{
  var cpassword= document.getElementById("cpassword");

  if(cpassword.value.trim()=="")
  {
    document.getElementById("currentPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(cpassword.value.length<8)
    {
    document.getElementById("currentPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("currentPasswordErr").innerHTML= "";
    }
}
}

function checkNewpassword()
{
  var npassword= document.getElementById("npassword");
  if(npassword.value.trim()=="")
  {
    document.getElementById("newPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(npassword.value.length<8)
    {
    document.getElementById("newPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("newPasswordErr").innerHTML= "";
    }
}
  }


function checkRetypepassword()
{
    var rnpassword= document.getElementById("rnpassword");

    if(rnpassword.value.trim()=="")
    {
    document.getElementById("retypePasswordErr").innerHTML= "*Confirm Password is required";
      return false;
    }
    else {
       if(!(npassword.value==rnpassword.value))
       {
         document.getElementById("retypePasswordErr").innerHTML= "*Password and confirm password have to be same";
       return false;
       }
       else {
         document.getElementById("retypePasswordErr").innerHTML= "";
       }

   }
}

</script>
