<div>
    <div class="row">
        <div class="col-4 ms-auto mb-2">
            <input type="search" placeholder="search here by book title" name="search" wire:model="search" class="form-control">
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <tr>
            <th>#id</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Price</th>
            <th>Edition</th>
            <th>Language</th>
            <th>Action</th>
        </tr>
    @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->edition}}</td>
            <td>{{$book->language}}</td>
            <td>{{$book->rent_price}}</td>
            <td>{{$book->isbn}}</td>
        </tr>         
    @endforeach
    </table>
</div>
