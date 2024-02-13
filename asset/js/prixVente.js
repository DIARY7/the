var form = document.getElementById("formPrix");
var btModifier = document.getElementById("modifier");

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-prix.php","POST",dataForm,null).then(insert)
    
});

function listVariete()
{
    sendXHRRequest("page_mouvement_admin/insert-prix.php?type=variete","GET").then(
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
            listId.addEventListener("change",change);
        }
    )   
}
listVariete();

function change()
{
    let id = document.getElementById("idVariete");
    sendXHRRequest("page_mouvement_admin/insert-prix.php?type="+id.value,"GET").then(
        (response)=>{
            let retour = JSON.parse(response);
            let prix = document.getElementById("prix");
            prix.value = retour[0].prix;    
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
}

