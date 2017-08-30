Bienenidos:

Test de Sondeos, realizado por Rogelio Arzola.

Este proyecto realiza la suma de 2 string con numeros binarios, sin 
convertirlos previamente a decimal, ejecutando la adicion bit por bit.
Trabaja con un maximo de 16bit por string, aunque la lógica funciona
para tamaños cualquiera.

Para la instalación de este proyecto, descargue la carpeta y descomprima
en el directorio fuente de su servidor Apache, luego abrá el archivo 
index.php desde la ruta especificada y listo.

Se trabaja la recepcion de los datos necesarios con lenguajes de 
frontEnd, html, css y javaScript (usando jQuery por facilidad para
realizar la validacion de los strings) y se ejecuta la funcionalidad
con PHP.

Pruebas unitaria:
1) Colocar caracteres diferentes a 1 o 0 en los inputs
2) 1:0 en los inputs
3) 10:0 en los inputs
4) 0010:101 en los inputs
5) 11:010 en los inputs
6) 101:11 en los inputs
7) Realizar suma con los 16bits de los inputs llenos

De igual manera, y espero no sea inconveniente, realize un conversor
de binario a decimal (solo en el frontEnd con javascript) para poder
revisar el resultado de la suma.

Muchas gracias.

