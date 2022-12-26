<?php

namespace App\Controllers;

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = 'My Profile';
        return view('user/index', $data);
    }

}
