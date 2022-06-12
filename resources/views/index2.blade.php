<h1 style="text-align:center; font-family:Comic Sans; color:#025C88;">My House</h1>
<br>
<p>Fecha:  <a id="current_date">Domingo 12 Junio 2022</a></p>
<p>Codigo de referencia: #MHR2341</p>
<p>Comprado en <a href="http://localhost:8000" target="_blanck">MyHouse.com</a><p>
<br>
<table class="table table-bordered border-suceess">
                <thead>
                    <tr>
                        <th>Producto</th>
                    
                        <th>Cantidad</th>
                    
                        <th>Precio</th>
                    
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(\Cart::getContent() as $item)
                        <tr>
                            <th style="text-align:justify;">{{$item->name}}</th>
                            <th>{{$item->quantity}}</th>
                            <th>${{ $item->price }}</th>
                            <th>${{ \Cart::get($item->id)->getPriceSum() }}</th>
                        </tr>        
                    @endforeach
                    <tr style="background-color: #;">
                        <td colspan="4" style="padding: 6px;">
                        <b>Total: </b>${{ \Cart::getTotal() }}
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <style>
            table {
                width: 100%;
                border-spacing:0;
            }
            th, td {
                width: 25%;
                padding:5px;
                text-align: center;
                vertical-align: top;
                border: 1px solid #000;
                border-spacing: 0;
                font-weight:none;
                font-family: san serif;
            }

        </style>

<script>
    document.getElementById("current_date").innerHTML = Date();
</script>