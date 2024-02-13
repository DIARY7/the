var variete = document.getElementById("idVariete");
var form = document.getElementById("formParcelle");
var btModifier = document.getElementById("modifier");


function listVariete()
{
    sendXHRRequest("page_mouvement_admin/insert-parcelle.php?type=variete","GET").then(
        (response)=>{
            let retour = JSON.parse(response);
            let listId = document.getElementById("idVariete");
            var option = document.createElement("option");
            option.disabled = true;
            listId.appendChild(option);
            for( i=0 ; i < retour.length ; i++)
            {
                var option = document.createElement("option");
                option.value = retour[i].idVariete;
                option.innerHTML = retour[i].nomVariete;
                listId.appendChild(option);
            }
        }
    )   
}
listVariete();

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-parcelle.php","POST",dataForm,null).then(insert)
    
});

function insert()
{
    let contenues = form.querySelectorAll("form input");
    for (let index = 0; index < contenues.length; index++) {
        const element = contenues[index];
        element.value = null;
    }
    let idVariete = document.getElementById("idParcelle");
    idVariete.value = "null";
    if (document.getElementById("newId") != null) {
        document.getElementById("newId").remove();
    }
    if (document.getElementById("modifier") != null) {
        document.getElementById("modifier").remove();
    }
    let modif = document.createElement("input");
        modif.type ="button";
        modif.value ="Modifier";
        modif.id = "modifier";
        modif.classList.add('btn');
        modif.classList.add('btn-primary');
        modif.classList.add('py-3');
        modif.classList.add('px-4');
        form.appendChild(modif);
        modif.addEventListener("click",modifier);
    
}

btModifier.addEventListener("click",modifier);

function modifier()
{
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-parcelle.php?type=modifier","GET",dataForm,null).then(
        (response)=>{
            let retour = JSON.parse(response);
            let listId = document.createElement("select");
            listId.id = "newId";
            listId.classList.add("form-select");
            var option = document.createElement("option");
            option.disabled = true;
            listId.appendChild(option);
            for( i=0 ; i < retour.length ; i++)
            {
                var option = document.createElement("option");
                option.value = retour[i].idParcelle;
                option.innerHTML = retour[i].idParcelle ;
                listId.appendChild(option);
            }
            form.appendChild(listId);
            listId.addEventListener("change",change);
            let bouton = document.getElementById("modifier");
            bouton.remove();
        }
    )
}
function change()
{
    let id = document.getElementById("newId");
    sendXHRRequest("page_mouvement_admin/insert-parcelle.php?type="+id.value,"GET").then(
        (response)=>{
            let retour = JSON.parse(response);
            let idVariete = document.getElementById("idParcelle");
            idVariete.value = retour[0].idParcelle;
            let nom = document.getElementById("surface");
            nom.value = retour[0].surface;
            let occupation = document.getElementById("idVariete");
            occupation.value = retour[0].idVariete;
        }
    )
}
