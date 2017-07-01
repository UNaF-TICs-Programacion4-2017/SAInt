//Control de pantalla LCD
 
#include <LiquidCrystal.h> //Biblioteca necesaria para LCDs
 
//Iniciamos los pines a utilizar
LiquidCrystal lcd(7,6,5,4,3,2);
 
void setup() {
 //Expresamos el numero de columnas y filas de nuestro LCD
 lcd.begin(16, 2);
 //Imprimimos el mensaje deseado en el LCD
 lcd.print("Comohacer.eu");
}
 
void loop() {
 //Preparamos el cursor en la columna 0 de la linea 1
 //Esto indica donde comenzara a imprimirse el texto
 lcd.setCursor(0,1);
}
