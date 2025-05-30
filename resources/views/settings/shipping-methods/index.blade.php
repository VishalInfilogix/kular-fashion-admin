@extends('layouts.app')

@section('title', 'Shipping Method Settings')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <x-error-message :message="$errors->first('message')" />
                    <x-success-message :message="session('success')" />

                    <div class="card">
                        <div class="card-body">
                            @include('settings.shipping-methods.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
