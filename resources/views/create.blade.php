@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">論文追加</div>
                <form>
                    <div class="row m-3">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTitle">
                        </div>
                    </div>
                    <div class="row m-3">
                        <label for="inputURL" class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" id="inputURL">
                        </div>
                    </div>
                    <div class="row m-3">
                        <label for="textareaComment" class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="textareaComment" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label for="textareaAbstract" class="col-sm-2 col-form-label">Abstract</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="textareaAbstract" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-sm-10 offset-sm-2">
                            <label for="starRating" class="col-sm-2 col-form-label">Rating</label>
                            <div>
                                <i class="fa-solid fa-star" id="star0"></i>
                                <i class="fa-regular fa-star" id="star1"></i>
                                <i class="fa-regular fa-star" id="star2"></i>
                                <i class="fa-regular fa-star" id="star3"></i>
                                <i class="fa-regular fa-star" id="star4"></i>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/star-rating.js') }}"></script>
@endsection