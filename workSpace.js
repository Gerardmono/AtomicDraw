
var componente = "";

$(document).on("click", "#create", function (e) {
    e.preventDefault();
    if ($("#identifier").val()!="") {
        if ($("#"+$("#identifier").val()).length==0) {
            switch (componente) {
                case "titiulo" :
                    $("#frame").append('<h1 class="draggable" id="'+$("#identifier").val()+'">'+$("#text").val()+'</h1>');
                    break;
                case "boton":
                    let newBoton = new boton($("#identifier").val(),$("#text").val());
                    // console.log(newBoton.getSource());
                    
                    // $("#frame").append('<div class="draggable" id="'+$("#identifier").val()+'"><button type="button" class="btn btn-primary" style="width:auto;">'+$("#text").val()+'</button></div>');
                    $("#frame").append(newBoton.getSource());
                    break;
                case "imagen":
                    $("#frame").append('<img src="'+ $("#source").val() +'" alt="'+ $("#textAlt").val() +'" class="draggable" id="'+$("#identifier").val()+'" style="width: 300px;">');
                    break;
                case "parrafo":
                    $("#frame").append('<p id="'+$("#identifier").val()+'" class="draggable" style="max-width:600px">'+$("#paragraph").val().split("\n").join("<br>")+'</p>');
                    break;
                case "comboBox":
                    var comboBox = '<div class="draggable"><select id="'+$("#identifier").val()+'" >'
                    for (let index = 0; index < $(".optionText").length; index++) {
                        comboBox+='<option value="'+$("#optionVal"+index).val()+'">'+$("#optionText"+index).val()+'</option>';
                    }
                    comboBox+='</select></div>';
                    $("#frame").append(comboBox);
                    break;
                case "inputText":
                    $("#frame").append('<div class="draggable"><input type="text" id="'+$("#identifier").val()+'" placeholder="'+$("#text").val()+'"></div>');
                    break;
                case "checkBox":
                    for (let index = 0; index < $(".optionText").length; index++) {
                        $("#frame").append('<div class="draggable"><input type="checkbox" name="'+ $("#nameGroup").val() +'" value="'+$("#optionVal"+index).val() +'">'+$("#optionText"+index).val() +'</div>');
                    }
                    break;
                case "radioButton":
                    for (let index = 0; index < $(".optionText").length; index++) {
                        $("#frame").append('<div class="draggable"><input type="radio" name="'+ $("#nameGroup").val() +'" value="'+$("#optionVal"+index).val() +'">'+$("#optionText"+index).val() +'</div>');
                    };
                    
                    break;
                default:
                    break;
            }
            $(".draggable").draggable({
                containment: "#frame"
            });
            $("#identifier").val("");
            $("#text").val("");
            $("#contTextAlt").val("");
            $("#contSource").val("");
            $("#contParagraph").val("")
            $("#openModal").click();
        } else {
            $.growl.error({ title: "Error", message: "Id ya existente" });
        }
    } else {
        $.growl.error({ title: "Error", message: "Debes agregar un Id" });
    }
});

var contador = 1 ;
$(document).on("click", "#addOptionField", function (e) {
    e.preventDefault();
    $("#contOptions").append(
        '<div class="row" style="padding-bottom: 5px;">'+
            '<div class="col-6">'+
                '<input type="text" class="form-control optionText"  id="optionText'+contador+'" placeholder="Texto de la opcion">'+
            '</div>'+
            '<div class="col-6">'+
                '<input type="text" class="form-control optionVal"  id="optionVal'+contador+'" placeholder="valor de la opcion">'+
            '</div>'+
        '</div>'
    );
    contador++;
});

$(document).on("click", "#addBoton1", function (e) {
    e.preventDefault();
    componente="boton";
    $("#contId").show();
    $("#contText").show();
    $("#contTextAlt").hide();
    $("#contSource").hide();
    $("#contParagraph").hide();
    $("#contNameGroup").hide();
    $("#contOptions").hide();
    $("#openModal").click();
});

$(document).on("click", "#addTitulo", function (e) {
    e.preventDefault();
    componente = "titiulo";
    $("#contId").show();
    $("#contText").show();
    $("#contTextAlt").hide();
    $("#contSource").hide();
    $("#contParagraph").hide();
    $("#contNameGroup").hide();
    $("#contOptions").hide();
    $("#openModal").click();
});

$(document).on("click", "#addImagen", function (e) {
    e.preventDefault();
    componente = "imagen";
    $("#contId").show();
    $("#contText").hide();
    $("#contTextAlt").show();
    $("#contSource").show();
    $("#contParagraph").hide();
    $("#contNameGroup").hide();
    $("#contOptions").hide();
    $("#openModal").click();
});

$(document).on("click", "#addParrafo", function (e) {
    e.preventDefault();
    componente = "parrafo";
    $("#contId").show();
    $("#contText").hide();
    $("#contTextAlt").hide();
    $("#contSource").hide();
    $("#contParagraph").show();
    $("#contNameGroup").hide();
    $("#contOptions").hide();
    $("#openModal").click();
});

$(document).on("click", "#addComboBox", function (e) {
    e.preventDefault()
    componente = "comboBox";
    $("#contId").show();
    $("#contText").hide();
    $("#contTextAlt").hide();
    $("#contSource").hide();
    $("#contParagraph").hide();
    $("#contNameGroup").hide();
    $("#contOptions").html('<label for="">Opciones</label><button class="btn btn-primary" id="addOptionField"><i class="fas fa-plus"></i></button><div class="row" style="padding-bottom: 5px;"><div class="col-6"><input type="text" class="form-control optionText" id="optionText0" placeholder="Texto de la opcion"></div><div class="col-6"><input type="text" class="form-control optionVal" id="optionVal0" placeholder="valor de la opcion"></div></div>');
    contador = 1 ;
    $("#contOptions").show();
    $("#openModal").click();
});

$(document).on("click", "#addInputText", function (e) {
    e.preventDefault();
    componente="inputText";
    $("#contId").show();
    $("#contText").show();
    $("#contTextAlt").hide();
    $("#contSource").hide();
    $("#contParagraph").hide();
    $("#contNameGroup").hide();
    $("#contOptions").hide();
    $("#openModal").click();
});

$(document).on("click", "#addCheckBox", function (e) {
    e.preventDefault();
    componente="checkBox";
    $("#contId").hide();
    $("#identifier").val("0");
    $("#contText").hide();
    $("#contTextAlt").hide();
    $("#contSource").hide();
    $("#contParagraph").hide();
    $("#contNameGroup").show();
    $("#contOptions").html('<label for="">Opciones</label><button class="btn btn-primary" id="addOptionField"><i class="fas fa-plus"></i></button><div class="row" style="padding-bottom: 5px;"><div class="col-6"><input type="text" class="form-control optionText" id="optionText0" placeholder="Texto de la opcion"></div><div class="col-6"><input type="text" class="form-control optionVal" id="optionVal0" placeholder="valor de la opcion"></div></div>');
    $("#contOptions").show();
    $("#openModal").click();
});

$(document).on("click", "#addRadioButton", function (e) {
    e.preventDefault();
    componente="radioButton";
    $("#contId").hide();
    $("#identifier").val("0");
    $("#contText").hide();
    $("#contTextAlt").hide();
    $("#contSource").hide();
    $("#contParagraph").hide();
    $("#contNameGroup").show();
    $("#contOptions").html('<label for="">Opciones</label><button class="btn btn-primary" id="addOptionField"><i class="fas fa-plus"></i></button><div class="row" style="padding-bottom: 5px;"><div class="col-6"><input type="text" class="form-control optionText" id="optionText0" placeholder="Texto de la opcion"></div><div class="col-6"><input type="text" class="form-control optionVal" id="optionVal0" placeholder="valor de la opcion"></div></div>');
    $("#contOptions").show();
    $("#openModal").click();
});


class boton {
    constructor(id, texto) {
        this.id = id;
        this.texto = texto;
    }
    getSource() {
        var source = '<div class="draggable" id="'+this.id+'"><button type="button" class="btn btn-primary" style="width:auto;">'+this.texto+'</button></div>';
        return source;
    }
}