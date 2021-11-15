<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if($viewmode==true)
    <table class="min-w-full bg-white ">
        <thead class="text-white bg-gray-800">
            <tr>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Name</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Name</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Loan Period</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Rate</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Montly Payment</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Total Payment</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($loan as $item)     
            <tr>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->name}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->business_name}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->repayment_period}} year(s)</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->rate->business_rate * 100}}%</td>
                <td class="w-1/3 px-4 py-3 text-left">${{$item->repayment_amount}}</td>
                <td class="w-1/3 px-4 py-3 text-left">${{$item->total_repayment_amount}}</td>
            </tr>
            @endforeach
    
        </tbody>
    </table>
    @else
    @if ($successMsg)
                    <div class="p-4 mt-8 rounded-md bg-red-50">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium leading-5 text-green-800">
                                    {{ $successMsg }}
                                </p>
                            </div>
                            <div class="pl-3 ml-auto">
                                <div class="-mx-1.5 -my-1.5">
                                    <button
                                        type="button"
                                        wire:click="$set('successMsg', null)"
                                        class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-red-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                                        aria-label="Dismiss">
                                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
    {{-- <table class="bg-white min-w-screen">
        <thead class="text-white bg-gray-800">
            <tr>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Name</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Name</th>
                {{-- <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">National ID</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Passport Size Photo</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">TRN</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Proof of Address</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Loan Purpose Document</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Plan</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Balance Sheet</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Bank Book</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Registration Certificate</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Income and Expenditure Statement</th>
                <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Cash Flow Statement and Projections</th>
                <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($borrowers as $item)     
            <tr>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->name}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->business_name}}</td>
                {{-- <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->national_id}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->passport_photo}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->trn}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->address}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->loanP_Document}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->business_plan}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->balance_sheet}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->bank_book}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->business_Rcert}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->business_IEStatement}}</td>
                <td class="w-1/3 px-4 py-3 text-left">{{$item->business_CF_statement_projections}}</td> 
                @if($item->borrower->status=='Approved')
                <td class="w-1/3 px-4 py-3 text-left"><a href="" class="no-underline hover:underline" wire:click.prevent="view({{$item->id}})">View</a></td>
                @else
                <td class="w-1/3 px-4 py-3 text-left"><a href="" class="no-underline hover:underline" wire:click.prevent="approve({{$item->id}})">Approve</a></td>
                @endif
            </tr>
            @endforeach
    
        </tbody>
    </table> --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta http-equiv="refresh" content="5"> --}}
        {{-- <title>data table</title> --}}
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
        <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">
            {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <style>
          .button{
                margin:20px;
                margin-top: 20px;
            }
            .backbtn{
                border: 2px solid black;
                border-radius: 5px;
                padding:5px;
    
            }
            .button a{
                text-decoration: none;
            }
            .button a:hover{
                cursor:pointer;
            }
          input{
                border: 2px solid black;
            border-radius: 5px;
            padding:10px;
            width:100px;
            height:35px;
          }
            </style>
        </head>
        <body>
            <div class="button">
                <a class="backbtn" href="{{route('home')}}">Back</a>
            <input type="button" value = "Refresh" title="Click to see changes" onclick="history.go(0)" />
            </div>
        <br>
        <div class="container">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Name</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Name</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">National ID</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Passport Size Photo</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">TRN</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Proof of Address</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Loan Purpose Document</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Plan</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Balance Sheet</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Bank Book</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Registration Certificate</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Income and Expenditure Statement</th>
                        <th class="w-1/3 px-4 py-3 text-sm font-semibold text-left uppercase">Business Cash Flow Statement and Projections</th>
                        <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borrowers as $item)     
                    <tr>
                        <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->name}}</td>
                        <td class="w-1/3 px-4 py-3 text-left">{{$item->borrower->business_name}}</td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->borrower->national_id)}}" target="_blank">View National ID</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->borrower->passport_photo)}}" target="_blank">View Passport Size Photo</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->borrower->trn)}}" target="_blank">View TRN</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->borrower->address)}}" target="_blank">View Proof Of Address</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->loanP_Document)}}" target="_blank">View Loan Purpose Document</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->business_plan)}}" target="_blank">View Business Plan</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->balance_sheet)}}" target="_blank">View Balance Sheet</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->bank_book)}}" target="_blank">View Bank Book Statment</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->business_Rcert)}}" target="_blank">View Registration Certificate</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->business_IEStatement)}}" target="_blank">View Income and Expenditure Statement</a></td>
                        <td class="w-1/3 px-4 py-3 text-left"><a href="{{url('/storage/AmberLoan/BusinessLoanDocuments/AmberLoan/'.$item->business_CF_statement_projections)}}" target="_blank">View Cash Flow Statment and Projections</a></td>
                        @if($item->borrower->status=='Approved')
                        <td class="w-1/3 px-4 py-3 text-left"><a href="" class="no-underline hover:underline" wire:click.prevent="view({{$item->id}})">View</a></td>
                        @else
                        <td class="w-1/3 px-4 py-3 text-left"><a href="" class="no-underline hover:underline" wire:click.prevent="approve({{$item->id}})">Approve</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js  "></script>
    
        <script>
            $(document).ready(function() {
                var table = $('#example').DataTable( {
                    responsive: true
                } );
    
                new $.fn.dataTable.FixedHeader( table );
            } );
        </script>
    </body>
    </html>

    @endif
</div>
