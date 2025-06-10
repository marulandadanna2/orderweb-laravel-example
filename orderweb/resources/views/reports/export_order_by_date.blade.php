@extends('templates.base_reports')
@section('header', 'Reporte actividades por tecnico')
@section('content')
    <section id="results">  
        @if (count($orders) != 0)
            <h4>Tecnico:</h4>
            <table id="reportTable">
                <thead>
                    <tr>
                    <th>Fecha legalizacion</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Causal</th>
                    <th>Observacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ $orders['legalization_date'] }}</td>
                    <td>{{ $orders['address']}}</td>
                    <td>{{ $orders['city']}}</td>
                    <td>{{ $orders->causal->observation }}</td>
                    <td>{{ $orders->observation->observation }}</td>
                    </tr>
                </tbody>
            </table>

            <br><hr>

            <table id="reportTable">
                <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity['id'] }}</td>
                        <td>{{ $activity['description'] }}</td>
                        <td>{{ $activity['hours'] }}</td>
                        <td>{{ $activity->type_activity->description }}</td>
                    </tr>                       
                    @endforeach
                </tbody>
            </table>
        @else
            <p><strong>No existen resultados en el reporte</strong></p>
        @endif  
    </section>   
@endsection