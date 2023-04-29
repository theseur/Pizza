@section('filtered_pizza')

@php
            $dbcontrol = app() -> make('App\Http\Controllers\DatabaseController');
            $category_datas = app() -> call([$dbcontrol, 'read_category'],[]);
            $pizza_datas = app() -> call([$dbcontrol, 'read_pizza'],[]);
            foreach ($pizza_datas as $pizza_data)
            {    

if ($pizza_type_category == '' or $pizza_type_category=='all' and ($pizza_vegetarian == '' or $pizza_vegetarian == 'all')) {
    print 
    "<form action='' method='GET'> </form><div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='".$pizza_data->pname."'>".$pizza_data->pname."</label></div>
        <form action='comment_to_pizza' method='GET'>
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='comment_to_pizza' value='Comment'></form>
    </div>";
    
}

elseif ($pizza_type_category == '' or $pizza_type_category=='all' and ($pizza_vegetarian != '' or $pizza_vegetarian != 'all')) {
if ($pizza_data->vegetarian == intval($pizza_vegetarian)){
print 
"<form action='' method='GET'> </form><div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='".$pizza_data->pname."'>".$pizza_data->pname."</label></div>
        <form action='comment_to_pizza' method='GET'>
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='comment_to_pizza' value='Comment'>
        </form>
    </div>";
}    
}

elseif ($pizza_type_category != '' or $pizza_type_category != 'all' and ($pizza_vegetarian != '' or $pizza_vegetarian != 'all')) {
if ($pizza_data->vegetarian == intval($pizza_vegetarian) and $pizza_type_category == $pizza_data->categoryname) {
print 
"<form action='' method='GET'> </form><div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='".$pizza_data->pname."'>".$pizza_data->pname."</label></div>
        <form action='comment_to_pizza' method='GET'>
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='comment_to_pizza' value='Comment'>
        </form>
    </div>";
}
 }

elseif ($pizza_type_category != '' or $pizza_type_category != 'all' and ($pizza_vegetarian == '' or $pizza_vegetarian == 'all')) {
if ($pizza_type_category == $pizza_data->categoryname) {
    print 
    "<form action='' method='GET'> </form><div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='".$pizza_data->pname."'>".$pizza_data->pname."</label></div>
        <form action='comment_to_pizza' method='GET'> 
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='comment_to_pizza' value='Comment'>
        </form>
    </div>";
}
}
}
@endphp

@show