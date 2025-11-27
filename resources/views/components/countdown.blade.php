<div x-data="countdown()" x-init="start()" class="flex gap-4 justify-center">
    <div class="flex flex-col items-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-[80px] border border-white/20">
        <span class="text-4xl font-display font-bold text-white" x-text="days">00</span>
        <span class="text-xs text-gray-300 uppercase tracking-wider">Días</span>
    </div>
    <div class="flex flex-col items-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-[80px] border border-white/20">
        <span class="text-4xl font-display font-bold text-white" x-text="hours">00</span>
        <span class="text-xs text-gray-300 uppercase tracking-wider">Horas</span>
    </div>
    <div class="flex flex-col items-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-[80px] border border-white/20">
        <span class="text-4xl font-display font-bold text-white" x-text="minutes">00</span>
        <span class="text-xs text-gray-300 uppercase tracking-wider">Min</span>
    </div>
    <div class="flex flex-col items-center bg-white/10 backdrop-blur-sm rounded-lg p-3 min-w-[80px] border border-white/20">
        <span class="text-4xl font-display font-bold text-white" x-text="seconds">00</span>
        <span class="text-xs text-gray-300 uppercase tracking-wider">Seg</span>
    </div>
</div>

<script>
    function countdown() {
        return {
            days: '00',
            hours: '00',
            minutes: '00',
            seconds: '00',
            endTime: new Date("Dec 31, 2025 23:59:59").getTime(),
            start() {
                setInterval(() => {
                    const now = new Date().getTime();
                    const distance = this.endTime - now;

                    if (distance < 0) {
                        this.days = '00';
                        this.hours = '00';
                        this.minutes = '00';
                        this.seconds = '00';
                        return;
                    }

                    this.days = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, '0');
                    this.hours = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
                    this.minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                    this.seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');
                }, 1000);
            }
        }
    }
</script>
