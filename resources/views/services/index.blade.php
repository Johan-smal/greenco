@extends('layouts.app')

@section('title')
    Services
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header container-fluid">
                    <div class="row">
                        <div class="col-md-8 d-flex">
                            <h3 class="">Services</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-primary" href="{{ route('services.create')}}">Create New</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                {{-- <td>ID</td> --}}
                                <td>Date</td>
                                <td>Customer</td>
                                <td>Lawn Mowed</td>
                                <td>Trees Trimmed</td>
                                <td>Rubble Removed</td>
                                <td>Comment</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $key => $service)
                            <tr>
                                {{-- <td>{{ $service->id }}</td> --}}
                                <td>{{ $service->date }}</td>
                                <td>{{ $service->customer->fullname }}</td>
                                <td>{{ $service->lawn ? 'Yes' : 'No'}}</td>
                                <td>{{ $service->trees ? 'Yes' : 'No'}}</td>
                                <td>{{ $service->rubble ? 'Yes' : 'No'}}</td>
                                <td>{{ $service->comment }}</td>
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