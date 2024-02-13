var form = document.getElementById("formConfig");


function data()
{
    sendXHRRequest("page_mouvement_admin/modifie-config.php?type=data","GET").then(
        (response)=>{
            let retour = JSON.parse(response);
            console.log(retour);
            let min = document.getElementById("minimal");
            min.value =retour[0].minimal ;
            let bonus = document.getElementById("bonus");
            bonus.value = retour[0].bonus;
            let mallus = document.getElementById("mallus");
            mallus.value = retour[0].mallus;
        }
    )   
}
data();

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/modifie-config.php","POST",dataForm,null).then(insert)
    
});

function insert()
{
    let contenues = form.querySelectorAll("form input");
    for (let index = 0; index < contenues.length; index++) {
        const element = contenues[index];
        element.value = null;
    }
}