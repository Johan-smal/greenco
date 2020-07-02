@extends('layouts.app')

@section('title')
    New Service
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Service</div>
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
                    <form method="POST" action="{{ route('services.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input class="form-control" name="date" type="date" value="{{ old('date', '') }}" />
                        </div>
                        <div class="form-group">
                            <label for="customer">Customer</label>
                            <select class="form-control" name="customer_id">
                                <option value="">Select Customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}"  {{ (old("customer_id") == $customer->id ? "selected":"") }}>{{ $customer->fullname }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lawn">Lawn Mowed</label>
                            <input name="lawn" type="checkbox" {{ (old("lawn") ? "checked":"") }} />
                        </div>
                        <div class="form-group">
                            <label for="trees">Trees Trimmed</label>
                            <input name="trees" type="checkbox" {{ (old("trees") ? "checked":"") }} />
                        </div>
                        <div class="form-group">
                            <label for="rubble">Rubble Removed</label>
                            <input name="rubble" type="checkbox" {{ (old("rubble") ? "checked":"") }} />
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea name="comment" class="form-control">{{ old('comment', '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection