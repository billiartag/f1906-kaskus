<?php 
 
namespace App;

use illuminate\Database\Eloquent\Model;

class member extends Model
{
	public $table			=	'member';
	public $primaryKey		=	'username';
	public $incrementing 	=	false;
	public $timestamps		= 	false;
	
	public function insert($username) {
		$baru = new member(); 
		$baru->username = $username; 
		$baru->save(); 
	}

	public function getallmember() {
		$qry = member::get(); 
		return $qry; 
	}
}