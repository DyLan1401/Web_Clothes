<?php

namespace App\Http\Controllers;
class HtmlController extends Controller
{
    public function login()
    {
        return file_get_contents(public_path('html/login.html'));
    }

    public function register()
    {
        return file_get_contents(public_path('html/register.html'));
    }
    public function list()
    {
        return file_get_contents(public_path('html/list.html'));
    }
    public function update()
    {
        return file_get_contents(public_path('html/update.html'));
    }
    public function view()
    {
        return file_get_contents(public_path('html/view.html'));
    }
}