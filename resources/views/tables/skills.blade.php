<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PERÍCIAS') }}
        </h2>
    </x-slot>

    <div class="flexElement overflowHidden">
        <div class="container text-center">
            <div class="row m-2">
                <div class="col">
                    <div class="panel panel default">
                        <div class="panel-heading">
                            <h3>Perícias</h3>
                        </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="TableSkills" width="100%">
                                    <thead>
    
                                        <td>
                                            <input type="text" class="form-control filter-input" placeholder="Nome..." data-column="0"/>
                                        </td>
    
                                        <td>
                                            <select data-column="1" class="form-control filter-select">
                                                <option value="">Atributos...</option>
                                                @foreach ($attribute as $attributes)
                                                    <option value="{{$attributes}}">{{$attributes}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            @php
                                            $class_n = json_decode($classes);
                                            @endphp
                                            <select data-column="3" class="form-control filter-select">
                                                <option value="">Classes...</option>
                                                @foreach ($class_n as $class_ns)
                                                    <option value="{{$class_ns->class_name}}">{{$class_ns->class_name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            @php
                                            $bg = json_decode($backGround);
                                            @endphp
                                            <select data-column="4" class="form-control filter-select">
                                                <option value="">Antecedentes...</option>
                                                @foreach ($bg as $bgs)
                                                    <option value="{{$bgs->bg_name}}">{{$bgs->bg_name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
    
                                        <tr>
                                            <th>Nome</th>
                                            <th>Atributo</th>
                                            <th>Descrição</th>
                                            <th>Classes</th>
                                            <th>Antecedente(s)</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @foreach ($skills as $skill)
                                        <tr>
                                            <td>{{$skill->skill_name}}</td>
                                            <td>{{$skill->attribute}}</td>
                                            <td>{{$skill->description}}</td>
                                            <td>{{$skill->skill_class}}</td>
                                            <td>{{$skill->skill_background}}</td>
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
    let skill_data = '/skills/data';
  </script>

<script>
    $(document).ready(function() {
        var table = $('#TableSkills').DataTable({
            ajax : skill_data,
            columns : [
            {data:'skill_name'},
            {data:'attribute'},
            {data:'description'},
            {data:'skill_class'},
            {data:'skill_background'},
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
