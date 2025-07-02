@if (session('success'))
    <div id="alert-success" class="fixed top-4 right-4 z-50 flex items-center p-4 text-sm text-green-800 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200 shadow-lg" role="alert">
        <svg class="w-4 h-4 me-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 5.707 8.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd"/>
        </svg>
        <div>{{ session('success') }}</div>
        <button type="button" class="ms-auto bg-transparent text-green-500 rounded-lg p-1.5 hover:bg-green-200 dark:hover:bg-green-700" data-dismiss-target="#alert-success" aria-label="Close">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
        </button>
    </div>

    <script>
        setTimeout(() => {
            const alert = document.getElementById('alert-success');
            if (alert) alert.remove();
        }, 3000);
    </script>
@endif
