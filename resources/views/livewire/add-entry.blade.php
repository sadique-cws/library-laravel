<div>
    <form action="" method="POST">
        @csrf
        <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="">Select student</label>
                        <select name="student" id="" class="form-control">
                            <option value="">Select student</option>
                            @foreach ($students as $s)
                                <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col">
                            <h5>Select Books</h5>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Book</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="book" id="" class="form-control">
                                    <option value="">Select book</option>
                                    @foreach ($books as $b)
                                        <option value="{{$b->id}}">{{$b->title}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="date" class="form-control">
                            </td>
                            <td>
                                <input type="number" class="form-control" value="1" min="1" max="5">
                            </td>
                            <td>
                                <input type="number" class="form-control" value="0" disabled>
                            </td>
                        </table>
                        <button class="btn btn-success">Add Book</button>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-danger float-end">Save</button>
                </div>
        </div>
    </form>
</div>
