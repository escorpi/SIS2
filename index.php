<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laboratotio Info-Sistemas</title>
<link href="css/oop-estilos.css" rel="stylesheet" media="all" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Text+Me+One" rel="stylesheet" type="text/css">
</head>

<body>

<?php

class Cabecera     // Camel Case: Escribir la primera letra de la clase en mayuscula
{
	private $texto; //Atributo
	public function __construct($titulo) //Metodo
	{
		$this->texto = $titulo;
	}
	
	public function graficar() //Metodo
	{    
	 echo ' <p id="img_php"><img src="img/php_img_web_oop.jpg" width="300" height="40"></p>		
            <p id="text_der_img_php">    '
		//echo"<h1>".$this->texto."</h1>";
		?>
		<h1><?php echo $this->texto;?></h1>
		<?php
	}
}
//*************************************************************************
class Menu
{
	private $link;
	public function graficar()
	{	
		?>
<ul id="menu_navegacion" class="menu_nav"><?php echo $this->link;
		$menu[] = array('Inicio' => array('Mision', 'Vision', 'Nosotros'));
		$menu[] = array('Nosotros' => array('La empresa', 'Servicios', 'Portafolio'));
		$menu[] = array('Servicios' => array('Dise&ntilde;o web', 'Dise&ntilde;o grafico', 'SEO', 'Marketing'));
		$menu[] = array('Contacto' => array('Redes sociales', 'Telefonos', 'Formulario', 'Mapa'));
		
		foreach ($menu as $menu_key => $menu_item)
		{
			foreach ($menu_item as $menu_name => $sub_menu)
			{
				echo "<li><a href='#'>".$menu_name."</a>";
				if(isset($sub_menu))
				{
					echo "<ul>";
					foreach($sub_menu as $items)
					{
						echo"<li><a href='#'>".$items."</a>";
					}
					echo "</ul>";
				}
				echo "</li>";
			}			
		}
		
	}
}
?>
</ul>
		<?php

//*************************************************************************
class contenido
{
	private $lineas = array();
	
	public function iniciar_linea($li)
	{
		$this->lineas[] = $li;
	}
	
	public function graficar()
	{
		for ($i=0;$i<sizeof($this->lineas);$i++)
		{
			?>	
            <p id="img_php"><img src="img/php_img_web_oop.jpg" width="300" height="336"></p>		
            <p id="text_der_img_php"><?php echo $this->lineas[$i];?></p>
			<?php
		}
	}
}
//*************************************************************************
class Footer
{
	private $texto;
	public function __construct($cadena)
	{
		$this->texto = $cadena;
	}
	
	public function graficar()
	{
		?>
		<hr/>
		<?php echo $this->texto;?>
		<?php
	}
}
//*************************************************************************
//Creamos una clase para implementar la colaboracion de clases o objetos

class Pagina
{
	private $cabecera;
	private $menu;
	private $body;
	private $pie;
	public function __construct($texto_cabecera,$texto_pie)
	{
		$this->cabecera = new Cabecera($texto_cabecera);
		$this->menu = new Menu();
		$this->body = new contenido();
		$this->pie = new Footer($texto_pie);
	}
	
	public function iniciar_contenido($texto)
	{
		$this->body->iniciar_linea($texto);
	}
	
	public function vista()
	{
		echo "<div id=contenedor>";
		echo "<div id=cabecera>"; $this->cabecera->graficar(); echo "</div>";
		echo "<div id=menu>"; $this->menu->graficar(); echo "</div>";
		echo "<div id=contenido>"; $this->body->graficar(); echo "</div>";
		echo "<div id=footer>"; $this->pie->graficar(); echo "</div>";
		echo "</div>";
	}
}
//*************************************************************************
//Ahora creamos la vista de nuestros proyectos

$pag = new Pagina("Gestion De Laboratorios Info-Sist","Desarrollado por Equipo Scrum SIS2 - 2013");

$pag->iniciar_contenido(
"Area.0 ‘Ombligo del Lago’

Me conecté.

Sentí el pelo en mi nuca y como se me iba poniendo la piel de gallina. Pasó sólo un milisegundo desde que mi conciencia pasó de mi cuerpo real a mi avatar. Miré a mí alrededor. Es lo primero que hago cuando me conecto a The World.

Δ (Delta) Zona del servidor: Hidden, Forbidden, Holy Ground

Estaba en un sitio que parecía una vieja iglesia. Había un largísimo corredor detrás de mí. El suelo de mármol tenía un tinte verdoso con una forma de diamante. Un péndulo oscilaba marcando el tiempo. Miré a mí alrededor y vi otros tres péndulos que formaban un cuadrado perfecto.

Tick-Tock.

El que hubiera diseñado esa área, había pasado mucho rato programando con todo tipo de detalle esa parte de The World--un sitio en el ciberespacio donde hay más de quince millones de usuarios registrados y hablando diez idiomas diferentes. Pero ninguno de esos usuarios podía entrar en las Zonas Secretas, ¿por qué alguien había pasado tanto tiempo diseñando esa zona con tan alto nivel de detalle?
	Aunque había un par de fallos. No había ningún fallo de luz, ese era la ventaja del ciberespacio. Las reglas se pueden amoldar. Se pueden amoldar a tu favor o en tu contra, claro.
	Estaba de pie detrás de una verja que sólo llegaba a la altura de la cintura. Un poco más allá de la verja, estaba el altar. Me hubiera gustado estudiar los detalles del altar, pero no podía. Hubiera sido fácil saltar la reja, pero no se podía aquí-una de las muchas leyes que dicta el programador, el Dios, y las leyes físicas, son código. 
	Los cuatro péndulos oscilaban al unísono. 
Tick-Tock…

Eso me recordó que no vine de visita. Tenía trabajo que atender y estaba seguro que mis soldados, como mínimo los que eran reales, se estarían impacientando.
	Rápidamente me giré y me fui hacia donde me esperaban los miembros de los caballeros de Cobalto.
	Estaban esperando en las  cuatro entradas del edificio, creando un bloqueo. Cada caballero llevaba una malla de plata y armado con una larga, y puntiaguda lanza. Recordaban a las de la Europa medieval y muy comunes en los Juegos de Rol o los RPG. 
Uno de los caballeros dio un paso al frente. “Le hemos estado esperando, Capitán”.
	“¿Tenéis al NPC?” Pregunté. Los NPC son los personajes no jugadores, como los comerciantes, las camareras, etc. Son personajes controlados por la máquina, necesarios para que parezca un mundo real. Ocasionalmente, algunos se desarrollan demasiado y dejan de actuar como habían sido programados. Para eso me llamaron. “Hemos sellado todas las salidas. Está atrapada.”


Me puse a buscar lo que m habían mandado. Aunque había sido informado antes de llegar, me sorprendí cuando la vi. De pie en el centro de la sala, rodeada por amenazantes caballeros que medían el doble que ella, había una niña pequeña. Parecía que tuviera 12 o 13 años, y vestía todo de rojo. Incluso su pelo rubio-platino tenía mechas rojas. Su piel era pálida, casi traslúcida, y me di cuenta que no llevaba zapatos.

“¿Seguro que es ella?” Pregunté.
“Totalmente, coincide con la descripción, y no parece que sea un cheat.” Los cheats son personajes modificados que quebrantan las leyes del juego. Un ejemplo sería alguien que cada vez que da a algo con el arma, acierta, aunque el juego dicte que debe fallar.
	“¿Qué hacemos, Capitán?”
	Se volvió hacia mí, sus ojos eran grandes e inocentes. Su expresión contradecía a su situación: estaba atrapada y no podía escapar. 
	“¿Vais a borrarme?” Su voz era tan dulce e inocente como su cara. La ignoré.
	“¿Has protegido el área?”
	“Sí. Las funciones de entrada y salida han sido deshabilitadas de la Puerta del Caos,” informó el caballero.
	“¿Y los jugadores regulares?” pregunté, mirando donde estaba leyendo las propiedades del área.
	“Ninguno en esta zona. Confirmado.”
	“Bien, buen trabajo.”
	“¿Me vais a borrar?” repitió. Me giré y me dirigí a los caballeros con voz fuerte.
	“De acuerdo con las normativas, este NPC ha sido reconocido como un personaje no jugador irregular que no está en las especificaciones de la versión japonesa de The World.” Y en un argot de los caballeros dijo “Preparados para el ataque.” 
	Con un repentino sonido, los caballeros dejaron sus lanzas y dieron un paso atrás. Se movieron al unísono. 
	Cambié al modo debug, que sólo pueden acceder los administradores del sistema, y les obligué a moverse hacia delante. 
	“¿Vais a borrarme?” preguntó, intentando no llorar.
	“No pretendas parecer humana. No me engañas con tu encanto de niña. Eres una IA vagabunda y vas a recibir lo que mereces.”
	“¿Qué soy qué?”
	“¡Eres basura! Un mal Código. Datos dañados. Los caballeros de cobalto arreglamos errores como tú. ”
	Su vestido se movió en cámara lenta, cosa que sólo puede pasar en las películas o en el ciberespacio.
	“Soy un error,” suspiró.
	“Borradla.” Inmediatamente, dos caballeros dieron un paso al frente y lanzaron un ataque. Salió un rayo de luz blanca de sus lanzas. Cuando se disipó, la chica estaba empalada.
 	Tick-tock, tick-tock.
	Oía a los péndulas que sonaban más atrás. El cuerpo de la niña se descolorió y desapareció al cabo de unos segundos. Uno de los caballeros informó: “Borrado del sujeto completado.” 
	“Bien.” Asentí y me acerqué a los dos caballeros que bloqueaban la puerta frontal de la iglesia. Uno de ellos acababa de ser reclutado en los Caballeros de cobalto. Era su primera misión. 
	“Buen trabajo, recluta.”
	“Gracias. ¿Qué tipo de área es esta?”
	“Estás en la zona: Hidden, Forbidden, Holy Ground.”
	“¿Cómo puede ser que no haya monstruos ni tesoros? ¡Casi no hay nada!”
	“Es una zona sagrada. Es diferente a las otras zonas en The World.”
	“¿Sí?”
	“¿Has oído hablar del Epitaph of the Twilight?” Le pregunté al recluta.
	“Uh, sí, creo que sí. ¿No es la novela en que The World está basado?”
	“Sí, estaba en una página Alemana hace unos años-antes del Pluto Kiss.”
	“¿Qué quiere decir con… estaba?” 
	“Ya no existe. Pero la primera escena empieza aquí, en el ‘Ombligo del Lago’.”
	“¿Ombligo del Lago?”
	“Es el nombre de esta área. ¿No has hecho los deberes?”
	“¿Uh…?”
	“Se supone que debes leerte las especificaciones del área al que vas a loguearte. Se supone que debes memorizarlo todo. ¿Qué te pasa?”
	“¡Oh, si que lo he leído!” no sonó nada convincente.
	“¿Y…?”
	“Bueno, en la versión vieja de The World, no estaba el sistema de las tres palabras, pero el nombre del área estaba hecho con tres letras, ¿no?”
	“Bien a medias, pero no tiene ningún sentido. La próxima vez, presta atención a  tu misión. Hasta entonces, te daré una pequeña lección de historia.” Suspiré. Reclutas...
	“En vez de seleccionar tres palabras para entrar en un área como hacemos ahora, antes usábamos tres letras para entrar. Eso era en una versión vieja de The World que era una versión beta, que se llamaba Fragment, aunque nunca salió a la luz.”
	El recluta asintió.
	“Ahora nos referimos a esta área como Hidden, Forbidden y Zona secreta. Pero antes era Ombligo del Lago.”
	El recluta sacudió su cabeza lentamente. Miró los alrededores de la iglesia, fijándose en los detalles, como hice yo antes. Ninguno de los fondos estaba reciclado, o repetido como s suele hacer para ahorrar tiempo. Todos los detalles habían sido escogidos cuidadosamente y todo estaba mapeado en 3-D. Me preguntaba cuantos artistas del CG habían trabajado en renderizar la imagen de la iglesia sola, antes que el mapa estuviera terminado. Para un juego comercial esto no era muy normal.
	“Con esa complejidad, esta zona debe ser importante para ganar en el juego, ¿no? Pero-Y admito que no lo leí detalladamente-¿qué eventos se hacen?”
	“Nada.”
	“¿Nada?”
	

<br/>
<br/>
“Nada. Incluso no tiene ningún monstruo. No hay mazmorras escondidas, ni pasadizos secretos, ninguna trampa que desactivar ni tesoros que encontrar. Aquí no pasa nada.”
	“¿Y por qué tanto tiempo creando este lugar?”
	“Al parecer, antes si que habían eventos.”
	“¿En que versión?”
	“Beta. Pero no era nada importante. Nada que ver con ganar en el juego.”
	Oí un murmullo de los soldados murmurando que ellos nunca habían oído sobre eso. De repente, me di cuenta de que era el único de allí que había jugado a la versión vieja. ¿Era tan viejo?
	“Un fantasma en la iglesia,” dije.
	“¿Eh?”
	“Cuando Fragment estaba online, había un rumor entre los beta testers, que aparecía un fantasma en la iglesia.”
	“¿Un personaje fantasma?”
	“Eso parecía, un treinta añero. Obviamente, no sabemos como era el que controlaba al personaje, pero así era su avatar. Tenía la cara demacrada, ojos verdes, y tenía el pelo blanco y desordenado. Se rumoreaba que siempre aparecía boca abajo.”
	“¿El qué?”
	Me encogí de hombros. 
	“¿Y qué hacía el fantasma?”
	“Nada. Eso era lo raro. Simplemente aparecía en la iglesia. No decía nada, no hacía nada, y ningún ataque o magia le hacían efecto.”
	“¿Eh?”
	“Todo esto es sólo especulación.”
	“Quiere decir un rumor.”
	“Eso es lo que he dicho. Después de que el test de la versión beta se terminó y la versión final de The World vio la luz, el fantasma no apareció más.”
	“¿Era un fallo del sistema”?
	Inspiré profundamente. ¿Nadie les había contado nada a esos reclutas? A lo mejor ahora se centraban más en la teoría y en el código. Estaba a punto de continuar cuando vi algo que se movía en una esquina de mi campo de visión. Instintivamente seguí el movimiento. No podía creer lo que vi. 
	Era la chica.
	Su imagen se reflejaba en el suelo liso y pulido. Flotaba por encima de nosotros, casi en el techo. De alguna manera se había librado de ser borrada. ¿Cómo lo hizo?
	“¡Arriba!” grité yo.
	Los caballeros, sin percibir peligro, reaccionaron muy lento. Se dirigió a la puerta. 
	“Cubrid la puerta,” ordené. “¡Cubrid todas las entradas!”
	¿Cómo podía volar? Si no había escaleras, los personajes no se podían mover arriba o abajo en los mapas de 3-D. Volar estaba contra las normas del juego, pero eso no parecía que la detuviera para desafiar a la gravedad del juego.
	Los soldados estaban reaccionando muy lentamente. Estaba a punto de escaparse. Sólo tenía una oportunidad. Puse la mira sobre ella y activé los comandos de debug. Por suerte aun estaba en el rango de alcance. Balanceé mi lanza. Hubo un familiar haz de luz que envolvió a la chica. Y entonces…
	Un ruido ensordecedor se metió por mis oídos. La imagen del juego empezó a difuminarse y hacerse borrosa. La chica se desintegró en un haz de luz blanca, y en vez de desaparecer, se convirtió en una bola de luz roja. 
	Era imposible. Le di un golpe directo, pero no se borró.
	“¡Paradla!” grité. 
	Pero ya fue tarde. Miraba en vano como la voz de luz roja pasaba a través de mis soldados, y como una bala abrió la puerta de la iglesia. 
	Fui a perseguirla, pero comparado con su velocidad de la luz, parecía que tardaba una eternidad para llegar a la salida. 
	Cuando llegué, intenté tenerla a tiro, pero era demasiado rápida, demasiado lejos. Vi como cruzaba el cielo como un rayo. 
	La iglesia estaba en una isla en medio de un lago. La luz de la bola roja, cruzando el cielo del crepúsculo, y estalló como los fuegos artificiales de verano.
	Una lluvia de chispas rojas caían desde el cielo mientras me decía a mi mismo, “Se ha ido.”
	Detrás de mi, oí a los péndulos.
	Tick-tock, tick-tock… "
);

$pag->vista();
?>		
</body>
</html>