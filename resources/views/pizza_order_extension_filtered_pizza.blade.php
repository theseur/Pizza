@section('filtered_pizza')

@php
            $dbcontrol = app() -> make('App\Http\Controllers\DatabaseController');
            $category_datas = app() -> call([$dbcontrol, 'read_category'],[]);
            $pizza_datas = app() -> call([$dbcontrol, 'read_pizza'],[]);
            foreach ($pizza_datas as $pizza_data)
            {

if ($pizza_type_category == '' or $pizza_type_category=='all' and ($pizza_vegetarian == '' or $pizza_vegetarian == 'all')) {
    print 
    "<div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='choosed_pizza'>".$pizza_data->pname."</label></div>
        <form action='pizza_details' method='post'>
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='pizza_details' value='Details'>
        </form>
    </div>";
}

elseif ($pizza_type_category == '' or $pizza_type_category=='all' and ($pizza_vegetarian != '' or $pizza_vegetarian != 'all')) {
if ($pizza_data->vegetarian == intval($pizza_vegetarian)){
print 
"<div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='choosed_pizza'>".$pizza_data->pname."</label></div>
        <form action='pizza_details' method='post'>
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='pizza_details' value='Details'>
        </form>
    </div>";
}    
}

elseif ($pizza_type_category != '' or $pizza_type_category != 'all' and ($pizza_vegetarian != '' or $pizza_vegetarian != 'all')) {
if ($pizza_data->vegetarian == intval($pizza_vegetarian) and $pizza_type_category == $pizza_data->categoryname) {
print 
"<div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='choosed_pizza'>".$pizza_data->pname."</label></div>
        <form action='pizza_details' method='post'>
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='pizza_details' value='Details'>
        </form>
    </div>";
}
 }

elseif ($pizza_type_category != '' or $pizza_type_category != 'all' and ($pizza_vegetarian == '' or $pizza_vegetarian == 'all')) {
if ($pizza_type_category == $pizza_data->categoryname) {
    print 
    "<div class='pizza_item_to_choosing'>
        <img class='pizza_picture' src='/image/pizza_order.jpg' alt='pizza'>
        <div class='pizza_item_radio_label'>
        <input type='radio' id='".$pizza_data->pname."' name='choosed_pizza' value='".$pizza_data->pname."'>
        <label for='choosed_pizza'>".$pizza_data->pname."</label></div>
        <form action='pizza_details' method='post'>
        <input type='hidden' name='choosed_pizza_detail' value='".$pizza_data->pname."'>    
        <input class='details_button 'type='submit' formaction='pizza_details' value='Details'>
        </form>
    </div>";
}
}
}
@endphp

@show