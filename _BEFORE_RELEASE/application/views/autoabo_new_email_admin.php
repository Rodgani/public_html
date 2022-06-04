<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width" name="viewport"/>
<!--[if !mso]><!-->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
<style id="media-query" type="text/css">
		@media (max-width: 640px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}

			.block-grid {
				width: 100% !important;
			}

			.col {
				width: 100% !important;
			}

			.col>div {
				margin: 0 auto;
			}

			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num8 {
				width: 66% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
</head>
<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
<!--[if IE]><div class="ie-browser"><![endif]-->
<table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" style=" min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;" valign="top" width="100%">
<tbody>

<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top"> </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> </td>
</tr>


	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">km </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $km ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">duration </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $duration ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">price </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $price ?> </td>
</tr>

<?php 
if($delivery == "delivery_included") { ?>

		<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">Lieferpreis </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> 180 chf für die Lieferung</td>
</tr>


          <?php } else { ?>
          			<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">Lieferpreis </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> Selbstabholung</td>
</tr>

         <?php }

 ?>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">vehicle_id </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $vehicle_id ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">gender </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $gender ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">vorname </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $vorname ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">email </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $email ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">datepic </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $datepic ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">firma </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $firma ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">nachname </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $nachname ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">telefon_nummer </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $telefon_nummer ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">strasse </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $strasse ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">nr </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $nr ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">adresszusatz </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $adresszusatz ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">postleitzahl </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $postleitzahl ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">ort </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $ort ?> </td>
</tr>

	<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top"> available_date </td>
<td style="word-break: break-word; vertical-align: top;" valign="top"> <?php echo $available_date ?> </td>
</tr>



</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>