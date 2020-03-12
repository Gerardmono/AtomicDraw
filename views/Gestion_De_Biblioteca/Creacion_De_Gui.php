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
            <div class="col-2" style="background-color: white; border-radius: 5px; margin-top: 30px;">
                <div class="row">
                    <strong>&nbsp;&nbsp;Paleta De Componentes</strong>
                </div>

                <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/title-title-tage-labal-sign-direction-3-53162.png" width="25px">
                <label for="" id="addTitulo" class="componentSelector">Titulo</label><br>
                <img src="https://www.pngfind.com/pngs/m/464-4648869_boton-png-transparent-png.png" width="25px">
                <label for="" id="addBoton1" class="componentSelector">Boton</label><br>
                <img src="https://lh3.googleusercontent.com/proxy/dymgpwnqQhwsAE7XGtFQk7helYYkBaR_N9FTc6f7FTRXZCwT9Lh-mosZ2aBQjMPGwM6z_9RDiDrd4DnrqoynbxOa0a-pPJvtXHDmPf2EwUuWeg" width="20px">
                <label for="" id="addImagen" class="componentSelector">Imagen</label><br>
                <img src="https://image.flaticon.com/icons/png/512/219/219176.png" width="20px">
                <label for="" id="addParrafo" class="componentSelector" >Parrafo</label><br>
                <img src="https://cdn.iconscout.com/icon/free/png-256/combobox-444615.png" width="20px">
                <label for="" id="addComboBox" class="componentSelector">Select</label><br>
                <img src="https://cdn2.iconfinder.com/data/icons/files-folders-line/100/rename-512.png" width="20px" style="transform: scaleX(-1);">
                <label for="" id="addInputText" class="componentSelector">Campo de texto</label><br>
                <img src="https://p7.hiclipart.com/preview/860/923/587/checkbox-check-mark-checklist-computer-icons-others.jpg" width="20px">
                <label for="" id="addCheckBox" class="componentSelector">CheckBox</label><br>
                <img src="https://p7.hiclipart.com/preview/752/449/204/at-sign-computer-icons-clip-art-radio-button.jpg" width="15px">
                <label for="" id="addRadioButton" class="componentSelector">Radio Button</label><br>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
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
                        <textarea id="paragraph" class="form-control" style="max-width: 100%"></textarea>
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
    
    <!-- https://lh3.googleusercontent.com/proxy/6VlCCY7OW81Q4tZ2SNiuxjhjEBLDovgXWk0X1STY8mTvOPs1FacsM0EJteqnU8Q9AQvfMDBw1XMUz_TEnQfumj7bMTde3v9WL33_O_Z-C2mDOKy1S5ar -->

</html>