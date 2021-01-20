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
    <h1 class="display-3">customers</h1>   
   
      <div>
        <a style="margin: 19px;" href="{{ route('customers.create')}}" class="btn btn-primary">New customer</a>
        </div> 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customers)
        <tr>
            <td>{{$customers->id}}</td>
            <td>{{$customers->first_name}} {{$customers->last_name}}</td>
            <td>{{$customers->email}}</td>
            
            <td>{{$customers->city}}</td>
            <td>{{$customers->country}}</td>
            <td>
                <a href="{{ route('customers.edit',$customers->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('customers.destroy', $customers->id)}}" method="post">
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