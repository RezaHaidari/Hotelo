@extends('layouts.backend')

@section('content')


    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>100</h3>

                    <p>پرداخت موفق</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <a href="/pay/admin/trans/success" class="small-box-footer"> مشاهده بیشتر <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>100</h3>

                    <p>پرداخت ناموفق</p>
                </div>
                <div class="icon">
                    <i class="fa fa-close"></i>
                </div>
                <a href="/pay/admin/trans/fail" class="small-box-footer">مشاهده بیشتر <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>100<sup style="font-size: 20px">%</sup></h3>

                    <p>درصد موفقیت پرداخت</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">مشاهده بیشتر <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->



    </div>
    <!-- /.row -->


@endsection