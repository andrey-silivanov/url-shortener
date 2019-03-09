@extends('layouts.app')
@section('content')

    <div class="container">
        <!--vertical align on parent-->
        <div class="row h-100 align-items-center">
            <div class="col-sm-12">
                <div class="card-block mx-auto">
                    <h3 class="text-center">URL Shortener</h3>
                    <form action="{{ route('store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('url') ? ' is-invalid' : '' }}"
                                   name="url" value="{{ old('url') }}" placeholder="Paste a link to shorten it">

                            @if ($errors->has('url'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Submit" class="btn btn-lg btn-success">
                        </div>
                    </form>
                    @if(session()->has('shortLink'))
                        <h3 class="text-center"> Short URL:
                            <a href="{{ session()->get('shortLink') }}" target="_blank">{{ session()->get('shortLink') }}</a></h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection