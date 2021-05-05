@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto d-flex justify-content-center" style="background-image: url('https://p0.pikist.com/photos/129/874/drawing-pad-note-pad-white-background-pen-blank-pad-business-paper-work.jpg'); background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;">
    <div class="card d-flex justify-content-center " style="border:2px dotted black;background-color:#d6d6c2;width:50%;margin-top:100px;" >
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">What next you need Write</h1>
    <a href="/note/index" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span>
    </a>
</div>

<form method="POST" action="/note" enctype="multipart/form-data" class="py-5 d-flex justify-content-center">
    @csrf
    <div class="py-1" style="margin-left: 50px">
        <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title" />
    </div>
    <div class="py-1" style="margin-left: 50px">
        <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
    </div>
    <div style="margin: 100px">
    <button type="submit" class="uppercase mt-15" style="text-decoration: none; color:#ffffff;font-weight:bold;
 background-color:#cc9966;"> Save Note </button>
 </div>


</form>
</div>
</div>
@endsection