  <?php if ($zona =="12"): ?>
                
           @foreach($resumen as $remisiones)
            <table>
             <tr>
             <th>Nro Guia</th>
             <th>Forma pago</th> 
             <th>Valor</th>
             </tr>
              <tr>
                <td>{{$remisiones->remision}}</td>
                <td>{{$remisiones->forma_pago}}</td>
                <td>{{$remisiones->valor_neto}}</td>
              </tr>
            </table>    
           @endforeach        
          
               
         
           
    <?php endif ?>

    <?php if ($zona=='13'): ?>
              
           @foreach($resumen as $remisiones)
            
            <table>
             <tr> 
             <th>Nro Guia</th>
             <th>Forma pago</th> 
             <th>Valor</th>
             </tr>
              <tr>
                <td>{{$remisiones->remision}}</td>
                <td>{{$remisiones->forma_pago}}</td>
                <td>{{$remisiones->valor_neto}}</td>
              </tr>
            </table> 
                          
            @endforeach        
          
            
                
    <?php endif ?>
