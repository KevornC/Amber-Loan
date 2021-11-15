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
    <x-app-layout>
        <div class="button">
            <a class="backbtn" href="/dashboard">Back</a>
        <input type="button" value = "Refresh" title="Click to see changes" onclick="history.go(0)" />
        </div>
    <br>
    <div class="container">
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>PhoneNumber</th>
                  <th>Address</th>
                  <th>Course Name</th>
                  <th>Duration</th>
                  <th>Application Status</th>
                          <th>NationalID</th>
                          <th>PassPort Size Photo</th>
                  <th>Qualification</th>
                          <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="11">No Pending Application</td>
                </tr>
            </tbody>
        </table>f
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