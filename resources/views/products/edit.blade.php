@extends('../base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a product</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="product">product:</label>
                <input type="text" class="form-control" name="product" value={{ $product->product }} />
            </div>
     
            <div class="form-group">
                <label for="category">category:</label>
                <input type="text" class="form-control" name="category" value={{ $product->category }} />
            </div>
       
            <div class="form-group">
                <label for="price">price:</label>
                <input type="text" class="form-control" name="price" value={{ $product->price }} />
            </div>
            <div class="form-group">
                <label for="stock">stock:</label>
                <input type="text" class="form-control" name="stock" value={{ $product->stock }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection