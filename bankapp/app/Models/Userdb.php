<?php

namespace App\Models;
use CodeIgniter\Model;

class Userdb extends Model
{
	public function createuser($data)
	{
		$table = $this->db->table('user_reg');
		if ($table->insert($data)) 
		{
			return $this->db->insertID();
		}
		else
		{
			return false;
		}
	}
	public function getuser($data)
	{
		$table = $this->db->table('user_reg');
		$table->where($data);
		$query = $table->get();
		if ($table->countAll() > 0) 
		{
			return $query->getRow();
		}
		else
		{
			return false;
		}
	}
	public function checkuser($data)
	{
		// $where = "user_name = ".
		$table = $this->db->table('user_reg');
		$table->orWhere($data);
		$query = $table->get();
		if ($table->countAll() > 0) 
		{
			return $query->getRow();
		}
		else
		{
			return false;
		}
	}
	public function get_user($user_id)
	{
		$table = $this->db->table('user_reg');
		return $table->where("user_id",$user_id)
		->get()->getRow();
	}
	public function get_user_byuser($user_email)
	{
		$table = $this->db->table('user_reg');
		$table->where("user_email",$user_email);
		$query = $table->get();
		if ($table->countAll() > 0) 
		{
			return $query->getRow();
		}
		else
		{
			return false;
		}
		
	}
	public function get_user_details($user_id)
	{
		$table1 = $this->db->table('user_reg');
		$table1->where("user_id",$user_id);
		$query1 = $table1->get();
		$dta['user'] = $query1->getRow();
		

		$where = 'transaction.user_id = '.$user_id.' OR  transaction.user_to ='.$user_id;
		  $table = $this->db->table("user_reg");
		  $table->select('user_reg.*, transaction.*, u2.user_email as t_u_email, (CASE WHEN user_to = '.$user_id.' or method = 1 THEN "Credit" ELSE "Debit" END) as type');
		  $table->join('transaction', 'user_reg.user_id = transaction.user_id', "left");
		  $table->join('user_reg u2', 'u2.user_id = transaction.user_to', "left");
		  $table->where($where);
		  $table->OrderBy("tr_date",'desc');
		  $query = $table->get();
			if ($table->countAll() > 0) 
			{
				$dta['transaction'] = $query->getResult(); 
			}
			else
			{
				$dta['transaction'] =  false;
			}
			return $dta;
		
	}
	public function update_useramnt($data)
	{
		$update_rows = array(
			'user_balance' => $data['user_balance'],
		);
		$table = $this->db->table('user_reg');
		$table->where('user_id', $data['user_id']);
		$table->update($update_rows);
	}
	public function tansactamnt($data)
	{

		$table = $this->db->table('transaction');
		if ($table->insert($data)) 
		{
			return $this->db->insertID();
		}
		else
		{
			return false;
		}
	}
}

?>