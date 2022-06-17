<div class="bg-white flex px-6 py-3 shadow">
    <div class="flex-grow">
        @staff
            <a href="/!" target="_blank">Staff Area</a>
        @endstaff
    </div>
    <div>
        @auth
            {{ auth()->user()->username }}
        @else
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endauth
    </div>
</div>
