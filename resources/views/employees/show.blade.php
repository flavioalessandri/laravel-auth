@extends('layouts.app')

@section('content')

  <div class="content row justify-content-center">

    <table class="col-md-8 table">

      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">Personal Code</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Location</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">{{$employee->id}}</th>
          <td>{{ $employee-> name }}</td>
          <td>{{ $employee-> lastname }}</td>

          <td>

            @guest
            <a href="{{ route('login') }}">
                Visibile agli utenti registrati
            </a>

            @endguest


          @auth

              {{ $employee-> personal_code }}

          @endauth
          </td>

          <td>{{ $employee-> date_of_birth }}</td>
          <td>{{ $employee-> location -> city }},{{ $employee-> location -> country}} </td>

    </tr>
  </tbody>
</table>

    @auth
   <div class="col-md-8 table">
     <button type="button" class="btn btn-primary btn-block"><a style="color:white;" href="{{route('employee-destroy', $employee->id)}}">DELETE EMPLOYEE</a></button>
   </div>

  @endauth


  </div>


@endsection
