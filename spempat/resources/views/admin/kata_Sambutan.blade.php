@extends('layouts.main')
@section('content')
@foreach ($data as $item)
   <table class="table table-border  caption-top shadow">
    <caption>
        <h1>KATA SAMBUTAN</h1>
    </caption>
    <tr>
        <th class="col-md-6 table-secondary">ISI KATA SAMBUTAN </tj>
        <td class="col-md-6 ">{{ $item->isi }}</td>
    </tr>
    
    
    <tr>
        <th class="col-md-6 table-secondary">Aksi</th>
        <td class="col-md-6 ">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="{{ '#staticBackdropeditkatasambutan' . $item->id }}">
                <i class="lni lni-pencil"></i>
            </button>
        </td>
    </tr>
</table> 
@endforeach

@include('modals.modalkatasambutan')
@endsection