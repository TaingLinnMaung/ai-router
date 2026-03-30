<?php
include("./toper.php");
?>

            <div class="flex items-center gap-3 mb-[38px] w-full max-w-full mx-auto">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect x="4" y="4" width="7" height="7" rx="1.5" class="fill-brand-dark" />
                    <rect x="14" y="4" width="7" height="7" rx="1.5" class="fill-brand-dark" />
                    <rect x="4" y="14" width="7" height="7" rx="1.5" class="fill-brand-dark" />
                    <rect x="14" y="14" width="7" height="7" rx="1.5" class="fill-brand-dark" />
                </svg>
                <h1 class="text-brand-dark text-[24px] font-medium tracking-wide">Dashboard</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-[40px] w-full max-w-full mx-auto">

                <div class="flex items-center pl-[33px] relative overflow-hidden bg-[url('./img/cardbg.png')] bg-cover bg-right-bottom bg-no-repeat shadow-[0px_2px_4px_rgba(159,181,215,0.5),0px_9px_10px_rgba(184,208,249,0.5)] rounded-lg h-[109px] xl:h-[129px] min-w-[270px]">
                    <div class="flex flex-col justify-center w-full z-10 gap-3">
                        <div class="flex gap-3 items-center">
                            <img src="./img/userStoke.png" alt="Total Users" class="w-[38px] h-[38px] object-contain drop-shadow-md">
                            <div class="font-medium text-[26px] leading-[24px] text-brand-navy">1</div>
                        </div>
                        <div class="font-sfpro font-normal text-[18px] leading-[21px] text-brand-navy">用户总数</div>
                    </div>
                </div>

                <div class="flex items-center pl-[33px] relative overflow-hidden bg-[url('./img/cardbg.png')] bg-cover bg-right-bottom bg-no-repeat shadow-[0px_2px_4px_rgba(159,181,215,0.5),0px_9px_10px_rgba(184,208,249,0.5)] rounded-lg h-[109px] xl:h-[129px] min-w-[270px]">
                    <div class="flex flex-col justify-center w-full z-10 gap-3">
                        <div class="flex gap-3 items-center">
                            <img src="./img/charge.png" alt="Total Requests" class="w-[38px] h-[38px] object-contain drop-shadow-md">
                            <div class="font-medium text-[26px] leading-[24px] text-brand-navy">4</div>
                        </div>
                        <div class="font-sfpro font-normal text-[18px] leading-[21px] text-brand-navy">总请求数</div>
                    </div>
                </div>

                <div class="flex items-center pl-[33px] relative overflow-hidden bg-[url('./img/cardbg.png')] bg-cover bg-right-bottom bg-no-repeat shadow-[0px_2px_4px_rgba(159,181,215,0.5),0px_9px_10px_rgba(184,208,249,0.5)] rounded-lg h-[109px] xl:h-[129px] min-w-[270px]">
                    <div class="flex flex-col justify-center w-full z-10 gap-3">
                        <div class="flex gap-3 items-center">
                            <img src="./img/calender.png" alt="Today Requests" class="w-[38px] h-[38px] object-contain drop-shadow-md">
                            <div class="font-medium text-[26px] leading-[24px] text-brand-navy">0</div>
                        </div>
                        <div class="font-sfpro font-normal text-[18px] leading-[21px] text-brand-navy">今日请求</div>
                    </div>
                </div>

            </div>
    
<?php

include("./bottomer.php");
?>