<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ITENS') }}
        </h2>
    </x-slot>

    <div class="flexElement overflowHidden">
        <div class="container text-center">
            <div class="row m-2">
                <div class="col">
                    <div class="panel panel default">
                        <div class="panel-heading">
                            <h3>Itens</h3>
                        </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="TableItems" width="100%">
                                    <thead>
    
                                        <td>
                                            <input type="text" class="form-control filter-input" placeholder="Nome..." data-column="0"/>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control filter-input" placeholder="Custo..." data-column="3"/>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control filter-input" placeholder="peso..." data-column="4"/>
                                        </td>
    
                                        <td>
                                            <select data-column="1" class="form-control filter-select">
                                                <option value="">Tipo...</option>
                                                @foreach ($item_type as $item_types)
                                                    <option value="{{$item_types}}">{{$item_types}}</option>
                                                @endforeach
                                            </select>
                                        </td>
    
                                        <tr>
                                            <th>Nome</th>
                                            <th>Tipo</th>
                                            <th>Descrição</th>
                                            <th>Valor</th>
                                            <th>Peso</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @foreach ($items as $item)
                                        <tr>
                                            <td>{{$item->item_name}}</td>
                                            <td>{{$item->item_type}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->cost}}</td>
                                            <td>{{$item->Weight}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
    
                                    <tfoot>
                                    </tfoot>
    
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

<script>
    $(document).ready(function() {
        var table = $('#TableItems').DataTable();

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
    });
</script>
