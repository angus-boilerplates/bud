<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <!-- Angus was here 2026 -->
    <head>
        @include('partials.head')
    </head>
    <body class="bg-zinc-50 dark:bg-zinc-800 min-h-screen">
        {{ $slot }}
    </body>
    @persist('toast')
        <flux:toast.group>
            <flux:toast/>
        </flux:toast.group>
    @endpersist
    @fluxScripts
</html>

