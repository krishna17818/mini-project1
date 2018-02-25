@extends('layouts.default')
@section('content')
        <!DOCTYPE html>
<body>
<div lang="en">
    <head>
      <!--  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <div class="card mt-10 pl-5 pr-5"><h3>Contact Messages</h3>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>kp537@njit.edu</td>
                    <td>Hello Prof, My name is krishna, IS601
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
@endsection
