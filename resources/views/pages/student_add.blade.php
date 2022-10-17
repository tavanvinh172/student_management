@extends('layouts.layouts')

@section('content')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHN0dWRlbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" width="30" height="30" class="d-inline-block align-top" alt="">
      Add new student
    </a>
  </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="col-12 text-center pt-5">        
                    <form id="edit-frm" method="POST" action="" class="border p-3 mt-2">
                        <div class="control-group col-6 text-left">
                            <label for="fullname">Fullname</label>
                            <div>
                                <input type="text" id="fullname" class="form-control mb-4" name="fullname"
                                    placeholder="Enter fullname"
                                    required>
                            </div>
                        </div>
                        <div class="control-group col-6 mt-2 text-left">
                            <label for="birthday">Birthday</label>
                            <div>
                                <input type="date" id="birthday" name="birthday" class="form-control mb-4" placeholder="Enter birthday" required>
                            </div>
                        </div>
        
                        <div class="control-group col-6 mt-2 text-left">
                            <label for="address">Address</label>
                            <div>
                                <input type="text" id="address" class="form-control mb-4" name="address"
                                    required>
                            </div>
                        </div>
                        @csrf 
                        @method('POST')
                        <div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection