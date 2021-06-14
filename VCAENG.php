<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/lines.css">
	<link rel="stylesheet" href="css/slides.css">
	<link rel="stylesheet" href="css/buttons.css">
	<link rel="stylesheet" href="css/compare.css">
	<link rel="stylesheet" href="css/compatible.css">
	<link rel="stylesheet" href="css/text.css">
<title>Videosec newsletter</title>
<?php
   $LPag = ""; global $LPag ; if (!empty($_GET['lp' ])) $LPag = $_GET ['lp' ]; if (!empty($_POST['lp' ])) $LPag = $_POST['lp' ];
   session_start();
$counter_name = "../stat/IQhello".$LPag.date("ymd").".txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
// if(!isset($_SESSION['hasVisited'])){
//  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
// }
?>
</head>
<body>
	<section class="slide2" id="header">
		<table align="center" border="0" cellpadding="0" cellspacing="0" width="800">
			<tbody>
				<tr>
					<p style="font-size:14px" align="center" class="text-stlye1">This newsletter can be <a href="https://videosec.com/hirlevel/hirlevel2021-17.php">viewed as a webpage here.</a></p>
				</tr>
				<tr>
					<td align="left" valign="middle" width="50%">
						<div style="vertical-align: center; margin: 10px;">
							<a href="https://videosec.com/?lp=NLhead" target="_blank"><img alt="Videosec" src="https://videosec.com/hirlevel/2021-17/Vidsec-logo-kerettel.jpg"  /></a>
						</div>
					</td>
					<td align="right"  width="50%">
					<a href="https://www.facebook.com/Videosec1998/" target="_blank"><img alt="facebook" src="https://videosec.com/hirlevel/2021-17/f_logo_RGB-White_1024.png"/>
					</a> &nbsp; 
					<a href="https://www.linkedin.com/company/videosec" target="_blank"><img alt="linkedin" src="https://videosec.com/hirlevel/2021-17/LI-In-Bug.png" />
					</a> &nbsp; 
					<a href="https://www.youtube.com/channel/UC3wmm71X_VlZtk6DzVng0Pw" target="_blank"><img alt="youtube channel" src="https://videosec.com/hirlevel/2021-17/youtube_social_circle_white.png" />
					</a>
				</td>
				</tr>
			</tbody>
		</table>
	</section>
<section id="osszefoglalo" class="slide1">
	<table align="center"> 
		<tbody>
		  <tr>
			<td colspan="2" align="center">
				<table style="width: 650px;">
					<tr align="center">
						<td>
							<h1 class=" lines-left-stlye1">
							SmartIQ Cameras
							</h1>
						</td>
					</tr>
				</table>
			</td>
		  </tr>
		</tbody>
	</table>
	<table align="center">
		<tbody>
		  <tr>
			<td class="container" colspan="2">
					<img src="./2021-17/ALL-CAMS.jpg" alt="Nature" >
			</td>
		  </tr>
		  <tr class="shadow">
			<td align="center" class="table-eloszlas-2">
				<a href="#VCA-header"><button class="button-big button-blue">VCA</button></a>
			</td>
			<td align="center" class="table-eloszlas-2">
				<a href="#starlight-header"><button class="button-big button-gray">STARLIGHT</button></a>
			</td>
		  </tr>
		</tbody>
	</table>
</section>
<section id="VCA-header" class="slide2" >
	<table align="center" >
		<tbody>
			<tr>
				<td colspan="3">
					<p>&nbsp;</p></td>
			</tr>
			<tr>
				<td align="center">
					<a href="https://www.youtube.com/watch?v=pYlA1BHHDyE&t=6s"><button class="button button-black">Settings</button></a>
				</td>
				<td align="center">
					<img src="https://videosec.com/hirlevel/2021-17/VCA-section.jpg" alt="VCA_cimszo" >
				</td>
				<td align="center">
					<a href="https://www.youtube.com/watch?v=pYlA1BHHDyE&t=36s"><button class="button button-black">Sample-footage</button></a>
				</td>
			</tr>
		</tbody>
	</table>
	<p>&nbsp;</p>
	<table align="center" >
		<tbody>
		  	<tr>
				<td class="table-eloszlas-2">
					<img src="https://videosec.com/hirlevel/2021-17/VCA-LOGO.jpg" alt="varoshaza">
				</td>
				<td >
					<p class="text text-left text-stlye1">The Camera uses its Dual Core processor to analyze the footage it is recording.<br><br> These new features are <i>completely compatible with existing VCA recording devices,</i> along with their alarm and push notification settings.</p>
				</td>
			</tr>
		</tbody>
	</table>
</section>
<section id="VCA-object" class="slide1" >
	<table align="center" >
		<tbody >
			<tr >
				<td colspan="2" align="center">
					<table style="width: 630px;">
					<tr align="center">
						<td>
							<h2 class=" lines-left-stlye1 lines-bottom-stlye1">
							Object-based filtering
							</h2>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		  	<tr>
				<td >
					<p class="text-left text-stlye1">The VCA system can differentiate between people, cars and bicycles <br> (even without movement). <br><br> Based on these categories there is an option to set individual alert-conditions for each object type.</p>
				</td>
				<td class="table-eloszlas-2">
					<img src="https://videosec.com/hirlevel/2021-17/Objektum-alapu-felismeres.jpg" alt="varoshaza">
				</td>
			</tr>
		</tbody>
	</table>
</section>
<section id="vonalatlepes" class="slide3" >
	<table align="center">
		<tbody>
		  	<tr>
				<td rowspan="2" class="table-eloszlas-2" align="center" >
					<img class="img2" src="https://videosec.com/hirlevel/2021-17/vonalatlepes.jpg" alt="vonalatlepes">
				</td>
				<td class="light-textblock" >
					<h2 class=" lines-left-stlye4 lines-bottom-stlye4">Line Crossing</h2>
					<p class="text-stlye3"> We can set 4 line-crossing alerts with object-based filtering. <br><br>There is also an option to set the minimal and maximal height of the people/vehicle in pixels.</p>
				</td>
			</tr>
		</tbody>
		</table>
		<table align="center">
			<tr>
				<td>
					<a href="https://youtu.be/pYlA1BHHDyE?t=301"><button class="button button-pelda-dark"><img src="./2021-17/youtube_social_circle_dark.png" alt=""></button></a>
				</td>
				<td class="light-textblock-sm">	
					<p class="text-stlye3"> Recording playback during an alert, for example, if a person crosses a line in a forbidden direction.</p>
				</td>
			</tr>
		</table>
</section>
<section id="terulet-behatolas" class="slide1" >
	<table align="center">
		<tbody>
			<tr>
				<td class=" lines-left-stlye1 lines-bottom-stlye1">
					<h2 align="center">Area intrusion</h2>
				</td>
				<td class="gray-textblock-sm">	
					<p class="text-stlye1"> We can set 4 area alerts with object-based filtering.<br><br>There is also an option to set the minimal and maximal height of the people/vehicle in pixels, <br><br>with adjustable alarm tolerance from 1 to 10 seconds.</p>
				</td>
			</tr>
		  	<tr >
				<td colspan="2" align="center">
					<img class="img2" src="https://videosec.com/hirlevel/2021-17/teruletbehatolas.jpg" alt="vonalatlepes">
				</td>
			</tr>
		</tbody>
		</table>
		<table align="center">
			<tr>
				<td>
					<a href="https://youtu.be/pYlA1BHHDyE?t=78"><button class="button button-pelda-light"><img src="./2021-17/youtube_social_circle_dark.png" alt=""></button></a>
				<td class="gray-textblock-sm">	
					<p class="text-stlye1"> For example, it can be used to detect illegal parking.</p>
				</td>
			</tr>
		</table>
</section>
<section id="peldak" class="slide2" >
	<table align="center">
		<tbody>
			<tr>
			  <td colspan="2" align="center">
				<h1 class="lines-left-stlye1 lines-bottom-stlye1">VCA Use-Case examples</h1>
			  </td>
			</tr>
			<tr>
				<td>
					<img src="https://videosec.com/hirlevel/2021-17/biciklis.jpg" alt="gyalogos">
				</td>
				<td  class="lines-right-stlye1 lines-top-stlye1 lines-left-stlye3 gray-textblock text-right">
					<h2 class="text-stlye2">Cyclist traffic control</h2>
					<p> Detect when a cyclist is going through an Illegal or forbidden road or footpath get an alert/notification and optionally play back a voice message on the device. </p>
					
					<a href="#terulet-behatolas"><button style="margin-bottom: 30px;" class="button button-grayon">Area intrusion</button></a>
				</td>
			</tr>
			<tr>
				<td  class="lines-left-stlye1 gray-textblock " >
					<h2 class="text-stlye2">Proper use Entrances/Exits</h2>
					<p> Detect improper use of an exit or entrance, receive an alert/notification and optionally play back a voice message on the device. </p>
					<a href="#vonalatlepes"><button style="margin-bottom: 30px;" class="button button-grayon">Line Crossing</button></a>

				<td><img src="https://videosec.com/hirlevel/2021-17/gyalogos.jpg" alt="biciklis"></td>
			</tr>
			<tr>
				<td><img src="https://videosec.com/hirlevel/2021-17/egyiranyu.jpg" alt=""></td>
				<td  class="lines-right-stlye1 lines-bottom-stlye1 lines-left-stlye3 gray-textblock text-right">
					<h2 class="text-stlye2">Enforce one-way streets</h2>
					<p> Only get notified/alerted if a vehicle is going in the wrong direction while ignoring cyclist and pedestrians </p>

					<a href="#vonalatlepes"><button style="margin-bottom: 10px;" class="button button-grayon">Line Crossing</button></a>
				</td>
			</tr>
		  </tbody>
		</table>
</section>
<section id="starlight-header" class="slide3" >
	<table align="center" >
		<tbody>
			<tr>
				<td colspan="3">
					<p>&nbsp;</p></td>
			</tr>
			<tr>
				<td align="center">	
					<a href="https://videosec.com/hirlevel/hirlevel2021-15.php#Starlight"><button class="button button-black">Details </button></a>
				</td>
				<td align="center">
					<img src="https://videosec.com/hirlevel/2021-17/starlight-section.jpg" alt="starlight_cimszo" >
				</td>
				<td align="center">
					<a href="https://www.youtube.com/watch?v=eCRckGEOV0A"><button class="button button-black">Sample-footage</button></a>
				</td>
			</tr>
		</tbody>
	</table>
	<p>&nbsp;</p>
	<table align="center">
		<tbody>
		  	<tr>
				<td class="table-eloszlas-2" >
					<img class="img2" src="https://videosec.com/hirlevel/2021-17/varoshaza.jpg" alt="varoshaza">
					<img class="img2" src="https://videosec.com/hirlevel/2021-17/palic.jpg" alt="palic">
				</td>
				<td class="light-textblock" >
					<h2 class=" lines-left-stlye4 lines-bottom-stlye4">Colored recordings <br> 24 hours of the day</h2>
					<p class="text-stlye4"> 
						<br> Starlight cameras are equipped with a Fast Lens and dual-gain sensor. With advanced algorithms they can reproduce colored recordings with close to no-light conditions.
					<br><br> In the case of complete darkness, they used their built in white-LEDs, along with IR-LEDs to improve image quality. </p>
				</td>
			</tr>
		</tbody>
		</table>
</section>
<section id="compare" class="slide1">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="800px&quot;" >
		<tbody>
			<tr>
				<td>
					<div class="container">
						<div class="showcase-card">
							<div class="ex-preview">
								<div class="pixelcompare" data-pixelcompare=""><img src="https://videosec.com/hirlevel/2021-15/blackandwhite.jpg" width="100%" /> <img src="https://videosec.com/hirlevel/2021-15/color.jpg" width="100%" /></div>
							</div>
						</div>
					</div>
					<script>"use strict";!function(){var e=function(e,t){-1==e.className.split(" ").indexOf(t)&&(e.className+=" "+t)},t={default_offset_pct:.5,orientation:"horizontal",overlay:!1,hover:!1,move_with_handle_only:!0,click_to_move:!1,showSlider:!0};document.querySelectorAll("[data-pixelcompare]").forEach(function(i){var n=t.default_offset_pct,a=i;t.hover=i.hasAttribute("data-hover"),t.showSlider=t.hover?i.hasAttribute("data-show-slider"):t.showSlider,t.orientation=i.hasAttribute("data-vertical")?"vertical":"horizontal";var r=a.dataset.pixelcompareOrientation,o=["vertical","horizontal","sides"].includes(r)?r:t.orientation,l="vertical"===o?"down":"left",c="vertical"===o?"up":"right",d=function(t,i,n){var a=document.createElement(i);return e(a,"pixelcompare-wrapper pixelcompare-"+n),t.parentElement.insertBefore(a,t),a.appendChild(t),a}(i,"div",o),s=d.querySelectorAll("img")[0];s.draggable=!1;var p=d.querySelectorAll("img")[1];p.draggable=!1,e(d,"pixelcompare-container"),e(s,"pixelcompare-before"),e(p,"pixelcompare-after");var v=null;if(t.showSlider&&(v=function(t,i){var n=document.createElement("div");e(n,"pixelcompare-handle");var a=document.createElement("span");e(a,"pixelcompare-"+t+"-arrow"),n.appendChild(a);var r=document.createElement("span");return e(r,"pixelcompare-"+i+"-arrow"),n.appendChild(r),n.addEventListener("touchmove",function(e){e.preventDefault()}),n}(l,c),d.appendChild(v)),t.overlay){var h=document.createElement("div");e(h,"pixelcompare-overlay"),d.appendChild(h)}var u=function(e){var t,i,n,a=(t=e,i=s.getBoundingClientRect().width,n=s.getBoundingClientRect().height,{w:i+"px",h:n+"px",wp:100*t,cw:t*i+"px",ch:t*n+"px"});v&&("vertical"===o?v.style.top=a.ch:v.style.left=a.cw),function(e){"vertical"===o?(s.style.clip="rect(0, "+e.w+", "+e.ch+", 0)",p.style.clip="rect("+e.ch+", "+e.w+", "+e.h+", 0)"):"sides"===o?(s.style.clipPath=`polygon(0% ${2*(50-e.wp)}%, ${2*e.wp}% 100%, 0% 100%)`,p.style.clipPath=`polygon(100% ${2*(100-e.wp)}%, ${-2*(50-e.wp)}% 0%, 100% 0%)`):(s.style.clip="rect(0, "+e.cw+", "+e.h+", 0)",p.style.clip="rect(0, "+e.w+","+e.h+","+e.cw+")"),d.style.height=e.h}(a)},m=function(e,t){var i,n,a;return i="vertical"===o?(t-w)/E:(e-f)/g,n=0,a=1,Math.max(n,Math.min(a,i))};window.addEventListener("resize.pixelcompare",function(e){u(n)});var f=0,w=0,g=0,E=0,x=function(t){(t.distX>t.distY&&t.distX<-t.distY||t.distX<t.distY&&t.distX>-t.distY)&&"vertical"!==o?t.preventDefault():(t.distX<t.distY&&t.distX<-t.distY||t.distX>t.distY&&t.distX>-t.distY)&&"vertical"===o&&t.preventDefault(),e(d,"active"),f=d.offsetLeft,w=d.offsetTop,g=s.getBoundingClientRect().width,E=s.getBoundingClientRect().height},y=function(e){var t;t=d,new RegExp("(\\s|^)"+"active"+"(\\s|$)").test(t.className)&&(n=m(e.pageX||e.changedTouches[0].pageX,e.pageY||e.changedTouches[0].pageY),u(n))},L=function(){var e;e="active",d.classList.remove(e)};if(t.hover)d.addEventListener("mouseenter",x),d.addEventListener("mouseleave",L),d.addEventListener("mousemove",y);else{var _=t.move_with_handle_only?v:d;window.addEventListener("mouseup",L),d.addEventListener("mousemove",y),_.addEventListener("mousedown",x),_.addEventListener("touchstart",x),d.addEventListener("touchmove",y),window.addEventListener("touchend",L)}d.querySelector("img").addEventListener("mousedown",function(e){e.preventDefault()}),t.click_to_move&&d.on("click",function(e){f=d.offset().left,w=d.offset().top,g=s.width(),E=s.height(),n=m(e.pageX,e.pageY),u(n)}),window.dispatchEvent(new Event("resize.pixelcompare"))})}();</script>
				</td>
			</tr>
			<tr>
				<td >
					<h2 class=" lines-bottom-stlye1 lines-left-stlye1">Colored recordings in low light conditions</h2>
				</td>
			</tr>
		</tbody>
	</table>
</section>
<section id="compare" class="slide3">
	<table align="center" border="0" cellpadding="0" cellspacing="5px" width="800px&quot;" >
		<tbody>
			<tr>
				<td colspan="5" align="center">
					<h1  class="text-stlye4 ">Videsec IQ Cameras</h1>
				</td>
			</tr>
			<tr>
				<td>
					<a href="https://videosec.com/?lp=nTb&cmdLang=HUN&productid=IPW-2125IQ-40SA">
						<table cellpadding="0" cellspacing="0" style="width: 110px; border-radius: 15px;" class="slide1 shadow">
							<tbody>
							<tr>
								<td>
									<img src="https://videosec.com/hirlevel/2021-17/IPW-2125IQ-40SA.jpg" alt="">
								</td>
							</tr>
							<tr>
								<td><p class="text-stlye1" style="font-size: 16px; text-align: center;">Starlight<br> 5Mpx <br>
								  Fixed Bullet camera<br>
								  4 mm<br><br><br><br><br> 
								  IPW-2125IQ-40SA
								</p></td>
							</tr>
							</tbody>
						</table>
					</a>
				</td>
				<td>
					<a href="https://videosec.com/?lp=nTb&cmdLang=HUN&productid=IPW-2225IQ-40SWX">
						<table cellpadding="0" cellspacing="0" style="width: 110px; border-radius: 15px;" class="slide1 shadow">
							<tbody>
							<tr>
								<td>
									<img src="https://videosec.com/hirlevel/2021-17/IPW-2225IQ-40SWX.jpg" alt="">
								</td>
							</tr>
							<tr>
							  <td><p class="text-stlye1" style="font-size: 16px; text-align: center;">SUPER Starlight <br> 5Mpx <br>
								  Fixed Bullet camera<br>
								  4 mm<br>
								  White LED-el<br><br><br><br> 
								  IPW-2225IQ-40SWX
								</p></td>
							</tr>
							</tbody>
						</table>
					</a>
				</td>
				<td>
					<a href="https://videosec.com/?lp=nTb&cmdLang=HUN&productid=IPW-2128IQ-28WAL">
						<table cellpadding="0" cellspacing="0" style="width: 110px; border-radius: 15px;" class="slide1 shadow">
						<tbody>
						<tr>
							<td>
								<img src="https://videosec.com/hirlevel/2021-17/IPW-2128IQ-28WAL.jpg" alt="">
							</td>
						</tr>
						<tr>
						  <td><p class="text-stlye1" style="font-size: 16px; text-align: center;">Starlight<br> 4K<br>
							  Fixed Bullet camera<br>
							  2.8 mm<br>
							   with a microphone
							  & speaker<br><br> 
							  IPW-2128IQ-28WAL
							</p></td>
						</tr>
						</tbody>
					</table>
					</a>
				</td>
				<td>
					<a href="https://videosec.com/?lp=nTb&cmdLang=HUN&productid=IPW-2325IQ-28SZ">
					<table cellpadding="0" cellspacing="0" style="width: 110px; border-radius: 15px;" class="slide1 shadow">
						<tbody>
						<tr>
							<td>
								<img src="https://videosec.com/hirlevel/2021-17/IPW-232x-28Z_v2.jpg" alt="">
							</td>
						</tr>
						<tr>
						  <td><p class="text-stlye1" style="font-size: 16px; text-align: center;">Starlight <br>5Mpx <br> 
							  Fixed Bullet camera<br>
							  2.7-13.5 mm motoros <br><br> <br> <br> 
							  IPW-2325IQ-28SZ
							</p></td>
						</tr>
						</tbody>
					</table>
					</a>
				</td>
				<td>
					<a href="https://videosec.com/?lp=nTb&cmdLang=HUN&productid=PTZ-675IQ-X4SWAL">
						<table cellpadding="0" cellspacing="0" style="width: 110px; border-radius: 15px;" class="slide1 shadow">
							<tbody>
						  <tr>
							  <td>
								  <img src="https://videosec.com/hirlevel/2021-17/PTZ-675IQ-X4SWAL.jpg" alt="">
							  </td>
						  </tr>
						  <tr>
							<td><p class="text-stlye1" style="font-size: 16px; text-align: center;">Starlight<br> 5Mpx <br>
								PTZ<br> camera<br>
								4x zoom
								50m IR/10m White LED
								<br>  <br><br> 
								PTZ-675IQ-X4SWAL
							</p></td>
						  </tr>
						  </tbody>
					  </table>
					</a>
				</td>
			</tr>
		</tbody>
	</table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</section>
<section >
	<table align="center">
		<tbody>
			<tr>
				<td colspan="3">
					<p align="center"><b>Euro Tech Corporation Kft.</b><br />
					6724-H Szeged, Üstökös u. 12/b<br />
					Tel/Fax: +36 62 458 585<br />
					Technical background / Service: +36 70 439 8802<br />
					E-mail: <a href="mailto:eurotech@videosec.com" style="color:#461724; font-weight:bold;">eurotech@videosec.com</a><br />
					Web: <a href="https://videosec.com/?lp=RjanFeb" style="color:#461724; font-weight:bold;" target="_blank">www.videosec.com</a><br /></p>
					<table width="100%">
						<tbody>
							<tr>
								<td height="3" style="border-bottom: 3px solid #4f4f4f; width:100%"></td>
							</tr>
						</tbody>
					</table>
					<p class="text-small-black">If you wish to unsubscribe from our newsletter you can do so at:<br />
					<a href="mailto:unsubscribe.videosec@gmail.com" style="color:#461724; font-weight:bold;">unsubscribe.videosec@gmail.com</a></p>
				</td>
			</tr>
		</tbody>
	</table>
</section>
</body>
</html>