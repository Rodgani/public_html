<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
function meta_data($page=""){
$meta_data['home']['title']                             = "automobile-wohlensee.ch";
$meta_data['home']['description']                       = "";
$meta_data['home']['keywords']                          = "";
$meta_data['home']['og_title']                          = "automobile-wohlensee.ch";
$meta_data['home']['og_description']                    = "";


$meta_data['auto-abo']['title']                         = "automobile-wohlensee.ch";
$meta_data['auto-abo']['description']                   = "";
$meta_data['auto-abo']['keywords']                      = "";
$meta_data['auto-abo']['og_title']                      = "automobile-wohlensee.ch";
$meta_data['auto-abo']['og_description']                = "";


$meta_data['miete-mich-taeglich']['title']              = "automobile-wohlensee.ch";
$meta_data['miete-mich-taeglich']['description']        = "";
$meta_data['miete-mich-taeglich']['keywords']           = "";
$meta_data['miete-mich-taeglich']['og_title']           = "automobile-wohlensee.ch";
$meta_data['miete-mich-taeglich']['og_description']     = "";  


$meta_data['zu-vermieten-bekommen']['title']            = "automobile-wohlensee.ch";
$meta_data['zu-vermieten-bekommen']['description']      = "";
$meta_data['zu-vermieten-bekommen']['keywords']         = "";
$meta_data['zu-vermieten-bekommen']['og_title']         = "automobile-wohlensee.ch";
$meta_data['zu-vermieten-bekommen']['og_description']   = "";  


$meta_data['bestaetigung']['title']                     = "automobile-wohlensee.ch";
$meta_data['bestaetigung']['description']               = "";
$meta_data['bestaetigung']['keywords']                  = "";
$meta_data['bestaetigung']['og_title']                  = "automobile-wohlensee.ch";
$meta_data['bestaetigung']['og_description']            = "";


$meta_data['bestaetigung-tagesmiete']['title']          = "automobile-wohlensee.ch";
$meta_data['bestaetigung-tagesmiete']['description']    = "";
$meta_data['bestaetigung-tagesmiete']['keywords']       = "";
$meta_data['bestaetigung-tagesmiete']['og_title']       = "automobile-wohlensee.ch";
$meta_data['bestaetigung-tagesmiete']['og_description'] = "";  


$meta_data['about']['title']                            = "automobile-wohlensee.ch";
$meta_data['about']['description']                      = "";
$meta_data['about']['keywords']                         = "";
$meta_data['about']['og_title']                         = "automobile-wohlensee.ch";
$meta_data['about']['og_description']                   = "";  


$meta_data['autos']['title']                            = "automobile-wohlensee.ch";
$meta_data['autos']['description']                      = "";
$meta_data['autos']['keywords']                         = "";
$meta_data['autos']['og_title']                         = "automobile-wohlensee.ch";
$meta_data['autos']['og_description']                   = "";  


$meta_data['reparaturservice']['title']                 = "automobile-wohlensee.ch";
$meta_data['reparaturservice']['description']           = "";
$meta_data['reparaturservice']['keywords']              = "";
$meta_data['reparaturservice']['og_title']              = "automobile-wohlensee.ch";
$meta_data['reparaturservice']['og_description']        = "";  


$meta_data['finanzierung']['title']                     = "automobile-wohlensee.ch";
$meta_data['finanzierung']['description']               = "";
$meta_data['finanzierung']['keywords']                  = "";
$meta_data['finanzierung']['og_title']                  = "automobile-wohlensee.ch";
$meta_data['finanzierung']['og_description']            = "";  


$meta_data['garantie']['title']                         = "automobile-wohlensee.ch";
$meta_data['garantie']['description']                   = "";
$meta_data['garantie']['keywords']                      = "";
$meta_data['garantie']['og_title']                      = "automobile-wohlensee.ch";
$meta_data['garantie']['og_description']                = "";  


$meta_data['autoversicherung']['title']                 = "automobile-wohlensee.ch";
$meta_data['autoversicherung']['description']           = "";
$meta_data['autoversicherung']['keywords']              = "";
$meta_data['autoversicherung']['og_title']              = "automobile-wohlensee.ch";
$meta_data['autoversicherung']['og_description']        = "";  


$meta_data['fahrzeugankauf']['title']                   = "automobile-wohlensee.ch";
$meta_data['fahrzeugankauf']['description']             = "";
$meta_data['fahrzeugankauf']['keywords']                = "";
$meta_data['fahrzeugankauf']['og_title']                = "automobile-wohlensee.ch";
$meta_data['fahrzeugankauf']['og_description']          = "";  


$meta_data['kontakt']['title']                          = "automobile-wohlensee.ch";
$meta_data['kontakt']['description']                    = "";
$meta_data['kontakt']['keywords']                       = "";
$meta_data['kontakt']['og_title']                       = "automobile-wohlensee.ch";
$meta_data['kontakt']['og_description']                 = "";  


$meta_data['dienstleistung']['title']                   = "automobile-wohlensee.ch";
$meta_data['dienstleistung']['description']             = "";
$meta_data['dienstleistung']['keywords']                = "";
$meta_data['dienstleistung']['og_title']                = "automobile-wohlensee.ch";
$meta_data['dienstleistung']['og_description']          = "";  


$meta_data['jobs']['title']                             = "Job page";
$meta_data['jobs']['description']                       = "jobs description";
$meta_data['jobs']['keywords']                          = "jobs , job page";
$meta_data['jobs']['og_title']                          = "Job page";
$meta_data['jobs']['og_description']                    = " auto abo og description";  


$meta_data['impressum']['title']                        = "automobile-wohlensee.ch";
$meta_data['impressum']['description']                  = "";
$meta_data['impressum']['keywords']                     = "";
$meta_data['impressum']['og_title']                     = "automobile-wohlensee.ch";
$meta_data['impressum']['og_description']               = "";  


$meta_data['automiete']['title']                        = "automobile-wohlensee.ch";
$meta_data['automiete']['description']                  = "";
$meta_data['automiete']['keywords']                     = "";
$meta_data['automiete']['og_title']                     = "automobile-wohlensee.ch";
$meta_data['automiete']['og_description']               = ""; 


$meta_data['default']['title']                        = "automobile-wohlensee.ch";
$meta_data['default']['description']                  = "";
$meta_data['default']['keywords']                     = "";
$meta_data['default']['og_title']                     = "automobile-wohlensee.ch";
$meta_data['default']['og_description']               = "";  



if(isset($meta_data[$page])){
	return $meta_data[$page];
}else{
return $meta_data['default'];
}

 }