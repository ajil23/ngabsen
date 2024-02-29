@extends('admin.admin_master') 
@section('admin')
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
  
      <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <h6 class="mb-0 font-bold text-blue-500 capitalize">Tambah Mapel</h6>
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
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Form Tambah Mapel</p>
            </div>
            <form method="POST" action="{{ route('mapel.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                    <div class="mb-4">
                        <label for="kode_mapel" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Mata Pelajaran</label>
                        <input type="number" name="kode_mapel" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" required>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                    <div class="mb-4">
                        <label for="nama_mapel" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Mapel</label>
                        <input type="text" name="nama_mapel" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" required>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                    <button type="button" onclick="history.back()" class="inline-block px-8 py-2 mb-4 mr-3 font-bold text-center text-blue-500 align-middle transition-all bg-transparent border border-blue-500 rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md">Batal</button>
                    {{-- <button type="button" onclick="history.back()" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-red-500 align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Batal</button> --}}
                    <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    
    @include('admin.components.footer')
  </div>
@endsection