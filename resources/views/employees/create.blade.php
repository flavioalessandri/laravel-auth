@extends('layouts.app')

@section('content')

<div class="col md-8">

  <form class="" action="{{ route('employee-store') }}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="lastname">LastName</label>
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastName">
    </div>
    <div class="form-group">
      <label for="personal_code">Personal Code</label>
      <input type="text" name="personal_code" class="form-control" id="personal_code" placeholder="lastName">
    </div>
    <div class="form-group">
      <label for="personal_code">Date of Birth</label>
      <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="lastName">
    </div>
    <div class="form-group">
      <label for="location_id">Location</label>
      <select class="" name="location_id">

        @foreach ($locations as $location)


        <option value="{{ $location->id }}"> {{ $location -> city}} {{ $location -> country}} </option>

      @endforeach

      </select>

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection
