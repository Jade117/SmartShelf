// NO按下通電；NC按下不通電
#include <Bridge.h>
#include <Console.h>
#include <YunClient.h>
#include <Keypad.h>   // 引用 Keypad library
#include <Wire.h>

#define SLAVE_ADDRESS 0x12
#define SERIAL_BAUD 9600
#define DATA_SIZE 14

const byte ROWS = 6; //6 rows    // 6x12 Keypad
const byte COLS = 12; //12 columns

char keys[ROWS][COLS] = {     // 定義 Keypad 的按鍵，Yun(一櫃)最多可放72商品
  //{"grid 2017-08-27 19:24:22","grid 2017-08-27 19:31:01"},
  //{"grid 2017-08-27 20:26:40","grid 2017-08-27 20:32:21"}
  {1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12},
  {13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24},
  {25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36},
  {37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48},
  {49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60},
  {61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72}
};

// 定義 Keypad 連到 Arduino 的接腳
byte rowPins[ROWS] = {A0, A1, A2, A3, A4, A5};  // 連到 Keypad 的 2 個 Rows: Row0, Row1
byte colPins[COLS] = {13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2};  // 連到 Keypad 的 2 個 Columns: Column0, Column1
 
Keypad keypad = Keypad( makeKeymap(keys), rowPins, colPins, ROWS, COLS );   // 建立 Keypad 物件

char buffer[1000];   //設定字串長度
int temp;
int temp2;
int temp3;
int look = 0;
int think = 0;
unsigned long ThisTime = 0;

void setup()
{
  Wire.begin();
  Bridge.begin();
  Console.begin();
  //Serial.begin(SERIAL_BAUD);
}

IPAddress server(192,168,1,73); // 設定wifi的IP
YunClient client;

void loop()
{
  if (client.connect(server, 80))   // 連上Server
  {
    char key = keypad.getKey();   // 讀取 Keypad 的輸入
    if (key){   // 代表有按鍵被按下
      String id;
      switch(key){
          case 1: id="1"; break;
          case 2: id="2"; break;
          case 3: id="3"; break;
          case 4: id="4"; break;
          case 5: id="5"; break;
          case 6: id="6"; break;
          case 7: id="7"; break;
          case 8: id="8"; break;
          case 9: id="9"; break;
          case 10: id="10"; break;
          case 11: id="11"; break;
          case 12: id="12"; break;
          case 13: id="13"; break;
          case 14: id="14"; break;
          case 15: id="15"; break;
          case 16: id="16"; break;
          case 17: id="17"; break;
          case 18: id="18"; break;
          case 19: id="19"; break;
          case 20: id="20"; break;
          case 21: id="21"; break;
          case 22: id="22"; break;
          case 23: id="23"; break;
          case 24: id="24"; break;
          case 25: id="25"; break;
          case 26: id="26"; break;
          case 27: id="27"; break;
          case 28: id="28"; break;
          case 29: id="29"; break;
          case 30: id="30"; break;
          case 31: id="31"; break;
          case 32: id="32"; break;
          case 33: id="33"; break;
          case 34: id="34"; break;
          case 35: id="35"; break;
          case 36: id="36"; break;
          case 37: id="37"; break;
          case 38: id="38"; break;
          case 39: id="39"; break;
          case 40: id="40"; break;
          case 41: id="41"; break;
          case 42: id="42"; break;
          case 43: id="43"; break;
          case 44: id="44"; break;
          case 45: id="45"; break;
          case 46: id="46"; break;
          case 47: id="47"; break;
          case 48: id="48"; break;
          case 49: id="49"; break;
          case 50: id="50"; break;
          case 51: id="51"; break;
          case 52: id="52"; break;
          case 53: id="53"; break;
          case 54: id="54"; break;
          case 55: id="55"; break;
          case 56: id="56"; break;
          case 57: id="57"; break;
          case 58: id="58"; break;
          case 59: id="59"; break;
          case 60: id="60"; break;
          case 61: id="61"; break;
          case 62: id="62"; break;
          case 63: id="63"; break;
          case 64: id="64"; break;
          case 65: id="65"; break;
          case 66: id="66"; break;
          case 67: id="67"; break;
          case 68: id="68"; break;
          case 69: id="69"; break;
          case 70: id="70"; break;
          case 71: id="71"; break;
          case 72: id="72"; break;
      }
      Console.print("Now Send To Product ");
      Console.println(id);   // 就印出按鍵對應的字元
      unsigned long NextTime = millis();
      unsigned long ElapsedTime = NextTime - ThisTime;
      if( 10000 > ElapsedTime & ElapsedTime >= 3000 ) {
        look = look+1;
        sprintf(buffer, "HEAD /SmartShelf/row.php?temp=%d?$temp3=%d HTTP/1.1", look, key );     // localhost下的絕對路徑
        client.println(buffer);   //將字串傳到網頁端
      }
      if( 60000 > ElapsedTime & ElapsedTime >= 10000) {
        think = think +1;
        sprintf(buffer, "HEAD /SmartShelf/row.php?temp2=%d?&temp3=%d HTTP/1.1", think, key );     // localhost下的絕對路徑
        client.println(buffer);   //將字串傳到網頁端
      }
      //Console.println(ElapsedTime);
      Console.print("Look  Value ");
      Console.println(look);    //稍微看看
      Console.print("Think Value ");
      Console.println(think);   //非常猶豫
      Console.println();
      client.println("Host: localhost");
      client.println("Connection: Close");
      client.println();
      ThisTime = NextTime;
    }
	  if (Console.available()) {
    		Wire.requestFrom(SLAVE_ADDRESS, DATA_SIZE);
    		Wire.beginTransmission(SLAVE_ADDRESS);
    		Console.print("Data returned: ");
    		while (Wire.available()) Console.print((char) Wire.read());
    		Console.println();
    		//Wire.endTransmission();
    		while (Console.available()) Console.read(); // Clear the serial buffer, in this example, just request data from slave
	  }
    client.stop();  //讓YunClient/YunServer可以超過256個迴圈
	}else{
     Console.println("Connection failed");
    }	  
}

