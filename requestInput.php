<div class="p-4 rounded-lg mb-6 flex gap-4 items-center" style='background:url("./img/input-bg.png"); background-size: cover; background-position: center;'>
    <input type="text" name="search" placeholder="Search request_id/ endpoint/ error" class="w-1/3 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
    
    <div class="relative inline-block w-32">
        <input type="hidden" name="status" id="status-input" value="all">
        
        <button type="button" id="dropdown-btn" 
                class="w-full bg-white rounded px-3 py-2 text-left flex justify-between items-center focus:ring-2 focus:ring-blue-500 outline-none border border-transparent">
            <span id="dropdown-label" class="text-sm">All Status</span>
            <img src="./img/down-sign.png" id="dropdown-arrow" class="w-4 h-4 transition-transform duration-200" alt="">
        </button>

        <div id="dropdown-menu" class="hidden absolute z-10 w-full mt-1 bg-white border border-gray-100 rounded shadow-xl overflow-hidden">
            <ul class="py-1 text-sm text-brand-dark">
                <li class="dropdown-item px-4 py-2 hover:bg-brand-lightBlue cursor-pointer" data-value="all">All Status</li>
                <li class="dropdown-item px-4 py-2 hover:bg-brand-lightBlue cursor-pointer" data-value="success">Success</li>
                <li class="dropdown-item px-4 py-2 hover:bg-brand-lightBlue cursor-pointer" data-value="failed">Failed</li>
            </ul>
        </div>
    </div>

    <button class="bg-gradient-to-r from-[#69B3FC] to-[#549EF9] text-white px-8 py-2 rounded font-medium hover:opacity-90 transition shadow-sm">
        Search
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('dropdown-btn');
        const menu = document.getElementById('dropdown-menu');
        const arrow = document.getElementById('dropdown-arrow');
        const label = document.getElementById('dropdown-label');
        const hiddenInput = document.getElementById('status-input');
        const items = document.querySelectorAll('.dropdown-item');

        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            menu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });

        items.forEach(item => {
            item.addEventListener('click', () => {
                const value = item.getAttribute('data-value');
                const text = item.innerText;

                label.innerText = text;
                hiddenInput.value = value;
                
                menu.classList.add('hidden');
                arrow.classList.remove('rotate-180');
            });
        });

        document.addEventListener('click', () => {
            menu.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        });
    });
</script>