/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function mostrarAcciones(modulo){
    
    if(modulo == 'fi'){
        divfi = document.getElementById("accion_fi");
        if(divfi) divfi.style.display = "";
        
        divas = document.getElementById("accion_as");
        if(divas) divas.style.display = "none";
        
        divlo = document.getElementById("accion_lo");
        if(divlo) divlo.style.display = "none";
        
        divres = document.getElementById("resumen");
        if(divres) divres.style.display = "none";
        
        
        divrfi = document.getElementById("reporte_fi");
        if(divrfi) divrfi.style.display = "";
        
        divras = document.getElementById("reporte_as");
        if(divras) divras.style.display = "none";
        
        divrlo = document.getElementById("reporte_lo");
        if(divrlo) divrlo.style.display = "none";
        
        divrres = document.getElementById("resumenRep");
        if(divrres) divrres.style.display = "none";
        
        divtitulo = document.getElementById("titulo_modulo");
        divtitulo.textContent = "Datos de académico";
    }
    
    
    if(modulo == 'as'){
        divfi = document.getElementById("accion_fi");
        if(divfi) divfi.style.display = "none";
        
        divas = document.getElementById("accion_as");
        if(divas) divas.style.display = "";
        
        divlo = document.getElementById("accion_lo");
        if(divlo) divlo.style.display = "none";
        
        divres = document.getElementById("resumen");
        if(divres) divres.style.display = "none";
        
        
        
        divrfi = document.getElementById("reporte_fi");
        if(divrfi) divrfi.style.display = "none";
        
        divras = document.getElementById("reporte_as");
        if(divras) divras.style.display = "";
        
        divrlo = document.getElementById("reporte_lo");
        if(divrlo) divrlo.style.display = "none";
        
        divrres = document.getElementById("resumenRep");
        if(divrres) divrres.style.display = "none";
        
        
        divtitulo = document.getElementById("titulo_modulo");
        divtitulo.textContent = "Asignación de UMA";
    }
    
    
    if(modulo == 'lo'){
        divfi = document.getElementById("accion_fi");
        if(divfi) divfi.style.display = "none";
        
        divas = document.getElementById("accion_as");
        if(divas) divas.style.display = "none";
        
        divlo = document.getElementById("accion_lo");
        if(divlo) divlo.style.display = "";
        
        divres = document.getElementById("resumen");
        if(divres) divres.style.display = "none";

        
        divrfi = document.getElementById("reporte_fi");
        if(divrfi) divrfi.style.display = "none";
        
        divras = document.getElementById("reporte_as");
        if(divras) divras.style.display = "none";
        
        divrlo = document.getElementById("reporte_lo");
        if(divrlo) divrlo.style.display = "";
        
        divrres = document.getElementById("resumenRep");
        if(divrres) divrres.style.display = "none";
        
        
        divtitulo = document.getElementById("titulo_modulo");
        divtitulo.textContent = "Logros académicos";
    }
    
    
}





