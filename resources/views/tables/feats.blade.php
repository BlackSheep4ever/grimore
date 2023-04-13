<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TALENTOS') }}
        </h2>
    </x-slot>
    @if (session('msg'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            <p class="msg">{{session('msg')}}</p>
        </div>
    </div>
    @endif

    <div class="flexElement overflowHidden">
        <div class="container text-center">
            <div class="row m-2">
                <div class="col">
                    <div class="panel panel default">
                        <div class="panel-heading">
                            <h3>Talentos</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('feats.save') }}" method="POST" id="frm-TableFeats">
                                @csrf
                                <table class="table table-hover" id="TableFeats" width="100%">
                                    <thead>

                                        <td>
                                            <input type="text" class="form-control filter-input" placeholder="Nome..."
                                                data-column="1" />
                                        </td>
                                        <td>
                                            <input type="text" class="form-control filter-input"
                                                placeholder="Requisitos..." data-column="2" />
                                        </td>
                                        <td>
                                            <select data-column="4" class="form-control filter-select">
                                                <option value="">Fonte...</option>
                                                @foreach ($source as $sources)
                                                <option value="{{$sources}}">{{$sources}}</option>
                                                @endforeach
                                            </select>
                                        </td>

                                        <tr>
                                            <th><input type="checkbox" name="select_all" value="1" id="select-all"></th>
                                            <th>Nome</th>
                                            <th>Requisitos</th>
                                            <th>Descrição</th>
                                            <th>Fonte</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($feats as $feat)
                                        <tr>
                                            <td><input type="checkbox" name="fav_name[]" id="fav_name"
                                                    value="{{$feat->id}}"></td>
                                            <td>{{$feat->feat_name}}</td>
                                            <td>{{$feat->requirements}}</td>
                                            <td>{{$feat->description}}</td>
                                            <td>{{$feat->source}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                    <tfoot>
                                    </tfoot>

                                </table>
                                <div class="form-group">
                                    <button type="submit" name="save_check_feats"
                                        class="btn btn-secondary btn-sm">Favoritos</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
 }, 500);
  
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

        $('.filter-input').keyup(function(){
            table.column( $(this).data('column'))
            .search( $(this).val())
            .draw();
        });

        $('.filter-select').change(function(){
            table.column( $(this).data('column'))
            .search( $(this).val())
            .draw();
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