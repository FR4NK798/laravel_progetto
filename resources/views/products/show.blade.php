@include('includes.init')
@include('includes.nav')

<img src=" {{ $product->img }}"></img>
<h1>{{ $product->title }}</h1>
<h2 class="card-text">{{$product->brand}}</h2>
        <p class="card-text">{{$product->description}}</p>
        <p>{{$product->price}}</p>




@include('includes.footer')