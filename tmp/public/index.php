<?php
namespace think;
// [ 应用入口文件 ]
namespace think;

// 定义应用目录
define('APP_PATH', __DIR__ . '/../applications/tf/');
define('VENDOR_PATH', __DIR__ . '/../vendor/');

// 加载框架引导文件
require __DIR__ . '/../vendor/topthink/framework/base.php';
<<<<<<< .merge_file_0E9hZF
Container::get('tf')->path(APP_PATH)->run()->send();
=======

// 添加额外的代码

// 执行应用并响应
Container::get('tf', [APP_PATH])->run()->send();
>>>>>>> .merge_file_56nu1G
