@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">GreenCo Customer Management tool</div>
                    <div class="row">
                        <div class="col-md-6 text-center py-5">
                            <a href="{{ route('customers.index') }}"><h2>Customers</h2></a>
                        </div>
                        <div class="col-md-6 text-center py-5">
                            <a href="{{ route('services.index') }}"><h2>Services</h2></a>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
