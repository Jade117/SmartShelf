 // NO按下通電；NC按下不通電
 // Slave端 （Mega）
#include <Console.h>
#include <Keypad.h>   // 引用 Keypad library
#include <Wire.h>
#define SLAVE_ADDRESS 0x12
#define SERIAL_BAUD 57600 
#define I2C_BUFFER_SIZE 32  

uint8_t i2cBuffer[I2C_BUFFER_SIZE];
uint8_t i2cBufferCnt = 0;

const byte ROWS = 3; //6 rows    // 6x12 Keypad
const byte COLS = 3; //12 columns

char keys[ROWS][COLS] = {     // 定義 Keypad 的按鍵，Yun(一櫃)最多可放72商品
  {'0', '1', '2'},
  {'3', '4', '5'},
  {'6', '7', '8'}
};

void setup() {
  Wire.begin(SLAVE_ADDRESS);    // join I2C bus as a slave with address 1
  Wire.onRequest(requestEvent); // register event
  
  Serial.begin(SERIAL_BAUD);
  Serial.println("I2C Slave.04 started\n");
}
 

// 定義 Keypad 連到 Arduino 的接腳
byte rowPins[ROWS] = {A0, A1, A2};  // 連到 Keypad 的 2 個 Rows: Row0, Row1
byte colPins[COLS] = {13, 12, 11};  // 連到 Keypad 的 2 個 Columns: Column0, Column1
int i=0;

Keypad keypad = Keypad( makeKeymap(keys), rowPins, colPins, ROWS, COLS );   // 建立 Keypad 物件

char key[10];   // 讀取 Keypad 的輸入
void loop()
{
    
  
    key[i] = keypad.getKey();   // 讀取 Keypad 的輸入
    if(i==10){
      i=0;
    }else{
      i++;  
    }  
    /*
    if (key){   // 代表有按鍵被按下
      String id;
      switch(key){
          case 80: id="80"; break;
          case 81: id="81"; break;
          case 82: id="82"; break;
          case 83: id="83"; break;
          case 84: id="84"; break;
          case 85: id="85"; break;
          case 86: id="86"; break;
          case 87: id="87"; break;
          case 88: id="88"; break;
      }
      Serial3.write(key);    // 就印出按鍵對應的字元
      Serial.print(key);
      Serial.print(" Success\n");
    }*/
}

void requestEvent()
{
    Wire.write(key,10);
    //Wire.write("Yep, it works",13);
}

/*
#include <Wire.h>
#define SLAVE_ADDRESS 0x12
#define SERIAL_BAUD 57600 
 
#define I2C_BUFFER_SIZE 32  
uint8_t i2cBuffer[I2C_BUFFER_SIZE];
uint8_t i2cBufferCnt = 0;
 
void setup() {
  Wire.begin(SLAVE_ADDRESS);    // join I2C bus as a slave with address 1
  Wire.onRequest(requestEvent); // register event
  
  Serial.begin(SERIAL_BAUD);
  Serial.println("I2C Slave.04 started\n");
}
 
void loop() {
}
 
void requestEvent()
{
  Wire.write("Yep, it works",8);
}*/


