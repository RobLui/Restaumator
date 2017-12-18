#include <Wire.h>
#include <UnoWiFiDevEd.h>

int fsrPin = 0;
int fsrReading; 
int fullForce=300;
int emptyForce=200;

const char* connector = "rest";
const char* server = "restaumator.robbertluit.be";
const char* method = "GET";
const char* activate = "/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1";
const char* deactivate = "/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0";

void setup() {
  Serial.begin(9600);
  Ciao.begin();
  pinMode(2, INPUT);
}

void doRequest(const char* conn, const char* server, const char* command, const char* method){
  CiaoData data = Ciao.write(conn, server, command, method);
  if (!data.isEmpty()){
    Ciao.println( "State: " + String (data.get(1)) );
    Ciao.println( "Response: " + String (data.get(1)) );
    Serial.println( "State: " + String (data.get(1)) );
    Serial.println( "Response: " + String (data.get(1)) );
  }
  else{
    Ciao.println ("hehe");
    Serial.println ("hehe");
  }
}

void loop(void) {
  fsrReading = analogRead(fsrPin);  
  Serial.print('\n');
  if(fsrReading < emptyForce)
  {
    doRequest(connector, server, activate, method);
    Serial.print('\n');
    Serial.print(fsrReading);
    Serial.print(" LEEG");
  }
  if(fsrReading > fullForce)
  {
    doRequest(connector, server, deactivate , method);
    Serial.print('\n');
    Serial.print(fsrReading);
    Serial.print(" VOL");
  }
}

