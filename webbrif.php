<?php 


$pdt        =    date('Y-m-d');
require('config.php');

$name= mysqli_real_escape_string($connection , $_POST['name']);
$organization=mysqli_real_escape_string($connection , $_POST['organization']);
$website=mysqli_real_escape_string($connection , $_POST['website']);
$phonenum=mysqli_real_escape_string($connection ,$_POST['phonenumber']);
$email=mysqli_real_escape_string($connection ,$_POST['email']);
$desicionmaker=mysqli_real_escape_string($connection ,$_POST['decisionmaker']);
$commentsarea=mysqli_real_escape_string($connection ,$_POST['commentsarea']);
$productservice=mysqli_real_escape_string($connection ,$_POST['productandservice']);
$usp=mysqli_real_escape_string($connection ,$_POST['usp']);
$visionobjectives=mysqli_real_escape_string($connection ,$_POST['visionandobjective']);
$websiteorrevamp=$_POST['newweb'];
$footballincrease=$_POST['footbaccincrease'];
$increaseonlinesell=$_POST['increaseonlinesell'];
$sellproductonline=$_POST['sellproductonline'];
$productiveservice=$_POST['productservice'];
$collectinfo=$_POST['collectinformation'];
$increasemimbership=$_POST['increasemimbership'];
$showportfolio=$_POST['showportfolio'];
$increasevisitor=$_POST['increasevisitors'];
$other=$_POST['other'];

$companyname1=mysqli_real_escape_string($connection ,$_POST['companyname1']);
$comments1=mysqli_real_escape_string($connection ,$_POST['comments1']);
$companyname2=mysqli_real_escape_string($connection ,$_POST['companyname2']);
$comments2=mysqli_real_escape_string($connection ,$_POST['comments2']);
$companyname3=mysqli_real_escape_string($connection ,$_POST['companyname3']);
$comments3=mysqli_real_escape_string($connection ,$_POST['comments3']);
$productcompetition=mysqli_real_escape_string($connection ,$_POST['productcompetition']);
$permissiontotrade=mysqli_real_escape_string($connection ,$_POST['permissiontotrade']);
$Imagewebsite=$_POST['imgwebsite'];
$websitecontant=$_POST['websitecontant'];
$furtherinfor=mysqli_real_escape_string($connection ,$_POST['furtherinformation']);

$funct=$_POST['functionalityblog'];
$fun="";
foreach($funct as $functionalities){

    $fun .= $functionalities.", ";

}
//missing

$alreadydoman=mysqli_real_escape_string($connection ,$_POST['alreadydomain']);
$Firstname=mysqli_real_escape_string($connection ,$_POST['fname']);
$loginipinfor=mysqli_real_escape_string($connection ,$_POST['logininformation']);
$otherinfo=mysqli_real_escape_string($connection ,$_POST['ifno']);


$mainpage=mysqli_real_escape_string($connection ,$_POST['mainpage']);
$subpage=mysqli_real_escape_string($connection ,$_POST['subpage']);
$homepage=mysqli_real_escape_string($connection ,$_POST['homepage']);
$formpage=mysqli_real_escape_string($connection ,$_POST['formpage']);
$aboutus=mysqli_real_escape_string($connection ,$_POST['aboutus']);
$aboutus1=mysqli_real_escape_string($connection ,$_POST['aboutus1']);
$contactus=mysqli_real_escape_string($connection ,$_POST['contactus']);
$conactus1=mysqli_real_escape_string($connection ,$_POST['contactus1']);
$revies=mysqli_real_escape_string($connection ,$_POST['revies']);
$revies1=mysqli_real_escape_string($connection ,$_POST['revies1']);
$howmanyproduct=mysqli_real_escape_string($connection ,$_POST['howmanyproduct']);
$clientbuyproduc=mysqli_real_escape_string($connection ,$_POST['clientbuyproduct']);
$usingpaypal=mysqli_real_escape_string($connection ,$_POST['usingpaypal']);
$shoporshopies=mysqli_real_escape_string($connection ,$_POST['shoporshopes']);
$storecontrol=mysqli_real_escape_string($connection ,$_POST['stoccontrol']);
$accountpackages=mysqli_real_escape_string($connection ,$_POST['accountpackage']);
$foreigncurrency=mysqli_real_escape_string($connection ,$_POST['foregioncurrencies']);
$websitetheme=mysqli_real_escape_string($connection ,$_POST['websitetheme']);


$websitetheme1=mysqli_real_escape_string($connection ,$_POST['websitetheme1']);
$websitetheme2=mysqli_real_escape_string($connection ,$_POST['websitetheme2']);
$colorschame=mysqli_real_escape_string($connection ,$_POST['colorscheme']);
$colorschame1=mysqli_real_escape_string($connection ,$_POST['colorscheme1']);
$colorschame2=mysqli_real_escape_string($connection ,$_POST['colorscheme2']);
$fontsize=mysqli_real_escape_string($connection ,$_POST['fontsize']);
$fontsize1=mysqli_real_escape_string($connection ,$_POST['fontsize1']);
$fontsize2=mysqli_real_escape_string($connection ,$_POST['fontsize2']);
$apprc=$_POST['approachable'];
$aproach="";

foreach($apprc as $aprchable){
    $aproach .= $aprchable .", ";

}

$mantanance=$_POST['maintanance1'];

$leavecomments=$_POST['leavecomments'];
$cms1=$_POST['cms1'];
$anyanimation=mysqli_real_escape_string($connection ,$_POST['anyanimation']);

$facebook=$_POST['facebook'];
$twiter=$_POST['twiter'];
$instagram=$_POST['insta'];
$pintrest=$_POST['pintrest'];
$linkedin=$_POST['linkedin'];
$othersocialmedia=$_POST['othersoial'];
$othercomments=$_POST['othercomments'];

$link1=mysqli_real_escape_string($connection ,$_POST['link1']);
$link2=mysqli_real_escape_string($connection ,$_POST['link2']);
$link3=mysqli_real_escape_string($connection ,$_POST['link3']);
$link4=mysqli_real_escape_string($connection ,$_POST['link4']);
$link5=mysqli_real_escape_string($connection ,$_POST['link5']);
$link6=mysqli_real_escape_string($connection ,$_POST['link6']);
$link7=mysqli_real_escape_string($connection ,$_POST['link7']);
$link8=mysqli_real_escape_string($connection ,$_POST['link8']);
$link9=mysqli_real_escape_string($connection ,$_POST['link9']);
$mediamanagement=mysqli_real_escape_string($connection ,$_POST['mediamanagement']);
$anyothercomments=mysqli_real_escape_string($connection ,$_POST['anycomments']);
$anyothercomments1=mysqli_real_escape_string($connection ,$_POST['anycomments1']);
$anyothercomments2=mysqli_real_escape_string($connection ,$_POST['anycomments2']);
$anyothercomments3=mysqli_real_escape_string($connection ,$_POST['anycomments3']);
$anyothercomments4=mysqli_real_escape_string($connection ,$_POST['anycomments4']);
$complatedetail=mysqli_real_escape_string($connection ,$_POST['fulldetail']);




$sql="INSERT INTO `webbrif`(`name`,`organizatio`,`websitename`, `phonenumber`, `email`, `dicisionmaker`, `commentsarea`, `productionser`, `usp`, `visionobjectives`, `newweb`, `footballincrease`, `increaseonlinesell`, `sellproductiononline`, `productiveservice`, `collectioninfo`, `increasemimbership`, `showportfolio`, `increasevisitor`, `other`, `companyname1`, `comments1`, `companyname2`, `comments2`, `companyname3`, `comments3`, `productcompetition`, `permissiontotrade`, `imagewebsite`, `websitecontant`,`FurtherInfo`, `Functionalities`, `alreadydoman`, `firstname`, `loginip`, `otherinfor`, `mainpage`, `Subpage`, `homepage`, `formpage`, `aboutus`, `aboutus1`, `contactus`, `contactus1`, `revies`, `revoes1`, `howmanyproduct`, `clientbuyerproduct`, `usingpaypal`, `shoporshopies`, `storecontrol`, `accountpackages`, `foreigncurrency`, `websitetheme`, `websitetheme1`, `websitetheme2`, `colorscheme`, `colorscheme1`, `colorscheme2`, `fontsize`, `fontsize1`, `fontsize2`,`approachable`, `mantanance`, `leavecomments`, `cms1`, `anyanimation`, `facebook`, `twitter`, `instagram`, `pintrest`, `linkedin`, `othersocialmedia`, `othercommentsnow`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `mediamanagement`, `anyothercomments`, `anyothercomments1`, `anyothercomments2`, `anyothercomments3`, `anyothercomments4`, `complatedetails`) 
VALUES ('$name','$organization','$website','$phonenum','$email','$desicionmaker','$commentsarea','$productservice','$usp','$visionobjectives','$websiteorrevamp','$footballincrease','$increaseonlinesell','$sellproductonline','$productiveservice','$collectinfo','$increasemimbership','$showportfolio','$increasevisitor','$other','$companyname1','$comments1','$companyname2','$comments2','$companyname3','$comments3','$productcompetition','$permissiontotrade','$Imagewebsite','$websitecontant','$furtherinfor','$fun','$alreadydoman','$Firstname','$loginipinfor','$otherinfo','$mainpage','$subpage','$homepage','$formpage','$aboutus','$aboutus1','$contactus','$conactus1','$revies','$revies1','$howmanyproduct','$clientbuyproduc','$usingpaypal','$shoporshopies','$storecontrol','$accountpackages','$foreigncurrency','$websitetheme','$websitetheme1','$websitetheme2','$colorschame','$colorschame1','$colorschame2','$fontsize','$fontsize1','$fontsize2','$aproach','$mantanance','$leavecomments','$cms1','$anyanimation','$facebook','$twiter','$instagram','$pintrest','$linkedin','$othersocialmedia','$othercomments','$link1','$link2','$link3','$link4','$link5','$link6','$link7','$link8','$link9','$mediamanagement','$anyothercomments','$anyothercomments1','$anyothercomments2','$anyothercomments3','$anyothercomments4','$complatedetail')";

mysqli_query($connection,$sql);



$to = "marketing@superlogodesigns.com";
$subject = "Super Logo Designs | Logo Brief Form filled by $name";

$message = "
<html>
<head>
<title>Logo Brief Form</title>
</head>
<body>

<table border='1' width='70%' align='center'>
    <tr>
        <td colspan='2'>
            <h1 align='center'>Super Logo Designs | Logo Brief Form</h1>
        </td>
    </tr>
<tr>
<td style='font-weight: bold'>Submit Date:</td>
<td>$pdt</td>
</tr>
<tr>
<td style='font-weight: bold'>Contact Name:</td>
<td>$name</td>
</tr><tr>
<td style='font-weight: bold'>Email:</td>
<td>$email</td>
</tr><tr>
<td style='font-weight: bold'>Phone:</td>
<td>$phonenum</td>
</tr>
<tr>
<td colspan='2' style='font-weight: bold'>Organization:</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$organization</td>
</tr>
<tr>
   <td colspan='2' style='font-weight: bold'>Website :</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$website</td>
</tr>
<tr>
<td colspan='2' style='font-weight: bold'>Any Desicion Maker :</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$desicionmaker</td>
</tr>
<tr>
<td colspan='2' style='font-weight: bold'>Over View Of The Company :</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$commentsarea</td>
</tr>
<tr>
<td colspan='2' style='font-weight: bold'>Product & Services your company provide :</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$productservice</td>
</tr>
<tr>
   <td colspan='2' style='font-weight: bold'>Unique Sales Proposition :</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$usp</td>
</tr>
<tr>
   <td colspan='2' style='font-weight: bold'> vision & objectives of your website :</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$visionobjectives</td>
</tr>
<tr>
   <td colspan='2' style='font-weight: bold'>new webiste or revamp :</td>
</tr>
<tr>
   <td colspan='2'>&nbsp;&nbsp;$websiteorrevamp</td>
</tr>
<tr>
    <td colspan='2' style='font-weight: bold'Increase footbal to your premises?:</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$footballincrease</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Increase Business by online sell :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$increaseonlinesell</td>
</tr>


<tr>
   <td colspan='2' >&nbsp;&nbsp;$footballincrease</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Sell Products Online? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$sellproductonline</td>
</tr>

<tr>
   <td colspan='2' >&nbsp;&nbsp;$footballincrease</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Promote a new product or service? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$productiveservice</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Collect information electronically :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$collectinfo</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Increase membership/loyalty/support? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$increasemimbership</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Show a portfolio of work/Product :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$showportfolio</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Increase visitors numbers? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$increasevisitor</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Other? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$other</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold'Company Name :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$companyname1</td>
</tr>
<tr>
    <td colspan='2' style='font-weight: bold'Comments :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$comments1</td>
</tr>
<tr>
    <td colspan='2' style='font-weight: bold'Company Name :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$companyname2</td>
</tr>
<tr>
    <td colspan='2' style='font-weight: bold'Comments :</td>
</tr>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$comments2</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Company Name :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$companyname3</td>
</tr>
<tr>
    <td colspan='2' style='font-weight: bold'Comments :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$comments3</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'What makes your product or service unique? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$productcompetition</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold'Kindly provide us with the scope of your website :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$permissiontotrade</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold'Do you have images do you like to use on your website? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$Imagewebsite</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold' Do you have content for your website? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$websitecontant</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Any further information? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$furtherinfor</td>
</tr>
<tr>
    <td colspan='2' style='font-weight: bold' What functionality fo you need for your website? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$fun</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Do you need other functionality or designs? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$fun</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Do you already have a Domain name(s)? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$alreadydoman</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Do you have hosting Accounts Already?  :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$Firstname</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' If yes Do you have tyhe Login/IP Information? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$loginipinfor</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'  If no, What name(s) would you like? :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$otherinfo</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Main Page :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$mainpage</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Sub Page :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$subpage</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Home Page :</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$homepage</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' About Page:</td>
</tr>
<tr>
   <td colspan='2' >&nbsp;&nbsp;$aboutus</td>
</tr>
<tr>
    <td colspan='2' style='font-weight: bold' Contact Page:</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$contactus</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Revise :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$revies</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold' How many products catagories and product within each catagory do you want to sell :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$howmanyproduct</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Client Buy Your Product :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$clientbuyproduc</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' If you are selling online Do you have a merchant account or will you be using paypal? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$usingpaypal</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold' Do you have a 'real world' Shop or shopes if yes, How many? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$shoporshopies</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold' Do you use stock control software if so which? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$storecontrol</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Is there a need to link into your account if so, Which package? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$accountpackages</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold' Do you have any particular issue concering, foregion currencies, sales tax? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$foreigncurrency</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold' Any Website or theme do you like for design or functionlaity? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$websitetheme1 , $websitetheme2 ,$websitetheme3</td>
</tr>


<tr>
    <td colspan='2' style='font-weight: bold'Color Scheme you want to use? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$colorschame , $colorschame2 ,$colorschame3</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Fonts you want to use? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$fontsize , $fontsize2 ,$fontsize3</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'What functionality fo you need for your website? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$aproach</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Would you ben maintaining the site yourself? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$mantanance</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'If you plan to maintain yourself, you will be needing a CMS? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$cms1</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Do you require any animation, moving images or video clips? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$anyanimation</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Facebook :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$facebook</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Twitter :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$twiter</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Instagram :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$instagram</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'InLinkdin :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$linkedin</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Others :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$othersocialmedia</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Provide links of existing social media? :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$link1,$link2,$link3,$link4,$link5,$link6,$link7,$link8,$link9</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Do you required Social Media Managment and marketing services?  :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$mediamanagement</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'How people find your website?  :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$anyothercomments </br> $anyothercomments1 </br> $anyothercomments2 <br> $anyothercomments3 <br> $anyothercomments4</td>
</tr>

<tr>
    <td colspan='2' style='font-weight: bold'Please provide any information which you think we might need rto know, which has'nt been covered in your answers?  :</td>
</tr>
 <tr>
   <td colspan='2' >&nbsp;&nbsp;$complatedetail</td>
</tr>


</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Super Logo Designs <info@superlogodesigns.com>' . "\r\n";
$headers .= 'Bcc: nasir@internativelabs.com, info@superlogodesigns.com' . "\r\n";

mail($to,$subject,$message,$headers);

//sheikh.raheel@internativelabs.com, dostain.magsi@internativelabs.com, saqib.khan@internativelabs.com, zain.saeed@internativelabs.com, nasir@internativelabs.com

exit;



?>