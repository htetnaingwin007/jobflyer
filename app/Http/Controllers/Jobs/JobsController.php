<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobttt;
use App\Models\JobSaved;
use App\Models\JobApply;
use App\Models\Company;
use App\Models\Region;
use App\Models\Category;
use Auth;

class JobsController extends Controller
{
    


    public function single($id)
    {
        $job = Jobttt::find($id);

        // related jobs
        $rel_jobs = Jobttt::where('category_id',$job->category_id)
        ->where('id','!=',$job->id)
        ->paginate(5);
        $total_rel_jobs = Jobttt::where('category_id',$job->category_id)
        ->where('id','!=',$job->id)
        ->count();

        // saveJob 
        $savedJob = JobSaved::where('job_id',$id)
        ->where('user_id',Auth::user()->id)
        ->count();


        //varifying if user applied for the job
        $appliedjob = JobApply::where('job_id',$id)
        ->where('user_id',Auth::user()->id)
        ->count();

        //category
        $categories = Category::paginate(7);
       

        return view('jobs.single',compact('job','rel_jobs','total_rel_jobs','savedJob','appliedjob','categories'));
    }


    public function saveJob(Request $request)
    {
        // dd($request->all());
        $saved_job = JobSaved::create([
            
            'job_id' => $request->job_id,
            'user_id' => auth()->user()->id,

        ]);

        if($saved_job){
            return redirect('/jobs/single/'.$request->job_id.'')
                ->with('save','Job saved successfully');
        }
    }

    public function applyJob(Request $request)
    {
        
        if($request->cv== NULL){
            return redirect('/jobs/single/'.$request->job_id.'')
                ->with('apply','Please upload your cv first');
        }


        $job_apply = JobApply::create([
            
            'job_id' => $request->job_id,
            'user_id' => Auth::user()->id,

        ]);

        if($job_apply){
            return redirect('/jobs/single/'.$request->job_id.'')
                ->with('applied','Your application has been submitted successfully');
        }
    }
}
