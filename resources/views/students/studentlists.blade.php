@extends('layout')
@section('content')

@if($students->isNotEmpty())
<div class="container ">
    <center>
        <h1>LIST of Students</h1>
    </center>
    <div class="row gy-5">
        @foreach($students as $student)

        <div class="col-6 card" style="width: 20rem;">
            <div class="p-3">

                @if ($student->avatar)
                <img src="{{ asset('images/'.$student->avatar) }}" alt="{{ $student->avatar }}" height="200px" width="200px" class="card-img-top">
                @else
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lalanguefrancaise.com%2Fdictionnaire%2Fdefinition%2Fphoto&psig=AOvVaw0AcR8zAJ4Twd0Pebij3nsz&ust=1637437159582000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCJC8zPWWpfQCFQAAAAAdAAAAABAD" height="30px" width="30px" class="card-img-top">
                @endif
                <div class="card-body">
                    <center>
                        <p class="card-text">{{$student->name}}</p>
                    </center>
                </div>
            </div>

        </div>


        @endforeach()
    </div>
</div>
@else()
<center>
    <h2>No Registration</h2>
</center>
@endif()

@endsection