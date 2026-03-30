<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Router Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=SF+Pro+Text:wght@400&display=swap"
        rel="stylesheet">
</head>

<body class="font-['Poppins',_sans-serif] bg-white flex h-screen overflow-hidden text-[#0B1A37]">

    <!-- Sidebar -->
    <aside class="w-[202px] xl:w-[242px] bg-[#F5F5FB] shadow-[0px_1px_2px_#B3BADA] flex flex-col z-20 shrink-0">
        <!-- Logo -->
        <div class="h-[72px] flex items-center pl-6 gap-2">
            <img src="./img/brain.png" class="w-[32px] h-[auto] object-contain" alt="Brain Logo">
            <span class="text-[#204071] text-[22px] font-semibold tracking-wide">AI Router</span>
        </div>

        <!-- Navigation -->
        <nav class="flex flex-col pr-4 space-y-3 mt-4 font-normal text-[14px]">
            <!-- Active item -->
            <a href="#"
                class="text-[#1684FD] transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3 relative bg-[#DEE9FB] rounded-r-lg before:content-[''] before:absolute before:left-0 before:top-0 before:w-[6px] before:h-full before:bg-[#1684FD]">
                <img src="./img/dashboard.png" alt="Users" class="w-[20px] object-contain opacity-70">

                Dashboard
            </a>

            <a href="#"
                class="text-[#435882] transition-all duration-200 hover:bg-slate-50 h-[43px] flex items-center pl-[30px] gap-3">
                <img src="./img/userStoke.png" alt="Users" class="w-[20px] object-contain opacity-70">
                Users
            </a>

            <a href="#"
                class="text-[#435882] transition-all duration-200 hover:bg-slate-50 h-[43px] flex items-center pl-[30px] gap-3">
                <img src="./img/model.png" alt="Models" class="w-[20px] object-contain opacity-70">
                Models
            </a>

            <a href="#"
                class="text-[#435882] transition-all duration-200 hover:bg-slate-50 h-[43px] flex items-center pl-[30px] gap-3">
                <img src="./img/provider.png" alt="Providers" class="w-[20px] object-contain opacity-70">
                Providers
            </a>

            <a href="#"
                class="text-[#435882] transition-all duration-200 hover:bg-slate-50 h-[43px] flex items-center pl-[30px] gap-3">
                <img src="./img/provider.png" alt="Providers Models" class="w-[20px] object-contain opacity-70">
                Providers Models
            </a>

            <a href="#"
                class="text-[#435882] transition-all duration-200 hover:bg-slate-50 h-[43px] flex items-center pl-[30px] gap-3">
                <img src="./img/request.png" alt="Request" class="w-[20px] object-contain opacity-70">
                Request
            </a>

            <a href="#"
                class="text-[#435882] transition-all duration-200 hover:bg-slate-50 h-[43px] flex items-center pl-[30px] gap-3">
                <img src="./img/ledger.png" alt="Usage ledger" class="w-[20px] object-contain opacity-70">
                Usage ledger
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-full bg-[#FFFFFF]">

        <!-- Header -->
        <header
            class="h-[72px] bg-[#FDFCFE] shadow-[0px_0.5px_2px_rgba(179,186,218,0.5)] flex items-center px-[22px] z-10 w-full">
            <!-- Top bar Inner -->
            <div class="bg-[#F3F4FA] rounded-lg w-full h-[41px] flex items-center justify-between px-4 mx-auto">
                <div class="flex items-center gap-3">
                    <img src="./img/adminImg.png" alt="Admin"
                        class="w-[30px] h-[30px] rounded-full border border-[#61A0F9]">
                    <span class="text-[#2F4674] text-[16px] leading-[24px]">Admin</span>
                </div>

                <button
                    class="bg-[linear-gradient(90deg,#69B3FC_0%,#549EF9_100%)] shadow-[0px_2px_2px_#B1CDF8] rounded-[4px] w-[67px] h-[25px] flex items-center justify-center text-white text-[12px] transition hover:opacity-90">
                    logout
                </button>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto pt-[40px] px-[40px] xl:px-[30px]">