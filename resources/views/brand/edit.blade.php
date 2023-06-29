
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">Условный продукт</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('brand.update',['brand' => $brand->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input type="text" name="title" required class="form-control" placeholder="Ask something..." value="{{ old('title') ?? $brand->title ?? '' }}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" name="content" required id="exampleFormControlTextarea1">{{$response ?? $brand->content ?? ''}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update brand</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ChatGPT help with content</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('chatgpt.askEdit',['brand' => $brand->id]) }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control text-center" value="{{$brand->title}}" name="prompt" placeholder="Ask something">
                            </div>

                            <button type="submit" class="btn btn-primary">Send message to ChatGPT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
