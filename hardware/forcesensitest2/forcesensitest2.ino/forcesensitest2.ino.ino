int fsrPin = 0;
int fsrReading; 
int fullForce=300;
int emptyForce=200;

void setup(void) {
  Serial.begin(9600);   
}
 
void loop(void) {
  fsrReading = analogRead(fsrPin);  
  Serial.print('\n');
  if(fsrReading < emptyForce)
  {
    Serial.print('\n');
    Serial.print(fsrReading);
    Serial.print(" LEEG");
  }
  if(fsrReading > fullForce)
  {
    Serial.print('\n');
    Serial.print(fsrReading);
    Serial.print(" VOL");
  }
  delay(1000);
}
