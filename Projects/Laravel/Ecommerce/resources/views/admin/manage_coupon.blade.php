@extends('admin/layout')
@section('page_title','Manage Coupon')
@section('coupon_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Manage Coupon</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <a href="{{url('admin/coupon')}}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('coupon.manage_coupon_process')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="hidden" name="coupon_id" id="coupon_id" value="{{$coupon_id}}">
                                <label for="coupon_title" class="control-label mb-1">Coupon Title</label>
                                <input id="coupon_title" name="coupon_title" type="text" class="form-control" value="{{$coupon_title}}">
                                @error('coupon_title')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="coupon_code" class="control-label mb-1">Coupon Code</label>
                                <input id="coupon_code" name="coupon_code" type="text" class="form-control" value="{{$coupon_code}}">
                                @error('coupon_code')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="coupon_value" class="control-label mb-1">Coupon Value</label>
                                <input id="coupon_value" name="coupon_value" type="text" class="form-control" value="{{$coupon_value}}">
                                @error('coupon_value')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="coupon_type" class="control-label mb-1">Coupon Type</label>
                                <select id="coupon_type" name="coupon_type" class="form-control">
                                    <?php
                                    $arrCouponType = ['Value','Percentage'];
                                    for ($iii=0; $iii < count($arrCouponType); $iii++) { ?>
                                        <option value="<?php echo $arrCouponType[$iii]; ?>" <?php if ($arrCouponType[$iii] == $coupon_type) { ?> selected="selected"
                                            <?php } ?>><?php echo $arrCouponType[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="coupon_minimum_order_amount" class="control-label mb-1">Minimum Order Amount</label>
                                    <input id="coupon_minimum_order_amount" name="coupon_minimum_order_amount" type="text" class="form-control" value="{{$coupon_minimum_order_amount}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="coupon_is_one_time" class="control-label mb-1">Coupon Is One Time</label>
                                    <select id="coupon_is_one_time" name="coupon_is_one_time" class="form-control">
                                        <?php
                                        $arrCouponIsOneTime = [1,0];
                                        for ($iii=0; $iii < count($arrCouponIsOneTime); $iii++) { ?>
                                            <option value="<?php echo $arrCouponIsOneTime[$iii]; ?>" <?php if ($arrCouponIsOneTime[$iii] == $coupon_is_one_time) { ?> selected="selected"
                                                <?php } ?>><?php echo $arrCouponIsOneTime[$iii] == 0 ? 'No' : 'Yes'; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="coupon_status" class="control-label mb-1">Coupon Status</label>
                                <select name="coupon_status" id="coupon_status" class="form-control">
                                    <?php
                                    $arrCouponStatus = ($coupon_status != '') ? ['Disabled','Enabled'] : ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrCouponStatus); $iii++) { ?>
                                        <option value="<?php echo $arrCouponStatus[$iii]; ?>" <?php if ($arrCouponStatus[$iii] == $coupon_status) { ?> selected="selected"  <?php } ?> ><?php echo $arrCouponStatus[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                                @error('coupon_status')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col text-center">
                            <button id="insert_records" type="submit" class="btn btn-md btn-success">{{ ($coupon_id) ? 'Update & Save' : 'Save' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


