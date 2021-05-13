@extends('template')

@section('title', 'Liste des achats')

@section('container')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <div class="form-group">
                    <label for="">Mode de paiement</label>
                    <select name="type" id="type" class="form-control">
                        <option value="all">Tout</option>
                        <?php foreach ($paiement as $key) { ?>
                            <option value="<?php echo $key->id_type?>"><?php echo $key->type?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="javascript:void(0)" class="badge badge-primary py-3 px-3 float-right imprimer">
                    <i class="fa fa-print"></i> Imprimer
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>Nom</th>
                    <th>Mode de paiement</th>
                    <th>Montant</th>
                </thead>
                <tbody>
                    <?php foreach ($acheter as $value) { ?>
                        <tr>
                            <td><?php echo $value->nom?></td>
                            <td><?php echo $value->type?></td>
                            <td><?php echo number_format($value->montant, 0, ',', ' ') ?> Ar</td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(".table").dataTable();
        })
        $("#type").on('change', function(){
            $.ajax({
                url : '{{ route("get_liste") }}',
                type : 'POST', 
                data : {
                    _token : '{{ csrf_token() }}',
                    type : $("#type").val()
                },
                dataType : 'json',
                success: function(response){
                    var text = "";
                    response.forEach(element => {
                        text += "<tr><td>"+element.nom+"</td><td>"+element.type+"</td><td>"+(new Intl.NumberFormat('fr-FR').format(element.montant))+" Ar</td></tr>"
                    });
                    $('.table').DataTable().destroy();
                    $('.table > tbody').empty()
                    $('.table > tbody').html(text);
                    $(".table").dataTable();
                }
            })
        })
        $(".imprimer").on('click', function(){
            var id = $("#type").val();
            window.open("{{ route('imprimer') }}?type="+id, '_blank');
        });
    </script>
@endsection