<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Student extends Model{	//设置表名
     protected $table = 'Student';
     protected $primaryKey = 'id';
     public static function get($value='')
     {

         return 'yujiajia';
     }
}

