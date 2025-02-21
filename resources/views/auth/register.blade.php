@extends('layouts.app')

@section('content')

<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');margin-top: -35px;" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Register</h1>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Register</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-2">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" required>

    <label for="role">Register as:</label>
    <select name="role" id="role" required>
        <option value="employer">Employer (Job Seeker)</option>
        <option value="company">Company (Job Poster)</option>
    </select>

    <div id="employerFields" style="display: none;">
        <label for="resume">Upload Resume (PDF/DOC)</label>
        <input type="file" name="resume">
    </div>

    <div id="companyFields" style="display: none;">
        <label for="company_name">Company Name</label>
        <input type="text" name="company_name">

        <label for="company_address">Company Address</label>
        <input type="text" name="company_address">
    </div>

    <button type="submit">Register</button>
</form>

<script>
    document.getElementById('role').addEventListener('change', function () {
        document.getElementById('employerFields').style.display = (this.value === 'employer') ? 'block' : 'none';
        document.getElementById('companyFields').style.display = (this.value === 'company') ? 'block' : 'none';
    });
</script>
              <!-- <form action="{{ route('register') }}" method="POST" class="p-4 border rounded">
                @csrf

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">User Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="row form-group mb-4">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Re-Type Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" name="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                  </div>
                </div>

              </form> -->

        </div>
    </div>
</div>
@endsection
