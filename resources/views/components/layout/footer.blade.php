<footer aria-labelledby="footer-heading" class="relative pt-12">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-4 lg:px-8">
        <div class="border-t border-gray-600 text-green-600 pt-8 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-4">
                <x-github-link/>
                <x-social-links/>
            </div>
            <div class="flex mt-8 items-center space-x-1 text-xs text-gray-600 leading-5 md:order-3 md:mt-0">
                <p>Proudly hosted with</p>
                <a
                    href="https://m.do.co/c/7a24c68b1e6d"
                    class="hover:text-gray-200"
                    target="_blank"
                    rel="noopener"
                >
                    <span class="sr-only">Digital Ocean</span>
                    <x-icon-digitalocean class="h-4" />
                </a>
            </div>
            <div class="flex mt-8 items-center space-x-1 text-xs text-gray-600 leading-5 md:order-2 md:mt-0">
                <p>privacy-first insights with</p>
                <a
                    href="https://usefathom.com/ref/FI15PB"
                    class="hover:text-gray-200"
                    target="_blank"
                    rel="noopener"
                >
                    <span class="sr-only">Fathom Analytics</span>
                    <x-icon-fathom class="h-6" />
                </a>
            </div>
            <p class="flex mt-8 text-xs text-gray-600 leading-5 md:order-1 md:mt-0">
                &copy; 2024 {{ config('rune.ticker') }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
