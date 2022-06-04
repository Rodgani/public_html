<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//Daynamic Pages
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['upload'] = 'Upload';
$route['auto-abo']  = 'Home/autoabo';
$route['auto-abo/(:any)']  = 'Home/autoabo_single/$1';
$route['miete-mich-taeglich']  = 'Home/mietemich';
$route['miete-mich-taeglich/(:any)']  = 'Home/mietemich_single/$1';
$route['abonnieren/(:any)/(:any)/(:any)/(:any)']  = 'Home/abonnieren/$1/$2/$3/$4';
$route['zu-vermieten-bekommen/(:any)/(:any)/(:any)/(:any)']  = 'Home/abonnieren_daily/$1/$2/$3/$4';

//Static Pages
$route['bestaetigung']                 = 'Home/bestaetigung';
$route['bestaetigung-tagesmiete']      = 'Home/bestaetigung_tagesmiete';

$route['about']                        = 'Home/about';
$route['autos']                        = 'Home/autos';
$route['reparaturservice']             = 'Home/reperaturservice';
$route['finanzierung'] = 'Home/finanzierung';
$route['garantie']       = 'Home/garanite';
$route['autoversicherung']     = 'Home/autoversicherung';
$route['fahrzeugankauf']               = 'Home/fahrzeugankauf';
$route['kontakt']                      = 'Home/kontakt';
$route['dienstleistung']               = 'Home/dienstleistung';
$route['jobs']                         = 'Home/jobs';
$route['kopie-von-impressum']          = 'Home/terms_and_conditions';
$route['impressum']                    = 'Home/impressum';
$route['automiete']                    = 'Home/automiete';



//form and request controllers
$route['autoabo/vehilce-request']      = 'Vhiclce_request/autoabo';
$route['mietemich/vehilce-request']    = 'Vhiclce_request/mietemich';

