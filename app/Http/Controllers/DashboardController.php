<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\slide;
use App\order;
use App\point;
use App\product;
use App\Imports\UsersImport;
use Excel;

class DashboardController extends Controller
{
    //
    public function index(){

        $User = User::where('id', '!=', 1 )->where('id', '!=', 2 )->count();
        $data['User'] = $User;

        $slide = slide::count();
        $data['slide'] = $slide;

        $order = order::count();
        $data['order'] = $order;

        $product = product::count();
        $data['product'] = $product;

        $data['sum'] = 1;
        return view('admin.dashboard.index', $data);
        

    }



    public function import(Request $request){

      $data_csv = Excel::import(new UsersImport, request()->file('file'));
      
      $user = User::get();

      if(isset($user)){
        foreach($user as $j){

            $total_point = 0;
            $objs = point::where('user_key', $j->phone)->get();

            dd($objs);

            foreach($objs as $u){
                if($u->type == 0){
                    $total_point += $u->point;
                }elseif($u->type == 2){
                $total_point += $u->point;
                }else{
                    $total_point -= $u->point;
                }
            }

            $package = User::find($j->id);
            $package->point = $total_point;
            $package->save();

        }
    }


        

     // dd($data_csv);

        return redirect(url('admin/get_point/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }



    public function get_point(){

        $point = DB::table('points')->select(
            'points.*',
            'points.id as idp',
            'points.point as points',
            'users.*',
            'users.id as idu'
            )
            ->leftjoin('users', 'users.phone', '=', 'points.user_key')
            ->orderby('points.id', 'desc')
            ->paginate(20);

        $data['point'] = $point;
        return view('admin.dashboard.get_point', $data);
    }
}
