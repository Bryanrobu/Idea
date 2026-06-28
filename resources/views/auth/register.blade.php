<x-layout>
    <x-form title="Register an account" description="Start tracking your ideas today">
        <form action="/register" method="POST" class="mt-2 space-y-4">
            @csrf
            <x-form.field label="Name" name="name" />
            <x-form.field label="E-mail" name="email" type="email" />
            <x-form.field label="Password" name="password" type="password "/>

            <button class="btn mt-2 h-10 w-full" type="submit">Create Account</button>
        </form>
    </x-form>
</x-layout>
