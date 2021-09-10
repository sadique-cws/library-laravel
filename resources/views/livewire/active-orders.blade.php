<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>
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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#finish">Finish Order / View</button>

                <div class="modal fade" id="finish">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Finish Order</div>
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
                                    <tr>
                                        <th colspan="3">Total Amount</th>
                                        <th>@php
                                            echo $total = $item->book->rent_price * $item->qty;

                                        @endphp</th>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <form  action="{{ route('finish',["id"=>$order->id])}}" method="POST">
                                    @csrf
                                    @method("put")
                                    <button type="submit" class="btn btn-success float-end">Book Submit {{$count}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                
            </td>
            <td>                                
                
            </td>
        </tr>         
    @endforeach
    </table>
</div>
