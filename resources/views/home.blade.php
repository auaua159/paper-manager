@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        論文一覧<a href="/create"><i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2 mb-2">
                        @foreach($papers as $paper)
                        <div class="container mt-2 mb-2 col-md-10 justify-content-center">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="paper-title mb-0">{{ $paper['title'] }}</h5>
                                        <div>
                                            @if ($paper['user_id'] == $user_id)
                                            <form action={{ route('destroy') }} method="POST">
                                                @csrf
                                                <input type="hidden" name="paper_id" value={{ $paper['id'] }}>
                                                <button type="submit"></button>
                                            </form>
                                            @endif
                                            <a href={{ $paper['url'] }} target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="accordion" id={{ "acordion".$paper['id'] }}>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id={{ "comment".$paper['id'] }}>
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target={{ '#commentCollapse'.$paper['id'] }} aria-expanded="true" aria-controls={{ "commentCollapse".$paper['id'] }}>
                                                    Abstract
                                                </button>
                                            </h2>
                                            <div id={{ "commentCollapse".$paper['id'] }} class="accordion-collapse collapse show" aria-labelledby={{ "comment".$paper['id'] }}>
                                                <div class="accordion-body">
                                                    {{ $paper['abstract'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id={{ "abstract".$paper['id'] }}>
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target={{ '#abstractCollapse'.$paper['id'] }} aria-expanded="false" aria-controls={{ "abstractCollapse".$paper['id'] }}>
                                                    Comment
                                                </button>
                                            </h2>
                                            <div id={{ "abstractCollapse".$paper['id'] }} class="accordion-collapse collapse" aria-labelledby={{ "abstract".$paper['id'] }}>
                                                <div class="accordion-body">
                                                    {{ $paper['comment'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            @for($i = 0; $i < 5; $i++) @if($i < $paper['assessment'])<i class="fa-solid fa-star"></i>
                                                @else <i class="fa-regular fa-star"></i>
                                                @endif
                                                @endfor
                                        </div>
                                        Added by: {{ $user[$paper['user_id'] - 1]['name'] }}
                                    </div>
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