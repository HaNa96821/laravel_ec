@extends('layout.common')

@section('style')
<style>
    body{ 
        background-color : yellowgreen;
    }
</style>
@endsection

@section('title')title @endsection

@section('child')
    <p>Hello</p>
    <form method="POST" action="file_edit" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-12">
                <label class="col-sm-3 control-label" for="image">画像アップロード</label>
                    <input type="file" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}">
                @if ($errors ->has('image'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-grorp">
                <button type="submit" class="btn btn-default">ファイル送信</button>
            </div>
        </div>
    </form>
@endsection
