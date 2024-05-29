<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMP4 | {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/Tutwuri.png') }}" type="image/x-icon">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .header a {
            text-decoration: none;
            color: black;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            z-index: 1;
            top: 40px;
            /* Adjust the value as needed */
            right: 0;
        }

        .dropdown-content a,
        .dropdown-content button {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }

        .dropdown-content a:hover,
        .dropdown-content button:hover {
            background-color: #f9f9f9;
        }

        .relative:hover .dropdown-content {
            display: block;
        }

        #profileDropdown {
            position: relative;
        }

        #profileDropdown img {
            border-radius: 50%;
        }

        .relative {
            position: relative;
        }

        .halaman a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>



<body>
    @include('sweetalert::alert')
    <div class="wrapper">

        @include('layouts.sidebar')
        <div class="main p-3">
            <header class="shadow mb-3 rounded">

                <div class="p-3" style="display: flex;justify-content: space-between;">
                    <div class="halaman">
                        <a href="">
                            <h3>Halaman {{ $title ?? '' }}</h3>
                        </a>
                    </div>
                    <div class="relative">
                        <em class="mx-3">{{ Auth::user()->name }} </em>
                        <button id="profileDropdown" class=" ">
                            <img style="width: 30px" src="{{ asset('img/admin.png') }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownMenu" class="dropdown-content">
                            <a href="{{ route('profile.edit') }}"><i class="lni lni-pencil"></i>edit profil</a>
                            <a href="{{ route('logout') }}"><i class="lni lni-exit"></i>log out</a>
                        </div>
                    </div>
                </div>

            </header>





            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var profileDropdown = document.getElementById("profileDropdown");
            var dropdownMenu = document.getElementById("dropdownMenu");

            profileDropdown.addEventListener("click", function() {
                dropdownMenu.classList.toggle("show");
            });

            window.onclick = function(event) {
                if (!event.target.matches("#profileDropdown")) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains("show")) {
                            openDropdown.classList.remove("show");
                        }
                    }
                }
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        window.deleteConfirm = function(e) {
            e.preventDefault();
            var form = e.target.form;
            swal({
                    title: "Apakah kamu yakin ingin menghapusnya?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        }
    </script>
</body>

</html>
