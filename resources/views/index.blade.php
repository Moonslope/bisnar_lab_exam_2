@extends('layout.layout')

@section('title', 'Home')

@section('content')
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col p-0">
                <div>
                
                    <h1 class="text-center bg-dark text-white p-3">Task List</h1>

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success me-3" href="{{route('create')}}">ADD TASK</a>
                    </div>
                   
                    <div>
                        <table class="table table-bordered">
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            
                            @foreach ($tasks as $task)
                                <tr>
                                    <th>
                                        <input type="checkbox" >
                                    </th>
                                    <th>{{$task->title}}</th>
                                    <th>{{$task->description}}</th>
                                    <th>
                                        @if ($task->is_completed=1)
                                            <span class="badge bg-warning">Pending</span>
                                        @else
                                             <span class="badge bg-success">Done</span>
                                        @endif
                                    </th>
                                    <th class="d-flex gap-3">

                                        <a class="btn btn-info" href="{{route('edit', ['task'=>$task])}}">EDIT</a>

                                        <form action="{{route('delete', ['task'=>$task])}}" method="post">
                                            @csrf

                                            @method('delete')

                                            <button class="btn btn-danger" type="submit">DELETE</button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                           
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection