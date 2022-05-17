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

//APIS EXTERNAL
// host details
// create appointment
$route['api/create_appointment'] = 'api/apis/api_create_appointments';
// checked in visitors

// next appointment
// frequest visitors
// list appointment
// list visitors
// Add visitor
// individual visitor history
// list checkin
// checkin details
// notification
// lobby check
// admit visitor from lobby



// APIS INTERNAL

$route['api/addemployee']='employees/add_employees';
$route['api/listemployee']='employees/get_employees';
$route['api/searchemployee']='employees/search_employees';
$route['api/admin_search_employee'] = 'admin/employees/admin_search_employees';
$route['api/bulkuploadhost'] = 'admin/employees/bulk_upload_hosts';
$route['api/addvisitor'] = 'visitors/add_visitors';
$route['api/checkinvisitor'] = 'visitors/checkin_visitors';
$route['api/addappointment'] = 'appointments/add_appointments';
$route['api/checkinappointment'] = 'appointments/check_in_appointments';
$route['api/checkoutvisitor'] = 'visitors/checkout_visitors';
$route['api/checkinprevisitor'] = 'visitors/checkin_pre_visitors';
// this is for the receptionist to grant visitor access after the they have been admitted by the host
$route['api/grant_visitor_access'] = 'admin/visitors/grant_visitor_access';



// ADMIN PAGE
$route['admin/employee'] = 'admin/employees/list_employees';
$route['admin/visitor'] = 'admin/visitors/view_visitor';
$route['admin/visitor_tag'] = 'admin/visitors/view_visitors_tags';
$route['admin/appointment'] = 'admin/adminpages/appointment';
$route['admin/checkin'] = 'admin/adminpages/checkin';
$route['admin/login'] = 'admin/accounts/login';
$route['admin/forgot_password'] = 'admin/accounts/forgot_password';
$route['admin/logout'] = 'admin/accounts/logout';
$route['admin/account_setting'] = 'admin/accounts/account_settings';
$route['admin'] = 'admin/adminpages/view_admin_index';
$route['admin/(:any)'] = 'admin/adminpages/view/$1';

//ADMIN BOXES
$route['admin/box/list_employee']='admin/boxes/box_list_employees';
$route['admin/box/recent_checkin']='admin/boxes/box_list_checkin';
$route['admin/box/edit_employee/(:any)']='admin/boxes/box_edit_employee/$1';
$route['admin/box/add_employee']='admin/boxes/box_add_employee';
$route['admin/box/add_appointment']='admin/boxes/box_add_appointment';
$route['admin/box/visitor_details']='admin/boxes/box_visitor_details';
$route['admin/box/add_visitor_tag']='admin/boxes/box_add_visitor_tags';
$route['admin/box/(:any)']='admin/boxes/box_load/$1';
$route['admin/box/checkin_detail/(:any)'] = 'admin/boxes/box_vistor_checkin_detail/$1';


// to call another page use components
$route['component/(:any)']='pages/component/$1';

//to call section use boxes
$route['boxes/visitortag/(:any)']='boxes/visitortags/$1';

$route['qrscan']='boxes/qrcode_scan';
$route['qrvalidate/(:any)'] = 'accounts/qrcode_login/$1';

$route['login'] = 'accounts/login';
$route['logout'] = 'accounts/logout';
$route['admit_checkin/(:any)'] = 'visitors/admit_visitors/$1';
$route['contact']='pages/contact';
$route['(:any)']='pages/view/$1';
$route['default_controller'] = 'pages/index';
$route['404_override'] = 'pages/page_not_found';
// $route['translate_uri_dashes'] = FALSE;
