@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Add New Student</h2>
        </div>
        <div class="pull-right">

        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <form action="{{ route('student.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input class="form-control" type="tel" name="phone" value=""  placeholder="Enter Phone">
        </div>
        <div class="left">
            <label for="address">Address</label>
            <input class="form-control" type="text" name="address" value=""  placeholder="Enter Address">
        </div>
        <div class="left">
            <label for="grade">Grade</label>
            <input class="form-control" type="number"  min="1" max="12" name="grade" value="" placeholder="Enter between 1 to 12">
        </div>
        <div class="left">
           <button type="submit">Submit</button>
            <a href="#">Cancle</a>
        </div>

    </form>
</div>
