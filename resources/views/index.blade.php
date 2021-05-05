@extends('layouts.app')


@section('content')
<div class="background-image grid grid-cols-1 m-auto" style="background-image: url('https://p0.pikist.com/photos/129/874/drawing-pad-note-pad-white-background-pen-blank-pad-business-paper-work.jpg'); background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;">
    <div class="flex text-grey-100 pt-10">
    <div class="m-auto  pt-4 pb-16 sm:m-auto w-4/5 block text-center">
    <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14" style="margin-top:100px;">All of Your Notes in one place </h1>
    <button class="btn" style="
 font-weight:bold;
 background-color:#cc9966;"> <a href="/notes" class="text-center" style="text-decoration: none; color:#ffffff; "> My notes </a>
    </button>
</div>      
</div>
</div>
    
@endsection
