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
                <a class="dropdown-item" href="#">Add New Task</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><h3>Issues</h3></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><h3>My Projects</h3></a>
        </li>
    </ul>

</div>
@endsection
