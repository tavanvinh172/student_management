@extends('layouts.layouts')

@section('content')
@php
    $i = 0;
@endphp
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHN0dWRlbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" width="30" height="30" class="d-inline-block align-top" alt="">
      Admin
    </a>
  </nav>
<div class="row">
    <div class="container">

        <div class="col-md-12">
            <h3>
                Student management
            </h3>
        </div>
        <div class="col-md-12">
            <hr>
            <a type="button" class="btn btn-primary" style="color: white;" href="students/add">Add new student</a>
            <hr>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Full name</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $i++; }}</td>
                            <td>{!! $student->fullname !!}</td>
                            <td>{!! $student->birthday !!}</td>
                            <td>{!! $student->address !!}</td>
                            <td><a type="button" class="btn btn-secondary" style="color: white;" href="students/edit/{!! $student->id !!}">Edit</a>
                                <a type="button" class="btn btn-secondary" style="color: white;" href="students/delete/{!! $student->id !!}">Delete</a>
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection