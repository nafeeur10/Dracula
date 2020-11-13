@extends('layouts.home')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>Buyer ID</td>
                <td>Buyer Name</td>
                <td>Total Diary Taken</td>
                <td>Total Pen Taken</td>
                <td>Total Eraser Taken</td>
                <td>Total items Taken</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $buyer->id }}</td>
                <td>{{ $name }}</td>
                <td>{{ $buyer->diary_amount }}</td>
                <td>{{ $buyer->pen_amount }}</td>
                <td>{{ $buyer->eraser_amount }}</td>
                <td>{{ $buyer->total }}</td>
            </tr>
        </tbody>
    </table>
@endsection