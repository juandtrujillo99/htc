<ul class="collapsible">
	<li class="active">
		<div align="left" class="collapsible-header col-12 valign-wrapper" style="background-color: #A60303; color: white;">
			<p class="col-10 textoBlack textoParrafo" style="padding: .5em;">Información general</p> 
			<p class="col-2 right-align"><i class="fa-solid fa-angle-down"></i></p>
		</div>
		<div align="left" class="collapsible-body" style="background-color:transparent;">
			<div class="row">
				<div class="col-12">
					<?php 
					if (!empty($admin -> obtener_nombre())) {
						?>
						<p class="textoBookBold textoParrafo"><?php echo $admin -> obtener_nombre(); ?>, eres administrador</p>
						<?php
						}
					?>		
					<br>
					<p class="textoBook">Correo electrónico:</p>
					<?php 
					if (!empty($admin -> obtener_email())) {
						?>
						<p class="textoBookBold textoParrafo truncate"><?php echo $admin -> obtener_email(); ?></p>
						<?php
						}
					?>		
				</div>	
			</div>							
		</div>
	</li>
</ul>