<?php
use Illuminate\Support\Facades\DB;

function getTopNavCategory(){
    $result = DB::table('categories')->where(['category_status' => 'Enabled'])->get();
    foreach ($result as $row) {
        $arrCategory[$row->id]['city'] = $row->category_name;
        $arrCategory[$row->id]['parent_id'] = $row->category_parent_id;
    }
    $str=buildTreeView($arrCategory,0);
    return $str;
}

$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($arr as $id=>$data){
		if($parent==$data['parent_id']){
			if($level>$prelevel){
				if($html==''){
					$html.='<ul class="nav navbar-nav">';
				}else{
					$html.='<ul class="dropdown-menu">';
				}

			}
			if($level==$prelevel){
				$html.='</li>';
			}
			$html.='<li><a href="#">'.$data['city'].'<span class="caret"></span></a>';
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</li></ul>';
	}
	return $html;
}


function getUserTemparoryId(){
    if (session()->has('USER_TEMP_ID') == NULL) {
        $randomUserId = rand(111111111,999999999);
        session()->put('USER_TEMP_ID',$randomUserId);
    }
    return session()->get('USER_TEMP_ID');
}


function getCountOfCartItems(){
    if (session()->has('FRONT_USER_LOGIN')) {
        $userId = session()->has('FRONT_USER_LOGIN');
        $userType = "Registered";
    }else{
        $userId = getUserTemparoryId();
        $userType = "Non-Registered";
    }
    $result = DB::table('cart')
    ->leftJoin('products','products.id','=','cart.product_id')
    ->leftJoin('products_attribute','products_attribute.id','=','cart.product_attribute_id')
    ->leftJoin('sizes','sizes.id','=','products_attribute.size_id')
    ->leftJoin('colors','colors.id','=','products_attribute.color_id')
    ->where(['user_id' => $userId])
    ->where(['user_type' => $userType])
    ->select('cart.product_quantity','products.product_name','products.product_image','products.product_slug','sizes.size','colors.color_name','products_attribute.product_attribute_price','products.id as product_id','products_attribute.id as product_attribute_id','products_attribute.product_attribute_image')
    ->get();
    return $result;
}

?>
