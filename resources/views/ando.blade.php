@extends('template')

@section('title', 'Ando')

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
        <h4 class="text-center">Chiffre d'Affaire</h4>
        <div class="table-responsive mt-3">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Chiffre d'affaire</td>
                        <td class="text-right"><?php echo number_format($ca, 0, ',', ' ')?> Ar</td>
                    </tr>
                    <tr>
                        <td>Débiteur</td>
                        <td class="text-right"><?php echo number_format($a_credit, 0, ',', ' ')?> Ar</td>
                    </tr>
                    <tr>
                        <td>Au comptant</td>
                        <td class="text-right"><?php echo number_format($comptant, 0, ',', ' ') ?> Ar</td>
                    </tr>
            </table>
        </div>
    </div>
@endsection
