@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hola {{ Auth::user()->name }} estas son tus tareas</div>

                <div class="card-body">
                    <div class="container-fluid">
                    
                    <div class="col-md-8" style="margin-bottom: 15px;">
                        <form action="/create" method="GET">
                                    <input class="btn btn-primary" type="submit" value="Crear Tarea">
                        </form>
                    </div>  

                    @foreach($task as $tasks)

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="logo\Tareas.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tasks->id}} | {{ $tasks->name}} </h5>
                            <p class="card-text">{{ $tasks->description}}</p>
                            <a  class="btn btn-primary">{{ $tasks->due_date}}</a>
                        </div>
                        <div class="card-body">

                            <form action="/task/{{$tasks->id}}/edit" method="GET">
                                <input class="btn btn-primary" type="submit" value="Editar">
                            </form>
                            <form method="POST" action="/task/{{$tasks->id}}" enctype="multipart/form-data">
                                @csrf
                                @method("DELETE")
                            
                                <input class="btn btn-primary" type="submit" value="Borrar" >
                            </form>
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
