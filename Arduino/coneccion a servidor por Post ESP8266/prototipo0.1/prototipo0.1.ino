



#include <ESP8266WiFi.h>

//const char* ssid     = "LosNonos";
//const char* password = "oscarimelda2826";
const char* ssid     = "MEGACABLE-EA";
const char* password = "BCD1657B49EA";
const char* host = "192.168.1.28";


void setup() {
  Serial.begin(115200);
  delay(10);

  // Nos conectamos a nuestro wifi

  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

int value = 0;

void loop() {
  delay(10000);
  ++value;

  Serial.print("connecting to ");
  Serial.println(host);

  // Creamos una instancia de WIFICLIENT 
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }

  // Creamos la direcciÃ³n para luego usarla en el String del POST que tendremos que enviar
  String url = "http://192.168.1.28/1/entrada_datos.php";
  // creo un string con los datos que enviarÃ© por POST lo creo de antemano para luego poder calcular el tamaÃ±o del string dato que necesitare para enviar por post
  String data = "serie=777&temp=33";

  //imprimo la url a donde enviaremos la solicitud, solo para debug
  Serial.print("Requesting URL: ");
  Serial.println(url);

  // Esta es la solicitud del tipoPOST que enviaremos al servidor
  client.print(String("POST ") + url + " HTTP/1.0\r\n" +
               "Host: " + host + "\r\n" +
               "Accept: *" + "/" + "*\r\n" +
               "Content-Length: " + data.length() + "\r\n" +
               "Content-Type: application/x-www-form-urlencoded\r\n" +
               "\r\n" + data);
  delay(10);

  // Leemos todas las lineas que nos responde el servidor y las imprimimos por pantalla, esto no es necesario  pero es fundamental ver quÃ¨ me responde el servidor para localizar fallas en la solicitud post que estoy enviando, 
  Serial.println("Respond:");
  while(client.available()){
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }

  Serial.println();

  // se cierra la conexiÃ³n

  Serial.println("closing connection");

}





