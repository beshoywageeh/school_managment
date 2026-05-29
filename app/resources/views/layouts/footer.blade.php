<footer class="bg-white border-t border-gray-200 py-4 px-6 shrink-0">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="text-center md:text-start mb-2 md:mb-0">
            <p class="text-sm text-gray-600">
                <bdi>{{ trans('footer.rights') }}</bdi> &copy; {{ \Carbon\Carbon::now()->year }}
            </p>
        </div>
        <div class="flex items-center gap-4">
            <a href="https://www.facebook.com/LoopLabsDev" target="_blank"
                class="text-sm text-blue-600 hover:text-blue-800">
                {{ trans('footer.dev') }}
            </a>
        </div>
    </div>
</footer>
