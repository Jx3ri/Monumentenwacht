<?php
include('db_connect.php');
date_default_timezone_set('Europe/Amsterdam');
$datum = date("Y/m/d");

$datetime1 = new DateTime($datum);
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%a');

$query=$conn->prepare('SELECT * FROM tblplanningantwoord');
$query->execute();
$result=$query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as &$data){
    $TijdstipGecontacteerd = $data['fldTijdstipGecontacteerd'];
    $ReminderTijdstip = date('Y-m-d', strtotime($TijdstipGecontacteerd. ' + 4 days'));
    
    $datetime1 = new DateTime($datum);
    $datetime2 = new DateTime($ReminderTijdstip);
    $interval = $datetime1->diff($datetime2);
    $DateDifference = $interval->format('%a');
    echo $DateDifference;

    if ($DateDifference = 0) {
        
    }
}


$to = "mikevc@live.be, jv120501@stud.miniemeninstituut.be";
$subject = "test reminder";
$message = "
<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'><head>
<meta http-equiv='Content-Type' content='text/html; charset=us-ascii'>
<meta name='Generator' content='Microsoft Word 15 (filtered medium)'>
<!--[if !mso]><style>v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style><![endif]--><style><!--
/* Font Definitions */
@font-face
    {font-family:'Cambria Math';
    panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
    {font-family:Calibri;
    panose-1:2 15 5 2 2 2 4 3 2 4;}
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
    {margin:0cm;
    margin-bottom:.0001pt;
    font-size:11.0pt;
    font-family:'Calibri',sans-serif;}
a:link, span.MsoHyperlink
    {mso-style-priority:99;
    color:#0563C1;
    text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
    {mso-style-priority:99;
    color:#954F72;
    text-decoration:underline;}
p.msonormal0, li.msonormal0, div.msonormal0
    {mso-style-name:msonormal;
    mso-margin-top-alt:auto;
    margin-right:0cm;
    mso-margin-bottom-alt:auto;
    margin-left:0cm;
    font-size:11.0pt;
    font-family:'Calibri',sans-serif;}
p.clr-red, li.clr-red, div.clr-red
    {mso-style-name:clr-red;
    mso-margin-top-alt:auto;
    margin-right:0cm;
    mso-margin-bottom-alt:auto;
    margin-left:0cm;
    font-size:11.0pt;
    font-family:'Calibri',sans-serif;}
span.E-mailStijl19
    {mso-style-type:personal-compose;
    font-family:'Calibri',sans-serif;
    color:windowtext;}
.MsoChpDefault
    {mso-style-type:export-only;
    font-size:10.0pt;}
@page WordSection1
    {size:612.0pt 792.0pt;
    margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
    {page:WordSection1;}
--></style><!--[if gte mso 9]><xml>
<o:shapedefaults v:ext='edit' spidmax='1026' />
</xml><![endif]--><!--[if gte mso 9]><xml>
<o:shapelayout v:ext='edit'>
<o:idmap v:ext='edit' data='1' />
</o:shapelayout></xml><![endif]-->
</head>
<body lang='NL-BE' link='#0563C1' vlink='#954F72'>
<div class='WordSection1'>
<p class='clr-red' style='margin:0cm;margin-bottom:.0001pt'><span lang='EN-US' style='font-size:18.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#E30033'>Herinnering bouwkundige inspectie<o:p></o:p></span></p>
<table class='MsoNormalTable' border='0' cellspacing='3' cellpadding='0' width='100%' style='width:100.0%'>
<tbody>
<tr>
<td width='30%' style='width:30.0%;padding:0cm 0cm 0cm 0cm'>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif'><img width='350' height='450' style='width:3.6458in;height:4.6875in' id='_x0000_i1026' src='https://gallery.mailchimp.com/1f4c8883dc0caa0fddc6794fa/images/8bde9f32-a98f-4f84-83cb-03ea51d8f12c.jpg'></span><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p></o:p></span></p>
</td>
<td width='100%' style='width:100.0%;padding:0cm 0cm 0cm 12.25pt'>
<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:&quot;Arial&quot;,sans-serif'>Geachte heer, mevrouw,<o:p></o:p></span></p>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p>&nbsp;</o:p></span></p>
<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:&quot;Arial&quot;,sans-serif'>Enkele dagen geleden heeft u een e-mailbericht van ons ontvangen met een datumvoorstel voor een bouwkundige inspectie. Mogelijk is dit bericht aan uw aandacht ontsnapt of bent u nog niet in de gelegenheid geweest om te reageren. Onderstaand het eerder aan u gestuurde bericht. Wij stellen uw reactie zeer op prijs.<o:p></o:p></span></p>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p>&nbsp;</o:p></span></p>
<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:&quot;Arial&quot;,sans-serif'>Wij helpen u als monumenteneigenaar graag bij het onderhouden van uw pand. Naast het beoordelen van de staat van onderhoud, voeren onze monumentenwachters kleinschalig noodherstel uit en geven zij u gerichte adviezen voor de korte en lange termijn.<o:p></o:p></span></p>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p>&nbsp;</o:p></span></p>
<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:&quot;Arial&quot;,sans-serif'>Binnenkort komen wij graag bij u langs om uw monument {adres, woonplaats object} bouwkundig te inspecteren. Wij stellen voor om uw monument op {datum en tijdstip} te bezoeken. Als ons voorstel u schikt, dan verzoeken wij u vriendelijk om dat kenbaar te maken door op onderstaande bevestiging te klikken<o:p></o:p></span></p>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p>&nbsp;</o:p></span></p>
<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:&quot;Arial&quot;,sans-serif'>Komt ons voorstel niet gelegen, dan kunt u contact met ons opnemen voor het plannen van een nieuwe afspraak. Wij zijn op werkdagen tussen 08.00 uur en 17.00 uur telefonisch bereikbaar op nummer 0411-643366. U kunt ons ook bereiken via planning@mwnb.nl.<o:p></o:p></span></p>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p>&nbsp;</o:p></span></p>
<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:&quot;Arial&quot;,sans-serif'>Indien bovenstaande gegevens incompleet of incorrect zijn dan verzoeken wij u om de gewenste wijzigingen aan te geven in een reactie op dit e-mailbericht.<o:p></o:p></span></p>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p>&nbsp;</o:p></span></p>
<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:&quot;Arial&quot;,sans-serif'>Monumentenwacht Noord-Brabant<o:p></o:p></span></p>
</td>
</tr>
</tbody>
</table>
<p class='MsoNormal' align='center' style='text-align:center'><span lang='EN-US' style='font-family:&quot;Arial&quot;,sans-serif;display:none'><o:p>&nbsp;</o:p></span></p>
<div align='center'>
<table class='MsoNormalTable' border='0' cellspacing='0' cellpadding='0' width='100%' style='width:100.0%'>
<tbody>
<tr>
<td style='padding:7.5pt 7.5pt 7.5pt 7.5pt;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px'>
<div align='center'>
<table class='MsoNormalTable' border='0' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<td width='100%' style='width:100.0%;background:#43991B;padding:11.25pt 15.0pt 11.25pt 15.0pt'>
<p class='MsoNormal' align='center' style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;text-align:center'>
<span style='font-family:&quot;Arial&quot;,sans-serif'>&nbsp; <a href='' target='_blank'><span style='font-size:12.0pt;color:white;border:none windowtext 1.0pt;padding:0cm;background:#43991B'>Ik ga akkoord met het datumvoorstel</span></a>&nbsp;
<o:p></o:p></span></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<p class='MsoNormal'><span style='font-family:&quot;Arial&quot;,sans-serif;display:none'><o:p>&nbsp;</o:p></span></p>
<table class='MsoNormalTable' border='0' cellspacing='3' cellpadding='0' width='100%' style='width:100.0%'>
<tbody>
<tr>
<td width='33%' style='width:33.0%;padding:0cm 0cm 0cm 0cm'></td>
<td width='33%' style='width:33.0%;padding:0cm 0cm 0cm 0cm'></td>
<td width='33%' style='width:33.0%;padding:0cm 0cm 0cm 0cm'>
<p class='MsoNormal' align='center' style='text-align:center'><span style='font-family:&quot;Arial&quot;,sans-serif'><img border='0' width='206' height='72' style='width:2.1458in;height:.75in' id='_x0000_i1025' src='https://gallery.mailchimp.com/1f4c8883dc0caa0fddc6794fa/images/1a181368-5741-47db-a035-16be0355e932.png' alt='https://gallery.mailchimp.com/1f4c8883dc0caa0fddc6794fa/images/1a181368-5741-47db-a035-16be0355e932.png'></span><span style='font-family:&quot;Arial&quot;,sans-serif'><o:p></o:p></span></p>
</td>
</tr>
</tbody>
</table>
<p class='MsoNormal'><span lang='EN-US'><o:p>&nbsp;</o:p></span></p>
<p class='MsoNormal'><span lang='EN-US'><o:p>&nbsp;</o:p></span></p>
</div>
</body>
</html>
";

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

mail($to, $subject, $message, implode("\r\n", $headers));

?>