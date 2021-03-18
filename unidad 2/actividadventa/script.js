let contador=0;
let subtotal=0;
let iva = 0;
let total = 0;

function extraer(){
    var productos = document.getElementById("producto").value;
    return productos;
}

function agregar(){
    contador++;
    let productos = extraer();
    
    tabla1 = document.getElementById("tabla");
    tabla1.setAttribute("class","tabla-estilo");

    let tr = tabla1.insertRow();
    let td = tr.insertCell();
    
    let monto = 0;
    let cantidad = document.getElementById("cantidad").value;
    let precio = document.getElementById("precio").value;
    
    tr = tabla1.insertRow();
    if(productos==1){
        monto = (cantidad)*(precio);
        td = tr.insertCell();
        td.appendChild(document.createTextNode(contador));
        td = tr.insertCell();
        td.appendChild(document.createTextNode('gorra'));
        td = tr.insertCell();
        td.appendChild(document.createTextNode('$'+ precio));
        td = tr.insertCell();
        td.appendChild(document.createTextNode(cantidad));
        td = tr.insertCell();
        td.appendChild(document.createTextNode('$'+ monto));
        subtotal = subtotal + monto;
    } else{
        if(productos==2){
            monto = (cantidad)*(precio);
            td = tr.insertCell();
            td.appendChild(document.createTextNode(contador));
            td = tr.insertCell();
            td.appendChild(document.createTextNode('cinto'));
            td = tr.insertCell();
            td.appendChild(document.createTextNode('$'+ precio));
            td = tr.insertCell();
            td.appendChild(document.createTextNode(cantidad));
            td = tr.insertCell();
            td.appendChild(document.createTextNode('$'+ monto));
            subtotal = subtotal + monto;
        } else {
            if(productos==3){
                monto = (cantidad)*(precio);
                td = tr.insertCell();
                td.appendChild(document.createTextNode(contador));
                td = tr.insertCell();
                td.appendChild(document.createTextNode('sombrero'));
                td = tr.insertCell();
                td.appendChild(document.createTextNode('$'+ precio));
                td = tr.insertCell();
                td.appendChild(document.createTextNode(cantidad));
                td = tr.insertCell();
                td.appendChild(document.createTextNode('$'+ monto));
                subtotal = subtotal + monto;
            } else {
                if(productos==4){
                    monto = (cantidad)*(precio);
                    td = tr.insertCell();
                    td.appendChild(document.createTextNode(contador));
                    td = tr.insertCell();
                    td.appendChild(document.createTextNode('cartera'));
                    td = tr.insertCell();
                    td.appendChild(document.createTextNode('$'+ precio));
                    td = tr.insertCell();
                    td.appendChild(document.createTextNode(cantidad));
                    td = tr.insertCell();
                    td.appendChild(document.createTextNode('$'+ monto));
                    subtotal = subtotal + monto;
                } else{
                    //alert('Nombre bai');
                }
            }
        }
    }
    iva = (iva+(precio*cantidad)*0.16);
    total=iva+subtotal;

    document.getElementById("iva").innerHTML = "$"+iva;
    document.getElementById("subtotal").innerHTML = "$"+subtotal;
    document.getElementById("total").innerHTML = "$"+total;
    
}
