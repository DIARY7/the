var form = document.getElementById("formVariete");
var btModifier = document.getElementById("modifier");

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-variete.php","POST",dataForm,null).then(insert)
    
});



function modifier()
{
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-variete.php?type=modifier","GET",dataForm,null).then(
        (response)=>{
            let retour = JSON.parse(response);
            let listId = document.createElement("select");
            listId.id = "newId";
            listId.classList.add("form-select");
            // listId.aria_label = "Floating label select example";
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
    sendXHRRequest("page_mouvement_admin/insert-variete.php?type="+id.value,"GET").then(
        (response)=>{
            let retour = JSON.parse(response);
            let idVariete = document.getElementById("idVariete");
            idVariete.value = retour[0].idVariete;
            let nom = document.getElementById("nomVariete");
            nom.value = retour[0].nomVariete;
            let occupation = document.getElementById("occupation");
            occupation.value = retour[0].occupation;
            let rendement = document.getElementById("rendement");
            rendement.value = retour[0].rendement;
        }
    )
}

function insert()
{
    let contenues = form.querySelectorAll("form input");
    for (let index = 0; index < contenues.length; index++) {
        const element = contenues[index];
        element.value = null;
    }
    let idVariete = document.getElementById("idVariete");
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