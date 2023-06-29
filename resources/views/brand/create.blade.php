
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header">Brand</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('brand.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') ?? $brand->title ?? '' }}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Content</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{$response ?? ''}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send</button>
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
                        <form method="POST" action="{{ route('chatgpt.ask') }}">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <input type="text" class="form-control text-center" name="prompt" placeholder="Ask something">
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection