<!DOCTYPE html>
<html>
<head><title>Login to Yoga Planner</title></head>
<body>
<div class="container">
<form method="post" action="">
<div id="div_login">
<div><input type="text" class="textbox" id="email" name="user_email" placeholder="Email"/></div>
<div><input type="password" class="textbox" id="password" name="user_ps" placeholder="Password"/></div>
<div><input type="submit" value="Submit" name="user_submit" id="user_submit"/>
</div>
</form>
</div>
<style>
/* Container */
.container{
    width:40%;
    margin:0 auto;
}

/* Login */
#div_login{
    border: 1px solid gray;
    border-radius: 3px;
    width: 470px;
    height: 270px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#div_login h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: cornflowerblue;
    color: white;
    font-family: sans-serif;
}

#div_login div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}

#div_login .textbox{
    width: 96%;
    padding: 7px;
}

#div_login input[type=submit]{
    padding: 7px;
    width: 100px;
    background-color: lightseagreen;
    border: 0px;
    color: white;
}
</style>
</body>
</html>