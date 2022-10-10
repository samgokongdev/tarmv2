<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.4/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.4/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js">
  </script>
</head>

<body>
  <header class="font-poppins">
    <nav class="bg-[#000D80] border-gray-200">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="https://flowbite.com" class="flex items-center">
          <span class="self-center text-xl font-semibold whitespace-nowrap text-white">(TARM) Tax Audit Report
            & Monitoring</span>
        </a>
        <div class="flex items-center">
          <a href="tel:5541251234" class="mr-6 text-sm font-medium text-white dark:text-white hover:underline">Selamat
            Datang
            Developer Ganteng</a>
          <a href="#" class="text-xs font-bold text-white px-3 py-2 rounded-lg bg-[#FFC908]">Keluar</a>
        </div>
      </div>
    </nav>
    <nav class="bg-[#000D80] text-white">
      <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
        <div class="flex items-center">
          <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
            <li>
              <a href="/" class="hover:underline {{ request()->is('/*') ? 'text-[#FFC908]' : '' }}">
                Dashboard</a>
            </li>
            <li>
              <a href="/tunggakan" class="hover:underline {{ request()->is('tunggakan*') ? 'text-[#FFC908]' : '' }}">
                Pengawasan JT</a>
            </li>
            <li>
              <a href="/spt" class="hover:underline">
                Pengawasan SPT</a>
            </li>
            <li>
              <a href="/lhp" class="hover:underline">
                Hasil Pemeriksaan</a>
            </li>
            <li>
              <a href="/pkm" class="hover:underline">PKM P2
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  @yield('konten')
</body>
@yield('script')

</html>
