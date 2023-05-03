@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">論文一覧</div>
                <div class="card-body">
                    <div class="mt-2 mb-2">
                        @foreach($papers as $paper)
                        <div class="container mt-2 mb-2 col-md-10 justify-content-center">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="paper-title">{{ $paper['title'] }}</h5>
                                </div>

                                <div class="card-body">
                                    <div class="accordion" id={{ "acordion".$paper['id'] }}>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id={{ "comment".$paper['id'] }}>
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target={{ '#commentCollapse'.$paper['id'] }} aria-expanded="false" aria-controls={{ "commentCollapse".$paper['id'] }}>
                                                    Comment
                                                </button>
                                            </h2>
                                            <div id={{ "commentCollapse".$paper['id'] }} class="accordion-collapse collapse" aria-labelledby={{ "comment".$paper['id'] }}>
                                                <div class="accordion-body">
                                                    {{ $paper['comment'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id={{ "abstract".$paper['id'] }}>
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target={{ '#abstractCollapse'.$paper['id'] }} aria-expanded="false" aria-controls={{ "abstractCollapse".$paper['id'] }}>
                                                    Abstract
                                                </button>
                                            </h2>
                                            <div id={{ "abstractCollapse".$paper['id'] }} class="accordion-collapse collapse" aria-labelledby={{ "abstract".$paper['id'] }}>
                                                <div class="accordion-body">
                                                    {{ $paper['abstract'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    {{ $paper['user_id'] }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection