@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Sample</h2>
            </div>
        </div>
    </div>
    <div class="row" align="left">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('student.create') }}">New Student</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Grade</th>
            <th>Adtion</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->grade }}</td>
            <td>
                <form method="POST" action=" {{ route('student.destroy', $student->id) }}">
                    <a onclick="return confirm('Are you sure to edit?')"; class="btn btn-primary" href="{{ route('student.edit',$student->id) }}"> Edit</a>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                        <input onclick="return confirm('Are you sure to delete?')"; type="submit" class="btn btn-danger delete-user" value="Delete">
                </form>
            </td>

        </tr>
        @endforeach
    </table>