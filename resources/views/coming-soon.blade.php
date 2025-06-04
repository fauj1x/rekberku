@extends('layouts.main')

@section('title', 'Coming Soon!')

@section('content')
<div class="min-h-[75vh] flex flex-col items-center justify-center bg-gradient-to-br from-[#9256e6] to-[#2a3755] relative overflow-hidden">
    <!-- Animated Confetti -->
    <div class="absolute inset-0 pointer-events-none z-0">
        <canvas id="confetti-canvas" class="w-full h-full"></canvas>
    </div>
    <!-- Rocket Illustration -->
    <div class="z-10 flex flex-col items-center">
        <div class="animate-bounce mb-6">
            <svg width="100" height="100" viewBox="0 0 120 120" fill="none">
                <ellipse cx="60" cy="110" rx="20" ry="7" fill="#000" fill-opacity="0.15"/>
                <g>
                    <path d="M54 90l12 0c8-54 0-70-6-70s-14 16-6 70z" fill="#fff"/>
                    <path d="M60 20c-3.5 0-7 6-7 15 0 6 1 30 7 55 6-25 7-49 7-55 0-9-3.5-15-7-15z" fill="#9256e6"/>
                    <circle cx="60" cy="30" r="5" fill="#7c3aed"/>
                </g>
                <g>
                    <rect x="56" y="90" width="8" height="18" rx="4" fill="#f7b731"/>
                    <rect x="58" y="104" width="4" height="8" rx="2" fill="#ef3b3b"/>
                </g>
                <g>
                    <polygon points="60,60 52,80 68,80" fill="#f6f0fd"/>
                </g>
            </svg>
        </div>
        <h1 class="text-white text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg text-center">Coming Soon!</h1>
        <p class="text-lg md:text-xl text-[#ebe0fd] font-medium mb-8 text-center max-w-md">
            🚀 Sesuatu yang <span class="text-yellow-300 font-bold">spesial</span> dan <span class="text-[#29d084] font-bold">seru</span> akan segera hadir.<br>
            Stay tuned & <span class="italic">get ready</span> to experience the excitement!
        </p>
        <div class="flex flex-col items-center gap-3">
            <div class="flex items-center gap-2 bg-white/10 px-5 py-2 rounded-lg shadow-lg text-white font-semibold text-base">
                <svg class="w-5 h-5 animate-spin text-yellow-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-opacity="0.3"/><path d="M12 2a10 10 0 0 1 10 10" stroke="#f7b731" stroke-linecap="round"/></svg>
                Sedang mempersiapkan kejutan terbaik...
            </div>
            <a href="{{ url('/dashboard') }}" class="mt-6 px-6 py-3 bg-white text-[#9256e6] font-bold rounded-xl shadow hover:bg-[#f6f0fd] transition">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
/* Simple Confetti Canvas Animation */
document.addEventListener("DOMContentLoaded", function() {
    const canvas = document.getElementById('confetti-canvas');
    if (!canvas) return;
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    const ctx = canvas.getContext('2d');
    let pieces = [];
    for(let i=0;i<100;i++){
        pieces.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            r: Math.random() * 6 + 4,
            d: Math.random() * 100,
            color: `hsl(${Math.random()*360},80%,70%)`,
            tilt: Math.random() * 10 - 10
        });
    }
    function draw() {
        ctx.clearRect(0,0,canvas.width,canvas.height);
        for(let i=0;i<pieces.length;i++){
            let p = pieces[i];
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI*2, false);
            ctx.fillStyle = p.color;
            ctx.fill();
        }
        update();
    }
    let angle = 0;
    function update() {
        angle += 0.01;
        for(let i=0;i<pieces.length;i++){
            let p = pieces[i];
            p.y += Math.cos(angle + p.d) + 1 + p.r/2;
            p.x += Math.sin(angle) * 2;
            if(p.x > canvas.width + 5 || p.x < -5 || p.y > canvas.height){
                if(i%3>0){
                    pieces[i] = {x:Math.random()*canvas.width, y:-10, r:p.r, d:p.d, color:p.color, tilt:p.tilt};
                }else{
                    if(Math.sin(angle)>0){
                        pieces[i] = {x:-5, y:Math.random()*canvas.height, r:p.r, d:p.d, color:p.color, tilt:p.tilt};
                    }else{
                        pieces[i] = {x:canvas.width+5, y:Math.random()*canvas.height, r:p.r, d:p.d, color:p.color, tilt:p.tilt};
                    }
                }
            }
        }
    }
    function animate() {
        draw();
        requestAnimationFrame(animate);
    }
    animate();

    // Resize support
    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });
});
</script>
@endpush
@endsection