<?php
/**************************************************************
 * File Name   : LuojunitController.php
 * Author      : robert
 * Create Time : 2023-11-22 15:12
 * DESC        :
 ***************************************************************/

namespace Robertluowen\LuojunitLaravel\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LuojunitController extends Controller
{
    public function index()
    {
        return view('junit::index');
    }
    public function store(Request $request)
    {
        $namespace  = $request->input('namespace');
        $className  = $request->input('className');
        $action     = $request->input('action');
        $param      = $request->input('param');
        $class = ($className == "") ? $namespace : $namespace.'\\'.$className;
        // 要替换的值  需要的结果
        $class = str_replace("/", "\\", $class);
        $object = new $class();
        $param = ($param == "") ? [] : explode('|', $param) ;
        $data = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);
    }
}