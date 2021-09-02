<div>
    <form action="" method="POST" wire:submit.prevent="save">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" placeholder="enter name" wire:model="name" class="form-control">
            @error('name') <p class="text-danger small">{{$message}}</p> @enderror
        </div>
        <div class="mb-3">
            <label for="">email</label>
            <input type="text" placeholder="enter email" wire:model="email" class="form-control">            
            @error('email') <p class="text-danger small">{{$message}}</p> @enderror
        </div>
        <div class="mb-3">
            <label for="">aadhaar</label>
            <input type="number" placeholder="enter aadhaar" wire:model="aadhaar" class="form-control">
            @error('aadhaar') <p class="text-danger small">{{$message}}</p> @enderror
        </div>
        <div class="mb-3">
            <label for="">password</label>
            <input type="password" placeholder="enter password" wire:model="password" class="form-control">
            @error('password') <p class="text-danger small">{{$message}}</p> @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success w-100">Add Student </button>
        </div>
    </form>
</div>
