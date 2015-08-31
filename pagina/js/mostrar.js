/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function nuevoAjax()
{
    /* Crea el objeto AJAX. Esta funcion es generica para cualquier utilidad de este tipo, por
     lo que se puede copiar tal como esta aqui */
    var xmlhttp = false;
    try
    {
        // Creacion del objeto AJAX para navegadores no IE
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
        try
        {
            // Creacion del objet AJAX para IE
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E)
        {
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
                xmlhttp = new XMLHttpRequest();
        }
    }
    return xmlhttp;
}

function buscarEnArray(array, dato)
{
    // Retorna el indice de la posicion donde se encuentra el elemento en el array o null si no se encuentra
    var x = 0;
    while (array[x])
    {
        if (array[x] == dato)
            return x;
        x++;
    }
    return null;
}

var urls = new Array ();
    urls[0] = "./cotizacion/prueba.php";
    urls[1] = "./cotizacion/retilap.php";
    urls[2] = "./php/index.php";
/**
 * Metodo para pintar web en el index en el div contenido
 * @param {type} i nuero que obtiene la url del array
 * @returns {undefined}
 */
function mostrarContenido(i)
{
    // Obtengo el elemento del select que debo cargar		
    var Destino = document.getElementById('mostrarcontenido');
    // Creo el nuevo objeto AJAX y envio al servidor el ID del select a cargar y la opcion seleccionada del select origen
    var ajax = nuevoAjax();
    ajax.open("GET", urls[i], true);
    ajax.onreadystatechange = function ()
    {
        if(ajax.readyState === 1){
            Destino.parentNode.innerHTML = "";
        }
        if (ajax.readyState === 4){
            Destino.parentNode.innerHTML = ajax.responseText;
        }
    }
    ajax.send(null);

}