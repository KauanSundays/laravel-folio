@php

    $user = \App\Models\User::withTrashed()->find($id);

@endphp

<x-layout.app>
    <div>
        <h1>user.id</h1>
        <h2>{{ $id }}</h2>
        Lamar
    </div>
</x-layout.app>
