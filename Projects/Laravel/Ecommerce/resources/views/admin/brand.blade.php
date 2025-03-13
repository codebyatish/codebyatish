@extends('admin/layout')
@section('page_title','Brand')
@section('brand_select','active')
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
    	<h2>Brand</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
    	<a href="{{url('admin/brand/manage_brand')}}" class="btn btn-primary">Add Brand</a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead style="text-align:center;">
                    <tr>
                        <th>Brand Image</th>
                        <th>Brand Name</th>
                        <th>Brand Status</th>
                        <th>Last Updated</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data as $list){ ?>
                        <tr>
                            <td class="account-item"><img src="{{asset('storage/media/brands/'.$list->brand_image)}}" class="image"></td>
                            <td>{{$list->brand_name}}</td>
                            <td class="<?php echo ($list->brand_status == 'Enabled') ? 'process' : 'denied'; ?>"><?php echo ($list->brand_status == 'Enabled') ? 'Enabled' : 'Disabled'; ?></td>
                            <td>{{$list->updated_at}}</td>
                            <td><a href="{{url('admin/brand/delete/'.$list->id)}}" class="btn btn-sm btn-danger delete_record"><i class="fa fa-trash"></i></a></td>
                            <td><a href="{{url('admin/brand/manage_brand/'.$list->id)}}" class="btn btn-sm btn-success edit_record"><i class="fa fa-edit"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
{{-- <script type="text/javascript">
    $('.delete_record').click(function(){
           if (confirm("Do you want to delete this record ?")) {
                   const id = this.getAttribute("data-id");
                   $.ajax({
                   url: "<?php url('admin/Brand/delete'); ?>",
                   data: {"_token": "{{ csrf_token() }}",
                   "id": id},
                   type: "post",
                   dataType: 'json',
                   success: function(response){
                       alert(response);
                       //alert("Record Deleted Successfully");
                   },
               error: function()
               {
                   alert("error");
               }
           });
       } else {
           return false;
       }
   })
</script> --}}


@endsection


