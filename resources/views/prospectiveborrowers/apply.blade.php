@extends('layouts.guest')

@section('content')
<section class="bg-gray-100 pb-100 ">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Amber Loan
      </h1>
      <div class="">
      @livewire('multiform')
      </div>
</section>
@endsection
