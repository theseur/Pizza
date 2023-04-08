<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/header_pizza_page.css" rel="stylesheet" type="text/css">
    <link href="/css/pizzas_page.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza order</title>
</head>
<body>
    @include('header_pizza_page')

    <div class="text_1">
        <h2>Available Pizzas:</h2>
    </div>
    <br>

    <form action="category_filter" method="post">
        @csrf
        <div class="category_name">
            @php
            $pizza_type_category = '';
            $pizza_vegetarian = '';
            if(isset($request)){
                $pizza_type_category = $request->pizza_type_category;
                $pizza_vegetarian = $request->vegetarian;
            }
            @endphp
            <h2>Category of pizzas</h2>
            @include('pizza_order_extension_filter')
            <br>
            <input type="submit" value="Refresh">
        </div>
    </form>

    <form action="pizza_ordering" method="post" class="pizza_ordering_form">
        @csrf
        <h2>Type of pizzas</h2>
        <div class="pizza_name">
            @include('pizza_order_extension_filtered_pizza')
            
        <br>
        <div class="Order_button_and_amount"> 
            <label for="">Amount for Ordering</label><input class="amount_to_pizza" name="pizza_amount" type="number" min="1" max="10" value="1">
            <input type="hidden" name="taken" value="2023-04-04" />
            <input type="hidden" name="dispatched" value="2023-04-05" />
            <input class="order_button" type="submit" value="Order">
        </div>
        </div>    
    
    </form>
    



</body>
</html>