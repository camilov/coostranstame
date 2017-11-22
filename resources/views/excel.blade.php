  <?php if ($zona =="12"): ?>
                
           
            <table>
             
             <th>Nro Guia</th>
             <th>Forma pago</th> 
             <th>Valor</th>
             </tr>
             @foreach($resumen as $remisiones)
              <tr>
                <td>{{$remisiones->remision}}</td>
                <td>{{$remisiones->forma_pago}}</td>
                <td>{{$remisiones->valor_neto}}</td>
              </tr>
            </table>    
           @endforeach        
          
               
         
           
    <?php endif ?>

    <?php if ($zona=='13'): ?>
            
            <table>
             <tr> 
             <th>Nro Guia</th>
             <th>Forma pago</th> 
             <th>Valor</th>
             </tr>
             @foreach($resumen as $remisiones)
              <tr>
                <td>{{$remisiones->remision}}</td>
                <td>{{$remisiones->forma_pago}}</td>
                <td>{{$remisiones->valor_neto}}</td>
              </tr>
            </table> 
                          
            @endforeach        
          
            
                
    <?php endif ?>
