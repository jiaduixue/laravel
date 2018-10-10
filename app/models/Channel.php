<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Channel extends Model{	//设置表名
     protected $table = 'Channel';
     protected $primaryKey = 'id';
	 public static function get($value='')
	 {
	 	return 'yujiajia';
	 }
}

