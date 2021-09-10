<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Management System</title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    @include('sweetalert::alert')
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <div class="container">
            <a href="{{route('dashboard.home')}}" class="navbar-brand">LMS</a>


            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="" class="nav-link">Signup</a></li>
                <li class="nav-item"><a href="" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid ps-0">
        <div class="row">
            <div class="col-2 position-fixed left-0" style="overflow-y: scroll;height:90vh">
                <div class="list-group rounded-0">
                    <a href="{{route('dashboard.home')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Dashboard </a>
                    <a href="{{route('manage.books')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Manage Books </a>
                    <a href="{{route('add.book')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Add Books </a>
                    <a href="{{route('add.entry')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Add Entry </a>
                    <a href="{{route('orders.active')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Active Orders </a>
                    <a href="{{route('orders.all')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Manage Orders </a>
                    <a href="{{route('students.add')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Add Student</a>
                    <a href="{{route('students.all')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Manage Students</a>
                    <a href="" class="list-group-item bg-dark text-white list-group-item-action py-3">Setting </a>
                    <a href="{{route('logout')}}" class="list-group-item bg-dark text-white list-group-item-action py-3">Logout </a>
                </div>
            </div>
            <div class="col-10 position-relative" style="margin-left: 16%">
                @section('content')
                    @show
            </div>
        </div>
    </div>
    
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    </body>
</html>