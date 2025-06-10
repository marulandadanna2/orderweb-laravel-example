@extends('templates.base_reports')
@section('header', 'Reporte general de tecnicos')
@section('content')
    <section id="results">  
        @if ($technicians)
            <table id="reportTable">
                <thead>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Telefono</th>
                </thead>
                <tbody>
                    @foreach ($technicians as $technician)
                    <tr>
                        <td>{{ $technician['document'] }}</td>
                        <td>{{ $technician['name'] }}</td>
                        <td>{{ $technician['speciality'] }}</td>
                        <td>{{ $technician['phone'] }}</td>
                    </tr>                       
                    @endforeach
                </tbody>
            </table>
        @else
            <p><strong>No existen resultados en el reporte</strong></p>
        @endif  
    </section>   
@endsection