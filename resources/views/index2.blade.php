<h1 style="text-align:center; font-family:Comic Sans; color:#025C88;">My House</h1>

</h1>

<div class="datagrid"><table>
<thead>
    <tr>
        <th>Datos de la transacción </th>
    </tr>
    <br>
    <p> <b>Fecha:  <a id="current_date"></b>Domingo 12 Junio 2022</a></p> 
    <p> <b>Codigo de referencia:</b> #MHR2341</p> 
    <p> <b>Comprado en </b><a href="http://localhost:8000" target="_blanck">MyHouse.com</a></p> 
    <p> <b>Monto: </b>${{ \Cart::getTotal() }} </p> 
<br>
</thead>

<div class="datagrid"><table>
<thead>
    <tr>
        <th>Datos del cliente</th>
    </tr>
<br>
    <p><b>Nombre:<b></p>  
    <p><b> correo:<b></p>
    <p><b> telefono:<b></p>
<br>
</thead>


<div class="datagrid"><table>
<thead>
    <tr>
        <th>Detalle de pago</th>
    </tr>
    <br>
</thead>

<div class="datagrid"><table>
<thead>
    <tr>
        <th>Productos</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Sub-Total</th>
    </tr>
</thead>

<tbody>
  @foreach(\Cart::getContent() as $item)
      <tr class="alt">
        
            <th style="text-align:justify;">{{$item->name}}</th>
            <th>{{$item->quantity}}</th>
            <th>${{ $item->price }}</th>
            <th>${{ \Cart::get($item->id)->getPriceSum() }}</th>
                              
        </tr>
    @endforeach
    <p>
    <p>
<tr class="alt ">
    <td colspan="13" style="padding: 7px;">
        <b>Total de pago: </b>${{ \Cart::getTotal() }}
    </td>
</tr>

</tbody>
</table>
</div>
<style>
     td {
    width: 25%;
    padding:10px;
    text-align: center;
             
                      
   }
   .datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #A65B1A; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; 
    }
   .datagrid table td, 
   .datagrid table th { padding: 3px 10px; }
   .datagrid table thead th {
    
    background:-moz-linear-gradient( center top, #A65B1A 5%, #7F4614 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A65B1A', 
    endColorstr='#7F4614');
    background-color:#A65B1A; color:#FFFFFF;
     font-size: 15px; font-weight: bold;
     border-left: 1px solid #BF691E; 
    } 
    .datagrid table thead th:first-child { border: none; }
     
     .datagrid table tbody td { color: #7F4614; border-left: 1px solid #D9CFB8;
        font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td 
        { background: #F0E5CC; color: #7F4614; }.datagrid table tbody td:first-child 
        { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }
        .datagrid table tfoot td div { border-top: 1px solid #A65B1A;background: #F0E5CC;} 
        .datagrid table tfoot td { padding: 0; font-size: 12px } 
        .datagrid table tfoot td div{ padding: 2px; }
        .datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }
        .datagrid table tfoot  li { display: inline; }
      
</style>
