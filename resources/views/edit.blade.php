@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hola {{ Auth::user()->name }} aquí puedes crear tus tareas</div>

                <div class="card-body">
                    <div class="container-fluid">
 

                    <form method="POST" action="/task/{{$task->id}}" enctype="multipart/form-data">
                        @csrf
                        @method("POST")
                        Id: <input required type="text" name="id"><br>
                        Nombre: <input required  type="text" name="name"><br>
                        Descripción:<input required type="textarea" name="description"><br>
                        Fecha límite:<input required  type="date" name="due_date"><br>
                        
                        <input type="submit" value="Editar" >
                    </form>
           
                    </div>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
