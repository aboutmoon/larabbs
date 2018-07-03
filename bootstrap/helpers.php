<?php
/**
 * Laravel 提供了很多辅助函数，有时候我们也需要创建自己的辅助函数。
 **/


/**
 * @return mixed
 * 此方法会将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制。在后面的章节中会用到。
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}