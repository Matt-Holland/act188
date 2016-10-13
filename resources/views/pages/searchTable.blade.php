@extends('vpirg')

@section('content')



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>



<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Chemical</th>
                <th>Function</th>
                <th>Component</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                 <th>Chemical</th>
                 <th>Function</th>
                 <th>Component</th>
            </tr>
        </tfoot>
        <tbody>

            @foreach($searchResults as $searchResult)
            <tr>

                <td> {{ $searchResult->ChemicalName }}</td>
                <td>{{ $searchResult->ChemicalFunction }}</td>
                <td>{{ $searchResult->Component }} </td>
            </tr>

            @endforeach


        </tbody>
    </table>
@stop