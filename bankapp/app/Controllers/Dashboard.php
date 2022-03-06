<?php

namespace App\Controllers;
use App\Models\Userdb;

class Dashboard extends BaseController
{
    public function index()
    {
    	$data['main_content'] = 'pages/dashboard';
    	$session = session();
    	$uid = $session->get('uid');
    	// $data['uid'] = $uid;

    	$userdb = new userdb();
    	$datas = [
		    'user_id' => $uid,
		];
    	$user = $userdb->getuser($datas);

    	$data['userdata'] = $user;

        return view('layout/layout',$data);
    }
}
