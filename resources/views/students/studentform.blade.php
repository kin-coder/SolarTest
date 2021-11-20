@extends('layout')
@section('content')

<div class="container col-md-4">
    <h1>New Student</h1>

    <form action="home" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="g-3 align-items-center">

            <div class="g-3">
                <label for="name" class="col-form-label">Firstname</label>
            </div>

            <div class="mb-3">
                <input type="text" id="name" name="firstname" class="form-control @error('firstname')is-invalid @enderror" placeholder="your name">
                <div id="name" class="invalid-feedback">
                    Please provide a valid name.
                </div>

            </div>

            <div class="g-3">
                <label for="ageStd" class="col-form-label">Age</label>
            </div>

            <div class="mb-3">
                <input type="number" id="ageStd" name="age" class="form-control @error('age')is-invalid @enderror" placeholder="your age" min="1">
                <div id="ageStd" class="invalid-feedback">
                    Please provide a valid Age.
                </div>
            </div>

            <div class="g-3">
                <label for="pictStd" class="col-form-label">Picture</label>
            </div>

            <div class="mb-3">
                <input type="file" id="pictStd" name="picture" class="form-control @error('picture')is-invalid @enderror" placeholder="your age">
                <div id="pictStd" class="invalid-feedback">
                    Please insert photo.
                </div>
            </div>

            <br>
            <div class="mb-3">
                <input type="submit" class="btn btn-outline-primary" value="save">
            </div>
        </div>
    </form>
</div>
@endsection