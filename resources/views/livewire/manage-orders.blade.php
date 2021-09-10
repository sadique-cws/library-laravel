<div>
    <div class="row">
        <div class="col-4 ms-auto mb-2">
            <input type="search" placeholder="search here by book title" name="search" wire:model="search" class="form-control">
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <tr>
            <th>#id</th>
            <th>user</th>
            <th>date</th>
            <th>email</th>
            <th>action</th>
        </tr>
    @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user->name}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->user->email}}</td>
           
            <td>
                <button type="button" class="btn btn-danger">X</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#view" class="btn btn-info">View</button>
                <div class="modal fade" id="view">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">{{$order->id}} OrderItems are: </div>
                            <div class="modal-body">
                                    <table class="table">
                                        <tr>
                                            <th>id</th>
                                            <th>Book</th>
                                            <th>qty</th>
                                            <th>price</th>
                                        </tr>
                                        @foreach ($order->orderItem as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->book->title}}</td>
                                                <td>{{$item->qty}}</td>
                                                <td>{{$item->book->rent_price}}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                            </div>
                        </div>
                    </div>
                </div></td>
        </tr>  
        
        
    @endforeach
    </table>
</div>
