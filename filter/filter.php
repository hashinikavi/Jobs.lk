<?php

//role
if(isset($_REQUEST["role"]) AND $_REQUEST["role"]!="")
{
	$role=$_REQUEST["role"];
	$condition1="AND role='$role' ";
	$role_v=$role;
}
else
{
	$role="None";
	$condition1="";
	$role_v="";
}

//city
if(isset($_REQUEST["city"]) AND $_REQUEST["city"]!="")
{
	$city=$_REQUEST["city"];
	$condition2="AND city='$city' ";
	$city_v=$city;
}
else
{
	$city="None";
	$condition2="";
	$city_v="";
}

?>