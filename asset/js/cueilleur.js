var form = document.getElementById("formCueilleur");
var btModifier = document.getElementById("modifier");

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-cueilleur.php","POST",dataForm,null).then(insert)
    
});

btModifier.addEventListener("click",modifier);

function modifier()
{
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-cueilleur.php?type=modifier","GET",dataForm,null).then(
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
                option.value = retour[i].idCueilleur;
                option.innerHTML = retour[i].nomCueilleur;
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
    sendXHRRequest("page_mouvement_admin/insert-cueilleur.php?type="+id.value,"GET").then(
        (response)=>{
            let retour = JSON.parse(response);
            console.log(retour);
            let idCueilleur = document.getElementById("idCueilleur");
            idCueilleur.value = retour[0].idCueilleur;
            let nom = document.getElementById("nomCueilleur");
            nom.value = retour[0].nomCueilleur;
            let genre = document.getElementById("genre");
            genre.value = retour[0].genre;
            let dateNaissance = document.getElementById("dateNaissance");
            dateNaissance.value = retour[0].dateNaissance;

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
    let idCueilleur = document.getElementById("idCueilleur");
    idCueilleur.value = "null";
    if (document.getElementById("newId") != null) {
        document.getElementById("newId").remove();
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
}
