rechercheResult();

function rechercheResult () {
    let form = document.getElementById("formRecherche");
    form.addEventListener('submit',(e)=>{
        e.preventDefault();
        formData = new FormData(form);
        sendXHRRequest("page_mouvement_client/recherche-result.php","POST",formData).then(
            (response)=>{
                
                try {
                    let stat = JSON.parse(response); 
                    document.getElementById("totalCueillette").textContent = stat["somme"];
                    document.getElementById("reste").textContent = stat["reste"];
                    document.getElementById("cout_revient").textContent = stat["cout_revient"];
                } catch (error) {
                    
                    document.getElementById("totalCueillette").textContent = 0;
                    document.getElementById("reste").textContent = 0;
                    document.getElementById("cout_revient").textContent = 0;    
                }
            }
        )
    });
}