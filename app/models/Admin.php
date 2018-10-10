<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Admin extends Model{	//设置表名
     protected $table = 'Admin';
     protected $primaryKey = 'id';
     const CREATED_AT = 'timeCreated';
     const UPDATED_AT = 'timeLastModified';
     //常量储存

	 public static function getById($value='')
	 {
	 	return 'yujiajia';
	 }
}

