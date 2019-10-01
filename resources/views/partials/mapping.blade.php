<h5><strong>{{ $title }}</strong></h5>
<table class="table mt-4">
    <tr>
        <th>Nom dans zotero</th>
        <th>Nom du champ dans le style</th>
        <th>Order</th>
    </tr>
    <tr>
        <th colspan="3" class="" style="background: #51be78; color: #fff; font-size: 12px;">
            <i class="fas fa-check"></i>  &nbsp; Utilisé dans le style
        </th>
    </tr>
    @foreach($mappings['used'] as $map)
        <tr>
            <td>{{ $map['zotero'] }}</td>
            <td>{{ $map['cls'] }}</td>
            <td>{{ $map['rank'] }}</td>
        </tr>
    @endforeach
    <tr>
        <th colspan="3" class="" style="background: #f68a03;color: #fff; font-size: 12px;">
            <i class="fas fa-times"></i>  &nbsp; Pas utiisé dans le style
        </th>
    </tr>
    @foreach($mappings['notused'] as $map)
        <tr>
            <td>{{ $map['zotero'] }}</td>
            <td>{{ $map['cls'] }}</td>
            <td>{{ $map['rank'] }}</td>
        </tr>
    @endforeach
</table>