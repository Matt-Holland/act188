<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/1.4.5/jquery.floatThead.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var $table = $('#searchTable');
        $table.DataTable();
        $table.floatThead();
    });
</script>

<table id="searchTable" class="display" cellspacing="0" width="100%">
        <thead style="background: #FFF">
            <tr>
                <th>Chemical</th>
                <th>Function</th>
                <th>Component</th>
            </tr>
        </thead>
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
