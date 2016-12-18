<div class="modal fade" tabindex="-1" role="dialog" id="{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $brand }}</h4>
            </div>
            <div class="modal-body">
                <p><span class="title" style="font-weight: bold; font-variant: small-caps">Manufacturer: </span>{{ $manufacturer }}</p>
                <p><span class="title" style="font-weight: bold; font-variant: small-caps">Model: </span>{{ $model }}</p>
                <ul>
                    @foreach($disclosures as $disclosure)
                        <li>
                            <h4>{{ $disclosure['chemical_name'] }}</h4>
                            <p>Formaldehyde is classsified as a carcinogen by a number of authoritative sources. Inhalation of
                                formaldehyde is associated with cancer in the respiratory tract in humans and laboratory animals. Oral
                                exposures in animals are also carcinogenic. Formaldehyde is a skin, eye and respirtaory tract irritant and
                                sensitizer.
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>