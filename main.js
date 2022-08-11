addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("api.php");
    let data = await peticion.text();
    document.querySelector("#res").innerHTML = data;
    
    // let td = document.querySelectorAll("tbody tr td");
    // td.forEach(element => {
    //     element.dataset.numero = (parseInt(element.dataset.numero)) ? "true" : "false"; 
    // });
})