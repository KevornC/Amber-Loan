@extends('layouts.login')


@section('content')
  <section class="bg-gray-100 pb-100 ">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Amber Loan Login
      </h1>
      <div class="">
        @livewire('login');
      </div>
</section>
@endsection