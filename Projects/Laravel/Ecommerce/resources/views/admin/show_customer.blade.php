@extends('admin/layout')
@section('page_title','Show Customer Details')
@section('customer_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Customer Details</h2>
    </div>
</div>
<style>

table > tbody > tr td:first-child{
    font-weight: bolder;
}

</style>

<div class="row m-t-30">
    <div class="col-md-6">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{$customer_list->customer_first_name." ".$customer_list->customer_last_name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$customer_list->customer_email}}</td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td>{{$customer_list->customer_mobile}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$customer_list->customer_address}}</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>{{$customer_list->customer_city}}</td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td>{{$customer_list->customer_state}}</td>
                    </tr>
                    <tr>
                        <td>Zip</td>
                        <td>{{$customer_list->customer_zip}}</td>
                    </tr>
                    <tr>
                        <td>Company</td>
                        <td>{{$customer_list->customer_company}}</td>
                    </tr>
                    <tr>
                        <td>GSTN Number</td>
                        <td>{{$customer_list->customer_gstin}}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td class="<?php echo ($customer_list->customer_status == 'Enabled') ? 'process' : 'denied'; ?>" style="font-weight: 800;">{{$customer_list->customer_status}}</td>
                    </tr>
                    <tr>
                        <td>Created On</td>
                        <td>{{ \Carbon\Carbon::parse($customer_list->created_at)->format('d M Y, h:i')}}</td>
                    </tr>
                    <tr>
                        <td>Updated On</td>
                        <td>{{ \Carbon\Carbon::parse($customer_list->updated_at)->format('d M Y, h:i')}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection


