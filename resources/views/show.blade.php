@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hola {{ Auth::user()->name }} aquí puedes crear tus tareas</div>

                <div class="card-body">
                    <div class="container-fluid">
 

                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title">{{ $task->id}} | {{ $task->name}} </h5>
                            <p class="card-text">{{ $task->description}}</p>
                            <a  class="btn btn-primary">{{ $task->due_date}}</a>
                        </div>
                    </div>
           
                    </div>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
