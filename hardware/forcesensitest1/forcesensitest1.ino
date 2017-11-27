int fsrPin = 0;
int fsrReading; 

void setup(void) {
  Serial.begin(9600);   
}
 
void loop(void) {
  fsrReading = analogRead(fsrPin);  
 Serial.print('\n');
  Serial.print(" - Analog reading = ");
  Serial.print(fsrReading);     // the raw analog reading
  delay(1000);
}
