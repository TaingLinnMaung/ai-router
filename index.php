<?php
include("./toper.php");
?>
            <!-- Breadcrumb / Title -->
            <div class="flex items-center gap-3 mb-[38px] w-full max-w-full mx-auto">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4" y="4" width="7" height="7" rx="1.5" fill="#0B1A37" />
                    <rect x="14" y="4" width="7" height="7" rx="1.5" fill="#0B1A37" />
                    <rect x="4" y="14" width="7" height="7" rx="1.5" fill="#0B1A37" />
                    <rect x="14" y="14" width="7" height="7" rx="1.5" fill="#0B1A37" />
                </svg>
                <h1 class="text-[#0B1A37] text-[24px] font-medium tracking-wide">Dashboard</h1>
            </div>

            <!-- Dashboard Cards container -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[40px] w-full max-w-full mx-auto">

                <!-- Card 1 -->
                <div
                    class="flex items-center pl-[33px] relative overflow-hidden group bg-[url('./img/cardbg.png')] bg-cover bg-right-bottom bg-no-repeat shadow-[0px_2px_4px_rgba(159,181,215,0.5),0px_9px_10px_rgba(184,208,249,0.5)] rounded-lg h-[109px] xl:h-[129px] min-w-[270px]">
                    <div class="flex flex-col justify-center  w-full z-10 gap-3">
                        <div class="flex gap-3 items-center">

                            <img src="./img/userStoke.png" alt="Total Users"
                                class="w-[38px] h-[38px] object-contain drop-shadow-md">
                            <div class=" font-medium text-[26px] leading-[24px] text-[#204375] ">
                                1</div>
                        </div>
                        <div class="flex flex-col justify-center gap-1">

                            <div
                                class="font-['SF_Pro_Text',_sans-serif] font-normal text-[18px] leading-[21px] text-[#204375]">
                                用户总数</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->


                <div
                    class="flex items-center pl-[33px] relative overflow-hidden group bg-[url('./img/cardbg.png')] bg-cover bg-right-bottom bg-no-repeat shadow-[0px_2px_4px_rgba(159,181,215,0.5),0px_9px_10px_rgba(184,208,249,0.5)] rounded-lg h-[109px] xl:h-[129px] min-w-[270px]">
                    <div class="flex flex-col justify-center  w-full z-10 gap-3">
                        <div class="flex gap-3 items-center">

                            <img src="./img/charge.png" alt="Total Users"
                                class="w-[38px] h-[38px] object-contain drop-shadow-md">
                            <div class=" font-medium text-[26px] leading-[24px] text-[#204375] ">
                                4</div>
                        </div>
                        <div class="flex flex-col justify-center gap-1">

                            <div
                                class="font-['SF_Pro_Text',_sans-serif] font-normal text-[18px] leading-[21px] text-[#204375]">
                                总请求数</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->


                <div
                    class="flex items-center pl-[33px] relative overflow-hidden group bg-[url('./img/cardbg.png')] bg-cover bg-right-bottom bg-no-repeat shadow-[0px_2px_4px_rgba(159,181,215,0.5),0px_9px_10px_rgba(184,208,249,0.5)] rounded-lg h-[109px] xl:h-[129px] min-w-[270px]">
                    <div class="flex flex-col justify-center  w-full z-10 gap-3">
                        <div class="flex gap-3 items-center">

                            <img src="./img/calender.png" alt="Total Users"
                                class="w-[38px] h-[38px] object-contain drop-shadow-md">
                            <div class=" font-medium text-[26px] leading-[24px] text-[#204375] ">
                                0</div>
                        </div>
                        <div class="flex flex-col justify-center gap-1">

                            <div
                                class="font-['SF_Pro_Text',_sans-serif] font-normal text-[18px] leading-[21px] text-[#204375]">
                                今日请求</div>
                        </div>
                    </div>
                </div>
            </div>
     
            <?php
include("./bottomer.php");
?>