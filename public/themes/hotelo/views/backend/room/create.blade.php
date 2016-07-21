@extends('layouts.backend')

@section('content')

    <form  method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <input name="number" class="form-control input-lg" type="text" placeholder="شماره اتاق">
        </div>
        <div class="form-group">
            <input name="price" class="form-control input-lg" type="text" placeholder="هزینه هر روز ">
        </div>

        <button type="submit" class="btn btn-primary btn-lg">ثبت</button>

    </form>

@stop

