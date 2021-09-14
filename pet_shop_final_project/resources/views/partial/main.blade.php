@extends('pages.home')

@auth
    @push('scripts')
        <script>
            Swal.fire({
                title:  " Berhasil Login!",
                text: "{{ Auth::user()->name }}",
                icon: "success",
                confirmButtonText: "Continue",
            });
        </script>
    @endpush 
@endauth


@section('header')
    @auth
        <div class="row">
            <div class="col">
                Welcome {{ Auth::user()->name }} !
            </div>

            <div class="col">
                <a class="nav-link bg-warning" style="color:white;" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">                              
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                    style="display: none; color:white;">
                    @csrf
                </form>

            </div>
        </div>
    @endauth

    @guest
        <a href="/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
    @endguest
    
@endsection