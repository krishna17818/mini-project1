@extends('layouts.default')

@section('content')

<form class="form-horizontal" action='' method="POST">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h1 class="panel-title">Message</h1>
                            </div>
                           <!-- <div class="col col-xs-6 text-right">
                                <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th class="hidden-xs">Message</th>
                                <th class="hidden-xs">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <td align="center">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-warning"><em class="fa fa-trash">Delete</em></a>
                                </td>
                                <td><a href="/card" class="alert-link">Hello Pro</a></td>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
</form>
@endsection

