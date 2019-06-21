function del(elem){
    elem.remove();
}

function myfunction(){
    var newitem = document.createElement("LI");
    var textnode = document.createTextNode(prompt());
    var lol = newitem.appendChild(textnode);

    var list = document.getElementById("ft_list");
    list.insertBefore(newitem, list.childNodes[0]);
    newitem.setAttribute("onclick", "del(this)");
    
}