@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <h3>My Tasks</h3>
        <div class="row">
            @foreach ($user->tasks as $tasks)
            <div class="col-4 pt-2">
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
