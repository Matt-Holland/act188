<div class="modal fade" tabindex="-1" role="dialog" id="{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $model }}</h4>
            </div>
            <div class="modal-body">
                <p><h3>{{ $brand }} - {{ $manufacturer }}</h3></p>
                <ul>
                    @foreach($disclosures as $disclosure)
                        <li>{{ $disclosure['chemical_name'] }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>