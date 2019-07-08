@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 offset-2">
        <div class="card text-center">
            <div class="card-header pt-3">
                <h2>{{ $tasks->title}}</h2>
            </div>
            <div class="card-body">
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
</div>
@endsection
