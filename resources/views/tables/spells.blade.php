<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MAGIAS') }}
        </h2>
    </x-slot>

    <div class="flexElement overflowHidden">
        <div class="container text-center">
            <div class="row m-2">
                <div class="col">
                    <div class="panel panel default">
                        <div class="panel-heading">
                            <h3>Magias</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover" id="TableSpells" width="100%">
                                <thead>

                                    <td>
                                        <input type="text" class="form-control filter-input"
                                            placeholder="Procurar por nome..." data-column="1" />
                                    </td>
                                    <td>
                                        <select data-column="0" class="form-control filter-select">
                                            <option value="">Nível...</option>
                                            @foreach ($spell_level as $spell_levels)
                                            <option value="{{$spell_levels}}">{{$spell_levels}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="2" class="form-control filter-select">
                                            <option value="">Escola...</option>
                                            @foreach ($spell_school as $spell_schools)
                                            <option value="{{$spell_schools}}">{{$spell_schools}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="3" class="form-control filter-select">
                                            <option value="">Conjuração...</option>
                                            @foreach ($casting_time as $casting_times)
                                            <option value="{{$casting_times}}">{{$casting_times}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="4" class="form-control filter-select">
                                            <option value="">Alcance...</option>
                                            @foreach ($range as $ranges)
                                            <option value="{{$ranges}}">{{$ranges}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="5" class="form-control filter-select">
                                            <option value="">Duração...</option>
                                            @foreach ($duration as $durations)
                                            <option value="{{$durations}}">{{$durations}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="6" class="form-control filter-select">
                                            <option value="">Componentes...</option>
                                            @foreach ($components as $component)
                                            <option value="{{$component}}">{{$component}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="7" class="form-control filter-select">
                                            <option value="">Classes...</option>
                                            @foreach ($spell_class as $spell_classes)
                                            <option value="{{$spell_classes}}">{{$spell_classes}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select data-column="9" class="form-control filter-select">
                                            <option value="">Fonte...</option>
                                            @foreach ($source as $sources)
                                            <option value="{{$sources}}">{{$sources}}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <tr>
                                        <th>Nível</th>
                                        <th>Nome</th>
                                        <th>Escola</th>
                                        <th>Conjuração</th>
                                        <th>Alcance</th>
                                        <th>Duração</th>
                                        <th>Componentes</th>
                                        <th>Classes</th>
                                        <th>Descrição</th>
                                        <th>Fonte</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($spells as $spell)
                                    <tr>
                                        <td>{{$spell->spell_level}}</td>
                                        <td>{{$spell->spell_name}}</td>
                                        <td>{{$spell->spell_school}}</td>
                                        <td>{{$spell->casting_time}}</td>
                                        <td>{{$spell->range}}</td>
                                        <td>{{$spell->duration}}</td>
                                        <td>{{$spell->components}}</td>
                                        <td>{{$spell->spell_class}}</td>
                                        <td>{{$spell->description}}</td>
                                        <td>{{$spell->source}}</td>
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
        var table = $('#TableSpells').DataTable();

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