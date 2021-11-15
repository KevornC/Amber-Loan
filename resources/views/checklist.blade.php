@extends('layouts.guest')


@section('content')
<section class="py-8 bg-gray-100">
    <div class="container px-2 pt-4 pb-12 mx-auto text-gray-800">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Business Loan Checklist
      </h1>
      <div class="w-full mb-4">
        <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
      </div>
        <div class="grid justify-items-stretch ">
        <div class="z-10 mx-auto mt-4 bg-white rounded-lg shadow-lg justify-self-center flexw-5/6 cenflex-col lg:w-1/3 lg:mx-0 sm:-mt-6">
          <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
            <div class="w-full p-8 text-3xl font-bold text-center">Checklist</div>
            <div class="w-full h-1 py-0 my-0 rounded-t gradient"></div>
            <ul class="w-full text-base font-bold text-center">
              <li class="py-4 border-b">Copy of TRN</li>
              <li class="py-4 border-b">Proof of Address</li>
              <li class="py-4 border-b">Copy of National ID</li>
              <li class="py-4 border-b">Copy of Passport Size Photo</li>
              <li class="py-4 border-b">Copy of Document Explaining Loan Purpose</li>
              <li class="py-4 border-b">Copy of Business Plan</li>
              <li class="py-4 border-b">Copy of Balance Sheet</li>
              <li class="py-4 border-b">Copy of Updated Bank Book</li>
              <li class="py-4 border-b">Copy of Business Registration Certificate</li>
              <li class="py-4 border-b">Copy of Income and Expenditure Statement</li>
              <li class="py-4 border-b">Copy of Balance Cash Flow Statement and Cash Flow Projections</li>
            </ul>
          </div>
          {{--  <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
            </div>  --}}
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@endsection