<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Learning</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Learning</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/notification_test">Notification</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="safe-area">
        <h1 class="mb-4">Laravel Learning</h1>

        <div class="row">

            <div class="col-sm col-md-4">
                <div class="list-group">
                    <a href="/" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h2 class="mb-1 fs-6">List data</h2>
                            <small>
                                <i data-feather="list"></i>
                            </small>
                        </div>
                        <small>List all data.</small>
                    </a>
                    <a href="/data/create" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h2 class="mb-1 fs-6">Registration form</h2>
                            <small>
                                <i data-feather="user-plus"></i>
                            </small>
                        </div>
                        <small>Open the registration form to create data.</small>
                    </a>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-dark text-center">
        <div class="container">
            <span class="text-muted">Laravel Learning &copy; Felipe Leite</span>
        </div>
    </footer>

    @if(session('notification'))
        @php
            $notification = session('notification')
        @endphp

        <div aria-live="polite" aria-atomic="true" >
            <div class="toast-container position-absolute top-0 end-0 p-3">
                <div class="toast d-flex align-items-center text-white bg-{{$notification->type}}" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        {{$notification->msg}}
                    </div>
                    <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
