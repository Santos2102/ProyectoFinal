@include('dashboard.partials.sesion-flash-status')
                <section class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Nombre:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Nombre del producto" aria-label="Disabled input example"  rows="1" type="text" name="name" value ="{{old('name',$producto->name)}}"> <br>
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for=""><b>Descripción:</b></label>
                        <textarea class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Descripción" aria-label="Disabled input example"  rows="3" name="description">{{old('description',$producto->description)}}</textarea><br>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Marca:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese marca" aria-label="Disabled input example"  rows="1" type="text" name="brand" value ="{{old('brand',$producto->brand)}}"><br>
                        @error('brand')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Precio:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese precio" aria-label="Disabled input example"  rows="1" type="text" name="price" value ="{{old('price',$producto->price)}}"><br>
                        @error('price')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
               

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Existencia:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Existencia " aria-label="Disabled input example"  rows="1" type="text" name="stock" value ="{{old('stock',$producto->stock)}}"><br>
                        @error('stock')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Imagen:</b></label><br>
                        <input type="file" name="image" value ="{{old('image',$producto->image)}}"><br>
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button id="but"  class="btn btn-warning" type="submit">Enviar</button>
                    </div>
                </section>