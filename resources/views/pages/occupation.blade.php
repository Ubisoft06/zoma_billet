@extends('template')

@section('title', 'Occupation de la salle')

@section('container')
    <div class="container mt-5 pt-5">
        {{-- <div class="row">
            <div class="col-sm-8 col-md-8">
                
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="javascript:void(0)" class="badge badge-primary py-3 px-3 float-right imprimer">
                    <i class="fa fa-print"></i> Imprimer
                </a>
            </div>
        </div> --}}
        <h4 class="text-center">Occupation de la salle</h4>
        <div class="table-responsive mt-3">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Nombre des billets achetés</td>
                        <td class="text-right"><?php echo number_format($total, 0, ',', ' ')?></td>
                    </tr>
                    <tr>
                        <td>Nombre de Client arrivé</td>
                        <td class="text-right"><?php echo number_format($arrive, 0, ',', ' ')?></td>
                    </tr>
            </table>
        </div>
    </div>
@endsection
