@extends('layout.layout');

@section('title', 'Edit')

@section('content')
    <div class="container-fluid vh-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col col-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center mb-5">EDIT TASK</h1>

                        <form action="{{route('update', ['task'=>$task])}}" method="post">
                            @csrf
                            @method('put')

                            <input type="text" name="title" placeholder="Title" class="form-control mb-3" value="{{$task->title}}">
                            <textarea name="description" cols="30" rows="6" class="form-control" placeholder="Description">{{$task->description}}</textarea>

                            <input type="checkbox" id="status" name="is_completed"  value="1" {{$task->is_completed ? 'checked' : ''}}>
                            <label for="status">Completed</label>
                            <div class="d-flex gap-4 mt-4">
                                 <a class="btn btn-outline-dark mt-3 w-50" href="{{route('home')}}">Cancel</a>
                                <button class="btn btn-dark mt-3 w-50" type="submit">Update</button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection