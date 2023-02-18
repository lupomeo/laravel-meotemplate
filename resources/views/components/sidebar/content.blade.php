<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

   
    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        
    </div>

    <x-sidebar.link
        title="Gestione studenti"
        href="{{ route('students') }}"
        :isActive="request()->routeIs('students')"
    >
        <x-slot name="icon">
            <svg class="flex-shrink-0 w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16"><g fill="none"><path d="M6.75 3.25a1.25 1.25 0 1 1 2.5 0a1.25 1.25 0 0 1-2.5 0zM8 1a2.25 2.25 0 0 0-2.19 2.766l-1.612-.65a1.6 1.6 0 0 0-2.076.872a1.58 1.58 0 0 0 .87 2.07L5 6.869v2.384l-1.813 3.41a1.591 1.591 0 1 0 2.81 1.495L8 10.39l2.004 3.768a1.591 1.591 0 0 0 2.81-1.494L11 9.252V6.869l2.008-.811a1.58 1.58 0 0 0 .87-2.07a1.6 1.6 0 0 0-2.076-.873l-1.611.651A2.25 2.25 0 0 0 8 1zM3.047 4.369a.6.6 0 0 1 .776-.327l3.428 1.385a2 2 0 0 0 1.498 0l3.428-1.385a.6.6 0 0 1 .776.327a.58.58 0 0 1-.32.762l-2.008.81A1 1 0 0 0 10 6.87v2.383a1 1 0 0 0 .117.47l1.814 3.411a.592.592 0 0 1-1.044.556L8.883 9.92a1 1 0 0 0-1.766 0l-2.003 3.767a.591.591 0 1 1-1.044-.555l1.813-3.41A1 1 0 0 0 6 9.253V6.869a1 1 0 0 0-.625-.927L3.367 5.13a.58.58 0 0 1-.32-.762z" fill="currentColor"></path></g></svg>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Gestione utenti"
        href="{{ route('usersm') }}"
        :isActive="request()->routeIs('usersm')"
    >
        <x-slot name="icon">
            <svg class="flex-shrink-0 w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 640 512"><path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" fill="currentColor"></path></g></svg>
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Profilo"
        href="{{ route('profile.edit') }}"
        :isActive="request()->routeIs('profile.edit')"
    >
        <x-slot name="icon">
            <svg class="flex-shrink-0 w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"><path d="M12 4a5 5 0 1 1-5 5a5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7a7 7 0 0 0-7-7z" fill="currentColor"></path><path d="M22 30h-2v-5a5 5 0 0 0-5-5H9a5 5 0 0 0-5 5v5H2v-5a7 7 0 0 1 7-7h6a7 7 0 0 1 7 7z" fill="currentColor"></path><path d="M22 4h10v2H22z" fill="currentColor"></path><path d="M22 9h10v2H22z" fill="currentColor"></path><path d="M22 14h7v2h-7z" fill="currentColor"></path></g></svg>
        </x-slot>
    </x-sidebar.link>


    @php
        $links = array_fill(0, 10, '');
    @endphp

    @foreach ($links as $index => $link)
        <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach

</x-perfect-scrollbar>
