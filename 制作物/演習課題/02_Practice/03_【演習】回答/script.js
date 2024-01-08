//問1, 円の面積を求めるfunction
//円周率πをpi = 3.14で設定する。const
var pi = 3.14;
//const pi = 3.14;

//"enMenseki"という関数を作成。半径を変数hankeiと設定し、半径×半径×πの値を出力する。
function enMenseki(hankei) {
//  "use strict";
  return hankei * hankei * pi;
//  return (hankei ** 2) * pi;
}
//(hankei ** 2) * pi じゃだめ？

//半径5cm、7cm、10cmの場合でそれぞれwrite。
document.write(enMenseki(5) + "cm^2");
document.write("<br>");
document.write(enMenseki(7) + "cm^2");
document.write("<br>");
document.write(enMenseki(10) + "cm^2");
document.write("<br>");

//問2, 遊園地の料金を求めるfunction
//"yuuenchi"という関数を作成。大人の人数を変数otona、子供の人数を変数kodomoと設定し、合計金額を変数ryoukinに当てはめて、「合計金額はryoukin円です。」と出力する。
function yuuenchi(otona, kodomo) {
//  "use strict";
  var ryoukin = (otona * 500) + (kodomo * 200);
  return "合計金額は" + ryoukin + "円です。";
}
function hyouji(group, otona, kodomo) {
  return group + " groupの" + yuuenchi(otona, kodomo) + "<br>";
}

//
document.write("A groupの" + yuuenchi(2, 4));
document.write("<br>");
document.write("Bグループの" + yuuenchi(1, 5));
document.write("<br>");
document.write("Cグループの" + yuuenchi(3, 7));
document.write("<br>");
document.write(hyouji("D", 100, 100));
