<div class="col-lg-8">

    <table id="myTable" class="table text-justify table-striped">
        <thead class="tableh1">
            <th class="">Name</th>
            <th class="col-3">Nº of Phones</th>
            <th class="">Phones</th>
        </thead>

        <tbody id="tableBody">

            @forelse ($data as $item)
            <tr>
                <!-- Test -->
                <td>{{ $item->nome }}</td>
                <td>
                    @if($item->telefones_count > 0)
                    {{ $item->telefones_count }}
                    @endif
                </td>
                <td>
                    <ul style="list-style: none;">

                        @foreach ($item->telefones as $num)
                        <li><i class="bi bi-telephone-fill pe-2" style="color: #0d6efd"></i>{{ $num->numero }}</li>

                        @endforeach
                    </ul>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Nenhum registro encontrado!!</td>
            </tr>
            @endforelse


        </tbody>
    </table>
</div>