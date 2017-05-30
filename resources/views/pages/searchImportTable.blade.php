@extends('vpirg')

@section('content')



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<script type="text/javascript">

</script>



<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Manufacturer</th>
                <th>Chemical</th>
                <th>BrandName</th>
                <th>ProductModel</th>

            </tr>
            <tr>
                <th><form style="display: inline; action=""><input type="text" name="ManufacturerName" value="{{$ManufacturerName}}"/> <input type="submit" value="search"/> </form><input type="submit" onclick="location.href=location.pathname;" value="clear"/> </th>
                <th><form style="display: inline; action=""><input type="text" name="ChemicalName" value="{{$ChemicalName}}"/> <input type="submit" value="search"/>  </form><input type="submit" onclick="location.href=location.pathname;" value="clear"/></th>
                <th><form style="display: inline; action=""><input type="text" name="BrandName" value="{{$BrandName}}"/> <input type="submit" value="search"/>  </form><input type="submit" onclick="location.href=location.pathname;" value="clear"/></th>
                <th><form style="display: inline; action=""><input type="text" name="ProductModel" value="{{$ProductModel}}"/> <input type="submit" value="search"/>  </form><input type="submit" onclick="location.href=location.pathname;" value="clear"/></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Manufacturer</th>
                <th>Chemical</th>
                <th>BrandName</th>
                <th>ProductModel</th>

            </tr>
        </tfoot>
        <tbody>

            @foreach($searchResults as $searchResult)
            <tr>

                <td> {{ $searchResult->ManufacturerName }}</td>
                <td>{{ $searchResult->ChemicalName }}</td>
                <td>{{ $searchResult->BrandName }} </td>
                <td>{{ $searchResult->ProductModel }} </td>
            </tr>

            @endforeach


        </tbody>
    </table>

    {{ $searchResults->appends(['ManufacturerName' => $ManufacturerName,
                                'ChemicalName' => $ChemicalName,
                                'BrandName' => $BrandName,
                                'ProductModel' => $ProductModel])
                                ->links() }}
@stop