@extends('layout.common')

@section('style')
<style>
    img{
        width:300px;
        height:300px;
    }
</style>
@endsection

@section('title')Hello @endsection

@section('child')
    <h1>Hello</h1>
    <?php $count = 0?>
    @foreach ($tasks as $task)
        @if ($count == 0 || $count%3 == 0)
            <div class="row">
        @endif
        <div class="col-md-4">
        <img alt="画像" class="img-responsive" src="{{ asset('/images/500-500-'.$task->image) }}">
        </div>
        @if (!($count == 0) && $count%2 == 0)
            </div>
            <br>
        @endif
        <?php $count++; ?>
    @endforeach
    <br>
    <!--
    <a href="image" class="btn btn-primary btn-sm">画像を保存する</a>
    -->
@endsection
