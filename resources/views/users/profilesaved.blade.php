@extends('layouts.app')

@section('content')

<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"></h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong></strong></span>
            </div>
          </div>
        </div>
      </div>
</section>


<div class="container mt-5">
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body pb-0">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="text-center border-end">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid avatar-xxl rounded-circle" alt="">
                            <h4 class="text-primary font-size-20 mt-3 mb-2">Jansh Wells</h4>
                            <h5 class="text-muted font-size-13 mb-0">Web Designer</h5>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="ms-3">
                            <div>
                                <h4 class="card-title mb-2">Biography</h4>
                                <p class="mb-0 text-muted">Hi I'm Jansh,has been the industry's standard
                                    dummy text To an English person alteration text.</p>
                            </div>
                            <div class="row my-4">
                                <div class="col-md-12">
                                    <div>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>Janshwells@probic.com
                                        </p>
                                        <p class="text-muted fw-medium mb-0"><i class="mdi mdi-phone-in-talk-outline me-2"></i>418-955-4703
                                        </p>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                         
                            <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-4 "  href="https://bootdey.com/snippets/view/profile-projects" target="__blank">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Projects</span>
                                    </a>
                                </li><!-- end li -->
                                
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-4  active" data-bs-toggle="tab" href="{{route('profileSavedJob')}}" role="tab" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-account-group-outline"></i></span>
                                        <span class="d-none d-sm-block">Saved Job</span>
                                    </a>
                                </li><!-- end li -->

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-4 "  href="{{route('profileAppliedjob')}}" target="__blank">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-menu-open"></i></span>
                                        <span class="d-none d-sm-block">Applied Job</span>
                                    </a>
                                </li><!-- end li -->
                            </ul><!-- end ul -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end card body -->
        </div><!-- end card -->

        <div class="card">
            <div class="tab-content p-4">
                

                

                <div class="tab-pane active show" id="team-tab" role="tabpanel">
                    <h4 class="card-title mb-4">Saved Jobs</h4>
                    <div class="row">
                        
                    <ul class="job-listings mb-5">
                        @if($saved_jobs->count() > 0)
                            @foreach($saved_jobs as $saved_job)
                                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                                <a href="{{route('single.job',$saved_job->id)}}"></a>
                                <div class="job-listing-logo">
                                    <img src="{{$saved_job->image}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                                </div>

                                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                    <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                    <h2>{{$saved_job->title}}</h2>
                                    <strong>{{$saved_job->company}}</strong>
                                    </div>
                                    <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                    <span class="icon-room"></span> {{$saved_job->job_region}}
                                    </div>
                                    <div class="job-listing-meta">
                                    <span class="badge badge-danger">{{$saved_job->job_type}}</span>
                                    </div>
                                </div>

                                </li>
                            @endforeach
                        @else
                            <div class="container mt-3">

                                <div class="alert alert-success">
                                    <p>No applications just yet</p>
                                </div>
                            </div>
                        
                        @endif

                    </ul>

                    

                    </div><!-- end row -->
                </div><!-- end tab pane -->
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="pb-2">
                    <h4 class="card-title mb-3">About</h4>
                    <p>Hi I'm Jansh, has been the industry's standard dummy text To an English
                        person, it will seem like
                        simplified.</p>
                    <ul class="ps-3 mb-0">
                        <li>it will seem like simplified.</li>
                        <li>To achieve this, it would be necessary to have uniform pronunciation</li>
                    </ul>
                    <!-- end ul -->
                </div>
                <hr>
                <div class="pt-2">
                    <h4 class="card-title mb-4">My Skill</h4>
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge badge-secondary p-2">HTML</span>
                        <span class="badge badge-secondary p-2">Bootstrap</span>
                        <span class="badge badge-secondary p-2">Scss</span>
                        <span class="badge badge-secondary p-2">Javascript</span>
                        <span class="badge badge-secondary p-2">React</span>
                        <span class="badge badge-secondary p-2">Angular</span>
                    </div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-body">
                <div>
                    <h4 class="card-title mb-4">Personal Details</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>Jansh Wells</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th scope="row">Location</th>
                                    <td>California, United States</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th scope="row">Language</th>
                                    <td>English</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th scope="row">Website</th>
                                    <td>abc12@probic.com</td>
                                </tr><!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->

        <div class="card">
            <div class="card-body">
                <div>
                    <h4 class="card-title mb-4">Work Experince</h4>
                    <ul class="work-activity mb-0">
                        <li class="work-item" data-date="2020-21">
                            <h6 class="lh-base mb-0">ABCD Company</h6>
                            <p class="font-size-13 mb-2">Web Designer</p>
                            <p>To achieve this, it would be necessary to have uniform grammar, and more
                                common words.</p>
                        </li>
                        <li class="work-item" data-date="2019-20">
                            <h6 class="lh-base mb-0">XYZ Company</h6>
                            <p class="font-size-13 mb-2">Graphic Designer</p>
                            <p class="mb-0">It will be as simple as occidental in fact, it will be
                                Occidental person, it will seem like simplified.</p>
                        </li>
                    </ul><!-- end ul -->
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>
</div>

@endsection