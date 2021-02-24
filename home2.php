<?php

require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf([    'mode' => 'utf-8',
    'format' => [320, 500],'orientation' => 'L']);


$css = file_get_contents('index1.css');
$css = file_get_contents('styless.css');
$mpdf->WriteHTML($css,1);
$mpdf->SetHTMLHeader('

<table width="100%" style="background-color:#f2f2f2;border-left: 5px solid #7CCDE8;border-right: 5px solid #3cb4dd;">
    <tr>
        <td><img src="img\rlms.png" style="width:20%; left:20%; top:-90%;"></td>
        <td  ><img src="img\rlmsL.png" height="28"></td>
        <td width="33%" style="text-align: right;font-size:12px;color:#282C65;"><img style="vertical-align:middle" src="img\rlmsL.png" height="28"><span><b>LEARNER ATTENDENCE REPORT</b></span>
</td>
    </tr>
</table>
</div>
  <table width="100%">
    <tr>
      <td><img src="img\nsf.png" style="width:180px;"></td>
        <td width="15%" align="center"><img src="img\rlmsL.png"></td>
		<td  ><img src="img\rlmsL.png" height="28"></td>
        <td width="8%"><img src="img\mtl1.PNG"  style="width:140px;">
</td>
    </tr>
	<br/>
</table>');

//$mpdf->WriteHTML($html);

  $mpdf->WriteHTML('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
 <link rel="stylesheet" href="./index1.css">	
</div>
    </div>
    <div ><br/><br/><br/><br/>
    <div ><br/><br/><br/><br/>
 <div style="background-image: linear-gradient(to right,#42f5d7,#42bcf5);color:white;height:20px;
	width:100%;font-family:calibri"><h3>REPORT PERIOD - FROM: 01/10/2020, TO: 30/10/2020</h3></div><br/>
				 <div style="background-color:#282C65; color:white;font-family:calibri"><h3>PROJECT DETAILS</h3></div>
				 
    <table style= "margin: 20px auto;
  table-layout: auto;font-family:calibri;width:100%">
 <tr style=" width:30%;height:30%">
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:14px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Class name</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">Group 1 class</td>
 </tr>
  <tr>
  
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>GPS Coordinator</b></td>
  <td  style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">
-255 23354 3542 242125 4345434 546 -898633</td>
  </tr>
    <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Facilitator Name</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">
F3</td>
  </tr>
  
      <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>SDaFacilitator</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">081343543544</td>
  </tr>
  
       <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Facitator SETA Number</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">Not Provided</td>
  </tr>
  
    
       <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Client Name</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">NSF</td>
  </tr>
  
         <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>SDP</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">MLT Traing and Projects</td>
  </tr>
  
    
         <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Project Name</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">NSFUIF1</td>
  </tr>
  
           <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Province</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">KwaZulu Natal</td>
  </tr>
  
    
           <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Distict Municipality</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">Ugu</td>
  </tr>
  
             <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Local Municipality</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">eThekwini Municipality</td>
  </tr>
  
               <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Learning Pathway</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">Learnership</td>
  </tr>
  
               <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Qualification</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">ND Construction Plumbing</td>
  </tr>
  
                 <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Learners</b></td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:12px;
  padding: 8px;background-color: #dddddd;color:#282C65;">7</td>
  </tr>
 </table>
 <br/>
  </div>
				 <div style="background-color:#282C65; color:white;font-family:calibri"><h3>SUMMARY</h3></div>
				 <br/>
  
</body>
</html>', \Mpdf\HTMLParserMode::HTML_BODY, false, false);

$mpdf->WriteHTML('<br/>
	<div style="background-color: #dddddd;height:40px;
	width:100%;font-weight: normal;
    padding: auto;
	color:#282C65;
	font-family:calibri;"> 
        <b>Expected attendance : 154 >> Actual : 93 >> days absent : 61</b></div>
	');

$mpdf->WriteHTML('<div style="text-align: right;color:black;font-family:calibri "><b>NSF | Learner Attendance Report | 2020-11-06 @ 08:26:23 | page: 1 of 1</b></div>');
$mpdf->SetHTMLFooter('
<div style="background-image: linear-gradient(to right,#42bcf5,#42f5d7);color:white;height:20px;
	width:100%;"></div>
');

  $mpdf->WriteHTML('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css"><br/><br/><br/><br/></br></br><br/><br/></br></br><br/><br/>

<div >
  <div>
   

	  
  </br></br><br/><br/></br><br/><br/></br></br><br/><br/></br><br/><br/></br></br><br/><br/>
   <div style="background-image: linear-gradient(to right,#42f5d7,#42bcf5);color:white;height:20px;
	width:100%;font-family:calibri"><h3>PROJECT DETAILS TABLE </h3></div><br/>
	
   <table width="100%" style="color:white;height:100%">
 <tr style="background-color:#282C65;color:white;font-family:calibri">
 
 <th style="font-size:13px;border-left: 5px solid #7CCDE8;">SN</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Learner Name</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Learner ID</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Gender</th>
  <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Age</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Expected attendance</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Actual attendance</th>
  <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Days Absent</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Contact time</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Client Name</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Project Name</th>
 <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">SDP</th>
  <th style="font-size:13px;height: 50px;width: 100px;border-left: 5px solid #7CCDE8;">Site</th>
 </tr>
 
 <!--mpdf 1 mpdf-->
          <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: center;
    font-size:14px;font-family:calibri;height: 100px;
	width: 100px;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Nompumelelo Mzimela</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;
    font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">8707091097081</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Female</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">33</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">21</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">188:30:09</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSF</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSFUIF1</td>
  
      <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:12px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">MTL Training and Projects</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  
  </tr>
 
 
  <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: center;
    font-size:12px;height: 100px;
	width: 100px;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">2</td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Maxwell Ntuli</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">7512305353085</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Male</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">44</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">0</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">0:00:00</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSF</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSFUIF1</td>
  
      <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:12px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">MTL Training and Projects</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  
  </tr>
 
   <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: center;
    font-size:12px;height: 100px;
	width: 100px;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">3</td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Nothando Mlaba</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">9009201518083</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Female</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">30</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">20</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">2</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">163:37:41</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSF</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSFUIF1</td>
  
      <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:12px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">MTL Training and Projects</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  </tr>
 
 
  
   <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;height: 100px;
	width: 100px;
  padding: 8px;background-color: white;color:#282C65;">4</td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Syanda Nzimandea</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">9006166655088</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Male</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">30</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">9</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">13</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">66:02:34</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSF</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSFUIF1</td>
  
      <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:12px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">MTL Training and Projects</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  
  </tr>
  
  
   <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;height: 100px;
	width: 100px;
  padding: 8px;background-color: white;color:#282C65;">5</td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Smanga Salemane</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">9105135758082</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Male</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">29</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">19</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">3</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">161:30:26</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSF</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSFUIF1</td>
  
      <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:12px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">MTL Training and Projects</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  
  </tr>
  
     <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;height: 100px;
	width: 100px;
  padding: 8px;background-color: white;color:#282C65;">6</td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Sphu Vikilahle</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">8010165346082</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Male</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">40</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">20</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">20</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">06:26:23</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSF</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSFUIF1</td>
  
      <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:12px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">MTL Training and Projects</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  
  </tr>
  
     <tr>
 <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;height: 100px;
	width: 100px;
  padding: 8px;background-color: white;color:#282C65;">7</td>
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Penny Khumalo</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">9403050336087</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">Femaleale</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">26</td>
  
  <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">22</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">0</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">0</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">181:34:52</td>
  
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSF</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">NSFUIF1</td>
  
      <td style="
	border: 1px solid #dddddd;
  text-align: left;font-size:12px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">MTL Training and Projects</td>
    <td style="
	border: 1px solid #dddddd;
  text-align: center;font-size:14px;font-family:calibri;
  padding: 8px;background-color: white;color:#282C65;">1</td>
  
  </tr>
  
  
 
 </table>
</div>
  </div>
    </div>
</div>


</body>
</html>', \Mpdf\HTMLParserMode::HTML_BODY, false, false);
$mpdf->WriteHTML('<div style="text-align: right;color:black;font-family:calibri;"><b>NSF | Learner Attendance Report | 2020-11-06 @ 08:26:23 | page: 1 of 1</b></div>');
$mpdf->SetHTMLFooter('
<div style="background-image: linear-gradient(to right,#42f5d7,#42bcf5);color:white;height:30px;
	width:100%;"></div>
');

$mpdf->Output();
?>