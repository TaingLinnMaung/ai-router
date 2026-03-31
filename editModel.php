<?php
include("./toper.php");
?>

<div class="mb-6">
    <h1 class="text-2xl font-semibold text-gray-800 flex items-center">
      <span class="mr-2"><img src="./img/menu-navigation.png" width=23 alt=""></span> Edit Models
    </h1>
</div>

<div class="bg-brand-lightBlue rounded-[10px] p-[30px] w-full max-w-full mx-auto mb-8 shadow-sm">
    <form class="grid grid-cols-1 md:grid-cols-2 gap-x-[36px] gap-y-[18px]">
        
        <!-- Code -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Code</label>
            <input type="text" value="deepseek-chat" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Display Name -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Display Name</label>
            <input type="text" value="DeepSeek Chat" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Category -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Category</label>
            <input type="text" value="chat" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Status -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Status</label>
            <input type="text" value="active" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Input Price -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Input Price</label>
            <input type="number" min="0" value="50" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Output Price -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Output Price</label>
            <input type="number" min="0" value="100" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Input Price -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Input Price</label>
            <input type="number" min="0" value="50" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Output Price -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Output Price</label>
            <input type="number" min="0" value="100" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Context Window -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Context Window</label>
            <input type="number" min="0" value="64000" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Max Output Tokens -->
        <div class="flex flex-col gap-2">
            <label class="text-brand-dark font-medium text-[15px]">Max Output Tokens</label>
            <input type="number" min="0" value="8192" class="bg-white h-[42px] px-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full text-[14px] text-brand-dark" />
        </div>

        <!-- Description -->
        <div class="flex flex-col gap-2 md:col-span-2">
            <label class="text-brand-dark font-medium text-[15px]">Description</label>
            <textarea class="bg-white p-4 rounded-[6px] border-none focus:ring-1 focus:ring-brand-blue outline-none w-full h-[120px] resize-none text-[14px] text-brand-dark">DeepSeek model</textarea>
        </div>

        <!-- Buttons -->
        <div class="md:col-span-2 flex gap-[12px] mt-4">
            <button type="button" class="bg-brand-blue hover:opacity-90 text-white px-[20px] py-[7px] rounded-[5px] text-[14px] transition-colors shadow-md">save</button>
            <button type="button" class="bg-gradient-to-r from-brand-light to-brand-gray hover:opacity-90 text-white px-[20px] py-[7px] rounded-[5px] text-[14px] transition-colors shadow-md">back</button>
        </div>

    </form>
</div>

<?php
include("./bottomer.php");
?>
