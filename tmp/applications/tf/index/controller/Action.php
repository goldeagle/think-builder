<?php
namespace tf\index\controller;

/**
 * 方法
 */
class Action
{
    /**
     * index 列表
     */
    public function index()
    {
        $view = new \think\View();
        return $view->fetch();
    }

    /**
     * add 添加
     */
    public function add()
    {
        $view = new \think\View();
        return $view->fetch();
    }

    /**
     * mod 修改
     */
    public function mod()
    {
        $view = new \think\View();
        return $view->fetch();
    }

    /**
     * view 查看
     */
    public function view()
    {
        $view = new \think\View();
        return $view->fetch();
    }


}
