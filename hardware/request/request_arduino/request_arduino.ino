#include <SPI.h>
#include <WiFi.h>
#include <Bridge.h>
#include <HttpClient.h>

char ssid[] = "WiFi-2.4-B948";
char pass[] = "wwnpen5z62d4a";
int keyIndex = 0;

int status = WL_IDLE_STATUS;
char server[] = "restaumator.com";

int fsrPin = 0;
int fsrPortemonee = 1;

int fsrReading;
int fsrReadingPortemonee;

int fullForce=440;
int emptyForce=430;
int minPortemoneeForce = 250;

HttpClient client;


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
      client.get("https://www.restaumator.com/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1");
      Serial.print(fsrReading);
      Serial.print("LEEG EN");
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN NIET BETALEN!");
    }
    
    else if(fsrReading < emptyForce)
    {
      client.get("https://www.restaumator.com/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1");
      Serial.print(fsrReading);
      Serial.print("LEEG");
    }
    
    else if(fsrReadingPortemonee < minPortemoneeForce)
    {
      client.get("https://www.restaumator.com/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1");
      Serial.print('\n');
      Serial.print(fsrReadingPortemonee);
      Serial.print("NIET BETALEN!");
    }
    
  }

  if(fsrReading > fullForce || fsrReadingPortemonee > minPortemoneeForce ) {
    if(fsrReading > fullForce && fsrReadingPortemonee > minPortemoneeForce) {
    client.get("https://www.restaumator.com/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0");
      Serial.print(fsrReading);
      Serial.print("VOL EN");
      client.get("https://www.restaumator.com/setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0");
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN BETALEN");
    }
    else if(fsrReading > fullForce) {
      client.get("https://www.restaumator.com/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0");
      Serial.print(fsrReading);
      Serial.print("VOL EN");
    }
     else if(fsrReadingPortemonee > minPortemoneeForce) {
      client.get("https://www.restaumator.com/setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0");
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN BETALEN");
    }
  }
  delay(3000);
}
