<div>
    <div class="row">
        <div class="col-4 ms-auto mb-2">
            <input type="search" placeholder="search here by book title" name="search" wire:model="search" class="form-control">
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <tr>
            <th>#id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Aadhaar</th>
            <th>Action</th>
        </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->aadhaar}}</td>
            <td>
                <button type="button" class="btn btn-danger" wire:click="delete({{$student->id}})">X</button>
                <button type="button" class="btn btn-info">edit</button>
            </td>
        </tr>         
    @endforeach
    </table>
</div>
