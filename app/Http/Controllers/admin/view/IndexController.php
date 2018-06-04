<?php

namespace App\Http\Controllers\admin\view;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\defaultTrait;
use Auth;

class IndexController extends Controller
{		
		use  defaultTrait;

		protected $Prefix = 'index.';

}
