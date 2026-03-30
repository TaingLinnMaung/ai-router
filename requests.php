<?php include('./toper.php') ?>

<div class="min-h-screen"> <div class="mb-6">
    <h1 class="text-2xl font-semibold text-gray-800 flex items-center">
      <span class="mr-2"><img src="./img/menu-navigation.png" width=23 alt=""></span> Requests
    </h1>
  </div>

  <?php
  include('./requestInput.php');
  ?>

  <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead class="bg-[#DFEAFE] border-b border-gray-200">
        <tr class="text-sm whitespace-nowrap">
          <th class="px-3 py-3">ID</th>
          <th class="px-2 py-3">ID Request</th>
          <th class="px-2 py-3">User</th>
          <th class="px-2 py-3">Model</th>
          <th class="px-2 py-3">Provider</th>
          <th class="px-2 py-3">Status</th>
          <th class="px-2 py-3">Total Tokens</th>
          <th class="px-2 py-3">Charge</th>
          <th class="px-2 py-3">Created</th>
          <th class="px-2 py-3 text-center">Action</th>
        </tr>
      </thead>
      <tbody class="text-sm">
        <tr class="border-b border-gray-100 hover:bg-gray-50 whitespace-nowrap">
          <td class="px-3 py-4">4</td>
          <td class="px-2 py-4 text-xs">10bc69a9-5642-4094-a776-2dc9fd452180</td>
          <td class="px-2 py-4">testuser</td>
          <td class="px-2 py-4">fast-chat</td>
          <td class="px-2 py-4">LiteLLM Local</td>
          <td class="px-2 py-4">
            <span class="text-brand-green px-2 py-1 rounded text-xs font-semibold">success</span>
          </td>
          <td class="px-2 py-4">83</td>
          <td class="px-2 py-4">23,900</td>
          <td class="px-2 py-4">2026-03-25 15:51:58</td>
          <td class="px-2 py-4 text-center">
            <button class="bg-gradient-to-r from-[#69B3FC] to-[#549EF9] text-white px-4 py-1 rounded text-xs hover:opacity-90">view</button>
          </td>
        </tr>
        <tr class="border-b border-gray-100 hover:bg-gray-50 whitespace-nowrap">
          <td class="px-3 py-4">1</td>
          <td class="px-2 py-4 text-xs">10bc69a9-5642-4094-a776-2dc9fd452180</td>
          <td class="px-2 py-4">testuser</td>
          <td class="px-2 py-4">fast-chat</td>
          <td class="px-2 py-4">LiteLLM Local</td>
          <td class="px-2 py-4">
            <span class="text-brand-red px-2 py-1 rounded text-xs font-semibold">failed</span>
          </td>
          <td class="px-2 py-4">0</td>
          <td class="px-2 py-4">23,900</td>
          <td class="px-2 py-4">2026-03-25 15:51:58</td>
          <td class="px-2 py-4 text-center">
            <button class="bg-gradient-to-r from-[#69B3FC] to-[#549EF9] text-white px-4 py-1 rounded text-xs hover:opacity-90">view</button>
          </td>
        </tr>
        <tr class="border-b border-gray-100 hover:bg-gray-50 whitespace-nowrap">
          <td class="px-3 py-4">1</td>
          <td class="px-2 py-4 text-xs">10bc69a9-5642-4094-a776-2dc9fd452180</td>
          <td class="px-2 py-4">testuser</td>
          <td class="px-2 py-4">fast-chat</td>
          <td class="px-2 py-4">LiteLLM Local</td>
          <td class="px-2 py-4">
            <span class="text-brand-red px-2 py-1 rounded text-xs font-semibold">failed</span>
          </td>
          <td class="px-2 py-4">0</td>
          <td class="px-2 py-4">23,900</td>
          <td class="px-2 py-4">2026-03-25 15:51:58</td>
          <td class="px-2 py-4 text-center">
            <button class="bg-gradient-to-r from-[#69B3FC] to-[#549EF9] text-white px-4 py-1 rounded text-xs hover:opacity-90">view</button>
          </td>
        </tr>
        <tr class="border-b border-gray-100 hover:bg-gray-50 whitespace-nowrap">
          <td class="px-3 py-4">1</td>
          <td class="px-2 py-4 text-xs">10bc69a9-5642-4094-a776-2dc9fd452180</td>
          <td class="px-2 py-4">testuser</td>
          <td class="px-2 py-4">fast-chat</td>
          <td class="px-2 py-4">LiteLLM Local</td>
          <td class="px-2 py-4">
            <span class="text-brand-red px-2 py-1 rounded text-xs font-semibold">failed</span>
          </td>
          <td class="px-2 py-4">0</td>
          <td class="px-2 py-4">23,900</td>
          <td class="px-2 py-4">2026-03-25 15:51:58</td>
          <td class="px-2 py-4 text-center">
            <button class="bg-gradient-to-r from-[#69B3FC] to-[#549EF9] text-white px-4 py-1 rounded text-xs hover:opacity-90">view</button>
          </td>
        </tr>
        </tbody>
    </table>
  </div>
</div>

<?php include('./bottomer.php') ?>



<style>
    body {
        color:#0B1A37;
    }
</style>