@extends('layouts.app')

@section('title')
    New Customer
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Customer</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('customers.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                        <input class="form-control" name="fullname" type="text" value="{{ old('fullname', '') }}" />
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input class="form-control" name="number" type="text" value="{{ old('number', '') }}" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="submit" value="Submit" />
                        </div>
                    </form>

                    {{-- {{ Form::open(array('url' => 'customers')) }}

                        <div class="form-group">
                            {{ Form::label('fullname', 'Full Name') }}
                            {{ Form::text('fullname', Input::old('fullname'), array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('nerd_level', 'Nerd Level') }}
                            {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}
                        </div>

                        {{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection