<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'website/Home_controller/index';
$route['404_override'] = 'construction/index';
$route['comming_soon'] = 'website/Error_controller/comming_soon';
$route['translate_uri_dashes'] = FALSE;

//Pages
$route['about'] = 'website/Page_controller/about';
$route['cource'] = 'website/Page_controller/cources';
$route['gallery'] = 'website/Page_controller/gallery';
$route['placement'] = 'website/Page_controller/placement';
$route['contact_us'] = 'website/Contactus_controller/index';
$route['contact_us/add_query'] = 'website/Contactus_controller/add_query';
$route['faculty'] = 'website/Faculty_controller/index';
$route['documents'] = 'website/Documents_controller/index';

//documents route
$route['documents/admit'] = 'website/Documents_controller/admit';
$route['documents/result'] = 'website/Documents_controller/result';
$route['documents/marksheet'] = 'website/Documents_controller/marksheet';
$route['documents/qn_paper'] = 'website/Documents_controller/paper';

//digital library route
$route['digital_library'] = 'website/Library_controller/index';
$route['digital_library/bca'] = 'website/Library_controller/bca';
$route['digital_library/bba'] = 'website/Library_controller/bba';
$route['digital_library/biotech'] = 'website/Library_controller/biotech';
$route['digital_library/others'] = 'website/Library_controller/others';

//Blogs routs
$route['blogs'] = 'website/Blog_controller/index';
$route['blogs/anti_raging'] = 'website/Blog_controller/anti_raging';


//cms route
$route['upload/notice'] = 'cms/Notice_controller/index';
$route['upload/photo'] = 'cms/Photo_controller/index';
$route['upload/user'] = 'cms/User_controller/index';

//submit link
$route['submission'] = 'cms/Notice_controller/do_upload';