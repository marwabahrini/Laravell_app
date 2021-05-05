@extends('layouts.app')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">Update this note </h1>
    <a href="{{route('note.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"> </span>
    </a>
</div>

<x-alert />
<form method="post" action="{{route('note.edit',$note->id)}}" class="py-5">
    @csrf
    @method('patch')
    <div class="py-1">
        <input type="text" name="title" value="{{$note->title}}" class="py-2 px-2 border rounded" placeholder="Title" />
    </div>
    <div class="py-1">
        <textarea name="description" class="p-2 rounded border" placeholder="Description">{{$note->description}}</textarea>
    </div>
    

</form>

@endsection