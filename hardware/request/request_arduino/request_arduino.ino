#include <SPI.h>
#include <WiFi.h>
#include <Bridge.h>
#include <HttpClient.h>

char ssid[] = "WiFi-2.4-B948";
char pass[] = "wwnpen5z62d4a";
int keyIndex = 0;

int status = WL_IDLE_STATUS;
char server[] = "www.restaumator.com";

int fsrPin = 0;
int fsrPortemonee = 1;

int fsrReading;
int fsrReadingPortemonee;

int fullForce=440;
int emptyForce=430;
int minPortemoneeForce = 250;

WiFiClient client;

void setup() {
  Serial.begin(9600);
  while (!Serial) {
    ;
  }
  if (WiFi.status() == WL_NO_SHIELD) {
    Serial.println("WiFi shield not present");
    while (true);
  }
  String fv = WiFi.firmwareVersion();
  if (fv != "1.1.0") {
    Serial.println("Please upgrade the firmware");
  }
  while (status != WL_CONNECTED) {
    Serial.print("Attempting to connect to SSID: ");
    Serial.println(ssid);
    status = WiFi.begin(ssid, pass);
    delay(10000);
  }
  Serial.println("Connected to wifi");
    // print the SSID of the network you're attached to:
  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());

  // print your WiFi shield's IP address:
  IPAddress ip = WiFi.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);

  // print the received signal strength:
  long rssi = WiFi.RSSI();
  Serial.print("signal strength (RSSI):");
  Serial.print(rssi);
  Serial.println(" dBm");

  
}

void loop(void) {
    while (client.available()) {
    char c = client.read();
    Serial.write(c);
  };
  int fsrReading = analogRead(fsrPin);
  int fsrReadingPortemonee = analogRead(fsrPortemonee);

  if(fsrReading < emptyForce || fsrReadingPortemonee < minPortemoneeForce) {
    
    if(fsrReading < emptyForce && fsrReadingPortemonee < minPortemoneeForce) {
      if (client.connect(server, 80)) {
        client.println("GET /table_drinkicon_on.php HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.flush();
        client.stop();
        delay(1000);     
      }
      if (client.connect(server, 80)) {
        client.println("GET /table_billicon_off.php HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.flush();
        client.stop();
        delay(1000);     
      }         
      Serial.print(fsrReading);
      Serial.print("LEEG EN");
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN NIET BETALEN!");
    }
    
    else if(fsrReading < emptyForce)
    {
      if (client.connect(server, 80)) {
        client.println("GET /table_drinkicon_on.php HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
         client.flush();
        client.stop();
       }
      Serial.print(fsrReading);
      Serial.print("LEEG");
    }
    
    else if(fsrReadingPortemonee < minPortemoneeForce)
    {
      if (client.connect(server, 80)) {
        client.println("GET /table_billicon_off.php HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.flush();
        client.stop();
      }      
      Serial.print('\n');
      Serial.print(fsrReadingPortemonee);
      Serial.print("NIET BETALEN!");
    }
    
  }

  if(fsrReading > fullForce || fsrReadingPortemonee > minPortemoneeForce ) {
    if(fsrReading > fullForce && fsrReadingPortemonee > minPortemoneeForce) {
      if (client.connect(server, 80)) {
        client.println("GET /table_drinkicon_off.php HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.flush();
        client.stop();
        delay(1000);
       }
      if (client.connect(server, 80)) {
        client.println("GET /table_billicon_on.php HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        delay(1000);      
      }
      Serial.print(fsrReading);
      Serial.print("VOL EN");
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN BETALEN");
    }
    else if(fsrReading > fullForce) {
      if (client.connect(server, 80)) {
        client.println("GET /table_drinkicon_off.php HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.flush();
        client.stop();
       }
       Serial.print(fsrReading);
       Serial.print("ENKEl VOL");
    }
     else if(fsrReadingPortemonee > minPortemoneeForce) {
       if (client.connect(server, 80)) {
              client.println("GET /table_billicon_on.php HTTP/1.1");
              client.println("Host: restaumator.com");
              client.println("Connection: close");
              client.println();
              client.flush();
              client.stop();
            }            
      Serial.print(fsrReadingPortemonee);
      Serial.print("ENKEL BETALEN");
    }
  }
  delay(3000);
}
