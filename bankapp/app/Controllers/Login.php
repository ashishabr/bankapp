<?php

namespace App\Controllers;
use App\Models\Userdb;

class Login extends BaseController
{
	public function __construct()
	{
		$userdb = new userdb();
        
	}
    public function index()
    {
        $session = session();
        $uid = $session->get('uid');
        if ($uid != null) 
        {
            return redirect()->to('/dashboard');
        }
    	$reg_user = $this->request->getPost('reg_user');
    	$login_user = $this->request->getPost('login_user');
    	if(isset($reg_user))
    	{
    		$createuser = $this->RegisterUser();
    		if ($createuser) 
    		{
    			return redirect()->to('/dashboard');
    		}
            else{
                $data['user_check'] = 2;
            }
    	}
    	elseif (isset($login_user)) 
    	{
    		$loginuser = $this->LoginUser();
    		if ($loginuser) 
    		{
    			return redirect()->to('/dashboard');
    		}
            else
            {
                $data['user_check'] = 1;
            }
    	}
    	$data['login_content'] = 'user/login_content';
    	$data['register_content'] = 'user/register_content';
        return view('layout/login',$data);
    }

    public function RegisterUser()
    {
    	$userdb = new userdb();
    	$rname = $this->request->getPost('rname');
    	$rpass = $this->request->getPost('rpass');
    	$remail = $this->request->getPost('remail');
    	$pass = md5($rpass);
    	


        $datas = [
            'user_name' => $rname,
            'user_email'  => $remail,
        ];
        $userchk = $userdb->checkuser($datas);
        if ($userchk) 
        {
            return false;
        }
        else
        {
            $data = [
            'user_name' => $rname,
            'user_pass'  => $pass,
            'user_email'  => $remail,
            ];
            $user = $userdb->createuser($data);
            $session = session();
            $setsess = [
                'uid' => $user,
            ];

            $session->set($setsess);

            if ($user) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
    	
    	
    }
    public function LoginUser()
    {
    	$userdb = new userdb();
    	$rname = $this->request->getPost('lname');
    	$rpass = $this->request->getPost('lpass');
    	$pass = md5($rpass);
    	$data = [
		    'user_name' => $rname,
		    'user_pass'  => $pass,
		];
    	$user = $userdb->getuser($data);
    	// print_r($user);
    	// die();

    	if ($user) 
    	{
            $session = session();
            $setsess = [
                'uid' => $user->user_id,
            ];
            $session->set($setsess);
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    	
    	
    }
    public function logout()
    {
    	// die();
    	$session = session();
    	$session->destroy();

    	return redirect()->to('/login');
    }
}
