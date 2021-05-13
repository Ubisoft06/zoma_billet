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
        <h4 class="text-center">Demande Ando</h4>
      	<h5 class='mt-5'>Nombre enfant : <?php echo $enfant?></h5>
      	<h5 class='mt-2'>Nombre adulte : <?php echo $adulte?></h5>
        <div class="table-responsive mt-3">
            <table class="table table-striped">
                <tbody>
                    <?php foreach($ca as $item){ ?>
                  	<tr>
                        <td><?php echo $item['type']?></td>
                        <td class="text-right"><?php echo number_format($item['total'], 0, ',', ' ')?> Ar</td>
                    </tr>
                  	<?php } ?>
            </table>
        </div>
    </div>
@endsection
