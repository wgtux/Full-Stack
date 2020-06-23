function addIngrediente() {
    ing = document.getElementById("ingrediente").value
    
    lista = document.getElementById("itens").innerHTML

    lista = lista + "<li>"+ing+"</li>"

    document.getElementById("itens").innerHTML = lista
}