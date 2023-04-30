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
                    <fieldset class="row m-3">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row m-3">
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                                <i class="fa-solid fa-star"></i>
                                <label class="form-check-label" for="gridCheck1">
                                    Example checkbox
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection