@extends('layouts.app')


@section('content')
<div class="background-image grid grid-cols-1 m-auto" style="background-image: url('https://p0.pikist.com/photos/129/874/drawing-pad-note-pad-white-background-pen-blank-pad-business-paper-work.jpg'); background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;">
    <div class="m-auto  pt-4 pb-16 sm:m-auto w-4/5 block text-center">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All of your notes in one place </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('note.create') }}"> Create New Note</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Note No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($notes as $note)
        <tr>
            <td>i</td>
            <td>{{ $note->title }}</td>
            <td>{{ $note->description }}</td>
            <td>
                <form action="{{ route('note.destroy',$note->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('note.show',$note->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('note.edit',$note->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
  </div>
  </div>
@endsection
