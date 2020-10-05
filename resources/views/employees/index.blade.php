@extends('layouts.app')

@section('content')

  <div class="content row justify-content-center">

    <table class="col-md-8 table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">See Details</th>

          @auth

            <th scope="col">Update</th>

          @endauth
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)

        <tr>
          <th scope="row">{{$employee->id}}</th>
          <td>{{$employee->name}}</td>
          <td>{{$employee->lastname}}</td>
          <td><a href="{{route('employees-show', $employee ->id)}}">DETAILS</a></td>

          @auth

            <td> <a href="{{ route('employee-edit', $employee->id) }}">
              UPDATE  </a> </td>

          @endauth

        </tr>
      @endforeach
      </tbody>
    </table>

    @auth

      <div class="create">
        <a class="btn-danger" href="{{route ( 'employee-create' ) }}">CREATE NEW EMPLOY</a>
      </div>

    @endauth

  </div>


@endsection
