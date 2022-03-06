<?php

namespace App\Controllers;
use App\Models\Userdb;

class Statement extends BaseController
{
    public function index()
    {
        $userdb = new userdb();
        $session = session();
        $uid = $session->get('uid');
        $getuser = $userdb->get_user_details($uid);
    	// print_r($getuser);
     //    die();
        $data['user_data'] = $getuser;
        $data['main_content'] = 'pages/statement';
        return view('layout/layout',$data);
    }
   
}
