<div class="relative">
    {{-- Animated Confetti --}}
    <svg class="absolute inset-0 w-full h-full pointer-events-none animate-fade-in" style="z-index:51" aria-hidden="true">
        <g>
            <circle cx="20" cy="20" r="4" fill="#a78bfa">
                <animate attributeName="cy" from="20" to="120" dur="1.4s" repeatCount="indefinite"/>
            </circle>
            <circle cx="80" cy="30" r="3" fill="#f472b6">
                <animate attributeName="cy" from="30" to="110" dur="1.1s" repeatCount="indefinite"/>
            </circle>
            <circle cx="140" cy="25" r="3.5" fill="#34d399">
                <animate attributeName="cy" from="25" to="115" dur="1.3s" repeatCount="indefinite"/>
            </circle>
            <circle cx="210" cy="35" r="2.8" fill="#fbbf24">
                <animate attributeName="cy" from="35" to="120" dur="1.6s" repeatCount="indefinite"/>
            </circle>
            <circle cx="270" cy="22" r="3" fill="#60a5fa">
                <animate attributeName="cy" from="22" to="105" dur="1.2s" repeatCount="indefinite"/>
            </circle>
            <circle cx="320" cy="28" r="4" fill="#f87171">
                <animate attributeName="cy" from="28" to="118" dur="1.5s" repeatCount="indefinite"/>
            </circle>
        </g>
    </svg>

    {{-- Overlay --}}
    <div {{ $attributes->merge(['class' => 'absolute inset-0 z-50 flex flex-col items-center justify-center bg-gradient-to-br from-white/90 via-white/70 to-violet-100/30 backdrop-blur-sm rounded-xl']) }}>
        <span class="text-3xl font-extrabold text-violet-600 drop-shadow animate-bounce mb-2">
            {{ $message ?? 'Coming Soon' }}
        </span>
        <span class="text-base text-gray-500 font-medium animate-pulse">
            Fitur ini akan hadir sebentar lagi! 🎉
        </span>
    </div>
    {{ $slot }}
</div>

{{-- Extra styling --}}
<style>
@keyframes fade-in {
    0% { opacity:0 }
    20% { opacity:.7 }
    100% { opacity:.7 }
}
.animate-fade-in { animation: fade-in 1s ease-in; }
</style>