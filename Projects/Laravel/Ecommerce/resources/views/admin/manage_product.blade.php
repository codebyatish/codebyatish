@extends('admin/layout')
@section('page_title', 'Manage Product')
@section('product_select', 'active')
@section('container')

@error('product_attribute_image.*')
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    {{$message}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@enderror

@error('product_images.*')
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    {{$message}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@enderror

<?php $cardHeadingName = ($product_id) ? 'Edit' : 'Add';?>
    <div class="row">
        <div class="col-md-6">
            <h2>Manage Product</h2>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a href="{{ url('admin/product') }}"><button type="button" class="btn btn-danger">Back</button></a>
        </div>
    </div>

    <form action="{{ route('product.manage_product_process') }}" method="post" enctype="multipart/form-data">
        <div class="row m-t-30">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <strong class="card-title text-light mb-3">{{$cardHeadingName}} Product</strong>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="hidden" name="product_id" id="product_id" value="{{ $product_id }}">
                                    <label for="product_name" class="control-label mb-1">Product Name</label>
                                    <input id="product_name" name="product_name" type="text" class="form-control"
                                        value="{{ $product_name }}">
                                    @error('product_name')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_slug" class="control-label mb-1">Product Slug</label>
                                    <input id="product_slug" name="product_slug" type="text" class="form-control"
                                        value="{{ $product_slug }}">
                                    @error('product_slug')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category_id" class="control-label mb-1">Category Name</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="0">Select Category Name</option>
                                        <?php
                                    foreach ($categoryData as $categoryList) { ?>
                                        <option value="<?php echo $categoryList->id; ?>" <?php if ($categoryList->id == $category_id) { ?> selected="selected"
                                            <?php } ?>><?php echo $categoryList->category_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_brand" class="control-label mb-1">Product Brand</label>
                                    <select name="product_brand" id="product_brand" class="form-control">
                                        <option value="0">Select Brand Name</option>
                                        <?php
                                    foreach ($brandsData as $brandList) { ?>
                                        <option value="<?php echo $brandList->id; ?>" <?php if ($brandList->id == $product_brand) { ?> selected="selected"
                                            <?php } ?>><?php echo $brandList->brand_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_model" class="control-label mb-1">Product Model</label>
                                    <input id="product_model" name="product_model" type="text" class="form-control"
                                        value="{{ $product_model }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="hidden" name="product_id" id="product_id" value="{{ $product_id }}">
                                    <label for="product_keywords" class="control-label mb-1">Product Keywords</label>
                                    <input id="product_keywords" name="product_keywords" type="text" class="form-control"
                                        value="{{ $product_keywords }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_uses" class="control-label mb-1">Product Uses</label>
                                    <input id="product_uses" name="product_uses" type="text" class="form-control"
                                        value="{{ $product_uses }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_warranty" class="control-label mb-1">Product Warranty</label>
                                    <input id="product_warranty" name="product_warranty" type="text"
                                        class="form-control" value="{{ $product_warranty }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_lead_time" class="control-label mb-1">Product Lead Time</label>
                                    <input id="product_lead_time" name="product_lead_time" type="text" class="form-control"
                                        value="{{ $product_lead_time }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tax_id" class="control-label mb-1">Product Tax</label>
                                    <select name="tax_id" id="tax_id" class="form-control">
                                        <option value="0">Select Product Tax</option>
                                        <?php
                                        foreach ($taxsData as $taxList) { ?>
                                        <option value="<?php echo $taxList->id; ?>" <?php if ($taxList->id == $tax_id) { ?> selected="selected"
                                            <?php } ?>><?php echo $taxList->tax_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_status" class="control-label mb-1">Product Status</label>
                                    <select name="product_status" id="product_status" class="form-control">
                                        <?php
                                    $arrProductStatus = ($product_status != '') ? ['Disabled','Enabled'] : ['Enabled','Disabled'];
                                    for ($iii=0; $iii < count($arrProductStatus); $iii++) { ?>
                                        <option value="<?php echo $arrProductStatus[$iii]; ?>" <?php if ($arrProductStatus[$iii] == $product_status) { ?> selected="selected"
                                            <?php } ?>><?php echo $arrProductStatus[$iii]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="product_image" class="control-label mb-1">Product Image</label>
                                    <input id="product_image" name="product_image" type="file">
                                    @error('product_image')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @if (!empty($product_image))
                                <div class="col-md-1 account-item">
                                    <label for="" class="control-label mb-1"> </label><br>
                                    <img src="{{asset('storage/media/'.$product_image)}}" class="image">
                                </div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_is_promo" class="control-label mb-1">Product Is Promo</label>
                                    <select id="product_is_promo" name="product_is_promo" class="form-control">
                                    <?php
                                    $arrProductIsPromo = [1,0];
                                    for ($iii=0; $iii < count($arrProductIsPromo); $iii++) { ?>
                                        <option value="<?php echo $arrProductIsPromo[$iii]; ?>" <?php if ($arrProductIsPromo[$iii] == $product_is_promo) { ?> selected="selected"
                                            <?php } ?>><?php echo $arrProductIsPromo[$iii] == 0 ? 'No' : 'Yes'; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_is_featured" class="control-label mb-1">Product Is Featured</label>
                                    <select id="product_is_featured" name="product_is_featured" class="form-control">
                                        <?php
                                        $arrProductIsPromo = [1,0];
                                        for ($iii=0; $iii < count($arrProductIsPromo); $iii++) { ?>
                                            <option value="<?php echo $arrProductIsPromo[$iii]; ?>" <?php if ($arrProductIsPromo[$iii] == $product_is_featured) { ?> selected="selected"
                                                <?php } ?>><?php echo $arrProductIsPromo[$iii] == 0 ? 'No' : 'Yes'; ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_is_discounted" class="control-label mb-1">Product Is Discounted</label>
                                    <select id="product_is_discounted" name="product_is_discounted" class="form-control">
                                        <?php
                                        $arrProductIsPromo = [1,0];
                                        for ($iii=0; $iii < count($arrProductIsPromo); $iii++) { ?>
                                            <option value="<?php echo $arrProductIsPromo[$iii]; ?>" <?php if ($arrProductIsPromo[$iii] == $product_is_discounted) { ?> selected="selected"
                                                <?php } ?>><?php echo $arrProductIsPromo[$iii] == 0 ? 'No' : 'Yes'; ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="product_is_trending" class="control-label mb-1">Product Is Trending</label>
                                    <select id="product_is_trending" name="product_is_trending" class="form-control">
                                        <?php
                                        $arrProductIsPromo = [1,0];
                                        for ($iii=0; $iii < count($arrProductIsPromo); $iii++) { ?>
                                            <option value="<?php echo $arrProductIsPromo[$iii]; ?>" <?php if ($arrProductIsPromo[$iii] == $product_is_trending) { ?> selected="selected"
                                                <?php } ?>><?php echo $arrProductIsPromo[$iii] == 0 ? 'No' : 'Yes'; ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_technical_specification" class="control-label mb-1">Product Technical Specifications</label>
                                    <textarea name="product_technical_specification" id="product_technical_specification" class="form-control" style="resize:none;">{{ $product_technical_specification }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_description" class="control-label mb-1">Product Description</label>
                                    <textarea name="product_description" id="product_description" class="form-control" style="resize:none;">{{ $product_description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="product_short_description" class="control-label mb-1">Product Short Description</label>
                                    <textarea name="product_short_description" id="product_short_description" class="form-control" style="resize:none;">{{ $product_short_description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--  Product Image Section --}}
                <div class="row m-t-30">
                    <div class="col-md-12" id="product_images_div">
                        <?php
                            if(!empty($productImages[0]->id)){
                                $loop_count_num = 1;
                                foreach ($productImages as $key => $value){
                                $arrProductImage = (array)$value;
                           ?>
                            <div class="card" id="product_images_{{$loop_count_num}}">
                                <div class="card-header bg-secondary">
                                    <strong class="card-title text-light mb-3">{{$cardHeadingName}} Product Images</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="hidden" name="loop_count" id="loop_count" value="{{ count($arrProductImage) }}">
                                                <input type="hidden" name="product_image_id[]" id="product_image_id" value="{{ $arrProductImage['id'] }}">
                                                <input type="hidden" name="product_images_value[]" id="product_images_value" value="{{ $arrProductImage['product_images'] }}">
                                                <label for="product_images" class="control-label mb-1">Product Image</label>
                                                <input id="product_images" name="product_images[]" type="file">
                                                @error('product_images')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        @if (!empty($arrProductImage['product_images']))
                                            <div class="col-md-1 account-item">
                                                <label for="" class="control-label mb-1"> </label><br>
                                                <img src="{{asset('storage/media/'.$arrProductImage['product_images'])}}" class="image">
                                            </div>
                                        @endif
                                        <div class="col-md-1">
                                            <label for="product_attribute_button" class="control-label mb-1"> </label><br>
                                            <?php
                                            if ($loop_count_num == 1) { ?>
                                            <a href="javascript:void(0)" class="btn btn-primary" onclick="addMore('product_images_div')"><i class="fa fa-plus"></i>&nbsp; Add </a>
                                            <?php }else{ ?>
                                                <a href="{{url('admin/product/product_images_delete/'.$arrProductImage['id'])}}/{{$product_id}}" class="btn btn-danger"><i class="fa fa-minus"></i>&nbsp; Delete </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $loop_count_num++; } }else{ ?>
                            <div class="card" id="product_images_1">
                                <div class="card-header bg-secondary">
                                    <strong class="card-title text-light mb-3">Add Product Images</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="hidden" name="loop_count" id="loop_count">
                                                <input type="hidden" name="product_image_id[]" id="product_image_id">
                                                <input type="hidden" name="product_images_value[]" id="product_images_value" >
                                                <label for="product_images" class="control-label mb-1">Product Image</label>
                                                <input id="product_images" name="product_images[]" type="file">
                                                @error('product_images')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="product_attribute_button" class="control-label mb-1"> </label><br>
                                            <a href="javascript:void(0)" class="btn btn-primary" onclick="addMore('product_images_div')"><i class="fa fa-plus"></i>&nbsp; Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                {{--  Product Attribute Section --}}
                <div class="row m-t-30">
                    <div class="col-md-12" id="product_attribute_div">
                        <?php
                        if(!empty($productsAttribute[0]->id)){
                            $loop_count_num = 1;
                            foreach ($productsAttribute as $key => $value){
                            $arrProductsAttribute = (array)$value;
                        ?>
                        <div class="card" id="product_attribute_{{$loop_count_num}}">
                            <div class="card-header bg-secondary">
                                <strong class="card-title text-light mb-3">{{$cardHeadingName}} Product Attributes</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="hidden" name="loop_count" class="loop_count" value="{{ count($productsAttribute) }}">
                                            <input type="hidden" name="product_attribute_id[]" id="product_attribute_id" value="{{ $arrProductsAttribute['id']; }}">
                                            <input type="hidden" name="product_attribute_image_value[]" id="product_attribute_image_value" value="{{ $arrProductsAttribute['product_attribute_image']; }}">
                                            <label for="product_attribute_sku" class="control-label mb-1">Product Attribute SKU</label>
                                            <input id="product_attribute_sku" name="product_attribute_sku[]" type="text" class="form-control"
                                                value="{{ $arrProductsAttribute['product_attribute_sku']; }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="product_attribute_mrp" class="control-label mb-1">Product MRP</label>
                                            <input id="product_attribute_mrp" name="product_attribute_mrp[]" type="text" class="form-control"
                                            value="{{ $arrProductsAttribute['product_attribute_mrp']; }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="product_attribute_price" class="control-label mb-1">Product Price</label>
                                            <input id="product_attribute_price" name="product_attribute_price[]" type="text" class="form-control"
                                            value="{{ $arrProductsAttribute['product_attribute_price']; }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="product_attribute_quantity" class="control-label mb-1">Product Quantity</label>
                                            <input id="product_attribute_quantity" name="product_attribute_quantity[]" type="text" class="form-control"
                                            value="{{ $arrProductsAttribute['product_attribute_quantity']; }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="size_id" class="control-label mb-1">Product Size</label>
                                            <select name="size_id[]" id="size_id" class="form-control">
                                                <option value="0">Select Product Size</option>
                                                <?php
                                            foreach ($sizeData as $sizeList) { ?>
                                                <option value="<?php echo $sizeList->id; ?>" <?php if ($sizeList->id == $arrProductsAttribute['size_id']) { ?> selected="selected"
                                                    <?php } ?>><?php echo $sizeList->size; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="color_id" class="control-label mb-1">Product Color</label>
                                            <select name="color_id[]" id="color_id" class="form-control">
                                                <option value="0">Select Product Color</option>
                                                <?php
                                            foreach ($colorData as $colorList) { ?>
                                                <option value="<?php echo $colorList->id; ?>" <?php if ($colorList->id == $arrProductsAttribute['color_id']) { ?> selected="selected"
                                                    <?php } ?>><?php echo $colorList->color_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="product_attribute_image" class="control-label mb-1">Product Attribute Image</label>
                                            <input id="product_attribute_image" name="product_attribute_image[]" type="file">
                                            @error('product_attribute_image')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @if (!empty($arrProductsAttribute['product_attribute_image']))
                                        <div class="col-md-1 account-item">
                                            <label for="" class="control-label mb-1"> </label><br>
                                            <img src="{{asset('storage/media/'.$arrProductsAttribute['product_attribute_image'])}}" class="image">
                                        </div>
                                    @endif
                                    <div class="col-md-1">
                                        <label for="product_attribute_button" class="control-label mb-1"> </label><br>
                                        <?php
                                        if ($loop_count_num == 1) { ?>
                                           <a href="javascript:void(0)" class="btn btn-primary" onclick="addMore('product_attribute_div')"><i class="fa fa-plus"></i>&nbsp; Add </a>
                                        <?php }else{ ?>
                                            <a href="{{url('admin/product/product_attribute_delete/'.$arrProductsAttribute['id'])}}/{{$product_id}}" class="btn btn-danger"><i class="fa fa-minus"></i>&nbsp; Delete </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $loop_count_num++;} }else{ ?>
                            <div class="card" id="product_attribute_1">
                                <div class="card-header bg-secondary">
                                    <strong class="card-title text-light mb-3">Add Product Attributes</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="hidden" name="loop_count" class="loop_count">
                                                <input type="hidden" name="product_attribute_id[]" id="product_attribute_id">
                                                <input type="hidden" name="product_attribute_image_value[]" id="product_attribute_image_value">
                                                <label for="product_attribute_sku" class="control-label mb-1">Product Attribute SKU</label>
                                                <input id="product_attribute_sku" name="product_attribute_sku[]" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="product_attribute_mrp" class="control-label mb-1">Product MRP</label>
                                                <input id="product_attribute_mrp" name="product_attribute_mrp[]" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="product_attribute_price" class="control-label mb-1">Product Price</label>
                                                <input id="product_attribute_price" name="product_attribute_price[]" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="product_attribute_quantity" class="control-label mb-1">Product Quantity</label>
                                                <input id="product_attribute_quantity" name="product_attribute_quantity[]" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="size_id" class="control-label mb-1">Product Size</label>
                                                <select name="size_id[]" id="size_id" class="form-control">
                                                    <option value="0">Select Product Size</option>
                                                    <?php
                                                    foreach ($sizeData as $sizeList) { ?>
                                                        <option value="<?php echo $sizeList->id; ?>"><?php echo $sizeList->size; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="color_id" class="control-label mb-1">Product Color</label>
                                                <select name="color_id[]" id="color_id" class="form-control">
                                                    <option value="0">Select Product Color</option>
                                                    <?php
                                                    foreach ($colorData as $colorList) { ?>
                                                        <option value="<?php echo $colorList->id; ?>"><?php echo $colorList->color_name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="product_attribute_image" class="control-label mb-1">Product Attribute Image</label>
                                                <input id="product_attribute_image" name="product_attribute_image[]" type="file">
                                                @error('product_attribute_image')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="product_attribute_button" class="control-label mb-1"> </label><br>
                                            <a href="javascript:void(0)" class="btn btn-primary" onclick="addMore('product_attribute_div')"><i class="fa fa-plus"></i>&nbsp; Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col text-center">
                        <button id="insert_records" type="submit" class="btn btn-md btn-success">{{ ($product_id) ? 'Update & Save' : 'Save' }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        //var loop_count = $('#loop_count').val();
        var loop_count = 1;
        function addMore(parameter) {
            loop_count++;
            var cardId = (parameter == 'product_attribute_div') ? 'product_attribute_js_'+loop_count : 'product_images_js_'+loop_count;
            var cardHeaderName = (parameter == 'product_attribute_div') ? 'Product Attributes' : 'Product Image';
            var html = '<div class="card" id="'+cardId+'"><div class="card-header bg-secondary"><strong class="card-title text-light mb-3">Add '+cardHeaderName+'</strong></div><div class="card-body"><div class="row">';
            if (parameter == 'product_attribute_div') {
                html += '<div class="col-md-3"><div class="form-group"><label for="product_attribute_sku" class="control-label mb-1">Product Attribute SKU</label><input type="hidden" name="product_attribute_id[]" id="product_attribute_id" value=""><input type="hidden" name="product_attribute_image_value[]" id="product_attribute_image_value" value=""><input id="product_attribute_sku" name="product_attribute_sku[]" type="text" class="form-control"></div></div>';

                html += '<div class="col-md-3"><div class="form-group"><label for="product_attribute_mrp" class="control-label mb-1">Product MRP</label><input id="product_attribute_mrp" name="product_attribute_mrp[]" type="text" class="form-control"></div></div>';

                html += '<div class="col-md-3"><div class="form-group"><label for="product_attribute_price" class="control-label mb-1">Product Price</label><input id="product_attribute_price" name="product_attribute_price[]" type="text" class="form-control"></div></div>';

                html += '<div class="col-md-3"><div class="form-group"><label for="product_attribute_quantity" class="control-label mb-1">Product Quantity</label><input id="product_attribute_quantity" name="product_attribute_quantity[]" type="text" class="form-control"></div></div>';

                var size_id_html = $('#size_id').html();
                var size_id_html = size_id_html.replace('selected','');
                html += '<div class="col-md-3"><div class="form-group"><label for="size_id" class="control-label mb-1">Product Size</label><select name="size_id[]" id="size_id" class="form-control">'+size_id_html+'</select></div></div>';

                var color_id_html = $('#color_id').html();
                var color_id_html = color_id_html.replace('selected','');
                html += '<div class="col-md-3"><div class="form-group"><label for="color_id" class="control-label mb-1">Product Color</label><select name="color_id[]" id="color_id" class="form-control">'+color_id_html+'</select></div></div>';

                html += '<div class="col-md-3"><div class="form-group"><label for="product_attribute_image" class="control-label mb-1">Product Attribute Image</label><input id="product_attribute_image" name="product_attribute_image[]" type="file"></div></div>';

            } else {
                html += '<div class="col-md-3"><input type="hidden" name="product_image_id[]" id="product_image_id"><input type="hidden" name="product_images_value[]" id="product_images_value"><label for="product_images" class="control-label mb-1">Product Image</label><input id="product_images" name="product_images[]" type="file"></div>';
            }

            loopCount = "'"+cardId+"'";
            html += '<div class="col-md-1"><label class="control-label mb-1"> </label><br><a href="javascript:void(0)" class="btn btn-danger" onclick="deleteItem('+loopCount+')"><i class="fa fa-minus"></i>&nbsp; Delete </a></div>';

            html += '</div></div></div>';
            $('#'+parameter+'').append(html);
        }

        function deleteItem(cardId) {
            $('#'+cardId+'').remove();
        }

        ClassicEditor
            .create( document.querySelector( '#product_short_description' ) )
            .catch( error => {
            console.error( error );
        } );

        ClassicEditor
            .create( document.querySelector( '#product_description' ) )
            .catch( error => {
            console.error( error );
        } );

        ClassicEditor
            .create( document.querySelector( '#product_technical_specification' ) )
            .catch( error => {
            console.error( error );
        } );


    </script>
@endsection
