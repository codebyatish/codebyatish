@extends('admin/layout')
@section('page_title','Manage Brand')
@section('brand_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Manage Brand</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <a href="{{url('admin/brand')}}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('brand.manage_brand_process')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="brand_id" id="brand_id" value="{{$brand_id}}">
                                <label for="brand_name" class="control-label mb-1">Brand Name</label>
                                <input id="brand_name" name="brand_name" type="text" class="form-control" value="{{$brand_name}}">
                                @error('brand_name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="brand_status" class="control-label mb-1">Brand Status</label>
                                <select name="brand_status" id="brand_status" class="form-control">
                                    <?php
                                    $arrBrandStatus = ($brand_status != '') ? ['Disabled','Enabled'] : ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrBrandStatus); $iii++) { ?>
                                        <option value="<?php echo $arrBrandStatus[$iii]; ?>" <?php if ($arrBrandStatus[$iii] == $brand_status) { ?> selected="selected"  <?php } ?> ><?php echo $arrBrandStatus[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                                @error('brand_status')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="brand_image" class="control-label mb-1">Brand Image</label>
                                <input id="brand_image" name="brand_image" type="file">
                                @error('brand_image')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        @if (!empty($brand_image))
                            <div class="col-md-1 account-item">
                                <label for="" class="control-label mb-1"> </label><br>
                                <img src="{{asset('storage/media/brands/'.$brand_image)}}" class="image">
                            </div>
                        @endif
                    </div>
                    <div class="row m-t-20">
                        <div class="col text-center">
                            <button id="insert_records" type="submit" class="btn btn-md btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


