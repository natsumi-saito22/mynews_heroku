<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\News;

class NewsController extends Controller
{
    public function add()
  {
      return view('admin.news.create');
  }

  // 以下を追記

}

