@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">論文一覧</div>
                    <ul class="list-group list-group-flush">
                        @foreach($papers as $paper)
                        <li class="list-group-item">{{ $paper['title'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection