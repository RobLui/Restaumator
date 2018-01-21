#include <Wire.h>
#include <SPI.h>
#include <WiFi.h>

char ssid[] = "WiFi-2.4-B948";
char pass[] = "wwnpen5z62d4a";
int keyIndex = 0;

int status = WL_IDLE_STATUS;
char server[] = "restaumator.com";
WiFiClient client;

int fsrPin = 0;
int fsrPortemonee = 1;

int fsrReading;
int fsrReadingPortemonee;

int fullForce=440;
int emptyForce=430;
int minPortemoneeForce = 250;

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
  int fsrReading = analogRead(fsrPin);
  int fsrReadingPortemonee = analogRead(fsrPortemonee);

  if(fsrReading < emptyForce || fsrReadingPortemonee < minPortemoneeForce) {
    
    if(fsrReading < emptyForce && fsrReadingPortemonee < minPortemoneeForce) {
      
      if (client.connect(server, 80)) {
        Serial.println("connected to server");
         // Make a HTTP request:
        client.println("GET /setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1 HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.stop();
        Serial.print('\n');}
      Serial.print(fsrReading);
      Serial.print("LEEG EN");
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN NIET BETALEN!");
    }
    
    else if(fsrReading < emptyForce)
    {
      if (client.connect(server, 80)) {
        Serial.println("connected to server");
         // Make a HTTP request:
        client.println("GET /setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1 HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.stop();
        Serial.print('\n');
      Serial.print('\n');
      }
      Serial.print(fsrReading);
      Serial.print("LEEG");
    }
    
    else if(fsrReadingPortemonee < minPortemoneeForce)
    {
     if (client.connect(server, 80)) {
        Serial.println("connected to server");
         // Make a HTTP request:
        client.println("GET /setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1 HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.stop();
        Serial.print('\n');
        Serial.print('\n');
      }
      Serial.print('\n');
      Serial.print(fsrReadingPortemonee);
      Serial.print("NIET BETALEN!");
    }
    
  }

  if(fsrReading > fullForce || fsrReadingPortemonee > minPortemoneeForce ) {
    if(fsrReading > fullForce && fsrReadingPortemonee > minPortemoneeForce) {

    if (client.connect(server, 80)) {
      Serial.println("connected to server");
       // Make a HTTP request:
      client.println("GET /setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0 HTTP/1.1");
      client.println("Host: restaumator.com");
      client.println("Connection: close");
      client.println();
      client.stop();
      Serial.print('\n');
      Serial.print('\n');
    }
      Serial.print(fsrReading);
      Serial.print("VOL EN");
      
      if (client.connect(server, 80)) {
        Serial.println("connected to server");
         // Make a HTTP request:
        client.println("GET /setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0 HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.stop();
        Serial.print('\n');
        Serial.print('\n'); 
      }
      
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN BETALEN");
    }
    else if(fsrReading > fullForce) {
         if (client.connect(server, 80)) {
        Serial.println("connected to server");
         // Make a HTTP request:
        client.println("GET /setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0 HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.stop();
        Serial.print('\n');
      }
      Serial.print(fsrReading);
      Serial.print("VOL EN");
    }
     else if(fsrReadingPortemonee > minPortemoneeForce) {
      if (client.connect(server, 80)) {
        Serial.println("connected to server");
         // Make a HTTP request:
        client.println("GET /setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0 HTTP/1.1");
        client.println("Host: restaumator.com");
        client.println("Connection: close");
        client.println();
        client.stop();
      }
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN BETALEN");
    }
  }
  delay(3000);
}
