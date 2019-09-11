<!DOCTYPE html>
<html>
<head>
	<title>Certificado digital</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	
	  
</head>
<body>
        <div class="container">
           <div class="login">  
            <form action="enviar.php" method="POST" >
                
                   
                    <h1>Certificado Digital</h1>
                    <p><strong>Recuerda:</strong>Si estas en provincia el DNI debe estar legalizado(Notariado). </p>
                    
                    <div class="file">
                        <input type="file" name="adjunto" accept=".pptx,.docx,.xls" multiple>
                    </div> 
                        
                    <div class="form-row">
                        <div class="form-group col-md-5">
                          <label >DNI</label>
                          <input type="text" class="form-control" placeholder="Introduzca su numero de dni" required="" name="dni">
                        </div>
                        <div class="form-group col-md-6">
                          <label >FICHA RUC</label>
                          <input type="password" class="form-control" placeholder="Introduzca su ficha RUC" required="" name="ruc">
                        </div>
                    </div>
                    
                    <div class="form-group arreglo">
                        <label >VIGENCIA DE PODER</label>
                        <input type="text" class="form-control" placeholder="Introduzca su Vigencia" required="" name="vigencia">
                    </div>
                    <input type="submit" class="boton1" value="Enviar" name="submit">
                    
                  </form>
                  <form action="enviar2.php" method="POST" >  
                    <h3 class="L">Si no tine estos documentos, complete estos campos</h3>
                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label >Nombre Completo  y Cargo(Presidente,Subgerente,etc)</label>
                          <input type="text" class="form-control" required="" name="nombre">
                        </div>
                        <div class="form-group col-md-4">
                          <label >Numero de Partida</label>
                          <input type="text" class="form-control" required="" name="partida">
                        </div>
                        <div class="form-group col-md-3">
                          <label >Numero de Asiento</label>
                          <input type="text" class="form-control" required="" name="asiento">
                        </div>
                  </div>
                        <input type="submit" class="boton2" value="Enviar" name="submit"> 
                               
                </form>
            </div>
        </div>

  </body>
</html>
