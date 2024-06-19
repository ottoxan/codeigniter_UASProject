<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['signup']['GET'] = 'signupController/index';
$route['signup']['POST'] = 'signupController/signup';

$route['login']['GET'] = 'loginController/index';
$route['login']['POST'] = 'loginController/login';

$route['userpage']['GET'] = 'pageController/userpage';
$route['create']['GET'] = 'pageController/create';
$route['tambah']['POST'] = 'pageController/tambah_aksi';
$route['hapus']['GET'] = 'pageController/hapus';
$route['edit']['GET'] = 'pageController/edit';
$route['editprofile']['GET'] = 'pageController/editprofile';


$route['logout']['GET'] = 'logoutController/logout';


