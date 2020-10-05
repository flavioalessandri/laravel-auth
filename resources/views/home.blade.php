@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enter and visit our Company') }}</div>

                <div class="card-body">
                  <div class="building">

                    <a href="{{route('employees-index')}}">

                      <img src="{{asset('/img/building.jpg')}}" alt="building">

                    </a>

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
