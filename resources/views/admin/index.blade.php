@extends('admin.admin_master') 
@section('admin')
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
  <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">

    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
      <h6 class="mb-0 font-bold text-blue-500 capitalize">Dashboard</h6>
      <div class="flex items-center md:ml-auto md:pr-4">
       
      </div>
      <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
        <!-- online builder btn  -->
        <!-- <li class="flex items-center">
          <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
        </li> -->
        <li class="flex items-center">
          <a href="#" class="block px-0 py-2 text-sm font-semibold text-blue-500 transition-all ease-nav-brand">
            <i class="fa fa-user sm:mr-1"></i>
            <span class="hidden sm:inline">{{Auth::user()->name}}</span>
          </a>
        </li>
        <li class="flex items-center pl-4 xl:hidden">
          <a href="javascript:;" class="block p-0 text-sm text-blue-500 transition-all ease-nav-brand" sidenav-trigger>
            <div class="w-4.5 overflow-hidden">
              <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
              <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
              <i class="ease relative block h-0.5 rounded-sm bg-blue-500 transition-all"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="w-full px-6 py-6 mx-auto">
  <!-- row 1 -->
  <div class="flex flex-wrap -mx-3">
    <!-- card1 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Today's Money</p>
                <h5 class="mb-2 font-bold dark:text-white">$53,000</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card2 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Today's Users</p>
                <h5 class="mb-2 font-bold dark:text-white">2,300</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card3 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">New Clients</p>
                <h5 class="mb-2 font-bold dark:text-white">+3,462</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card4 -->
    <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Sales</p>
                <h5 class="mb-2 font-bold dark:text-white">$103,430</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('admin.components.footer')

</div>
@endsection