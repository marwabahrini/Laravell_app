@extends('layouts.app')


@section('content')
<div class="background-image grid grid-cols-1 m-auto" style="background-image: url('https://p0.pikist.com/photos/129/874/drawing-pad-note-pad-white-background-pen-blank-pad-business-paper-work.jpg'); background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;">
    <div class="flex text-grey-100 pt-10  d-flex justify-content-center">
    <div class="m-auto  pt-4 pb-16 sm:m-auto w-4/5 block text-center">
    <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14" style="margin-top:100px;">All of Your Notes in one place </h1>
      
    @if (Auth::check())
    <div  >
    <a href="/note/create"> 
    <button class="btn" style="text-decoration: none; color:#ffffff; margin-bottom:10px; width:50%;font-weight:bold;
 background-color:#cc9966;">
    Create a note  </button>
    </a>
    </div>

    @endif
    
   
    @foreach ( $notes as $note) 
    <div class="card" style="border:2px dotted black;background-color:#d6d6c2;width:100%; margin:2px;">
      <div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">{{$note->title}}</h1>
   </div>
    <div>
        <div>
        <h3 class="text-lg">Description</h3>
       <p>{{$note->description}}</p>
       <span class="text-gray-500"> Created on {{ date('jS M Y', strtotime($note->updated_at))}} </span>
        </div>
    </div>

    @if (Auth::check())
    <div class="row">
          <div class="col" style="margin:5px"> <span  class="float right">
           <a href="/note/{{ $note->id }}/edit" style="text-decoration: none; color:#ffffff;" class="uppercase bg-transparent text-gray-100
    text-xs font-extrabold py-3 px-5 rounded-3xl"> <button class="text-red-500 pr-3 btn"style="font-weight:bold;
 background-color:#cc9966;" > Edit Note </form> </a>
     </span> </div>

     <div class="col" style="margin:5px">  <span  class="float right">
           <form action=" {{ url ('note/' .$note->id )}}" method="post"
           >
           @method ('delete')
           @csrf

            <button class="text-red-500 pr-3 btn" style="text-decoration: none; color:#ffffff; font-weight:bold;
 background-color:#cc9966;" > Delete  Note  
 </form>
     </span>
</div>
</div>

      @endif
      </div>
      @endforeach


</div>      
</div>
</div>
    
@endsection
