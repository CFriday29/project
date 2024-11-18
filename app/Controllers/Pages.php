<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('dashboard');
    }
    public function course()
    {
        return view('pages/course');
    }
    public function free_class()
    {
        return view('pages/free_class');
    }
    public function order()
    {
        return view('pages/order');
    }
    public function class()
    {
        return view('pages/class');
    }
    public function account()
    {
        if ($this->request->getMethod() === 'post'){
            return redirect()->to(site_url('class/my_profile'));
        }       
         return view('pages/account');
    }
    public function cyber()
    {
        return view('class/cyber');
    }
    public function team()
    {
        return view('pages/team');
    }
    public function add_team()
    {
        return view('Form/add_team');
    }
    public function pembayaran()
    {
        return view('pages/pembayaran');
    }
    public function job_hunter()
    {
        return view('pages/job_hunter');
    }
    public function quiz()
    {
        return view('pages/quiz');
    }
    public function my_profile()
    {
        return view('class/my_profile');
    }
}