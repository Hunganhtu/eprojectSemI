<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    //
    public function store(Banner $banner)
    {
    	$banner->add();
    	return 
    }
}
