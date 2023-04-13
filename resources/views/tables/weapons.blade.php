<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ARMAS') }}
        </h2>
    </x-slot>

    <div class="flexElement overflowHidden">
        <div class="container text-center">
            <div class="row m-2">
                <div class="col">
                    <div class="panel panel default">
                        <div class="panel-heading">
                            <h3>Armas</h3>
                        </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="TableItems" width="100%">
                                    <thead>
    
                                        <td>
                                            <input type="text" class="form-control filter-input" placeholder="Procurar por nome..." data-column="0"/>
                                        </td>
    
                                        <td>
                                            <select data-column="1" class="form-control filter-select">
                                                <option value="">Tipo...</option>
                                                @foreach ($weapon_type as $weapon_types)
                                                    <option value="{{$weapon_types}}">{{$weapon_types}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select data-column="2" class="form-control filter-select">
                                                <option value="">Dano...</option>
                                                @foreach ($damage as $damages)
                                                    <option value="{{$damages}}">{{$damages}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            @php
                                                $wpn = json_decode($properties);
                                            @endphp
                                            <select data-column="4" class="form-control filter-select">
                                                <option value="">Propriedades...</option>
                                                @foreach ($wpn as $wpns)
                                                    <option value="{{$wpns->property_name}}">{{$wpns->property_name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
    
                                        <tr>
                                            <th>Nome</th>
                                            <th>Tipo</th>
                                            <th>Dano</th>
                                            <th>Descrição</th>
                                            <th>Propriedades</th>
                                            <th>Valor</th>
                                            <th>Peso</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @foreach ($weapons as $weapon)
                                        <tr>
                                            <td>{{$weapon->weapon_name}}</td>
                                            <td>{{$weapon->weapon_type}}</td>
                                            <td>{{$weapon->damage}}</td>
                                            <td>{{$weapon->description}}</td>
                                            <td>{{$weapon->properties}}</td>
                                            <td>{{$weapon->cost}}</td>
                                            <td>{{$weapon->Weight}}</td>
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
    let weapons_data = '/weapons/data';
  </script>
  
<script>
    $(document).ready(function() {
        var table = $('#TableItems').DataTable({
            ajax : weapons_data,
            columns : [
            {data:'weapon_name'},
            {data:'weapon_type'},
            {data:'damage'},
            {data:'description'},
            {data:'properties'},
            {data:'cost'},
            {data:'Weight'},
            ],
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
    });
</script>

