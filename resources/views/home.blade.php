@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hola {{ Auth::user()->name }} estas son tus tareas</div>

                <div class="card-body">
                    <div class="container-fluid">
                <table>
                    <tr>
                        <th>Id </th>
                        <th>Nombre</th>
                        <th>Descripción tarea</th>
                        <th>Fecha máxima</th>
                    </tr>

                    @foreach($task as $tasks)

                        <tr>
                            <td>{{ $tasks->id}}</td>
                         
                            <td>{{ $tasks->name}}</td>
                            <td>{{ $tasks->description}}</td>
                            <td>{{ $tasks->due_date}}</td>
                        </tr>

    
                    @endforeach
                </table>
                    </div>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
