<x-guest-layout>



    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class=" shadow flex flex-col sm:justify-center items-center pt-5  bg-gray-100">
            <div class=" sm:justify-center items-center">
                <input class="rounded-full shadow" type="text" name="email" placeholder="Email"> <br>

            </div>
            @error('email')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
            <!-- Password -->
            <div class="mt-4">
                <input class="rounded-full shadow" type="password" name="password" placeholder="Password">

            </div>

            @error('password')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror


            <button class="mt-3 mb-3 btn btn-primary shadow" style="width: 140px">
                login
            </button>
            <a href="/">back</a>



        </div>
        <!-- Email Address -->

    </form>
</x-guest-layout>
