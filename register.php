<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
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
                            tableTop:"#CADDFF",
                            light:"#A2A2A2",
                            gray:"#636363"
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
    <title>Registration</title>
</head>
<body class="flex items-center justify-center min-h-screen font-sans">
  
  <div class="w-full max-w-md p-8 h-[500px] relative overflow-hidden bg-[url('./img/registration-bg.png')] bg-cover bg-center bg-no-repeat">
    
    <div class="relative z-10 flex flex-col h-full pb-10">
      <h2 class="text-2xl font-bold text-center text-dark my-8">Registration</h2>

      <form class="space-y-4 flex-grow">
        <div class="relative">
          <input type="text" name="name" placeholder="Name" required
                 class="w-full px-4 py-3 bg-white rounded-lg outline-none focus:ring-2 focus:ring-brand-blue transition text-lg pr-10">
          <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
            <img src="./img/profile-tick.png" width=20 alt="">
          </span>
        </div>
        <div class="relative">
          <input type="email" name="email" placeholder="Email" required
                 class="w-full px-4 py-3 bg-white rounded-lg outline-none focus:ring-2 focus:ring-brand-blue transition text-lg pr-10">
          <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
            <img src="./img/email.png" width=20 alt="">
          </span>
        </div>

        <div class="relative">
          <input type="password" name="password" placeholder="Password" required
                 class="w-full px-4 py-3 bg-white rounded-lg outline-none focus:ring-2 focus:ring-brand-blue transition text-lg pr-10">
          <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
            <img src="./img/password-lock.png" width=20 alt="">
          </span>
        </div>
      </form>

      <div>
        <button type="submit" 
                class="w-full py-3 mt-4 bg-brand-blue text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition-all active:scale-[0.98]">
        Login
        </button>

        <p class="text-center text-md text-gray-600 mt-6">
            Don't have an account? <a href="login.php" class="text-red-500 font-semibold hover:underline">Login</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>