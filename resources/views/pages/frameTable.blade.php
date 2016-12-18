<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/1.4.5/jquery.floatThead.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
            </tr>
        </thead>
        <tbody>
            @foreach($searchResults as $searchResult)
                @include('pages.productModal', $searchResult)
                <tr>
                    <td> {{ $searchResult['manufacturer'] }}</td>
                    <td> {{ $searchResult['brand'] }}</td>
                    <td> <a href="#" data-toggle="modal" data-target="#{{ $searchResult['id'] }}" data-backdrop="">{{ $searchResult['model'] }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
