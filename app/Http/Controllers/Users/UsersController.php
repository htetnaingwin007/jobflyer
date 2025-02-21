<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JobSaved;
use App\Models\JobApply;
use App\Models\Region;
use Auth;

class UsersController extends Controller
{
    
    public function profile()
    {
        $profile = User::find(Auth::user()->id);
        // echo ($profile);

        return view('users.profileproject',compact('profile'));
    }
     
    public function profileSavedJob(){


        $saved_jobs = JobSaved::where('user_id', '=', Auth::user()->id)->paginate(3);
        
        return view('users.profilesaved',compact('saved_jobs'));
    }

    public function profileAppliedjob(){


        $applied_jobs = JobApply::where('user_id', '=', Auth::user()->id)->paginate(3);


        return view('users.profileapplied',compact('applied_jobs'));
    }

    public function editDetails(){

        $user = User::find(Auth::user()->id);
        $regions = Region::all();
        // dd($user_detail);
        // echo ($user);

        return view('users.editprofile',compact('user','regions'));
    }
}
