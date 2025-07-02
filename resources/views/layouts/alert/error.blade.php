@if (session('error'))
    <div class="mb-4">
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-red-800 dark:text-red-200" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 10-2 0v4a1 1 0 002 0V6zm-1 8a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            <span class="sr-only">Error</span>
            <div>
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif