<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Router Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Centralized Color Variables
                        brand: {
                            dark: '#0B1A37',      // Primary Headings/Icons
                            blue: '#1684FD',      // Active UI elements
                            navy: '#204375',      // Card Text
                            muted: '#435882',     // Sidebar Text
                            lightBlue: '#DEE9FB', // Active Backgrounds
                            sidebar: '#F5F5FB',   // Sidebar BG
                            header: '#FDFCFE',    // Header BG
                            input: '#F3F4FA',      // Header Inner Bar
                            green:'#00B928',
                            red:"#FF0004",
                            tableTop:"#CADDFF"
                        }
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        sfpro: ['SF Pro Text', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=SF+Pro+Text:wght@400&display=swap" rel="stylesheet">
</head>

<body class="font-poppins bg-white flex h-screen overflow-hidden text-brand-dark">

    <aside class="w-[202px] xl:w-[242px] bg-brand-sidebar shadow-[0px_1px_2px_#B3BADA] flex flex-col z-20 shrink-0">
        <div class="h-[72px] flex items-center pl-6 gap-2">
            <img src="./img/brain.png" class="w-[32px] h-auto object-contain" alt="Brain Logo">
            <span class="text-[#204071] text-[22px] font-semibold tracking-wide">AI Router</span>
        </div>

      <nav id="sidebar-nav" class="flex flex-col pr-4 space-y-3 mt-4 font-normal text-[14px]">
    <a href="#" class="nav-link text-brand-muted transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3 ">
        <img src="./img/dashboard.png" alt="Dashboard" class="nav-icon w-[24px] object-contain opacity-70 brightness-0">
        Dashboard
    </a>

    <a href="#" class="nav-link text-brand-muted transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3">
        <img src="./img/user.png" alt="Users" class="nav-icon w-[24px] object-contain opacity-70 brightness-0">
        Users
    </a>

    <a href="#" class="nav-link text-brand-muted transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3">
        <img src="./img/model.png" alt="Models" class="nav-icon w-[24px] object-contain opacity-70 brightness-0">
        Models
    </a>

    <a href="#" class="nav-link text-brand-muted transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3">
        <img src="./img/provider.png" alt="Providers" class="nav-icon w-[24px] object-contain opacity-70 brightness-0">
        Providers
    </a>

    <a href="#" class="nav-link text-brand-muted transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3">
        <img src="./img/provider.png" alt="Providers Models" class="nav-icon w-[24px] object-contain opacity-70 brightness-0">
        Providers Models
    </a>

    <a href="#" class="nav-link text-brand-muted transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3">
        <img src="./img/request.png" alt="Request" class="nav-icon w-[24px] object-contain opacity-70 brightness-0">
        Request
    </a>

    <a href="#" class="nav-link text-brand-muted transition-all duration-200 h-[43px] flex items-center pl-[30px] gap-3">
        <img src="./img/ledger.png" alt="Usage ledger" class="nav-icon w-[24px] object-contain opacity-70 brightness-0">
        Usage ledger
    </a>
</nav>
<script>
    const navLinks = document.querySelectorAll('.nav-link');

    // Classes for the Active State
    const activeClasses = [
        'text-brand-blue', 
        'bg-brand-lightBlue', 
        'relative', 
        'before:content-[\'\']', 
        'before:absolute', 
        'before:left-0', 
        'before:top-0', 
        'before:w-[6px]', 
        'before:h-full', 
        'before:bg-brand-blue'
    ];

    // Class for the Inactive Hover State
    const hoverClass = 'hover:bg-slate-50';

    function updateNav(clickedElement) {
        navLinks.forEach(item => {
            const icon = item.querySelector('.nav-icon');
            
            // 1. Reset ALL to Inactive
            item.classList.remove(...activeClasses);
            item.classList.add('text-brand-muted', hoverClass); // Add hover back to inactive
            
            if (icon) {
                icon.classList.add('brightness-0');
                icon.classList.replace('opacity-100', 'opacity-70');
            }
        });

        // 2. Set CLICKED to Active
        clickedElement.classList.remove('text-brand-muted', hoverClass); // Remove hover for active
        clickedElement.classList.add(...activeClasses);

        const activeIcon = clickedElement.querySelector('.nav-icon');
        if (activeIcon) {
            activeIcon.classList.remove('brightness-0');
            activeIcon.classList.replace('opacity-70', 'opacity-100');
        }
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            updateNav(this);
        });
    });

    // Initialize first item
    window.addEventListener('DOMContentLoaded', () => {
        if(navLinks.length > 0) updateNav(navLinks[0]); 
    });
</script>
    </aside>

    <div class="flex-1 flex flex-col h-full bg-white">

        <header class="h-[72px] bg-brand-header shadow-[0px_0.5px_2px_rgba(179,186,218,0.5)] flex items-center px-[22px] z-10 w-full">
            <div class="bg-brand-input rounded-lg w-full h-[41px] flex items-center justify-between px-4 mx-auto">
                <div class="flex items-center gap-3">
                    <img src="./img/adminImg.png" alt="Admin" class="w-[30px] h-[30px] rounded-full border border-[#61A0F9]">
                    <span class="text-[#2F4674] text-[16px] leading-[24px]">Admin</span>
                </div>

                <button class="bg-gradient-to-r from-[#69B3FC] to-[#549EF9] shadow-[0px_2px_2px_#B1CDF8] rounded-[4px] w-[67px] h-[25px] flex items-center justify-center text-white text-[12px] transition hover:opacity-90">
                    logout
                </button>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto pt-[40px] px-[40px] xl:px-[30px]">