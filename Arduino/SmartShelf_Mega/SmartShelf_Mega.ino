#include <Bridge.h>
#include <Console.h>
#include <YunClient.h>
#include <SoftwareSerial.h>
#include <Keypad.h>   // 引用 Keypad library
// Serial1 on pins 0 (RX) and 1 (TX); Serial is microUSB; USB is power
// NO按下通電；NC按下不通電

const byte ROWS = 3; //6 rows    // 6x12 Keypad
const byte COLS = 3; //12 columns
char keys[ROWS][COLS] = {     // 定義 Keypad 的按鍵，Yun(一櫃)最多可放72商品
  {'0', '1', '2'},
  {'3', '4', '5'},
  {'6', '7', '8'}
};

// 定義 Keypad 連到 Arduino 的接腳
byte rowPins[ROWS] = {A0, A1, A2};  // 連到 Keypad 的 2 個 Rows: Row0, Row1
byte colPins[COLS] = {13, 12, 11};  // 連到 Keypad 的 2 個 Columns: Column0, Column1
 
Keypad keypad = Keypad( makeKeymap(keys), rowPins, colPins, ROWS, COLS );   // 建立 Keypad 物件

void setup(){
  Serial3.begin(9600);
}

void loop()
{
    char key = keypad.getKey();   // 讀取 Keypad 的輸入
	
    if (key){   // 代表有按鍵被按下
     /* String id;
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
      }*/
		  Serial3.write(key);    // 就印出按鍵對應的字元
    }
}
