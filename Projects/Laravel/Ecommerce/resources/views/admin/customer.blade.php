@extends('admin/layout')
@section('page_title','Customers')
@section('customer_select','active')
@section('container')


@if (!empty(session('message')))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    <?php echo session('message'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif

<div class="row">
    <div class="col-md-6">
    	<h2>Customers</h2>
    </div>
    {{-- <div class="col-md-6 d-flex justify-content-end">
    	<a href="{{url('admin/customer/manage_customer')}}" class="btn btn-primary">Add Tax</a>
    </div> --}}
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data as $list){ ?>
                        <tr>
                            <td>{{$list->customer_first_name." ".$list->customer_last_name}}</td>
                            <td>{{$list->customer_email}}</td>
                            <td>{{$list->customer_mobile}}</td>
                            <td>{{$list->customer_city}}</td>
                            <td class="<?php echo ($list->customer_status == 'Enabled') ? 'process' : 'denied'; ?>">
                                <?php echo ($list->customer_status == 'Enabled') ? 'Enabled' : 'Disabled'; ?>
                                &nbsp; &nbsp;
                                <?php
                                    if ($list->customer_status == 'Enabled') { ?>
                                        <a href="{{url('admin/customer/status/Disabled/'.$list->id)}}" class="btn btn-sm btn-danger">Make Inactive</a>
                                    <?php } else { ?>
                                        <a href="{{url('admin/customer/status/Enabled/'.$list->id)}}" class="btn btn-sm btn-success">Make Active</a>
                                 <?php } ?>
                            </td>
                            <td><a href="{{url('admin/customer/show/'.$list->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection


