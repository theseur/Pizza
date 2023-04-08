        @section('pizza_order_extension_filter')
        @if ($pizza_type_category == '' or $pizza_type_category=='all')
        <input type="radio" id="all" name="pizza_type_category" value="all" checked><label for="">All</label>
        @else
        <input type="radio" id="all" name="pizza_type_category" value="all"><label for="">All</label>
        @endif
        @if ($pizza_type_category == "king")
        <input type="radio" id="king" name="pizza_type_category" value="king" checked><label for="">King</label>
        @else
        <input type="radio" id="king" name="pizza_type_category" value="king"><label for="">King</label>
        @endif

        @if ($pizza_type_category == "knight")
        <input type="radio" id="knight" name="pizza_type_category" value="knight" checked><label for="">Knight</label>  
        @else
        <input type="radio" id="knight" name="pizza_type_category" value="knight"><label for="">Knight</label>  
        @endif

        @if ($pizza_type_category == "page")
        <input type="radio" id="page" name="pizza_type_category" value="page" checked><label for="">Page</label>    
        @else
        <input type="radio" id="page" name="pizza_type_category" value="page"><label for="">Page</label>
        @endif

        @if ($pizza_type_category == "nobleman")
        <input type="radio" id="nobleman" name="pizza_type_category" value="nobleman" checked><label for="">Nobleman</label>
        @else
        <input type="radio" id="nobleman" name="pizza_type_category" value="nobleman"><label for="">Nobleman</label>
        @endif

        <h2>Vegetarian</h2>
        @if ($pizza_vegetarian == '' or $pizza_vegetarian == 'all')
        <input type="radio" id="all" name="vegetarian" value="all" checked><label for="">All</label>
        @else
        <input type="radio" id="all" name="vegetarian" value="all"><label for="">All</label>
        @endif
        
        @if ($pizza_vegetarian == '1')
        <input type="radio" id="yes" name="vegetarian" value="1" checked><label for="">Yes</label>
        @else
        <input type="radio" id="yes" name="vegetarian" value="1"><label for="">Yes</label>
        @endif
        
        @if ($pizza_vegetarian == '0')
        <input type="radio" id="no" name="vegetarian" value="0" checked><label for="">No</label>
        @else
        <input type="radio" id="no" name="vegetarian" value="0"><label for="">No</label>
        @endif

        @show