@section('header_login_page')
<nav>
    <ul>
        <li><a href="main">Home</a></li>
        <li><a href="about_us">About Us</a></li>
        <li><a href="galerie">Galerie</a></li>
        <li><a href="pizza_page">Pizza</a></li>
        <li><a href="{{route('comments')}}" >Comment Page</a></li>
        <li><a class="head_label" href="{{route('login')}}">User</a></li>
    </ul>
</nav>    
@show
