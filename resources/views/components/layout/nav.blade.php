<nav class="border-b border-border px-6">
    <div class="max-w-7x1 mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="Idea logo" width="100">
            </a>
        </div>

        <div class="flex gap-x-5 items-center">
            @auth
                <form METHOD="POST" action="/logout">
                    @csrf
                    <button class="btn">
                        Log Out
                    </button>
                </form>
            @endauth

            @guest
                    <a href="/login">Login</a>
                    <a class="btn" href="/register">Register</a>
            @endguest
        </div>
    </div>
</nav>
