@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto d-flex justify-content-center" style="background-image: url('https://p0.pikist.com/photos/129/874/drawing-pad-note-pad-white-background-pen-blank-pad-business-paper-work.jpg'); background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;">
    <div class="card d-flex justify-content-center " style="border:2px dotted black;background-color:#d6d6c2;width:50%;margin-top:100px;" >
<div class="d-flex justify-content-center flex justify-between border-b pb-4 px-">

<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">{{$note->title}}</h1>
<span class="fas fa-arrow-left"> </span>
</a>
</div>
    <div>
    
        <div>
        <h3 class="text-lg">Description :</h3>
            <p>{{$note->description}}</p>
        </div>

    </div>

</div>
</div>

@endsection