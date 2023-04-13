<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HOME') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col">
            <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                data-bs-target=".bd-example-modal-lg">Generator</button>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="options-select">
                Definições
            </label>
                <select name="options" id="options-select" class="selectpicker" multiple data-live-search="true">
                    <option value="photograph()">Fotografia</option>
                    <option value="resolution8k()">Resolução 8k</option>
                    <option value="trendingOnArtStation()">ArtStation</option>
                    <option value="highlyDetailed()">Detalhado</option>
                    <option value="dramaticLighting()">Luz dramática</option>
                    <option value="octaneRender()">OctaneRender</option>
                </select>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Generator</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="get" action="{{route('stableDiffusion')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="btn-inner-generator">
                        <div class="row">
                            <div class="col">
                                <label for="description">Descrição</label>
                                <input id="description" name="insertPrompt" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="options-select">
                                    Definições
                                </label>
                                    <select name="options" id="options-select" class="selectpicker" multiple data-live-search="true">
                                        <option value="photograph()">Fotografia</option>
                                        <option value="resolution8k()">Resolução 8k</option>
                                        <option value="trendingOnArtStation()">ArtStation</option>
                                        <option value="highlyDetailed()">Detalhado</option>
                                        <option value="dramaticLighting()">Luz dramática</option>
                                        <option value="octaneRender()">OctaneRender</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="many">Quantidade</label>
                                <input id="many" name="many" type="text">
                            </div>
                        </div>

                        <button class="btn btn-danger" type="submit">Generator</button>
                    </div>
                </form>
                <div class="modal-body">
                    <a href="{{route('stableLink')}}"></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<style type="text/css">
    .dropdown-toggle{
        height: 40px;
        width: 400px !important;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>