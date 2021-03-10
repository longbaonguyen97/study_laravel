<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class testController extends Controller
{

    /**
     * get all users
     * @return object
     */
    public function index(){
        return User::all();
    }

    public function show($id){
        return User::find($id);
    }

    /**
     * pagination table users
     * @return array
     */
    public function pagination(){
        $users = DB::table('users')->paginate(5);
        return $users;
    }

    /**
     * create user
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return User::create($request->all());

    }

    /**
     * update user
     * @param $id
     * @param Request $request
     * @return array
     */
    public function update($id, Request $request)
    {
        return [
            'code'=>User::where('id',$id)->update($request->all())
        ];
    }

    /**
     * delete user
     * @param $id
     * @return array
     */
    public function destroy($id)
    {
        return [
            'code'=>User::where('id',$id)->delete()
        ];
    }

    /**
     * get detail user
     * @param $id
     * @return array
     */
    public function user_detail($id){
        $users =User::find($id);
        if (empty($users)){
            return [
                'code'=>0,
                'data'=>[]
            ];
        }
        return [
            'code'=>1,
            'data'=>[$users]
        ];
    }
}
