<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reaction;
use Illuminate\Support\Facades\Auth;
use App\Constants\Status;

class MatchingController extends Controller
{
    public static function index()
    {
        $got_reaction_ids = Reaction::where([
            ['to_user_id',Auth::id()],
            ['status',Status::LIKE]
        ])->pluck('from_user_id');

        $matching_ids = Reaction::whereIn('to_user_id',$got_reaction_ids)
        ->where('status',Status::LIKE)
        ->where('from_user_id',Auth::id())
        ->pluck('to_user_id');

        $matching_users = User::whereIn('id',$matching_ids)->get();

        $match_users_count = count($matching_users);

        return view('users.index',[
            'matching_users' => $matching_users,
            'match_users_count' => $match_users_count
        ]);
    }
}
