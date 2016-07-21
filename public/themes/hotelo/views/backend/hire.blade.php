@extends('layouts.backend')

@section('content')



    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>

                <div class="box-tools">
                    <form method="get">
                        <div class="input-group input-group-sm" style="width: 150px;">

                            <input type="text" name="search" class="form-control pull-right" placeholder=" (شماره پیگیری)">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>ID</th>
                        <th>نام</th>
                        <th>تاریخ ثبت استخدامی</th>
                        <th>ایمیل</th>
                        <th>شماره تماس</th>
                        <th>شماره موبایل</th>
                        <th> کدپستی</th>
                        <th> مشاهده جزییات و تایید</th>
                    </
                    </tr>
                    @foreach($hires as $hire)
                        <tr>
                            <td>{{$hire->id}}</td>
                            <td>{{$hire->name}}</td>
                            <td>{{$hire->created_at}}</td>
                            <td>{{$hire->email}}</td>
                            <td>{{$hire->telephone}}</td>
                            <td>{{$hire->mobile}}</td>
                            <td>{{$hire->postal_code}}</td>
                            <td>
                                @can('hire')
                                <a href="/admin/hire/show/{{$hire->id}}"
                                   class="btn
                                 btn-block btn-primary
                                 btn-flat">مشاهده جزییات</a>
                                    @endcan
                            </td>
                        </tr>
                    @endforeach

                    </tbody></table>

                <div class="paginate">
                    {{$hires->links()}}
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>


@endsection