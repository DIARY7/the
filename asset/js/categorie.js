var form = document.getElementById("formCategorie");

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-categorie-depense.php","POST",dataForm,null).then(insert)
    
});

function insert()
{
    let contenues = form.querySelectorAll("form input");
    for (let index = 0; index < contenues.length; index++) {
        const element = contenues[index];
        element.value = null;
    }
}
