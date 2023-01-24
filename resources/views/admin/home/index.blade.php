@extends('admin.layouts.master')
@section('css')

@endsection

@section('title')
الصفحه الرئسيه
@endsection

@section('contect')
<div class="card-group">
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <span class="btn btn-circle btn-lg bg-danger">
                        <i class="ti-clipboard text-white"></i>
                    </span>
                </div>
                <div>
                    <a href="{{route('pages.index')}}">Pages</a>
                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{App\Models\Page::count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <span class="btn btn-circle btn-lg btn-info">
                        <i class="ti-wallet text-white"></i>
                    </span>
                </div>
                <div>
                  Number Customer website

                </div>
                <div class="ml-auto">
                    <h2 class="m-b-0 font-light">{{DB::table('customers')->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    {{--    <div class="card">--}}
    {{--        <div class="card-body">--}}
    {{--            <div class="d-flex align-items-center">--}}
    {{--                <div class="m-r-10">--}}
    {{--                    <span class="btn btn-circle btn-lg bg-success">--}}
    {{--                        <i class="ti-shopping-cart text-white"></i>--}}
    {{--                    </span>--}}
    {{--                </div>--}}
    {{--                <div>--}}
    {{--                    Total Sales--}}

    {{--                </div>--}}
    {{--                <div class="ml-auto">--}}
    {{--                    <h2 class="m-b-0 font-light">43</h2>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- Card -->--}}
    {{--    <!-- Card -->--}}
    {{--    <div class="card">--}}
    {{--        <div class="card-body">--}}
    {{--            <div class="d-flex align-items-center">--}}
    {{--                <div class="m-r-10">--}}
    {{--                    <span class="btn btn-circle btn-lg bg-warning">--}}
    {{--                        <i class="mdi mdi-currency-usd text-white"></i>--}}
    {{--                    </span>--}}
    {{--                </div>--}}
    {{--                <div>--}}
    {{--                    Profit--}}

    {{--                </div>--}}
    {{--                <div class="ml-auto">--}}
    {{--                    <h2 class="m-b-0 font-light">63</h2>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- Card -->--}}
    {{--    <!-- Column -->--}}


</div>
@endsection


@section('js')

@endsection
