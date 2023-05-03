@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">論文追加</div>
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="url">
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="comment" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Abstract</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="abstract" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row m-3">
                        <label class="col-sm-2 col-form-label">Rating</label>
                        <div class="col-sm-10">
                            <div class="rate-form">
                                <!-- <div class="mt-2">
                                    
                                    <input class="fa-solid fa-star" id="star0" type="radio" name="rate" value="1">
                                    <button type="button" class="fa-regular fa-star" id="star1"></button>
                                    <i class="fa-regular fa-star" id="star2"></i>
                                    <i class="fa-regular fa-star" id="star3"></i>
                                    <i class="fa-regular fa-star" id="star4"></i>
                                </div> -->
                                <!-- <input id="star5" type="radio" name="rate" value="5">
                                <label for="star5">★</label>
                                <input id="star4" type="radio" name="rate" value="4">
                                <label for="star4" >★</label>
                                <input id="star3" type="radio" name="rate" value="3">
                                <label for="star3">★</label>
                                <input id="star2" type="radio" name="rate" value="2">
                                <label for="star2">★</label>
                                <input id="star1" type="radio" name="rate" value="1">
                                <label for="star1">★</label> -->
                                <div class="mt-2">
                                    <input id="Star0" type="radio" name="rate" value="1" style="display: none;">
                                    <label for="Star0"><i class="fa-solid fa-star" id="star0"></i></label>
                                    <input id="Star1" type="radio" name="rate" value="2" style="display: none;">
                                    <label for="Star1"><i class="fa-regular fa-star" id="star1"></i></label>
                                    <input id="Star2" type="radio" name="rate" value="3" style="display: none;">
                                    <label for="Star2"><i class="fa-regular fa-star" id="star2"></i></label>
                                    <input id="Star3" type="radio" name="rate" value="4" style="display: none;">
                                    <label for="Star3"><i class="fa-regular fa-star" id="star3"></i></label>
                                    <input id="Star4" type="radio" name="rate" value="5" style="display: none;">
                                    <label for="Star4"><i class="fa-regular fa-star" id="star4"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/star-rating.js') }}"></script>
@endsection