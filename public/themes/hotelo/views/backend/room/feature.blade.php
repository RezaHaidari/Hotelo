@extends('layouts.backend')


@section('content')

    <form  method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <input name="name" class="form-control input-lg" type="text" placeholder="عنوان">
        </div>
        <div class="form-group">
            <input name="label" class="form-control input-lg" type="text" placeholder="لیبل">
        </div>

        <button type="submit" class="btn btn-primary">ثبت</button>

    </form>


@stop
