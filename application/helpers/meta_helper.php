<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function meta_data($page=""){
$meta_data['home']['title']                             = "Ihr Autohaus für Auto, Service & Reparatur – Automobile Wohlensee";
$meta_data['home']['description']                       = "Autonkauf und -Verkauf: die Automobile Wohlensee AG steht für seriöse Abwicklung und faire Preise im Autoverkauf.";
$meta_data['home']['keywords']                          = "Automobile Wohlensee, Autoankauf, Autoverkauf";

$meta_data['miete-mich-taeglich']['title']            = "Jetzt Lieferwagen günstig mieten | Automobile Wohlensee AG" ;
$meta_data['miete-mich-taeglich']['description']      = "Transporter & Lieferwagen mieten: Benötigen Sie einen Lieferwagen für Ihren Umzug, Grosseinkauf oder für den Transport von Möbeln? Mieten Sie einen günstigen Lieferwagen bei der Automobile Wohlensee AG.";
$meta_data['miete-mich-taeglich']['keywords']         = "Lieferwagen mieten, Lieferwagen mieten Bern, Transporter mieten Bern";

$meta_data['bestaetigung']['title']                     = "Auto Abo Bestätigung";
$meta_data['bestaetigung']['description']               = "Glückwunsch zu deinem neuen Auto! So geht es weiter.";
$meta_data['bestaetigung']['keywords']                  = "";

$meta_data['bestaetigung-tagesmiete']['title']          = "Bestätigung: Lieferwagenvermietung abgeschlossen";
$meta_data['bestaetigung-tagesmiete']['description']    = "Herzlichen Glückwunsch, Ihre Anfrage zur Anmietung eines Lieferwagens/Transporters ist bei uns eingegangen.";
$meta_data['bestaetigung-tagesmiete']['keywords']       = "";

$meta_data['about']['title']                            = "Automobile Wohlensee AG | Autos sind unsere Leidenschaft" ;
$meta_data['about']['description']                      = "Wir die Automobile Wohlensee AG sind ein junges und dynamisches Unternehmen, das für Qualität, Transparenz und Flexibilität steht.";
$meta_data['about']['keywords']                         = "Automobile Wohlensee, Automobile Wohlensee";

$meta_data['werkstatt']['title']                            = "Unsere Werkstatt in Bern für Reparatur & Service";
$meta_data['werkstatt']['description']                      = "Ihre zuverlässige und kostengünstige Garage in Grossraum Bern für Reparatur-, Service- und Carrosseriearbeiten.";
$meta_data['werkstatt']['keywords']                         = "Auto Reparatur Bern, Autoservice Bern, Carrosserie Bern";

$meta_data['autos']['title']                            = "Entdecken Sie unsere Autos";
$meta_data['autos']['description']                      = "Hier finden Sie unsere aktuellen Angebote an Occasionen und Neuwagen. Gerne beraten wir Sie und laden Sie auf eine Probefahrt ein.";
$meta_data['autos']['keywords']                         = "Occasion Auto Bern, Günstige Occasionen Bern, Auto kaufen Bern";

$meta_data['autoverkauf']['title']                   = "Autoverkauf: Hier finden Sie Ihr Traumauto zum Tiefstpreis";
$meta_data['autoverkauf']['description']             = "Kaufen Sie Ihr Auto bei der Automobile Wohlensee AG in Bern und profitieren Sie von hervorragenden Angeboten ⭐ Wir verkaufen Autos zum besten Preis ⭐ schnelle Abwicklung";
$meta_data['autoverkauf']['keywords']                = "Auto kaufen, Auto verkaufen, Auto kaufen Schweiz";

$meta_data['autoankauf']['title']                   = "Autoankauf | Auto verkaufen schnell & zum besten Preis!" ;
$meta_data['autoankauf']['description']             = "Auto-Ankauf zum besten Preis ⭐ Ob in Bern, Zürich oder der ganzen Schweiz: wir kaufen Ihr Auto ⭐ schnelle Abwicklung ⭐ Abholung innert 24H & Bezahlung vor Ort";
$meta_data['autoankauf']['keywords']                = "Autoankauf, Auto Ankauf Schweiz, Auto Ankauf Bern, Auto Ankauf Zürich";

$meta_data['fahrzeugankauf_formular']['title']          = "Autoankauf Formular | Online einsenden & Offerte erhalten";
$meta_data['fahrzeugankauf_formular']['description']    = "Mittels unserem Online-Formular können Sie Ihr Auto ganz einfach bewerten lassen. Angebot innert Stunden erhalten.";
$meta_data['fahrzeugankauf_formular']['keywords']       = "Autoankauf Formular, Auto Ankauf Formular";

$meta_data['kontakt']['title']                          = "Kontakt | Nehmen Sie mit uns Kontakt auf";
$meta_data['kontakt']['description']                    = "Bei Fragen und sonstigen Anliegen rund um das Auto, können Sie uns jederzeit kontaktieren. Unser Team begleitet Sie zu Ihrem Wunschauto.";
$meta_data['kontakt']['keywords']                       = "Kontakt";

$meta_data['jobs']['title']                             = "Jobs";
$meta_data['jobs']['description']                       = "Arbeiten Sie bei einem aufstrebendem Unternehmen.";
$meta_data['jobs']['keywords']                          = "Jobs, Verkäufer, Kaufmann, Buchhaltung, Autoverkäufer, Autoverkaufen";

$meta_data['impressum']['title']                        = "Impressum";
$meta_data['impressum']['description']                  = "Impressum und Disclaimer";
$meta_data['impressum']['keywords']                     = "";

$meta_data['terms']['title']                        = "AGB";
$meta_data['terms']['description']                  = "Allgemeine Geschäftsbedingungen Automobile Wohlensee AG";
$meta_data['terms']['keywords']                     = "";

$meta_data['default']['title']                        = "automobile-wohlensee.ch";
$meta_data['default']['description']                  = "";
$meta_data['default']['keywords']                     = "";
$meta_data['default']['og_site_name']                 = "Automobile Wohlensee AG";
$meta_data['default']['og_title']                     = "";
$meta_data['default']['og_description']               = "";

if(isset($meta_data[$page])){
	return array_merge($meta_data['default'], $meta_data[$page]);
}else{
return $meta_data['default'];
}

 }
