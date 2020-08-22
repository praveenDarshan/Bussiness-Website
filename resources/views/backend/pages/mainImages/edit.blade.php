@extends('backend.layouts.app', [
    'namePage' => 'mainImages',
    'class' => 'sidebar-mini',
    'activePage' => 'mainImages',
  ])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="pull-right">
                        <a href="{{ route('backend.mainImages.index') }}">
                            <button class="btn btn-dark" style="margin-right: 15px;">Back</button>
                        </a>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title"> Update Main Images</h4>
                    </div>
                    <div class="card-body">
                        <form id="riddle_update" method="post" action="{{ route('backend.mainImages.update', $mainImage->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @include('backend.alerts.success')
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="description">{{__(" Description")}}</label>
                                        <input type="text" name="description" class="form-control" value="{{ old('description',$mainImage->description) }}">
                                        @include('backend.alerts.feedback', ['field' => 'description'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label class="d-block" for="image">{{__(" Image")}}</label>
                                        <img class="gal-img prev_img" id="prev_img2" src="{{$mainImage->image_url!=null?$mainImage->image_url:('assets/img/dummy.jpg')}}">
                                        <input type="file" class="custom-file-input2" name="image" id="custom-file-input2" >
                                        @include('backend.alerts.feedback', ['field' => 'image'])
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary btn-round">{{__('Update')}}</button>
                            </div>
                            <hr class="half-rule"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <!-- Laravel Javascript Validation -->--}}
    {{--    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
    {{--    {!! JsValidator::formRequest('App\Http\Requests\CMS\AdCreateRequest', '#traditional_song_update') !!}--}}
@endsection
