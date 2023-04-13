<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @if (session('msg'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                <p class="msg">{{session('msg')}}</p>
            </div>
        </div>
    @endif
    
    <div class="container text-center">
        <div class="row m-2">
            <div class="col">
                <div class="panel panel default">
                    <hr>
                    <h3>Seu Grimore não tem campeões!</h3>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row m-2">
            <div class="col">
                <div class="panel panel default">
                    @if (!$favs->first())
                    <hr>
                    <h3>Seu Grimore não tem talentos!</h3>
                    <hr>
                    @else
                    <div class="panel-heading">
                        <h3>Favoritos</h3>
                        <h5>Talentos</h5>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('feats.remove') }}" method="POST" id="frm-TableFeats">
                            @csrf
                            <table class="table table-hover" id="TableFeats">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nome</th>
                                        <th>Requisitos</th>
                                        <th>Descrição</th>
                                        <th>Fonte</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($favs as $fav)

                                    <tr>
                                        <td><input type="checkbox" name="fav_name[]" id="fav_name" value="{{$fav->id}}">
                                        </td>
                                        <td>{{$fav->feats->feat_name}}</td>
                                        <td>{{$fav->feats->requirements}}</td>
                                        <td>{{$fav->feats->description}}</td>
                                        <td>{{$fav->feats->source}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                </tfoot>
                            </table>
                            <div class="form-group">
                                <button type="submit" name="save_check_feats"
                                    class="btn btn-secondary btn-sm">Remover</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
$(document).ready(function () {
 
 window.setTimeout(function() {
     $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
         $(this).remove(); 
     });
 }, 5000);
  
 });

    $(document).ready(function() {
    var table = $('#TableFeats').DataTable({
        columns: [
        {data:'checkbox'},
        {data:'feat_name'},
        {data:'requirements'},
        {data:'description'},
        {data:'source'},
        ],
        columnDefs: [ {
        searchable: false,
        orderable: false,
        className: 'select-checkbox',
        targets: 0, 
    } ],
    select: {
        style:    'multi',
        selector: 'td:first-child'
    },
    order: [[ 1, 'asc' ]]
    });

    // Handle click on "Select all" control
    $('#select-all').on('click', function(){
        // Get all rows with search applied
        var rows = table.rows({ 'search': 'applied' }).nodes();
        // Check/uncheck checkboxes for all rows in the table
        $('input[type="checkbox"]', rows).prop('checked', this.checked);
    });

    // Handle click on checkbox to set state of "Select all" control
    $('#example tbody').on('change', 'input[type="checkbox"]', function(){
        // If checkbox is not checked
        if(!this.checked){
            var el = $('#select-all').get(0);
            // If "Select all" control is checked and has 'indeterminate' property
            if(el && el.checked && ('indeterminate' in el)){
                // Set visual state of "Select all" control
                // as 'indeterminate'
                el.indeterminate = true;
            }
        }
    });

    // Handle form submission event
    $('#frm-example').on('submit', function(e){
        var form = this;

        // Iterate over all checkboxes in the table
        table.$('input[type="checkbox"]').each(function(){
            // If checkbox doesn't exist in DOM
            if(!$.contains(document, this)){
                // If checkbox is checked
                if(this.checked){
                // Create a hidden element
                $(form).append(
                    $('<input>')
                        .attr('type', 'hidden')
                        .attr('name', this.name)
                        .val(this.value)
                );
                }
            }
        });
    });
    });
</script>