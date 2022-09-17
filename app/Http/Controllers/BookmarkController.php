<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        // dd('s');
        $bookmark = Bookmark::query()->where('user_id',Auth::user()->id)->get();
        return Inertia::render('Bookmark/List/index',[
            'bookmark' => $bookmark,
        ]);
    }
}
