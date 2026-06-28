<x-layout>
    <x-form title="Log in" description="Glad to have you back">
        <form action="/login" method="POST" class="mt-2 space-y-4">
            @csrf
            <x-form.field label="E-mail" name="email" type="email" />
            <x-form.field label="Password" name="password" type="password "/>

            <button class="btn mt-2 h-10 w-full" type="submit">Log in</button>
        </form>
    </x-form>
</x-layout>
