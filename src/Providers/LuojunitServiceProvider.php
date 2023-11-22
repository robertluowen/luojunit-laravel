<?php

/**************************************************************
 * File Name   : LuojunitServiceProvider.php
 * Author      : robert
 * Create Time : 2023-11-22 3:19
 * DESC        :
 ***************************************************************/

namespace Robertluowen\LuojunitLaravel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LuojunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        //注册路由文件
        $this->registerRoutes();
        //指定了组件的名称，自定义资源目录地址
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'junit');
    }

    public function boot()
    {
    }

    //参考别人的写法
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '\..\Http\routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            // 定义路由访问的域名
//            'domain' => config('telescope.domain', null),
            // 定义路由的命名空间
            'namespace' => 'Robertluowen\LuojunitLaravel\Http\Controller',
            // 这是前缀
            'prefix' => 'luojunit',
            // 这是中间件
            'middleware' => 'web',
        ];
    }
}