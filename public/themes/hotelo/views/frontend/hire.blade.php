@extends('layouts.frontend')

@section('content')


    <div class="container-fluid">


        <form class="cd-form floating-labels" method="post" >

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <legend>فرم استخدام کارمند</legend>

                <div class="error-message">
                    <p>Please enter a valid email address</p>
                </div>

                <div class="icon">
                    <label class="cd-label" for="cd-name">نام و نام
                        خانوادگی</label>
                    <input class="user" name="name" type="text" name="cd-name" id="cd-name" required>
                </div>

                <div class="icon">
                    <label class="cd-label" for="cd-company">تلفن </label>
                    <input class="company" name="telephone" type="text" name="cd-company" id="cd-company">
                </div>

                <div class="icon">
                    <label class="cd-label" for="cd-company">تلفن همراه </label>
                    <input class="company" name="mobile" type="text" name="cd-company" id="cd-company">
                </div>

                <div class="icon">
                    <label class="cd-label" for="cd-company">کد پستی </label>
                    <input class="company" name="postal_code" type="text" name="cd-company" id="cd-company">
                </div>

                <div class="icon">
                    <label class="cd-label" for="cd-email">پست الکترونیک</label>
                    <input name="email" class="email error" type="email" name="cd-email" id="cd-email" required>
                </div>
            </fieldset>

            <fieldset>
                <legend></legend>

                <div>
                    <h4>حقوق مورد نظر</h4>

                    <p class="cd-select icon">
                        <select class="budget">
                            <option value="0">حقوق پیشنهادی</option>
                            <option value="1"> بالای
                                &lt; 2 میلیون تومان</option>
                            <option value="2">1میلیون - 2 میلیون</option>
                            <option value="3">1 میلیون</option>
                        </select>
                    </p>
                </div>





                <div class="icon">
                    <label class="cd-label" for="cd-textarea">توضیحات</label>
                    <textarea name="message" class="message" name="cd-textarea" id="cd-textarea" required></textarea>
                </div>

                <div>
                    <input type="submit" value="Send Message">
                </div>
            </fieldset>
        </form>



    </div>




@stop
