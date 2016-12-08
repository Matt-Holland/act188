<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/1.4.5/jquery.floatThead.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var $table = $('#searchTable');
        $table.DataTable({
            lengthChange: false,
            searching: false,
            language: {
                searchPlaceholder: 'Search...',
                search: ''
            }
        });
        $table.floatThead();
    });
</script>

<style type="text/css">
    #searchTable_filter {
        float: none !important;
        text-align: left;
        font-weight: bold;
        text-align: center;
    }
    #searchTable_filter input {
        padding: 5px;
        outline: none;
        border: 2px solid #999999;
        border-radius: 5px;
        background-color: #FBFBFB;
        font-family: Cambria, Cochin, Georgia, serif;
        font-size: 16px;
        width: 50%;
    }
    #searchTable_filter input:focus {
        background-color: #FFFFFF;
        border-color: #333333;
    }
</style>

<form action="">
    <input type="text" name="query" value="{{ $query }}" />
</form>
<table id="searchTable" class="display" cellspacing="0" width="100%">
        <thead style="background: #FFF">
            <tr>
                <th>Manufacturer</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Chemical</th>
            </tr>
        </thead>
        <tbody>
            @foreach($searchResults as $searchResult)
                <tr>
                    <td> {{ $searchResult['manufacturer'] }}</td>
                    <td> {{ $searchResult['brand'] }}</td>
                    <td> <a href="/disclosures/{{ $searchResult['id'] }}">{{ $searchResult['model'] }}</a></td>
                    <td> {{ $searchResult['chemical_name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
