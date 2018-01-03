#include <Wire.h>
#include <UnoWiFiDevEd.h>

int fsrPin = 0;
int fsrPortemonee = 1;

int fsrReading;
int fsrReadingPortemonee;

int fullForce=440;
int emptyForce=430;
int minPortemoneeForce = 250;


const char* connector = "rest";
const char* server = "restaumator.robbertluit.be";
const char* method = "GET";

const char* activate = "/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1";
const char* deactivate = "/setdrinkiconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0";

const char* activatePortemonee = "/setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/1";
const char* deactivatePortemonee = "/setbilliconfortable/1/restaurant/1/hash/hLWriokZEZpnX3iXVlzOwJxaM3a3SsqE/action/0";

void setup() {
  Serial.begin(9600);
  Ciao.begin();
  pinMode(2, INPUT);
}

void doRequest(const char* conn, const char* server, char* command, const char* method){
  CiaoData data = Ciao.write(conn, server, command, method);
  if (!data.isEmpty()){
    Ciao.println( "State: " + String (data.get(1)) );
    Ciao.println( "Response: " + String (data.get(1)) );
    Serial.println( "State: " + String (data.get(1)) );
    Serial.println( "Response: " + String (data.get(1)) );
  }
  else{
    Serial.print('\n');
    Serial.println ("Drink Connection Error");
  }
}

void doPortemoneeRequest(const char* conn, const char* server, char* command, const char* method){
  CiaoData data = Ciao.write(conn, server, command, method);
  if (!data.isEmpty()){
    Ciao.println( "State: " + String (data.get(1)) );
    Ciao.println( "Response: " + String (data.get(1)) );
    Serial.println( "State: " + String (data.get(1)) );
    Serial.println( "Response: " + String (data.get(1)) );
  }
  else{
    Serial.print('\n');
    Serial.println ("Portemonee Connection Error");
  }
}



void loop(void) {
  int fsrReading = analogRead(fsrPin); 
  int fsrReadingPortemonee = analogRead(fsrPortemonee);
  
  if(fsrReading < emptyForce || fsrReadingPortemonee < minPortemoneeForce) {
    if(fsrReading < emptyForce && fsrReadingPortemonee < minPortemoneeForce) {
      Serial.print('\n');
      doRequest(connector, server, activate, method);
      Serial.print(fsrReading);
      Serial.print("LEEG EN");
      doPortemoneeRequest(connector, server, activatePortemonee, method);
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN NIET BETALEN!");
    }
    else if(fsrReading < emptyForce)
    {
      doRequest(connector, server, activate, method);
      Serial.print('\n');
      Serial.print(fsrReading);
      Serial.print("LEEG");
    }
    else if(fsrReadingPortemonee < minPortemoneeForce)
    {
      doPortemoneeRequest(connector, server, activatePortemonee, method);
      Serial.print('\n');
      Serial.print(fsrReadingPortemonee);
      Serial.print("NIET BETALEN!");
    }
  }
  
  if(fsrReading > fullForce || fsrReadingPortemonee > minPortemoneeForce ) {
    if(fsrReading > fullForce && fsrReadingPortemonee > minPortemoneeForce) {
      doRequest(connector, server, activatePortemonee , method);
      Serial.print('\n');
      Serial.print(fsrReading);
      Serial.print("VOL EN");
      doPortemoneeRequest(connector, server, deactivatePortemonee, method);
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN BETALEN");
    }
    else if(fsrReading > fullForce) {
      doRequest(connector, server, deactivate , method);
      Serial.print(fsrReading);
      Serial.print("VOL EN");
    }
     else if(fsrReadingPortemonee > minPortemoneeForce) {
      doPortemoneeRequest(connector, server, deactivatePortemonee, method);
      Serial.print(fsrReadingPortemonee);
      Serial.print("EN BETALEN");
    }
  } 
}

