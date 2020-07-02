@extends('layouts.app')

@section('title')
    Customers
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header container-fluid">
                    <div class="row">
                        <div class="col-md-8 d-flex">
                            <h3 class="">Customers</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-primary" href="{{ route('customers.create')}}">Create New</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                {{-- <td>Actions</td> --}}
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $key => $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->fullname }}</td>
                                <td>{{ $customer->number }}</td>
                                {{-- <td>
                                    <a class="btn btn-small btn-success" href="{{ route('customers.show', ['customer' => $customer ]) }}">Show</a>
                                    <a class="btn btn-small btn-info" href="{{ route('customers.edit', ['customer' => $customer ]) }}">Edit</a>
                                </td> --}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection