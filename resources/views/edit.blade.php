@extends('layouts.app')
@section('javascript')
<script src="/js/star-rating.js" defer></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        論文編集<a href="/home"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                </div>
                <form action="{{ route('update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="paper_id" value={{ $edit_paper['id'] }} />
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" value={{ $edit_paper['title'] }}>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="url" value={{ $edit_paper['url'] }}>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="comment" rows="3">{{ $edit_paper['comment'] }}</textarea>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Abstract</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="abstract" rows="3">{{ $edit_paper['abstract'] }}</textarea>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Rating</label>
                        <div class="col-sm-10">
                            <div class="rate-form">
                                <div class="mt-2">
                                    @for($i = 0; $i < 5; $i++) <input id={{ "Star".$i }} type="radio" name="rate" value={{$i + 1}} style="display: none;">
                                        <label for={{ "Star".$i }}>
                                            @if($i < $edit_paper['assessment'])<i class="fa-solid fa-star" id={{ "star".$i }} style="cursor: hand; cursor:pointer;"></i>
                                                @else <i class="fa-regular fa-star" id={{ "star".$i }} style="cursor: hand; cursor:pointer;"></i>
                                                @endif
                                        </label>
                                        @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection