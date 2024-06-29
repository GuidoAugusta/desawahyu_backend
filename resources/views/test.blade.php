<h1>test</h1>
@foreach ($surat as $s)
  <h3>{{ $s->user->nama }} || nik : {{ $s->nik }}</h3>
@endforeach