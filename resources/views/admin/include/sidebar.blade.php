<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gunsnip</title>
</head>
<body>

	<span class="absolute text-white text-4xl top-5 left-4 cursor-pointer bg-gray-900 rounded-md" onclick="Open()">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" class="size-7 m-2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
		</svg>			  
	</span>

	<div class="fixed top-0 bottom-0 lg:left-0 left-[-280px] p-2 w-[280px] text-center sidebar bg-gray-900 transition-all duration-300 ease-in-out">

		<div class="text-gray text-xl">
			<div class="p-2.5 mt-1 flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" class="size-7 mr-5">
					<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
				</svg>				  
				<h1 class="font-bold text-white">Gunsnip Admin</h1>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" class="size-8 cursor-pointer lg:hidden pt-1 ml-5" onclick="Open()">
					<path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
				</svg>
			</div>
			<hr class="my-2">
		</div>

		<a href="{{ route('admindashboard') }}" class="p-2.5 mt-6 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
			</svg>
			<span class="text-lg ml-4">Dashboard</span>
		</a>
		

		<a href="{{ route('adminuser.index') }}" class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
			  </svg>
			<span class="text-lg ml-4">User</span>
		</a>

		<div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white" onclick="dropdown()">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
			</svg>
			<div class="flex justify-between w-full items-center">
				<span class="text-lg ml-4">Gunpla</span>
				<span class="text-sm rotate-270 transform transition-transform duration-300 ease-in-out" id="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
					</svg>		
				</span>
			</div>		
		</div>

		<div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto overflow-hidden transition-all duration-300 ease-in-out max-h-0" id="submenu">
			<a href="" class="cursor-pointer p-2 hover:bg-slate-600 duration-300 rounded-md mt-1 text-white block">Products</a>
			<a href="{{ route('grade.index') }}" class="cursor-pointer p-2 hover:bg-slate-600 duration-300 rounded-md mt-1 text-white block">Grades</a>
			<a href="{{ route('series.index') }}" class="cursor-pointer p-2 hover:bg-slate-600 duration-300 rounded-md mt-1 text-white block">Series</a>
		</div>		


		<form action="{{ route('logout') }}" method="POST" class="inline">
			@csrf
			<button type="submit" class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-600 text-white">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
				</svg>
				<span class="text-lg ml-4">Logout</span>
			</button>
		</form>
		
	</div>

	<script type="text/javascript">
		function dropdown(){
			const submenu = document.getElementById('submenu');
			const arrow = document.getElementById('arrow');

			submenu.classList.toggle('max-h-screen');
			arrow.classList.toggle('rotate-180');
		}
		dropdown()

		function Open(){
			const sidebar = document.querySelector('.sidebar');
			sidebar.classList.toggle('left-[-280px]');
			sidebar.classList.toggle('left-0');
		}
	</script>
</body>
</html>