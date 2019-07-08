@extends('layouts.app')

@section('content')
<div class="container">

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="#"><h3>Dashboard</h3></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><h3>Tasks </h3></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/tasks/create">Add New Task</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><h3>Issues</h3></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><h3>My Projects</h3></a>
        </li>
    </ul>
    <hr>

    <div class="col-12">
        <h3>My Tasks</h3>
        <div class="card-columns">
            @foreach ($user->tasks as $tasks)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="col-md-12" style="text-align:center;">
                        <h4 class="pt-3">{{ $tasks->title}}</h4>
                        <hr>

                        <div class="row" style="padding-left:30px">
                            <p><b>Description: </b></p>
                        </div>
                        <div class="row" style="padding-left:30px;margin-top:-10px">
                                <p>{{$tasks->description}}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <p><b>Due Date:  </b></p>
                            <p style="padding-left: 5px">{{$tasks->due}}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <p><b>Category:  </b></p>
                            <p style="padding-left: 5px">{{$tasks->category}}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <p><b>Department:  </b></p>
                            <p style="padding-left: 5px">{{$tasks->department}}</p>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
