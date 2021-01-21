@extends('../base')
@section('main')
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12">
                @if (session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <h1 class="display-3">orders</h1>

            <div>
                <a style="margin: 19px;" href="{{ route('orders.create') }}" class="btn btn-primary">New order</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>OrderID</td>
                        <td>product_id</td>
                        <td>product</td>
                        <td>CustomerID</td>
                        <td>OrderAmount</td>
                        <td>OrderShipName</td>
                        <td>OrderShipAddress</td>
                        <td>OrderShipAddress2</td>
                        <td>OrderCity</td>
                        <td>OrderState</td>
                        <td>OrderZip</td>
                        <td>OrderCountry</td>
                        <td>OrderPhone</td>
                        <td>Job Title</td>
                        <td>OrderFax</td>
                        <td>OrderEmail</td>
                        <td>OrderDate</td>
                        <td>OrderShipped</td>
                        <td>OrderTrackingNumber</td>
                        <td colspan=2>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->OrderID }}</td>
                            <td>{{ $order->product_id }} </td>
                            <td>{{ $order->product }}</td>
                            <td>{{ $order->CustomerID }}</td>
                            <td>{{ $order->OrderAmount }}</td>
                            <td>{{ $order->OrderShipName }}</td>
                            <td>{{ $order->OrderShipAddress }} </td>
                            <td>{{ $order->OrderShipAddress2 }}</td>
                            <td>{{ $order->OrderCity }}</td>
                            <td>{{ $order->OrderState }}</td>
                            <td>{{ $order->OrderZip }}</td>
                            <td>{{ $order->OrderCountry }} </td>
                            <td>{{ $order->OrderPhone }}</td>
                            <td>{{ $order->OrderFax }}</td>
                            <td>{{ $order->OrderShipping }}</td>
                            <td>{{ $order->OrderTax }}</td>
                            <td>{{ $order->OrderEmail }}</td>
                            <td>{{ $order->OrderDate }}</td>
                            <td>{{ $order->OrderShipped }}</td>
                            <td>{{ $order->OrderTrackingNumber }}</td>
                            <td>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="post">
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
