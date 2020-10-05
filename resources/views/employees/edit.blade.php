@extends('layouts.app')

@section('content')

<div class="col md-8">

  <form class="" action="{{ route('employee-update' , $emp -> id) }}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" value="{{ $emp -> name }}">
    </div>
    <div class="form-group">
      <label for="lastname"> Lastname</label>
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastName" value="{{ $emp -> lastname }}">
    </div>
    <div class="form-group">
      <label for="personal_code"> personal_code </label>
      <input type="text" name="personal_code" class="form-control" id="personal_code" placeholder="lastName" value="{{ $emp -> personal_code }}">
    </div>
    <div class="form-group">
      <label for="personal_code"> Date of Birth </label>
      <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{ $emp -> date_of_birth }}">
    </div>
    <div class="form-group">
      <label for="location_id">Location</label>
      <select class="" name="location_id">

        @foreach ($loc as $location)

        <option value="{{ $location->id }}"

          @if ($emp -> location -> id === $location -> id)

            selected

          @endif

          >{{ $location -> city}} {{ $location -> country}} </option>

      @endforeach

      </select>

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection
