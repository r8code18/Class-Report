<?php

require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf([    'mode' => 'utf-8',
    'format' => [320, 500],'orientation' => 'L']);

$css = file_get_contents('home2.css');
$mpdf->WriteHTML($css,1);
$mpdf->setAutoTopMargin = 'stretch';
  $mpdf->setAutoBottomMargin = 'stretch';
$mpdf->SetHTMLHeader('
<table width="100%" class="theader">
    <tr>
        <td><img src="img\rlms.png" class="row"></td>
        <td><img src="img\rlmsL.png" height="28"></td>
        <td width="33%" class="twidth"><img class="img" src="img\rlmsL.png" height="28"><span><b>LEARNER ATTENDENCE REPORT</b></span>
</td>
    </tr>
</table>
</div>
  <table width="100%">
    <tr>
      <td><img src="img\nsf.png" class="nsf1"></td>
       <td width="20%" align="center"><img src="img\rlmsL.png"></td>
	<td><img src="img\rlmsL.png" height="28"></td>
<td width="8%"><img src="img\mtl1.PNG"  class="mtl">
</td>
    </tr>
	<br/>
</table>');

$mpdf->SetHTMLFooter('
<div style="background-image: linear-gradient(to right,#42f5d7,#42bcf5);color:white;height:30px;
	width:100%;"></div>
');

$mpdf->WriteHTML('<div class="back"><h3>&nbsp;&nbsp;&nbsp;REPORT PERIOD - FROM: 01/10/2020, TO: 30/10/2020</h3></div>
  <br/>', \Mpdf\HTMLParserMode::HTML_BODY, true, false);
  
  $mpdf->WriteHTML('
 <div class="pro"> <h3>&nbsp;&nbsp;&nbsp;PROJECT DETAILS</h3></div>		 
    <table class= "tablepro">
 <tr style="width:30%;height:30%">
 <td class="trproL"><b>Class name</b></td>
  <td class="trproR">Group 1 class</td>
 </tr>
  <tr>
 
 <td class="trproL"><b>GPS Coordinator</b></td>
  <td  class="trproR">
-255 23354 3542 242125 4345434 546 -898633</td>
  </tr>
  
    <tr>
 <td class="trproL"><b>Facilitator Name</b></td>
  <td class="trproR">F3</td>
  </tr>
  
      <tr>
 <td class="trproL"><b>SDaFacilitator</b></td>
  <td class="trproR">081343543544</td>
  </tr>
  
       <tr>
 <td class="trproL"><b>Facitator SETA Number</b></td>
  <td class="trproR">Not Provided</td>
  </tr>
  
    
       <tr>
 <td class="trproL"><b>Client Name</b></td>
  <td class="trproR">NSF</td>
  </tr>
  
         <tr>
 <td class="trproL"><b>SDP</b></td>
  <td class="trproR">MLT Traing and Projects</td>
  </tr>
  
    
         <tr>
 <td class="trproL"><b>Project Name</b></td>
  <td class="trproR">NSFUIF1</td>
  </tr>
  
           <tr>
 <td class="trproL"><b>Province</b></td>
  <td class="trproR">KwaZulu Natal</td>
  </tr>
  
    
           <tr>
 <td class="trproL"><b>Distict Municipality</b></td>
  <td class="trproR">Ugu</td>
  </tr>
  
             <tr>
 <td class="trproL"><b>Local Municipality</b></td>
  <td class="trproR">eThekwini Municipality</td>
  </tr>
  
               <tr>
 <td class="trproL"><b>Learning Pathway</b></td>
  <td class="trproR">Learnership</td>
  </tr>
  
               <tr>
 <td class="trproL"><b>Qualification</b></td>
  <td class="trproR">ND Construction Plumbing</td>
  </tr>
  
                 <tr>
 <td class="trproL"><b>Learners</b></td>
  <td class="trproR">7</td>
  </tr>
 </table>
 <br/>
  </div>
<div class="pro"> <h3>&nbsp;&nbsp;&nbsp;SUMMARY</h3></div>
  
</body>
</html>', \Mpdf\HTMLParserMode::HTML_BODY, false, false);

$mpdf->WriteHTML('<br/>
	<div class="as"> 
        <b>&nbsp;&nbsp;Expected attendance : 154 >> Actual : 93 >> days absent : 61</b></div>
	');

$mpdf->WriteHTML('<div class="pn"><b>NSF | Learner Attendance Report | 2020-11-06 @ 08:26:23 | page: 1 of 1</b></div>');





  $mpdf->WriteHTML('
<br/><br/><br/><br/><br/><br/><div class="back"><h3>&nbsp;&nbsp;&nbsp;PROJECT DETAILS TABLE</h3></div>
  <br/>
	<table width="100%" class="tt">
 <tr class="trt">
 
 <th class="tht">SN</th>
 <th class="tht">Learner Name</th>
 <th class="tht">Learner ID</th>
 <th class="tht">Gender</th>
 <th class="tht">Age</th>
 <th class="tht">Expected attendance</th>
 <th class="tht">Actual attendance</th>
  <th class="tht">Days Absent</th>
 <th class="tht">Contact time</th>
 <th class="tht">Client Name</th>
 <th class="tht">Project Name</th>
 <th class="tht">SDP</th>
  <th class="tht">Site</th>
 </tr>',\Mpdf\HTMLParserMode::HTML_BODY, false, false);
 $table='';
for($i=0; $i<100; $i++){
 $table=$table.'<tr>
 <td class="td1">1</td>
  <td class="td2">Nompumelelo Mzimela</td>
  
  <td class="td2">8707091097081</td>
  
  <td class="td2">Female</td>
  
  <td class="td2">33</td>
  
  <td class="td2">22</td>
  
    <td class="td2">21</td>
  
    <td class="td2">1</td>
    <td class="td2">188:30:09</td>
  
    <td class="td2">NSF</td>
    <td class="td2">NSFUIF1</td>
  
      <td class="td2">MTL Training and Projects</td>
    <td class="td1">1</td>
  
  </tr>';
		   }
		   
$table=$table.'</table>';
$mpdf->WriteHTML($table, \Mpdf\HTMLParserMode::HTML_BODY, false, false);
$mpdf->WriteHTML('<div class="pn"><b>NSF | Learner Attendance Report | 2020-11-06 @ 08:26:23 | page: 1 of 1</b></div>');


$mpdf->Output();


?>
