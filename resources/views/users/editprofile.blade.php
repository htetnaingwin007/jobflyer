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

<section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Edit Profile</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" method="post">
              <h3 class="text-black mb-5 border-bottom pb-2">Profile Edit</h3>
              
              <div class="form-group">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Profile</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Profile</button>
                  </li>
                  
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <img src="{{$user->image}}" alt="" class="w-25 h-25 m-2">
                        <input type="hidden" name="old_image" id="" value="{{$user->image}}">
                    </div>
                    <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                        <input type="file" accept="image/*" class="m-2 form-control @error('image') is-invalid @enderror" id="image" aria-label="Upload" name="image" value="{{old('profile')}}">
                    </div>
                    
                </div>
                
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">

                <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>
              <div class="form-group">

                <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" value="{{$user->date_of_birth}}">
                    @error('date_of_birth')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>
              <div class="form-group">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password}}">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{$user->phone}}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group">
                <label for="address">Job Region</label>
                <select class="selectpicker border rounded" id="address" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region" name="address">
                      <option>Anywhere</option>
                      <option>San Francisco</option>
                      <option>Palo Alto</option>
                      <option>New York</option>
                      <option>Manhattan</option>
                      <option>Ontario</option>
                      <option>Toronto</option>
                      <option>Kansas</option>
                      <option>Mountain View</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="skill">Skills</label>
                <input type="text" class="form-control  @error('skill') is-invalid @enderror" id="skill" name="skill" value="{{$user->skill}}">
                    @error('skill')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group">
                <label for="workexperience">Workexperience or CurrentStatus</label>
                <div class="editor @error('workexperience') is-invalid @enderror" id="editor-1" name="workexperience">
                  <p>{{$user->workexperience}}</p>
                </div>
                @error('workexperience')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="bio">Biography</label>
                <div class="editor @error('bio') is-invalid @enderror" id="editor-2" name="bio">
                  <p>{{$user->bio}}</p>
                </div>
                @error('bio')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              

              <div class="form-group">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane1" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Cv</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane1" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Cv</button>
                  </li>
                  
                </ul>
                <div class="tab-content" id="myTabContent1">
                    <div class="tab-pane fade show active" id="image-tab-pane1" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <img src="{{$user->cv}}" alt="" class="w-25 h-25 m-2">
                        <input type="hidden" name="old_image" id="" value="{{$user->cv}}">
                    </div>
                    <div class="tab-pane fade" id="new_image-tab-pane1" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                        <input type="file" accept="image/*" class="m-2 form-control @error('cv') is-invalid @enderror" id="image" aria-label="Upload" name="image" value="{{old('profile')}}">
                    </div>
                    
                </div>
                
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

            </form>
          </div>

         
        </div>
        <div class="row align-items-center mb-5">
          
          <div class="col-lg-4 ml-auto">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection