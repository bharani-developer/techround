@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}">
          @csrf
          <div class="form-group">    
              <label for="products">Products:</label>
              <input type="text" class="form-control" name="product"/>
          </div>
          <div class="form-group">
              <label for="category">category:</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          <div class="form-group">
              <label for="stock">stock:</label>
              <input type="text" class="form-control" name="stock"/>
          </div>
          <div class="form-group">
              <label for="price">price:</label>
              <input type="text" class="form-control" name="price"/>
          </div>
         
                                 
          <button type="submit" class="btn btn-primary">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection