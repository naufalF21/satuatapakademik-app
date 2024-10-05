<div class="flex flex-row items-center gap-3">
    <span class="text-base">Share : </span>

    <!-- Share ke Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(config('app.url') . '/articles/' . $post->slug) }}"
        target="_blank" class="btn btn-facebook">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
            <path fill="#1877f2"
                d="M256 128C256 57.308 198.692 0 128 0S0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
            <path fill="#fff"
                d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A129 129 0 0 0 128 256a129 129 0 0 0 20-1.555V165z" />
        </svg>
    </a>

    <!-- Share ke Twitter -->
    <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(config('app.url') . '/articles/' . $post->slug) }}"
        target="_blank" class="btn btn-twitter">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 14 14">
            <g fill="none">
                <g clip-path="url(#primeTwitter0)">
                    <path fill="currentColor"
                        d="M11.025.656h2.147L8.482 6.03L14 13.344H9.68L6.294 8.909l-3.87 4.435H.275l5.016-5.75L0 .657h4.43L7.486 4.71zm-.755 11.4h1.19L3.78 1.877H2.504z" />
                </g>
                <defs>
                    <clipPath id="primeTwitter0">
                        <path fill="#fff" d="M0 0h14v14H0z" />
                    </clipPath>
                </defs>
            </g>
        </svg>
    </a>

    <!-- Share ke WhatsApp -->
    <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . config('app.url') . '/articles/' . $post->slug) }}"
        target="_blank" class="btn btn-whatsapp">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 258">
            <defs>
                <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
                    <stop offset="0%" stop-color="#1faf38" />
                    <stop offset="100%" stop-color="#60d669" />
                </linearGradient>
                <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%">
                    <stop offset="0%" stop-color="#f9f9f9" />
                    <stop offset="100%" stop-color="#fff" />
                </linearGradient>
            </defs>
            <path fill="url(#logosWhatsappIcon0)"
                d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
            <path fill="url(#logosWhatsappIcon1)"
                d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
            <path fill="#fff"
                d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
        </svg>
    </a>

    <!-- Share ke LinkedIn -->
    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(config('app.url') . '/articles/' . $post->slug) }}&title={{ urlencode($post->title) }}"
        target="_blank" class="btn btn-linkedin">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 128 128">
            <path fill="#0076b2"
                d="M116 3H12a8.91 8.91 0 0 0-9 8.8v104.42a8.91 8.91 0 0 0 9 8.78h104a8.93 8.93 0 0 0 9-8.81V11.77A8.93 8.93 0 0 0 116 3" />
            <path fill="#fff"
                d="M21.06 48.73h18.11V107H21.06zm9.06-29a10.5 10.5 0 1 1-10.5 10.49a10.5 10.5 0 0 1 10.5-10.49m20.41 29h17.36v8h.24c2.42-4.58 8.32-9.41 17.13-9.41C103.6 47.28 107 59.35 107 75v32H88.89V78.65c0-6.75-.12-15.44-9.41-15.44s-10.87 7.36-10.87 15V107H50.53z" />
        </svg>
    </a>
</div>
