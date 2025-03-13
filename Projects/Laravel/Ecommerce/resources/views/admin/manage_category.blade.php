@extends('admin/layout')
@section('page_title','Manage Category')
@section('category_select','active')
@section('container')

<div class="row">
    <div class="col-md-6">
    	<h2>Manage Category</h2>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <a href="{{url('admin/category')}}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


<div class="row m-t-30">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('category.manage_category_process')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="hidden" name="category_id" id="category_id" value="{{$category_id}}">
                                <label for="category_name" class="control-label mb-1">Category Name</label>
                                <input id="category_name" name="category_name" type="text" class="form-control" value="{{$category_name}}">
                                @error('category_name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                <input id="category_slug" name="category_slug" type="text" class="form-control" value="{{$category_slug}}">
                                @error('category_slug')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="category_image" class="control-label mb-1">Category Image</label>
                                <input id="category_image" name="category_image" type="file">
                            </div>
                        </div>
                        @if (!empty($category_image))
                            <div class="col-md-1 account-item">
                                <label for="" class="control-label mb-1"> </label><br>
                                <img src="{{asset('storage/media/category/'.$category_image)}}" class="image">
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="category_parent_id" class="control-label mb-1">Parent Category Name</label>
                                <select name="category_parent_id" id="category_parent_id" class="form-control">
                                    <option value="0">Parent Category Name</option>
                                    <?php
                                    foreach ($categoryData as $categoryList) { ?>
                                    <option value="<?php echo $categoryList->id; ?>" <?php if ($categoryList->id == $category_parent_id) { ?> selected="selected"
                                        <?php } ?>><?php echo $categoryList->category_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="category_status" class="control-label mb-1">Category Status</label>
                                <select name="category_status" id="category_status" class="form-control">
                                    <?php
                                    $arrCategoryStatus = ($category_status != '') ? ['Disabled','Enabled'] : ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrCategoryStatus); $iii++) { ?>
                                        <option value="<?php echo $arrCategoryStatus[$iii]; ?>" <?php if ($arrCategoryStatus[$iii] == $category_status) { ?> selected="selected"  <?php } ?> ><?php echo $arrCategoryStatus[$iii]; ?></option>
                                    <?php } ?>
                                </select>
                                @error('category_status')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_description" class="control-label mb-1">Category Description</label>
                                <textarea name="category_description" id="category_description" class="form-control" style="resize:none;">{{$category_description}}</textarea>
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


