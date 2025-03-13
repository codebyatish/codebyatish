@extends('admin/layout')
@section('page_title','Manage Home Banner')
@section('home_banner_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Manage Home Banner</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <a href="{{url('admin/home_banner')}}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('home_banner.manage_home_banner_process')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="home_banner_id" id="home_banner_id" value="{{$home_banner_id}}">
                                <label for="home_banner_name" class="control-label mb-1">Banner Name</label>
                                <input id="home_banner_name" name="home_banner_name" type="text" class="form-control" value="{{$home_banner_name}}">
                                @error('home_banner_name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="home_banner_button_text" class="control-label mb-1">Banner Button Text</label>
                                <input id="home_banner_button_text" name="home_banner_button_text" type="text" class="form-control" value="{{$home_banner_button_text}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="home_banner_button_link" class="control-label mb-1">Banner Button Link</label>
                                <input id="home_banner_button_link" name="home_banner_button_link" type="url" class="form-control" value="{{$home_banner_button_link}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="home_banner_status" class="control-label mb-1">Banner Status</label>
                                <select name="home_banner_status" id="home_banner_status" class="form-control">
                                    <?php
                                    $arrHomeBannerStatus = ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrHomeBannerStatus); $iii++) { ?>
                                        <option value="<?php echo $arrHomeBannerStatus[$iii]; ?>" <?php if ($arrHomeBannerStatus[$iii] == $home_banner_status) { ?> selected="selected"  <?php } ?> ><?php echo $arrHomeBannerStatus[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                                @error('home_banner_status')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="home_banner_image" class="control-label mb-1">Home Banner Image</label>
                                <input id="home_banner_image" name="home_banner_image" type="file">
                                @error('home_banner_image')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        @if (!empty($home_banner_image))
                            <div class="col-md-1 account-item">
                                <label for="" class="control-label mb-1"> </label><br>
                                <img src="{{asset('storage/media/home_banners/'.$home_banner_image)}}" class="image">
                            </div>
                        @endif
                    </div>
                    <div class="row m-t-20">
                        <div class="col text-center">
                            <button id="insert_records" type="submit" class="btn btn-md btn-success">{{ ($home_banner_id) ? 'Update & Save' : 'Save' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


