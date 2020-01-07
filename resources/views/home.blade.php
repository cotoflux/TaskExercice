@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hola {{ Auth::user()->name }} estas son tus tareas</div>

                <div class="card-body">
                    <div class="container-fluid">
 

                    @foreach($task as $tasks)

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="logo\Tareas.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tasks->id}} | {{ $tasks->name}} </h5>
                            <p class="card-text">{{ $tasks->description}}</p>
                            <a  class="btn btn-primary">{{ $tasks->due_date}}</a>
                        </div>
                    </div>
    
                    @endforeach
           
                    </div>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
