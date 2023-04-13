<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ARMADURAS') }}
        </h2>
    </x-slot>

<div class="flexElement overflowHidden">
    <div class="container text-center">
        <div class="row m-2">
            <div class="col">
                <div class="panel panel default">
                    <div class="panel-heading">
                        <h3>Armaduras</h3>
                    </div>
                        <div class="panel-body">
                            <table class="table table-hover" id="TableArmors" width="100%">
                                <thead>

                                    <td>
                                        <input type="text" class="form-control filter-input" placeholder="Procurar por nome..." data-column="0"/>
                                    </td>

                                    <td>
                                        <select data-column="1" class="form-control filter-select">
                                            <option value="">Tipo...</option>
                                            @foreach ($armor_type as $armor_types)
                                                <option value="{{$armor_types}}">{{$armor_types}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="2" class="form-control filter-select">
                                            <option value="">CA...</option>
                                            @foreach ($class_armor as $class_armors)
                                                <option value="{{$class_armors}}">{{$class_armors}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="3" class="form-control filter-select">
                                            <option value="">Requisitos...</option>
                                            @foreach ($requirements as $requirement)
                                                <option value="{{$requirement}}">{{$requirement}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="5" class="form-control filter-select">
                                            <option value="">Furtividade...</option>
                                            @foreach ($penalty as $penalties)
                                                <option value="{{$penalties}}">{{$penalties}}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>CA</th>
                                        <th>requisitos</th>
                                        <th>Descrição</th>
                                        <th>Furtividade</th>
                                        <th>Valor</th>
                                        <th>Peso</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($armors as $armor)
                                    <tr>
                                        <td>{{$armor->armor_name}}</td>
                                        <td>{{$armor->armor_type}}</td>
                                        <td>{{$armor->class_armor}}</td>
                                        <td>{{$armor->requirements}}</td>
                                        <td>{{$armor->description}}</td>
                                        <td>{{$armor->penalty}}</td>
                                        <td>{{$armor->cost}}</td>
                                        <td>{{$armor->Weight}}</td>
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
        var table = $('#TableArmors').DataTable();

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
