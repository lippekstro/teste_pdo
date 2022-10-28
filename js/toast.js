var exibe = document.getElementById("exibe")

if(document.cookie.indexOf(['atualizado='])>=0){
    exibe.innerHTML = "Registro Atualizado Com Sucesso!"
    exibe.style.backgroundColor = "blue"
    exibe.style.color = "white"
    exibe.style.textAlign = "center"
    exibe.className = "show";
    setTimeout(()=>{
        exibe.style.display = 'none'

    }, 3000)

    document.cookie = "atualizado=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/teste_pdo;";
}

if(document.cookie.indexOf(['apagado='])>=0){
    exibe.innerHTML = "Registro Apagado Com Sucesso!"
    exibe.style.backgroundColor = "red"
    exibe.style.color = "white"
    exibe.style.textAlign = "center"
    exibe.className = "show";
    setTimeout(()=>{
        exibe.style.display = 'none'

    }, 3000)

    document.cookie = "apagado=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/teste_pdo;";
}

if(document.cookie.indexOf(['inserido='])>=0){
    exibe.innerHTML = "Registro Inserido Com Sucesso!"
    exibe.style.backgroundColor = "green"
    exibe.style.color = "white"
    exibe.style.textAlign = "center"
    exibe.className = "show";
    setTimeout(()=>{
        exibe.style.display = 'none'

    }, 3000)

    document.cookie = "inserido=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/teste_pdo;";
}