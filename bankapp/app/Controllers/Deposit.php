<?php

namespace App\Controllers;
use App\Models\Userdb;

class Deposit extends BaseController
{
    public function index()
    {
        
        $submitdep = $this->request->getPost('submitdep');
        if (isset($submitdep)) 
        {
            $userdb = new userdb();
            $session = session();
            $uid = $session->get('uid');
            $method = 1;
            $amount = $this->request->getPost('amount');
            $data = [
                'amount' => $amount,
                'user_id'  => $uid,
                'method'  => $method,
            ];
            $user = $userdb->tansactamnt($data);
            $data['transaction'] = 1;
            $datau = $uid;
            $getuser = $userdb->get_user($datau);
            $useramnt = $getuser->user_balance;
            $totalamnt = $useramnt + $amount;

            $datatrans = [
                'user_id' => $uid,
                'user_balance'  => $totalamnt,
            ];
            $updateamnt = $userdb->update_useramnt($datatrans);

        }
        else
        {
            $data['transaction'] = 0;
        }
    	$data['main_content'] = 'pages/deposit';
        return view('layout/layout',$data);
    }
    public function withdraw()
    {
        $submitwth = $this->request->getPost('submitwth');
        if (isset($submitwth)) 
        {
            $userdb = new userdb();
            $session = session();
            $uid = $session->get('uid');
            $amount = $this->request->getPost('amount');
            $datau = $uid;
            $getuser = $userdb->get_user($datau);
            // print_r($getuser);
            // die();
            $u_bal = $getuser->user_balance;
            if ($u_bal >= $amount) 
            {
                $method = 2;
                $data = [
                    'amount' => $amount,
                    'user_id'  => $uid,
                    'method'  => $method,
                ];
                $user = $userdb->tansactamnt($data);
                $data['transaction'] = 2;
                $useramnt = $getuser->user_balance;
                $totalamnt = $useramnt - $amount;

                $datatrans = [
                    'user_id' => $uid,
                    'user_balance'  => $totalamnt,
                ];
                $updateamnt = $userdb->update_useramnt($datatrans);
            }
            else
            {
                $data['transaction'] = "4";
            }

            
        }
        else
        {
            $data['transaction'] = 0;
        }
        $data['main_content'] = 'pages/withdraw';
        return view('layout/layout',$data);
    }
    public function transfer()
    {
        $submitwth = $this->request->getPost('submittransfr');
        if (isset($submitwth)) 
        {
            $userdb = new userdb();
            $session = session();
            $uid = $session->get('uid');
            $amount = $this->request->getPost('amount');
            $datau = $uid;
            $getuser = $userdb->get_user($datau);
            $u_bal = $getuser->user_balance;
            if ($u_bal >= $amount) 
            {
                $datau_e = $this->request->getPost('email');
                $getuser_1 = $userdb->get_user_byuser($datau_e);
                if ($getuser_1) 
                {

                    $useramnt = $getuser->user_balance;
                    $totalamnt = $useramnt - $amount;

                    $datatrans = [
                        'user_id' => $uid,
                        'user_balance'  => $totalamnt,
                    ];
                    $updateamnt = $userdb->update_useramnt($datatrans);

                    $useramnt_1 = $getuser_1->user_balance;
                    $totalamnt_1 = $useramnt_1 + $amount;

                    $datatrans = [
                        'user_id' => $getuser_1->user_id,
                        'user_balance'  => $totalamnt_1,
                    ];
                    $updateamnt = $userdb->update_useramnt($datatrans);
                    $method = 3;
                    $data = [
                        'amount' => $amount,
                        'user_id'  => $uid,
                        'user_to'  => $getuser_1->user_id,
                        'method'  => $method,
                    ];
                    $user = $userdb->tansactamnt($data);
                    $data['transaction'] = 3;
                }
                else
                {
                    $data['transaction'] = 5;
                }
            }
            else
            {
                $data['transaction'] = 4;
            }
        }
        else
        {
            $data['transaction'] = 0;
        }
        $data['main_content'] = 'pages/transfer';
        return view('layout/layout',$data);
    }
}
