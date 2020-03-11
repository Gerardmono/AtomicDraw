<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/workSpace.css">
    <link rel="stylesheet" href="../assets/css/jquery.growl.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>
<body>
    
    <section>
        <div class="row" style="width: 100%">
            <div class="col-10" style="overflow-x: scroll;">
                <div id="frame">
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <strong>&nbsp;&nbsp;Componentes</strong>
                </div>

                <label for="" id="addTitulo" class="componentSelector">Titulo</label>&nbsp;&nbsp;&nbsp;
                <label for="" id="addBoton1" class="componentSelector">Boton</label><br>
                <label for="" id="addImagen" class="componentSelector">Imagen</label>&nbsp;&nbsp;&nbsp;
                <label for="" id="addParrafo" class="componentSelector" >Parrafo</label><br>
                <label for="" id="addComboBox" class="componentSelector">ComboBox</label>&nbsp;&nbsp;&nbsp;

            </div>
        </div>
    </section>

</body>

<input type="hidden" data-toggle="modal" data-target="#exampleModalCenter" id="openModal">

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Datos del componente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="contId">
                        <label for="identifier">Id del Componente</label>
                        <input type="text" class="form-control" id="identifier" aria-describedby="emailHelp" placeholder="Id del componente">
                    </div>
                    <div class="form-group" id="contText">
                        <label for="text">Texto del componente</label>
                        <input type="text" class="form-control" id="text" placeholder="Texto del componente">
                    </div>
                    <div class="form-group" id="contTextAlt">
                        <label for="textAlt">Texto alternativo del componente</label>
                        <input type="text" class="form-control" id="textAlt" placeholder="Texto alternativo del componente">
                    </div>
                    <div class="form-group" id="contSource">
                        <label for="source">URL de la imagen</label>
                        <input type="text" class="form-control" id="source" placeholder="https://pbs.twimg.com/profile_images/1080509666780684288/NQp3mb9S_400x400.jpg">
                    </div>
                    <div class="form-group" id="contParagraph">
                        <label for="paragraph">Ingresa el texto que lleara el parrafo</label>
                        <textarea id="paragraph" class="form-control" style="height: 50px"></textarea>
                    </div>
                    <div class="form-group" id="contNameGroup">
                        <label for="nameGroup">Ingresa el nombre del grupo</label>
                        <input type="text" class="form-control" id="nameGroup" placeholder="Nombre del grupo">
                    </div>
                    <div class="form-group" id="contOptions">
                        <label for="">Opciones</label>
                        <button class="btn btn-primary" id="addOptionField"><i class="fas fa-plus"></i></button>
                        <div class="row" style="padding-bottom: 5px;">
                            <div class="col-6">
                                <input type="text" class="form-control optionText" placeholder="Texto de la opcion">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control optionVal"  placeholder="valor de la opcion">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 70px">Cancel</button>
                    <button type="button" class="btn btn-primary" id="create">Ok</button>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../workSpace.js"></script>
    <script src="../jquery.growl.js"></script>

</html>