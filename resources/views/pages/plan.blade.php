@extends('template')

@section('title', 'Plan')


@section('container')
    <div class="container-fluid">
        <div class="figma-frame">
            <div id="plan">
                <div class="salle"></div>
                <div id="entree">
                    <div class="entree" name="entree"></div>
                    <div class="text" name="entrée">Entrée</div>
                </div>
                <div id="estrade">
                    <div class="estrade"></div>
                    <div class="text">Estrade</div>
                </div>
                <div class="table_16_01">
                    <div id="table_16_01" class="tables"></div>
                    <div class="text">16</div>
                </div>
                <div class="table_16_02">
                    <div id="table_16_02" class="tables"></div>
                    <div class="text">16</div>
                </div>
                <div class="table_16_03">
                    <div id="table_16_03" class="tables"></div>
                    <div class="text">16</div>
                </div>
                <div class="table_10_13">
                    <div id="table_10_13" class="tables"></div>
                    <div class="text">10</div>
                </div>
                <div class="table_10_14">
                    <div id="table_10_14" class="tables"></div>
                    <div class="text">10</div>
                </div>
                <div class="table_10_15">
                    <div id="table_10_15" class="tables"></div>
                    <div class="text">10</div>
                </div>
                <div class="table_4_01">
                    <div id="table_4_01" class="tables"></div>
                    <div class="text">4</div>
                </div>
                <div id="piste">
                    <div class="piste"></div>
                    <div class="text">PISTE</div>
                </div>
                <div class="table_8_01">
                    <div id="table_8_01" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_8_02">
                    <div id="table_8_02" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_8_03">
                    <div id="table_8_03" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_8_04">
                    <div id="table_8_04" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_8_05">
                    <div id="table_8_05" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_8_06">
                    <div id="table_8_06" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_8_07">
                    <div id="table_8_07" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_8_08">
                    <div id="table_8_08" class="tables"></div>
                    <div class="text">8</div>
                </div>
                <div class="table_6_01">
                    <div id="table_6_01" class="tables"></div>
                    <div class="text">6</div>
                </div>
                <div class="table_6_02">
                    <div id="table_6_02" class="tables"></div>
                    <div class="text">6</div>
                </div>
                <div class="table_6_03">
                    <div id="table_6_03" class="tables"></div>
                    <div class="text">6</div>
                </div>
                <div class="table_6_04">
                    <div id="table_6_04" class="tables"></div>
                    <div class="text">6</div>
                </div>
                <div class="table_15_01">
                    <div id="table_15_01" class="tables"></div>
                    <div class="text">15</div>
                </div>
                <div class="table_15_02">
                    <div id="table_15_02" class="tables"></div>
                    <div class="text">15</div>
                </div>
                <div class="table_10_16">
                    <div id="table_10_16" class="tables"></div>
                    <div class="text">10</div>
                </div>
                <div class="table_4_02">
                    <div id="table_4_02" class="tables"></div>
                    <div class="text">4</div>
                </div>
                <div class="table_15_03">
                    <div id="table_15_03" class="tables"></div>
                    <div class="text">15</div>
                </div>
                <div class="table_6_05">
                    <div id="table_6_05" class="tables"></div>
                    <div class="text">6</div>
                </div>
                <div id="bar">
                    <div class="bar"></div>
                    <div class="text">Bar</div>
                </div>
                <div id="obistro">
                    <div class="obistro"></div>
                    <div class="text">O’Bistro</div>
                </div>
            </div>
            <div id="virtual">
                <div class="virtual_01 d-none"></div>
                <div class="virtual_02 d-none"></div>
                <div class="virtual_03 d-none"></div>
                <div class="virtual_04 d-none"></div>
                <div class="virtual_05 d-none"></div>
                <div class="virtual_06 d-none"></div>
                <div class="virtual_07 d-none"></div>
                <div class="virtual_08 d-none"></div>
                <div class="virtual_09 d-none"></div>
                <div class="virtual_10 d-none"></div>
                <div class="virtual_11 d-none"></div>
                <div class="virtual_12 d-none"></div>
            </div>
            <div id="mezzanine">
                <div class="mezzanine"></div>
                <div class="table_5_01">
                    <div id="table_5_01" class="tables"></div>
                    <div class="text">5</div>
                </div>
                <div class="table_5_02">
                    <div id="table_5_02" class="tables"></div>
                    <div class="text">5</div>
                </div>
                <div class="table_5_03">
                    <div id="table_5_03" class="tables"></div>
                    <div class="text">5</div>
                </div>
                <div class="text">(Mezzanine)</div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPlace" tabindex="-1" aria-labelledby="modalPlace" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPlace">Liste des places</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row" id="liste">
                        <div class="col-md-2 col-sm-3"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalAcheter" tabindex="-1" aria-labelledby="modalPlace" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="formAcheter">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPlace">Formulaire Acheter</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                @csrf
                                <input type="hidden" id="num_chaise" class="form-control" name="num_chaise">
                                <div class="md-form mb-0">
                                    <input type="text" id="nom" class="form-control" name="nom">
                                    <label for="nom" class="">Nom</label>
                                </div>
                                <div class="md-form mb-0">
                                    <input type="text" id="email" class="form-control" name="email">
                                    <label for="email" class="">Email</label>
                                </div>
                                <div class="md-form mb-0">
                                    <input type="text" id="tel" class="form-control" name="tel">
                                    <label for="tel" class="">Téléphone</label>
                                </div>
                                <div class="md-form mb-0">
                                    <input type="text" id="adresse" class="form-control" name="adresse">
                                    <label for="adresse" class="">Adresse</label>
                                </div>
                                <div class="md-form mb-0">
                                    <input type="text" id="num_billet" class="form-control" name="num_billet">
                                    <label for="num_billet" class="">Numero Billet</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">

                                <div class="form-group">
                                    <label>Mode de Paiement</label>
                                    <select name="id_type" id="id_type" class="form-control">
                                        <?php foreach ($mode as $value) { ?>
                                            <option value="<?php echo $value->id_type ?>"><?php echo $value->type ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="md-form mb-0">
                                    <input type="text" id="montant" class="form-control" name="montant">
                                    <label for="montant" class="">Montant</label>
                                </div>
                                <a href="javascript:void(0)" class="badge badge-info" onclick="ajouter()">
                                    <i class="fa fa-plus-square" style="font-size: 16px"></i>
                                </a>
                                <table class="table table-striped" id="paiement">
                                    <thead>
                                        <th>Type</th>
                                        <th>Montant</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Fermer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(".tables").on('click', function(){
            var id = $(this).attr('id');
            $.ajax({
                url : "{{ route('get_place') }}",
                type : 'POST',
                data : {
                    _token : '{{ csrf_token() }}',
                    id : id
                },
                dataType : 'json',
                success: function(response){
                    var text = "";
                    response.forEach(element => {
                        var badge = (element.existe) ? 'badge-danger' : 'badge-info';
                        text += '<div class="col-md-3 col-sm-4"><p class="badge '+badge+' text-center" style="width : 100%; padding : 15px 0; cursor : pointer" onclick="acheter(\''+element.num_chaise+'\')">'+element.num_place+'</p></div>';
                    });
                    $("#liste").html(text);
                    $('#modalPlace').modal('show')
                }
            })
        });

        function acheter(id) {
            $.ajax({
                url : '{{ route("get_acheter") }}',
                type : 'POST',
                data : {
                    _token : '{{ csrf_token() }}',
                    num_chaise : id
                },
                dataType : 'json',
                success : function (response) {
                    $("#formAcheter")[0].reset();
                    $("#num_chaise").val(id);
                    if(response.length > 0){
                        $("#nom").val(response[0].nom);
                        $("#email").val(response[0].email);
                        $("#tel").val(response[0].tel);
                        $("#adresse").val(response[0].adresse);
                        $("#num_billet").val(response[0].num_billet);
                        $("label").addClass('active');
                    }else{
                        $("label").removeClass('active');
                    }
                    $("#paiement > tbody").empty();
                    $("#modalAcheter").modal('show');
                }
            })
        }

        $("#formAcheter").unbind('submit').bind('submit', function(){
            var form = $(this);
            if($("#nom").val() && $("#num_billet").val()){
                $.ajax({
                    url : '{{ route("acheter") }}',
                    type : 'POST',
                    data : form.serialize(),
                    dataType : 'json',
                    success : function(response){
                        if(!isNaN(response)){
                            $('#paiement > tbody > tr').each(function(){
                                var id_type = $(this).find('td:eq(0)').attr('id_type');
                                var montant = $(this).find('td:eq(1)').text();
                                $.ajax({
                                    url : '{{ route("insert_avoir") }}',
                                    type : 'POST',
                                    data : {
                                        _token : '{{ csrf_token() }}',
                                        id_type : id_type,
                                        montant : montant,
                                        id_acheter : response
                                    },
                                    dataType : 'json',
                                    success: function(data){
                                        console.log(data);
                                        $('#modalPlace').modal('hide')
                                        $("#modalAcheter").modal('hide');
                                    }
                                })
                            })
                        }
                    }
                })
            }else{
                alert('Veuillez inserer au moins le nom et le numero du billet');
            }
            return false;
        })

        function ajouter(){
            var id = $("#id_type").val();
            var montant = $("#montant").val();
            if(montant && id){
                $("#paiement > tbody").append('<tr><td id_type="'+id+'">'+$("#id_type option:selected").text()+'</td><td>'+montant+'</td><td><a href="javascript:void(0)" class="badge badge-danger supprimer"><i class="fa fa-trash"></i></a></td></tr>');
            }
        }

        $("#paiement").delegate('.supprimer', 'click', function(){
            $(this).parents('tr').remove();
        })
    </script>
@endsection