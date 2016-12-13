<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/1.4.5/jquery.floatThead.min.js"></script>

<script src="/js/data-tables.js"></script>
<link rel="stylesheet" type="text/css" href="/css/data-tables.css">

<form action="">
    <input type="text" id="search" name="query" value="{{ $query }}" placeholder="Search..." />
    <input type="submit" value="Search" />
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
                    <td> <a href="/products/{{ $searchResult['id'] }}">{{ $searchResult['model'] }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
