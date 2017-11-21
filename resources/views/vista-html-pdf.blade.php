
    
      <?php if ($zona =="12"): ?>
            
        @foreach($resumen as $remisiones)
          <form id="form1" runat="server">  
           <div class="Table">  
                  <div class="Heading">  
                      <div class="Cell">  
                          <p>  
                              Nro guia</p>  
                      </div>  
                      <div class="Cell">  
                          <p>  
                              Forma de pago</p>  
                      </div>  
                      <div class="Cell">  
            
                          <p>  
                              Valor</p>  
                      </div>  
                  </div>  
                  <div class="Row">  
                      <div class="Cell">  
                          <p>  
                              {{$remisiones->remision}}</p>  
                      </div>  
                      <div class="Cell">  
                          <p>  
                               {{$remisiones->forma_pago}} </p>  
                      </div>  
                      <div class="Cell">  
                          <p>  
                              ${{$remisiones->valor_neto}}</p>  
                      </div>  
                  </div>  
              </div>  
            </form>
          @endforeach

            
               
         
           
    <?php endif ?>

    <?php if ($zona=='13'): ?>
                
          @foreach($resumen as $remisiones)
          <form id="form1" runat="server">  
           <div class="Table">  
                  
                  <div class="Heading">  
                      <div class="Cell">  
                          <p>  
                              Nro guia</p>  
                      </div>  
                      <div class="Cell">  
                          <p>  
                              Forma de pago</p>  
                      </div>  
                      <div class="Cell">  
            
                          <p>  
                              Valor</p>  
                      </div>  
                  </div>  
                  <div class="Row">  
                      <div class="Cell">  
                          <p>  
                              {{$remisiones->remision}}</p>  
                      </div>  
                      <div class="Cell">  
                          <p>  
                               {{$remisiones->forma_pago}} </p>  
                      </div>  
                      <div class="Cell">  
                          <p>  
                              ${{$remisiones->valor_neto}}</p>  
                      </div>  
                  </div>  
              </div>  
            </form>
          @endforeach

      
           
                
    <?php endif ?>

         


<style type="text/css">  
  
        .Table  
        { 
            display: table;  
        }  
  
       
        .Heading  
        {  
            display: table-row;  
            font-weight: bold;  
            text-align: center;  
        }  
  
        .Row  
        {  
            display: table-row;  
        }  
  
        .Cell  
        {  
            display: table-cell;  
            border: solid;  
            border-width: thin;  
            padding-left: 5px;  
            padding-right: 5px;  
        }  
  
    </style>  
    

  
