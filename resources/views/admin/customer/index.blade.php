@extends('admin.layouts.master')
@section('css')
<link href="{{ asset('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

@endsection


@section('title')
العملاء
@endsection

@section('jop_title')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">العملاء</h4>
            <div class="d-flex align-items-center">

            </div>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">الصفحه الرئسيه</a>
                        </li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contect')
<div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
                <div class="col">
                    <form action="{{ route('downloadExel') }}" method="GET">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control" required name="day">
                            </div>


                            <div class="col">
                               <select class="form-control" name="type" required>
                                   <option value="" disabled selected>-- اختر --</option>
                                   <option value="1">facebook</option>
                                   <option value="2">site</option>
                                   <option value="3">form3</option>
                                   <option value="4">form4</option>
                                   <option value="5">form5</option>
                                   <option value="6">form6</option>
                               </select>
                            </div>

                            <div class="col">
                                <button class="btn btn-success btn-block">Download Ecxel</button>
                            </div>
                        </div>


                    </form>
                    {{-- <a href="{{ route('downloadExel') }}" class="btn btn-success">Download Ecxel</a> --}}
                </div>
            </div>
          </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الالكتروني</th>
                                <th>رقم الهاتف</th>
                                <th>كود الدوله</th>
                                <th>المؤهل</th>
                                <th>الوظيفه</th>
                                <th>الحاله</th>
                                <th>الصفحه</th>
                                <th>تاريخ التسجيل</th>
                                <th>مسجل من قبل</th>
                                <th>تاريخ اول انشاء</th>
                                {{-- <th>العمليات</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script type="text/javascript">
    $(function () {

      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('custmoer.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'code', name: 'code'},
              {data: 'sloppy', name: 'sloppy'},
              {data: 'jops', name: 'jops'},
              {data: 'type', name: 'type'},
              {data: 'pagesTypes', name: 'pagesTypes'},
              {data: 'data', name: 'data'},
              {data: 'duplicate', name: 'duplicate'},
              {data: 'created_at', name: 'created_at'},
            //   {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
</script>
@endsection
