<nav class="bg-[#10223F] h-screen fixed inset-y-0 left-0 z-50" :class="sidebarOpen ? 'w-64' : 'w-20'">
    <div class="h-full flex flex-col">
        <!-- Seção de Perfil -->
        <div class="p-4 border-b border-gray-700">
            <div class="flex items-center space-x-4" :class="!sidebarOpen && 'justify-center'">
                <!-- Imagem do Perfil -->
                <div class="relative">
                    <img src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . Auth::user()->name }}"
                        class="h-12 w-12 rounded-full border-2 border-gray-300" alt="Profile photo">
                    <!-- Indicador de status online -->
                    <div
                        class="absolute bottom-0 right-0 h-3 w-3 rounded-full bg-green-500 border-2 border-white">
                    </div>
                </div>
                <!-- Nome e Email -->
                <div x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-x-4"
                    x-transition:enter-end="opacity-100 transform translate-x-0">
                    <h2 class="text-white font-medium">{{ Auth::user()->name }}</h2>
                    <p class="text-gray-400 text-sm">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

        <!-- Links de Navegação -->
        <div class="flex-1 py-6 flex flex-col space-y-2 px-4">
            <!-- Link para o Dashboard -->
            <a href="{{ route('dashboard') }}"
                class="flex items-center text-white hover:bg-[#1a3660] rounded-lg p-3 transition-colors duration-200"
                :class="{ 'justify-center': !sidebarOpen }">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-x-4"
                    x-transition:enter-end="opacity-100 transform translate-x-0" class="ml-3">Dashboard</span>
            </a>

            <!-- Link para Clientes -->
            <a href="{{ route('cliente.index') }}"
                class="flex items-center text-white hover:bg-[#1a3660] rounded-lg p-3 transition-colors duration-200"
                :class="{ 'justify-center': !sidebarOpen }">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-x-4"
                    x-transition:enter-end="opacity-100 transform translate-x-0" class="ml-3">Clientes</span>
            </a>
        </div>
        <!-- Botões de Alternância e Logout -->
        <div class="border-t border-gray-700 p-4">
            <!-- Botão para alternar a largura da barra lateral -->
            <button @click="sidebarOpen = !sidebarOpen"
                class="w-full flex items-center justify-center text-white hover:bg-[#1a3660] rounded-lg p-3 mb-3">
                <svg class="h-6 w-6 transform transition-transform duration-300"
                    :class="sidebarOpen ? '' : 'rotate-180'" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2"
                        d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>

            <!-- Botão de Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full flex items-center text-white hover:bg-[#1a3660] rounded-lg p-3"
                    :class="{ 'justify-center': !sidebarOpen }">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0" class="ml-3">Sair</span>
                </button>
            </form>
        </div>
    </div>
</nav>