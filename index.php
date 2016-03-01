<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/html">
<link href='https://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'>
<head style="padding: 0 0 0 0">
    <meta charset="utf-8" />
    <meta name="robots" content="all" />
    <meta name="author" content="Nicholas Wang" />
    <title>Welcome to ssMyAdmin</title>
</head>
<style>
    #frmLogin{
        left: 30%;
        width: 40%;
        border: solid;
        border-color: #b1d2cc;
        border-width: 2px;
        border-radius: 20px;
        background-color: #e4ffff;
        box-shadow: 5px 3px 2px #c2e3dd;
        padding: 0 2% 2% 2%;
        margin:0 auto;
    }
    /*------------------------------------------------------------------------------
    input[type=text]:focus,input[type=password]:focus,textarea:focus {

        transition: border linear .2s, box-shadow linear .5s;
        -moz-transition: border linear .2s, -moz-box-shadow linear .5s;
        -webkit-transition: border linear .2s, -webkit-box-shadow linear .5s;
        outline: none;
        border-color: #00b8f5;
        box-shadow: 0 0 5px #00b8f5;
        -moz-box-shadow: 0 0 5px #00b8f5;
        -webkit-box-shadow: 0 0 5px #00b8f5;
    }
    -------------------------------------------------------------------------------*/
</style>

<body style="background-color: #d3f4ff;padding: 0 0 0 0" >
    <h1 align="center" style="font-family: 'Orbitron',sans-serif;color: #01445b;text-shadow: 2px 2px 2px #002b3a;">ssMyAdmin</h1>
    <div id="frmLogin" align="center">
        <h3 align="center" style="font-family: 'Orbitron',sans-serif;text-shadow: 0px 2px 1px #002b3a;color: #08336c;">Login</h3>
        <hr>
        <form action="auth.php" method="get" lable="Login">
            <p style="font-family: 'Orbitron',sans-serif;text-shadow: 0px 1px 1px #002b3a;color: #12556c;">Username      <input type="text" name="username" size="20" style="font-family: Consolas"/></p>

            <p style="font-family: 'Orbitron',sans-serif;text-shadow: 0px 1px 1px #002b3a;color: #12556c;">Password      <input type="password" name="password" size="20" style="font-family: Consolas"/></p>

            <p><input type="submit" VALUE="Login!" align="center" /></p>

        </form>
    </div>
</body>

<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2016/3/1
 * Time: 12:22
 */
?>