<div class="welcome">
	<?php if($user["language"] == "es") { ?>
		<h2>
			Bienvenid<?php echo (isset($user["gender"])) ? "a" : "o";?> <?php echo $user["name"];?> a Razones Fundar
		</h2>
	<?php } else { ?>
		<h2>
			Bienvenid<?php echo (isset($user["gender"])) ? "a" : "o";?> <?php echo $user["name"];?> al sitio web Razones Fundar
		</h2>
	<?php } ?>
</div>

<div id="buttons">
	<div class="icon trabajar-icon trabajar-icon-es"></div>
	<div class="icon info-icon info-icon-es"></div>
	<div class="icon documentos-icon documentos-icon-es"></div>

	<!-- Seccion para Trabajar -->
	<div class="section trabajar">
		<ul>
			<p class="paragraph">
				El pasado 12 de septiembre, 
				presentamos frente a medios de comunicación y público en general, 
				un conjunto de propuestas y perspectivas que llamamos: 
				Razones Fundar: propuestas para un nuevo sexenio.
			</p>	
			<li>
				<a href="<?php print get('webURL'); ?>/documents/TextoDonantesRazonesFundar.pdf" title="Documento Razones Fundar">
					Presentaci&oacute;n Razones Fundar
				</a>
			</li>
		</ul>

		<div class="section-icons-min">
			<div class="min-icon info-icon-min info-icon-min-es"></div>
			<div class="min-icon documentos-icon-min documentos-icon-min-es"></div>
		</div>
	</div>
	
	<!-- Seccion Información -->
	<div class="section info">
		<ul>
			<li class="link">
				<a href="http://razonesfundar.org" target="_blank" title="Razones Fundar">www.razonesfundar.com</a>
			</li>
			<li class="link">
				<a href="http://www.flickr.com//photos/54684268@N06/sets/72157631575521247/show/" target="_blank" title="Galería Fotográfica">Galer&iacute;a Fotogr&aacute;fica</a>
			</li>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon trabajar-icon-min trabajar-icon-min-es"></div>
			<div class="min-icon documentos-icon-min documentos-icon-min-es"></div>
		</div>
	</div>
	
	<!-- Seccion Documentos -->
	<div class="section documentos">
		<ul class="height">
			<p class="paragraph">
				A continuaci&oacute;n se presenta una muestra del tratamiento en medios de comunicaci&oacute;n 
				por parte de diversos medios de circulaci&oacute;n o presencia nacional
			</p>
			<li class="link">
				<a target="_blank" href="http://www.criteriohidalgo.com/notas.asp?id=116588" title="Sugiere Fundar no dar al IFAI trabajo de más; los problemas lo rebasan, dice el organismo">
					Sugiere Fundar no dar al IFAI trabajo de m&aacute;s
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.eluniversal.com.mx/nacion/199954.html" title="No sobrecargar a IFAI: expertos">
					No sobrecargar a IFAI: expertos
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://rendiciondecuentas.org.mx/articulo.php?id=2633" title="Presentan Razones Fundar, un punto de partida para la discusión informada">
					Presentan Razones Fundar, un punto de partida para la discusi&oacute;n informada
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://rotativo.com.mx/salud/anticonceptivos-deben-ser-tan-accesibles-como-las-vacunas/112536/html/" title="Anticonceptivos deben ser tan accesibles como las vacunas">
					Anticonceptivos deben ser tan accesibles como las vacunas
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://mujeresporlademocracia.blogspot.mx/2012/09/anticonceptivos-deben-ser-tan.html" title="Anticonceptivos deben ser tan accesibles como las vacunas">
					Anticonceptivos deben ser tan accesibles como las vacunas
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.cimacnoticias.com.mx/site/12091206-Anticonceptivos-deb.50717.0.html" title="Anticonceptivos deben ser tan accesibles como las vacunas">
					Anticonceptivos deben ser tan accesibles como las vacunas
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.vanguardia.com.mx/pidenaproximogobiernopoliticasdesaludconperspectivadedh-1372783.html" title="Piden a próximo gobierno políticas de salud con perspectiva de DH">
					Piden a pr&oacute;ximo gobierno políticas de salud con perspectiva de DH
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.notiese.org/notiese.php?ctn_id=5948" title="Piden a próximo gobierno políticas de salud con perspectiva de DH">
					Piden a pr&oacute;ximo gobierno pol&iacute;ticas de salud con perspectiva de DH
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.eluniversal.com.mx/nacion/200039.html" title="Fundar exige transparencia">
					Fundar exige transparencia
				</a>
			</li>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon info-icon-min info-icon-min-es"></div>
			<div class="min-icon trabajar-icon-min trabajar-icon-min-es"></div>
		</div>
	</div>
</div>
