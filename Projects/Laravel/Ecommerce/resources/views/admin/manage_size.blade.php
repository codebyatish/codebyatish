@extends('admin/layout')
@section('page_title','Manage Size')
@section('size_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Manage Size</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <a href="{{url('admin/size')}}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('size.manage_size_process')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="size_id" id="size_id" value="{{$size_id}}">
                                <label for="size" class="control-label mb-1">Size</label>
                                <input id="size" name="size" type="text" class="form-control" value="{{$size}}">
                                @error('size')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="size_status" class="control-label mb-1">Size Status</label>
                                <select name="size_status" id="size_status" class="form-control">
                                    <?php
                                    $arrSizeStatus = ($size_status != '') ? ['Disabled','Enabled'] : ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrSizeStatus); $iii++) { ?>
                                        <option value="<?php echo $arrSizeStatus[$iii]; ?>" <?php if ($arrSizeStatus[$iii] == $size_status) { ?> selected="selected"  <?php } ?> ><?php echo $arrSizeStatus[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                                @error('size_status')
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


