@extends('layouts.loanofficer')

@section('content')
<h1 class="pb-6 text-3xl text-black">Dashboard</h1>
<table class="min-w-full bg-white ">
    <thead class="text-white bg-gray-800">
        <tr>
            <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Total Borrowers</th>
            <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Total Credited</th>
            <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Total Debited</th>
        </tr>
    </thead>
    <tbody class="text-gray-700">
        <tr>
            <td class="w-1/3 px-4 py-3 text-left">{{$countb}}</td>
            <td class="w-1/3 px-4 py-3 text-left">${{number_format($totalc,2)}}</td>
            <td class="w-1/3 px-4 py-3 text-left">${{number_format($totald,2)}}</td>
        </tr>

    </tbody>
</table>
@endsection
