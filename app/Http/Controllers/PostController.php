<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Post;

class PostController extends Controller
{
    //
}

/**
 *  Post一覧を表示
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 * /
public function index(Post $post)
{
    return $post->get();
}
