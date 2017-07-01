/*CIRCUITO:
 * BUZZER A PIN 8
 
 * NFC SDA A PIN 10
 * NFC SCK A PIN 13
 * NFC MOSI A PIN 11
 * NFC RST A PIN 9
 * NFC 3.3 V A 3.3V
 
 * LCD RS pin a digital pin 7
 * LCD Enable pin a digital pin 6
 * LCD D4 pin a digital pin 5
 * LCD D5 pin a digital pin 4
 * LCD D6 pin a digital pin 3
 * LCD D7 pin a digital pin 2
 * LCD R/W pin a ground
 * LCD VSS pin a ground
 * LCD VCC pin a 5V
 * 10K resistor: led
 * ends to +5V and ground
 * wiper to LCD VO pin (pin 3)
*/

#include <SPI.h>
#include <MFRC522.h>
#include <LiquidCrystal.h>  //Biblioteca necesaria para LCDs

#define RST_PIN  9    //Pin 9 para el reset del RC522
#define SS_PIN  10   //Pin 10 para el SS (SDA) del RC522
int buzzer = 8;//Pin 8 para el buzzer
MFRC522 mfrc522(SS_PIN, RST_PIN); ///Creamos el objeto para el RC522
LiquidCrystal lcd(7, 6, 5, 4, 3, 2);//Iniciamos los pines a utilizar

void setup() {
  pinMode(buzzer, OUTPUT);   // es donde tenemos conectado el Buzzer
 lcd.begin(16, 2); //Expresamos el numero de columnas y filas de nuestro LCD 
  Serial.begin(9600); //Iniciamos La comunicacion serial
  SPI.begin();    
  //Iniciamos el Bus SPI
  mfrc522.PCD_Init(); // Iniciamos el MFRC522
  Serial.println("Control de acceso:");
  lcd.print("  BIENVENIDOS!!");//Imprimimos el mensaje deseado en el LCD
}

byte ActualUID[4]; //almacenará el código del Tag leído
byte Usuario1[4]= {0xCF, 0x2B, 0xC3, 0x27} ; //código del usuario 1
byte Usuario2[4]= {0x65, 0xAE, 0x92, 0x03} ; //código del usuario 2

void loop() {
  
  //Preparamos el cursor en la columna 0 de la linea 1
 //Esto indica donde comenzara a imprimirse el texto
 
  
  // Revisamos si hay nuevas tarjetas  presentes
  if ( mfrc522.PICC_IsNewCardPresent()) 
        {  
      //Seleccionamos una tarjeta
            if ( mfrc522.PICC_ReadCardSerial()) 
            {
                  // Enviamos serialemente su UID
                  Serial.print(F("Card UID:"));
                  for (byte i = 0; i < mfrc522.uid.size; i++) {
                          Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
                            //lcd.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");//Imprimimos el mensaje deseado en el LCD
                          Serial.print(mfrc522.uid.uidByte[i], HEX); 
                            //lcd.print(mfrc522.uid.uidByte[i], HEX);//Imprimimos el mensaje deseado en el LCD
                          ActualUID[i]=mfrc522.uid.uidByte[i];          
                  } 
                  Serial.print("     ");                 
                  //comparamos los UID para determinar si es uno de nuestros usuarios  
                  if(compareArray(ActualUID,Usuario1)){
                    Serial.println(" Concedido...");
                    
                    lcd.print("    PASE  "); 
                    
                    digitalWrite(buzzer, HIGH); //deja de emitir
                      delay(100);//espera medio segundo 
                      digitalWrite(buzzer, LOW); //deja de emitir
                        delay(100);
                      digitalWrite(buzzer, HIGH); //deja de emitir
                      delay(100);//espera medio segundo 
                      digitalWrite(buzzer, LOW);} //deja de emitir
              
                  else if(compareArray(ActualUID,Usuario2)){
                    Serial.println(" Concedido...");
                    
                    lcd.print("      PASE  ");
                  
                      digitalWrite(buzzer, HIGH); //deja de emitir
                      delay(100);//espera medio segundo 
                      digitalWrite(buzzer, LOW); //deja de emitir
                        delay(100);
                      digitalWrite(buzzer, HIGH); //deja de emitir
                      delay(100);//espera medio segundo 
                      digitalWrite(buzzer, LOW);} //deja de emitir
                      
                  else
                   { Serial.println("Denegado...");
                    lcd.print("   DENEGADO! ");

                    digitalWrite(buzzer, HIGH); //deja de emitir
                      delay(400);//espera medio segundo 
                      digitalWrite(buzzer, LOW);} //deja de emitir
                        
                  
                  // Terminamos la lectura de la tarjeta tarjeta  actual
                  mfrc522.PICC_HaltA();
          
            }
      
  }
  lcd.setCursor(0,1);
  delay(1500);
  lcd.print("                  ");
  lcd.setCursor(0,1);
}

//Función para comparar dos vectores
 boolean compareArray(byte array1[],byte array2[])
{
  if(array1[0] != array2[0])return(false);
  if(array1[1] != array2[1])return(false);
  if(array1[2] != array2[2])return(false);
  if(array1[3] != array2[3])return(false);
  return(true);
}
