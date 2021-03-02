@extends('temp2.index')

@section('title')

        All Data Table

@endsection

@section('table')


               
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                All Data
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Registration Number</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Registration Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($niloy as $black)
                                            <tr>
                                                <td>{{$black->id}}</td>
                                                <td>{{$black->firstName}} {{$black->lastName}}</td>
                                                <td>{{$black->email}}</td>
                                                <td>{{$black->reg}}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="{{url('edit/'.$black->id)}}">EDIT</a>
                                                    <a class="btn btn-danger" href="{{url('delete/'.$black->id)}}">DELETE</a>
                                                </td>
                                                
                                            @endforeach
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                

@endsection