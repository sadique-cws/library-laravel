<div>
    <form action="" method="POST" enctype="multipart/form-data" wire:submit.prevent="save">
        @csrf
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" wire:model="title" class="form-control">
            @error('title')<p class="text-danger small">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="">author</label>
            <input type="text" wire:model="author" class="form-control">
            @error('author')<p class="text-danger small">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="">edition</label>
            <input type="text" wire:model="edition" class="form-control">
            @error('edition')<p class="text-danger small">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="">language</label>
            <input type="text" wire:model="language" class="form-control">
            @error('language')<p class="text-danger small">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="">price</label>
            <input type="text" wire:model="rent_price" class="form-control">           
             @error('rent_price')<p class="text-danger small">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="">NOP</label>
            <input type="text" wire:model="no_of_page" class="form-control">
            @error('no_of_page')<p class="text-danger small">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <label for="">ISBN</label>
            <input type="text" wire:model="isbn" class="form-control">
            @error('isbn')<p class="text-danger small">{{$message}}</p>@enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success w-100" >Create </button>
        </div>
    </form>
</div>
