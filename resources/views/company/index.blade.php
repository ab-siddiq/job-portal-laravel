@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="company-profile">
                <img height="300px" src="{{asset('cover/giveUp.jpg')}}" width="100%">
            </div><br>
            <div class="company-desc"><br>
                <img src="{{asset('avatar/logo.png')}}" width="80">
                <h1>{{$company->cname}}</h1>
                <p>{{$company->description}}</p>
                <p><b>Slogan: {{$company->slogan}}</b></p>
                <p><b>Address: {{$company->address}}</b></p>
                <p><b>Phone: {{$company->phone}}</b></p>
                <p><b>Website: {{$company->website}}</b></p>
            </div>
            <table class="table">
                <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </thead>
                <tbody>
                @foreach($company->jobs as $job)
                    <tr>
                        <td>
                            <img width="50" src="{{asset('avatar/logo.png')}}" alt="">
                        </td>
                        <td>
                            Position: {{$job->position}}<br>
                            Job Type: <i class="fa fa-clock"></i>&nbsp;{{$job->type}}
                        </td>
                        <td>
                            Address: <i class="fa fa-map-marker"></i>&nbsp;{{$job->address}}
                        </td>
                        <td>
                            <i class="fa fa-calendar-check"></i>&nbsp;Date:{{$job->created_at->diffForHumans()}}
                        </td>
                        <td>
                            <a href="{{route('jobs.show',[$job->id, $job->slug])}}">
                                <button class="btn btn-success">Apply</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
