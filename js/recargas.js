     type="text/javascript"

	 //1)Definir las variables correspondientes  
    	 
    	 var tipo_1 = new Array("Seleccionar", "Plan","Normal");
         var tipo_2 = new Array("Seleccionar", "No Aplica");
         var tipo_3 = new Array("seleccionar", "No Aplica");
         var tipo_4 = new Array("Seleccionar", "No Aplica");
         var tipo_5 = new Array("Seleccionar", "No Aplica");
        
       
      //2) Crear una funcion que permita ejucar el cambio dinamico
         
         function cambiar(){
        	 var compania;
        	 //Se toma el valor de la "compañia seleccionarda"
        	 compania = document.formulariorecargas.compania[document.formulariorecargas.compania.selectedIndex].value;
        	 //se chequea si la "compañia" esta definida
        	 
        	 if(compania!=0){
        		 //Seleccionamos las cosas correctas
        		 
        		 mis_tipos=eval("tipo_" + compania);
        		 //se calcula el numero de compania
        		 num_tipos=mis_tipos.length;
        		 //marco el numero de tipos en el select
        		 document.formulariorecargas.tipo.length = num_tipos;
        		 //para cada tipo del array, la pongo en el select
        		 for(i=0; i<num_tipos; i++){
        			 document.formulariorecargas.tipo.options[i].value=mis_tipos[i];
        			 document.formulariorecargas.tipo.options[i].text=mis_tipos[i];
        		 }
        		 
        		 }else{
        			 //sino habia ningun tipo seleccionado,elimino las cosas del select
        			 document.formulariocompania.tipo.length = 1;
        			 //ponemos un guion en la unica opcion que he dejado
        			 document.formulariorecargas.tipo.options[0].value="seleccionar";
        			 document.formulariorecargas.tipo.options[0].text="seleccionar";
        			 
        		 }
        	 
        	
        	 
        	 
        		 //hacer un reset de los tipos
        	 document.formulariorecargas.tipo.options[0].selected=true;

                  }

        	 
         
                 
     