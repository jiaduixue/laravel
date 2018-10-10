<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ShowController extends Controller
{
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {

        return Customer::get();
         return view('customer/show');
    }
    public function student(Request $request){

       // $all = Student::all();
        session()->put('key2','value2');
        dd(session()->get('key2'));
    }

}
