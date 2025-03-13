@extends('admin/layout')
@section('page_title','Manage Color')
@section('color_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Manage Color</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <a href="{{url('admin/color')}}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('color.manage_color_process')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="color_id" id="color_id" value="{{$color_id}}">
                                <label for="color_name" class="control-label mb-1">Color Name</label>
                                <input id="color_name" name="color_name" type="text" class="form-control" value="{{$color_name}}">
                                @error('color_name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="color_status" class="control-label mb-1">Color Status</label>
                                <select name="color_status" id="color_status" class="form-control">
                                    <?php
                                    $arrColorStatus = ($color_status != '') ? ['Disabled','Enabled'] : ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrColorStatus); $iii++) { ?>
                                        <option value="<?php echo $arrColorStatus[$iii]; ?>" <?php if ($arrColorStatus[$iii] == $color_status) { ?> selected="selected"  <?php } ?> ><?php echo $arrColorStatus[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                                @error('color_status')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
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


