@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img width="50" src="{{asset('avatar/logo.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <form action="{{route('profile.store')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">Update your profile information</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea name="address" class="form-control" rows="3" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Experience</label>
                                <textarea name="experience" class="form-control" rows="3" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">BioDara</label>
                                <textarea name="bio" class="form-control" rows="3" ></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">User Description</div>
                    <div class="card-body">
                        <p><b>Name: </b>{{Auth::user()->name}}</p>
                        <p><b>E-mail: </b>{{Auth::user()->email}}</p>
                        <p><b>Address: </b>{{Auth::user()->profile->address}}</p>
                        <p><b>Experience: </b>{{Auth::user()->profile->experience}}</p>
                        <p><b>BioData: </b>{{Auth::user()->profile->bio}}</p>
                        <p><b>Member Since: </b>{{Auth::user()->profile->created_at->diffForHumans()}}</p>
                    </div>
                </div>
                <form enctype="multipart/form-data" action="{{route('profile.coverletter')}}" method="post">
                <div class="card">
                    <div class="card-header">Update Your Cover Letter</div>
                    <div class="card-body">
                        <input name="cover_letter" type="file" class="form-control"><br>
                        <button class="btn btn-success btn-block">Update</button>
                    </div>
                </div>
                </form>
                <div class="card">
                    <div class="card-header">Update Your Resume</div>
                    <div class="card-body">
                        <input name="resume" type="file" class="form-control"><br>
                        <button class="btn btn-success btn-block">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
