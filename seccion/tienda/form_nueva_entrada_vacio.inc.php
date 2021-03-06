<div class="col-12">
	<div class="input-field">
		<input type="text" name="titulo" id="titulo" class="validate">
		<label for="titulo">¿Cuál es el nombre de este producto?</label>
	</div>
	<br>
	<div class="input-field">
		<input type="text" name="url" id="url" class="validate">
		<label for="url">URL Personalizada</label>
	</div>
	<br>
	<div class="col-12">
		<ul class="collapsible">
		    <li>
				<div class="collapsible-header" title="Con esta fotografía las personas podran identificar fácilmente el producto">Sube una imagen de portada</div>
				<div class="collapsible-body">
					<span>
						<div class="form-group" id="upload_form">
							<h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font>
							</h6>
							<br>
							<label for="file1" id="label-archivo" class="btn btn-principal">Seleccionar</label>
							<input type="file" name="file1" id="file1" class="d-none">		
							<input name="imagen" class="d-none">					
							<input type="button" value="Subir" name="guardar_imagen" id="guardar_imagen" onclick="subirImagen()"  class="btn btn-principal">
							<progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
							<h4 id="status"></h4>				
						</div>
					</span>
				</div>
		    </li>
		</ul>
	</div>
	<br><br>
	<div class="input-field">
		<input type="text" name="url_externa" id="url_externa" class="validate">
		<label for="url_externa">Inserta el código</label>
	</div>
	<br>
	<div class="input-field">
		<input type="text" name="precio" id="precio">
		<label for="precio">Ponle precio a este producto</label>
	</div>
	<br>
	<div class="input-field">
		<textarea id="texto" name="texto" class="materialize-textarea">
			<b>Descripción General</b>

			• Sabor:

			• Tamaño:

			• Medidas:

			• Formato del suplemento: Polvo / Cápsula

			• Peso (gr):

			• Tipo de envase: Bolsa / Tarro

			• Disponibilidad: (Ej: Solo domicilio en Cali)

			Colores disponibles:

			<div class="color" style="background-color:# "></div>


			<b>Otros</b>

			• Valor nutricional por porción:

			• Vegano: Sí / No

			• Contiene lactosa:  Sí / No

			• Libre de gluten: Sí / No
		</textarea>
		<label for="texto">Describe tu producto</label>
    </div> 
	<br>   
	<div class="input-field">
		<input type="text" name="etiqueta" id="etiqueta" class="validate">
		<label for="etiqueta">Categoría del producto</label>
	</div>
</div>