@extends('temp2.index')

@section('title')
    Students Register
@endsection

@section('register')

    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('/teachers_store')}}" method="post" >
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="name">Name</label>
                                                        <select class="custom-select" id="name" name="student_id">
                                                            @foreach($data as $row)
                                                            <option value="{{$row->id}}" selected>{{$row->firstName}} {{$row->lastName}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Registration Number</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="CMT 2014 0035" name="reg" />
                                            </div>
                                            
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" >Create Account</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection