<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create Resident</title>
<meta name="Generator" content="Serif WebPlus X6">
<meta name="viewport" content="width=1000">
<script type="text/javascript">
function validate_form_21( form )
{
    if( ltrim(rtrim(form.elements['id'].value,' '),' ')=="" ) { alert("Please enter some text"); form.elements['id'].focus(); return false; }
    if( isNaN( parseInt( form.elements['id'].value ) ) ) { alert("Please enter 13 digit ID number?"); form.elements['id'].focus(); return false; }
    if( ltrim(rtrim(form.elements['firstname'].value,' '),' ')=="" ) { alert("Please give your name"); form.elements['firstname'].focus(); return false; }
    if( ltrim(rtrim(form.elements['surname'].value,' '),' ')=="" ) { alert("Please give your surname"); form.elements['surname'].focus(); return false; }
    if( ltrim(rtrim(form.elements['mobile'].value,' '),' ')=="" ) { alert("Please give your mobile telephone number"); form.elements['mobile'].focus(); return false; }
    if( isNaN( parseInt( form.elements['mobile'].value ) ) ) { alert("Please give a valid telephone number"); form.elements['mobile'].focus(); return false; }
    if( ltrim(rtrim(form.elements['email'].value,' '),' ')=="" ) { alert("Please enter some text"); form.elements['email'].focus(); return false; }
    if(!ValidateEmail(form.elements['email'].value)) { alert("Please give your e-mail address"); form.elements['email'].focus(); return false; }
    if( ltrim(rtrim(form.elements['owner_tenant'].value,' '),' ')=="" ) { alert("Please select whether the resident is the owner or tenant?"); form.elements['owner_tenant'].focus(); return false; }
    if( ltrim(rtrim(form.elements['username'].value,' '),' ')=="" ) { alert("Please enter a user name?"); form.elements['username'].focus(); return false; }
    if( ltrim(rtrim(form.elements['password'].value,' '),' ')=="" ) { alert("Please enter some text"); form.elements['password'].focus(); return false; }
    return true;
}
</script>
<style type="text/css">
body{margin:0;padding:0;}
*{filter:inherit;}
.Normal-P
{
    margin:0.0px 0.0px 0.0px 0.0px; text-align:center; font-weight:400;
}
.Normal-C
{
    font-family:"Tahoma", sans-serif; font-size:12.0px; line-height:1.17em;
}
.Normal-C-C0
{
    font-family:"Tahoma", sans-serif; font-size:13.0px; line-height:1.23em;
}
.Slider-Heading-12-C
{
    font-family:"Trebuchet MS", sans-serif; color:#343434; font-size:21.0px; line-height:1.29em;
}
.Body-C
{
    font-family:"Arial", sans-serif; font-size:15.0px; line-height:1.13em;
}
.Normal-C-C1
{
    font-family:"Verdana", sans-serif; font-size:15.0px; line-height:1.20em;
}
.Body-C-C0
{
    font-family:"Arial", sans-serif; font-weight:700; font-size:16.0px; line-height:1.25em;
}
.Button1,.Button1:link,.Button1:visited{background-image:url('wpimages/wpc1587cb8_06.png');background-position:0px 0px;text-decoration:none;display:block;position:absolute;}
.Button1:focus{outline-style:none;}
.Button1:hover{background-position:0px -50px;}
.Button1:active{background-position:0px -25px;}
.Button1 span,.Button1:link span,.Button1:visited span{color:#ffffff;font-family:Arial,sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:none;font-style:normal;left:1px;top:4px;width:76px;height:16px;font-size:13px;display:block;position:absolute;cursor:pointer;}
.Button2,.Button2:link,.Button2:visited{background-image:url('wpimages/wpa8e54749_06.png');background-position:0px 0px;text-decoration:none;display:block;position:absolute;}
.Button2:focus{outline-style:none;}
.Button2:hover{background-position:0px -68px;}
.Button2:active{background-position:0px -34px;}
.Button2 span,.Button2:link span,.Button2:visited span{color:#808080;font-family:Arial,sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:none;font-style:normal;left:35px;top:4px;width:78px;height:17px;font-size:13px;display:block;position:absolute;cursor:pointer;}
.Button2:hover span{color:#ffffff;}
.Button2:active span{color:#ffffff;}
</style>
<script type="text/javascript" src="wpscripts/jspngfix.js"></script>
<link rel="stylesheet" href="wpscripts/wpstyles.css" type="text/css"><script type="text/javascript">
var blankSrc = "wpscripts/blank.gif";
</script>
</head>

<body text="#000000" style="background:#dadcd5 url('wpimages/wp1e9c91f6_06.jpg') repeat scroll center center; height:830px;">
<div style="background-color:#faf0c3;margin-left:auto;margin-right:auto;position:relative;width:1000px;height:830px;">
<img src="wpimages/wp1b8b2dd2_06.png" border="0" width="960" height="1" id="pcrv_591" alt="" onload="OnLoadPngFix()" style="position:absolute;left:20px;top:59px;">
<img src="wpimages/wpb215761b_06.png" border="0" width="408" height="61" id="txt_151" title="" alt="Montecello Country Estate&#10;" onload="OnLoadPngFix()" style="position:absolute;left:11px;top:3px;">
<img src="wpimages/wp1d6edaf9_06.png" border="0" width="1000" height="62" id="qs_203" alt="" onload="OnLoadPngFix()" style="position:absolute;left:0px;top:768px;">
<div id="txt_1" style="position:absolute;left:40px;top:804px;width:923px;height:18px;overflow:hidden;">
<p class="Normal-P"><span class="Normal-C">Montecello Country Estate <a href="admin_login.html" style="color:#000000;text-decoration:none;">©</a> 2016 - All rights reserved. </span></p>
</div>
<div id="txt_334" style="position:absolute;left:39px;top:780px;width:923px;height:19px;overflow:hidden;">
<p class="Normal-P"><span class="Normal-C-C0">Home &nbsp;&nbsp;| &nbsp;&nbsp;Events &nbsp;&nbsp;| &nbsp;&nbsp;Bookings &nbsp;&nbsp;| &nbsp;&nbsp;Metro Fibre &nbsp;&nbsp;| &nbsp;&nbsp;Rules &amp; Guidelines &nbsp;&nbsp;| &nbsp;&nbsp;Contact
    Us</span></p>
</div>
<a href="resident_admin.html" id="btn_39" class="Button1" style="position:absolute;left:900px;top:20px;width:79px;height:25px;"><span>Logout</span></a>
<div id="nav_431" style="position:absolute;left:12px;top:136px;width:166px;height:170px;background-image:url('wpimages/wp3ffdbfb4_06.png');">
    <a href="resident_admin.html" id="nav_431_B1" class="Button2" style="display:block;position:absolute;left:9px;top:26px;width:148px;height:34px;"><span>Residents</span></a>
    <a href="clubhouse_booking.html" id="nav_431_B2" class="Button2" style="display:block;position:absolute;left:9px;top:68px;width:148px;height:34px;"><span>Club&nbsp;House</span></a>
    <a href="reporting.html" id="nav_431_B3" class="Button2" style="display:block;position:absolute;left:9px;top:110px;width:148px;height:34px;"><span>Reporting</span></a>
</div>
<img src="wpimages/wpbb4f56d6_06.png" border="0" width="959" height="41" id="qs_814" alt="" onload="OnLoadPngFix()" style="position:absolute;left:21px;top:67px;">
<div id="frag_2" style="position:absolute;left:809px;top:76px;width:159px;height:25px;">
    
    	<?php 
    		//displaying the name and surname of the logged-in user using the session variable
    		session_start(); 
    		echo "Hi  " .$_SESSION['name']. '</br></br>';
    	?>
</div>
<div id="txt_18" style="position:absolute;left:24px;top:72px;width:273px;height:35px;overflow:hidden;">
<p class="Wp-Slider-Header-P"><span class="Slider-Heading-12-C">Add Resident to Database</span></p>
</div>
<form id="form_21" name="create_resident" onsubmit="return validate_form_21(this)" action="scripts/create_resident.php" accept-charset="UTF-8" method="post" target="_self" enctype="application/x-www-form-urlencoded" style="margin:0;position:absolute;left:288px;top:141px;width:427px;height:356px; background-color:#eee79e;">
<div id="txt_410" style="position:absolute;left:24px;top:20px;width:93px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_22"><span class="Body-C">ID Number</span></label></p>
</div>
<input type="text" id="edit_22" name="id" maxlength="13" value="" style="position:absolute; left:156px; top:19px; width:217px;">
<div id="txt_2" style="position:absolute;left:24px;top:50px;width:102px;height:16px;overflow:hidden;">
<p class="Wp-Normal-P"><label for="edit_1"><span class="Normal-C-C1">First name</span></label></p>
</div>
<input type="text" id="edit_1" name="firstname" maxlength="50" value="" style="position:absolute; left:157px; top:49px; width:217px;">
<div id="txt_13" style="position:absolute;left:24px;top:81px;width:90px;height:16px;overflow:hidden;">
<p class="Wp-Normal-P"><label for="edit_14"><span class="Normal-C-C1">Surname</span></label></p>
</div>
<input type="text" id="edit_14" name="surname" maxlength="50" value="" style="position:absolute; left:157px; top:80px; width:217px;">
<div id="txt_6" style="position:absolute;left:24px;top:112px;width:96px;height:16px;overflow:hidden;">
<p class="Wp-Normal-P"><label for="edit_8"><span class="Normal-C-C1">Mobile</span></label></p>
</div>
<input type="text" id="edit_8" name="mobile" maxlength="20" value="" style="position:absolute; left:157px; top:112px; width:216px;">
<div id="txt_1" style="position:absolute;left:24px;top:142px;width:118px;height:16px;overflow:hidden;">
<p class="Wp-Normal-P"><label for="edit_2"><span class="Normal-C-C1">E-mail Address</span></label></p>
</div>
<input type="text" id="edit_2" name="email" maxlength="100" value="" style="position:absolute; left:157px; top:142px; width:215px;">
<div id="txt_411" style="position:absolute;left:24px;top:208px;width:118px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="combo_25"><span class="Body-C">Owner or Tenant</span></label></p>
</div>
<select id="combo_25" name="owner_tenant" size="1" style="position:absolute; left:157px; top:208px;">
    <option value="Owner">Owner</option>
    <option value="Tenant">Tenant</option>
</select>
<div id="txt_412" style="position:absolute;left:24px;top:238px;width:104px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_23"><span class="Body-C">Username</span></label></p>
</div>
<input type="text" id="edit_23" name="username" value="" style="position:absolute; left:157px; top:238px; width:212px;">
<div id="txt_413" style="position:absolute;left:24px;top:268px;width:95px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="edit_24"><span class="Body-C">Password</span></label></p>
</div>
<input type="text" id="edit_24" name="password" value="" style="position:absolute; left:157px; top:268px; width:212px;">
<input type="submit" style="position:absolute; left:288px; top:311px; width:81px; height:22px;" id="butn_3" value="Submit">
<div id="txt_414" style="position:absolute;left:23px;top:174px;width:106px;height:15px;overflow:hidden;">
<p class="Wp-Body-P"><label for="combo_26"><span class="Body-C">Stand Number</span></label></p>
</div>
<select id="combo_26" name="combo_standno" size="1" style="position:absolute; left:158px; top:174px;">
    <option value="694">694</option>
    <option value="695">695</option>
    <option value="696">696</option>
    <option value="697">697</option>
    <option value="698">698</option>
    <option value="699">699</option>
    <option value="700">700</option>
    <option value="701">701</option>
    <option value="702">702</option>
    <option value="703">703</option>
</select>
</form>
<div id="frag_4" style="position:absolute;left:348px;top:573px;width:309px;height:74px;">
    	<?php 
    		//displays error messages when creating residents on the database - via session variable
    		SESSION_START();

                if(!empty(isset($_SESSION['registration']))){
                        
                        $_SESSION['registration'] = $_SESSION['registration'];

    			echo $_SESSION['registration'];
                 }

       ?>
</div>
<div id="txt_415" style="position:absolute;left:292px;top:519px;width:184px;height:24px;overflow:hidden;">
<p class="Wp-Body-P"><span class="Body-C-C0">Display</span></p>
</div>
<img src="wpimages/wp1c840aa7_06.png" border="0" width="426" height="130" id="qs_839" alt="" onload="OnLoadPngFix()" style="position:absolute;left:290px;top:544px;">
<script type="text/javascript" src="wpscripts/jsValidation.js"></script>
<table id="nav_431_B1M" style="visibility:hidden;"><tbody>
<tr><td><a id="nav_431_B1M_L1" href="create_resident_gui.php" title="">Create Resident</a></td></tr>
<tr><td><a href="update_resident_gui.php" title="">Update Resident</a></td></tr>
<tr><td><a href="delete_resident_gui.php" title="">Delete Resident</a></td></tr>
<tr><td><a href="reset_password_gui.php" title="">Reset Password</a></td></tr>
</tbody></table>
<table id="nav_431_B2M" style="visibility:hidden;"><tbody>
<tr><td><a href="create_clubhouse.html" title="">Create Booking</a></td></tr>
<tr><td><a href="cancel_clubhouse.html" title="">Cancel Booking</a></td></tr>
</tbody></table>
<table id="nav_431_B3M" style="visibility:hidden;"><tbody>
<tr><td><a href="stand_list.html" title="">Stands</a></td></tr>
<tr><td><a href="resident_list.html" title="">Residents</a></td></tr>
<tr><td><a href="tennis_report.html" title="">Tennis Court</a></td></tr>
<tr><td><a href="squash_report.html" title="">Squash Court</a></td></tr>
<tr><td><a href="clubhouse_report.html" title="">Club House</a></td></tr>
</tbody></table>
<script type="text/javascript" src="wpscripts/jsMenu.js"></script>
<script type="text/javascript">
wpmenustack.setCurrent(['nav_431_B1M_L1']);
wpmenustack.setRollovers([['nav_431_B1','nav_431_B1M'],['nav_431_B2','nav_431_B2M'],['nav_431_B3','nav_431_B3M']]);
wpmenustack.setMenus(['nav_431_B1M','nav_431_B2M','nav_431_B3M'],{"m_menuStyle":{"border":'0px none'},"m_rowStyle":{"border":'0px none'},"m_linkNormalStyle":{"fontSize":'13px',"fontFamily":'"Trebuchet MS",sans-serif',"textAlign":'center',"color":'#e6e6e6',"backgroundColor":'#4d4d4d',"fontWeight":'normal',"textDecoration":'none',"fontStyle":'normal'},"m_linkRolloverStyle":{"color":'#333333',"backgroundColor":'#991414',"textDecoration":'none'},"m_linkPopupStyle":{"backgroundImage":'url(wpimages/wp41d4fac7.gif)'},"m_linkRolloverPopupStyle":{"backgroundImage":'url(wpimages/wpdcfabd28.gif)'}});
</script>
</div>
</body>
</html>