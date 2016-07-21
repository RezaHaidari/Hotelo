@extends('.layouts.frontend')

@section('content')

    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
            <ul class="cd-filters">
                <li class="placeholder">
                    <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                </li>
                <li class="filter"><a class="selected" href="#0" data-type="all">همه</a></li><li class="filter" data-filter=".color-2">یک نفره<a href="#0" data-type="color-2">دو نفره</a></li>
            </ul> <!-- cd-filters -->
        </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->

    <section class="cd-gallery">
        <ul>
            <li>
                <header class="cd-pricing-header">
                    <h2>Popular</h2>

                    <div class="cd-price">
                        <span>$19.99</span>
                        <span>month</span>
                    </div>
                </header> <!-- .cd-pricing-header -->

                <div class="cd-pricing-features">
                    <ul>
                        <li class="available"><em>Feature 1</em></li>
                        <li class="available"><em>Feature 2</em></li>
                        <li><em>Feature 3</em></li>
                        <li><em>Feature 4</em></li>
                    </ul>
                </div> <!-- .cd-pricing-features -->

                <footer class="cd-pricing-footer">
                    <a href="#0">Select</a>
                </footer> <!-- .cd-pricing-footer -->
            </li>

            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-2.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-3.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-4.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">

                <img src="{{theme('frontend/img/img-5.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-6.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-7.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-8.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-9.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-10.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-11.jpg')}}" alt="image 1">
            </li>
            <li class="mix color-1 check1 radio2 option3">
                <img src="{{theme('frontend/img/img-12.jpg')}}" alt="image 1">
            </li>

            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
        </ul>
        <div class="cd-fail-message">No results found</div>
    </section> <!-- cd-gallery -->

    <div class="cd-filter">
        <form>
            <div class="cd-filter-block">
                <h4>Search</h4>

                <div class="cd-filter-content">
                    <input type="search" placeholder="Try color-1...">
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Check boxes</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                        <label class="checkbox-label" for="checkbox1">Option 1</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                        <label class="checkbox-label" for="checkbox2">Option 2</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                        <label class="checkbox-label" for="checkbox3">Option 3</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Select</h4>

                <div class="cd-filter-content">
                    <div class="cd-select cd-filters">
                        <select class="filter" name="selectThis" id="selectThis">
                            <option value="">Choose an option</option>
                            <option value=".option1">Option 1</option>
                            <option value=".option2">Option 2</option>
                            <option value=".option3">Option 3</option>
                            <option value=".option4">Option 4</option>
                        </select>
                    </div> <!-- cd-select -->
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Radio buttons</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                        <label class="radio-label" for="radio1">All</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                        <label class="radio-label" for="radio2">Choice 2</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                        <label class="radio-label" for="radio3">Choice 3</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
        </form>

        <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Filters</a>

    <script>
        @if(session('error'))
            alert("{{session('error')}}")
        @endif
        @if(session('message'))
            alert("{{session('message')}}")
        @endif
    </script>

@stop