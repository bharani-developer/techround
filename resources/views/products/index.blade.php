@extends('../base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div>
        @endif
      </div>
    <h1 class="display-3">products</h1>   
   
      <div>
        <a style="margin: 19px;" href="{{ route('products.create')}}" class="btn btn-primary">New product</a>
        </div> 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>product</td>
          <td>category</td>
          
          <td>price</td>
         
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $products)
        <tr>
            <td>{{$products->id}}</td>
            <td>{{$products->product}} </td>
            <td>{{$products->category}}</td>
            <td>{{$products->stock}}</td>
            
            <td>{{$products->price}}</td>
          
            <td>
                <a href="{{ route('products.edit',$products->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('products.destroy', $products->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection