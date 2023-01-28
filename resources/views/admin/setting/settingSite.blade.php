<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('setting.update','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{$setting->id ?? ''}}" name="id">
                    <input type="hidden" name="type" value="{{$id}}">


                    <div class="row">
                        <div class="col">
                            <label>اسم الموقع بالعربي</label>
                            <input type="text" name="name_site" class="form-control"
                                   value="{{old('name_site',$setting->name_site ?? '')}}">
                        </div>


                        <div class="col">
                            <label>رقم الهاتف</label>
                            <input type="number" name="phone" class="form-control"
                                   value="{{old('phone',$setting->phone ?? '')}}">
                        </div>

                    </div>
                    <br>
                    <div class="row">


                        <div class="col">
                            <label>فيس بوك</label>
                            <input type="url" name="facebook" class="form-control"
                                   value="{{old('facebook',$setting->facebook ?? '')}}">
                        </div>

                        <div class="col">
                            <label>رابط الموقع</label>
                            <input type="url" name="url" class="form-control"
                                   value="{{old('url',$setting->url ?? '')}}">
                        </div>
                    </div>
                    <br>





                    <div class="row">

                        <div class="col">
                            @if($setting->photo_site)
                                <img src="{{asset('admin/assets/setting/'.$setting->photo_site)}}" alt="" width="50"
                                     height="50">
                            @endif
                        </div>

                        <div class="col">
                            <label>صوره الموقع </label>
                            <input type="file" accept="image/*" name="photo_site">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <label>وصف الموقع</label>
                            <textarea class="form-control" name="notes" rows="5">
                                {{old('notes',$setting->notes)}}
                            </textarea>
                        </div>
                    </div>


                    <br>

                    <div class="row">
                        <div class="col">
                            <label>العنوان الرئيسي في القسم الثاني</label>
                            <textarea class="form-control" name="titleSections2" rows="5">
                                {{old('titleSections2',$setting->titleSections2)}}
                            </textarea>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">تحديث البيانات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
