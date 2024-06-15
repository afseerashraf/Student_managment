@extends('layout')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Enrollment Appication</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('enrollmetCreate') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Enroll Number</th>
                                    <th>Batch</th>
                                    <th>Date</th>
                                    <th>Student</th>
                                    <th>Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enrollment as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->enroll_no }}</td>
                                    <td>{{ $item->batch->name }}</td>
                                    <td>{{ $item->student->name}}</td>
                                    <td>{{ $item->join_date}}</td>
                                    <td>{{ $item->fees }}</td>


                                    

                                    <td>
                                        <a href="{{ route('showEnrollment', encrypt($item->id)) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ route('editEnrollment', encrypt($item->id)) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <a href="{{ route('deleteEnrollment', encrypt($item->id)) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection