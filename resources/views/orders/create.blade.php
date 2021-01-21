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
                <form method="post" action="{{ route('orders.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">product_id</label>
                        <input type="text" class="form-control" name="product_id" />
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">product</button>
                                <div class="dropdown-menu">


                                    {{--<div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">product</button>
                                                <div class="dropdown-menu">
                                                    @foreach ($products as $product)
                                                        <a class="dropdown-item" href="#">{{ $product->productname }}</a>
                                                </div>
                                                @endforeach

                                            </div> --}}


                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="product" aria-label="product">
                                </div>

                                <label for="product">product:</label>
                                productname
                                <input type="text" class="form-control" name="product" />
                            </div>

                            <div class="form-group">
                                <label for="OrderAmount">OrderAmount:</label>
                                <input type="text" class="form-control" name="OrderAmount" />
                            </div>
                            <div class="form-group">
                                <label for="OrderShipName">OrderShipName:</label>
                                <input type="text" class="form-control" name="OrderShipName" />
                            </div>
                            <div class="form-group">
                                <label for="OrderShipAddress1">OrderShipAddress1:</label>
                                <input type="text" class="form-control" name="OrderShipAddress" />
                            </div>
                            <div class="form-group">
                                <label for="OrderShipAddress2">OrderShipAddress2:</label>
                                <input type="text" class="form-control" name="OrderShipAddress2" />
                            </div>
                            <div class="form-group">
                                <label for="OrderCity">OrderCity:</label>
                                <input type="text" class="form-control" name="OrderCity" />
                            </div>
                            <div class="form-group">
                                <label for="OrderState">OrderState:</label>
                                <input type="text" class="form-control" name="OrderState" />
                            </div>
                            <div class="form-group">
                                <label for="OrderZip">OrderZip:</label>
                                <input type="text" class="form-control" name="OrderZip" />
                            </div>
                            <div class="form-group">
                                <label for="OrderCountry">OrderCountry:</label>
                                <input type="text" class="form-control" name="OrderCountry" />
                            </div>
                            <div class="form-group">
                                <label for="OrderPhone">OrderPhone:</label>
                                <input type="text" class="form-control" name="OrderPhone" />
                            </div>
                            <div class="form-group">
                                <label for="OrderFax">OrderFax:</label>
                                <input type="text" class="form-control" name="OrderFax" />
                            </div>
                            <div class="form-group">
                                <label for="OrderShipping">OrderShipping:</label>
                                <input type="text" class="form-control" name="OrderShipping" />
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label for="OrderEmail">OrderEmail:</label>
                                <input type="text" class="form-control" name="OrderEmail" />
                            </div>

                            <div class="form-group">
                                <label for="OrderShipped">OrderShipped:</label>
                                <input type="text" class="form-control" name="OrderShipped" />
                            </div>
                            <div class="form-group">
                                <label for="OrderTrackingNumber">OrderTrackingNumber:</label>
                                <input type="text" class="form-control" name="OrderTrackingNumber" />
                            </div>
                            <button type="submit" class="btn btn-primary-outline">Add order</button>
                </form>
            </div>
        </div>
    </div>
@endsection
