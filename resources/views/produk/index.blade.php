<h3> {{ $judul }}</h3>

<table class="table table-bordered" width="100%" border="1">
    <thead>
        <tr>
            <th>No</th><th>Kode</th>
            <th>Nama Program Studi</th><th>Kprodi</th>
        </tr>
    </thead>
    <tbody>
        @php $nomor = 1; @endphp
        @foreach ($ar_prodi as $p)
        <tr>
            <td>{{$nomor}}</td>
            <td>{{$p->kode}}</td>
            <td>{{$sp->nama}}</td>
            <td>{{$p-Kprodi}}</td>
        </tr>
        @php $nomor++; @endphp
        @endforeach
    </tbody>
</table>