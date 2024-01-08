//問1
document.write("問1<br>");

//変数a1を初期値1で設定、★を一つwriteしたらa1を1増加させて、条件a1<=5まで繰り返す。
for (var star = 0; star < 5; star++) {
//for (var a1 = 1; a1 <= 5; a1 ++) {
  document.write("★");
}
document.write("<br>");

//問2
document.write("<br>問2<br>");

//変数a1を初期値1で設定、入れ子のfor文が完了したら改行してa1を1増加、条件a1<=2まで繰り返す。
for (var a1 = 1; a1 <= 2; a1 ++) {
//変数a2を初期値1で設定、★を一つwriteしたらa2を1増加させて、条件a2<=3まで繰り返す。
  for (var a2 = 1; a2 <= 3; a2 ++) {
    document.write("★");
  }
  document.write("<br>");
}

//問3、問2と同様
document.write("<br>問3<br>");

for (var a1 = 1; a1 <= 2; a1 ++) {
  for (var a2 = 1; a2 <= 5; a2 ++) {
    document.write("☆");
  }
  document.write("<br>");
}

//問4、問2と同様
document.write("<br>問4<br>");

for (var a1 = 1; a1 <= 4; a1 ++) {
  for (var a2 = 1; a2 <= 5; a2 ++) {
    document.write("★");
  }
  document.write("<br>");
}

//問5、問2と同様
document.write("<br>問5<br>");

for (var a1 = 1; a1 <= 4; a1 ++) {
  for (var a2 = 1; a2 <= 3; a2 ++) {
    document.write("★");
  }
  document.write("<br>");
}

//問6
document.write("<br>問6<br>");

//変数a1を初期値1で設定、入れ子のfor文が完了したら改行してa1を1増加、条件a1<=3まで繰り返す。
for (var a1 = 1; a1 <= 3; a1 ++) {
//変数a2を初期値1で設定、入れ子のif文が完了したらa2を1増加、条件a2<=3まで繰り返す。
  for (var a2 = 1; a2 <= 3; a2 ++) {
//変数a2を2で割って、余りが1（奇数）の場合★をwrite、余りが2（偶数）の場合☆をwriteして次へ進む。
    if (a2 % 3 == 0){
      document.write("★");
    } else {
      document.write("☆");
    }
  }
  document.write("<br>");
}

//問7、問6と同様
document.write("<br>問7<br>");

for (var a1 = 1; a1 <= 4; a1 ++) {
  for (var a2 = 1; a2 <= 5; a2 ++) {
    if (a2 % 2 == 1){
      document.write("★");
    } else {
      document.write("☆");
    }
  }
  document.write("<br>");
}

//問8
document.write("<br>問8<br>");

//変数a1を初期値1で設定、入れ子のfor文が完了したら改行してa1を1増加、条件a1<=5まで繰り返す。
for (var a1 = 1; a1 <= 5; a1 ++) {
//変数a2を初期値2で設定、★をwriteしてa2を1増加させる。行に★を書く回数と行数（=a1）が同じため、条件式をa2<=a1とする。
  for (var a2 = 1; a2 <= a1; a2 ++) {
    document.write("★");
  }
  document.write("<br>");
}
