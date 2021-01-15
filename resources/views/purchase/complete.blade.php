@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card w-50 p-5 m-auto" style="background: #fff; color: black">
            <h3 class="text-center">Thank you</h3>
            <h1 class="text-center">Payment successfully!</h1>
            <h4>Your total paycheck is: ${{ $total }}</h4>
            <div class="text-center">
                <a href="/home" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>
@endsection