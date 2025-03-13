@extends('admin/layout')
@section('page_title','Manage Tax')
@section('tax_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Manage Tax</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <a href="{{url('admin/tax')}}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('tax.manage_tax_process')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="tax_id" id="tax_id" value="{{$tax_id}}">
                                <label for="tax_name" class="control-label mb-1">Tax Name</label>
                                <input id="tax_name" name="tax_name" type="text" class="form-control" value="{{$tax_name}}">
                                @error('tax_name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tax_value" class="control-label mb-1">Tax Value</label>
                                <input id="tax_value" name="tax_value" type="text" class="form-control" value="{{$tax_value}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tax_status" class="control-label mb-1">Tax Status</label>
                                <select name="tax_status" id="tax_status" class="form-control">
                                    <?php
                                    $arrTaxStatus = ($tax_status != '') ? ['Disabled','Enabled'] : ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrTaxStatus); $iii++) { ?>
                                        <option value="<?php echo $arrTaxStatus[$iii]; ?>" <?php if ($arrTaxStatus[$iii] == $tax_status) { ?> selected="selected"  <?php } ?> ><?php echo $arrTaxStatus[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                                @error('tax_status')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col text-center">
                            <button id="insert_records" type="submit" class="btn btn-md btn-success">{{ ($tax_id) ? 'Update & Save' : 'Save' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


