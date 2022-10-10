@extends('layout.layout')
@section('konten')
  <section class="flex flex-col flex-wrap justify-between mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
    <div>
      <div>
        <div class="font-bold text-xl pb-4">Pengawasan SP2</div>
      </div>
      <div class="grid grid-cols-4 gap-4">
        <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
          <div class="font-bold text-[#FFC908] text-sm">
            SP2 JT Bulan Ini
          </div>

          <div class="font-bold text-[#FFC908] text-2xl py-2">
            {{ $sp2bulanini }} SP2
          </div>
        </div>

        <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
          <div class="font-bold text-[#FFC908] text-sm">
            SP2 Belum Input SPPL
          </div>

          <div class="font-bold text-[#FFC908] text-2xl py-2">
            {{ $sp2beluminputsppl }} SP2
          </div>
        </div>

        <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
          <div class="font-bold text-[#FFC908] text-sm">
            NP2 Belum Input SP2
          </div>

          <div class="font-bold text-[#FFC908] text-2xl py-2">
            {{ $np2beluminputsp2 }} SP2
          </div>
        </div>

        <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
          <div class="font-bold text-[#FFC908] text-sm">
            SP2 Outstanding
          </div>

          <div class="font-bold text-[#FFC908] text-2xl py-2">
            {{ $sp2outstanding }} SP2
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('script')
  <script>
    console.log('berhasil')
  </script>
@endsection
