@extends('layout.layout')

@section('konten')
  <section class="flex flex-col flex-wrap justify-between mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
    <div class="p-4 w-full rounded-lg shadow-lg">
      <div class="py-2">
        <div class="font-bold">Daftar Tunggakan Pemeriksaan (SP2 Outstanding)</div>
        <p class="text-xs py-2">
          ini adalah halaman pengawasan tunggakan pemeriksaan
        </p>
      </div>
      <table id="myTable" class="table table-stripped hover cell-border">
        <thead>
          <tr class="bg-[#000D80] text-[#FFC908] text-[11px]">
            <th>NPWP</th>
            <th>NAMA WP</th>
            <th>KODE PEMERIKSAAN</th>
            <th>PERIODE PEMERIKSAAN</th>
            <th>SP2</th>
            <th>TANGGAL SP2</th>
            <th>TANGGAL SPPL</th>
            <th>JT</th>
            <th>PEMERIKSA</th>
          </tr>
        </thead>
        @foreach ($tunggakan as $t)
          <tr class="text-[11px]">
            <td>
              {{ $t->npwp }}
            </td>
            <td>
              {{ $t->nama_wp }}
            </td>
            <td>
              {{ $t->kode_rik }}
            </td>
            <td>
              {{ $t->periode_1 }} s.d. {{ $t->periode_2 }}
            </td>
            <td>
              {{ $t->sp2 }}
            </td>
            <td>
              {{ $t->tgl_sp2 === '0000-00-00' || $t->tgl_sp2 === null ? 'SP2 Belum Diinput' : date('d-m-Y', strtotime($t->tgl_sp2)) }}
            </td>
            <td>
              {{ $t->tgl_sppl === '0000-00-00' ? 'SPPL BELUM INPUT' : date('d-m-Y', strtotime($t->tgl_sppl)) }}
            </td>
            <td>
              {{ $t->jt_daluarsa === '0000-00-00' || $t->jt_daluarsa === null ? 'SP2 Belum Diinput' : date('d-m-Y', strtotime($t->jt_daluarsa)) }}
            </td>
            <td>
              {{ $t->spv }} <br />
              {{ $t->kt }} <br />
              {{ $t->ang_1 }} <br />
              {{ $t->ang_2 }}
            </td>
          </tr>
        @endforeach
        <tbody>
        </tbody>
      </table>
    </div>
  </section>
@endsection
@section('script')
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable({
        scrollX: true,
        "ordering": false,
        dom: 'Bfrtip',
        buttons: [
          'copyHtml5',
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ]
      });
    });
  </script>
@endsection
